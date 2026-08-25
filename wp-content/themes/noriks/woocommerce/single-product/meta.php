<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     9.7.0
 */

use Automattic\WooCommerce\Enums\ProductType;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<style>

      .features2 {
    margin-top: 12px;
    margin-bottom: 12px;
      }

      .features__row {
        display: flex;
        justify-content: space-between;
        gap: 28px;
      }

      .feature {
        flex: 1 1 0;
        text-align: center;
      }

      .feature__icon {
 
        margin: 0 auto 0px;
        display: block;
        margin-bottom: 0 !important;
      }

      .feature__text {
        margin: 0;
        line-height: 1.1;
    font-size: 14px;
    margin: 0;
        font-family: 'Barlow', sans-serif;
      }

      /* Responsive: stack nicely on small screens */
      @media (max-width: 640px) {
        .features__row {
     
        }
      }
    </style>


 <section class=" features2" aria-label="Prednosti">
      <div class="features__row">
        <!-- 1) Truck -->
        
        
          <div class="feature">
          
  <img src="<?php echo get_template_directory_uri(); ?>/img/cod_icon_.png" alt="Customer Support Icon" class="feature__icon info-icon">
          <p class="feature__text">Utánvétes fizetés</p>
        </div>
        
        
        <div class="feature">
      <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon1-1.png" alt="Shirt Icon" class="feature__icon info-icon">
          <p class="feature__text">Próbáld ki 30 napig, kockázat nélkül</p>
        </div>
        
        

        <!-- 2) Smiley -->
        <div class="feature">
     
       
        <img src="https://noriks.com/hr/wp-content/uploads/2025/07/footer_icon3-1.png" alt="Shipping Icon" class="feature__icon info-icon">
          <p class="feature__text">Ingyenes szállítás 25.000 Ft feletti rendelésekre</p>
        </div>

    
    
      </div>
    </section>




<?php if ( noriks_is_type( 'ortopas' ) ) : ?>
<!-- Ortopas: kartica "preverjeno s strani zdravnika" (slika) -->
<div class="ortopas-doctor-card" style="margin:14px 0;">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/ortopas/ortopas-zdravnik.png' ); ?>"
       alt="Orvos által ellenőrizve — NORIKS ortopéd öv"
       style="width:100%; height:auto; display:block; border-radius:10px;"
       loading="lazy" decoding="async">
</div>
<?php endif; ?>

<!-- date and countdown section -->

<div class="shipping-box">
  <h2 id="shipping-window" class="shipping-title"></h2>
  <p class="shipping-sub">
    Rendeljen a következő <span id="midnight-countdown" class="countdown"></span>
  </p>
</div>

<style>
  .shipping-box { font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif; color:#222; margin-top: 13px;
    margin-bottom: 13px; 
      
    background: #f4f4f4;
    padding: 8px 6px 8px 12px;
    border-radius: 5px;
          text-align: center;
      
      
      
  }
  .shipping-title { font-family: 'Roboto', sans-serif;
    font-size: 14px !important;
    font-weight: 700 !important;
    line-height: 1.4 !important; margin-bottom: 0px;
    color: #222 !important; }
  .shipping-sub { font-size: 14px; margin: 0; }
  .countdown { color: #22a155; font-weight: 700; }
</style>

<script>
  (function () {
   const weekdays = ['Vasárnap','Hétfő','Kedd','Szerda','Csütörtök','Péntek','Szombat'];

    // Helper to add business days (skip Saturday/Sunday)
    function addBusinessDays(date, days) {
      let result = new Date(date);
      let added = 0;
      while (added < days) {
        result.setDate(result.getDate() + 1);
        const day = result.getDay();
        if (day !== 0 && day !== 6) { // skip Sunday(0) + Saturday(6)
          added++;
        }
      }
      return result;
    }

    // Get shipping days: today +2 business days, today +3 business days
    const today = new Date();
    const first  = addBusinessDays(today, 2);
    const second = addBusinessDays(today, 3);

    function formatDayMonth(d) {
      return `${d.getDate()}.${d.getMonth()+1}.`; // e.g. 21.8.
    }

    const windowEl = document.getElementById('shipping-window');
    windowEl.textContent = `Kiszállítás csütörtök ${weekdays[first.getDay()]}  ${formatDayMonth(first)} -től ${weekdays[second.getDay()]}, ${formatDayMonth(second)}`;

    // Countdown to midnight
    const cdEl = document.getElementById('midnight-countdown');

    function nextMidnight(now) {
      const n = new Date(now);
      n.setHours(24, 0, 0, 0);
      return n;
    }

    function updateCountdown() {
      const now = new Date();
      const end = nextMidnight(now);
      let diff = Math.max(0, end - now);

      const h = Math.floor(diff / 3_600_000); diff -= h * 3_600_000;
      const m = Math.floor(diff / 60_000);    diff -= m * 60_000;
      const s = Math.floor(diff / 1000);

      cdEl.textContent = `${h}h ${m}min ${s}s`;
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
  })();
</script>


<!-- date and countdown section -->





<?php 

$is_singles_boxers = has_term( 'boxerek', 'product_cat', $current_product_id );

$is_boxers = has_term( array( 'boxerek','orto-boxeralsok', 'bokserice-sastavi-paket', 'bokserice', 'mpoxerakia', 'boxers', 'boxerakia' ), 'product_cat', $current_product_id ) && ! has_term( array( 'black-friday', 'majice-i-bokserice-paketi' ), 'product_cat', $current_product_id );

$is_carape = has_term( array( 'zoknik', 'zimske-carape', 'kaltses', 'socks' ), 'product_cat', $current_product_id );

$is_mixed_bundle = has_term( array( 'szettek', 'orto-kezdocsomag', 'orto-starter', 'orto-majica-bokserica', 'set', 'seta', 'bundles', 'paketo-ekkinisis' ), 'product_cat', $current_product_id );

?>



<?php if( !$is_boxers && !$is_carape ): ?>


<!-- my thre icons content -->


<div class="features">
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img1","option"); ?>" alt="Perfect Fit">
      <p><?php echo get_field("singlepp_icon_t1","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img2","option"); ?>" alt="Hides Dad Bod">
      <p><?php echo get_field("singlepp_icon_t2","option"); ?></p>
    </div>
    <div class="feature-card">
      <img src="<?php echo get_field("singlepp_icon_img3","option"); ?>" alt="Breathes">
       <p><?php echo get_field("singlepp_icon_t3","option"); ?></p>
    </div>
  </div>


<style>


    .features {
      display: flex;
    justify-content: space-between;
    gap: 16px;
    margin-top: 15px;
    margin-bottom: 15px;
    }

    .feature-card {
    display: flex
;
    flex-direction: column;
    align-items: center;
    flex: 1;
    gap: 8px;
    border-radius: 5px;
    background: #F4F4F4;
    padding: 16px;
    font-size: 14px;
    font-weight: 400;
    color: #111213;
    line-height: 1.2;
    text-align: center;
    }

    .feature-card img {
      width: 32px;
      height: 32px;
      margin-bottom: 0px;
    }

    .feature-card p {
      margin: 0;
      font-weight: 500;
      font-size: 14px;
      color: #222;
       letter-spacing: -0.5px !important;
    }
  </style>
  
 <?php endif; ?>


<!--
<div style="margin-bottom: 15px;" class="woocommerce-product-details__short-description">
    
    
	<?php echo apply_filters( 'the_content', $product->get_description() );  ?>
	
	
</div>
-->



 <!-- icons -->
 
 <!--
 <div class="info-section">

    <div class="info-box">
     
     
     
      

     <img src="<?php echo get_field("singlepp_bottomicons_img1","options"); ?>" alt="" width="25" height="25">
     <?php echo get_field("singlepp_bottomicons_t1","options"); ?>

    
     
     
    </div>
    
    
    
     <div class="info-box">
    
         <a href="tel:+38517776471" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none; ">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M3.654 1.328a.678.678 0 0 1 .737-.07l2.547 1.272a.678.678 0 0 1 .291.901L6.29 5.72a.678.678 0 0 0 .145.776l2.457 2.457a.678.678 0 0 0 .776.145l2.29-1.24a.678.678 0 0 1 .901.291l1.272 2.547a.678.678 0 0 1-.07.737l-1.175 1.769c-.46.692-1.232 1.043-2.036.964-2.322-.238-4.96-2.223-6.856-4.12C1.77 7.667-.214 5.03.024 2.707c.079-.804.272-1.577.964-2.036L3.654 1.33z"/>
  </svg>
  01 777 64 71
</a>

<a href="mailto:info@noriks.com" style="
    color: #7b8a9b;
    font-weight: 500;
    font-size: 14px;
    font-family: 'Roboto', sans-serif; display: flex; align-items: center; text-decoration: none;">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right: 6px;    width: 17px;
    height: 17px;" viewBox="0 0 16 16">
    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
  </svg>
  info@noriks.com
</a>
         
   
     </div>
     

    <div class="info-grid">
      
      
      
      
      <div class="info-box">
       <img src="<?php echo get_field("singlepp_bottomicons_img2","options"); ?>" alt=""  width="25" height="25">
        <?php echo get_field("singlepp_bottomicons_t2","options"); ?>
      </div>
      <div class="info-box">
  
<img src="<?php echo get_field("singlepp_bottomicons_img3","options"); ?>" alt=""  width="25" height="25">
<?php echo get_field("singlepp_bottomicons_t3","options"); ?>
      </div>
    </div>

  </div>
  -->
  
  <style>


    .info-section {
      display: flex;
      flex-direction: column;
      gap: 7px;
      max-width: 800px;
      margin: auto;
      margin-bottom: 25px;
    }
    
    .info-section img {
      width: 25px;
    }


    .info-box {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      background-color: #f5f6f8;
      border-radius: 3px;
      padding: 16px;
      color: #7b8a9b;
      font-weight: 500;
      font-size: 14px;
          font-family: 'Roboto', sans-serif; 
      text-align: center;
    }

    .info-grid {
      display: flex;
      gap: 7px;
    }

    .info-grid .info-box {
      flex: 1;
    }

    .info-box svg {
      width: 24px;
      height: 24px;
      fill: #7b8a9b;
    }
  </style>









 <!-- icons -->


 <div class="accordion">


    <!-- KidsNest: prva dva accordion mjesta (dugi sadrzaj iz summary-ja) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'kidsnest', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Gyermeke arca éppen most formálódik — és 9 éves koráig van rá ideje</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>A légúti kutatók és a gyermek-fogszakorvosok évek óta ugyanarra a mintázatra figyelmeztetnek — a legtöbb szülő mégsem hallott róla soha. Úgy hívják: <strong>hosszúarc-szindróma</strong> (adenoid arc).</p>
        <p>Minden éjjel, amikor a gyermek nyitott szájjal alszik egy rossz párnán, négy dolog történik egyszerre: a nyelv hátraesik, az állkapocs hátrahúzódik, a szájpadlás magas ívbe szűkül, és az arc vízszintes helyett függőleges irányban kezd nőni. A 3. és 9. életév között eltelt több ezer ilyen éjszaka után a változások rögzülnek.</p>
        <p>Ezért jelennek meg ma a 9 évesek a fogszabályzó orvosnál hátrahúzódott állal, karikás szemekkel, torlódott fogakkal — és egy drága fogszabályzó-számlával. Az, ahogyan a gyermek 3 és 9 éves kora között lélegzik, erősen befolyásolja az arcot, amelyet egész életében viselni fog.</p>
        <p>A NORIKS <strong>KidsNest</strong> úgy készült, hogy a kiváltó okra hasson — a fej és az állkapocs rossz helyzetére a 9 órányi alvás alatt — a <strong>3 zónás ergonomikus szerkezettel</strong>, amely a fejet, a nyakat és az állkapcsot már az első éjszakától megfelelő vonalban tartja.</p>
        <p><strong>Amit a gyermekénél látni fog:</strong></p>
        <ul style="margin:6px 0 12px;padding-left:18px;">
          <li style="margin:0 0 7px;"><strong>Kevesebb szájon át légzés:</strong> éjszaka csukott ajkak, visszatérő orron át légzés, vége a reggeli szájszárazságnak.</li>
          <li style="margin:0 0 7px;"><strong>Csendesebb éjszakák:</strong> a horkolás a legtöbb gyermeknél 1–2 héten belül elcsendesedik.</li>
          <li style="margin:0 0 7px;"><strong>A fejlődő állkapocs támogatása:</strong> megfelelő testhelyzet éjszakáról éjszakára, azokban az években, amikor ez a legfontosabb.</li>
          <li style="margin:0 0 7px;"><strong>Okos megelőzés:</strong> egy párna ma — a drága korrekciók helyett holnap.</li>
        </ul>
        <p><strong>Egy párna ma este. Vagy ezrek később.</strong></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Elmúlt 9 éves? Az időablak szűkül. A károsodás nem áll meg.</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <p>A tanács, amit hallott, csak félig igaz. Igen, a felső szájpadlás 9 éves kor körül megszilárdul. De az arc 20 éves korig fejlődik, az alsó állkapocs 17 éves korig nő, a légutak pedig folyamatosan alkalmazkodnak.</p>
        <p>Ezért a 9. életév utáni minden szájon át lélegzett éjszaka új károsodást rak a régire: fogcsikorgatás, fejfájás, nem pihentető alvás, romló koncentráció — és a fáradtság, amit mindenki lustaságnak néz. A tinédzsere nem lusta. Alig kap levegőt hat órán át minden éjjel.</p>
        <p>A KidsNest <strong>9–14 éves</strong> mérete idősebb fejre, nyakra és vállra készült. Más kontúr, más magasság, más alátámasztás. Ugyanaz az alapmechanizmus: a fej, a nyak és az állkapocs megfelelő vonalban tartása, egész éjjel, egy még növekedésben lévő testen.</p>
        <p>Amit a szülők észrevesznek: a horkolás 7–14 éjszaka alatt elcsendesedik, visszatér az igazi reggeli energia, a fejfájások halványulnak, a fókusz visszatér.</p>
        <p>A legjobb időablak továbbra is a 3. és 9. életév közötti. Az erős időablak a 8. és 18. közötti. Egyik sincs teljesen bezárva — de minden várakozással töltött éjszaka újabb terhet rak a testre, amely megpróbál regenerálódni.</p>
        <p><strong>A tegnap elmúlt. A ma este még az Öné.</strong></p>
      </div>
    </div>
    <?php endif; ?>


    <!-- ErgoSit ortopedski jastuk: prva dva accordion mjesta (kopija originala, HU) -->
    <?php if ( function_exists('noriks_is_type') && noriks_is_type( 'ortopedski-jastuk', $current_product_id ) ) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Termékspecifikációk</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 8px;"><strong>Külső huzat:</strong> Lélegző kötött anyag, levehető és mosógépben mosható, hipoallergén</li>
          <li style="margin:0 0 8px;"><strong>Mag:</strong> OrthoFlex™ adaptív hab | Nem mérgező, OEKO-TEX® tanúsítvánnyal | Nyomáscsökkentésre + a testtartás igazítására tervezve</li>
        </ul>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Mitől ennyire különleges?</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <ul style="margin:8px 0 12px; padding-left:18px;">
          <li style="margin:0 0 10px;"><strong>OrthoFlex™ memóriahab:</strong> Nagy sűrűségű hab, amely csökkenti a nyomást és ellaposodás nélkül alkalmazkodik — támasztja a farokcsontot, a csípőt és a gerincet az egész napos kényelemért.</li>
          <li style="margin:0 0 10px;"><strong>BreatheEase™ huzat:</strong> Puha, lélegző és bőrbarát. Levehető és mosógépben mosható, hogy a párna mindig friss maradjon.</li>
          <li style="margin:0 0 10px;"><strong>Kiegyensúlyozott alátámasztás:</strong> Nem túl puha, nem túl kemény. Úgy tervezték, hogy igazítsa a testtartást és enyhítse a hosszú órákig tartó ülés okozta fájó pontokat.</li>
        </ul>
      </div>
    </div>
    <?php endif; ?>


    <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('ortopas', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) ) ) : // hide details accordion on back belt + fisiorest + norikshers + ortopedski jastuk (bunion shows its own text) ?>
    <!-- 1 - detajli -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_1","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
          
         <?php if( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $current_product_id) ): ?>

                A NORIKS KidsNest hipoallergén, OEKO-TEX® tanúsítvánnyal rendelkező memóriahabból készült — formaldehid, nehézfémek és BPA nélkül — lélegző, mosható huzattal, amely egyszerűen levehető.<br><br>A 3 zónás ergonomikus szerkezet gyengéden befogadja a fejet, alátámasztja a nyakat, és segít a gerincet természetes vonalban tartani — még akkor is, ha a gyermek éjszaka sokat forgolódik. Így elősegíti az orron át történő légzést és a nyugodtabb, mélyebb alvást.<br><br>Három méretben kapható (1–3, 3–9 és 9–14 éves korig), együtt nő a gyermekével, és a fejlődés minden szakaszában megfelelő magasságú alátámasztást nyújt.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) ): ?>

                A NORIKS KneeFix rugalmas térdrögzítő, amely négy funkciót egyesít egyetlen támasztórendszerben: pontos tárcsával állítható kompressziót, kettős oldalsó stabilizátorokat, a térdkalácsot tehermentesítő zselépárnát és szilikonos csúszásgátló szegélyt, amely a helyén tartja a rögzítőt.<br><br>A merev ortézisekkel ellentétben a KneeFix nem merevíti ki a térdet — természetes mozgás közben támasztja meg. A kompressziót másodpercek alatt beállítod: reggel szorosabbra, délután lazábbra, attól függően, mennyit vagy talpon. Így a térd stabilitást kap felálláskor, lépcsőn, sétánál és hosszabb állásnál is.<br><br>Az anyag könnyű, szellőző és elvezeti a nedvességet, ezért a rögzítő órákon át hordható izzadás és bevágás nélkül. Vékony és diszkrét — a nadrág alatt szinte észre sem venni.<br><br>S-től 2XL-ig kapható testsúly szerint, bal és jobb térdre készült változatban, így a passzolás pontos marad.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type('bunion', $current_product_id) ): ?>

                A NORIKS bütyökkorrigáló szabadalmaztatott csuklós mechanizmust használ, amely finoman visszahelyezi a nagylábujjat a természetes helyzetébe, és célzott, állítható kompressziót fejt ki. Ezzel tehermentesíti a fájdalmas kidudorodást, csökkenti a gyulladást és enyhíti a kellemetlenséget járás, állás és pihenés közben.<br><br>A puha belső bélés védi a bőrt és hosszabb viselés esetén is kényelmet biztosít, a nyújtás erőssége pedig a rugalmas pántokkal egyszerűen állítható.<br><br>Nem invazív és sokoldalú — nincsenek oldalak, egyaránt illeszkedik a bal és a jobb lábra, valamint minden lábmérethez, a gyerekmérettől a legnagyobb felnőtt méretig. Napi 30 perctől néhány óráig terjedő használat elegendő a fokozatos, természetes korrekcióhoz.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $current_product_id) ): ?>

                A NORIKS inkontinencia-boxeralsó puha, antibakteriális bambuszrostból készült, víztaszító külső réteggel. Középpontjában a 7 rétegű PureDry™ mag áll, amely azonnal felszív és bezár akár 300 ml folyadékot, így a bőr száraz marad, a szivárgás pedig belül marad.<br><br>A szabás vékony és diszkrét — úgy néz ki és olyan érzés, mint a normál fehérnemű, terjedelem és „pelenkaérzés” nélkül. A láb menti védelem megakadályozza az oldalirányú szivárgást, a szagkontroll pedig egész nap frissességet biztosít.<br><br>Mosható és újrahasználható — több száz mosáson keresztül megőrzi nedvszívó képességét, környezetbarát és költséghatékony alternatívaként az eldobható betétekkel és pelenkákkal szemben.

         <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $current_product_id) ): ?>

                A NORIKS FIT fejlett ionos kompressziós anyagból készült, amely testhezálló, támogató szabást biztosít. A célzott kompresszió egyenletesen feszesíti a hasat és a derekat, kisimítja a sziluettet és támogatja az egyenes testtartást — a légzést vagy a mozgást korlátozó szorítás nélkül.<br><br>A mikroszövésű szálak serkentik a vérkeringést, és segítenek, hogy napközben egyenesebben álljon és magabiztosabbnak érezze magát. Az anyag könnyű, lélegző és nedvességelvezető, így száraz és kényelmes marad.<br><br>A vékony és diszkrét szabás bármilyen ing alatt láthatatlanná teszi, ugyanakkor sportpólóként is használható. Az eredmény: élesebb megjelenés, jobb testtartás és önbizalom — amint felveszi.

         <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle && ! ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ) ): ?>



        <?php echo get_field("singlepp_acc_t_1","options"); ?>
        
        
        <?php elseif(  has_term( array( 'orto-boxeralsok', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>
        
        
        
            Prémium pólóink 60% gyűrűs fonású pamut és 40% poliészter prémium keverékéből készülnek, ami rendkívül puha, gyűrődésmentes anyagot biztosít.


A NORIKS boxeralsók 95% modál és 5% elasztán prémium keverékéből készülnek, ami rendkívül puha és rugalmas anyagot biztosít, amely tökéletesen alkalmazkodik a testhez. A rugalmas szalag optimális illeszkedést biztosít, kényelmet biztosít szorítás nélkül, és tökéletes megjelenést biztosít ruha alatt.


<br>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type( 'kompresijske-nogavice', $current_product_id ) ): ?>

                15–20 Hgmm fokozatos kompresszióval a NORIKS kompressziós zoknik segítenek javítani a vérkeringést, csökkenteni a duzzanatot és enyhíteni a fáradt vagy nehéz lábak feszülését. Az oldalsó cipzár könnyűvé teszi a fel- és levételt – ideális a csökkent mozgásképességű vagy ízületi gyulladásban szenvedő személyeknek. A puha belső bélés védi a bőrt a cipzártól, és irritáció nélküli kényelmet biztosít.

        <?php else: ?>
        
        
        
            <?php echo get_field("__overwrite_sekcije_bellow_1"); ?>
            
            
        <?php endif; ?>
        
        
        
      </div>
    </div>
    
    
    
     
     <?php endif; // /hide details accordion on back belt ?>

     <?php if ( ! ( function_exists('noriks_is_type') && ( noriks_is_type('ortopas', $current_product_id) || noriks_is_type('bunion', $current_product_id) || noriks_is_type('fisiorest', $current_product_id) || noriks_is_type('norikshers', $current_product_id) || noriks_is_type('ortopedski-jastuk', $current_product_id) ) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : // hide size/wash accordions on belt + bunion + fisiorest + norikshers + ortopedski jastuk ?>
     <!-- 2 - slika tablica velicina -->
     <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3>Mérettáblázat</h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">

           <?php if( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $current_product_id) ): ?>

          <div class="kn-size">
            <img src="<?php echo get_template_directory_uri(); ?>/img/kidsnest/tablica-velicine-hu.webp" alt="KidsNest méretek életkor szerint" style="width:100%;height:auto;border-radius:10px;display:block;margin:0 0 12px;" loading="lazy">
            <p style="margin:0;line-height:1.6;"><strong>A gyermek két méret között van?</strong> Mindig a nagyobbat válassza. A párnát úgy tervezték, hogy a gyermek növekedése közben is támogassa az egészséges testhelyzetet — a nagyobb méret több helyet ad és hosszabb használati időt biztosít.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $current_product_id) ): ?>

          <div class="lbx-size">
            <p style="margin:0 0 6px;font-weight:700;">Hogyan mérje meg a csípőjét</p>
            <p style="margin:0 0 14px;line-height:1.6;">Tekerje a mérőszalagot a csípő legszélesebb pontja köré (a fenéken át), megfeszítés nélkül. Álljon lazán és egyenesen, majd jegyezze fel a méretet centiméterben.</p>
            <table style="width:100%;border-collapse:collapse;font-size:14px;">
              <thead>
                <tr style="background:#12233b;color:#fff;">
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Méret</th>
                  <th style="padding:8px 10px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Csípő (cm)</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lbx_sizes = array(
                  array('S','76 cm-ig','30"-ig'),
                  array('M','77 – 85 cm','30 – 33"'),
                  array('L','86 – 94 cm','34 – 37"'),
                  array('XL','95 – 102 cm','37 – 40"'),
                  array('2XL','103 – 114 cm','41 – 45"'),
                  array('3XL','115 – 121 cm','45 – 48"'),
                  array('4XL','122 – 129 cm','48 – 51"'),
                  array('5XL','130 – 137 cm','51 – 54"'),
                  array('6XL','138 – 145 cm','54 – 57"'),
                  array('7XL','146 – 153 cm','57 – 60"'),
                  array('8XL','154 cm és felette','61" és felette'),
                );
                foreach ( $lbx_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f7fafb' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eee;">
                    <td style="padding:8px 10px;font-weight:700;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:8px 10px;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:14px 0 0;line-height:1.6;"><strong>Két méret között van?</strong> Az optimális kényelem és a maximális nedvszívás érdekében mindig a nagyobb méretet ajánljuk.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $current_product_id) ): ?>

          <div class="kmf-size">
            <table style="width:100%;border-collapse:collapse;font-size:15px;">
              <thead>
                <tr style="background:#111;color:#fff;">
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Méret</th>
                  <th style="padding:9px 12px;text-align:left;background:#e9e9e9 !important;color:#111 !important;">Megfelelő testsúly</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $kmf_sizes = array(
                  array('S','50 – 70 kg'), array('M','70 – 90 kg'), array('L','90 – 110 kg'), array('XL','110 – 130 kg'),
                  array('2XL','130 – 150 kg'), array('3XL','150 – 170 kg'), array('4XL','170 – 190 kg'), array('5XL','190 – 210 kg'),
                );
                foreach ( $kmf_sizes as $i => $r ) :
                  $bg = ( $i % 2 ) ? '#f4f4f4' : '#fff'; ?>
                  <tr style="background:<?php echo $bg; ?>;border-bottom:1px solid #eaeaea;">
                    <td style="padding:9px 12px;font-weight:800;"><?php echo esc_html($r[0]); ?></td>
                    <td style="padding:9px 12px;font-weight:700;"><?php echo esc_html($r[1]); ?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <p style="margin:12px 0 0;line-height:1.6;">Válassza ki a méretét a testsúlya alapján. Két méret között van? Erősebb kompresszióhoz a kisebb méretet válassza.</p>
          </div>

        <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ): ?>

          <div style="line-height:1.9;">
            <strong>S/M</strong> : cipőméret 36–40 / vádli körfogat : 23–36 cm<br>
            <strong>L/XL</strong> : cipőméret 40–44 / vádli körfogat : 36–45 cm<br>
            <strong>2XL</strong> : cipőméret 44–48 / vádli körfogat : 45–56 cm<br><br>
            Kérjük, mérje meg a vádli körfogatát a legszélesebb ponton, hogy megtalálja a méretét.<br><br>
            Javasoljuk, hogy a méretet a vádli körfogata alapján válassza, ne a szokásos cipőméret alapján.
          </div>

        <?php elseif( $is_boxers ): ?>


          <img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/hu/wp-content/uploads/2026/02/boxers_size_hu.png">
          
          
          
        
        <?php elseif(  $is_carape ): ?>
        
        
                  <img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/hu/wp-content/uploads/2026/02/Nogavice_tabela_velikosti_hu.png">
                  
    <?php elseif(  $is_mixed_bundle ): ?>
    
     <img class="js-open-size-chart" style="cursor:pointer;" src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">
        
         <img class="js-open-size-chart" style="cursor:pointer;" src="https://noriks.com/hu/wp-content/uploads/2026/02/boxers_size_hu.png">
          
          <?php else: ?>
      
      
     <img class="js-open-size-chart" style="cursor:pointer;" src="<?php echo get_template_directory_uri(); ?>/img/tabela-velikosti-majice.jpg">
        
        
            
        <?php endif; ?>
      </div>
    </div>


    <!-- 3 - savjeti za pranje--> <!-- skriveno na kidsnest -->
    <?php if ( ! ( function_exists('noriks_is_type') && noriks_is_type('kidsnest', $current_product_id) )  && ! ( function_exists('noriks_is_type') && noriks_is_type('kneefix', $current_product_id) )) : ?>
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_2","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
             <?php if( function_exists('noriks_is_type') && noriks_is_type('leakboxers', $current_product_id) ): ?>

                Mossa 30–40 °C-on, kímélő programon. Öblítő és fehérítő nélkül. Levegőn szárítsa. Több száz mosáson keresztül megőrzik nedvszívó képességüket.

             <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-majice', $current_product_id) ): ?>

                Gépi mosás hideg, kímélő programon. Fehérítő és öblítő nélkül. Ne szárítsa szárítógépben — levegőn szárítsa, hogy megőrizze a kompressziót és a formát.

             <?php elseif( !$is_boxers &&  !$is_carape &&   !$is_mixed_bundle && ! ( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ) ): ?>
        <?php echo get_field("singlepp_acc_t_2","options"); ?>
        
         
        <?php elseif(  has_term( array( 'orto-starter', 'orto-majica-bokserica' ), 'product_cat', $current_product_id )  ): ?>
        
        
        
                       Színes ruhákhoz. Kímélő mosási program hideg vízben. Szárítsa kiterítve vagy alacsony hőmérsékleten. Ne szárítsa.     
        
        
          <?php elseif( function_exists('noriks_is_type') && noriks_is_type('kompresijske-nogavice', $current_product_id) ): ?>

                Kézi mosás hideg vízben vagy gépi mosás kímélő programon. Ne használjon fehérítőt.<br><br>Kizárólag levegőn szárítsa – ne használjon szárítógépet, hogy megőrizze a rugalmasságot és a kompresszió hatékonyságát.

          <?php else: ?>
            <?php echo get_field("__overwrite_sekcije_bellow_3"); ?>
        <?php endif; ?>
      </div>
    </div>
    <?php endif; // /hide wash accordion on kidsnest ?>



    <?php endif; // /hide details/size/wash accordions on back belt + bunion ?>

    <!-- 4 povrati in menjave -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_3","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
    <div class="accordion-content">
  <p></p>
  
  
Úgy gondoljuk, annyira szeretni fogja a NORIKS-ot, hogy <b data-stringify-type="bold">30 nap</b> áll rendelkezésére, hogy visszaküldje vagy kicserélje.
Nincs papírmunka, nincs stressz – néhány kattintással megoldjuk.
  
  
  </p>

  <p>
    <a href="mailto:info@noriks.com" style="display: flex; align-items: center; text-decoration: none; color: #333;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#333" style="margin-right: 6px;" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v.217L8 8.083 0 4.217V4zm0 1.383v6.234l5.803-3.122L0 5.383zM6.761 8.83 0 12.383V12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-.383l-6.761-3.553L8 9.917l-1.239-.653zM16 5.383l-5.803 3.112L16 11.617V5.383z"/>
      </svg>
      info@noriks.com
    </a>
  </p>

  <p>
   Egyszerűen küldjön nekünk e-mailt, hogy cserét szeretne, és <b data-stringify-type="bold">azonnal megszervezzük.</b>
  </p>
</div>

    </div>



    <!-- 5 - infomraicje o dostavi -->
    <div class="accordion-item">
      <div class="accordion-header" onclick="toggleAccordion(this)">
        <h3><?php echo get_field("singlepp_acc_h_4","options"); ?></h3>
        <div class="toggle">+</div>
      </div>
      <div class="accordion-content">
        <?php echo get_field("singlepp_acc_t_4","options"); ?>
      </div>
    </div>
    
    
    <!-- konec 5 acrodinov -->

  </div>

  <script>
    function toggleAccordion(header) {
      const item = header.parentElement;
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.accordion-item').forEach(el => el.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    }
  </script>
  
  
  <style>
      
       .accordion {
      border-top: 1px solid #ddd;
    }

    .accordion-item {
      border-bottom: 1px solid #ddd;
    }

    .accordion-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 16px 5px 5px 0px;
      cursor: pointer;
    }

    .accordion-header h3 {
      display: flex;
      align-items: center;
      font-weight: 500;
      font-size: 16px;
      margin: 0;
      gap: 2px;
      font-family: 'Roboto', sans-serif;  
    }

    .accordion-content {
      padding: 0 0 0 0;
      display: none;
      font-size: 14px;
      font-family: 'Roboto', sans-serif;  
      line-height: 1.6;
      color: black;
    }

    .accordion-item.open .accordion-content {
      display: block;
    }

    .icon {
      width: 24px;
      height: 24px;
      display: inline-block;
      background-size: contain;
      background-repeat: no-repeat;

    }
    
    .icon-details {
   
      margin: 0 0px 0 10px !important;
    }
    
    .icon-size {
   
      margin: 0 0px 0 10px !important;
    }

    /* Placeholder icons using emojis 
    
    .icon.details::before { content: "📝"; }
     .icon.size::before { content: "👕"; }
    .icon.laundry::before { content: "🧺"; }
    .icon.returns::before { content: "↩️"; }
    .icon.shipping::before { content: "📦"; }
*/
    .toggle {
      font-size: 24px;
      transition: transform 0.3s ease;
    }

    .accordion-item.open .toggle {
      transform: rotate(45deg);
    }
  </style>








<div class="product_meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( ProductType::VARIABLE ) ) ) : ?>

		<span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

	<?php endif; ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
