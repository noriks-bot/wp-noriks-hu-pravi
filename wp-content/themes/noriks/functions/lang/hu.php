<?php
/**
 * Hungarian (HU) Language Configuration
 * Noriks Hungary Store
 */

// Translate WooCommerce attribute labels
add_filter( 'gettext', 'translate_attribute_labels_hu', 20, 3 );
function translate_attribute_labels_hu( $translated_text, $text, $domain ) {
    $translations = array(
        'Choose your size' => 'Válasszon méretet',
        'Choose an option' => 'Válasszon egy opciót',
        'Add to cart' => 'Kosárba',
        'Select options' => 'Kiválasztás',
        'View cart' => 'Kosár megtekintése',
        'Checkout' => 'Pénztár',
        'Proceed to checkout' => 'Tovább a fizetéshez',
        'Update cart' => 'Kosár frissítése',
        'Apply coupon' => 'Kupon beváltása',
        'Coupon code' => 'Kuponkód',
        'Cart totals' => 'Kosár összesen',
        'Subtotal' => 'Részösszeg',
        'Total' => 'Összesen',
        'Shipping' => 'Szállítás',
        'Free shipping' => 'Ingyenes szállítás',
    );
    
    if ( isset( $translations[$text] ) ) {
        return $translations[$text];
    }
    return $translated_text;
}

// Checkout phone placeholder
add_filter( 'woocommerce_checkout_fields', 'custom_billing_phone_placeholder_hu' );
function custom_billing_phone_placeholder_hu( $fields ) {
    $fields['billing']['billing_phone']['placeholder'] = 'Mobil (példa: +36 30 123 4567)';
    return $fields;
}

// Order number prefix
add_filter( 'woocommerce_order_number', 'change_woocommerce_order_number_hu' );
function change_woocommerce_order_number_hu( $order_id ) {
    $prefix = 'NORIKS-HU-';
    return $prefix . $order_id;
}

// Force country to Hungary
add_filter( 'default_checkout_billing_country', '__return_hu' );
add_filter( 'default_checkout_shipping_country', '__return_hu' );
function __return_hu() {
    return 'HU';
}

// Force country to Hungary and hide country fields
add_filter( 'woocommerce_checkout_fields', 'fix_country_to_hungary_and_hide' );
function fix_country_to_hungary_and_hide( $fields ) {
    WC()->customer->set_billing_country( 'HU' );
    WC()->customer->set_shipping_country( 'HU' );
    
    unset( $fields['billing']['billing_country'] );
    unset( $fields['shipping']['shipping_country'] );
    
    return $fields;
}

add_filter( 'woocommerce_checkout_fields', 'hide_checkout_fields_hu' );
function hide_checkout_fields_hu( $fields ) {
    unset( $fields['billing']['billing_state'] );
    unset( $fields['shipping']['shipping_state'] );
    unset( $fields['shipping']['shipping_address_2'] );
    return $fields;
}

/**
 * Hungarian translations for hardcoded strings
 */
function noriks_hu_translations() {
    return array(
        // Hero section
        'Tričko, které řeší všechny problémy.' => 'A póló, ami minden problémát megold.',
        'KOUPIT TEĎ' => 'VÁSÁROLJON MOST',
        
        // Collections
        'Nakupujte podle kolekce' => 'Vásároljon kollekciónként',
        'Všechny produkty' => 'Minden termék',
        
        // Category names
        'Trička' => 'Pólók',
        'Boxerky' => 'Boxerek',
        'Sady' => 'Csomagok',
        'Startovací balíček' => 'Kezdőcsomag',
        
        // Category descriptions
        'Pohodlí po celý den. Bez vytahování.' => 'Egész napos kényelem. Nem húzódik fel.',
        'Měkké. Prodyšné. Spolehlivé.' => 'Puha. Légáteresztő. Megbízható.',
        'Nejlepší poměr ceny a kvality v setu.' => 'A legjobb ár-érték arány csomagban.',
        'Vyzkoušej NORIKS výhodněji.' => 'Próbálja ki a NORIKS-t kedvezőbben.',
        
        // Header marquee
        'Doprava zdarma pro objednávky nad 1700 Kč' => 'Ingyenes szállítás 70 € feletti rendelésnél',
        'Doprava zdarma při objednávkách nad 1700 Kč' => 'Ingyenes szállítás 70 € feletti rendelésnél',
        '30 dní bez rizika – vyzkoušej bez obav' => '30 napos kockázatmentes – próbálja ki aggodalom nélkül',
        
        // Product page features
        'Platba na dobírku' => 'Utánvétes fizetés',
        'Vyzkoušejte 30 dní, bez rizika' => 'Próbálja ki 30 napig, kockázatmentesen',
        
        // Shipping/delivery
        'Objednejte během následujících' => 'Rendeljen a következő időn belül',
        'Doručení od' => 'Szállítás',
        'do' => '-tól',
        
        // Cart
        'Prosím, pospěš si! Někdo si právě objednal jeden z produktů ve tvém košíku. Rezervace platí už jen' => 'Siessen! Valaki épp most rendelt egy terméket a kosarából. A foglalás érvényes még',
        'minut' => 'percig',
    );
}

/**
 * Hungarian weekday names
 */
function noriks_hu_weekdays() {
    return array(
        'Vasárnap',    // Sunday
        'Hétfő',       // Monday
        'Kedd',        // Tuesday
        'Szerda',      // Wednesday
        'Csütörtök',   // Thursday
        'Péntek',      // Friday
        'Szombat'      // Saturday
    );
}
