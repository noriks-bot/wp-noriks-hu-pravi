<?php
/**
 * product-bottom: FISIOREST (orto-fisiorest)
 *
 * Dedicated bottom content for the NORIKS FisioRest product.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('fisiorest').
 *
 * SCAFFOLD — szekciók a felhasználó utasításai szerint kerülnek hozzáadásra (média: img/fisiorest*).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>
<!-- FisioRest: szekciók később kerülnek hozzáadásra (why-fisiorest.php) -->

<style>
  /* Nincs "Mérettáblázat" link a FisioRest-en (bunion-nal azonos). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Rövid leírás: rejtsd a felsorolásjeleket (•), térközök. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>
