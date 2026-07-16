<?php
/**
 * product-bottom: BÜTYÖKKORRIGÁLÓ (bunion / hallux valgus)
 *
 * Dedicated bottom-nicer for the NORIKS bunion corrector.
 * Shown via single-product-bottom-nicer.php when noriks_is_type('bunion').
 *
 * Mediji su u temi (git), relativno preko get_template_directory_uri():
 *   img/bunion-videos/section-1.mp4, section-2.mp4
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$bun_vid_dir = get_template_directory_uri() . '/img/bunion-videos/';
$bun_video_1 = $bun_vid_dir . 'section-1.mp4'; // 1) One foot away
$bun_video_2 = $bun_vid_dir . 'section-2.mp4'; // 2) Kako funkcionira

$bun_img_features = get_template_directory_uri() . '/img/bunion/features.png';

// Pravi rezultati — postotci
$bun_results = array(
    array( 'pct' => 91, 'text' => 'a felhasználók már a 2. alkalomtól a bütyök okozta fájdalom csökkenéséről számolt be' ),
    array( 'pct' => 90, 'text' => 'a felhasználók mindössze 14 nap következetes használat után (napi 30 perc) teljesen megszabadult a bütyök okozta fájdalomtól' ),
    array( 'pct' => 88, 'text' => 'a felhasználók mindössze 30 nap következetes használat után (napi 30 perc) látható javulást tapasztalt a lábujjak igazodásában' ),
);

// Zašto odabrati nas — usporedba (isti stil kao knc-table na čarapama sa zatvaračem)
$bun_cmp = array(
    '90 napos pénzvisszafizetési garancia',
    'Enyhíti a kellemetlen érzést',
    'Megakadályozza a bütyök növekedését',
    'Idővel javítja a bütyök állapotát',
    'Mozgásbarát kialakítás — járni is lehet vele',
    'Tartós és hosszú élettartamú',
);

// Kako se koristi — 3 koraka (video + opis)
$bun_steps = array(
    array( 'video' => $bun_vid_dir . 'step-1.mp4', 'caption' => 'Rögzítse a NORIKS korrigálót a nagylábujjra és a lábfejre' ),
    array( 'video' => $bun_vid_dir . 'step-2.mp4', 'caption' => 'Állítsa be a nyújtás erősségét tetszés szerint' ),
    array( 'video' => $bun_vid_dir . 'step-3.mp4', 'caption' => 'Lazítson, és hagyja, hogy a NORIKS korrigáló elvégezze a dolgát' ),
);
?>

<!-- ============ 1) Samo ste jedan korak udaljeni… ============ -->
<section class="bun-why bun-intro">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_1 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Már csak egyetlen lépés választja el attól, hogy <span class="bun-hl">megszabaduljon a bütyök okozta kellemetlenségtől</span>, a duzzadt lábujjaktól és a lábfájdalomtól…</h2>
      <p>Ha ezt olvassa, nagy a valószínűsége, hogy makacs <strong class="bun-red">bütyök okozta kellemetlenségtől</strong> szenved.</p>
      <p>Az eredmény? A fájdalom és a kellemetlen érzés kihat a mindennapi tevékenységeire.</p>
      <p>Ha kezeletlenül marad, tovább súlyosbodhat. A lábujjak egymásra csúsznak, kalapácsujj és csontkinövések alakulhatnak ki.</p>
      <p>A bütyök <strong class="bun-red">előrehaladó elváltozás</strong>, amely magától nem múlik el.</p>
      <p>Idővel ez komolyabb problémákhoz vezethet, mint például <u>invazív műtét, csípő-, térd- és derékproblémák, sőt akár mozgásképtelenség</u>.</p>
      <p>A klinikailag igazolt, fejlett igazító terápia és a szabadalmaztatott ízületi mechanizmus előnyeit kihasználva a <strong>NORIKS bütyökkorrigáló</strong> hatékonyan enyhíti a kellemetlen érzést a lábfej érintett területén, és mindössze napi 30 perc használattal helyreállítja a lábfej egészségét.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>A felhasználók 91%-a már az első héten <strong>a lábfájdalom csökkenéséről</strong> számolt be</em></p>
    </div>
  </div>
</section>

<!-- ============ 2) Kako funkcionira? ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row bun-reverse">
    <div class="bun-col bun-media">
      <video src="<?php echo esc_url( $bun_video_2 ); ?>" muted autoplay loop playsinline preload="metadata"></video>
    </div>
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Hogyan működik?</h2>
      <p>A <strong>NORIKS bütyökkorrigáló</strong> fejlett igazító terápiát alkalmaz. Úgy tervezték, hogy <strong class="bun-red">támogassa a nagylábujj</strong> újbóli beigazítását, és egy erős, szabadalmaztatott ízületi mechanizmus révén fokozatosan enyhítse a gyulladást.</p>
      <p>Segít oldani az izomfeszültséget azáltal, hogy finoman visszatereli a nagylábujjat a természetes helyzetébe, ami idővel fájdalommentes, természetes ízületi igazodáshoz vezet.</p>
      <p>Így felszabadul az évek során felgyülemlett feszültség, a kidudorodás kiegyenesedik és csökken, a fájdalom enyhül, a további növekedés pedig megelőzhető — hogy újra magabiztosan, egyenesen állhasson a lábán.</p>
      <p>Egyes felhasználóknak egy-két alkalom kell, hogy hozzászokjanak, mert <strong class="bun-red">az érzés erőteljesebb lehet</strong>, mint más módszereknél.</p>
      <p>Ez egy természetes és nem invazív módja annak, hogy visszaállítsa a lábujj és a lábfej természetes helyzetét, és kijavítsa a nem megfelelő lábbeli vagy a genetika okozta károkat.</p>
      <p>Legyen szó apró gyereklábról vagy nagy felnőtt lábfejről, <u>a korrigáló úgy készült, hogy kényelmesen illeszkedjen minden lábmérethez</u>.</p>
      <p class="bun-stat"><span class="bun-check" aria-hidden="true">✔</span> <em>A felhasználók 87%-a már az első hónapban <strong>látható javulásról</strong> számolt be</em></p>
    </div>
  </div>
</section>

<!-- ============ 3) Kako se koristi (sivo, 3 koraka) ============ -->
<section class="bun-why bun-howto">
  <div class="bun-wrap">
    <h2 class="bun-howto-title">Hogyan kell használni</h2>
    <div class="bun-howto-intro">
      <p>Azt javasoljuk, hogy napi 30 perccel kezdje, és fokozatosan növelje 1–3 órás alkalmakig.</p>
      <p>Amikor már kényelmesen érzi magát, éjszaka, alvás közben is elkezdheti viselni.</p>
      <p>Leginkább pihenéshez alkalmas — miközben a kanapén fekszik, tévézik, olvas vagy alszik.</p>
      <p>A piacon lévő más termékektől eltérően azonban mozoghat is anélkül, hogy a NORIKS korrigáló korlátozná a mozgásban, hála a mozgásbarát kialakításának.</p>
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
</section>

<!-- ============ 4) 8 razloga zašto ćete ga voljeti ============ -->
<section class="bun-why">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">8 ok, amiért imádni fogja</h2>
      <ul class="bun-reasons">
        <li><strong>Enyhíti a kellemetlen érzést</strong> járás, edzés, állás és alvás közben</li>
        <li><strong>Megakadályozza</strong> a bütyök további növekedését</li>
        <li><strong>Műtét nélküli megoldás</strong> a megkönnyebbülésre</li>
        <li>Szilárd ízületi igazodás, amely <strong>valóban javítja az állapotát</strong></li>
        <li><strong>Állítható</strong> nyújtási erősség</li>
        <li><strong>Orvosi szakemberek</strong> által kifejlesztve és ajánlva</li>
        <li><strong>Egyszerű használat</strong> és hordozható</li>
        <li><strong>90 napos pénzvisszafizetési garancia</strong> („eredmény vagy teljes visszatérítés"), mert annyira biztosak vagyunk a termékünkben, és tudjuk, hogy segíteni fog Önnek</li>
      </ul>
    </div>
    <div class="bun-col bun-media">
      <img loading="lazy" decoding="async" src="<?php echo esc_url( $bun_img_features ); ?>" alt="Miért más a NORIKS bütyökkorrigáló" />
    </div>
  </div>
</section>

<!-- ============ 5) Pravi rezultati, pravi ljudi ============ -->
<section class="bun-why bun-results-sec">
  <div class="bun-wrap bun-row">
    <div class="bun-col bun-copy">
      <h2 class="bun-title">Valódi <span class="bun-hl">eredmények</span>, valódi emberek</h2>
      <p>Fogyasztói tesztet végeztünk, amelynek keretében a NORIKS bütyökkorrigálót több mint <strong>37 podológiai rendelőbe</strong> juttattuk el. Összesen <strong>432 bütyökkel küzdő páciens</strong> tesztelte. Íme az eredmények.</p>
    </div>
    <div class="bun-col">
      <div class="bun-results">
        <?php foreach ( $bun_results as $bun_r ) : $bun_dash = round( $bun_r['pct'] * 1.6336, 1 ); ?>
          <div class="bun-result">
            <svg class="bun-ring" viewBox="0 0 60 60" aria-hidden="true">
              <circle cx="30" cy="30" r="26" fill="none" stroke="#dfe6ee" stroke-width="5"/>
              <circle cx="30" cy="30" r="26" fill="none" stroke="#1a86d0" stroke-width="5" stroke-linecap="round"
                      stroke-dasharray="<?php echo esc_attr( $bun_dash ); ?> 163.4" transform="rotate(-90 30 30)"/>
              <text x="30" y="34" text-anchor="middle" class="bun-ring-txt"><?php echo (int) $bun_r['pct']; ?>%</text>
            </svg>
            <p class="bun-result-text"><?php echo esc_html( $bun_r['text'] ); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ============ 6) Zašto odabrati nas? (usporedna tablica, knc stil) ============ -->
<section class="bun-cmp-section">
  <div class="bun-cmp-wrap">
    <h2 class="bun-cmp-title">Miért minket válasszon?</h2>
    <p class="bun-cmp-lead">Ne dőljön be az <span class="bun-hl">OLCSÓ utánzatoknak</span></p>
    <p class="bun-cmp-sub">Így teljesít a <strong>NORIKS bütyökkorrigáló</strong> a többihez képest:</p>
    <div class="bun-cmp-scroll">
      <table class="bun-cmp-table">
        <thead>
          <tr>
            <th></th>
            <th class="bun-us">NORIKS</th>
            <th class="bun-comp">Más korrigálók</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ( $bun_cmp as $bun_row ) : ?>
            <tr>
              <td><?php echo esc_html( $bun_row ); ?></td>
              <td class="us ok">✓</td>
              <td class="no">✕</td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<style>
  /* Nema "Tablica veličina" linka na korektoru čukljeva (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis (short description): sakrij standardne točke (•), ostaje samo ✅;
     razmak iznad "Prednosti:" i više prostora ispod liste.
     (Ovaj se predložak učitava samo na orto-bunion stranicama.) */
  .woocommerce-product-details__short-description ul {
      list-style: none;
      margin: 8px 0 26px;
      padding-left: 0;
  }
  .woocommerce-product-details__short-description ul li {
      list-style: none;
      padding-left: 0;
      margin-left: 0;
  }
  .woocommerce-product-details__short-description p:has(+ ul) {
      margin-top: 20px;
      margin-bottom: 4px;
  }

  .bun-why { padding: 44px 0; }
  .bun-why.bun-intro { background: #fbf9f4; }
  .bun-wrap { max-width: 1180px; margin: 0 auto; padding: 0 16px; }
  .bun-row { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .bun-media video { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-title { font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; line-height: 1.2; margin: 0 0 18px; }
  .bun-hl { color: #1a86d0; }
  .bun-red { color: #e0563f; }
  .bun-copy p { font-size: 16px; line-height: 1.7; color: #333; margin: 0 0 12px; }
  .bun-stat { display: flex; align-items: flex-start; gap: 8px; margin-top: 6px !important; }
  .bun-check { color: #1a86d0; font-weight: 800; }
  .bun-stat em { font-style: italic; color: #333; }

  /* section 2: media on the right */
  .bun-reverse .bun-media { order: 2; }
  .bun-reverse .bun-copy { order: 1; }

  /* 3) Kako se koristi (sivo ozadje) */
  .bun-why.bun-howto { background: #f0f2f5; }
  .bun-howto-title { text-align: center; font-size: clamp(24px,2.9vw,34px); font-weight: 800; color: #1c1c1c; margin: 0 0 18px; }
  .bun-howto-intro { max-width: 820px; margin: 0 auto 34px; text-align: center; }
  .bun-howto-intro p { font-size: 16px; line-height: 1.6; color: #333; margin: 0 0 12px; }
  .bun-steps-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 26px; }
  .bun-step { text-align: center; }
  .bun-step-media { width: 100%; aspect-ratio: 1 / 1; border-radius: 14px; overflow: hidden; background: #e6e9ee; }
  .bun-step-media video { width: 100%; height: 100%; object-fit: cover; display: block; }
  .bun-step-num { font-size: 22px; font-weight: 800; color: #1c1c1c; margin: 14px 0 6px; }
  .bun-step-caption { font-size: 15px; line-height: 1.5; color: #333; margin: 0 8px; }

  /* 4) 8 razloga */
  .bun-media img { width: 100%; height: auto; border-radius: 12px; display: block; }
  .bun-reasons { list-style: none; margin: 0; padding: 0; }
  .bun-reasons li { position: relative; padding: 0 0 16px 34px; font-size: 15.5px; line-height: 1.5; color: #333; }
  .bun-reasons li:before {
      content: ""; position: absolute; left: 0; top: 1px; width: 22px; height: 22px; border-radius: 50%;
      background: #1a86d0 url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24'><path d='M6 12.5l4 4 8-8' fill='none' stroke='white' stroke-width='2.6' stroke-linecap='round' stroke-linejoin='round'/></svg>") center/15px no-repeat;
  }

  /* 5) Pravi rezultati */
  .bun-results { display: flex; flex-direction: column; gap: 18px; }
  .bun-result { display: flex; align-items: center; gap: 16px; border-bottom: 1px solid #e6e6e6; padding-bottom: 16px; }
  .bun-result:last-child { border-bottom: 0; padding-bottom: 0; }
  .bun-ring { width: 70px; height: 70px; flex: 0 0 70px; }
  .bun-ring-txt { font-size: 16px; font-weight: 800; fill: #1a86d0; }
  .bun-result-text { font-size: 14.5px; line-height: 1.5; color: #333; margin: 0; }

  /* 6) Zašto odabrati nas — usporedna tablica (isti stil kao knc-table) */
  .bun-cmp-section { background:#fff; padding:44px 0; }
  .bun-cmp-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .bun-cmp-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:800; color:#111; margin:0 0 8px; }
  .bun-cmp-lead { text-align:center; font-size:18px; font-weight:800; color:#111; margin:0 0 6px; }
  .bun-cmp-sub { text-align:center; font-size:14px; color:#444; margin:0 0 24px; }
  .bun-cmp-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .bun-cmp-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .bun-cmp-table th, .bun-cmp-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .bun-cmp-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .bun-cmp-table thead th:first-child { width:52%; background:#fff; }
  .bun-cmp-table .bun-comp { background:#767676; }
  .bun-cmp-table .bun-us { background:#111; }
  .bun-cmp-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .bun-cmp-table tbody tr { border-bottom:1px solid #eef0f4; }
  .bun-cmp-table tbody tr:nth-child(even) { background:#fafbfc; }
  .bun-cmp-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .bun-cmp-table td.no { color:#d64545; font-size:18px; font-weight:700; }
  .bun-cmp-table td.us { background:#f3f3f3 !important; }
  .bun-cmp-table td.us.ok { color:#1a9e5f; }
  @media (max-width:600px) {
    .bun-cmp-table th, .bun-cmp-table td { padding:12px 6px; font-size:13px; }
    .bun-cmp-table thead th { font-size:12px; }
    .bun-cmp-table tbody td:first-child { font-size:12px; padding-left:10px; }
  }

  @media (max-width: 820px) {
    .bun-row { grid-template-columns: 1fr; gap: 22px; }
    .bun-reverse .bun-media { order: 0; }
    .bun-reverse .bun-copy { order: 0; }
    .bun-steps-grid { grid-template-columns: 1fr; gap: 18px; }
  }
</style>
