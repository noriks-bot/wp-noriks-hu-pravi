<?php
/**
 * product-bottom: BÜTYÖKKORRIGÁLÓ (bunion / hallux valgus)
 *
 * Lokalizált szekció-képek (img/bunion/*.png) + "Hogyan kell használni" videós lépések.
 * Az értékelések + GYIK a monolit alsó részéből jönnek (single-product-bottom-nicer.php).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_img  = get_template_directory_uri() . '/img/bunion/';
$bun_imgp = get_template_directory()     . '/img/bunion/';
$bun_vid  = get_template_directory_uri() . '/img/bunion-videos/';

// Szekció-képek sorrendje (semleges nevek; a fájl a téma nyelvén lokalizált).
$bun_stack_top    = array( 'beforeafter', 'recommended', 'tech', 'why', 'features' );
$bun_stack_bottom = array( 'doctor', 'vs-surgery', 'vs-shoes', 'vs-similar', 'vs-separators', 'athome', 'book' );

// "Hogyan kell használni" — 3 lépés (videó).
$bun_steps = array(
    array( 'video' => $bun_vid . 'step-1.mp4', 'caption' => 'Rögzítse a NORIKS korrektort a nagylábujjra és a lábfejre' ),
    array( 'video' => $bun_vid . 'step-2.mp4', 'caption' => 'Állítsa be a nyújtás erősségét igény szerint' ),
    array( 'video' => $bun_vid . 'step-3.mp4', 'caption' => 'Lazítson, és hagyja, hogy a NORIKS korrektor elvégezze a munkát' ),
);
?>

<section class="bun-page">

  <?php foreach ( $bun_stack_top as $bun_f ) : if ( ! file_exists( $bun_imgp . $bun_f . '.png' ) ) continue; ?>
    <img class="bun-simg" loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img . $bun_f . '.png' ); ?>" alt="NORIKS bütyökkorrigáló">
  <?php endforeach; ?>

  <!-- ============ Hogyan kell használni (videós lépések) ============ -->
  <div class="bun-howto">
    <h2 class="bun-howto-title">Hogyan kell használni</h2>
    <div class="bun-howto-intro">
      <p>Javasoljuk, hogy napi 30 perccel kezdje, és fokozatosan növelje 1–3 órás alkalomig.</p>
      <p>A legjobb nyugalmi helyzetben – a kanapén pihenve, tévénézés, olvasás vagy alvás közben.</p>
    </div>
    <div class="bun-steps-grid">
      <?php $bun_n = 0; foreach ( $bun_steps as $bun_step ) : $bun_n++; ?>
        <div class="bun-step">
          <div class="bun-step-media">
            <video src="<?php echo esc_url( $bun_step['video'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          </div>
          <div class="bun-step-num"><?php echo (int) $bun_n; ?></div>
          <p class="bun-step-caption"><?php echo esc_html( $bun_step['caption'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <?php foreach ( $bun_stack_bottom as $bun_f ) : if ( ! file_exists( $bun_imgp . $bun_f . '.png' ) ) continue; ?>
    <img class="bun-simg" loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img . $bun_f . '.png' ); ?>" alt="NORIKS bütyökkorrigáló">
  <?php endforeach; ?>

</section>

<style>
  /* Rövid leírás: rejtsd a felsorolásjeleket (•), térközök. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }

  /* Nincs "Mérettáblázat" link a bütyökkorrigálón. */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Szekció-képek — full-width stack. */
  .bun-page { padding: 0 0 10px; }
  .bun-simg { display: block; width: 100%; max-width: 760px; height: auto; margin: 0 auto; }

  /* Hogyan kell használni */
  .bun-howto { background: #f0f2f5; padding: 40px 16px; margin: 8px 0; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 14px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 30px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 10px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; max-width: 1000px; margin: 0 auto; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  @media (max-width: 820px) {
    .bun-steps-grid { grid-template-columns: 1fr; gap: 16px; }
  }
</style>
