<?php
/**
 * Hungarian (HU) Language Configuration — Noriks Hungary Store
 */

// Single comprehensive gettext filter for ALL WC strings
add_filter( 'gettext', 'noriks_hu_translate_all', 20, 3 );
function noriks_hu_translate_all( $translated_text, $text, $domain ) {
    static $t = null;
    if ( $t === null ) {
        $t = array(
            // Buttons & Actions
            'Add to cart' => 'Kosárba',
            'Select options' => 'Kiválasztás',
            'View cart' => 'Kosár megtekintése',
            'Checkout' => 'Pénztár',
            'Proceed to checkout' => 'Tovább a fizetéshez',
            'Update cart' => 'Kosár frissítése',
            'Place order' => 'Megrendelés',
            'Apply coupon' => 'Kupon beváltása',
            'Remove' => 'Eltávolítás',
            'Return to shop' => 'Vissza a boltba',
            'Continue shopping' => 'Vásárlás folytatása',
            
            // Cart
            'Cart totals' => 'Kosár összesen',
            'Cart' => 'Kosár',
            'Your cart is currently empty.' => 'A kosara jelenleg üres.',
            'Coupon code' => 'Kuponkód',
            'Coupon' => 'Kupon',
            
            // Checkout field labels
            'First name' => 'Keresztnév',
            'Last name' => 'Vezetéknév',
            'Company name' => 'Cégnév',
            'Country / Region' => 'Ország',
            'Street address' => 'Utca',
            'House number and street name' => 'Utca és házszám',
            'Apartment, suite, unit, etc.' => 'Házszám',
            'Apartment, suite, unit, etc. (optional)' => 'Házszám (opcionális)',
            'Town / City' => 'Város',
            'State / County' => 'Megye',
            'Postcode / ZIP' => 'Irányítószám',
            'Phone' => 'Telefon',
            'Email address' => 'E-mail cím',
            'Email' => 'E-mail',
            'Order notes' => 'Megjegyzés a rendeléshez',
            'Notes about your order, e.g. special notes for delivery.' => 'Megjegyzések a rendeléshez, pl. különleges kézbesítési utasítások.',
            
            // Checkout sections
            'Billing details' => 'Számlázási adatok',
            'Billing &amp; Shipping' => 'Számlázás és Szállítás',
            'Ship to a different address?' => 'Más szállítási címre?',
            'Additional information' => 'További információk',
            'Your order' => 'Az Ön rendelése',
            
            // Order review
            'Product' => 'Termék',
            'Subtotal' => 'Részösszeg',
            'Shipping' => 'Szállítás',
            'Free shipping' => 'Ingyenes szállítás',
            'Flat rate' => 'Átalánydíj',
            'Total' => 'Összesen',
            'including' => 'tartalmazva',
            'Discount' => 'Kedvezmény',
            
            // Payment
            'Payment' => 'Fizetés',
            'Cash on delivery' => 'Utánvét',
            'Pay with cash upon delivery.' => 'Fizessen készpénzzel átvételkor.',
            'Credit card' => 'Bankkártya',
            
            // Product attributes
            'Choose your size' => 'Válasszon méretet',
            'Choose an option' => 'Válasszon',
            'Clear' => 'Törlés',
            'Size' => 'Méret',
            'Color' => 'Szín',
            'Colour' => 'Szín',
            
            // Validation messages
            'is a required field.' => 'kötelező mező.',
            'is not a valid' => 'nem érvényes',
            'Please enter' => 'Kérjük, adja meg',
            'is not valid.' => 'nem érvényes.',
            'Billing' => 'Számlázás',
            
            // Success/Error
            'Thank you. Your order has been received.' => 'Köszönjük. Rendelése beérkezett.',
            'Order received' => 'Rendelés beérkezett',
            'has been added to your cart.' => 'hozzáadva a kosárhoz.',
            
            // Product page
            'Description' => 'Leírás',
            'Additional information' => 'További információk',
            'Reviews' => 'Vélemények',
            'Related products' => 'Kapcsolódó termékek',
            'Sale!' => 'Akció!',
            'Out of stock' => 'Elfogyott',
            'In stock' => 'Raktáron',
            'SKU:' => 'Cikkszám:',
            'Category:' => 'Kategória:',
            'Categories:' => 'Kategóriák:',
            
            // Misc
            '(optional)' => '(opcionális)',
            'required' => 'kötelező',
            'Search' => 'Keresés',
            'Search products…' => 'Termékek keresése…',
            'No products were found matching your selection.' => 'Nem találtunk terméket az Ön kiválasztásához.',
        );
    }
    return isset( $t[$text] ) ? $t[$text] : $translated_text;
}

// Order number prefix
add_filter( 'woocommerce_order_number', 'change_woocommerce_order_number_hu' );
function change_woocommerce_order_number_hu( $order_id ) {
    return 'NORIKS-HU-' . $order_id;
}

// Force country to Hungary and hide country/state fields
add_filter( 'woocommerce_checkout_fields', 'noriks_hu_checkout_fields' );
function noriks_hu_checkout_fields( $fields ) {
    WC()->customer->set_billing_country( 'HU' );
    WC()->customer->set_shipping_country( 'HU' );
    unset( $fields['billing']['billing_country'] );
    unset( $fields['shipping']['shipping_country'] );
    unset( $fields['billing']['billing_state'] );
    unset( $fields['shipping']['shipping_state'] );
    unset( $fields['shipping']['shipping_address_2'] );
    return $fields;
}
