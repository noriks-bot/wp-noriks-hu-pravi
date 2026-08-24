<?php
/**
 * Podstranica s PDF uputama za NORIKS proizvode.
 *
 * Stranica se kreira jednom iz teme (slug: utmutatok) i koristi predlozak page-upute.php.
 * PDF-ovi stoje lokalno u temi, u mapi /manuals/.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function noriks_manuals_list() {
    return array(
        array(
            'file'  => 'noriks-majice.pdf',
            'sku'   => 'NORIKS-ALL-BLACK-6-PACK',
            'title' => 'NORIKS pólók',
            'sub'   => 'Pamut pólók — méretválasztás, viselés és ápolás.',
        ),
        array(
            'file'  => 'noriks-bokserice.pdf',
            'sku'   => 'NORIKS-BOX-BLACK-5-PACK',
            'title' => 'NORIKS boxeralsók',
            'sub'   => 'Modál boxeralsók — méretek, viselés és ápolás.',
        ),
        array(
            'file'  => 'noriks-kompresijske-carape.pdf',
            'sku'   => array( 'NORIKS-KOMZIPS', 'NORIKS-BOXERS-ORTO-4' ),
            'title' => 'NORIKS kompressziós harisnya cipzárral',
            'sub'   => 'Fokozatos kompresszió 15–20 mmHg oldalsó cipzárral.',
        ),
        array(
            'file'  => 'noriks-kneefix.pdf',
            'sku'   => 'NORIKS-KNEEFIX',
            'title' => 'NORIKS KneeFix — ortopéd térdrögzítő',
            'sub'   => 'Állítható kompresszió, oldalsó merevítők és gélpárna a térdkalácshoz.',
        ),
        array(
            'file'  => 'noriks-bunion-fix.pdf',
            'sku'   => 'NORIKS-BUNION',
            'title' => 'NORIKS Bunion Fix — bütyökkorrektor',
            'sub'   => 'A nagylábujj fokozatos helyreállítása napi 30 perctől 3 óráig.',
        ),
        array(
            'file'  => 'noriks-ortopas.pdf',
            'sku'   => 'NORIKS-ORTOPAS',
            'title' => 'NORIKS ortopéd hátöv',
            'sub'   => 'Célzott kompresszió a derék számára és stabilitás a mindennapi mozgásokhoz.',
        ),
        array(
            'file'  => 'noriks-fisiorest.pdf',
            'sku'   => 'NORIKS-FISIOREST',
            'title' => 'NORIKS FisioRest — nyakkészülék',
            'sub'   => 'Nyújtás, meleg és vibrációs masszázs 15–30 perces kezelésben.',
        ),
        array(
            'file'  => 'noriks-fit-kompresijska-majica.pdf',
            'sku'   => 'NORIKS-KOMPSFIT',
            'title' => 'NORIKS FIT — kompressziós póló',
            'sub'   => 'Testhezálló kompresszió, amely kisimítja a sziluettet és támogatja az egyenes tartást.',
        ),
        array(
            'file'  => 'noriks-leakbox.pdf',
            'sku'   => 'NORIKS-LEAKBOX',
            'title' => 'NORIKS PureDry — mosható inkontinencia boxeralsó',
            'sub'   => 'Akár 300 ml nedvszívás, hétrétegű mag és vízlepergető membrán.',
        ),
        array(
            'file'  => 'noriks-ergosit.pdf',
            'sku'   => 'NORIKS-ERGOSIT',
            'title' => 'NORIKS ErgoSit — ortopéd ülőpárna',
            'sub'   => 'Farokcsont-kivágás és nagy sűrűségű memóriahab a hosszú üléshez.',
        ),
        array(
            'file'  => 'noriks-kidsnest.pdf',
            'sku'   => 'NORIKS-KIDSNEST',
            'title' => 'NORIKS KidsNest — gyerek ortopéd párna',
            'sub'   => 'Három méret, amely a gyermekkel együtt nő, és támogatja a fej helyes tartását.',
        ),
    );
}

/** Slika i poveznica proizvoda po SKU-u — uvijek aktualne, bez rucnog upisa URL-a. */
function noriks_manual_product( $sku ) {
    $out = array( 'img' => '', 'url' => '' );
    if ( ! function_exists( 'wc_get_product_id_by_sku' ) ) { return $out; }

    $pid = 0;
    foreach ( (array) $sku as $candidate ) {
        $pid = wc_get_product_id_by_sku( $candidate );
        if ( $pid ) { break; }
    }
    if ( ! $pid ) { return $out; }

    $out['url'] = get_permalink( $pid );
    $out['img'] = get_the_post_thumbnail_url( $pid, 'woocommerce_thumbnail' );

    if ( ! $out['img'] && function_exists( 'wc_get_product' ) ) {
        $product = wc_get_product( $pid );
        if ( $product ) {
            $gallery = $product->get_gallery_image_ids();
            if ( ! empty( $gallery[0] ) ) {
                $out['img'] = wp_get_attachment_image_url( $gallery[0], 'woocommerce_thumbnail' );
            }
        }
    }
    return $out;
}

/** Jednokratno kreira pravu WP stranicu i dodijeli joj predlozak page-upute.php. */
function noriks_manuals_ensure_page() {
    $opt = 'noriks_manuals_page_id';
    $id  = (int) get_option( $opt );
    if ( $id && get_post_status( $id ) ) { return; }

    $existing = get_page_by_path( 'utmutatok' );
    if ( $existing ) {
        update_post_meta( $existing->ID, '_wp_page_template', 'page-upute.php' );
        update_option( $opt, $existing->ID );
        return;
    }

    $id = wp_insert_post( array(
        'post_title'   => 'Használati útmutatók',
        'post_name'    => 'utmutatok',
        'post_type'    => 'page',
        'post_status'  => 'publish',
        'post_content' => '',
        'meta_input'   => array( '_wp_page_template' => 'page-upute.php' ),
    ) );
    if ( $id && ! is_wp_error( $id ) ) { update_option( $opt, $id ); }
}
add_action( 'init', 'noriks_manuals_ensure_page' );
