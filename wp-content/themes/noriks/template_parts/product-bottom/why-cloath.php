<?php
/**
 * product-bottom: Polar NORIKS Cloth XXL — krpa za ciscenje (orto-cloath).
 *
 * Broj i redoslijed sekcija preslikani s referentne stranice (6 sekcija):
 *   1. A Crystal-Clear Shower in Under a Minute   animacija cl-anim-1
 *   2. Your Mirror, Perfect in Seconds            animacija cl-anim-2
 *   3. Keep Your Bathroom Sparkling               slika 09_zena_drzi_krpu
 *   4. Holds Up To 4X Its Weight In Water         animacija cl-anim-3
 *   5. Lint-Free. Tough. Built to Last.           animacija cl-anim-4
 *   6. 60-Day Guarantee                           slika 10_zena_lice
 * Recenzije i FAQ renderira zajednicki reviews.php (ne ovdje).
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cl      = get_template_directory_uri() . '/img/cloath/';
$cl_path = get_template_directory() . '/img/cloath/';

$cl_img = function( $file, $alt ) use ( $cl, $cl_path ) {
  if ( file_exists( $cl_path . $file ) ) {
    return '<img src="'.esc_url($cl.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="ncl-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
$cl_anim = function( $mp4, $fallback, $alt ) use ( $cl, $cl_path, $cl_img ) {
  if ( file_exists( $cl_path . $mp4 ) ) {
    $poster = str_replace( '.mp4', '-poster.webp', $mp4 );
    return '<video class="ncl-video" src="'.esc_url($cl.$mp4).'" poster="'.esc_url($cl.$poster).'"'
         . ' autoplay muted loop playsinline preload="metadata" aria-label="'.esc_attr($alt).'"></video>';
  }
  return $cl_img( $fallback, $alt );
};
?>

<!-- ============ 1) Kristalno cist tus u manje od minute ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-1.mp4','cl-01-hero-3plus3.webp','Zuhanykabin tisztítása Polar NORIKS Cloth kendővel'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">Kristálytiszta zuhanykabin egy percen belül — vegyszerek nélkül, csak vízzel</h2>
      <p>Még mindig vízfoltokkal, vízkővel és szappanlerakódással küzd, még lehúzó vagy olcsó bolti kendő után is?</p>
      <p>Ezért készítettük el a <strong>Polar NORIKS Cloth</strong> — mindenkinek, aki elege van a súrolásból és a sprékre kidobott pénzből.</p>
      <p>Néhány gyors mozdulat, és az üveg, a csempe és a csaptelep makulátlan marad. Agresszív szerek, csíkok és idegeskedés nélkül.</p>
    </div>
  </div>
</section>

<!-- ============ 2) Ogledalo savrseno u nekoliko sekundi ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <h2 class="ncl-h2">Tökéletes tükör másodpercek alatt — csíkok és erőfeszítés nélkül</h2>
      <p>Elege van a vízfoltokból, cseppekből és a párából, ami csíkokat vagy szöszt hagy?</p>
      <p>A sűrű szövésű réteg egyetlen mozdulattal felszedi a szennyeződést és a vizet, így a tükör kristálytiszta marad — spré és maszatolás nélkül.</p>
      <p class="ncl-strong">Makulátlan ragyogás minden alkalommal — és egy kendő, ami mosás után is bírja.</p>
    </div>
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-2.mp4','cl-08-dvostrani.webp','Tükör törlése csíkmentesen'); ?></div>
  </div>
</section>

<!-- ============ 3) Kupaonica koja blista ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_img('cl-09-zena-krpa.webp','Polar NORIKS Cloth kendővel tisztított fürdőszoba'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">Ragyogó fürdőszoba anélkül, hogy megerőltetné magát</h2>
      <p>Tiszta üveg, csillogó csaptelep, makulátlan tükör — súrolás, spré és stressz nélkül.</p>
      <p>A vastagabb, sűrűbb szálak néhány mozdulattal felszedik a vízkövet, a szennyeződést és a vízfoltokat — csak vízzel.</p>
      <ul class="ncl-check">
        <li>Üveg- és teraszajtók</li>
        <li>Tükrök és nagy ablakok</li>
        <li>Csempe, csaptelepek és munkalapok</li>
      </ul>
      <a class="ncl-cta" href="#bundle-selector">Válassza ki a csomagját</a>
    </div>
  </div>
</section>

<!-- ============ 4) Upija do 4x svoje tezine ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <h2 class="ncl-h2">Saját súlyának négyszeresét szívja fel vízből, és szárazon hagyja a felületeket</h2>
      <p>A legtöbb kendő csak eloszlatja a vizet. A Polar NORIKS Cloth felszív <strong>akár 600 ml-t</strong> egyszerre — csaknem egy egész üveg vizet.</p>
      <p>Néhány mozdulat, és a zuhanykabin, a csempe és a csaptelep száraz. Csíkok, foltok és várakozás nélkül.</p>
      <p class="ncl-strong">Az eredmény: fürdőszoba, ami tovább marad tiszta, rendetlenség nélkül.</p>
    </div>
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-3.mp4','cl-07-dimenzije.webp','Vízfelszívás — akár 600 ml egyszerre'); ?></div>
  </div>
</section>

<!-- ============ 5) Bez vlakana, izdrzljiva ============ -->
<section class="ncl-sec ncl-alt">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-media"><?php echo $cl_anim('cl-anim-4.mp4','cl-02-stack.webp','A kendő több száz mosás után'); ?></div>
    <div class="ncl-copy">
      <h2 class="ncl-h2">Szöszmentes. Strapabíró. Mosás után is kitart.</h2>
      <p>A kendő több száz használatra készült. Dobja a mosógépbe, és újra kész.</p>
      <p>A hétköznapi kendőkkel ellentétben <strong>nem szöszöl</strong> — nincs szösz, nincs csík, nincs idegeskedés.</p>
      <ul class="ncl-check">
        <li>Nem fakul és nem foszlik</li>
        <li>Mosógépben mosható 40 °C-on</li>
        <li>Kétoldalas kialakítás: tisztít és fényez</li>
      </ul>
    </div>
  </div>
</section>

<!-- ============ 6) 30 napig jamstva ============ -->
<section class="ncl-sec">
  <div class="ncl-wrap ncl-row2">
    <div class="ncl-copy">
      <p class="ncl-eyebrow">30 nap kockázat nélkül</p>
      <h2 class="ncl-h2">Csak akkor fizet, ha tetszik</h2>
      <p>Még mindig kételkedik? Megértjük — túl szépen hangzik ahhoz, hogy igaz legyen.</p>
      <p>Ezért a kendőt teljesen kockázat nélkül kipróbálhatja <strong>30 napig</strong>. Ha az üveg nem kristálytiszta, ha a csempét nem könnyebb tisztán tartani, vagy egyszerűen nem tetszik az eredmény — küldje vissza.</p>
      <p class="ncl-strong">Vagy olyan fürdőszobát kap, ami úgy ragyog, mint új korában — vagy visszakapja a pénzét.</p>
      <a class="ncl-cta" href="#bundle-selector">Rendelje meg kockázat nélkül</a>
    </div>
    <div class="ncl-media"><?php echo $cl_img('cl-10-zena-lice.webp','30 napos pénzvisszafizetési garancia'); ?></div>
  </div>
</section>

<style>
  .ncl-sec { padding: 46px 0; background: #fff; }
  .ncl-alt { background: #f1f4ef; }
  .ncl-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .ncl-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .ncl-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #2b4636; line-height: 1.2; margin: 0 0 16px; }
  .ncl-eyebrow { font-size: 12.5px; font-weight: 800; letter-spacing: .12em; text-transform: uppercase; color: #6f8f74; margin: 0 0 8px; }
  .ncl-copy p { font-size: 16px; line-height: 1.7; color: #3a3a3a; margin: 0 0 14px; }
  .ncl-strong { font-weight: 700; color: #2b4636 !important; }
  .ncl-media img, .ncl-video { width: 100%; height: auto; display: block; border-radius: 16px; }

  .ncl-ph { width: 100%; aspect-ratio: 1/1; background: #e8eee7; border: 1px dashed #cfdccd; border-radius: 16px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .ncl-ph span { font-size: 13px; line-height: 1.45; color: #8ba38f; text-align: center; }

  .ncl-check { list-style: none; margin: 0 0 16px; padding: 0; }
  .ncl-check li { position: relative; padding: 0 0 11px 30px; font-size: 15.5px; color: #2b4636; line-height: 1.5; }
  .ncl-check li:before { content: "✓"; position: absolute; left: 0; top: 0; width: 20px; height: 20px; background: #6f8f74; color: #fff; border-radius: 50%; font-size: 12px; text-align: center; line-height: 20px; }

  .ncl-cta { display: inline-block; margin-top: 8px; background: #2b4636; color: #fff; font-weight: 700; font-size: 16px; padding: 14px 30px; border-radius: 10px; text-decoration: none; }
  .ncl-cta:hover { background: #6f8f74; color: #fff; }

  @media (max-width: 820px) {
    .ncl-sec { padding: 30px 0; }
    .ncl-row2 { grid-template-columns: 1fr; gap: 20px; }
    .ncl-row2 .ncl-media { order: -1; }
    .ncl-h2 { font-size: 1.85rem; }
    /* tema vec ima svoj razmak na kontejneru — nas prepolovimo */
    .ncl-wrap { padding: 0 9px !important; }
  }

  /* Krpa nema velicina — bez linka na tablicu velicina. */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: zelene kvacice, a prelomljeni redak pocinje ispod teksta (viseci uvlak). */
  .woocommerce-product-details__short-description ul { list-style: none; margin: 8px 0 14px; padding-left: 0; }

  /* Razmak iznad i ispod cijene izjednacen. */
  .single-product div.product .summary .price,
  .single-product div.product .summary p.price { margin: 14px 0 14px !important; }
  .woocommerce-product-details__short-description ul li {
      list-style: none; margin-left: 0; line-height: 1.55; margin-bottom: 8px;
      padding-left: 17px; text-indent: -17px;
  }
  .woocommerce-product-details__short-description .ncl-tick {
      display: inline-block; width: 17px; text-indent: 0; color: #3f8b57; font-weight: 800;
  }
  .woocommerce-product-details__short-description p:has(+ ul) { margin-top: 20px; margin-bottom: 4px; }

  /* CTA gumb na sredini sekcije. */
  .ncl-copy .ncl-cta { display: block; width: max-content; margin-left: auto; margin-right: auto; }
</style>

<script>
(function(){
  document.querySelectorAll('a.ncl-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){
      e.preventDefault();
      var t = document.getElementById('bundle-selector') || document.querySelector('.single_add_to_cart_button');
      if (t) t.scrollIntoView({ behavior: 'smooth', block: 'center' });
    });
  });
})();
</script>
