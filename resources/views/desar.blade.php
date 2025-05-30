@extends('layouts.app')

@section('title', 'الثغر العربية | مصنع دسار الوطني')
@section('head')
@parent
@endsection

@section('content')
<style>
  .header .btn-getstarted,.section-title h2:before, .section-title h2:after,.scroll-top {
    background: #2c445c !important;
  }
  .navmenu a:hover, .navmenu .active, .navmenu .active:focus {
    color: #2c445c !important;
  }
  :root {
 
 
 
  --accent-color: #0f562a;
  }
</style>

<main id="main">

<!-- Hero Section - Home Page -->
<section id="hero" style="height: 100vh;min-height:100vh !important" class="hero">


  <img src="{{asset('desar.jpg')}}" style="height: 100vh;width:100%;position: absolute;
  inset: 0;
  display: block;
  width: 100%;
 
  -o-object-fit: cover;
  object-fit: cover;
  z-index: 1;" alt="" data-aos="fade-in">

 


  <div class="container auto-container d-flex flex-column justify-content-center">
    <div class="row" style="text-align:center;margin-top:-150px">
      <div class="col-lg-12">
      <br><br>
        <h2 data-aos="fade-up" data-aos-delay="100"> مصنع دسار الوطني  </h2>
        <br>
        <p data-aos="fade-up" data-aos-delay="200">    اصالة الوطن ورقي قادته وشعبه

      
        </p>
      </div>
      <!-- <div class="col-lg-5">
        <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
          <input type="text" class="form-control" placeholder="Product Name">
          <input type="submit" class="btn btn-primary" value="Search">
        </form>
      </div> -->
    </div>
  </div>
  
  <svg class="editorial" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
 <defs>
 <path id="gentle-wave" d="M-160 44c30 0 
    58-18 88-18s
    58 18 88 18 
    58-18 88-18 
    58 18 88 18
    v44h-352z"></path>
  </defs>
  <!-- <g class="parallax1">
   <use xlink:href="#gentle-wave" x="50" y="3" fill="#4C423D"/>
  </g>
    <g class="parallax2">
   <use xlink:href="#gentle-wave" x="50" y="0" fill="#7D968D"/>
    </g> -->
      <g class="parallax3">
   <use xlink:href="#gentle-wave" x="50" y="9" fill="#2c445c"></use>
   </g>
    <g class="parallax4">
   <use xlink:href="#gentle-wave" x="50" y="6" fill="#fff"></use>  
  </g>
</svg>
 
</section><!-- End Hero Section -->

 
<!-- Features Section - Home Page -->
<section id="" class="features">

  <!--  Section Title -->
 
  <div class="container section-title"  data-aos="fade-up">
  <h2 style="color: #000;">مصنع دسار الوطني</h2>
  <p> ارتبط الشماغ بِحكاياتِنا حكايةُ أصالة عربيةٍ</p>
</div><!-- End Section Title -->


  <div class="container" style="padding-bottom: 100px;">

    <div class="row gy-4 align-items-center features-item">
      <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h3>مصنع 
          <span style="color: #2c445c;">
      دسار الوطني
        </span>
      </h3>
      من خلال أستخدام أحدث التقنيات والمواد، نقوم بتصنيع شماغ عالي الجودة في مجموعة من التصميمات والألوان لتلبية جميع الرغبات و لدينا أيضًا احترام دائم لتراثنا الثقافي ونحرص بشدة على الحفاظ على أصالة صناعة الشماغ.
        <br> <br> واخيراً هدفنا الرئيسي هو إقامة علاقات قوية مع العملاء من خلال   خدمة موثوقة وتوفير منتجات ذات جودة ممتازة  .
        <br>  <br> 
       

        </p>
     
      </div>
      <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="image-stack">
          <img src="{{asset('desar.jpeg')}}" alt="" class="stack-front">
          <img src="{{asset('desar2.jpg')}}" alt="" class="stack-back">
        </div>
      </div>
    </div><!-- Features Item -->

<style>
  .htitle {
    font-size: 16px;
    font-weight: 500;
    line-height: 19px;
    padding: 10px 20px;
    background: rgba(var(--accent-color-rgb), 0.05);
    color: var(--accent-color);
    border-radius: 7px;
    display: inline-block;
}

</style>
  
    <!-- <div  style="padding-top: 100px;" class="row gy-4 align-items-stretch justify-content-between features-item ">
      <div class="col-lg-6 d-flex align-items-center  " data-aos="zoom-out">
        <center> <img style="width: 80%;border-radius:10px"   src="assets/img/about1.webp" class="img-fluid" alt=""></center>
      </div>
      <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
        <h3  >من نحن</h3>
        <p>بدأت شركة الثغر في الطيران نحو الريادة في مجال بدأت الأشمغة في المملكة العربية السعودية، وهي اليوم في عامها الأول، تُحرز تقدمًا ملحوظًا نحو تحقيق أهدافها الرئيسية في جدة

.</p>
         
<br> 
        <a href="#" class="btn btn-get-started align-self-start">المزيد</a>
      </div>
    </div>  -->

  </div>

</section><!-- End Features Section -->


<!-- About Section - Home Page -->

<!-- Stats Section - Home Page -->
<section id="stats" class="stats">

  <img src="back2.jpg" alt="" data-aos="fade-in">

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4   justify-content-center">

      <!-- <div class="col-lg-2 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span style="display: inline-block;" data-purecounter-start="0" data-purecounter-end="180000" data-purecounter-duration="1" class="purecounter">  </span> 
          <p>السعة السنوية</p>
        </div>
      </div>  -->

      <div class="col-lg-2 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="83" data-purecounter-duration="1" class="purecounter"></span>
          <p>عدد الموظفين</p>
        </div>
      </div><!-- End Stats Item -->

      <!-- <div class="col-lg-2 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="280" data-purecounter-duration="1" class="purecounter"></span>
          <p>العملاء    </p>
        </div>
      </div>  -->

      <!-- <div class="col-lg-2 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>الموردين</p>
        </div>
      </div>  -->

      <div class="col-lg-2 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="5000" data-purecounter-duration="1" class="purecounter"></span>
          <p> الطاقة الإنتاجية         </p>
        </div>
      </div> 


    </div>

  </div>

</section><!-- End Stats Section -->

<section id="" class="about">

<div class="container" style="padding-top: 20px;padding-bottom: 80px;" data-aos="fade-up" data-aos-delay="100">
<div class="container section-title"  data-aos="fade-up">
  <h2>تاريخ الشماغ</h2>
  <p> ارتبط الشماغ بِحكاياتِنا حكايةُ أصالة عربيةٍ</p>
</div><!-- End Section Title -->


  <div class="row align-items-xl-center gy-5">

    <div class="col-xl-5 content">
      <!-- <h3>الخدمات</h3> -->
      <h2> تاريخ
        <span style="color: #2c445c;">
      الشماغ
      </span>
    </h2>
      <p>
منذ فجر التاريخ في بلاد ما بين النهرين برز الشماغ رمزٌ للثقافة العربية كقطعةٍ مربعةٍ من القماشِ تُغطي الرأسَ وتُحمي من حرّ الشمسِ ورملِ الصحراءِ .

<br><br>
صُنعَ الشماغُ في العصورِ القديمةِ من الصوفِ أو القطنِ أو الكتانِ، وكان لونهُ أبيضَ أو أسودَ أو بنيًا لم يكنْ مجرّدَ غطاءٍ للرأسِ فحسب، بلْ كانَ يُستخدمُ أيضًا كغطاءٍ للوجهِ لحمايةِ مرتديهِ من العواصفِ الرمليةِ والعواصفِ الترابيةِ، مع مرورِ الزمنِ تحوّلَ الشماغُ إلى رمزٍ للثقافةِ العربيةِ، خاصةً في القرنِ التاسع عشرِ، أصبحَ يُرتدى من قبلِ الرجالِ من جميعِ الطبقاتِ الاجتماعيةِ، ورمزًا للوحدةِ العربيةِ اليوم.


<br><br>
 يُعدّ الشماغُ جزءًا لا يتجزأ من الثقافةِ العربيةِ، يُرتدى من قبلِ الرجالِ في جميعِ أنحاءِ العالمِ العربيِ  وباتَ رمزًا للثقافةِ العربيةِ والإسلاميةِ، يُعبّر عن الفخرِ والاعتزازِ بالهويةِ العربيةِ.
</p>
<br>
     
    </div>

    <div class="col-xl-7">
     
    <img class="img-thumbnail" style="border-radius:20px" src="{{asset('bg2.jpg')}}">
    </div>

  </div>
</div>

</section><!-- End About Section -->

<section id=" " class="team" style="background-color: white;">
<div class="container section-title" data-aos="fade-up">
    <h2>الفريق</h2>
    <p> يفتخر  مصنع دسار الوطني   بفريق عمل علي أعلي المستويات من الخبرة والإحترافية  </p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-5 justify-content-center">

      <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
        <div class="member-img">
          <img src="1.jpg" class="img-fluid" alt="">
          <div class="social">
             
          </div>
        </div>
        <div class="member-info text-center">
          <h4 style="color: #2c445c;">عادل سموم</h4>
          <span>الرئيس</span>
          <!-- <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p> -->
        </div>
      </div><!-- End Team Member -->

    



 <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
          <img src="5.jpg" class="img-fluid" alt="">
          <div class="social">
             
          </div>
        </div>
        <div class="member-info text-center">
          <h4  style="color: #2c445c;">   اسلام محمد</h4>
          <span>المدير التنفيذي  للعمليات  </span>
        
        </div>
      </div>   



      
 

    </div>

  </div>

</section><!-- End Team Section -->


<!-- <section id="services" class="services">
 
  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
</div >

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
      </div>
 

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div>
      </div> 

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
      </div> 

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>
      </div> 

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
      </div> 

      <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
        <div class="service-item d-flex">
          <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
          <div>
            <h4 class="title"><a href="services-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>
      </div> 

    </div>

  </div>

</section>  -->


<!--  
<section id="portfolio" class="portfolio">

 
  <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div> 

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">App</li>
        <li data-filter=".filter-product">Card</li>
        <li data-filter=".filter-branding">Web</li>
      </ul> 

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-1.jpg" title="App 1" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Product 1</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Branding 1</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 2</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-4.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Product 2</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Branding 2</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 3</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-7.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Product 3</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-8.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Branding 3</h4>
            <p>Lorem ipsum, dolor sit</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div> 

      </div> 

    </div>

  </div>

</section>  -->

 
<!-- <section id="pricing" class="pricing">

 
  <div class="container section-title" data-aos="fade-up">
    <h2>Pricing</h2>
    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
  </div> 

  <div class="container" data-aos="zoom-in" data-aos-delay="100">

    <div class="row g-4">

      <div class="col-lg-4">
        <div class="pricing-item">
          <h3>Free Plan</h3>
          <div class="icon">
            <i class="bi bi-box"></i>
          </div>
          <h4><sup>$</sup>0<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Pharetra massa massa ultricies</span></li>
            <li class="na"><i class="bi bi-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
        </div>
      </div> 

      <div class="col-lg-4">
        <div class="pricing-item featured">
          <h3>Business Plan</h3>
          <div class="icon">
            <i class="bi bi-rocket"></i>
          </div>

          <h4><sup>$</sup>29<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
        </div>
      </div> 

      <div class="col-lg-4">
        <div class="pricing-item">
          <h3>Developer Plan</h3>
          <div class="icon">
            <i class="bi bi-send"></i>
          </div>
          <h4><sup>$</sup>49<span> / month</span></h4>
          <ul>
            <li><i class="bi bi-check"></i> <span>Quam adipiscing vitae proin</span></li>
            <li><i class="bi bi-check"></i> <span>Nec feugiat nisl pretium</span></li>
            <li><i class="bi bi-check"></i> <span>Nulla at volutpat diam uteera</span></li>
            <li><i class="bi bi-check"></i> <span>Pharetra massa massa ultricies</span></li>
            <li><i class="bi bi-check"></i> <span>Massa ultricies mi quis hendrerit</span></li>
          </ul>
          <div class="text-center"><a href="#" class="buy-btn">Buy Now</a></div>
        </div>
      </div> 

    </div>

  </div>

</section>  -->

<!-- Faq Section - Home Page -->

<!-- Team Section - Home Page -->
 

<!-- Call-to-action Section - Home Page -->

 
 
<!-- Contact Section - Home Page -->
 
</main>




@endsection
@section('footer')
@parent

@endsection

 

 
 