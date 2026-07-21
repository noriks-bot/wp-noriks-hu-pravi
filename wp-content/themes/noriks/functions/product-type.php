<?php
/**
 * ============================================================
 * NORIKS — Central product-type resolver (HU)
 * ------------------------------------------------------------
 * ONE place that decides which product categories map to which
 * "type" (majice / bokserice / starter / carape / ...).
 *
 * Everywhere in the theme, instead of scattered:
 *     has_term( array( 'boxerek','orto-boxeralsok',... ), 'product_cat', $id )
 * use:
 *     noriks_is_type( 'bokserice', $id )   // -> bool
 *     noriks_product_type( $id )           // -> string (first matching primary type)
 *
 * The TYPE KEYS are kept identical to the other markets so shared
 * templates work unchanged; only the SLUG VALUES are Hungarian.
 *
 * To add a new product, or change which categories count as a
 * given type, edit noriks_product_type_map() below. Nothing else.
 * ============================================================
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'noriks_product_type_map' ) ) :

/**
 * type key => list of product_cat slugs that identify it (HU + cross-market aliases).
 */
function noriks_product_type_map() : array {
    return array(
        // --- primary product types (order = resolution priority) ---
        'starter'   => array( 'kezdocsomag', 'orto-kezdocsomag', 'orto-starter', 'orto-majica-bokserica', 'starter-pack', 'paketo-ekkinisis' ),
        'majice'    => array( 'polok', 'orto-polok', 't-shirts', 'tricka', 'blouzakia' ),
        'bokserice' => array( 'boxerek', 'orto-boxeralsok', 'bokserice-sastavi-paket', 'bokserice', 'orto-bokserice', 'boxerky', 'mpoxerakia', 'boxers', 'boxerakia' ),
        'carape'    => array( 'zoknik', 'zimske-carape', 'kaltses', 'socks', 'kompreszios-zokni', 'kompresziós-zokni', 'orto-kompresziós-zokni', 'orto-kompreszios-zokni' ),

        // --- sub-variants / special buckets ---
        // Compression socks: front category 'kompreszios-zokni' (child of zoknik)
        // and orto category 'orto-kompresziós-zokni'. Both accent variants are
        // listed in case WordPress stored the slug without the ó.
        'kompresijske-nogavice'   => array( 'kompreszios-zokni', 'kompresziós-zokni', 'orto-kompresziós-zokni', 'orto-kompreszios-zokni' ),
        // Orthopedic back belt (ortopedski pojas za leđa).
        'ortopas'                 => array( 'orto-ortopas', 'ortopas' ),
        // Bunion corrector (korektor čukljeva / halux valgus).
        'bunion'                  => array( 'orto-bunion', 'bunion' ),
        // FisioRest (novi proizvod).
        'fisiorest'               => array( 'orto-fisiorest', 'fisiorest' ),
        'norikshers'              => array( 'orto-norikshers', 'norikshers' ),
        'bokserice-ispod-kupacih' => array( 'bokserice-savrsene-za-ispod-kupacih' ),
        'singles-boxers'          => array( 'singles-boxers' ),
        'bokserice-1-komad'       => array( '1-komad-bokserice' ),
        'majice-1-komad'          => array( '1-komad-majice' ),
        'majice-bokserice-paketi' => array( 'majice-i-bokserice-paketi', 'szettek' ),
        'black-friday'            => array( 'black-friday' ),
        'orto'                    => array( 'orto' ),
    );
}

endif;

if ( ! function_exists( 'noriks_primary_types' ) ) :

/**
 * Primary types, in resolution priority order (used by noriks_product_type()).
 */
function noriks_primary_types() : array {
    return array( 'starter', 'majice', 'bokserice', 'carape' );
}

endif;

if ( ! function_exists( 'noriks_resolve_product_id' ) ) :

/**
 * Resolve the product id to test. Defaults to the current product / post.
 */
function noriks_resolve_product_id( $product_id = null ) : int {
    if ( $product_id ) {
        return (int) $product_id;
    }
    if ( function_exists( 'is_product' ) && is_product() ) {
        return (int) get_queried_object_id();
    }
    return (int) get_the_ID();
}

endif;

if ( ! function_exists( 'noriks_is_type' ) ) :

/**
 * Does the product belong to the given type? (category based)
 *
 * @param string   $type       one of the keys in noriks_product_type_map()
 * @param int|null $product_id  defaults to current product
 */
function noriks_is_type( string $type, $product_id = null ) : bool {
    $map = noriks_product_type_map();
    if ( empty( $map[ $type ] ) ) {
        return false;
    }
    $product_id = noriks_resolve_product_id( $product_id );
    if ( ! $product_id ) {
        return false;
    }
    return has_term( $map[ $type ], 'product_cat', $product_id );
}

endif;

if ( ! function_exists( 'noriks_product_type' ) ) :

/**
 * First matching PRIMARY type for the product, or '' when none match.
 */
function noriks_product_type( $product_id = null ) : string {
    $product_id = noriks_resolve_product_id( $product_id );
    foreach ( noriks_primary_types() as $type ) {
        if ( noriks_is_type( $type, $product_id ) ) {
            return $type;
        }
    }
    return '';
}

endif;

/* ------------------------------------------------------------------
 * Convenience semantic helpers for composites used across the theme.
 * ------------------------------------------------------------------ */

if ( ! function_exists( 'noriks_is_black_friday' ) ) :

function noriks_is_black_friday( $product_id = null ) : bool {
    return noriks_is_type( 'black-friday', $product_id );
}

endif;

if ( ! function_exists( 'noriks_is_bokserice_page' ) ) :

/**
 * "Real" bokserice product page: bokserice, but not a black-friday
 * or majice+bokserice mixed paket. Mirrors woocommerce/single-product/meta.php.
 */
function noriks_is_bokserice_page( $product_id = null ) : bool {
    return noriks_is_type( 'bokserice', $product_id )
        && ! noriks_is_black_friday( $product_id )
        && ! noriks_is_type( 'majice-bokserice-paketi', $product_id );
}

endif;

if ( ! function_exists( 'noriks_is_mixed_bundle' ) ) :

/**
 * Mixed / bundle products: starter, majica+bokserica paket, black friday.
 */
function noriks_is_mixed_bundle( $product_id = null ) : bool {
    return noriks_is_type( 'black-friday', $product_id )
        || noriks_is_type( 'majice-bokserice-paketi', $product_id )
        || noriks_is_type( 'starter', $product_id );
}

endif;
