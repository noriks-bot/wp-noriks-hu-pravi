<?php
/**
 * Text-only reviews + FAQ for the NORIKS back belt (ortopas) and bunion corrector.
 * Used by single-product-bottom-nicer.php (early return) on those two products only.
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$orto_is_bun = ( function_exists( 'noriks_is_type' ) && noriks_is_type( 'bunion' ) );

/* Review pool (Hungarian). */
$auto_reviews_en = array();
$orto_pool = get_stylesheet_directory() . '/auto_reviews/' . ( $orto_is_bun ? 'HU_bunion.php' : 'HU_ortopas.php' );
if ( file_exists( $orto_pool ) ) { include $orto_pool; }
$orto_reviews = ( isset( $auto_reviews_en ) && is_array( $auto_reviews_en ) ) ? $auto_reviews_en : array();

$orto_rev_title = $orto_is_bun
    ? 'Nem vagy egyedül a bütyökfájdalom elleni küzdelemben.'
    : 'Nem vagy egyedül a hátfájás elleni küzdelemben.';
$orto_rev_note = $orto_is_bun
    ? 'Emberek ezrei használják már a NORIKS bütyökkorrigálót a kisebb fájdalomért és a nagylábujj helyesebb tartásáért – otthon, tévénézés vagy alvás közben.'
    : 'Emberek ezrei viselik már a NORIKS ortopédiai hátövet a kisebb fájdalomért és stabilabb hátért – munka közben, teheremelésnél és hosszú ülés során.';

/* FAQ (Hungarian) — belt vs bunion. */
if ( $orto_is_bun ) {
    $orto_faq = array(
        array( 'q' => 'Milyen gyorsan érzem magam jobban?', 'a' => 'Körülbelül 30 perc alatt — ennyi idő kell a kellemetlenség enyhítéséhez. Két héten át tartó rendszeres használat mellett jelentős enyhülést tapasztal a mindennapi tevékenységek – járás, állás vagy alvás – során.' ),
        array( 'q' => 'Milyen gyorsan veszem észre a változást a bütyökön?', 'a' => 'A bütyök súlyosságától függően a legtöbb vásárló 4–8 hét után lát látható javulást. Kezdődő bütyök: 4 hét. Enyhe bütyök: 4 hét. Súlyos bütyök: 8 hét.' ),
        array( 'q' => 'Viselhető cipőben? Tudok járni benne?', 'a' => 'Nem, nem fér bele a cipőbe. Igen, tud járni benne. Ugyanakkor nyugalmi használatra tervezték – a kanapén pihenve, tévénézés, olvasás vagy alvás közben.' ),
        array( 'q' => 'Mi van, ha kényelmetlennek találom?', 'a' => 'Ez teljesen normális! A NORIKS korrektort elég erősre terveztük ahhoz, hogy helyreállítsa a nagylábujj ízületét, megállítsa a gyulladást és csökkentse a kellemetlenséget. Lehet, hogy 1–2 alkalom kell a megszokáshoz, de utána sokkal jobban fogja érezni magát!' ),
        array( 'q' => 'Meddig használjam?', 'a' => 'Javasoljuk, hogy napi 30 perccel kezdje, és fokozatosan növelje 1–3 órás alkalomig. Amikor már kényelmes, alvás közben is viselheti. Viselje pihenés közben – a kanapén, tévénézés, olvasás vagy alvás közben.' ),
        array( 'q' => 'Segít az én konkrét állapotomon?', 'a' => 'A NORIKS korrektor ideális a következőkhöz: a járást vagy állást érintő kellemetlenség enyhítése; a bütyök okozta kellemetlenség enyhítése pihenés vagy alvás közben; a korai stádiumú, esetleg súlyosbodó bütykök kezelése; műtét után visszatérő bütykök; súlyos, műtétre érett bütykök segítése; valamint hatékony, nem sebészeti megoldásként.' ),
        array( 'q' => 'Passzol a lábamra? Van jobb és bal oldal?', 'a' => 'A lábmérettől függetlenül – a legkisebb gyerekmérettől a nagy felnőtt lábméretig – a NORIKS korrektor kényelmesen illeszkedik. Nincsenek oldalak! Cserélhető kialakításának köszönhetően könnyedén alkalmazkodik a bal vagy jobb lábhoz.' ),
    );
} else {
    $orto_faq = array(
        array( 'q' => 'Milyen gyorsan érzek fájdalomcsillapodást?', 'a' => 'Sok felhasználó már közvetlenül a NORIKS öv felhelyezése után érezhető enyhülést tapasztal az isiász és a derékfájás terén. A célzott kompresszió azonnali támogatást nyújt, stabilizálja a gerincet és csökkenti az idegekre nehezedő nyomást. A tartós hatás érdekében javasoljuk, hogy az övet az utasításoknak megfelelően legalább két héten át következetesen viselje.' ),
        array( 'q' => 'Hogyan helyezzem fel helyesen az övet?', 'a' => 'A NORIKS övet a csípő köré, közvetlenül az övvonal alá kell viselni. A keresztcsonti terület fölött (a hát alsó része, közvetlenül a fenék fölött) és a csípőtaraj alatt helyezkedjen el. További információért tekintse meg a használati útmutatót.' ),
        array( 'q' => 'Gyengíti az öv az izmaimat?', 'a' => 'Nem, a NORIKS öv nem gyengíti az izmokat úgy, mint egy deréktámasz fűző. Csupán segít összetartani az SI-ízületeket és visszaállítja a szalagok normál feszességét. Hetekig vagy hónapokig viselheti izomsorvadástól való félelem nélkül.' ),
        array( 'q' => 'Viselhetem az övet alvás közben is?', 'a' => 'Igen, az övet éjszaka is viselheti. A viselés időtartama nincs korlátozva, és a hosszabb viselésnek nincs negatív hatása.' ),
        array( 'q' => 'Mennyire szorosan kell felhelyezni?', 'a' => 'Az övnek szorosan kell illeszkednie, de nem túl feszesen, hogy elkerülje a kellemetlenséget. Gond nélkül tudnia kell mozogni anélkül, hogy az öv bevágna vagy elcsúszna. A feszesség a rugalmas pántokkal könnyen állítható.' ),
        array( 'q' => 'Kinek ajánljuk?', 'a' => 'Mindenkinek, aki derékfájással, isiásszal, izomfeszüléssel, porckorongsérvvel, csípő- vagy medencefájdalommal, illetve SI-ízületi problémákkal küzd. Kortól, nemtől, magasságtól és testsúlytól függetlenül.' ),
        array( 'q' => 'Van pénzvisszafizetési garancia?', 'a' => 'Elégedettségi garanciát kínálunk! Ha nem elégedett a NORIKS övvel, vegye fel velünk a kapcsolatot az info@noriks.com címen a visszaküldés és visszatérítés érdekében 90 napon belül. A határidő az öv kézhezvételétől számít.' ),
    );
}
?>

<section class="orto-rv">
  <div class="orto-rv-wrap">
    <h2 class="orto-rv-title"><?php echo esc_html( $orto_rev_title ); ?></h2>
    <p class="orto-rv-note"><?php echo esc_html( $orto_rev_note ); ?></p>

    <?php if ( ! empty( $orto_reviews ) ) : ?>
    <div class="orto-rv-grid">
      <?php foreach ( array_slice( $orto_reviews, 0, 12 ) as $orto_r ) : ?>
        <div class="orto-rv-card">
          <div class="orto-rv-stars" aria-hidden="true">★★★★★</div>
          <p class="orto-rv-text"><?php echo esc_html( $orto_r['text'] ); ?></p>
          <div class="orto-rv-name"><?php echo esc_html( $orto_r['name'] ); ?></div>
        </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>

<section class="orto-faq">
  <div class="orto-faq-wrap">
    <h2 class="orto-faq-title">Gyakori kérdések</h2>
    <?php foreach ( $orto_faq as $orto_q ) : ?>
      <div class="orto-faq-item">
        <button class="orto-faq-q" type="button"><?php echo esc_html( $orto_q['q'] ); ?><span class="orto-faq-arrow">&#9660;</span></button>
        <div class="orto-faq-a"><p><?php echo wp_kses_post( $orto_q['a'] ); ?></p></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<style>
  .orto-rv { background:#f7f7f7; padding:44px 0; }
  .orto-rv-wrap, .orto-faq-wrap { max-width:1080px; margin:0 auto; padding:0 16px; }
  .orto-rv-title { text-align:center; font-size:clamp(22px,2.6vw,30px); font-weight:800; color:#1c1c1c; margin:0 0 8px; }
  .orto-rv-note { text-align:center; font-size:15px; color:#444; margin:0 auto 28px; max-width:760px; }
  .orto-rv-grid { display:grid; grid-template-columns:repeat(3,1fr); gap:18px; }
  .orto-rv-card { background:#fff; border-radius:12px; padding:20px 18px; box-shadow:0 2px 10px rgba(0,0,0,.05); }
  .orto-rv-stars { color:#f5b301; font-size:16px; letter-spacing:1px; margin-bottom:8px; }
  .orto-rv-text { font-size:14px; line-height:1.6; color:#333; margin:0 0 12px; }
  .orto-rv-name { font-size:13px; font-weight:700; font-style:italic; color:#333; }

  .orto-faq { background:#fff; padding:40px 0; }
  .orto-faq-title { text-align:center; font-size:clamp(22px,2.6vw,30px); font-weight:800; color:#1c1c1c; margin:0 0 22px; }
  .orto-faq-item { border-bottom:1px solid #eee; }
  .orto-faq-q { width:100%; text-align:left; background:none; border:0; padding:16px 4px; font-size:16px; font-weight:700; color:#1c1c1c; cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:12px; }
  .orto-faq-arrow { transition:transform .2s; flex:0 0 auto; font-size:12px; color:#888; }
  .orto-faq-a { max-height:0; overflow:hidden; transition:max-height .25s ease; }
  .orto-faq-a p { font-size:15px; line-height:1.65; color:#444; margin:0 4px 16px; }
  .orto-faq-item.open .orto-faq-arrow { transform:rotate(180deg); }

  @media (max-width:820px){
    .orto-rv-grid { grid-template-columns:1fr; gap:14px; }
  }
</style>

<script>
document.querySelectorAll('.orto-faq-q').forEach(function(btn){
  btn.addEventListener('click', function(){
    var item = btn.parentElement;
    var ans  = btn.nextElementSibling;
    var open = item.classList.contains('open');
    document.querySelectorAll('.orto-faq-item').forEach(function(i){ i.classList.remove('open'); i.querySelector('.orto-faq-a').style.maxHeight = null; });
    if (!open) { item.classList.add('open'); ans.style.maxHeight = ans.scrollHeight + 'px'; }
  });
});
</script>
