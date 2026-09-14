<?php
/**
 * product-bottom: NORIKS Pal — stap s dvije rucke, svjetiljkom i alarmom (orto-pal).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno,
 * pozadine se izmjenjuju (prva tonirana). Iznimka je galerija kupaca (12).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$pl      = get_template_directory_uri() . '/img/pal/';
$pl_path = get_template_directory() . '/img/pal/';
$pl_vid  = function( $file, $poster, $alt ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<video class="npl-video" autoplay muted loop playsinline preload="metadata" poster="'
       . esc_url( $pl . $poster ) . '" aria-label="' . esc_attr( $alt ) . '">'
       . '<source src="' . esc_url( $pl . $file ) . '" type="video/mp4"></video>';
};
$pl_img  = function( $file, $alt, $cls = '' ) use ( $pl, $pl_path ) {
  if ( ! file_exists( $pl_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $pl . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) USTAJANJE -->
<!-- 1) PROBLEM — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-rucke.jpg', 'Ortopéd fogantyúk a támaszkodáshoz' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">A második fogantyú</p>
      <h2 class="npl-h2">Támasz pontosan ott, ahol kell</h2>
      <p>A felső fogantyú mellett a bot kapott egy <strong>második, alacsonyabb fogantyút</strong>. Ebbe kapaszkodik, amikor felkel a fotelből, az ágyból vagy egy alacsony székről.</p>
      <p>A nyomás függőlegesen lefelé megy, a stabil talpba — nem előre, ami kibillentené az egyensúlyából. Ezért egyetlen mozdulattal áll fel, előredőlés és mások segítsége nélkül.</p>
      <ul class="npl-check">
        <li>Felállás fotelből, ágyból vagy padról</li>
        <li>A fogantyúk hosszabb séta után sem törik fel a tenyeret</li>
        <li>Nem kell megvárnia, hogy valaki segítsen</li>
      </ul>
      <a class="npl-cta" href="#bundle-selector">Nézze meg az ajánlatot</a>
    </div>
  </div>
</section>

<!-- 3) PREGLED ŠTAPA — slika lijevo -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">Stabilitás</p>
      <h2 class="npl-h2">Magától megáll — nem kell a bot után hajolni</h2>
      <p>Négy gumitalp tartja a botot egyenesen, amikor elengedi. Nem esik a földre a kanapé mellett, az asztalnál vagy a váróban, így nem kell lehajolnia érte.</p>
      <p>Ez az az apróság, amit már az első nap észrevesz: a bot ott várja, ahol hagyta.</p>
    </div>
    <div class="npl-media"><?php echo $pl_vid( 'pal-video.mp4', 'pal-video.jpg', 'A bot magától áll a négy talpon' ); ?></div>
  </div>
</section>

<!-- 5) PROTUKLIZNA BAZA — slika lijevo -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-pregled.jpg', 'A bot áttekintése: két fogantyú, lámpa, riasztó, négy talp' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Amit kap</p>
      <h2 class="npl-h2">Öt dolog egyetlen botban</h2>
      <div class="npl-points">
        <div class="npl-point"><h3>Két fogantyú</h3><p>A felső a járáshoz, az alsó a felálláshoz.</p></div>
        <div class="npl-point"><h3>Négy talp</h3><p>A bot magától áll, és nem esik a földre.</p></div>
        <div class="npl-point"><h3>Lámpa</h3><p>Megvilágítja az utat maga előtt a sötétben.</p></div>
        <div class="npl-point"><h3>Riasztó</h3><p>Hangos jelzés, amit a háziak is meghallanak.</p></div>
        <div class="npl-point"><h3>Összecsukható kivitel</h3><p>Elfér a táskában és az autó kesztyűtartójában.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) STOJI SAM (video) — video desno -->
<section class="npl-sec">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">A talp</p>
      <h2 class="npl-h2">Megtartja csempén, parkettán és a szabadban is</h2>
      <p>A gumitalpak <strong>csúszásgátlósak</strong> és nem csúsznak meg sima padlón. Kint a talp alkalmazkodik az egyenetlen talajhoz, és stabil marad.</p>
      <ul class="npl-check">
        <li>Nem csúszik csempén, parkettán és laminált padlón</li>
        <li>Alkalmazkodik az egyenetlen talajhoz</li>
        <li>A talpak cserélhetők, ha elkopnak</li>
      </ul>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-nozice.jpg', 'Négy csúszásgátló gumitalp' ); ?></div>
  </div>
</section>

<!-- 6) SVJETILJKA — slika desno -->
<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2">
    <div class="npl-media"><?php echo $pl_img( 'pal-sklopivo.jpg', 'Összecsukható és állítható bot' ); ?></div>
    <div class="npl-copy">
      <p class="npl-kicker">Hordozhatóság</p>
      <h2 class="npl-h2">Egy másodperc alatt összecsukható, és elfér a táskában</h2>
      <p>A részeket belső gumi köti össze, így a bot <strong>egyetlen mozdulattal</strong> szedhető szét és rakható össze, szerszám és segítség nélkül. Összecsukva elfér a táskában vagy az autó kesztyűtartójában.</p>
      <p>A magasságot néhány másodperc alatt állítja be, így ugyanaz a bot jó egy 155 cm-es és egy 190 cm-es embernek is.</p>
      <ul class="npl-check">
        <li>Szétszedés és összerakás szerszám nélkül</li>
        <li>Állítható hossz minden testmagassághoz</li>
        <li>A részek összekötve maradnak — semmi nem vész el</li>
      </ul>
    </div>
  </div>
</section>

<section class="npl-sec npl-rev">
  <div class="npl-wrap">
    <p class="npl-kicker npl-center">A vásárlóinknál</p>
    <h2 class="npl-h2 npl-center">A bot igazi otthonokban</h2>
    <p class="npl-sub">Vásárlói fotók és vélemények — a fotel mellett, az előszobában, sötétben és összecsukva, útra készen.</p>
    <div class="npl-rev__grid">
      <?php
      $pl_reviews = array(
        array( 'img' => 'pal-ugc-1.jpg',    'name' => 'Kovács Mária',  'meta' => 'Budapest · 2 hónapja vásárolta',
               'text' => '„A fotel mellett tartom. Régen három nekifutásból álltam fel, most megfogom az alsó fogantyút és elsőre sikerül.”' ),
        array( 'img' => 'pal-ugc-3.jpg',    'name' => 'Nagy Zoltán', 'meta' => 'Debrecen · 3 hónapja vásárolta',
               'text' => '„Magától megáll az asztal mellett és nem dől el. Nekem ez a legnagyobb dolog — nem hajolok le a botért ötpercenként.”' ),
        array( 'img' => 'pal-noc.jpg',      'name' => 'Szabó Anna',  'meta' => 'Szeged · egy hónapja vásárolta',
               'text' => '„A lámpát akkor kapcsolom be, amikor éjjel megyek a fürdőszobába. Nem ébresztem fel a férjemet a nagy villannyal, és látom magam előtt a padlót.”' ),
        array( 'img' => 'pal-ugc-baza.jpg', 'name' => 'Tóth István',    'meta' => 'Pécs · 6 hete vásárolta',
               'text' => '„A talp széles és nem csúszik. Kipróbáltam a fürdőszobai csempén és a vizes teraszon is — tart.”' ),
        array( 'img' => 'pal-ugc-6.jpg',    'name' => 'Varga Erzsébet',    'meta' => 'Győr · 2 hónapja vásárolta',
               'text' => '„Édesanyámnak vettem a 78. születésnapjára. Maga állítja be a magasságot és maga csukja össze, segítség nélkül.”' ),
        array( 'img' => 'pal-ugc-5.jpg',    'name' => 'Kiss László', 'meta' => 'Miskolc · 4 hónapja vásárolta',
               'text' => '„Az autóban tartom, amikor orvoshoz megyek. Egy másodperc alatt összecsukható és elfér a táskában, a váróban sem útban.”' ),
      );
      foreach ( $pl_reviews as $r ) : ?>
      <article class="npl-rev__card">
        <div class="npl-rev__img"><?php echo $pl_img( $r['img'], 'Fotografija kupca — NORIKS Pal' ); ?></div>
        <div class="npl-rev__body">
          <div class="npl-rev__stars" aria-label="Ocjena 5 od 5">★★★★★</div>
          <p class="npl-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
          <p class="npl-rev__name"><?php echo esc_html( $r['name'] ); ?>
            <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#2f9e5f"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </p>
          <p class="npl-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="npl-sec npl-tint">
  <div class="npl-wrap npl-row2 npl-row2--rev">
    <div class="npl-copy">
      <p class="npl-kicker">A különbség</p>
      <h2 class="npl-h2">A „segítség kell” helyett „megyek magam”</h2>
      <p>A különbség nem a lábak erejében van, hanem abban, hogy van mibe kapaszkodni. A második fogantyú viszi a terhet a válla és a csuklója helyett.</p>
      <p class="npl-strong">Önálló felállás, és akár séta a parkban is.</p>
      <a class="npl-cta" href="#bundle-selector">Rendelje meg kockázat nélkül — 30 nap</a>
    </div>
    <div class="npl-media"><?php echo $pl_img( 'pal-prije-poslije.jpg', 'Előtte és utána — önálló mozgás' ); ?></div>
  </div>
</section>

<!-- 14) ŠEST RAZLOGA — slika desno -->
<style>
.npl-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #12212b; }
.npl-sec * { box-sizing: border-box; }
.npl-tint { background: #eef6f8; }
.npl-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.npl-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #2b8fa6; margin: 0 0 10px; }
.npl-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; }
.npl-center { text-align: center; }
.npl-copy p { font-size: 16px; line-height: 1.7; color: #465863; margin: 0 0 14px; }
.npl-strong { font-weight: 800; color: #12212b !important; font-size: 17px !important; }
.npl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.npl-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(18,33,43,.05), 0 14px 40px rgba(18,33,43,.10); }
.npl-check { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 11px; }
.npl-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.npl-check li::before { content: "✓"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.npl-points { display: flex; flex-direction: column; gap: 16px; margin-top: 4px; }
.npl-point h3 { font-size: 16.5px; font-weight: 800; margin: 0 0 4px; color: #2b8fa6; }
.npl-point p { font-size: 15px; color: #465863; line-height: 1.6; margin: 0; }
.npl-six { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-top: 4px; }
.npl-reason { background: #fff; border: 1px solid #d9e8ec; border-radius: 12px; padding: 18px 16px; }
.npl-reason span { display: inline-flex; align-items: center; justify-content: center; width: 26px; height: 26px; border-radius: 50%; background: #2b8fa6; color: #fff; font-weight: 800; font-size: 13px; margin-bottom: 9px; }
.npl-reason h3 { font-size: 15.5px; font-weight: 800; margin: 0 0 5px; line-height: 1.3; }
.npl-reason p { font-size: 14px; color: #465863; line-height: 1.55; margin: 0; }
.npl-cta { display: inline-block; background: #12212b; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.npl-cta:hover { background: #2b8fa6; color: #fff !important; }
.npl-rev__grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; }
.npl-rev__card { background: #fff; border: 1px solid #d9e8ec; border-radius: 14px; overflow: hidden;
  display: flex; flex-direction: column; box-shadow: 0 1px 2px rgba(18,33,43,.04), 0 8px 24px rgba(18,33,43,.06); }
.npl-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; border-radius: 0; box-shadow: none; }
.npl-rev__body { padding: 16px 18px 18px; }
.npl-rev__stars { color: #f0a020; font-size: 14px; letter-spacing: 1px; margin: 0 0 8px; }
.npl-rev__text { font-size: 14.5px; line-height: 1.6; color: #46545e; margin: 0 0 12px; }
.npl-rev__name { display: flex; align-items: center; gap: 6px; font-size: 14.5px; font-weight: 800; color: #12212b; margin: 0; }
.npl-rev__name svg { flex: 0 0 15px; }
.npl-rev__meta { font-size: 12.5px; color: #7b8b94; margin: 3px 0 0; }
.npl-sub { text-align: center; font-size: 16px; color: #5b6d78; max-width: 60ch; margin: 0 auto 34px; line-height: 1.6; }
.npl-video { width: 100%; display: block; border-radius: 14px; }
@media (max-width: 980px) {
  .npl-rev__grid { grid-template-columns: 1fr 1fr; }
    .npl-row2 { grid-template-columns: 1fr; gap: 30px; }
  .npl-row2--rev .npl-media { order: -1; }
  .npl-six { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .npl-rev__grid { grid-template-columns: 1fr; gap: 16px; }
  .npl-sec { padding: 44px 0; }
  .npl-wrap { padding: 0 16px; }
  .npl-six { grid-template-columns: 1fr; gap: 14px; }
  .npl-cta { width: 100%; text-align: center; }
}

/* ── kratek opis izdelka: kljukice namesto pik ─────────────────────── */
.woocommerce div.product .woocommerce-product-details__short-description ul,
.woocommerce-product-details__short-description ul {
  list-style: none !important; margin: 10px 0 14px !important; padding-left: 0 !important; }
.woocommerce div.product .woocommerce-product-details__short-description ul li,
.woocommerce-product-details__short-description ul li {
  list-style: none !important; text-indent: 0 !important; margin: 0 0 7px !important;
  line-height: 1.45 !important; font-size: 15.5px !important;
  display: block !important; position: relative !important; padding-left: 31px !important; }
.woocommerce-product-details__short-description ul li::marker { content: "" !important; }
.woocommerce-product-details__short-description ul li::before { content: none !important; }
.woocommerce-product-details__short-description .nsg-tick {
  position: absolute !important; left: 0 !important; top: 1px !important;
  width: 21px; height: 21px; border-radius: 50%;
  background: #2f9e5f !important; color: #fff !important;
  font-size: 12px !important; font-weight: 800 !important; line-height: 21px !important;
  text-align: center !important; display: inline-block !important; }
.woocommerce-product-details__short-description p:first-of-type { font-size: 16px; line-height: 1.55; }
</style>
