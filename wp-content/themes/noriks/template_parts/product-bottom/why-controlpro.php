<?php
/**
 * product-bottom: NORIKS ControlPro (orto-controlpro).
 * Preneseno s hrvaskega trga 1:1 — iste 4 sekcije, ista postavitev, prevedeno.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
$cp      = get_template_directory_uri() . '/img/controlpro/';
$cp_path = get_template_directory() . '/img/controlpro/';
$cp_img = function( $file, $alt ) use ( $cp, $cp_path ) {
  if ( file_exists( $cp_path . $file ) ) {
    return '<img src="'.esc_url($cp.$file).'" alt="'.esc_attr($alt).'" loading="lazy">';
  }
  return '<div class="cpr-ph" role="img" aria-label="'.esc_attr($alt).'"><span>'.esc_html($alt).'</span></div>';
};
?>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('08-vjezba-1.webp','Gyakorlat a NORIKS ControlPro trénerrel'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Miért nem ugyanaz érezni az összehúzódást és valóban erősíteni a medencefeneket</h2>
      <p>Az orvos azt mondta, végezzen Kegel-gyakorlatokat. Így szorított. És érezte, hogy működik — azt a feszülést, azt az összehúzódást. Ezért folytatta. Heteken, talán hónapokon át.</p>
      <p>A szivárgás azonban nem szűnt meg.</p>
      <p>Az ok egyszerű: érezni az összehúzódást és valóban erőt építeni a medencefenékben nem ugyanaz. Ellenállás nélkül csak aktiválja az izmot — nem edzi. Üresbe szorít, és így még egyetlen izom sem lett erősebb.</p>
      <p>A ControlPro ezen változtat. Ad a medencefenekének valamit, aminek nekifeszülhet — valódi fizikai ellenállást, amely pontosan azokat az izmokat terheli, amelyek a hólyagot irányítják.</p>
    </div>
  </div>
</section>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('09-vjezba-2.webp','Szorítás ellenállással — napi 3 sorozat, 10 ismétlés'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Napi 3 sorozat, 10 szorítás. Ennyi.</h2>
      <p>Üljön le egy székre, és helyezze a ControlProt a térdei közé. Szorítsa ellenállással szemben — napi 3 sorozat, 10 ismétlés.</p>
      <p>Behelyezés nélkül, kábelek nélkül, alkalmazás nélkül. Úgy néz ki, mint egy edzőeszköz, mert az is. Használhatja a híradó alatt vagy az íróasztalnál — senkinek sem kell látnia.</p>
      <a class="cpr-cta" href="#bundle-selector">Szerezze vissza az irányítást még ma</a>
    </div>
  </div>
</section>

<section class="cpr-sec">
  <div class="cpr-wrap cpr-row2">
    <div class="cpr-media"><?php echo $cp_img('01-usporedba.png','Összehasonlítás: betétek, EMS készülékek, önmagában a Kegel-gyakorlatok és a NORIKS'); ?></div>
    <div class="cpr-copy">
      <h2 class="cpr-h2">Miért működik ez, amikor más nem segített</h2>
      <p>A betétek és védőeszközök csak a tünetet enyhítik — hónapról hónapra veszi őket, örökké, és semmi nem lesz erősebb.</p>
      <p>Az EMS készülékek (175–350 €) <em>ön helyett</em> húzzák össze az izmot, mintha valaki más végezné a fekvőtámaszait — az agy–izom kapcsolat sosem alakul ki, és sok készülék belső szondát igényel.</p>
      <p>A Kegel-gyakorlatok önmagukban jó ötletek, de ellenállás és visszajelzés nélkül a legtöbb férfi vakon edz, és néhány hét után feladja.</p>
      <p>A NORIKS ControlProt egyszer fizeti ki, a munkát önnek kell elvégeznie valódi ellenállással szemben, és ugyanazt a fokozatos terhelési elvet alkalmazza, amely minden más izmot erősít.</p>
      <p>A medencefeneke nem romlott el.</p>
      <p class="cpr-strong">Csak nincs eléggé edzve.</p>
    </div>
  </div>
</section>

<section class="cpr-sec cpr-revs">
  <div class="cpr-wrap">
    <h2 class="cpr-h2 cpr-center">Az önhöz hasonló férfiak már látják az eredményt</h2>
    <div class="cpr-rev-grid">
      <?php foreach ( array(
        array( 'Napi 4 betétről 0-ra', 'A prosztataműtét után több mint egy évig végeztem Kegel-gyakorlatokat eredmény nélkül. Szkeptikus voltam, de körülbelül öt hete használom, és napi négy betétről nullára jutottam.', 'Márk R.' ),
        array( 'Szkeptikus voltam', 'Két évig szivárgott, és a gyakorlatok semmit sem változtattak. A különbség azonnal érezhető, amint az izmok valódi ellenállást kapnak. Most már nem szivárog.', 'György P.' ),
        array( 'Egyszerű és jól megépített', 'Egyszerű, jól megépített eszköz. Szorítja és elengedi, idővel pedig sokkal nagyobb kontrollt kap. Kerülje az olcsó másolatokat — nincs bennük ugyanaz az ellenállás.', 'András T.' ),
      ) as $rv ) : ?>
        <article class="cpr-rev">
          <span class="cpr-quote" aria-hidden="true">&#10077;</span>
          <div class="cpr-stars" aria-label="5/5">★★★★★</div>
          <p class="cpr-rev-title"><?php echo esc_html( $rv[0] ); ?></p>
          <p class="cpr-rev-text">„<?php echo esc_html( $rv[1] ); ?>"</p>
          <p class="cpr-rev-name"><?php echo esc_html( $rv[2] ); ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<style>
  .cpr-sec { padding: 46px 0; }
  .cpr-wrap { max-width: 1180px; margin: 0 auto; padding: 0 18px; }
  .cpr-row2 { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; }
  .cpr-h2 { font-size: clamp(24px,3.1vw,34px); font-weight: 800; color: #141414; line-height: 1.2; margin: 0 0 16px; }
  .cpr-center { text-align: center; }
  .cpr-copy p { font-size: 15.5px; line-height: 1.65; color: #3a3a3a; margin: 0 0 14px; }
  .cpr-strong { font-weight: 700; color: #141414; }
  .cpr-media img { width: 100%; height: auto; display: block; border-radius: 6px; }

  .cpr-ph { width: 100%; aspect-ratio: 1/1; background: #ededed; border: 1px dashed #d3d3d3; border-radius: 6px;
            display: flex; align-items: center; justify-content: center; padding: 18px; box-sizing: border-box; }
  .cpr-ph span { font-size: 13px; line-height: 1.45; color: #9a9a9a; text-align: center; }

  .cpr-cta { display: inline-block; margin-top: 6px; background: #141414; color: #fff; font-weight: 700; font-size: 15px; padding: 13px 26px; border-radius: 8px; text-decoration: none; }
  .cpr-cta:hover { background: #E8450E; color: #fff; }

  /* 4) kartice recenzija */
  .cpr-rev-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 22px; margin-top: 26px; }
  .cpr-rev { position: relative; background: #f4f4f4; border-radius: 10px; padding: 22px 20px; text-align: center; }
  .cpr-quote { position: absolute; top: 14px; right: 16px; font-size: 20px; line-height: 1; color: #141414; }
  .cpr-stars { color: #f5b301; font-size: 16px; letter-spacing: 1px; }
  .cpr-rev-title { font-weight: 800; color: #141414; font-size: 15px; margin: 10px 0 10px; }
  .cpr-rev-text { font-size: 14px; line-height: 1.6; color: #4a4a4a; margin: 0 0 14px; }
  .cpr-rev-name { font-size: 13px; font-style: italic; color: #6b6b6b; margin: 0; }

  @media (max-width: 820px) {
    /* enakomeren razmik: med sekcijama isto kao med sliku i tekst (18px) */
    .cpr-sec { padding: 9px 0; }
    .cpr-sec:first-of-type { padding-top: 0; }
    .cpr-wrap { padding-left: 0; padding-right: 0; }
    .cpr-row2 { grid-template-columns: 1fr; gap: 18px; }
    .cpr-h2 { font-size: 1.9rem; margin-bottom: 12px; }
    .cpr-copy p { margin-bottom: 12px; }
    .cpr-cta { margin-top: 2px; }
    .cpr-rev-grid { grid-template-columns: 1fr; gap: 18px; margin-top: 18px; }
  }

  /* Nema "Tablica veličina" linka na ControlPro uređaju (ni plugin ni globalni). */
  .noriks-global-sizechart, .gck-size-link, .gck-size-link-wrap,
  #open-size-chart, #open-size-chartCustom { display: none !important; }

  /* Kratki opis: skupljeni razmaci — i kad su točke <li> i kad su odvojeni <p>.
     (Ovaj se predložak učitava samo na orto-controlpro stranicama.) */
  .woocommerce-product-details__short-description { margin-bottom: 10px !important; }
  .woocommerce-product-details__short-description ul { list-style: none; margin: 4px 0 8px; padding-left: 0; }
  .woocommerce-product-details__short-description ul li { list-style: none; padding-left: 0; margin: 0 0 4px; line-height: 1.4; }
  .woocommerce-product-details__short-description p { margin: 0 0 5px !important; line-height: 1.4; }
  /* viseći uvod: prijelom u drugi red poravnan s tekstom, ne s ✓ */
  .woocommerce-product-details__short-description ul li,
  .woocommerce-product-details__short-description p { padding-left: 1.6em; text-indent: -1.6em; }
  .woocommerce-product-details__short-description p:last-child { margin-bottom: 0 !important; }
  .woocommerce-product-details__short-description br { line-height: 0.9; }
  /* prazni odstavci/prijelomi u kratkom opisu ne smiju stvarati praznine */
  .woocommerce-product-details__short-description p:empty,
  .woocommerce-product-details__short-description br:first-child,
  .woocommerce-product-details__short-description br + br { display: none !important; }

  /* manji odmak između kratkog opisa i cijene te između cijene i scarcity bara */
  .single-product .summary .price,
  .single-product div.product p.price { margin-top: 4px !important; margin-bottom: 8px !important; }
  .single-product .gck-countdown { margin-top: 8px !important; }
  .single-product .summary > p:empty, .single-product .summary > br { display: none !important; }
</style>

<script>
(function(){
  /* Kratki opis iz admina cesto sadrzi prazne odstavke (<p>&nbsp;</p>) koji rade
     velike praznine iznad cijene — CSS ih ne moze uhvatiti, pa ih uklonimo. */
  function cprTrimDesc(){
    var box = document.querySelector('.woocommerce-product-details__short-description');
    if (!box) { return; }
    box.querySelectorAll('p, div').forEach(function(el){
      if (el.querySelector('img, ul, ol, svg')) { return; }
      var t = (el.textContent || '').replace(/\u00a0/g, ' ').trim();
      if (t === '') { el.remove(); }
    });
  }
  if (document.readyState === 'loading') { document.addEventListener('DOMContentLoaded', cprTrimDesc); } else { cprTrimDesc(); }

  document.querySelectorAll('a.cpr-cta[href="#bundle-selector"]').forEach(function(a){
    a.addEventListener('click', function(e){ e.preventDefault(); var t=document.getElementById('bundle-selector')||document.querySelector('.single_add_to_cart_button'); if(t) t.scrollIntoView({behavior:'smooth',block:'center'}); });
  });
})();
</script>
