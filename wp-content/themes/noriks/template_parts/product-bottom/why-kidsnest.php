<?php
/**
 * product-bottom: NORIKS KidsNest — gyerekpárna a helyes légzésért (orto-kidsnest).
 * A tryneedo.com/products/kids-pillow szekciók másolata, HU fordítás (tompított orvosi állítások).
 * Sorrend:
 *   1. Trust marquee (kék)  2. "Kezdje el ma este..." (kép B / szöveg J, kék cím)
 *   3. "Megfelelő alátámasztás..." (szöveg B / kép J)  4. Statisztika 94/60/98 (világoskék, 3 kártya körökkel)
 *   5. "#1 gyerekpárna 2026" + csillagok + futó fotósáv
 * Kék: #2b3fb0, világos: #eef1fb, navy: #1b2450. Képek: img/kidsnest/
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kn = get_template_directory_uri() . '/img/kidsnest/';
?>

<!-- ============ 1) Trust marquee (plava traka, vrti se) ============ -->
<div class="kn-marquee" aria-hidden="true">
  <div class="kn-marquee-track">
    <?php $kn_ticker = array('GYERMEKORVOSOK AJÁNLÁSÁVAL','OEKO-TEX® MEMÓRIAHAB','3 ZÓNÁS SZERKEZET','90 ÉJSZAKÁS PRÓBAIDŐ','HIPOALLERGÉN','MOSHATÓ HUZAT');
    for ( $r = 0; $r < 2; $r++ ) { foreach ( $kn_ticker as $t ) { echo '<span class="kn-tick">'.esc_html($t).'</span><span class="kn-dot">•</span>'; } } ?>
  </div>
</div>

<!-- ============ 2) Pocnite veceras — slika LIJEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'01-poravnan-hu.webp' ); ?>" alt="Tökéletes vonalban — fej, nyak és gerinc alvás közben" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <p class="kn-eyebrow">Fogorvosokkal közösen fejlesztve a gyermeki légutakért</p>
      <h2 class="kn-h2 kn-h2-blue">Kezdje el már ma este helyrehozni a rejtett károsodást.</h2>
      <p>A gyermek-légúti fogszakorvosok ugyanarra a csendes problémára figyelmeztetik a szülőket: a horkoló és szájon át lélegző gyerekek nem „csak rosszabbul alszanak”. Az állkapcsuk, a szájpadlásuk és az arcszerkezetük lassan rossz irányba fejlődhet.</p>
      <p><strong>És a korrekció időablaka nem marad örökre nyitva.</strong></p>
      <p>A NORIKS <strong>KidsNest párnát</strong> úgy tervezték, hogy <strong>alvás közben a fejet, az állkapcsot és a légutakat megfelelő helyzetben támassza alá</strong> — elősegítve az orron át történő légzést és az egészségesebb arcfejlődést, amíg az még számít.</p>
      <p><strong>Ez nem csupán egy párna.<br>Ez éjszakai légúti támogatás azokban az években, amelyek gyermeke arcát formálják.</strong></p>
    </div>
  </div>
</section>

<!-- ============ 3) Pravilna potpora — tekst LIJEVO, slika DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">A fej és a nyak megfelelő alátámasztása kulcsfontosságú az egészséges alváshoz.</h2>
      <p>Az ergonomikus gyerekpárna <strong>a fejet és a nyakat természetes vonalban tartja, és segít megelőzni a fej hátrabillenését</strong> az éjszaka folyamán. Így a gerinc megfelelő vonalban marad — még akkor is, ha a gyermek sokat forgolódik álmában.</p>
      <p><strong>Az eredmény: nyugodtabb alvás és jobb regeneráció.</strong></p>
    </div>
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'02-san.jpg' ); ?>" alt="Gyermek nyugodtan alszik a KidsNest párnán" loading="lazy" onerror="this.style.display='none'"></div>
  </div>
</section>

<!-- ============ 4) Statistika — svijetlo-plava, 3 kartice s krugovima ============ -->
<section class="kn-sec kn-stats-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">Azért készült, hogy megvédje gyermeke fejlődő arcát</h2>
    <p class="kn-sub kn-center"><strong>A gyermekkori nyitott szájjal alvás átformálhatja a növekedésben lévő arcot. A KidsNest vonalban tartja gyermeke fejét, hogy az orrán át lélegezzen.</strong></p>
    <div class="kn-stats">
      <?php
      $kn_stats = array(
        array('94','165.3','a szülők közül azt tapasztalja, hogy gyermeke 2 héten belül <strong>csukott szájjal</strong> alszik'),
        array('60','105.5','gyermeke <strong>arcfejlődésének</strong> 6 éves korig formálódik ki — ez az időablak nem nyílik ki újra'),
        array('98','172.3','a szülők közül ajánlaná a <strong>KidsNestet</strong>, hogy megvédje egy másik gyermek mosolyát'),
      );
      foreach ( $kn_stats as $st ) : ?>
      <div class="kn-stat-card">
        <svg class="kn-ring" viewBox="0 0 64 64" aria-hidden="true">
          <circle cx="32" cy="32" r="28" fill="none" stroke="#dfe5f5" stroke-width="5"/>
          <circle cx="32" cy="32" r="28" fill="none" stroke="#2b3fb0" stroke-width="5" stroke-linecap="round" stroke-dasharray="<?php echo esc_attr($st[1]); ?> 175.9" transform="rotate(-90 32 32)"/>
          <text x="32" y="38" text-anchor="middle" class="kn-ring-t"><?php echo esc_html($st[0]); ?>%</text>
        </svg>
        <p><?php echo wp_kses_post($st[2]); ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ 5) #1 djecji jastuk + zvjezdice + drseca foto traka ============ -->
<section class="kn-sec kn-rated-sec">
  <div class="kn-wrap">
    <h2 class="kn-h2 kn-h2-blue kn-center">2026 első számú gyerekpárnájának választva</h2>
    <p class="kn-sub kn-center">Támogassa az alvásukat — támogassa a felnövés éveit.</p>
    <p class="kn-stars kn-center"><span aria-hidden="true">★★★★★</span> 4,8/5-ös értékelés 140+ vélemény alapján</p>
  </div>
  <div class="kn-strip">
    <div class="kn-strip-track">
      <?php for ( $r = 0; $r < 2; $r++ ) : for ( $i = 1; $i <= 5; $i++ ) : ?>
        <img src="<?php echo esc_url( $kn.'traka/t'.$i.'.webp' ); ?>" alt="NORIKS KidsNest — gyerekek és szülők" loading="lazy" onerror="this.style.display='none'">
      <?php endfor; endfor; ?>
    </div>
  </div>
</section>

<!-- ============ 6) Kvaliteta materijala — slika LIJEVO, tekst DESNO ============ -->
<section class="kn-sec">
  <div class="kn-wrap kn-row2">
    <div class="kn-media"><img src="<?php echo esc_url( $kn.'03-detalj.webp' ); ?>" alt="KidsNest — 3 zónás szerkezet és lélegző anyag közelről" loading="lazy" onerror="this.style.display='none'"></div>
    <div class="kn-copy">
      <h2 class="kn-h2 kn-h2-blue">Minőség, amely érezhető — éjszakáról éjszakára.</h2>
      <p>A sűrű, lélegző kötött anyag és a gondosan formázott felület nem a látvány kedvéért van — <strong>minden zónának megvan a maga szerepe</strong>. A középső rész gyengéden befogadja a fejet, a szélek alátámasztják a nyakat, a szerkezet pedig hónapokig tartó mindennapi használat után is megtartja formáját.</p>
      <p>A huzat levehető és mosógépben mosható, a hab <strong>hipoallergén és atkaálló</strong> — így a párna friss, tiszta és minden éjszakára készen áll. Nincs benyomódás, nincs ellaposodás, nincs kompromisszum.</p>
      <p><strong>Egy párna, amely egy év után is úgy néz ki — és úgy támaszt —, mint az első napon.</strong></p>
    </div>
  </div>
</section>

<style>
  .kn-wrap { max-width: 1440px; margin: 0 auto; padding: 0 22px; } /* isti container kao gornji .product */
  .kn-sec { padding: 60px 0; }
  .kn-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center; }
  .kn-h2 { font-size: clamp(26px,3.2vw,40px); font-weight: 800; color: #1b2450; line-height: 1.14; margin: 0 0 16px; }
  .kn-h2-blue { color: #2b3fb0; }
  .kn-center { text-align: center; }
  .kn-eyebrow { font-size: 13px; font-weight: 800; letter-spacing: .02em; color: #1b2450; margin: 0 0 6px; }
  .kn-copy p { font-size: 15.5px; line-height: 1.65; color: #33394f; margin: 0 0 14px; }
  .kn-sub { font-size: 16px; line-height: 1.55; color: #33394f; max-width: 680px; margin: 0 auto 10px; }
  .kn-media img { width: 100%; height: auto; display: block; border-radius: 18px; box-shadow: 0 14px 40px rgba(27,36,80,.10); }

  /* 1) marquee */
  .kn-marquee { background: #2b3fb0; overflow: hidden; white-space: nowrap; margin-top: 26px; }
  @media (min-width: 861px) { .kn-marquee { margin-top: -20px; } } /* desktop: prepolovljen razmik do vsebine zgoraj */
  .kn-marquee + .kn-sec { padding-top: 26px; }
  .kn-marquee-track { display: inline-block; padding: 13px 0; animation: knScroll 28s linear infinite; }
  .kn-tick { color: #fff; font-weight: 800; font-style: italic; font-size: 15px; letter-spacing: .06em; text-transform: uppercase; }
  .kn-dot { color: #aebafe; margin: 0 22px; font-weight: 800; }
  @keyframes knScroll { from { transform: translateX(0); } to { transform: translateX(-50%); } }

  /* 4) statistika */
  .kn-stats-sec { background: #eef1fb; }
  .kn-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; max-width: 1180px; margin: 30px auto 0; }
  .kn-stat-card { background: #fff; border-radius: 16px; padding: 34px 26px; text-align: center; box-shadow: 0 10px 28px rgba(27,36,80,.07); }
  .kn-ring { width: 150px; height: 150px; margin: 0 auto 18px; display: block; }
  .kn-ring-t { font-size: 15px; font-weight: 800; fill: #2b3fb0; }
  .kn-stat-card p { font-size: 15px; line-height: 1.5; color: #33394f; margin: 0; }
  .kn-stat-card p strong { color: #2b3fb0; }

  /* 5) rated + strip */
  .kn-rated-sec { background: #eef1fb; padding-bottom: 0; }
  .kn-stars { font-size: 16px; color: #1b2450; font-weight: 600; margin: 6px 0 26px; }
  .kn-stars span { color: #f5a623; letter-spacing: 2px; margin-right: 8px; }
  .kn-strip { overflow: hidden; width: 100vw; margin-left: calc(50% - 50vw); padding-bottom: 34px; }
  .kn-strip-track { display: flex; gap: 8px; width: max-content; animation: knScroll 60s linear infinite; }
  .kn-strip:hover .kn-strip-track { animation-play-state: paused; }
  .kn-strip-track img { width: 350px; aspect-ratio: 1/1; object-fit: cover; border-radius: 10px; display: block; flex: 0 0 auto; }

  @media (max-width: 860px) {
    .kn-sec { padding: 30px 0; }
    .kn-row2 { grid-template-columns: 1fr; gap: 18px; }
    .kn-row2 .kn-media { order: -1; }
    .kn-h2 { font-size: 2rem; }
    .kn-stats { grid-template-columns: 1fr; gap: 14px; margin-top: 18px; }
    .kn-ring { width: 120px; height: 120px; }
    .kn-strip-track img { width: 240px; }
  }
</style>
