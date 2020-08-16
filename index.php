<?php require_once "functions.php";?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="https://vjs.zencdn.net/7.8.2/video-js.css" rel="stylesheet" />
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    <!-- Forest -->
    <link
      href="https://unpkg.com/@videojs/themes@1/dist/forest/index.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <!-- AddEvent script -->
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

      <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <!-- onscroll animation library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- usefull utility classes -->
    <link rel="stylesheet" href="dist/css/util.css">

  <?php showpixles()?>
      <!-- our own css -->
    <link rel="stylesheet" href="dist/css/styles.css" />
    <title>Bio hair</title>
  </head>
  <body>

<header class="hero-header">
  <h2 class="hero-header__number">
    <span>تواصل معنا على الرقم</span>
    <span>| 0708709704 </span>
  </h2>
  <div class="hero-header__title">
    <h1 class="hero-header__title-main">
      <span class="hero-header__title-main--first">مع ماسك الشعر</span>
      <span class="hero-header__title-main--second">المعجزة</span>
    </h1>
    <p class="hero-header__title-sub">نعم شعرك وعزز ثقتك بنفسك</p>
    <a class="btn btn--gold" href="#buy-form">بادر بالطلب الآن!</a>
  </div>
</header>

<section class="form-section">
  <img src="dist/images/productx1200.png" class="product-img" alt="product image" srcset="" />
  <form action="#" class="form display-none">
    <div class="u-mb-2">
      <h2 class="form__heading">
        أدخل معلوماتك
      </h2>
    </div>

    <div class="form__group">
      <select id="offer-select" class="form__input">
        <option value="1" selected>أريد عبوة واحدة (449 درهم)</option>
        <option value="2">أريد 2 عبوات (649 درهم)</option>
        <option value="3">أريد 3 عبوات (849 درهم)</option>
      </select>
      <div id="chevrons">
        <i class="fas fa-chevron-up"></i>
        <i class="fas fa-chevron-down"></i>
      </div>
    </div>
    <div class="form__group">
      <input type="text" class="form__input" placeholder="الاسم الكامل" id="name" required />
      <label for="name" class="form__label">الاسم الكامل</label>
    </div>
    <div class="form__group">
      <input type="text" class="form__input" placeholder="المدينة" id="city" required />
      <label for="city" class="form__label">المدينة</label>
    </div>
    <div class="form__group">
      <input type="phone" class="form__input" placeholder="رقم الهاتف" id="phone" required />
      <label for="phone" class="form__label">رقم الهاتف</label>
    </div>
    <div class="form__group">
      <input type="phone" class="form__input" placeholder="تأكيد رقم الهاتف" id="phnoetrue" required />
      <label for="phnoetrue" class="form__label">تأكيد رقم الهاتف</label>
    </div>

    <div class="form__group">
      <a class="btn btn--gold" href="#buy-form">أطلب الآن</a>
    </div>
  </form>
</section>

<section class="encouragement">
  <div class="encouragement__container">
    <h1 class="heading-primary">احصل على شعر تحسد عليه في 5 ثواني</h1>
    <p class="description-text">
      نعرف أنه ليس من السهل عليك العناية بشعرك كل يوم، فذلك يأخد قسطا كبيرا من
      وقتك و هناك حلول كثيرة لتليين و تقوية الشعر و لكنه من الصعب أن تعرف ما هو
      أسهل و أفضل حل للحصول على الشعر الذي تحلم به. ماذا إن عرفت أننا قمنا ببحث
      شامل في حلول و منتجات تليين الشعر و قمنا بتحديد الحل الأكثر فعالية و الأقل
      خطورة على الشعر و الذي يبقى لأطول مدة ممكنة؟
    </p>
    <a class="btn btn--gold" href="#buy-form">بادر بالطلب الآن!</a>
  </div>
</section>

<section class="exclusive">
  <div class="exclusive__text">
    <h2 class="exclusive__title">
      <span class="exclusive__title--sub">حصريا في موقعنا</span>
      <span class="exclusive__title--main"> 50% تخفيض حصري </span>
    </h2>
    <p class="exclusive__text-description">
      إن كان هدفك هو تغذية و تقوية و تليين شعرك بدون أن تفكر و تجرب جميع
      المنتجات و الحلول الٱخرى التى تحتوي على مواد كيمواية قد تسبب تساقط الشعر
      مستقبلا و أثمنتها باهضة في كل استعمال! فنعم، يمكن للماسك المعجزة أن
      يساعدك، فهو حل طبيعي %100، لا يشكل خطورة على الشعر و يبقى تأثيره لمدة أطول
      ويمكن استعماله كثير من المرات
    </p>
  </div>
  <img src="dist/images/arrow.png" class="exclusive__arrow-icon" alt="arrow icon" />
  <img src="dist/images/productx1200.png" class="exclusive__product-img product-img-size" alt="product image" srcset="" />
</section>

<section class="encouragement encouragement--result">
  <div class="encouragement__container">
    <h1 class="heading-primary">نتائج رائعة</h1>
    <p class="description-text">
      الماسك المعجزة مجرب و فعال لقد تمت تجربته على 200 شخص بنوعيات شعر مختلفة و
      لقد أثبت المنتج فعاليته الاستثنائية على جميع المشاركين بدون استثناء
    </p>
    <a class="btn btn--gold" href="#buy-form">بادر بالطلب الآن!</a>
  </div>
</section>

<section class="section-slider">
  <div class="section-slider__responsive">
    <div class="section-slider__container">
      <img src="dist/images/AF1.jpg" class="section-slider__img" alt="product work perfectly" srcset="" />
    </div>
    <div class="section-slider__container">
      <img src="dist/images/AF2.jpg" class="section-slider__img" alt="product work perfectly" srcset="" />
    </div>
    <div class="section-slider__container">
      <img src="dist/images/AF3.jpg" class="section-slider__img" alt="product work perfectly" srcset="" />
    </div>
    <div class="section-slider__container">
      <img src="dist/images/AF4.jpg" class="section-slider__img" alt="product work perfectly" srcset="" />
    </div>
    <div class="section-slider__container">
      <img src="dist/images/AF5.jpg" class="section-slider__img" alt="product work perfectly" srcset="" />
    </div>
  </div>
</section>

<section class="benefits">
  <h1 class="heading-primary t-center">فوائد الماسك المعجزة؟</h1>
  <p class="subheading t-center">مجرب و فعال</p>
  <div class="benefits__container">
    <img src="dist/images/productx1200.png" class="benefits__product-img" alt="product image" srcset="" />
    <ul class="benefits__list list-unstyled">
      <li class="benefits__item">
        <img src="dist/images/benefits-icon.png" alt="benefits icon" class="benefits__item--icon" />
        <p class="benefits__item--text">
          يعالج الشعر التالف و المكسر بسبب مجفف الشعر او المسخن او صباغة الشعر
        </p>
      </li>
      <li class="benefits__item">
        <img src="dist/images/benefits-icon.png" alt="benefits icon" class="benefits__item--icon" />
        <p class="benefits__item--text">
          يحافظ على لون الصبغة ويعطي لمعان للشعر تحسد عليه
        </p>
      </li>
      <li class="benefits__item">
        <img src="dist/images/benefits-icon.png" alt="benefits icon" class="benefits__item--icon" />
        <p class="benefits__item--text">
          يعطي حجم للشعر و يرطبه و يعيد له حيويته
        </p>
      </li>
      <li class="benefits__item">
        <img src="dist/images/benefits-icon.png" alt="benefits icon" class="benefits__item--icon" />
        <p class="benefits__item--text">
          ينشط النهايات المنقسمة ويقوي بصيلات الشعر
        </p>
      </li>
      <img src="dist/images/ARRorg.png" alt="" class="benefits__saperator" />
    </ul>
  </div>
</section>

<section class="reviews">
  <h1 class="heading-primary t-center">هـؤلاء جربوا الماسك المعجزة بأنفسهم</h1>
  <p class="subheading t-center">الشهادات</p>
  <div class="reviews__responsive u-mt-b">
    <div class="reviews__container">
      <img src="dist/images/review1.jpg" alt="review image" class="reviews__img" />
      <p class="reviews__description">
        ماسك رائع، مشكوريين!! يعطي ليونة و لا مثيل للشعر و الرائحة جد جميلة
      </p>
      <p class="reviews__author">محمد س</p>
    </div>
    <div class="reviews__container">
      <img src="dist/images/review2.jpg" alt="review image" class="reviews__img" />
      <p class="reviews__description">
        اشتريته لابنتي وكانت النتائج مذهلة! سأشتري واحد أخر لابنتي الثانية
      </p>
      <p class="reviews__author">مريم ب</p>
    </div>
    <div class="reviews__container">
      <img src="dist/images/review3.jpg" alt="review image" class="reviews__img" />
      <p class="reviews__description">
        مفعوله يلاحظ من الاستعمال الاول و رائحته جد جميلة
      </p>
      <p class="reviews__author">سناء ع</p>
    </div>
    <div class="reviews__container">
      <img src="dist/images/review4.jpg" alt="review image" class="reviews__img" />
      <p class="reviews__description">
        لم أكن أتوقع أنه سيعمل عندما رأيت الإعلان ، واشتريت واحد على أي حال ، وقد جربته اليوم. لقد جعل شعري أكثر ليونة و لمعان جميل، شكرا لكم
      </p>
      <p class="reviews__author">منال ب</p>
    </div>
  </div>
</section>
<section class="faq">
  <div class="faq__container">
    <h1 class="heading-primary">المزيد من الأسئلة الشائعة</h1>
    <div class="faq__question">
      <h2 class="faq__question-title">هل الماسك المعجزة صالح لجميع أنواع الشعر؟</h2>
      <p class="faq__question-answer">نعم، يمكن استعمال الماسك المعجزة على جميع أنواع الشعر. الشعر الجاف، الشعر الدهني و الشعر العادي</p>
    </div>
    <div class="faq__question">
      <h2 class="faq__question-title">هل يمكن استعماله على الأطفال أو المرأة الحامل؟</h2>
      <p class="faq__question-answer">نعم، فالماسك المعجزة طبيعي 100% و لا يشكل خطورة</p>
    </div>
    <div class="faq__question">
      <h2 class="faq__question-title">هل عبوة واحدة كافية من الماسك المعجزة؟</h2>
      <p class="faq__question-answer">نعم، عبوة واحدة من الماسك المعجزة كافية لاستعمالات متعددة و نتائج ظاهرة. ينصح بعبوتين أو أكثر لنتائج أكثر روعة و مدة أطول</p>
    </div>
  </div>
</section>

<section class="offer">
  <div class="offer__container">
    <h2 class="offer__title">الشعر القصير</h2>
    <img src="dist/images/productx1200.png" alt="" class="offer__img" srcset="" />
    <p class="offer__new">درهم 449</p>
    <p class="offer__original">699 درهم</p>
  </div>
  <div class="offer__container">
    <h2 class="offer__title">الشعر المتوسط</h2>
    <img src="dist/images/prod-2-1000x-01.png" alt="" class="offer__img" srcset="" />
    <p class="offer__new">درهم 649</p>
    <p class="offer__original">899 درهم</p>
  </div>
  <div class="offer__container">
    <h2 class="offer__title">الشعر الطويل</h2>
    <img src="dist/images/prod-3-1000x-01.png" alt="" class="offer__img" srcset="" />
    <p class="offer__new">درهم 849</p>
    <p class="offer__original">1349 درهم</p>
  </div>
</section>

<section class="buy-now">
  <div class="buy-now__title">
    <h1 class="buy-now__title-main">
      <span class="buy-now__title-main--first">مع ماسك الشعر</span>
      <span class="buy-now__title-main--second">المعجزة</span>
    </h1>
    <p class="buy-now__title-sub">نعم شعرك وعزز ثقتك بنفسك</p>
  </div>
</section>
<form method="post" action="#" class="form buy-now__form" id='buy-form'>
  <!-- <div class="form__group">
    <select id="offer-select"   class="form__input" name='ordertype' require>
      <option value="0" selected disabled>إختر العرض الذي يناسب طول شعرك</option>
      <option value="1">عبوة واحدة للشعر القصير 449 درهم</option>
      <option value="2">2 عبوات للشعر المتوسط 649 درهم</option>
      <option value="3">3 عبوات للشعر الطويل 849 درهم</option>
    </select>
    <div id="chevrons">
      <i class="fas fa-chevron-up"></i>
      <i class="fas fa-chevron-down"></i>
    </div>
  </div> -->
  <div class="form__group" style="padding: 0 3rem;font-size: 1.8rem;margin-top: 4rem;">
              <h5 class="form__heading" style="font-size: 2.5rem;">إختر العرض الذي يناسب طول شعرك</h5>
              <div class="form__radio-group">
                <input type="radio" class="form__radio-input" id="small" name="customRadio">
                <label for="small" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    1 عبوة واحدة للشعر المتوسط 449 درهم
                </label>
              </div>
              <div class="form__radio-group">
                <input type="radio" class="form__radio-input" id="larg" name="customRadio">
                <label for="larg" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    2 عبوات للشعر المتوسط 649 درهم 
                </label>
              </div>
              <div class="form__radio-group">
                <input type="radio" class="form__radio-input" id="big" name="customRadio">
                <label for="big" class="form__radio-label">
                    <span class="form__radio-button"></span>
                    3 عبوات للشعر المتوسط 849 درهم
                </label>
              </div>
    </div>

  <div class="u-mb-2">
    <h2 class="form__heading">
    أدخل معلوماتك
    </h2>
  </div>
  <div class="form__group">
    <input type="text" class="form__input" placeholder="الاسم الكامل" id="name" name='full-name' required />
    <label for="name" class="form__label">الاسم الكامل</label>
  </div>
  <div class="form__group">
    <input type="text" class="form__input" placeholder="المدينة" id="city" name='city' required />
    <label for="city" class="form__label">المدينة</label>
  </div>
  <div class="form__group">
    <input type="phone" class="form__input" placeholder="رقم الهاتف" id="phone" name='phone' required />
    <label for="phone" class="form__label">رقم الهاتف</label>
  </div>
  <div class="form__group">
    <input type="phone" class="form__input" placeholder="تأكيد رقم الهاتف" id="phnoetrue" name='phone-check' required />
    <label for="phnoetrue" class="form__label">تأكيد رقم الهاتف</label>
  </div>

  <div class="form__group">
    <button type="submit" class="btn btn--gold"  name='submit'>أطلب الآن</button>
  </div>
</form>

<section class="section-service">
  <div class="section-service__container">
    <ul class="section-service__list list-unstyled">
      <li class="section-service__item">
        <span class="icon"><i class="fa fa-truck"></i>
        </span>
        <h3 class="section-service__title" style="color: rgb(0, 0, 0);">
          الشحن السريع
        </h3>
        <p class="description-text" style="color: rgb(0, 0, 0);">
          توصيل سريع و أمن
        </p>
      </li>
      <li class="section-service__item">
        <span class="icon"><i class="fa fa-retweet"></i></span>
        <h3 class="section-service__title" style="color: rgb(0, 0, 0);">
          امكانية الاستبدال
        </h3>
        <p class="description-text" style="color: rgb(0, 0, 0);">
          بسهولة وأمان
        </p>
      </li>
      <li class="section-service__item">
        <span class="icon">
          <i class="fa fa-cart-arrow-down"></i></span>
        <h3 class="section-service__title" style="color: rgb(0, 0, 0);">
          تأكيد الطلب بسرعة
        </h3>
        <p class="description-text" style="color: rgb(0, 0, 0);">
          لجميع انحاء المغرب
        </p>
      </li>
    </ul>
  </div>
</section>
<section class="encouragement u-mt-h">
  <div class="encouragement__container">
    <h1 class="heading-primary">ضمانتنا</h1>
    <p class="description-text">
      أكثر من %98 من زبنائنا يحبون المنتجات التي نقدمها، و هدفنا هو الحفاظ والزيادة من هاته النسبة. لذلك، فريقنا مستعد للإجابة عن جميع أسئلتك و مساعدتك حتى تحصل أنت أيضا على النتائج التي تريدها! و إن لم تكن راضيا %100 على منتجاتنا لأي سبب، فيرجى الاتصال بفريقنا في غضون 14 يومًا الأولى بعد الاستلام لاسترداد أموالك بالكامل
    </p>
  </div>
</section>
<section class="footer">
  <div class="footer__links">
    <a href="#" class="footer__link">
      <p>التواصل معنا</p>
    </a>
    <a href="#" class="footer__link">
      <p>سياسة الاسترجاع</p>
    </a>
    <a href="#" class="footer__link">
      <p>سياسة الخصوصية</p>
    </a>
  </div>
  <p class="footer__right">جميع الحقوق محفوظة © 2020 ماسك الشعر المعجزة</p>
  <p class="footer__designer">DESIGNED BY <a href="https://github.com/Med-MG"><span>MED MOUIGUINA</span></a></p>
</section>
<div class="buy-now-sticky">
  <a href="#buy-form" class="btn btn--gold button-sticky b-center" style="margin: 0 auto;">شراء الآن</a>
  <a href="https://wa.me/212620226054?text=%D8%A3%D8%B1%D9%8A%D8%AF%20%D8%B4%D8%B1%D8%A7%D8%A1%20%D9%85%D8%A8%D8%B1%D8%AF%20%D8%A7%D9%84%D8%AC%D9%88%20%D8%A7%D9%84%D9%85%D8%AD%D9%85%D9%88%D9%84" class="button-whatsapp button-sticky  hidden"><img src="dist/images/icons8-whatsapp-64.png" class="button-whatsapp__img" /> الواتساب</a>
</div>
<div class="<?php
if (isset($_GET['order'])) {
    echo 'popup';
}?> " id="popup">
		<div class="popup__content <?php
if (isset($_GET['order'])) {
    echo 'show-content';
}?>">
			<div class="popup__right">
			<?php if (isset($_GET['order'])) {echo "<script> fbq('track', 'Purchase');</script>";}?>
				<a href="./" class="popup__close">&times;</a>
				<div class="success-checkmark">
					<div class="check-icon">
						<span class="icon-line line-tip"></span>
						<span class="icon-line line-long"></span>
						<div class="icon-circle"></div>
						<div class="icon-fix"></div>
					</div>
				</div>
				<h3 class="heading-tertiary">شكرا جزيلاً على ثقتكم</h3>
				<p class="popup__text">
					لقد تم تسجيل الطلب !  سيتصل بكم فريق الدعم الفني
          لتأكيد طلبكم في أقرب وقت ممكن <br>
				</p>
				<a class="btn btn--gold button-popup" href="./">استمر في التسوق</a>
			</div>
		</div>
	</div>

<!-- <script src="js/jquery.min.js"></script> -->
<script src="https://kit.fontawesome.com/ecadb3d96a.js" crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/filterizr/2.2.4/jquery.filterizr.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>


<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="dist/js/main.min.js"></script>

<!-- onscroll animation library -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 100, // values from 0 to 3000, with step 50ms
    duration: 500, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
  });
</script>
<!-- custom js -->
<script type="text/javascript">
  $(document).ready(function () {
    $('.section-slider__responsive').slick({
      arrows: true,
      autoplay: true,
      autoplaySpeed: 2000,
      touchMove: true,
      swipe: true,
      dots: true,
      infinite: false,
      speed: 300,

    });
    $('.reviews__responsive').slick({
      arrows: true,
      autoplay: false,
      autoplaySpeed: 3000,
      touchMove: true,
      swipe: true,
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
  });
</script>
</body>

</html>
