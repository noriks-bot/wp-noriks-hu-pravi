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

// 1) "Tudományosan igazolt" — 4 kártya.
$fis_science = array(
    array( 'title' => 'Nyakpúp',        'text' => 'A trakció <strong>csökkenti a nyomást és helyreállítja a testtartást</strong>, hogy mérsékelje a technológiai nyakpúpot.' ),
    array( 'title' => 'Nyakfájdalom',   'text' => '<strong>Oldja az izomcsomókat és a merevséget</strong>, és <strong>újraigazítja a nyak ívét</strong> a gyors fájdalomcsillapításért.' ),
    array( 'title' => 'Minőségi alvás', 'text' => 'A nyugtató terápia <strong>ellazítja a nyakat és a gerincet</strong> a mély, pihentető alvásért.' ),
    array( 'title' => 'Stresszoldás',   'text' => 'A meleg masszázs és nyújtás <strong>oldja a felgyülemlett feszültséget</strong> a nagyobb kényelemért.' ),
);
$fis_v = get_template_directory_uri() . '/img/fisiorest-videos/';
$fis_hero_video = $fis_v . 'hero.mp4';

// 3) Szakértők ajánlják
$fis_experts = array(
    array( 'vid' => $fis_v.'v01.mp4', 'name' => 'Balogh Réka',    'role' => 'Okleveles masszázsterapeuta', 'org' => '' ),
    array( 'vid' => $fis_v.'v08.mp4', 'name' => 'Dr. Szabó Erika','role' => 'Gyógytornász doktor',        'org' => '' ),
    array( 'vid' => $fis_v.'v03.mp4', 'name' => 'Dr. Nagy Dávid','role' => 'Csontkovács doktor',          'org' => '' ),
);
// 4) Felhasználói vélemények
$fis_ugc = array(
    array( 'vid' => $fis_v.'v09.mp4', 'cap' => '„Végre hosszú idő után fájdalommentes vagyok…"' ),
    array( 'vid' => $fis_v.'v06.mp4', 'cap' => '„A NORIKS párna a mindennapjaim új nélkülözhetetlen kelléke…"' ),
    array( 'vid' => $fis_v.'v11.mp4', 'cap' => '„Nagyon sokat segít a nyak és váll feszültségének oldásában."' ),
    array( 'vid' => $fis_v.'v02.mp4', 'cap' => '„Ha friss anyuka vagy, lehet, hogy pont erre van szükséged…"' ),
);
// 5) ThermoTrac 3 az 1-ben
$fis_thermo = array(
    array( 'vid' => $fis_v.'v10.mp4', 'title' => 'Trakciós terápia' ),
    array( 'vid' => $fis_v.'v07.mp4', 'title' => 'Vibrációs terápia' ),
    array( 'vid' => $fis_v.'v05.mp4', 'title' => 'Hőterápia' ),
);
// 6) Négy fejlesztés
$fis_upgrades = array(
    array( 't' => 'Újratölthető akkumulátor', 'd' => 'Vidd magaddal bárhová — a 2500 mAh-s akkumulátor akár 2 óráig bírja.' , 'ico' => 'battery.png' ),
    array( 't' => 'Eperfa selyem huzat',       'd' => 'Hűsítő selyembe burkolva a puha, luxus érzésért.' , 'ico' => 'silk.png' ),
    array( 't' => '30 perces kikapcsolás',     'd' => 'Négy 30 perces munkamenet egy töltéssel, gondtalanul.' , 'ico' => 'timer.png' ),
    array( 't' => 'Szabályozott melegítés',    'd' => '50 °C-os melegítés fejlett ThermoTrac technológiával.' , 'ico' => 'heat.png' ),
);
?>

<!-- ============ 1) Tudományosan igazolt ============ -->
<section class="fis-science">
  <div class="fis-wrap">
    <div class="fis-box">
      <h2 class="fis-title">Tudományosan igazolt: bizonyított enyhülés a nyak ápolására</h2>
      <div class="fis-grid">
        <?php foreach ( $fis_science as $fis_c ) : ?>
          <div class="fis-card">
            <h3 class="fis-card-title"><?php echo esc_html( $fis_c['title'] ); ?></h3>
            <p class="fis-card-text"><?php echo wp_kses_post( $fis_c['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 2) Videó hero + cím ============ -->
<section class="fis-hero">
  <video class="fis-hero-vid" src="<?php echo esc_url( $fis_hero_video ); ?>" muted autoplay loop playsinline preload="metadata"></video>
  <div class="fis-hero-overlay"></div>
  <div class="fis-hero-inner">
    <h2 class="fis-hero-title">Érd el a mély újraindítást az igazítás és a lazítás együttes erejével</h2>
  </div>
</section>

<!-- ============ 3) Szakértők ajánlják ============ -->
<section class="fis-experts">
  <div class="fis-wrap fis-exp-grid">
    <div class="fis-exp-quote">
      <h2 class="fis-h2">Szakértők ajánlják</h2>
      <p>„A NORIKS az egyik legjobb nyakpárna jelenleg a piacon. Mivel több mint 25 éve vagyok a wellness közösségben, sokféle nyakpárnát kipróbáltam, és ami a NORIKS-ot kiemeli, az a trakciós funkció…</p>
      <p>Ha előretolt fejtartásod vagy 'görnyedt tartásod' van, a trakció segíthet a csigolyák újraigazításában, hogy teljesen megtámasszák a testet. Én magam is használom, és ajánlom az ügyfeleimnek!"</p>
      <p class="fis-exp-author"><strong>Balogh Réka</strong><br>Okleveles masszázsterapeuta</p>
    </div>
    <div class="fis-exp-cards">
      <?php foreach ( $fis_experts as $e ) : ?>
        <div class="fis-exp-card">
          <video src="<?php echo esc_url( $e['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          <div class="fis-exp-cap">
            <div class="fis-exp-name"><?php echo esc_html( $e['name'] ); ?></div>
            <div class="fis-exp-role"><?php echo esc_html( $e['role'] ); ?></div>
            <?php if ( $e['org'] ) : ?><div class="fis-exp-org"><?php echo esc_html( $e['org'] ); ?></div><?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 4) Felhasználói vélemények ============ -->
<section class="fis-ugc">
  <div class="fis-wrap">
    <div class="fis-ugc-grid">
      <?php foreach ( $fis_ugc as $u ) : ?>
        <div class="fis-ugc-card">
          <div class="fis-ugc-media"><video src="<?php echo esc_url( $u['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
          <p class="fis-ugc-cap"><?php echo esc_html( $u['cap'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) ThermoTrac 3 az 1-ben ============ -->
<section class="fis-thermo">
  <div class="fis-wrap">
    <p class="fis-eyebrow"><strong>ThermoTrac™</strong> technológia</p>
    <h2 class="fis-h2 fis-center">Tapasztald meg a 3 az 1-ben nyakterápiát</h2>
    <div class="fis-thermo-grid">
      <?php foreach ( $fis_thermo as $t ) : ?>
        <div class="fis-thermo-card">
          <video src="<?php echo esc_url( $t['vid'] ); ?>" muted autoplay loop playsinline preload="metadata"></video>
          <div class="fis-thermo-label"><?php echo esc_html( $t['title'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Négy fejlesztés ============ -->
<section class="fis-upg">
  <div class="fis-wrap">
    <h2 class="fis-h2 fis-center">Négy jelentős fejlesztés</h2>
    <div class="fis-upg-grid">
      <?php foreach ( $fis_upgrades as $g ) : ?>
        <div class="fis-upg-card">
          <img class="fis-upg-ico" src="<?php echo esc_url( get_template_directory_uri() . '/img/fisiorest-icons/' . $g['ico'] ); ?>" alt="" loading="lazy" width="120" height="120">
          <div class="fis-upg-title"><?php echo esc_html( $g['t'] ); ?></div>
          <p class="fis-upg-text"><?php echo esc_html( $g['d'] ); ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 7) Mérnökök tervezték ============ -->
<section class="fis-eng">
  <div class="fis-wrap fis-row2">
    <div class="fis-row2-copy">
      <h2 class="fis-h2">Mérnökök tervezték. Gyógytornász-szabvány szerint.</h2>
      <p>Több mint 50 000 €-t és 2 évnyi fejlesztést fektettünk abba, hogy a NORIKS ne csak egy nyakmasszírozó legyen. Ez egy komplett nyakterápiás eszköz, amely valóban a kiváltó okot kezeli. Minden rendelés részletes minőségellenőrzésen megy át, hogy tökéletes állapotban érkezzen meg.</p>
    </div>
    <div class="fis-row2-media"><video src="<?php echo esc_url( $fis_v.'hero.mp4' ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
  </div>
</section>

<!-- ============ 8) 14× olcsóbb ============ -->
<section class="fis-cheaper">
  <div class="fis-wrap fis-row2">
    <div class="fis-row2-media"><video src="<?php echo esc_url( $fis_v.'v08.mp4' ); ?>" muted autoplay loop playsinline preload="metadata"></video></div>
    <div class="fis-row2-copy">
      <p class="fis-eyebrow">BIZTONSÁGOS ÉS PIHENTETŐ TERÁPIA</p>
      <h2 class="fis-h2">14× olcsóbb, mint a heti kezelések</h2>
      <p>A NORIKS napok alatt megtérül, nem hónapok alatt. Terapeuták által ajánlott, gyengéd enyhülést nyújt durva nyomás vagy kockázatos beavatkozás nélkül. Használd minden este. Nincs időpontfoglalás. Nincs utazás. Nincsenek ismétlődő díjak — csak biztonságos, következetes nyakápolás, amikor csak szükséged van rá.</p>
    </div>
  </div>
</section>

<style>
  /* 2) Videó hero */
  .fis-hero { position: relative; width: 100vw; left: 50%; margin-left: -50vw; min-height: 520px; display: flex; align-items: center; overflow: hidden; }
  .fis-hero-vid { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
  .fis-hero-overlay { position: absolute; inset: 0; background: linear-gradient(90deg, rgba(0,0,0,0.5), rgba(0,0,0,0.05) 55%); }
  .fis-hero-inner { position: relative; z-index: 2; max-width: 1180px; margin: 0 auto; padding: 0 40px; width: 100%; box-sizing: border-box; }
  .fis-hero-title { color: #fff; font-weight: 800; font-size: clamp(27px,4vw,46px); line-height: 1.15; max-width: 640px; margin: 0; text-shadow: 0 2px 14px rgba(0,0,0,0.4); }
  @media (max-width: 768px) { .fis-hero { min-height: 380px; } .fis-hero-inner { padding: 0 22px; } }

  /* zajednički */
  .fis-h2 { font-size: clamp(24px,3vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .fis-center { text-align: center; }
  .fis-eyebrow { font-size: 13px; letter-spacing: 1px; text-transform: uppercase; color: #555; margin: 0 0 8px; }
  .fis-experts { padding: 44px 0; }
  .fis-exp-grid { display: grid; grid-template-columns: 1fr 2fr; gap: 40px; align-items: start; }
  .fis-exp-quote p { font-size: 15.5px; line-height: 1.6; color: #333; margin: 0 0 14px; }
  .fis-exp-author { color: #1c1c1c; }
  .fis-exp-cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; }
  .fis-exp-card { position: relative; border-radius: 14px; overflow: hidden; aspect-ratio: 3/4; background: #222; }
  .fis-exp-card video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-exp-cap { position: absolute; left: 0; right: 0; bottom: 0; padding: 14px; color: #fff; background: linear-gradient(0deg, rgba(0,0,0,.75), rgba(0,0,0,0)); }
  .fis-exp-name { font-weight: 800; font-size: 18px; }
  .fis-exp-role { font-size: 13px; }
  .fis-exp-org { font-size: 12px; font-style: italic; opacity: .9; }
  .fis-ugc { background: #223047; padding: 40px 0; }
  .fis-ugc-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
  .fis-ugc-media { border-radius: 12px; overflow: hidden; aspect-ratio: 3/4; background: #000; }
  .fis-ugc-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-ugc-cap { color: #eee; font-size: 14px; line-height: 1.5; margin: 10px 0 0; }
  .fis-thermo { background: #f0efe9; padding: 44px 0; }
  .fis-thermo-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
  .fis-thermo-card { position: relative; border-radius: 16px; overflow: hidden; aspect-ratio: 4/3; background: #111; }
  .fis-thermo-card video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .fis-thermo-label { position: absolute; left: 16px; bottom: 14px; color: #fff; font-weight: 800; font-size: 18px; text-shadow: 0 1px 8px rgba(0,0,0,.6); }
  .fis-upg { padding: 44px 0; }
  .fis-upg-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 24px; text-align: center; }
  .fis-upg-ico { width: 56px; height: 56px; object-fit: contain; display: block; margin: 0 auto 14px; }
  .fis-upg-title { font-weight: 800; color: #1c1c1c; margin: 0 0 8px; font-size: 16px; }
  .fis-upg-text { font-size: 14px; line-height: 1.5; color: #444; margin: 0; }
  .fis-eng, .fis-cheaper { padding: 40px 0; }
  .fis-cheaper { background: #f4f4f4; }
  .fis-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 44px; align-items: center; }
  .fis-row2-copy p { font-size: 15.5px; line-height: 1.65; color: #333; }
  .fis-row2-media { border-radius: 16px; overflow: hidden; }
  .fis-row2-media video { width: 100%; height: auto; display: block; }
  .fis-cheaper .fis-row2-media { aspect-ratio: 16 / 10; }
  .fis-cheaper .fis-row2-media video { height: 100%; object-fit: cover; }
  @media (max-width: 900px) {
    .fis-exp-grid { grid-template-columns: 1fr; gap: 24px; }
    .fis-ugc-grid { grid-template-columns: 1fr 1fr; }
    .fis-thermo-grid { grid-template-columns: 1fr; }
    .fis-upg-grid { grid-template-columns: 1fr 1fr; gap: 22px; }
    .fis-row2 { grid-template-columns: 1fr; gap: 22px; }
    .fis-cheaper .fis-row2-media { order: 2; }
  }
  @media (max-width: 560px) {
    .fis-exp-cards { grid-template-columns: 1fr 1fr; }
    .fis-ugc-grid { grid-template-columns: 1fr; }
  }

  /* 1) Tudományosan igazolt — szürke kártya */
  .fis-science { background: #f4f4f4; padding: 44px 0; }
  .fis-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .fis-box { background: transparent; border-radius: 0; padding: 0; }
  .fis-title { font-size: clamp(23px,2.9vw,32px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 26px; }
  .fis-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 0; }
  .fis-card { padding: 0 22px; border-left: 1px solid #dcdcdc; }
  .fis-card:first-child { border-left: 0; padding-left: 0; }
  .fis-card-title { font-size: 17px; font-weight: 800; color: #1c1c1c; margin: 0 0 10px; }
  .fis-card-text { font-size: 15px; line-height: 1.55; color: #333; margin: 0; }
  @media (max-width: 820px) {
    .fis-grid { grid-template-columns: 1fr 1fr; gap: 22px 0; }
    .fis-card:nth-child(odd) { border-left: 0; padding-left: 0; }
  }
  @media (max-width: 480px) {
    .fis-grid { grid-template-columns: 1fr; }
    .fis-card { border-left: 0; padding-left: 0; }
  }

  /* Nincs "Mérettáblázat" link a FisioRest-en (bunion-nal azonos). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Rövid leírás: rejtsd a felsorolásjeleket (•), térközök. */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 26px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin-left: 0; }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }
</style>

<script>
/* Narancasti active bundle-option preko inline !important (preživljava LiteSpeed UCSS). */
(function(){
  function paintOrto(){
    var sel = document.getElementById('bundle-selector');
    if(!sel) return;
    sel.querySelectorAll('.bundle-option').forEach(function(c){ c.style.removeProperty('border-color'); c.style.removeProperty('background'); });
    var checked = sel.querySelector('input[name="bundle_option"]:checked');
    var card = checked ? checked.closest('.bundle-option')
             : (sel.querySelector('.bundle-option.active') || sel.querySelector('.bundle-option'));
    if(card){ card.style.setProperty('border-color','#f39c12','important'); card.style.setProperty('background','#f39c1217','important'); }
  }
  function bindOrto(){
    var sel = document.getElementById('bundle-selector');
    if(!sel) return;
    paintOrto();
    sel.querySelectorAll('input[name="bundle_option"]').forEach(function(r){ r.addEventListener('change', paintOrto); });
  }
  if(document.readyState==='loading'){ document.addEventListener('DOMContentLoaded', bindOrto); } else { bindOrto(); }
})();
</script>
