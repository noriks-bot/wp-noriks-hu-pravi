<?php
/**
 * product-bottom: NORIKS KneeFix — ortopedska steznica za koljeno (orto-kneefix).
 * Sekcije i redoslijed preslikani s referentne stranice, tekst na HR,
 * slike su NORIKS kreative iz img/kneefix/. Svaka sekcija ima sliku s jedne
 * i tekst s druge strane (naizmjenično) — nema sekcija koje su samo slika.
 *   1. Amikor minden lépés kellemetlenné válik   slika lijevo   13_stepenice
 *   2. Talán nem csak kopásról van szó   slika desno    14_zglob
 *   3. Támasz az aktív térdeknek         slika lijevo   08_aktivno
 *   4. 4 funkció. Stabilabb érzés.    slika desno    03_funkcije
 *   5. Kényelmes támasz 3 lépésben          slika lijevo   04_koraki
 *   6. Több kényelem a mindennapokban      slika desno    05_lifestyle
 *   7. Preporučeno za potporu koljena     slika lijevo   06_zdravnik
 *   8. A különbség érezhető                  slika desno    07_vs
 *   9. Mit mondanak vásárlóink                3 kartice      10/11/12
 * Recenzije i FAQ renderira zajednički reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$kf      = get_template_directory_uri() . '/img/kneefix/';
$kf_path = get_template_directory() . '/img/kneefix/';

/* Ako slika nije na serveru, prikaže se neutralni sivi placeholder. */
$kf_img = function( $file, $alt ) use ( $kf, $kf_path ) {
  if ( file_exists( $kf_path . $file ) ) {
    return '<img src="'.esc_url($kf.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="kfx-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<!-- ============ 1) Amikor minden lépés kellemetlenné válik ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('13_stepenice.jpg','Térdfájdalom lépcsőn lefelé menet'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Amikor minden lépés kellemetlenné válik</h2>
      <p class="kfx-lead">Eleinte ez gyakran csak enyhe húzó érzés.</p>
      <p>Aztán jönnek a pillanatok, amikor a térdét sokkal erősebben megérzi:</p>
      <ul class="kfx-list">
        <li>Felálláskor</li>
        <li>Lépcsőn</li>
        <li>Hosszabb ülés után</li>
        <li>Járás vagy hosszabb állás közben</li>
      </ul>
      <p>Sokan ilyenkor önkéntelenül kerülni kezdik a mozgást. Lassabban járnak, észrevétlenül tehermentesítik a térdüket, vagy bizonytalannak érzik magukat a hétköznapi mozdulatoknál.</p>
      <p class="kfx-strong">A gond az, hogy minél óvatosabban mozog, annál inkább a térd kerül a mindennapjai középpontjába.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Talán nem csak kopásról van szó ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Talán nem csak kopásról van szó</h2>
      <p>Sok szokásos magyarázat csak „elhasználódásról" beszél. A térdfájdalom azonban gyakran inkább olyan, mint <strong>nyomás, irritáció vagy instabilitás</strong>.</p>
      <p>Az egyik lehetséges ok az ingerült ízületi tok — a térdízület érzékeny belső hártyája. Ha ez a szövet irritálódik, a térd érzékenyebben reagálhat a terhelésre. Ez így jelentkezhet:</p>
      <ul class="kfx-inline-list">
        <li>Nyomásérzés a térdkalács körül</li>
        <li>Merevség pihenés után</li>
        <li>Bizonytalanság mozgás közben</li>
        <li>Érzékenység terhelésnél</li>
      </ul>
      <p>Sok klasszikus ortézis merev rögzítéssel próbálja megoldani a problémát. A kemény ortézisek azonban kényelmetlenek lehetnek, lecsúsznak vagy korlátozzák a természetes mozgást. Éppen ezért lett a <strong>NORIKS KneeFix</strong> másképp kialakítva.</p>
    </div>
    <div class="kfx-media"><?php echo $kf_img('14_zglob.jpg','A térdízület ingerült ízületi tokja'); ?></div>
  </div>
</section>

<!-- ============ 3) Támasz az aktív térdeknek ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('08_aktiv_HU.webp','Maradjon aktív — térdkorlátozás nélkül'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Támasz az aktív térdeknek</h2>
      <p><strong>NORIKS KneeFix</strong> több funkciót egyesít egyetlen rugalmas, hétköznapi támaszrendszerben. Nehéz ortézis helyett ezt kapja:</p>
      <ul class="kfx-check">
        <li>Kompressziót, amit Ön állít be</li>
        <li>Oldalsó stabilizálást</li>
        <li>Zselés párnát a térdkalács tehermentesítésére</li>
        <li>Csúszásmentes tapadó szegélyt</li>
      </ul>
      <p>A cél nem a térd rögzítése. A KneeFix arra készült, hogy kényelmesebben támassza a térdet a mindennapi mozgásban — járás közben, munkában, vásárláskor vagy útközben.</p>
    </div>
  </div>
</section>

<!-- ============ 4) 4 funkció. Stabilabb érzés. ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">4 funkció. Stabilabb érzés.</h2>
      <p>A KneeFix nem csak egyvalamit csinál — több támaszrendszer működik egyszerre:</p>
      <ul class="kfx-check">
        <li><strong>Precíz állítókerék a kompresszióhoz</strong> — állítható kompresszió és biztos illeszkedés</li>
        <li><strong>Kettős oldalsó stabilizátorok</strong> — a térd oldalirányú stabilitása</li>
        <li><strong>Zselés párna a térdkalácsra</strong> — nyomáscsökkentés és ütéscsillapítás</li>
        <li><strong>Szilikonos tapadás a lecsúszás ellen</strong> — a puha szilikonfelület megakadályozza a lecsúszást és a felgyűrődést</li>
      </ul>
    </div>
    <div class="kfx-media"><?php echo $kf_img('03_funkciok_HU.webp','A NORIKS KneeFix rögzítő négy funkciója'); ?></div>
  </div>
</section>

<!-- ============ 5) Kényelmes támasz 3 lépésben ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('04_lepesek_HU.webp','Kényelmes támasz három lépésben — húzza fel, igazítsa, állítsa be'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Kényelmes támasz 3 lépésben</h2>
      <ol class="kfx-steps">
        <li><strong>Húzza fel a rögzítőt a térdére.</strong> Húzza feljebb a biztos és kényelmes illeszkedésért.</li>
        <li><strong>Igazítsa be a zselés párnát.</strong> Helyezze középre a térdkalács köré.</li>
        <li><strong>Állítsa be a kompressziót.</strong> Az állítókerék forgatásával szabályozza a támaszt és a stabilitást.</li>
      </ol>
      <p>Bonyolult pántok és beállítás nélkül — másodpercek alatt kész.</p>
    </div>
  </div>
</section>

<!-- ============ 6) Több kényelem a mindennapokban ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">Több kényelem a mindennapokban</h2>
      <p>Sokan nem akarnak nehéz sportortézist. Egyszerűen csak azt szeretnék:</p>
      <ul class="kfx-check">
        <li>Biztonságosabban járni</li>
        <li>Nyugodtabban lépcsőzni</li>
        <li>Tovább állni</li>
        <li>Szabadabban mozogni</li>
      </ul>
      <p>A NORIKS KneeFix azért készült, hogy a mindennapi mozdulatok kellemesebbek legyenek — felesleges korlátozás nélkül. A rugalmas anyag jobban alkalmazkodik a napjához, és ott támasztja a térdet, ahol arra szükség van.</p>
      <a class="kfx-cta" href="#bundle-selector">Válassza ki a méretét →</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('05_lifestyle_HU.webp','KneeFix a mindennapokban — séta, kerékpár, edzés'); ?></div>
  </div>
</section>

<!-- ============ 7) Ajánlott a térd mindennapi támogatására ============ -->
<section class="kfx-sec">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-media"><?php echo $kf_img('06_orvos_HU.webp','Ajánlott a térd mindennapi támogatására'); ?></div>
    <div class="kfx-copy">
      <h2 class="kfx-h2">Ajánlott a térd mindennapi támogatására</h2>
      <ul class="kfx-check">
        <li>Állítható kompressziós támasz</li>
        <li>Stabilizálja és védi a térdet</li>
        <li>Kényelmes a mindennapi viseléshez</li>
      </ul>
      <p>A KneeFix mindennapi támaszként készült, nem orvosi kezelésként. Akut sérülés vagy tartós panasz esetén a viselésről kérdezze meg orvosát.</p>
    </div>
  </div>
</section>

<!-- ============ 8) A különbség érezhető ============ -->
<section class="kfx-sec kfx-alt">
  <div class="kfx-wrap kfx-row2">
    <div class="kfx-copy">
      <h2 class="kfx-h2">A különbség érezhető</h2>
      <p>A hagyományos ortézisek gyakran úgy oldják meg a problémát, hogy rögzítik a térdet. A KneeFix más utat jár — támogatja a mozgást ahelyett, hogy blokkolná.</p>
      <ul class="kfx-check">
        <li>Természetes járás a merev mozgás helyett</li>
        <li>Ellazult testtartás a kényelmetlen pozíció helyett</li>
        <li>Mozgásszabadság és kényelem a látható térdterhelés helyett</li>
      </ul>
      <a class="kfx-cta" href="#bundle-selector">KneeFix megrendelése</a>
    </div>
    <div class="kfx-media"><?php echo $kf_img('07_vs_HU.webp','NORIKS térdrögzítő a hagyományos ortézishez képest'); ?></div>
  </div>
</section>

<!-- ============ 9) Mit mondanak vásárlóink ============ -->
<section class="kfx-sec kfx-revs">
  <div class="kfx-wrap">
    <h2 class="kfx-h2 kfx-center">Mit mondanak vásárlóink</h2>
    <p class="kfx-sub kfx-center"><strong>Több ezer vásárló hordja már naponta a NORIKS KneeFixet</strong> mert arra készült, hogy célzottan támassza a térdet — ahelyett, hogy feleslegesen korlátozná a mozgást vagy csak rövid távon fedné el a panaszokat.</p>
    <div class="kfx-rev-grid">
      <?php foreach ( array(
        array( '10_review-1.jpg', 'Végre stabilabb járás', 'Több rögzítőt is kipróbáltam már, de vagy túl merevek voltak, vagy folyton lecsúsztak. Ez érezhetően kényelmesebben ül, és járás közben, lépcsőn sokkal több stabilitást ad a térdnek.', 'Damir P.' ),
        array( '11_review-3.jpg', 'Több biztonság a lépcsőn', 'A lépcső évekig kínszenvedés volt, mert a térdem instabilnak tűnt. Amióta KneeFixet hordok, sokkal biztonságosabban érzem magam. Hosszabb sétán is alig csúszik.', 'Sanja M.' ),
        array( '12_review-6.jpg', 'Kellemes a mindennapokban', 'Munkában hordom, és nem gondoltam, hogy ennyire kényelmes lesz. Az anyag rugalmas, a kompresszió könnyen állítható, nadrág alatt pedig szinte észre sem venni.', 'Vesna N.' ),
      ) as $rv ) : ?>
        <article class="kfx-rev">
          <div class="kfx-rev-img"><?php echo $kf_img( $rv[0], 'Vásárló a NORIKS KneeFix rögzítővel' ); ?></div>
          <div class="kfx-rev-body">
            <div class="kfx-stars" aria-label="Ocjena 5 od 5">★★★★★</div>
            <p class="kfx-rev-title"><?php echo esc_html( $rv[1] ); ?></p>
            <p class="kfx-rev-text"><?php echo esc_html( $rv[2] ); ?></p>
            <p class="kfx-rev-name"><?php echo esc_html( $rv[3] ); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .kfx-sec { padding: 48px 0; }
  .kfx-alt { background: #f5f6f7; }
  .kfx-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .kfx-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .kfx-h2 { font-size: clamp(24px,3.1vw,36px); font-weight: 800; color: #141414; line-height: 1.15; margin: 0 0 16px; }
  .kfx-center { text-align: center; }
  .kfx-copy p, .kfx-sub { font-size: 16px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .kfx-sub { max-width: 820px; margin: 0 auto 26px; }
  .kfx-lead { font-weight: 700; color: #141414; }
  .kfx-strong { font-weight: 700; color: #141414; }
  .kfx-media img { width: 100%; height: auto; display: block; border-radius: 16px; }

  .kfx-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .kfx-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .kfx-list { margin: 0 0 16px; padding-left: 20px; }
  .kfx-list li { font-size: 16px; line-height: 1.6; color: #3a3a3a; margin: 0 0 6px; }
  .kfx-inline-list { list-style: none; display: flex; flex-wrap: wrap; gap: 8px 10px; margin: 0 0 16px; padding: 0; }
  .kfx-inline-list li { background: #fff; border: 1px solid #e4e4e4; border-radius: 999px; padding: 8px 16px; font-size: 14px; color: #141414; }
  .kfx-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .kfx-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #141414; line-height: 1.5; }
  .kfx-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #141414; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }
  .kfx-steps { list-style: none; counter-reset: kfxstep; margin: 0 0 16px; padding: 0; }
  .kfx-steps li { counter-increment: kfxstep; position: relative; padding: 0 0 14px 40px; font-size: 15.5px; line-height: 1.55; color: #3a3a3a; }
  .kfx-steps li:before { content: counter(kfxstep); position: absolute; left: 0; top: 0; width: 26px; height: 26px; background: #141414; color: #fff; border-radius: 50%; font-size: 13px; font-weight: 700; text-align: center; line-height: 26px; }

  .kfx-cta { display: inline-block; margin-top: 8px; background: #141414; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .kfx-cta:hover { background: #E8450E; color: #fff; }

  /* 9) recenzije s fotografijama kupaca */
  .kfx-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; }
  .kfx-rev { background: #fff; border: 1px solid #e8e8e8; border-radius: 14px; overflow: hidden; }
  .kfx-rev-img img { width: 100%; height: 100%; aspect-ratio: 3/4; object-fit: cover; display: block; border-radius: 0; }
  .kfx-rev-body { padding: 16px 18px 18px; text-align: center; }
  .kfx-stars { color: #f5a623; font-size: 15px; letter-spacing: 1px; }
  .kfx-rev-title { font-weight: 700; color: #141414; font-size: 15px; margin: 8px 0 8px; }
  .kfx-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 12px; }
  .kfx-rev-name { font-size: 13px; font-style: italic; font-weight: 700; color: #6b6b6b; margin: 0; padding-top: 10px; border-top: 1px solid #ededed; }

  @media (max-width: 820px) {
    .kfx-sec { padding: 30px 0; }
    .kfx-row2 { grid-template-columns: 1fr; gap: 20px; }
    .kfx-row2 .kfx-media { order: -1; }
    .kfx-h2 { font-size: 2rem; }
    .kfx-rev-grid { grid-template-columns: 1fr; }
    .kfx-rev-img img { aspect-ratio: 4/3; }
  }

  /* Nema "Tablica veličina" linka na KneeFixu (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): sakrij standardne točke (•), ostaje samo ✅
     iz teksta; razmak između "Prednosti:" i liste te ispod liste.
     (Ovaj se predložak učitava samo na orto-kneefix stranicama.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
      line-height: 1.55;
      margin-bottom: 6px;
  }
  /* razmak iznad "Prednosti:" (paragraf neposredno prije liste) */
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }
</style>

<script>
(function(){
  document.querySelectorAll('a.kfx-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
