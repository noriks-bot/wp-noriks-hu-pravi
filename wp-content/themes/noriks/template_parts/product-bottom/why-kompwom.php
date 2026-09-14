<?php
/**
 * product-bottom: NORIKS FIT Woman — oblikujuca majica s 3D linijama (orto-kompwom).
 * Pravilo: svaka sekcija ima TOCNO JEDNU sliku, naizmjenicno lijevo/desno.
 * Recenzije su preslikane s originala (leonieandco): bordo pas + vodoravni klizac.
 *   1) Zagladen trbuh (lijevo)     5) Tkanina i kroj (desno)
 *   2) Mi vs drugi (desno)         6) Kako je nositi (lijevo)
 *   3) RECENZIJE — klizac          7) Boje (desno)
 *   4) Osjecajte se sigurno (lijevo)
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$kw      = get_template_directory_uri() . '/img/kompwom/';
$kw_path = get_template_directory() . '/img/kompwom/';
$kw_img  = function( $file, $alt, $cls = '' ) use ( $kw, $kw_path ) {
  if ( ! file_exists( $kw_path . $file ) ) { return ''; }
  return '<img class="' . esc_attr( $cls ) . '" src="' . esc_url( $kw . $file ) . '" alt="' . esc_attr( $alt ) . '" loading="lazy">';
};
?>

<!-- 1) ZAGLAĐEN TRBUH — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-trbuh.jpg', 'Lesimított has a NORIKS FIT Woman pólóval' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Azonnal, az első perctől</p>
      <h2 class="nkw-h2">Lesimított has <em>szorítás nélkül</em></h2>
      <p>A 3D vonalaink úgy formálják a testet, hogy finoman összefogják a has és a csípő területét és serkentik a keringést — bevágó öv nélkül és anélkül, hogy szorítva éreznék magukat.</p>
      <p>Póló nélkül a has ernyedt és a redők látszanak a ruha alatt. Vele a has azonnal sima, a tartás pedig egyenesebb.</p>
      <ul class="nkw-check">
        <li>Azonnal lesimított has</li>
        <li>Egyenes tartás gondolkodás nélkül</li>
        <li>Láthatatlan a ruha alatt</li>
      </ul>
      <a class="nkw-cta" href="#bundle-selector">Válasszon színt és méretet</a>
    </div>
  </div>
</section>

<!-- 2) MI VS DRUGI — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">A különbség</p>
      <h2 class="nkw-h2">Miért nem működik a hagyományos kompresszió</h2>
      <p>A klasszikus alakformáló pólók egyetlen vonalban nyomnak. Az eredmény kidudorodás a szegély fölött, ráncok a vállon és szegély, ami látszik a ruha alatt.</p>
      <p>Nálunk a mintázat <strong>bele van szőve az anyagba</strong> és szélességében oszlik el, így a nyomás szétterül, ahelyett hogy egy helyre gyűlne.</p>
      <ul class="nkw-vs">
        <li class="is-yes">A kötésbe szőtt 3D technológia</li>
        <li class="is-yes">Finom 360°-os kompresszió kidudorodás nélkül</li>
        <li class="is-yes">Megtámasztja a derekat</li>
        <li class="is-no">Hagyományos kompresszió, ami kidudorodást csinál</li>
        <li class="is-no">Az anyag napközben feltekeredik</li>
        <li class="is-no">Szegély, ami látszik a ruha alatt</li>
      </ul>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-usporedba.jpg', 'NORIKS FIT Woman a hagyományos alakformáló pólóval összehasonlítva' ); ?></div>
  </div>
</section>

<!-- 3) OSJEĆAJTE SE SIGURNO — slika lijevo -->
<section class="nkw-rev">
  <div class="nkw-rev__head">
    <span class="nkw-rev__badge">★★★★★ Kiváló · Értékelés 4,9/5</span>
    <h2 class="nkw-rev__title">Vélemények olyan nőktől, mint Ön</h2>
  </div>
  <div class="nkw-rev__track">
    <?php
    $kw_reviews = array(
      array( 'img' => 'kwm-ugc-1.jpg', 'name' => 'Kovács Karolina', 'meta' => 'M méret · 46 · Budapest', 'worn' => '7 hete hordja',
             'text' => '„Az ingek simán állnak rajtam, elöl és hátul is. Amiket korábban próbáltam, egy teljes napot sem bírtak ki.”' ),
      array( 'img' => 'kwm-ugc-2.jpg', 'name' => 'Nagy Daniella', 'meta' => '2XL méret · 48 · Debrecen', 'worn' => '5 hete hordja',
             'text' => '„Az első alakformáló póló, ami nem tekeredik fel. A szegély tart, az anyag pedig elég vékony a nyárhoz.”' ),
      array( 'img' => 'kwm-ugc-3.jpg', 'name' => 'Tóth Hanna', 'meta' => '3XL méret · 51 · Szeged', 'worn' => '6 hete hordja',
             'text' => '„Esküvőre vettem, most meg munkába hordom. Az ülés már nem változtat azon, ahogy a ruha esik.”' ),
      array( 'img' => 'kwm-ugc-4.jpg', 'name' => 'Szabó Laura', 'meta' => 'M méret · 43 · Pécs', 'worn' => '8 hete hordja',
             'text' => '„Reggeli után felveszem és elfelejtem, hogy rajtam van. Délig egyáltalán nem veszem észre.”' ),
      array( 'img' => 'kwm-ugc-5.jpg', 'name' => 'Varga Natália', 'meta' => '2XL méret · 37 · Győr', 'worn' => '9 hete hordja',
             'text' => '„Soha nem állt jól, ha betűrtem a pólót a nadrágba. Ezzel alatta a derék keskenyebbnek látszik, és egész nap nem igazgatom magam.”' ),
      array( 'img' => 'kwm-ugc-6.jpg', 'name' => 'Molnár Nikolett', 'meta' => 'L méret · 48 · Miskolc', 'worn' => '4 hete hordja',
             'text' => '„Egy szetthez rendeltem, végül a legtöbb pulóverem alatt hordom. A kötés simának látszik a derékon, nem gyűröttnek.”' ),
      array( 'img' => 'kwm-ugc-7.jpg', 'name' => 'Kiss Petra', 'meta' => 'XL méret · 50 · Kecskemét', 'worn' => '6 hete hordja',
             'text' => '„Napi kilenc órát ülök az asztalnál, és kényelmes marad. Nincsenek varrások, amiket érezni lehet, a blúz pedig hátul sima marad.”' ),
      array( 'img' => 'kwm-ugc-8.jpg', 'name' => 'Farkas Zsófia', 'meta' => 'M méret · 45 · Nyíregyháza', 'worn' => '10 hete hordja',
             'text' => '„A hátam hálás érte. A póló finoman emlékeztet, hogy húzzam ki magam, és közben sehol sem szorít.”' ),
    );
    foreach ( $kw_reviews as $r ) : ?>
    <article class="nkw-rev__card">
      <div class="nkw-rev__img"><?php echo $kw_img( $r['img'], 'Kupka u NORIKS FIT Woman majici' ); ?></div>
      <div class="nkw-rev__body">
        <div class="nkw-rev__top">
          <div>
            <p class="nkw-rev__name"><?php echo esc_html( $r['name'] ); ?>
              <svg width="15" height="15" viewBox="0 0 16 16" aria-hidden="true"><circle cx="8" cy="8" r="8" fill="#3aa06a"/><path d="M5 8l2 2 4-4" fill="none" stroke="#fff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </p>
            <p class="nkw-rev__meta"><?php echo esc_html( $r['meta'] ); ?></p>
          </div>
          <span class="nkw-rev__worn"><?php echo esc_html( $r['worn'] ); ?></span>
        </div>
        <p class="nkw-rev__text"><?php echo esc_html( $r['text'] ); ?></p>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
  <p class="nkw-rev__hint">Húzza oldalra a további véleményekért →</p>
</section>

<!-- 7) BOJE — slika desno -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-drzanje.jpg', 'Keskenyebb derék és egyenes tartás' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Három dolog egyszerre</p>
      <h2 class="nkw-h2">Érezze magát <em>biztonságban a bőrében</em></h2>
      <div class="nkw-points">
        <div class="nkw-point"><h3>Keskenyebb derék</h3><p>A 3D vonalak formálják a derekat és lesimítják a kidudorodásokat a nadrág vagy a szoknya fölött.</p></div>
        <div class="nkw-point"><h3>Azonnal lapos has</h3><p>A finom kompresszió minden ruha alatt tartja a hasat, egyetlen pontra ható nyomás nélkül.</p></div>
        <div class="nkw-point"><h3>Egyenes tartás</h3><p>A háttámasz segít egyenesen állni és tehermentesíti a derekat.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- 4) TKANINA I KROJ — slika desno -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Anyag és szabás</p>
      <h2 class="nkw-h2">A mintázat <em>szőtt</em>, nem nyomott</h2>
      <p>A széles pánt a hason és a csípőn fut át, a másik a háton. Ezért semmi nem reped és semmi nem pattogzik le.</p>
      <div class="nkw-facts">
        <div><h3>3D vonalak</h3><p>Strukturáltak, a kötésbe szőve — idővel sem kopnak le.</p></div>
        <div><h3>Pánt a háton</h3><p>A második pánt a háton fut át és támogatja az egyenes tartást.</p></div>
        <div><h3>Ujjak</h3><p>Testhezálló szabás, ami nem tekeredik és nem csúszik felfelé.</p></div>
        <div><h3>Anyag</h3><p>Vékony, matt és szellős — eltűnik ing vagy zakó alatt.</p></div>
      </div>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-detalji.jpg', 'Részletek: 3D vonalak, pánt, ujjak, anyag' ); ?></div>
  </div>
</section>

<!-- 5) KAKO JE NOSITI — slika lijevo -->
<section class="nkw-sec nkw-tint">
  <div class="nkw-wrap nkw-row2">
    <div class="nkw-media"><?php echo $kw_img( 'kwm-siva.jpg', 'NORIKS FIT Woman sötétszürke' ); ?></div>
    <div class="nkw-copy">
      <p class="nkw-kicker">Hogyan hordja</p>
      <h2 class="nkw-h2">Vegye fel reggel és felejtse el estig</h2>
      <p>Normálisan kell tudnia lélegezni és enni, anélkül hogy a pólóra gondolna. Ha a nyom a bőrön húsz perccel a levétel után is látszik, a méret túl kicsi.</p>
      <ul class="nkw-check">
        <li><strong>Egész nap</strong> — a kompresszió el van osztva, így semmi nem vág be</li>
        <li><strong>Minden alatt</strong> — nincs vonal és nincs szegély a ruha alatt</li>
        <li><strong>Egyszerű ápolás</strong> — gépi mosás 30 °C-on</li>
      </ul>
      <p class="nkw-note nkw-note--left">A méretet a mellbőség szerint válassza. Ha két méret között van, vegye a nagyobbat.</p>
    </div>
  </div>
</section>

<!-- 6) RECENZIJE (postavitev z originala — bordo pas z drsnikom) -->
<section class="nkw-sec">
  <div class="nkw-wrap nkw-row2 nkw-row2--rev">
    <div class="nkw-copy">
      <p class="nkw-kicker">Három szín</p>
      <h2 class="nkw-h2">Fekete, sötétszürke és <em>rózsaszín</em></h2>
      <p>Fekete minden alá, sötétszürke a hétköznapokra, rózsaszín, ha valami melegebbet szeretne. Mindháromnak ugyanaz a kötése és ugyanaz a mintázata.</p>
      <p>A színt és a méretet ezen az oldalon választja ki, a kosárba tétel előtt.</p>
      <a class="nkw-cta" href="#bundle-selector">Válasszon színt és méretet</a>
    </div>
    <div class="nkw-media"><?php echo $kw_img( 'kwm-roza.jpg', 'NORIKS FIT Woman rózsaszín' ); ?></div>
  </div>
</section>

<style>
.nkw-sec { padding: 62px 0; background: #fff; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; color: #241c22; }
.nkw-sec * { box-sizing: border-box; }
.nkw-tint { background: #fbf3f4; }
.nkw-wrap { width: 100%; max-width: 1240px; margin: 0 auto; padding: 0 24px; }
.nkw-kicker { font-size: 12.5px; font-weight: 800; letter-spacing: .14em; text-transform: uppercase; color: #a8536b; margin: 0 0 10px; }
.nkw-h2 { font-size: clamp(25px, 3.2vw, 36px); font-weight: 800; line-height: 1.18; letter-spacing: -.01em; margin: 0 0 16px; color: #241c22; }
.nkw-h2 em { font-style: italic; font-weight: 800; color: #a8536b; }
.nkw-copy p { font-size: 16px; line-height: 1.7; color: #56494f; margin: 0 0 14px; }
.nkw-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 52px; align-items: center; }
.nkw-media img { width: 100%; display: block; border-radius: 14px; box-shadow: 0 2px 4px rgba(36,28,34,.05), 0 14px 40px rgba(36,28,34,.10); }
.nkw-check { list-style: none; padding: 0; margin: 4px 0 22px; display: flex; flex-direction: column; gap: 11px; }
.nkw-check li { position: relative; padding-left: 28px; font-size: 15.5px; line-height: 1.5; }
.nkw-check li::before { content: "\2713"; position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; background: #2f9e5f; color: #fff; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs { list-style: none; padding: 0; margin: 4px 0 0; display: flex; flex-direction: column; gap: 10px; }
.nkw-vs li { position: relative; padding-left: 28px; font-size: 15px; line-height: 1.5; }
.nkw-vs li::before { position: absolute; left: 0; top: -1px; width: 20px; height: 20px; border-radius: 50%; font-size: 11px; font-weight: 800; display: flex; align-items: center; justify-content: center; }
.nkw-vs .is-yes::before { content: "\2713"; background: #2f9e5f; color: #fff; }
.nkw-vs .is-no { color: #8b7b83; }
.nkw-vs .is-no::before { content: "\2715"; background: #ece0e4; color: #a8949c; }
.nkw-points { display: flex; flex-direction: column; gap: 20px; }
.nkw-point h3 { font-size: 17.5px; font-weight: 800; margin: 0 0 6px; color: #a8536b; }
.nkw-point p { font-size: 15.5px; color: #56494f; line-height: 1.6; margin: 0; }
.nkw-facts { display: grid; grid-template-columns: 1fr 1fr; gap: 22px 26px; margin-top: 6px; }
.nkw-facts h3 { font-size: 16px; font-weight: 800; margin: 0 0 6px; color: #241c22; }
.nkw-facts p { font-size: 14.5px; color: #6b5f66; line-height: 1.6; margin: 0; }
.nkw-note { font-size: 13.5px; color: #8b7b83; font-style: italic; margin: 20px 0 0; }
.nkw-note--left { text-align: left; }
.nkw-cta { display: inline-block; background: #241c22; color: #fff !important; font-size: 15px; font-weight: 700; padding: 15px 30px; border-radius: 8px; text-decoration: none; }
.nkw-cta:hover { background: #a8536b; color: #fff !important; }

/* ── recenzije: bordo pas + vodoravni klizac (kot na originalu) ────── */
.nkw-rev { background: #5c2331; padding: 62px 0 54px; font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; }
.nkw-rev * { box-sizing: border-box; }
.nkw-rev__head { max-width: 1240px; margin: 0 auto 30px; padding: 0 24px; text-align: center; }
.nkw-rev__badge { display: inline-block; border: 1px solid rgba(255,255,255,.45); border-radius: 100px; padding: 8px 18px; font-size: 12.5px; font-weight: 700; letter-spacing: .04em; color: #fff; }
.nkw-rev__title { font-family: Georgia, 'Times New Roman', serif; font-size: clamp(27px, 3.4vw, 40px); font-weight: 400; color: #fff; margin: 16px 0 0; line-height: 1.2; }
.nkw-rev__track { display: flex; gap: 20px; overflow-x: auto; scroll-snap-type: x mandatory; -webkit-overflow-scrolling: touch;
  padding: 4px 24px 18px; margin: 0 auto; max-width: 1240px; scrollbar-width: thin; scrollbar-color: rgba(255,255,255,.4) transparent; }
.nkw-rev__track::-webkit-scrollbar { height: 6px; }
.nkw-rev__track::-webkit-scrollbar-track { background: rgba(255,255,255,.12); border-radius: 100px; }
.nkw-rev__track::-webkit-scrollbar-thumb { background: rgba(255,255,255,.45); border-radius: 100px; }
.nkw-rev__card { flex: 0 0 310px; width: 310px; scroll-snap-align: start; background: #fff; border-radius: 12px; overflow: hidden; display: flex; flex-direction: column; }
.nkw-rev__img img { width: 100%; aspect-ratio: 1/1; object-fit: cover; display: block; }
.nkw-rev__body { padding: 16px 18px 20px; }
.nkw-rev__top { display: flex; align-items: flex-start; justify-content: space-between; gap: 10px; }
.nkw-rev__name { display: flex; align-items: center; gap: 6px; font-size: 15px; font-weight: 800; color: #241c22; margin: 0; }
.nkw-rev__name svg { flex: 0 0 15px; }
.nkw-rev__meta { font-size: 12.5px; color: #7b6d73; margin: 3px 0 0; }
.nkw-rev__worn { flex: 0 0 auto; background: #f3eaed; color: #5c2331; font-size: 10.5px; font-weight: 800; letter-spacing: .04em; text-transform: uppercase; padding: 5px 9px; border-radius: 100px; white-space: nowrap; }
.nkw-rev__text { font-size: 14.5px; line-height: 1.6; color: #46393f; margin: 13px 0 0; }
.nkw-rev__hint { text-align: center; font-size: 12.5px; color: rgba(255,255,255,.6); margin: 8px 0 0; }

@media (max-width: 980px) {
  .nkw-row2 { grid-template-columns: 1fr; gap: 30px; }
  .nkw-row2--rev .nkw-media { order: -1; }
  .nkw-facts { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 560px) {
  .nkw-sec { padding: 44px 0; }
  .nkw-wrap { padding: 0 16px; }
  .nkw-facts { grid-template-columns: 1fr; gap: 16px; }
  .nkw-cta { width: 100%; text-align: center; }
  .nkw-rev { padding: 46px 0 40px; }
  .nkw-rev__head { padding: 0 16px; }
  .nkw-rev__track { padding: 4px 16px 16px; gap: 14px; }
  .nkw-rev__card { flex: 0 0 300px; width: 300px; }
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
