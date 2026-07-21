<?php
/* Bütyökkorrigáló (bunion) és ortopédiai hátöv (ortopas): saját why-szekciók.
   NINCS return — utána a közös értékelés-rendszer + GYIK fut le (a többi
   why-szekció típusonként van kapuzva, így ezekre a termékekre nem jelenik meg). */
if ( function_exists( 'noriks_is_type' ) ) {
    if ( noriks_is_type( 'bunion' ) ) {
        get_template_part( 'template_parts/product-bottom/why-bunion' );
    } elseif ( noriks_is_type( 'ortopas' ) ) {
        get_template_part( 'template_parts/product-bottom/why-ortopas' );
    } elseif ( noriks_is_type( 'fisiorest' ) ) {
        get_template_part( 'template_parts/product-bottom/why-fisiorest' );
    }
}
?>
<?php if ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>
<?php
// Compression socks: demo + comparison + benefits + UGC (assets in img/ and img/kompresijske-videos/).
$kn_dir_path = get_template_directory() . '/img/';
$kn_dir_uri  = get_template_directory_uri() . '/img/';
$kn_matches  = glob( $kn_dir_path . 'kompresijske*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE );
$kn_matches  = is_array( $kn_matches ) ? $kn_matches : array();
sort( $kn_matches );
$kn_img_1       = isset( $kn_matches[0] ) ? ( $kn_dir_uri . rawurlencode( basename( $kn_matches[0] ) ) ) : '';
$kn_placeholder = '<div style="width:100%;aspect-ratio:1/1;background:#f1f1f1;"></div>';
$knv = get_template_directory_uri() . '/img/kompresijske-videos/';
?>
<!-- Így működik a gyakorlatban (product demo videos, autoplay on view) — FIRST -->
<section class="why-section knc-demo">
  <div class="knc-demo-wrap">
    <h2 class="knc-demo-title">Így működik a gyakorlatban</h2>
    <div class="knc-demo-grid">
      <video class="knc-lazyvid" data-src="<?php echo esc_url( $knv ); ?>demo-1.mp4" poster="<?php echo esc_url( $knv ); ?>demo-1-poster.jpg" muted loop playsinline preload="none"></video>
      <video class="knc-lazyvid" data-src="<?php echo esc_url( $knv ); ?>demo-2.mp4" poster="<?php echo esc_url( $knv ); ?>demo-2-poster.jpg" muted loop playsinline preload="none"></video>
      <video class="knc-lazyvid" data-src="<?php echo esc_url( $knv ); ?>demo-3.mp4" poster="<?php echo esc_url( $knv ); ?>demo-3-poster.jpg" muted loop playsinline preload="none"></video>
      <video class="knc-lazyvid" data-src="<?php echo esc_url( $knv ); ?>demo-4.mp4" poster="<?php echo esc_url( $knv ); ?>demo-4-poster.jpg" muted loop playsinline preload="none"></video>
    </div>
  </div>
</section>
<!-- Compression socks: NORIKS vs. others comparison -->
<section class="why-section knc-compare-section">
  <div class="knc-compare-wrap">
    <h2 class="knc-compare-title">NORIKS vs. a többiek</h2>
    <div class="knc-table-scroll">
      <table class="knc-table">
        <thead>
          <tr>
            <th class="knc-feat"></th>
            <th class="knc-comp">Klasszikus zoknik<span>(Bauerfeind, medi…)</span></th>
            <th class="knc-comp">TV-zoknik<span>(Zip Sox &amp; Co.)</span></th>
            <th class="knc-us">NORIKS<em class="knc-badge">1. sz.</em></th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Orvosi kompresszió</td><td class="ok">✓</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Cipzár a könnyű felvételhez</td><td class="no">✕</td><td class="ok">✓</td><td class="us ok">✓</td></tr>
          <tr><td>Önálló felvétel segítség nélkül</td><td class="no">✕</td><td class="mid">~</td><td class="us ok">✓</td></tr>
          <tr><td>Megerősített cipzár, sosem akad be</td><td class="mid">—</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Lélegző anyag</td><td class="mid">~</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>Egész napos kényelem (+12 óra)</td><td class="mid">~</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr><td>60 napos pénzvisszafizetési garancia</td><td class="no">✕</td><td class="no">✕</td><td class="us ok">✓</td></tr>
          <tr class="knc-price"><td>Ár páronként</td><td>34.000 Ft-tól</td><td>~6.000 Ft</td><td class="us">9.330 Ft-tól</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
<style>
  .knc-compare-section { background:#fff; padding:30px 0 40px; }
  .knc-compare-wrap { max-width:940px; margin:0 auto; padding:0 16px; }
  .knc-compare-title { text-align:center; font-size:clamp(24px,3vw,34px); font-weight:700; color:#111; margin:0 0 24px; }
  .knc-table-scroll { border-radius:16px; overflow:hidden; box-shadow:0 12px 34px rgba(18,48,90,.12); border:1px solid #edf0f4; }
  .knc-table { width:100%; border-collapse:collapse; table-layout:fixed; margin:0 !important; }
  .knc-table th, .knc-table td { padding:15px 12px; text-align:center; font-size:15px; }
  .knc-table thead th { color:#fff; font-weight:700; vertical-align:middle; font-size:14px; }
  .knc-table thead th:first-child { width:34%; background:#fff; }
  .knc-table .knc-comp { background:#767676; }
  .knc-table .knc-comp span { display:block; font-weight:400; font-size:11.5px; opacity:.8; margin-top:3px; }
  .knc-table .knc-us { background:#111; }
  .knc-badge { display:inline-block; margin-left:6px; background:#fff; color:#111; font-style:normal; font-weight:700; font-size:10.5px; padding:2px 8px; border-radius:999px; vertical-align:middle; }
  .knc-table tbody td:first-child { text-align:left; font-weight:600; color:#111; font-size:14px; line-height:1.3; padding-left:18px; }
  .knc-table tbody tr { border-bottom:1px solid #eef0f4; }
  .knc-table tbody tr:nth-child(even) { background:#fafbfc; }
  .knc-table td.ok { color:#1a9e5f; font-size:19px; font-weight:700; }
  .knc-table td.no { color:#cdd2da; font-size:18px; }
  .knc-table td.mid { color:#e0a52e; font-size:18px; font-weight:700; }
  .knc-table td.us { background:#f3f3f3 !important; }
  .knc-table td.us.ok { color:#1a9e5f; }
  .knc-table .knc-price td { font-weight:700; color:#4a5568; }
  .knc-table .knc-price td:first-child { color:#1e2a3a; }
  .knc-table .knc-price td.us { color:#111; font-size:16px; }
  @media (max-width:640px){
    .knc-table th, .knc-table td { padding:12px 6px; font-size:13px; }
    .knc-table thead th { font-size:12px; }
    .knc-table thead th:first-child { width:40%; }
    .knc-table tbody td:first-child { font-size:12px; padding-left:10px; }
    .knc-badge { display:block; margin:4px auto 0; width:-moz-max-content; width:max-content; }
  }
</style>

<!-- Miért kompressziós zokni? (előnyök) -->
<section class="why-section">
  <div style="max-width: 1440px;" class="container why-container">
    <div class="why-col">
      <div class="video-wrapper">
        <?php if ( $kn_img_1 ) : ?>
          <img loading="lazy" decoding="async" style="width:100%; aspect-ratio:1/1; object-fit:cover;" src="<?php echo esc_url( $kn_img_1 ); ?>" alt="Kompressziós zokni">
        <?php else : echo $kn_placeholder; endif; ?>
      </div>
    </div>
    <div class="why-col why-content">
      <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
        MIÉRT KOMPRESSZIÓS ZOKNI?
      </h2>
      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Jobb vérkeringés, kevesebb fáradtság</strong></p>
        <p class="description">A fokozatos kompresszió gyengéden serkenti a szív felé irányuló véráramlást, csökkenti a lábak nehézség- és fáradtságérzetét, és segít, hogy a lábak a leghosszabb napon is könnyűek maradjanak.</p>
      </div>
      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Kevesebb duzzanat</strong></p>
        <p class="description">Ideális hosszú utazásokhoz, hosszan tartó álláshoz vagy üléshez. Az egyenletes nyomás csökkenti a folyadék-visszatartást, valamint a boka és a vádli duzzanatát.</p>
      </div>
      <div style="margin-left: 20px;" class="why-point">
        <p><strong>Érezhető támogatás</strong></p>
        <p class="description">Az anatómiai szabás a helyén tartja a zoknit, felül nem szorít. Feszes, mégis kényelmes támogatás érzése egész nap.</p>
      </div>
    </div>
  </div>
</section>

<!-- Mit mondanak vásárlóink (UGC testimonial videos, load on click) -->
<section class="why-section knc-ugc">
  <div class="knc-ugc-wrap">
    <h2 class="knc-ugc-title">Mit mondanak vásárlóink</h2>
    <div class="knc-ugc-grid">
      <div class="knc-ugc-item" data-src="<?php echo esc_url( $knv ); ?>review-1.mp4"><video class="knc-ugc-video" poster="<?php echo esc_url( $knv ); ?>review-1-poster.jpg" preload="none" playsinline></video><span class="knc-ugc-play" aria-label="Play"></span></div>
      <div class="knc-ugc-item" data-src="<?php echo esc_url( $knv ); ?>review-2.mp4"><video class="knc-ugc-video" poster="<?php echo esc_url( $knv ); ?>review-2-poster.jpg" preload="none" playsinline></video><span class="knc-ugc-play" aria-label="Play"></span></div>
      <div class="knc-ugc-item" data-src="<?php echo esc_url( $knv ); ?>review-3.mp4"><video class="knc-ugc-video" poster="<?php echo esc_url( $knv ); ?>review-3-poster.jpg" preload="none" playsinline></video><span class="knc-ugc-play" aria-label="Play"></span></div>
    </div>
  </div>
</section>

<style>
  .knc-demo { background:#f4f4f4; padding:30px 0 22px; }
  .knc-demo-wrap, .knc-ugc-wrap { max-width:1100px; margin:0 auto; padding:0 16px; }
  .knc-demo-title { text-align:center; font-size:clamp(22px,3vw,30px); font-weight:700; color:#222; margin:0 0 22px; }
  .knc-demo-grid { display:grid; grid-template-columns:repeat(4,1fr); gap:14px; }
  .knc-lazyvid { width:100%; aspect-ratio:9/16; object-fit:cover; border-radius:8px; background:#eceae4; display:block; }
  .knc-ugc { background:#fff; padding:34px 0 42px; }
  .knc-ugc-title { text-align:center; font-size:clamp(22px,3vw,30px); font-weight:700; color:#222; margin:0 0 24px; }
  .knc-ugc-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; max-width:820px; margin:0 auto; }
  .knc-ugc-item { position:relative; aspect-ratio:9/16; border-radius:8px; overflow:hidden; background:#0d2444; cursor:pointer; }
  .knc-ugc-item video { width:100%; height:100%; object-fit:cover; display:block; }
  .knc-ugc-play { position:absolute; top:50%; left:50%; transform:translate(-50%,-50%); width:56px; height:56px; border-radius:50%; background:rgba(255,255,255,.92); }
  .knc-ugc-play::after { content:""; position:absolute; top:50%; left:54%; transform:translate(-50%,-50%); border-style:solid; border-width:11px 0 11px 18px; border-color:transparent transparent transparent #111; }
  @media (max-width:768px){
    .knc-demo-grid { grid-template-columns:repeat(2,1fr); gap:10px; }
  }
  @media (max-width:560px){
    .knc-ugc-grid { grid-template-columns:1fr; max-width:320px; }
  }
</style>

<script>
(function(){
  var lazy = document.querySelectorAll('.knc-lazyvid');
  if ('IntersectionObserver' in window && lazy.length){
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(en){
        var v = en.target;
        if (en.isIntersecting){
          if (!v.src){ v.src = v.dataset.src; }
          var p = v.play(); if (p && p.catch) p.catch(function(){});
        } else { v.pause(); }
      });
    }, { threshold:0.25 });
    lazy.forEach(function(v){ io.observe(v); });
  } else {
    lazy.forEach(function(v){ if(!v.src){ v.src = v.dataset.src; v.play&&v.play(); } });
  }
  document.querySelectorAll('.knc-ugc-item').forEach(function(item){
    item.addEventListener('click', function(){
      if (item.dataset.loaded) return;
      item.dataset.loaded = '1';
      var play = item.querySelector('.knc-ugc-play'); if (play) play.remove();
      var v = item.querySelector('.knc-ugc-video');
      if (!v){ v = document.createElement('video'); v.className = 'knc-ugc-video'; item.appendChild(v); }
      v.src = item.dataset.src; v.controls = true; v.autoplay = true; v.playsInline = true; v.preload = 'auto';
      var p = v.play(); if (p && p.catch) p.catch(function(){});
    });
  });
})();
</script>
<?php endif; ?>

<?php if ( has_term( array( 'kezdocsomag','orto-kezdocsomag', 'paketo-ekkinisis', 'starter-pack' ), 'product_cat', get_the_id() ) ) : ?>
<section class="why-section">
    <div style="max-width: 1440px;" class="container why-container">
        <!-- Left Video -->
        <div class="why-col">
            <div class="video-wrapper">
                <img style="" src="https://noriks.com/hu/wp-content/uploads/2026/02/starter-1_hu.png">
            </div>
        </div>
        <!-- Right Content -->
        <div class="why-col why-content">
            <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
                MIÉRT VÁLASZTJÁK AZ EMBEREK A KEZDŐCSOMAGOT?
            </h2>
            <div style="margin-left: 20px;" class="why-point">
                <p style=" font-style: italic; line-height: 1.2;" ><strong>"Azért vettem meg, mert nem voltam biztos benne, hogy jól fog állni."</strong><span style="font-weight:normal;"> Márk - Budapest</span></p>
                <p class="description">Sok vásárló a kezdőcsomaggal kezdi, mert először ki akarják próbálni, hogyan áll a NORIKS és hogyan viselkedik hordás közben. Egy póló és egy boxeralsó elég a döntéshez, nagy befektetés nélkül.</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p style=" font-style: italic; line-height: 1.2;" ><strong>"Az első viselés után rögtön rendeltem még."</strong><span style="font-weight:normal;"> Péter - Debrecen</span></p>
                <p class="description">A vásárlók több mint 95%-a újra rendel a kezdőcsomag után. Nem azért, mert ezt tervezték, hanem mert már az első nap érzik a különbséget a szabásban, a kényelemben és a minőségben.</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p style=" font-style: italic; line-height: 1.2;" ><strong>"Az anyag és a fazon meggyőzött."</strong><span style="font-weight:normal;"> Gábor - Szeged</span></p>
                <p class="description">A póló és a boxeralsó puha, könnyű és kellemes a bőrön. A kezdőcsomag a leggyakoribb ok, amiért a NORIKS gyorsan a mindennapi ruhatár részévé válik.</p>
            </div>
        </div>
    </div>
</section>

<section style="background: white;" class="why-section">
    <div style="max-width: 1440px;" class="container why-container">
        <!-- Left Video -->
        <div class="why-col">
            <div class="video-wrapper">
                <img style="" src="https://noriks.com/hu/wp-content/uploads/2026/02/starter-2_hu.png">
            </div>
        </div>
        <!-- Right Content -->
        <div class="why-col why-content">
            <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
                KOMBINÁCIÓ, AMIT MINDEN NAP VISELSZ
            </h2>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Egész napos kényelemre tervezve</strong></p>
                <p class="description">A póló és a boxeralsó reggeltől estig való viselésre készült, beállítások és kellemetlenségek nélkül. Minden a helyén marad, nem szorít, és egész nap szabad mozgást tesz lehetővé.</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Fazon, amely együttműködik a testtel</strong></p>
                <p class="description">A póló szabása kiemeli a felsőtestet, míg a boxeralsó elegendő helyet és stabilitást biztosít anélkül, hogy felcsúszna. Az eredmény egy magabiztos, laza érzés és ápolt megjelenés minden helyzetben.</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Minőség, amit rögtön érzel</strong></p>
                <p class="description">Az anyagok puhák, légáteresztőek és kellemesek a bőrön, anélkül hogy mosás után elveszítenék formájukat. Már az első viseléskor világos, miért válik ez a kombináció gyorsan a mindennapi ruhatár részévé.</p>
            </div>
        </div>
    </div>
</section>

<section class="why-section">
    <div style="max-width: 1440px;" class="container why-container">
        <!-- Left Video -->
        <div class="why-col">
            <div class="video-wrapper">
                <img style="" src="https://noriks.com/hu/wp-content/uploads/2026/02/starter-3_hu.png">
            </div>
        </div>
        <!-- Right Content -->
        <div class="why-col why-content">
            <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
                A LEGKÖNNYEBB ÉS LEGBIZTONSÁGOSABB KEZDÉS
            </h2>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Minimális kockázat</strong></p>
                <p class="description">Mert lehetővé teszi, hogy megismerd a minőséget nagy befektetés nélkül. Ahelyett, hogy előre sok darabot vennél, kapsz egy pólót és egy boxeralsót - pont eleget ahhoz, hogy lásd, hogyan áll, hogyan viselkedik és milyen az anyag.</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>A tökéletes módja a kezdésnek</strong></p>
                <p class="description">A kezdőcsomag első élményként jött létre, nem készletként. Vásárlónként csak egyszer érhető el speciális áron, így a döntés egyszerű és gondolkodás nélküli.</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Élmény, amihez visszatérsz</strong></p>
                <p class="description">A legtöbb férfi a NORIKS-nál marad, mert felismeri a különbséget a szabásban, a kényelemben és a minőségben. De az első lépés pontosan ez - minimális kockázat, tiszta benyomás.</p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ( has_term( array( 'polok', 'orto-polok', 'szettek', 't-shirts', 'blouzakia' ), 'product_cat', get_the_id() ) || has_term( array('sady', 'set', 'seta', 'bundles'), 'product_cat', get_the_id() )) : ?>
<section class="why-section">
    <div class="container why-container">
        <!-- Left Video -->
        <div class="why-col">
            <div class="video-wrapper">
                <video autoplay muted loop playsinline class="why-video">
                    <source src="https://noriks.com/wp-content/uploads/2025/09/noriks_gif_en_2-1.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <!-- Right Content -->
        <div class="why-col why-content">
            <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
                <?php echo get_field( 'singlepp_content_part_h1', 'options' ); ?>
            </h2>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong><?php echo get_field( 'singlepp_content_part_t_1', 'options' ); ?></strong></p>
                <p class="description"><?php echo get_field( 'singlepp_content_part_t_2', 'options' ); ?></p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong><?php echo get_field( 'singlepp_content_part_t_3', 'options' ); ?></strong></p>
                <p class="description"><?php echo get_field( 'singlepp_content_part_t_4', 'options' ); ?></p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong><?php echo get_field( 'singlepp_content_part_t_5', 'options' ); ?></strong></p>
                <p class="description"><?php echo get_field( 'singlepp_content_part_t_6', 'options' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- table section -->
<section class="comparison-section" style="padding-top: 30px;" >
    <div class="comparison-intro">
        <!-- <h4 class="highlight"><?php echo get_field("_comp_table_t1", "options"); ?></h4>-->
        <h1 style="color:white;"><?php echo get_field("_comp_table_t2", "options"); ?></h1>
        <p style=" opacity: 0.6;" class="note"><?php echo get_field("_comp_table_t3", "options"); ?></p>
    </div>
</section>

<section class="comparison-table-section">
    <div class="comparison-container">
        <table class="comparison-table">
            <thead>
                <tr>
                    <th></th>
                    <th class="brand-column">
                        <?php echo get_field("_comp_table_inside_1", "options"); ?><br>
                        <div class="price"><?php echo get_field("_comp_table_inside_3", "options"); ?></div>
                    </th>
                    <th class="other-brand"><?php echo get_field("_comp_table_inside_2", "options"); ?><br><span><?php echo get_field("_comp_table_inside_4", "options"); ?></span></th>
                </tr>
            </thead>
            <tbody>
                <?php $_comp_table_fieldlines = get_field("_comp_table_fieldlines","options"); ?>
                <?php if ($_comp_table_fieldlines): ?>
                    <?php foreach ($_comp_table_fieldlines as $item): ?>
                        <tr>
                            <td><?php echo $item['text']; ?></td>
                            <td class="bg-best"><span style="background: #496d8f;" class="checkmark">✔</span></td>
                            <td class="bg-bad"><span class="crossmark">✖</span></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        <p style=" opacity: 0.6;" class="small-note">
            <?php echo get_field("_comp_table_bottom_text", "options"); ?>
        </p>
    </div>
</section>

<section class="why-section">
    <div class="container why-container">
        <!-- Left Video -->
        <div class="why-col">
            <div class="video-wrapper">
                <img style="width: 100%; aspect-ratio: 1/1; object-fit: cover; " src="<?php echo get_template_directory_uri(); ?>/img/majice-3 (1).jpeg">
            </div>
        </div>
        <!-- Right Content -->
        <div class="why-col why-content">
            <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
                MIÉRT LESZ EZ A PÓLÓ A STANDARDOD?
            </h2>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Valódi életre tervezve</strong></p>
                <p class="description">Ez a póló egész napos viselésre készült - reggeltől estig. Nem igényel beállítást vagy gondolkodást, egyszerűen jól áll minden helyzetben.</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Szabás, amely érti a testet</strong></p>
                <p class="description">A szabást úgy fejlesztették, hogy kövesse a test vonalát szorítás nélkül, és kiemelje a megfelelő részeket. Az eredmény egy ápolt, magabiztos megjelenés kényelmetlenség nélkül.</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>A különbséget már az első felöltésnél érzed</strong></p>
                <p class="description">Az anyag puha, könnyű és légáteresztő a bőrön. Már az első viselés után világos, miért válik ez a póló azzá, amiért leggyakrabban nyúlsz.</p>
            </div>
        </div>
    </div>
</section>
<!-- table section -->
<?php endif; ?>

<!-- here we include new file BOXERIRICE-->
<?php if ( has_term( array( 'boxerek', 'orto-boxeralsok', 'mpoxerakia', 'boxers', 'boxerakia' ), 'product_cat', get_the_ID() ) && !has_term( 'black-friday', 'product_cat', get_the_ID() ) ): ?>
<style>
    .why-container {
        max-width: 1440px !important;
    }
</style>

<?php if( get_the_ID() == 39181 ): ?>
    <!-- invlude video views here -->
<?php endif; ?>

<!-- 1 boksarica -->
<section class="why-section">
    <div class="container why-container">
        <!-- Left Video -->
        <div class="why-col">
            <img src="https://noriks.com/hu/wp-content/uploads/2026/04/2026-04-24-09.28.40-1.jpg">
        </div>
        <!-- Right Content -->
        <div class="why-col why-content">
            <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
                Rugalmas fazon erősebb combokhoz
            </h2>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Egész napos kényelem</strong></p>
                <p class="description">Kifejezetten erősebb combú férfiaknak tervezve. A rugalmas és hajlékony anyag maximális kényelmet biztosít szorítás vagy kellemetlen nyomás nélkül a derék körül. Az alsónemű a helyén marad és nem csúszik fel, így egész nap szabadon mozoghatsz.</p>
            </div>
        </div>
    </div>
</section>

<style>
    /* your styles */
</style>

<!-- 2 boksarica -->
<section style="background: white;" class="why-section">
    <div class="container why-container">
        <!-- Left Video -->
        <div class="why-col">
            <img src="https://noriks.com/hu/wp-content/uploads/2026/04/hu-1.jpg">
        </div>
        <!-- Right Content -->
        <div class="why-col why-content">
            <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
                Kevesebb kopás és sérülés
            </h2>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Szuper tartós 💪</strong></p>
                <p class="description">"Felejtsd el a gyorsan szakadó alsóneműt. A NORIKS boxeralsók tartósabb anyagból készülnek - tovább tartanak és megspórolják a felesleges boltlátogatásokat."</p>
            </div>
            <div style="margin-left: 20px;" class="why-point">
                <p class="description">
                    ✅ Kevesebb szakadás<br/>
                    ✅ Kevesebb izzadás<br/>
                    ✅ Egész napos kényelem<br/>
                </p>
            </div>
        </div>
    </div>
</section>

<style>
    /* your styles */
</style>

<!-- 3 boksarica -->
<section class="why-section">
    <div class="container why-container">
        <!-- Left Video -->
        <div class="why-col">
            <img style="width: 100%; aspect-ratio: 1/1; object-fit: cover; " src="https://noriks.com/hu/wp-content/uploads/2026/04/2026-04-24-09.28.49-1.jpg">
        </div>
        <!-- Right Content -->
        <div class="why-col why-content">
            <h2 style="color: #222; text-align:left; margin-left: 20px; font-family: 'Barlow', sans-serif; color:#222223;">
                Elegendő hely mindennek
            </h2>
            <div style="margin-left: 20px;" class="why-point">
                <p><strong>Uraim, hagyjátok, hogy a területetek szabadon lélegezzen!</strong></p>A NORIKS alsónemű egész napos tartást biztosít anélkül, hogy elveszítené formáját. A mennyeien puha modal anyag nyúlik és tökéletesen illeszkedik ott, ahol kell. A "felszerelésednek" szánt hely tágasabb és rugalmasabb, így nem érzed magad beszorítva.</p>
            </div>
        </div>
    </div>
</section>

<style>
    /* your styles */
</style>
<?php endif; ?>
<!-- end BOXERICE -->

<style>
.most-popular {
    padding-top: 20px;
}
</style>







<style>
.comparison-section-gray {
    border-radius: 5px;
}

.comparison-intro-gray {
    margin-bottom: 0;
}
</style>

<div style="background: #f9f9f9; padding-top: 30px;" >
    <section style="background: #f9f9f9; max-width: 1440px;" class="comparison-section comparison-section-gray">
        <div style="background: #f9f9f9;padding: 0;padding-left: 10px; padding-right: 10px;" class="comparison-intro comparison-intro-gray ">
            <!--<h4 style="" class="highlight"><?php echo get_field("singlepp_content_standard_reviews_t1","options"); ?></h4>-->
            <h1 style="color:black; margin-bottom: 4px;">
            <?php if ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') ): ?>
                Nem vagy egyedül a nyakfeszültség elleni küzdelemben.
            <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bunion') ): ?>
                Nem vagy egyedül a bütyökfájdalom elleni küzdelemben.
            <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopas') ): ?>
                Nem vagy egyedül a hátfájás elleni küzdelemben.
            <?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>
                Nem vagy egyedül a tökéletes kompressziós zokni keresésében.
            <?php elseif ( !has_term( array( 'bokserice', 'bokserice-sastavi-paket', 'boxerky', 'mpoxerakia', 'boxers', 'boxerakia' ), 'product_cat', get_the_ID() ) ): ?>
                <?php echo get_field("singlepp_content_standard_reviews_t2","options"); ?>
            <?php else: ?>
                Nem vagy egyedül a tökéletes boxeralsó keresésében.
            <?php endif; ?>
            </h1>
            <p class="note" style="color: black; margin-top: 0px; margin-bottom: 5px;"><?php if ( function_exists('noriks_is_type') && noriks_is_type('fisiorest') ): ?>Emberek ezrei használják már a NORIKS FisioRestet a kisebb nyakfájdalomért és feszültségért – trakció, rezgés és meleg egy eszközben.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('bunion') ): ?>Emberek ezrei használják már a NORIKS bütyökkorrigálót a kisebb fájdalomért és a nagylábujj helyesebb tartásáért – otthon, tévénézés vagy alvás közben.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('ortopas') ): ?>Emberek ezrei viselik már a NORIKS ortopédiai hátövet a kisebb fájdalomért és stabilabb hátért – munka közben, teheremelésnél és hosszú ülés során.<?php elseif ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') ): ?>Több ezer férfi hordja már a NORIKS kompressziós zoknit a könnyebb, pihentebb lábakért – munkában, utazás közben és edzésen.<?php else: ?><?php echo get_field("singlepp_content_standard_reviews_t3","options"); ?><?php endif; ?></p>
        </div>
    </section>
</div>

<style>
@media (max-width: 768px) {
    .basic-reviews-section {
        padding-left: 0px;
        padding-right: 0px;
    }
    .review .content {
        font-size: 13px;
    }
    .review .info {
        font-size: 13px;
        line-height: 1.3;
    }
    .review {
        padding-bottom: 15px;
        margin-bottom: 16px;
    }
}
</style>

<style>
.loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #f5a623;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    animation: spin 0.8s linear infinite;
    margin: 0 auto;
}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
.extra-review-group {
    opacity: 0;
    transition: opacity 0.5s ease;
}
.extra-review-group.show {
    opacity: 1;
}
</style>

<?php
// ===== CONFIG: LANGUAGE & DATA =====
$reviews_language = get_field("webshop_language", "options");
if (!$reviews_language) {
    $reviews_language = "EN";
}

// Detect if current product belongs to bokserice group
$current_product_id = (function_exists('is_product') && is_product()) ? get_queried_object_id() : get_the_id();
$is_bokserice_page = has_term(
    array( 'boxerky','orto-bokserice', 'bokserice-sastavi-paket', 'bokserice', 'mpoxerakia', 'boxers', 'boxerakia' ),
    'product_cat',
    $current_product_id
);
$is_nogavice_page = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) );
$is_ortopas_page  = ( function_exists('noriks_is_type') && noriks_is_type('ortopas', $current_product_id) );
$is_bunion_page   = ( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) );
$is_fisiorest_page = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $current_product_id) );

// Fallback product name shown in review cards.
$rv_fallback_title = $is_fisiorest_page ? 'NORIKS | FisioRest'
                   : ( $is_bunion_page ? 'NORIKS | Bütyökkorrigáló'
                   : ( $is_ortopas_page ? 'NORIKS | Ortopédiai hátöv'
                   : ( $is_nogavice_page ? 'Kompressziós zokni cipzárral' : 'Egy Szürke Póló' ) ) );

// Include review pools (own pool per product group)
if ( $is_fisiorest_page ) {
    include get_stylesheet_directory() . '/auto_reviews/HU_fisiorest.php';
} elseif ( $is_bunion_page ) {
    include get_stylesheet_directory() . '/auto_reviews/HU_bunion.php';
} elseif ( $is_ortopas_page ) {
    include get_stylesheet_directory() . '/auto_reviews/HU_ortopas.php';
} elseif ( $is_nogavice_page ) {
    include get_stylesheet_directory() . '/auto_reviews/HU_nogavice.php';
} elseif ( ! $is_bokserice_page ) {
    include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'.php';
} else {
    include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'_bokserice.php';
}
include get_stylesheet_directory() . '/auto_reviews/'.$reviews_language.'-2.php';

// Ensure arrays exist
$auto_reviews_en   = is_array($auto_reviews_en) ? $auto_reviews_en : [];
$auto_reviews_ship = isset($auto_reviews_ship) && is_array($auto_reviews_ship) ? $auto_reviews_ship : [];

// ===== HELPERS: STABLE DAILY RANDOMIZATION =====

/**
 * Get WP/Woo timezone (fallback Europe/Ljubljana).
 */
function reviews_wp_tz(): DateTimeZone {
    $tz_string = function_exists('wp_timezone_string')
        ? wp_timezone_string()
        : (get_option('timezone_string') ?: 'Europe/Ljubljana');
    return new DateTimeZone($tz_string ?: 'Europe/Ljubljana');
}

/**
 * Deterministic "random" integer in [0, $mod-1] from a seed string.
 */
function stable_mod_index(string $seed, int $mod): int {
    if ($mod <= 0) return 0;
    $h = substr(sha1($seed), 0, 8); // 32-bit slice
    $n = hexdec($h);
    return (int) ($n % $mod);
}

/**
 * Deterministic shuffle based on a seed string. (Stable for a given seed.)
 */
function shuffle_with_seed(array $arr, string $seed): array {
    if (empty($arr)) return $arr;
    $keys = array_keys($arr);
    usort($keys, function($a, $b) use ($seed) {
        $ha = sha1($seed . ':' . $a);
        $hb = sha1($seed . ':' . $b);
        return strcmp($ha, $hb);
    });
    $out = [];
    foreach ($keys as $k) {
        $out[] = $arr[$k];
    }
    return $out;
}

/**
 * Build/caches a pool of products: [['title'=>..., 'url'=>...], ...]
 */
function get_wc_product_pool(
    $transient_key = 'reviews_product_pool_cache_v2',
    $ttl = 12 * HOUR_IN_SECONDS
) {
    if ( ! function_exists( 'wc_get_products' ) ) {
        return [];
    }

    $product_id = 0;
    if ( function_exists( 'is_product' ) && is_product() ) {
        $product_id = get_queried_object_id();
    }

    $is_bokserice = false;
    $is_nogavice  = false;
    $is_ortopas   = false;
    $is_bunion    = false;
    $is_fisiorest = false;
    if ( $product_id ) {
        $is_bokserice = has_term(
            array( 'bokserice','orto-bokserice', 'bokserice-sastavi-paket', 'boxerky', 'mpoxerakia', 'boxers', 'boxerakia' ),
            'product_cat',
            $product_id
        );
        $is_nogavice = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $product_id) );
        $is_ortopas  = ( function_exists('noriks_is_type') && noriks_is_type('ortopas', $product_id) );
        $is_bunion   = ( function_exists('noriks_is_type') && noriks_is_type('bunion', $product_id) );
        $is_fisiorest = ( function_exists('noriks_is_type') && noriks_is_type('fisiorest', $product_id) );
    }

    $cache_key = $transient_key . ( $is_fisiorest ? '_fisiorest' : ( $is_bunion ? '_bunion' : ( $is_ortopas ? '_ortopas' : ( $is_nogavice ? '_nogavice' : ( $is_bokserice ? '_bokserice' : '_all' ) ) ) ) );

    if ( function_exists( 'get_transient' ) ) {
        $cached = get_transient( $cache_key );
        if ( ! empty( $cached ) && is_array( $cached ) ) {
            return $cached;
        }
    }

    $args = [
        'status'  => 'publish',
        'limit'   => -1,
        'return'  => 'ids',
        'orderby' => 'date',
        'order'   => 'DESC',
    ];
    if ( $is_fisiorest ) {
        $args['category'] = [ 'orto-fisiorest' ];
    } elseif ( $is_bunion ) {
        $args['category'] = [ 'orto-bunion' ];
    } elseif ( $is_ortopas ) {
        $args['category'] = [ 'orto-ortopas' ];
    } elseif ( $is_nogavice ) {
        $args['category'] = [ 'kompreszios-zokni', 'kompresziós-zokni', 'orto-kompresziós-zokni', 'orto-kompreszios-zokni' ];
    } elseif ( $is_bokserice ) {
        $args['category'] = [ 'bokserice' ];
    } else {
        $args['tax_query'] = [
            [
                'taxonomy' => 'product_cat',
                'field'    => 'slug',
                'terms'    => [ 'bokserice' ],
                'operator' => 'NOT IN',
            ],
        ];
    }

    $ids  = wc_get_products( $args );
    $pool = [];
    if ( ! empty( $ids ) ) {
        foreach ( $ids as $pid ) {
            $title = get_the_title( $pid );
            $url   = get_permalink( $pid );
            if ( $title && $url ) {
                $pool[] = [
                    'title' => $title,
                    'url'   => $url,
                ];
            }
        }
    }

    if ( function_exists( 'set_transient' ) ) {
        set_transient( $cache_key, $pool, $ttl );
    }

    return $pool;
}

/**
 * Load avatar images from theme folder and return URLs.
 * Expected folders:
 *   - /auto_reviews/bokserice-slike/
 *   - /auto_reviews/majice-slike/
 */
function get_review_avatar_pool(string $type = 'majice'): array {
    $type     = ($type === 'bokserice') ? 'bokserice' : 'majice';
    $dir_path = trailingslashit(get_stylesheet_directory()) . 'auto_reviews/' . $type . '-slike/';
    $dir_url  = trailingslashit(get_stylesheet_directory_uri()) . 'auto_reviews/' . $type . '-slike/';

    if ( ! is_dir($dir_path) ) return [];

    $files = glob($dir_path . '*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE);
    if (empty($files)) return [];

    $urls = [];
    foreach ($files as $f) {
        $base = basename($f);
        if ($base && $base[0] !== '.') {
            $urls[] = $dir_url . rawurlencode($base);
        }
    }
    return $urls;
}

/**
 * Assign avatars (some real, some placeholder) deterministically per day + review index.
 * If real image is chosen, sets $r['avatar_url'].
 */
function assign_avatars_stable(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $real_probability_percent = 60): array {
    $count = count($avatar_pool);
    foreach ($reviews as $i => &$r) {
        $r['avatar_url'] = '';
        if ($count <= 0) continue;
        $roll = stable_mod_index($daily_seed . ':avatar-roll:' . $context_seed . ':' . $i, 100);
        if ($roll < max(0, min(100, $real_probability_percent))) {
            $pick_i = stable_mod_index($daily_seed . ':avatar-pick:' . $context_seed . ':' . $i, $count);
            $r['avatar_url'] = $avatar_pool[$pick_i] ?? '';
        }
    }
    return $reviews;
}

/**
 * Avatar images rules:
 * - First $first_n reviews ALWAYS get an image (if available)
 * - Remaining images (unique) are placed randomly within reviews [$range_start .. $range_end]
 * - Each image can appear ONLY once
 * - Deterministic per day (stable daily seed)
 */
function assign_unique_avatars_first3_then_random_until30(
    array $reviews,
    array $avatar_pool,
    string $daily_seed,
    string $context_seed = 'product',
    int $first_n = 3,
    int $range_start = 3, // 0-based index: review #4
    int $range_end = 30   // 1-based count: up to review #30 -> last index 29
): array {
    $total = count($reviews);
    if ($total <= 0) return $reviews;

    // Ensure key exists and default is placeholder
    foreach ($reviews as &$r) {
        $r['avatar_url'] = '';
    }
    unset($r);

    if (empty($avatar_pool)) return $reviews;

    // Deterministic shuffle of images (stable per day)
    $pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);
    $pool_count = count($pool);

    // 1) First N reviews always get images (as many as available)
    $first_n = max(0, min($first_n, $total, $pool_count));
    for ($i = 0; $i < $first_n; $i++) {
        $reviews[$i]['avatar_url'] = $pool[$i] ?? '';
    }

    // If no more images left, finish
    if ($pool_count <= $first_n) return $reviews;

    // 2) Randomly place remaining images from review #4 to #30 (indexes 3..29)
    $last_index = min($total - 1, $range_end - 1);
    if ($last_index < $range_start) return $reviews;

    $eligible = range($range_start, $last_index);

    // Deterministic shuffle of eligible positions (stable per day)
    $eligible = shuffle_with_seed($eligible, 'avatar-positions:' . $daily_seed . ':' . $context_seed);

    $remaining_images = array_slice($pool, $first_n);
    $take = min(count($remaining_images), count($eligible));
    for ($j = 0; $j < $take; $j++) {
        $pos = $eligible[$j];
        $reviews[$pos]['avatar_url'] = $remaining_images[$j] ?? '';
    }

    return $reviews;
}

/**
 * Assign avatars for first N reviews:
 * - Use each real image at most once (no repeats).
 * - Only apply to first $use_first_n reviews.
 * - After that (or if pool runs out), use placeholder (avatar_url = '').
 * Deterministic per day.
 */
function assign_unique_avatars_first_n(array $reviews, array $avatar_pool, string $daily_seed, string $context_seed = 'product', int $use_first_n = 10): array {
    $total = count($reviews);
    if ($total <= 0) return $reviews;

    // Ensure every review has the key
    foreach ($reviews as &$r) {
        $r['avatar_url'] = '';
    }
    unset($r);

    if (empty($avatar_pool)) return $reviews;

    // Deterministic shuffled image order for the day + context
    $shuffled_pool = shuffle_with_seed($avatar_pool, 'avatar-pool:' . $daily_seed . ':' . $context_seed);

    // We can only place as many images as we have, and only in first N reviews
    $limit = min($use_first_n, $total, count($shuffled_pool));
    for ($i = 0; $i < $limit; $i++) {
        $reviews[$i]['avatar_url'] = $shuffled_pool[$i] ?? '';
    }

    return $reviews;
}

/**
 * Assign a deterministic product (title+url) to each review for the day.
 * Stable per day AND per review index.
 */
function assign_products_stable(array $reviews, array $product_pool, string $daily_seed): array {
    $count = count($product_pool);
    foreach ($reviews as $i => &$r) {
        if ($count > 0) {
            $pick = $product_pool[ stable_mod_index($daily_seed . ':prod:' . $i, $count) ];
            $r['product_title'] = $pick['title'];
            $r['product_url']   = $pick['url'];
        } else {
            $r['product_title'] = $r['product_title'] ?? '';
            $r['product_url']   = $r['product_url'] ?? '';
        }
    }
    return $reviews;
}

/**
 * Distribute review dates backward from today to a cutoff date (inclusive),
 * with a deterministic per-day count using the daily seed.
 */
function assign_dates_stable(array $reviews, string $cutoff_date_string = '20.6.2025', int $min_per_day = 2, int $max_per_day = 9, string $display_format = 'j.n.Y'): array {
    if (empty($reviews)) return $reviews;

    $tz     = reviews_wp_tz();
    $today  = new DateTime('today', $tz);
    $today->modify('-7 days'); // newest review date = today - 7 days
    
    $cutoff = DateTime::createFromFormat('j.n.Y', $cutoff_date_string, $tz) ?: new DateTime('20.6.2025', $tz);
    if ($cutoff > $today) $cutoff = clone $today;

    $daily_seed = $today->format('Y-m-d');
    $reviews = shuffle_with_seed($reviews, 'reviews-order:' . $daily_seed);

    $total    = count($reviews);
    $assigned = 0;
    $day_off  = 0;

    while ($assigned < $total) {
        $date = (clone $today)->modify("-{$day_off} days");
        if ($date < $cutoff) $date = clone $cutoff;

        $span   = max(0, $max_per_day - $min_per_day);
        $add    = ($span > 0) ? (stable_mod_index('perday:'.$daily_seed.':'.$day_off, $span + 1)) : 0;
        $perday = $min_per_day + $add;
        $take   = min($perday, $total - $assigned);

        for ($i = 0; $i < $take; $i++) {
            $reviews[$assigned]['assigned_date'] = $date->format($display_format);
            $assigned++;
        }
        $day_off++;
        if ($date == $cutoff && $assigned >= $total) break;
    }

    foreach ($reviews as &$r) {
        if (empty($r['assigned_date'])) $r['assigned_date'] = $cutoff->format($display_format);
    }
    return $reviews;
}

// ===== BUILD FOR TODAY =====
$tz          = reviews_wp_tz();
$today_obj   = new DateTime('today', $tz);
$daily_seed  = $today_obj->format('Y-m-d');

// Avatar pools based on page category
$avatar_type = $is_bokserice_page ? 'bokserice' : 'majice';
// Compression socks: text-only reviews (no avatar images).
$avatar_pool = $is_nogavice_page ? array() : get_review_avatar_pool($avatar_type);

$product_pool = get_wc_product_pool();

// 1) Stable daily shuffle of review pools
$auto_reviews_en   = shuffle_with_seed($auto_reviews_en,   'pool-en:'   . $daily_seed);
$auto_reviews_ship = shuffle_with_seed($auto_reviews_ship, 'pool-ship:' . $daily_seed);

// 2) Stable product assignment for the day
$auto_reviews_en   = assign_products_stable($auto_reviews_en,   $product_pool, $daily_seed);
$auto_reviews_ship = assign_products_stable($auto_reviews_ship, $product_pool, $daily_seed);

// 3) Deterministic date distribution back to cutoff 20.06.2025
$auto_reviews_en   = assign_dates_stable($auto_reviews_en,   '20.6.2025', 2, 9, 'j.n.Y');
$auto_reviews_ship = assign_dates_stable($auto_reviews_ship, '20.6.2025', 2, 9, 'j.n.Y');

// 4) Deterministic avatars (some real, some placeholder)
$auto_reviews_en   = assign_unique_avatars_first3_then_random_until30($auto_reviews_en, $avatar_pool, $daily_seed, 'product', 3, 3, 30);
$auto_reviews_ship = assign_unique_avatars_first_n($auto_reviews_ship, $avatar_pool, $daily_seed, 'shipping', 0);

// ===== PAGINATION CHUNKS =====
$initial_count = 18; // show on load
$load_count    = 9;  // per "load more"

$initial_product   = array_slice($auto_reviews_en, 0, $initial_count);
$remaining_product = array_slice($auto_reviews_en, $initial_count);
$chunks_product    = array_chunk($remaining_product, $load_count);

$initial_ship   = array_slice($auto_reviews_ship, 0, $initial_count);
$remaining_ship = array_slice($auto_reviews_ship, $initial_count);
$chunks_ship    = array_chunk($remaining_ship, $load_count);

// Dynamic counts
$prod_count = count($auto_reviews_en);
$ship_count = count($auto_reviews_ship);
?>

<?php if ( $is_nogavice_page || $is_ortopas_page || $is_bunion_page || $is_fisiorest_page ) : ?>
<style>/* socks + belt + bunion + fisiorest: text-only reviews, no avatar */ #reviews-section .avatar { display: none !important; }</style>
<?php endif; ?>

<section id="reviews-section" class="basic-reviews-section" style="margin-bottom:40px!important;padding-bottom:40px!important;">
    <div class="container basic-reviews-section-container" style="width:100%;max-width:1440px;padding-top:20px!important;margin:0 auto;padding-left: 10px; padding-right: 10px;">
        <!-- Tabs -->
        <div class="reviews-tabs" style="display:flex;gap:18px;border-bottom:1px solid #cbc8c8;margin-bottom:18px;">
            <button type="button" class="reviews-tab is-active" data-tab="product" style="appearance:none;background:#00000008;border:1px solid #cbc8c8;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
                <?php echo esc_html__('Termékértékelések', 'your-textdomain'); ?> (692)
            </button>
            <button type="button" class="reviews-tab" data-tab="shipping" style="appearance:none;background:transparent;border:1px solid transparent;border-bottom:0;padding:8px 14px;border-radius:0;font-weight:700;">
                <?php echo esc_html__('Szállítási értékelések', 'your-textdomain'); ?> (389)
            </button>
        </div>

        <!-- PRODUCT GRID (default visible) -->
        <div class="reviews-grid" id="reviews-grid-product">
            <?php if (!empty($initial_product)) : foreach ($initial_product as $review) :
                $name   = $review['name'] ?? 'Névtelen';
                $text   = $review['text'] ?? '';
                $title  = !empty($review['product_title']) ? $review['product_title'] : $rv_fallback_title;
                $url    = !empty($review['product_url'])   ? $review['product_url']   : '#';
                $stars  = '★★★★★';
                $date_display = $review['assigned_date'] ?? '';
                $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
            ?>
            <article class="review-card">
                <div class="card-top">
                    <h3 class="product-title"><a href="<?php echo esc_url($url); ?>">
                        <?php echo esc_html($title); ?>
                    </a></h3>
                    <div class="date">
                        <?php echo esc_html($date_display); ?>
                    </div>
                </div>
                <div class="stars"><?php echo $stars; ?></div>
                <div class="identity">
                    <?php if ($avatar_url) : ?>
                        <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
                    <?php else : ?>
                        <div class="avatar">👤</div>
                    <?php endif; ?>
                    <div class="name"><?php echo esc_html($name); ?></div>
                    <span class="verified"><?php _e('Megerősített','your-textdomain'); ?></span>
                </div>
                <div class="content"><?php echo esc_html($text); ?></div>
            </article>
            <?php endforeach; endif; ?>
        </div>

        <!-- SHIPPING GRID (hidden initially) -->
        <div class="reviews-grid" id="reviews-grid-shipping" style="display:none;">
            <?php if (!empty($initial_ship)) : foreach ($initial_ship as $review) :
                $name   = $review['name'] ?? 'Névtelen';
                $text   = $review['text'] ?? '';
                $title  = !empty($review['product_title']) ? $review['product_title'] : 'Egy szürke póló';
                $url    = !empty($review['product_url'])   ? $review['product_url']   : '#';
                $stars  = '★★★★★';
                $date_display = $review['assigned_date'] ?? '';
                $avatar_url   = !empty($review['avatar_url']) ? $review['avatar_url'] : '';
            ?>
            <article class="review-card">
                <div class="card-top">
                    <h3 class="product-title">
                        <a href="<?php echo esc_url($url); ?>">
                            <?php echo esc_html($title); ?>
                        </a>
                    </h3>
                    <div class="date">
                        <?php echo esc_html($date_display); ?>
                    </div>
                </div>
                <div class="stars"><?php echo $stars; ?></div>
                <div class="identity">
                    <?php if ($avatar_url) : ?>
                        <div class="avatar"><img src="<?php echo esc_url($avatar_url); ?>" alt="" loading="lazy" /></div>
                    <?php else : ?>
                        <div class="avatar">👤</div>
                    <?php endif; ?>
                    <div class="name"><?php echo esc_html($name); ?></div>
                    <span class="verified"><?php _e('Megerősített','your-textdomain'); ?></span>
                </div>
                <?php if (!empty($review['headline'])) : ?>
                    <div class="headline"><?php echo esc_html($review['headline']); ?></div>
                <?php endif; ?>
                <div class="content"><?php echo esc_html($text); ?></div>
            </article>
            <?php endforeach; endif; ?>
        </div>
    </div>

    <!-- Controls: one CTA row, reused per tab -->
    <div class="container basic-reviews-section-container" style="width:100%;max-width:1100px;margin-top:30px!important;margin:0 auto;">
        <div class="cta-button" style="background:transparent;padding:0;justify-content:left;">
            <a class="cta-button2 button button--xl" style="margin:0 auto;text-align:left;background:black;font-family:'Roboto',sans-serif;color:#fff;text-transform:none;font-size:15px;padding:10px 25px;" href="#">További információ</a>
        </div>
        <div id="reviews-loading" style="display:none;text-align:center;padding:15px;">
            <div class="loader"></div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function(){
    // Data from PHP (already include product_title/product_url/assigned_date/avatar_url)
    const chunksProduct = <?php echo json_encode($chunks_product); ?>;
    const chunksShip    = <?php echo json_encode($chunks_ship); ?>;

    let nextProduct = 0;
    let nextShip    = 0;

    const tabs    = document.querySelectorAll('.reviews-tab');
    const gridP   = document.getElementById('reviews-grid-product');
    const gridS   = document.getElementById('reviews-grid-shipping');
    const seeMore = document.querySelector('.cta-button2');
    const loader  = document.getElementById('reviews-loading');

    let activeTab = 'product';

    function setTab(tab){
        activeTab = tab;
        tabs.forEach(t=>{
            if(t.dataset.tab === tab){
                t.classList.add('is-active');
                t.style.background='#00000008';
                t.style.borderColor='#e6e6e6';
            } else{
                t.classList.remove('is-active');
                t.style.background='transparent';
                t.style.borderColor='transparent';
            }
        });
        if(tab === 'product'){
            gridP.style.display='grid';
            gridS.style.display='none';
        } else{
            gridP.style.display='none';
            gridS.style.display='grid';
        }
        const moreAvail = tab === 'product'
            ? (nextProduct < (chunksProduct?.length || 0))
            : (nextShip    < (chunksShip?.length    || 0));
        if (seeMore) seeMore.style.display = moreAvail ? 'inline-block' : 'none';
    }
    setTab('product');

    tabs.forEach(btn => btn.addEventListener('click', ()=> setTab(btn.dataset.tab)));

    // Escape helper
    const esc = (str) => String(str ?? '').replace(/[&<>"']/g, s => ({
        '&':'&amp;','<':'&lt;','>':'&gt;','"':'&quot;',"'":'&#039;'
    }[s]));

    function avatarHtml(avatarUrl){
        if(avatarUrl){
            return `<div class="avatar"><img src="${esc(avatarUrl)}" alt="" loading="lazy" /></div>`;
        }
        return `<div class="avatar">👤</div>`;
    }

    // Append a chunk of cards into a grid
    function appendChunk(grid, chunk){
        chunk.forEach(function(review){
            const article = document.createElement('article');
            article.className = 'review-card is-new';

            const url       = review.product_url   || '#';
            const title     = review.product_title || '<?php echo esc_js($rv_fallback_title); ?>';
            const name      = review.name          || 'Névtelen';
            const text      = review.text          || '';
            const headline  = review.headline      || '';
            const date      = review.assigned_date || '';
            const avatarUrl = review.avatar_url    || '';

            article.innerHTML = `
                <div class="card-top">
                    <h3 class="product-title"><a href="${esc(url)}">${esc(title)}</a></h3>
                    <div class="date">${esc(date)}</div>
                </div>
                <div class="stars">★★★★★</div>
                <div class="identity">
                    ${avatarHtml(avatarUrl)}
                    <div class="name">${esc(name)}</div>
                    <span class="verified"><?php _e('Megerősített','your-textdomain'); ?></span>
                </div>
                ${headline ? `<div class="headline">${esc(headline)}</div>` : ''}
                <div class="content">${esc(text)}</div>
            `;
            grid.appendChild(article);
        });
    }

    seeMore && seeMore.addEventListener('click', function(e){
        e.preventDefault();
        seeMore.style.display='none';
        loader.style.display='block';

        setTimeout(function(){
            if(activeTab === 'product' && nextProduct < (chunksProduct?.length || 0)){
                appendChunk(gridP, chunksProduct[nextProduct]);
                nextProduct++;
            }else if(activeTab === 'shipping' && nextShip < (chunksShip?.length || 0)){
                appendChunk(gridS, chunksShip[nextShip]);
                nextShip++;
            }
            loader.style.display='none';
            const moreAvail = activeTab === 'product'
                ? (nextProduct < (chunksProduct?.length || 0))
                : (nextShip    < (chunksShip?.length    || 0));
            if(moreAvail) seeMore.style.display='inline-block';
        }, 400);
    });
});
</script>

<!-- new review styling -->
<style>
/* ===== Reviews: Full corrected CSS ===== */

/* Section + container */
#reviews-section{
    font-family: "Roboto", system-ui, -apple-system, Segoe UI, Arial, sans-serif;
    background:#f9f9f9;
}
.basic-reviews-section-container{
    max-width:1440px;
    margin:0 auto;
    padding:0 0px;
}

/* Tabs */
.reviews-tabs{
    display:flex;
    gap:18px;
    border-bottom:1px solid #eee;
    margin-bottom:18px;
}
.reviews-tab{
    appearance:none;
    background:transparent;
    border:1px solid transparent;
    border-bottom:0;
    padding:8px 14px;
    font-weight:700;
    cursor:pointer;
}
.reviews-tab.is-active{
    background:#00000008;
    border-color:#e6e6e6;
}

/* Grid */
.reviews-grid{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:10px;
    width:100%;
}
@media (max-width:1100px){
    .reviews-grid{ grid-template-columns:repeat(2, 1fr); }
}
@media (max-width:640px){
    .reviews-grid{ grid-template-columns:1fr; }
}

/* Card */
.review-card{
    width:100%;
    height:100%;
    background:#fff;
    border:1px solid #efefef;
    border-radius:4px;
    box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
    padding:18px 20px;
    display:flex;
    flex-direction:column;
}

/* Card top */
.review-card .card-top{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;
    gap:12px;
    margin:-2px 0 6px;
}
.review-card .product-title{
    margin:0;
    font-weight:800;
    font-size:16px;
    line-height:1.25;
}
.review-card .product-title a{
    color:#0e0e0e;
    text-decoration:underline;
    text-underline-offset:2px;
}
.review-card .date{
    color:#8c8c8c;
    font-size:13px;
    white-space:nowrap;
    margin-top:2px;
}

/* Stars */
.review-card .stars{
    letter-spacing:3px;
    font-size:18px;
    color:#0f0f0f;
    margin:2px 0 10px;
}

/* Identity */
.review-card .identity{
    display:flex;
    align-items:flex-start; /* ⬅️ top-align items */
    gap:12px;
    margin:2px 0 12px;
}
.review-card .avatar{
    width:32px;
    height:32px;
    border:1px solid #dfdfdf;
    border-radius:0px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
    color:#000;
    background:#fff;
    overflow:hidden;
}
.review-card .avatar img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}
.review-card .name{
    font-weight:700;
    color:#111;
    font-size:15px;
}
.review-card .verified{
    display:inline-block;
    background:#0f0f0f;
    color:#fff;
    font-size:12px;
    font-weight:700;
    line-height:1;
    padding:5px 8px 4px;
    border-radius:3px;
    margin-left:6px;
}

/* Headline + body */
.review-card .headline{
    font-weight:800;
    font-size:16px;
    color:#111;
    margin:6px 0 6px;
}
.review-card .content{
    color:#2b2b2b;
    font-size:15px;
    line-height:1.7;
}

/* Reveal for appended cards */
.review-card.is-new{
    animation:rv-fade .28s ease-out both;
}
@keyframes rv-fade{
    from{opacity:0; transform:translateY(6px);}
    to{opacity:1; transform:none;}
}

/* Loader */
#reviews-loading .loader{
    width:28px;
    height:28px;
    border:3px solid #e6e6e6;
    border-top-color:#111;
    border-radius:50%;
    margin:0 auto;
    animation:rv-spin .75s linear infinite;
}
@keyframes rv-spin{ to{ transform:rotate(360deg);} }

/* Default avatar (placeholder) stays 32x32 */
.review-card .avatar{
    width:32px;
    height:32px;
    border:1px solid #dfdfdf;
    border-radius:0px;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:18px;
    color:#000;
    background:#fff;
    overflow:hidden;
}

/* If avatar contains a real image -> make it 80x80 */
.review-card .avatar:has(img){
    width:250px;
    height:250px;
    font-size:0; /* hide any accidental text spacing */
    align-items:stretch;
    justify-content:stretch;
}
.review-card .avatar img{
    width:100%;
    height:100%;
    object-fit:cover;
    display:block;
}

/* ONLY reviews with real image */
.review-card .identity:has(.avatar img){
    display:block; /* ⬅️ image gets own row */
}

/* Real image wrapper */
.review-card .avatar:has(img){
    width:100%;
    height:auto;
    border:none;
    margin-bottom:10px;
}

/* Real image itself */
.review-card .avatar img{
    width:100%;
    max-width:320px;
    height:auto;
    display:block;
    object-fit:cover;
    border:1px solid #dfdfdf;
    border-radius:4px;
}

/* Name + verified BELOW image */
.review-card .identity:has(.avatar img) .name,
.review-card .identity:has(.avatar img) .verified{
    display:inline-block;
    vertical-align:middle;
}

@media (max-width: 991px){
    /* ONLY reviews with real image */
    .review-card .avatar:has(img){
        max-width:100%;
    }
    .review-card .avatar img{
        width:100%; /* ✅ full width on mobile */
        max-width:100%;
        height:auto;
    }
}
</style>

<?php
$faq_list = get_field('faq_list', 'option');
$faq_list2 = get_field('faq_list_2', 'option');
$faq_list3 = get_field('faq_list_3', 'option');

$is_knc = ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice') );

// Compression-sock benefit content — replaces ONLY the product-info
// container on sock products. Delivery/returns stay as they are.
$knc_faq = array(
  array(
    'questioon' => 'Nehéz és fáradt lábak',
    'answer'    => 'A NORIKS kompressziós zoknik 15–20 Hgmm fokozatos kompressziót alkalmaznak, hogy a bokától felfelé serkentsék a vérkeringést. Ahelyett, hogy a vér a lábakban pangana, a fokozatos nyomás támogatja a természetes visszaáramlást. A lábad már néhány óra után könnyebbnek érzi magát.'
  ),
  array(
    'questioon' => 'Visszerek és vénás problémák',
    'answer'    => 'Amikor a vérkeringés gyengül, a vénák kitágulnak, láthatóvá és fájdalmassá válnak. A NORIKS zoknik enyhe, de állandó nyomást fejtenek ki, amely támogatja a vénafalakat és megkönnyíti a véráramlást. Ideális kiegészítője az orvosi kezelésnek, vagy megelőzésként a veszélyeztetett személyeknek.'
  ),
  array(
    'questioon' => 'Duzzanat és vízvisszatartás',
    'answer'    => 'A hosszan tartó ülés vagy állás folyadékfelhalmozódást okoz a bokában és a vádliban. A NORIKS zoknik a bokánál fejtik ki a legerősebb nyomást, amely felfelé fokozatosan csökken — ez a fokozatos kompresszió segít csökkenteni a duzzanatot és megakadályozza, hogy a vízvisszatartás a nap folyamán megtelepedjen.'
  ),
  array(
    'questioon' => 'Zsibbadás és bizsergés',
    'answer'    => 'A túl szűk vagy rosszul illeszkedő zoknik nyomják az ereket, és ezt a kellemetlen bizsergő érzést okozzák. A NORIKS zoknik lélegző anyagból és kiegyensúlyozott kompresszióval készülnek, amely serkenti a vérkeringést anélkül, hogy elzárná a véráramlást. A lábad vitális és érzékeny marad, zsibbadás és bizsergés nélkül.'
  ),
  array(
    'questioon' => 'Kényelem érzékeny bőrre',
    'answer'    => 'Még az enyhe nyomás is kellemetlenné válhat érzékeny vagy irritált bőrön. A NORIKS zoknik puha, lélegző anyagot, a cipzárnál védő belső bélést és mérsékelt kompressziót egyesítenek a hatékony támogatásért dörzsölés vagy irritáció nélkül. Viseld egész nap aggodalom nélkül.'
  ),
);

// On sock products, swap the list only for the product-info container
// (titled "Termék Információk").
// Bunion corrector product FAQ (Hungarian, NORIKS).
$bunion_faq = array(
  array( 'questioon' => 'Milyen gyorsan érzem magam jobban?', 'answer' => 'Körülbelül 30 perc alatt — ennyi idő kell a kellemetlenség enyhítéséhez. Két héten át tartó rendszeres használat mellett jelentős enyhülést tapasztal a mindennapi tevékenységek – járás, állás vagy alvás – során.' ),
  array( 'questioon' => 'Milyen gyorsan veszem észre a változást a bütyökön?', 'answer' => 'A bütyök súlyosságától függően a legtöbb vásárló 4–8 hét után lát látható javulást. Kezdődő bütyök: 4 hét. Enyhe bütyök: 4 hét. Súlyos bütyök: 8 hét.' ),
  array( 'questioon' => 'Viselhető cipőben? Tudok járni benne?', 'answer' => 'Nem, nem fér bele a cipőbe. Igen, tud járni benne. Ugyanakkor nyugalmi használatra tervezték – a kanapén pihenve, tévénézés, olvasás vagy alvás közben.' ),
  array( 'questioon' => 'Mi van, ha kényelmetlennek találom?', 'answer' => 'Ez teljesen normális! A NORIKS korrektort elég erősre terveztük ahhoz, hogy helyreállítsa a nagylábujj ízületét, megállítsa a gyulladást és csökkentse a kellemetlenséget. Lehet, hogy 1–2 alkalom kell a megszokáshoz, de utána sokkal jobban fogja érezni magát!' ),
  array( 'questioon' => 'Meddig használjam?', 'answer' => 'Javasoljuk, hogy napi 30 perccel kezdje, és fokozatosan növelje 1–3 órás alkalomig. Amikor már kényelmes, alvás közben is viselheti. Viselje pihenés közben – a kanapén, tévénézés, olvasás vagy alvás közben.' ),
  array( 'questioon' => 'Segít az én konkrét állapotomon?', 'answer' => 'A NORIKS korrektor ideális a következőkhöz: a járást vagy állást érintő kellemetlenség enyhítése; a bütyök okozta kellemetlenség enyhítése pihenés vagy alvás közben; a korai stádiumú, esetleg súlyosbodó bütykök kezelése; műtét után visszatérő bütykök; súlyos, műtétre érett bütykök segítése; valamint hatékony, nem sebészeti megoldásként.' ),
  array( 'questioon' => 'Passzol a lábamra? Van jobb és bal oldal?', 'answer' => 'A lábmérettől függetlenül – a legkisebb gyerekmérettől a nagy felnőtt lábméretig – a NORIKS korrektor kényelmesen illeszkedik. Nincsenek oldalak! Cserélhető kialakításának köszönhetően könnyedén alkalmazkodik a bal vagy jobb lábhoz.' ),
);

// Back belt product FAQ (Hungarian, NORIKS).
$ortopas_faq = array(
  array( 'questioon' => 'Milyen gyorsan érzek fájdalomcsillapodást?', 'answer' => 'Sok felhasználó már közvetlenül a NORIKS öv felhelyezése után érezhető enyhülést tapasztal az isiász és a derékfájás terén. A célzott kompresszió azonnali támogatást nyújt, stabilizálja a gerincet és csökkenti az idegekre nehezedő nyomást. A tartós hatás érdekében javasoljuk, hogy az övet az utasításoknak megfelelően legalább két héten át következetesen viselje.' ),
  array( 'questioon' => 'Hogyan helyezzem fel helyesen az övet?', 'answer' => 'A NORIKS övet a csípő köré, közvetlenül az övvonal alá kell viselni. A keresztcsonti terület fölött (a hát alsó része, közvetlenül a fenék fölött) és a csípőtaraj alatt helyezkedjen el. További információért tekintse meg a használati útmutatót.' ),
  array( 'questioon' => 'Gyengíti az öv az izmaimat?', 'answer' => 'Nem, a NORIKS öv nem gyengíti az izmokat úgy, mint egy deréktámasz fűző. Csupán segít összetartani az SI-ízületeket és visszaállítja a szalagok normál feszességét. Hetekig vagy hónapokig viselheti izomsorvadástól való félelem nélkül.' ),
  array( 'questioon' => 'Viselhetem az övet alvás közben is?', 'answer' => 'Igen, az övet éjszaka is viselheti. A viselés időtartama nincs korlátozva, és a hosszabb viselésnek nincs negatív hatása.' ),
  array( 'questioon' => 'Mennyire szorosan kell felhelyezni?', 'answer' => 'Az övnek szorosan kell illeszkednie, de nem túl feszesen, hogy elkerülje a kellemetlenséget. Gond nélkül tudnia kell mozogni anélkül, hogy az öv bevágna vagy elcsúszna. A feszesség a rugalmas pántokkal könnyen állítható.' ),
  array( 'questioon' => 'Kinek ajánljuk?', 'answer' => 'Mindenkinek, aki derékfájással, isiásszal, izomfeszüléssel, porckorongsérvvel, csípő- vagy medencefájdalommal, illetve SI-ízületi problémákkal küzd. Kortól, nemtől, magasságtól és testsúlytól függetlenül.' ),
  array( 'questioon' => 'Van pénzvisszafizetési garancia?', 'answer' => 'Elégedettségi garanciát kínálunk! Ha nem elégedett a NORIKS övvel, vegye fel velünk a kapcsolatot az info@noriks.com címen a visszaküldés és visszatérítés érdekében 90 napon belül. A határidő az öv kézhezvételétől számít.' ),
);

// FisioRest product FAQ (Hungarian, NORIKS).
$fisiorest_faq = array(
  array( 'questioon' => 'Hogyan működik a NORIKS FisioRest?', 'answer' => 'A FisioRest a trakciót, a hőt és a vibrációs masszázst ötvözi ergonomikus, memóriahabos kialakítással. Ez a technológia pontosan a megfelelő szögben nyújtja meg a nyakat, és tehermentesíti a nyaki gerincet. Ezután nyugtató meleg masszázzsal fokozza a tápanyagban és oxigénben gazdag vérellátást az izmokban, ezzel segítve a szövetek regenerálódását.' ),
  array( 'questioon' => 'Mitől jobb a FisioRest a többi eszköznél?', 'answer' => 'A NORIKS FisioRest attól különleges, hogy <strong>három terápiát egyesít egyben</strong> — hő, masszázs és gyengéd trakció —, amelyek ellazítják az izmokat és újraigazítják a nyakat a tartós enyhülésért. Ráadásul <strong>vezeték nélküli, biztonságosan el lehet rajta aludni, és hűsítő selyembe van burkolva</strong>, olyan kényelmet nyújtva, amilyet máshol nem talál.' ),
  array( 'questioon' => 'Hogyan használjam a FisioRestet?', 'answer' => '1. Töltse fel a mellékelt USB-C kábellel és töltőadapterrel körülbelül 4–6 órán át. 2. Tartsa nyomva a masszázs vagy a hő gombot 5 másodpercig, amíg a jelzőfény kigyullad. 3. A gombok újbóli megnyomásával válthat a különböző masszázssebességek és hőfokozatok között. 4. Élvezze a pihentető masszázst!' ),
  array( 'questioon' => 'Meddig használjam a FisioRestet?', 'answer' => 'Javasoljuk, hogy 15 perccel kezdje, hogy a nyaka hozzászokjon. Idővel felépítheti a teljes munkamenetig. Tájékoztatásul: a gyengéd hő + masszázs + trakció ciklus 30 percig tart, ami általában tökéletes idő a nyak ellazítására és természetes ívének helyreállítására.' ),
  array( 'questioon' => 'Vezeték nélküli a FisioRest?', 'answer' => 'Igen! A NORIKS FisioRest teljesen vezeték nélküli és újratölthető a mindennapi használathoz.' ),
  array( 'questioon' => 'Hogyan tisztítsam a FisioRestet?', 'answer' => 'Az anyaga olaj- és porálló, de javasoljuk, hogy használat után törölje át a FisioRestet fertőtlenítő kendővel, mivel a párna huzata nem mosható.' ),
  array( 'questioon' => 'Mindenki számára biztonságos a használata?', 'answer' => 'A NORIKS FisioRestet úgy terveztük, hogy kortól és nemtől függetlenül mindenki igényeihez alkalmazkodjon. Minden helyzet más azonban. Az Ön igényeire szabott részletes útmutatásért javasoljuk, hogy konzultáljon orvosával.' ),
  array( 'questioon' => 'Visszaküldhetem, ha nem látok eredményt?', 'answer' => 'Természetesen! Teljes pénzvisszafizetési garanciát nyújtunk a kézhezvételtől számított 90 napon belül, ha nem elégedett a termékkel. Írjon nekünk az info@noriks.com címre, és az üzenet kézhezvételétől számított 12 órán belül válaszolunk!' ),
);

$faq_pick = function( $title, $list ) use ( $is_knc, $knc_faq, $is_bunion_page, $bunion_faq, $is_ortopas_page, $ortopas_faq, $is_fisiorest_page, $fisiorest_faq ) {
  $is_info = ( stripos( (string) $title, 'Termék Információ' ) !== false );
  if ( $is_fisiorest_page && $is_info ) {
    return $fisiorest_faq;
  }
  if ( $is_bunion_page && $is_info ) {
    return $bunion_faq;
  }
  if ( $is_ortopas_page && $is_info ) {
    return $ortopas_faq;
  }
  if ( $is_knc && $is_info ) {
    return $knc_faq;
  }
  return $list;
};

$render_faq_items = function( $list ) {
  if ( $list && is_array( $list ) ):
    foreach ( $list as $faq_item ): ?>
      <div class="faq-item">
        <button class="faq-question">
          <?php echo $faq_item["questioon"]; ?>
          <span class="arrow">&#9660;</span>
        </button>
        <div class="faq-answer">
          <p><?php echo $faq_item["answer"]; ?></p>
        </div>
      </div>
    <?php endforeach;
  endif;
};

$faq_title_1 = get_field('faq_title_1', 'option');
$faq_title_2 = get_field('faq_title_2', 'option');
$faq_title_3 = get_field('faq_title_3', 'option');
?>

<section class="faq-section">
    <h2>Gyakran ismételt kérdések</h2>

    <!-- first faq container -->
    <div class="faq-container">
        <h4 style="text-align:left; font-size: 1rem; font-weight: 700; color: #222223; margin-bottom: 10px; "><?php echo $faq_title_1; ?></h4>
        <?php $render_faq_items( $faq_pick( $faq_title_1, $faq_list ) ); ?>
    </div>
    <!-- first faq container -->

    <!-- 2 faq container -->
    <div class="faq-container">
        <br/>
        <h4 style="text-align:left; font-size: 1rem; font-weight: 700; color: #001e36; margin-bottom: 10px; "><?php echo $faq_title_2; ?></h4>
        <?php $render_faq_items( $faq_pick( $faq_title_2, $faq_list2 ) ); ?>
    </div>
    <!-- 2 faq container -->

    <!-- 3 faq container -->
    <div class="faq-container">
        <br/>
        <h4 style="text-align:left; font-size: 1rem; font-weight: 700; color: #001e36; margin-bottom: 10px; "><?php echo $faq_title_3; ?></h4>
        <?php $render_faq_items( $faq_pick( $faq_title_3, $faq_list3 ) ); ?>
    </div>
    <!-- 3 faq container -->
</section>

<script>
document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqAnswer = button.nextElementSibling;
        const arrow = button.querySelector('.arrow');
        if (faqAnswer.style.maxHeight) {
            faqAnswer.style.maxHeight = null;
            arrow.style.transform = 'rotate(0deg)';
        } else {
            document.querySelectorAll('.faq-answer').forEach(item => {
                item.style.maxHeight = null;
            });
            document.querySelectorAll('.arrow').forEach(item => {
                item.style.transform = 'rotate(0deg)';
            });
            faqAnswer.style.maxHeight = faqAnswer.scrollHeight + 'px';
            arrow.style.transform = 'rotate(180deg)';
        }
    });
});
</script>
