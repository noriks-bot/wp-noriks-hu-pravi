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
            'title' => 'NORIKS NeckRelax — nyakkészülék',
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
        array(
            'file'  => 'noriks-slim.pdf',
            'sku'   => 'NORIKS-SLIM',
            'title' => 'NORIKS Slim — alakformáló magas derekú alsó',
            'sub'   => 'Keresztezett 360°-os pánt, magas derék és varrás nélküli kötés mindennapi viseletre.',
        ),
        array(
            'file'  => 'noriks-redrelief.pdf',
            'sku'   => 'NORIKS-RED',
            'title' => 'NORIKS RedRelief — vörösfény-terápia csuklóra',
            'sub'   => 'Kettős hullámhossz, 660 nm és 850 nm, 48 dupla LED, 15 perces kezelés.',
        ),
        array(
            'file'  => 'noriks-pal.pdf',
            'sku'   => 'NORIKS-PAL',
            'title' => 'NORIKS Pal — sétabot második fogantyúval',
            'sub'   => 'Második fogantyú a felálláshoz, négy láb, lámpa és riasztó. Összecsukható és magasságban állítható.',
        ),
        array(
            'file'  => 'noriks-polar-cloth.pdf',
            'sku'   => 'NORIKS-CLOATH',
            'title' => 'Polar NORIKS Cloth XXL — tisztítókendő csak vízzel',
            'sub'   => '60 × 40 cm-es méret, kétoldalas kivitel, akár 600 ml vizet is felszív. Spray és vegyszer nélkül.',
        ),
        array(
            'file'  => 'noriks-slabproof.pdf',
            'sku'   => 'NORIKS-SLABPROOF',
            'title' => 'NORIKS SlabProof — párnázott munkazokni',
            'sub'   => 'Boka alatti alacsony fazon, zónás párnázás a sarok és a talp elülső része alatt.',
        ),
        array(
            'file'  => 'noriks-controlpro.pdf',
            'sku'   => 'NORIKS-CONTROLPRO',
            'title' => 'NORIKS ControlPro — medencefenék-izom edző',
            'sub'   => 'Ellenállásos gyakorlat a térdek között: napi három sorozat tíz szorítással, behelyezés és alkalmazás nélkül.',
        ),
        array(
            'file'  => 'noriks-tradesman.pdf',
            'sku'   => 'NORIKS-SLABPROOF-2',
            'title' => 'NORIKS Tradesman — párnázott munkazokni bolttartó pánttal',
            'sub'   => 'Bambusz, zónás párnázás, pánt a lábboltozat alatt és dupla mandzsetta hosszú műszakokhoz munkabakancsban.',
        ),
        array(
            'file'  => 'noriks-bowl.pdf',
            'sku'   => 'NORIKS-BOWL',
            'title' => 'NORIKS Bowl — ortopéd kutyatál 15°-os dőléssel',
            'sub'   => '11 cm-re emelve és 15°-ban megdöntve — a kutya természetesebb testhelyzetben eszik, anélkül hogy a nyakát a padlóig hajtaná.',
        ),
        array(
            'file'  => 'noriks-cloud.pdf',
            'sku'   => 'NORIKS-CLOUD',
            'title' => 'NORIKS Cloud — ortopéd térdpárna',
            'sub'   => 'Oldalt alváshoz: egy vonalban tartja a térdeket és a csípőt, állítható pánttal, amely egész éjjel a helyén tartja.',
        ),
        array(
            'file'  => 'noriks-kneeheat.pdf',
            'sku'   => 'NORIKS-KNEEHEAT',
            'title' => 'NORIKS KneeHeat — térdmelegítés, kompresszió és masszázs',
            'sub'   => 'Három kezelés egy ülésben: hő akár 42 °C-ig, légkompresszió és 60 Hz-es vibráció. A kezelés 12 percig tart.',
        ),
        array(
            'file'  => 'noriks-mamafit.pdf',
            'sku'   => 'NORIKS-SLIM-2',
            'title' => 'NORIKS MamaFit — szülés utáni kompressziós alsó 360°',
            'sub'   => 'Magas derék és keresztezett 360°-os kompresszió — hastámasz elöl, oldalt és hátul.',
        ),
        array(
            'file'  => 'noriks-snug.pdf',
            'sku'   => 'NORIKS-SNUG',
            'title' => 'NORIKS Snug — S alakú egésztest párna',
            'sub'   => 'Egyszerre támasztja a vállat, a csípőt és a térdet. Mérete 105 × 30 cm, hűsítő huzattal.',
        ),
        array(
            'file'  => 'noriks-hyd.pdf',
            'sku'   => 'NORIKS-HYD',
            'title' => 'NORIKS HYD — hidrogénvizes palack PEM elektrolízissel',
            'sub'   => 'A sima vizet hidrogénvízzé alakítja. 3 vagy 10 perces ciklus, tartós szűrő, üveg és rozsdamentes acél.',
        ),
        array(
            'file'  => 'noriks-winecooler.pdf',
            'sku'   => 'NORIKS-WINECOOLER',
            'title' => 'NORIKS WineCooler — borhűtő rúd kiöntővel',
            'sub'   => 'Rozsdamentes acél rúd, amely belülről hűti a palackot és csöpögés nélkül tölt.',
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
