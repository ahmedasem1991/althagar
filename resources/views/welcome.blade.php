@extends('layouts.app')

@section('title', 'الثغر العربية')
@section('head')
@parent
@endsection

@section('content')


<main id="main">

<!-- Hero Section - Home Page -->
<section id="hero" class="hero">

  <img src="{{ asset('storage/' . $heroSection->background_image)}}" alt="" data-aos="fade-in">
  
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
      <br><br>
        <h2 data-aos="fade-up" data-aos-delay="100">{{$heroSection->company_header}} <span style="background-color: #0f562a;border-radius:5px;padding: 0px 3px">{{$heroSection->company_name}}</span></h2>
        <br>
        <p data-aos="fade-up" data-aos-delay="200">{{$heroSection->company_slogan}}
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

</section><!-- End Hero Section -->

<!-- Clients Section - Home Page -->
<section id="clients" class="clients">

  <div class="container-fluid" data-aos="fade-up">

    <div class="row gy-4 justify-content-center">
      @foreach ($partners as $i =>$partner)
      <div class="{{ $i == 0 ? 'col-xl-4 col-md-3 col-6' : 'col-xl-2 col-md-3 col-6' }} client-logo">
        <img src="{{ asset('storage/' . $partner->logo) }}" class="img-fluid" alt="">
      </div><!-- End Client Item -->
      @endforeach
    </div>

  </div>

</section><!-- End Clients Section -->

<!-- Features Section - Home Page -->
<section id="aboutus" class="features">

  <!--  Section Title -->
  <div class="container section-title"  data-aos="fade-up">
    <h2>{{ $aboutSection->about_header }}</h2>
    <p>{{ $aboutSection->about_slogan }}</p>
  </div><!-- End Section Title -->

  <div class="container" style="padding-bottom: 100px;">

    <div class="row gy-4 align-items-center features-item">
      <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
        <h3>شركة 
          <span style="color: #0f562a;">
            {{ $aboutSection->about_side_header }}
        </span>
      </h3>
        <p>
          {{ $aboutSection->about_description }}
        <br>
        </p>
        <br>
        <a href="{{url('about-us')}}" class="btn btn-get-started">المزيد</a>
      </div>
      <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
        <div class="image-stack">
          <img src="{{ asset('storage/' . $aboutSection->background_1)}}" alt="" class="stack-front">
          <img src="{{ asset('storage/' . $aboutSection->background_2)}}" alt="" class="stack-back">
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
  

  </div>

</section><!-- End Features Section -->



<section id="" class="about">

<div class="container" style="padding-top: 20px;padding-bottom: 80px;" data-aos="fade-up" data-aos-delay="100">
<div class="container section-title"  data-aos="fade-up">
  <h2>{{ $historySection->history_header }}</h2>
  <p>{{ $historySection->history_slogan }}</p>
</div><!-- End Section Title -->


  <div class="row align-items-xl-center gy-5">

    <div class="col-xl-5 content">
      <!-- <h3>الخدمات</h3> -->
      <h2>{{ $historySection->history_header }}</h2>
      <p>{!! nl2br(e($historySection->history_description)) !!}</p>
<br>
     
    </div>

    <div class="col-xl-7">
     
    <img class="img-thumbnail" style="border-radius:20px" src="{{ asset('storage/' . $historySection->background_1) }}">
    </div>

  </div>
</div>

</section><!-- End About Section -->

<section id="products" class="features">

  <!--  Section Title -->
  <div class="container section-title"  data-aos="fade-up">
    <h2>   منتجاتنا</h2>
    <p>  
    نحرص في شركة الثغر على استخدام أفضل المواد الخام والتقنيات في تصنيع منتجاتنا، لضمان جودة عالية ودقة في التفاصيل. 
   
   
<br>
    نقدم في شركة الثغر مجموعة واسعة من الأشمغة 
   
   
  </p>
 
  </div><!-- End Section Title -->

  <div class="container" style="padding-bottom: 100px;">

    <div class="row gy-4 align-items-center features-item">
      <div class="col-md-3  " data-aos="fade-up" data-aos-delay="200">
      <a  href="https://altaajstore.com/AmOlmQ" target="_blank"> <img src="platin.jpg" style="width: 100%;" class="img-fluid">
      </a> 
      
      <br><br>
       <center> 
        <strong>
        شماغ التاج البلاتيني
        </strong>
      </center>
      </div>
      <div class="col-md-3  " data-aos="fade-up" data-aos-delay="200">
     <a href="https://altaajstore.com/RbWDlY" target="_blank"> <img src="gold.jpg" style="width: 100%;" class="img-fluid"> </a>
      <br><br>
       <center> 
        <strong>
        شماغ التاج الذهبي
        </strong>
      </center>
       </div>
       <div class="col-md-3  " data-aos="fade-up" data-aos-delay="200">
       <a href="https://altaajstore.com/xEZqjY" target="_blank">    <img src="silver.jpg" style="width: 100%;" class="img-fluid">
</a>
       <br><br>
       <center> 
        <strong>
        شماغ التاج الفضي
        </strong>
      </center>
       </div>
       <div class="col-md-3  " data-aos="fade-up" data-aos-delay="200">
       <a href="https://altaajstore.com/pODxQx" target="_blank">  <img src="white.jpg" style="width: 100%;" class="img-fluid"> </a>
       <br><br>
       <center> 
        <strong>
        شماغ التاج الأبيض
        </strong>
      </center>
       </div>
    
    </div>
    
 
 
  </div>

</section> 



<!-- About Section - Home Page -->
<!-- <section id="services" class="about">

  <div class="container" style="padding-top: 20px;padding-bottom: 80px;" data-aos="fade-up" data-aos-delay="100">
  <div class="container section-title"  data-aos="fade-up">
    <h2>الخدمات</h2>
    <p> ارتبط الشماغ بِحكاياتِنا حكايةُ أصالة عربيةٍ</p>
  </div> 


    <div class="row align-items-xl-center gy-5">

      <div class="col-xl-5 content">
        <h3>الخدمات</h3>
        <h2>شركة الثغر العربية</h2>
        <p>بدأت شركة الثغر في الطيران نحو الريادة في مجال بدأت الأشمغة في المملكة العربية السعودية، وهي اليوم في عامها الأول، تُحرز تقدمًا ملحوظًا نحو تحقيق أهدافها الرئيسية في جدة .
</p>
<br>
       <a href="#" class="read-more"><span>تواصل معنا</span>
      
      </a>  
      </div>

      <div class="col-xl-7">
        <div class="row gy-4 icon-boxes">

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <i class="bi bi-buildings"></i>
              <h3>تحسين العمليات</h3>
              <p>
نحن نقدم حلول تحسين العمليات للشركات الصناعية لزيادة الكفاءة وتقليل التكاليف.</p>
            </div>
          </div> 

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <i class="bi bi-clipboard-pulse"></i>
              <h3>ضمان الجودة</h3>
              <p>
نحن نضمن الجودة الفائقة في جميع منتجاتنا من خلال استخدام أفضل المواد والتحكم الدقيق في العملية.</p>
            </div>
          </div>  

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <i class="bi bi-command"></i>
              <h3>خدمة التصنيع المخصصة</h3>
              <p>
نحن نقدم خدمات تصنيع مخصصة تلبي احتياجات العملاء بدقة وفعالية.</p>

<br><br> 
            </div>
          </div>  

          <div class="col-md-6" data-aos="fade-up" data-aos-delay="500" style="padding-top: 10px;">
            <div class="icon-box">
              <i class="bi bi-graph-up-arrow"></i>
              <h3>خدمـات التدريب والتنمية</h3>
              <p>تلبية لرغبات المنشآت الوطنية وحاجتها للتدريب   متخصص يتناسب مع تطلعاتها في التطور وادارة أنشطتها التجارية بما يحقق مراميها وأهدافها</p>
            </div>
          </div>  

        </div>
      </div>

    </div>
  </div>

</section>  -->

<!-- Stats Section - Home Page -->
<section id="stats" class="stats">

  <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

  <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

    <div class="col-lg-4 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
          <p>موظف</p>
        </div>
      </div> 


      <div class="col-lg-4 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="600" data-purecounter-duration="1" class="purecounter"></span>
          <p>نقاط البيع</p>
        </div>
      </div> 

     <div class="col-lg-4 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
          <p>عدد المنتجات </p>
        </div>
      </div>   

      <!-- <div class="col-lg-3 col-md-6">
        <div class="stats-item text-center w-100 h-100">
          <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
          <p>ساعة من الدعم</p>
        </div>
      </div>  -->

   

    </div>

  </div>

</section><!-- End Stats Section -->

 
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
<section id=" " class="team">

  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>فريقنا</h2>
    <p> نؤمن في شركة الثغر بأهمية الاستثمار في رأس المال البشري، ونحرص على تطوير مهارات موظفينا وتعزيز قدراتهم.
    <br>

 

    </p>
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
    <h4>عادل سموم</h4>
    <span>الرئيس</span>
    <!-- <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p> -->
  </div>
</div><!-- End Team Member -->


  </div>

  <br>  <br>  <br>
    <div class="row gy-5 justify-content-center">

     
      <div class="col-lg-3 col-md-6 member aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
          <img src="5.jpg" class="img-fluid" alt="">
          <div class="social">
             
          </div>
        </div>
        <div class="member-info text-center">
          <h4 style="color: #2c445c;">   اسلام محمد</h4>
          <span>المدير التنفيذي  للعمليات  </span>
        
        </div>
      </div>

      <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
        <div class="member-img">
          <img src="2.jpg" class="img-fluid" alt="">
          <div class="social">
             
          </div>
        </div>
        <div class="member-info text-center">
          <h4>   وليد طيران</h4>
          <span>المدير التنفيذي للموارد البشرية  </span>
           
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
          <img src="3.png" class="img-fluid" alt="">
          <div class="social">
             
          </div>
        </div>
        <div class="member-info text-center">
          <h4>   ناجح ممدوح بركة</h4>
          <span>المدير التنفيذي للمبيعات والتسويق</span>
        
        </div>
      </div><!-- End Team Member -->




      <div class="col-lg-3 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
          <img src="4.png" style="width: 100% !important;" class="img-fluid" alt="">
          <div class="social">
             
          </div>
        </div>
        <div class="member-info text-center">
          <h4> وائل البحيري  </h4>
          <span>المدير التنفيذي    للمالية</span>
        
        </div>
      </div><!-- End Team Member -->





      <!-- <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
        <div class="member-img">
          <img src="5.jpg" class="img-fluid" alt="">
          <div class="social">
             
          </div>
        </div>
        <div class="member-info text-center">
          <h4>أحمد محمود</h4>
          <span>المدير التنفيذي  للعمليات  </span>
        
        </div>
      </div>  -->



      
 

    </div>

  </div>

</section><!-- End Team Section -->



<section id="clients" class="clients" style="padding-bottom: 50px;" >

  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up" style="padding-top: 50px;">
    <h2>شركاؤنا</h2>
    <p> نعتمد في شركة الثغر على علاقات قوية مع شركائنا السعوديين والخليجين، ونحرص على بناء علاقات تعاونية مثمرة تلبي احتياجاتنا واحتياجات شركائنا
 

    </p>
  </div><!-- End Section Title -->

  <div class="container-fluid" data-aos="fade-up">

    <div class="row gy-4 justify-content-center">

      <div class="col-xl-4 col-md-4 col-6 client-logo">
        <img src="D3.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      <div class="col-xl-2 col-md-3 col-6 client-logo">
        <img src="assets/img/clients/tag.png" class="img-fluid" alt="">
      </div><!-- End Client Item -->

      
      
       
    </div>

  </div>

</section><!-- End Clients Section -->




<section id="call-to-action" class="call-to-action">

  <img src="assets/img/4.jpg" alt="">

  <div class="container">
    <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
      <div class="col-xl-10">
        <div class="text-center">
          <h3>تواصل معنا</h3>
          <p>إذا كان بإمكاننا تقديم   مساعدة، فلا تتردد في الاتصال بنا.</p>
          <a class="cta-btn" href="/#contact">إتصل الأن</a>
        </div>
      </div>
    </div>
  </div>

</section><!-- End Call-to-action Section -->


<section id="faq" class="faq">

<div class="container section-title"  data-aos="fade-up">
    <h2>أسئلة مكررة</h2>
    <p> ارتبط الشماغ بِحكاياتِنا حكايةُ أصالة عربيةٍ</p>
  </div><!-- End Section Title -->

  <div class="container" style="padding-top: 100px;">

    <div class="row gy-4">

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="content px-xl-5">
          <h3><span>   </span><strong>أسئلة مكررة </strong></h3>
          <p>
          لوحةً فنيةًً منَ الألوانِ والنقوشِ في عالمِ الشماغِ تُنتجُ عنْ ثقافتِنا العربيةِ الأصيلةِ
          </p>
        </div>
      </div>

      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

        <div class="faq-container">
          <div class="faq-item faq-active">
            <h3><span class="num">1.</span> <span>
              ما هي علامات شركة الثغر التجارية؟
            </span></h3>
            <div class="faq-content">
              <p>  تملك شركة الثغر العلامة التجارية المعروفة: شماغ التاج
              </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

          <div class="faq-item">
            <h3><span class="num">2.</span> <span>   أين تقع شركة الثغر؟</span></h3>
            <div class="faq-content">
              <p> 
              يقع المقر الرئيسي لشركة الثغر في مدينة جدة، المملكة العربية السعودية.
     </p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->

         

      </div>
    </div>

  </div>

</section><!-- End Faq Section -->


<!-- Call-to-action Section - Home Page -->

 
 
<!-- Contact Section - Home Page -->
<section id="contact" class="contact" style="background-color: #f4f4f4;">

  <!--  Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>تواصل معنا</h2>
    <p>   
إذا كان بإمكاننا تقديم مساعدة، فلا تتردد في الاتصال بنا.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

  @if (count($errors) > 0)
        <script>
      document.getElementById("contact").scrollIntoView();
        </script>
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif




@if (  $message=session()->get('success')) 
<script>
      document.getElementById("contact").scrollIntoView();
        </script>
<div class="alert alert-success" role="alert">
<h4 class="alert-heading">{{  $message}}</h4>
  
 
 

<hr>
  <p class="mb-0" style="color:green">شكرا لتواصلك مع الثغر العربية</p>
 
</div>
@endif
@if (  $message=session()->get('error')) 
<script>
      document.getElementById("contact").scrollIntoView();
        </script>
<div class="alert alert-danger" role="alert">
 
{{  $message}}
</div>
@endif
    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
              <h3>العنوان</h3>
              <p>حي الفيصلية، جدة، </p>
              <p>المملكة العربية السعودية</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
              <h3>إتصل بنا</h3>
              <p> <a href="tel:+966920023452" dir="ltr"> +966 92002 3452</a></p>
             <br>
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
              <h3>البريد الإلكتروني</h3>
              <p> <a href="mailto:info@althagar.sa">info@althagar.sa</a></p>
             
            </div>
          </div><!-- End Info Item -->

          <div class="col-md-6">
            <div class="info-item" data-aos="fade" data-aos-delay="500">
              <i class="bi bi-clock"></i>
              <h3>ساعات العمل</h3>
          
              <p>    الأحد - الحميس</p>
              <p>9:00AM - 05:00PM</p>
            </div>
          </div><!-- End Info Item -->

        </div>

      </div>
      <script src='https://www.google.com/recaptcha/api.js'></script>
 
      <div class="col-lg-6">
   
        <form  data-aos="fade-up" data-aos-delay="200" id="contactForm2" action="contact-us" method="post" role="form" class="php-email-form">
            <input type="hidden"   value="{{ csrf_token() }}" class="form-control-input" id="_token" name="_token" required>
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="الإسم" required>
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="البريد الإلكتروني" required>
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="phone" placeholder="الهاتف" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="الرسالة" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <!-- <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div> -->
              <div class="form-group">
              @if(config('services.recaptcha.key'))
    <div class="g-recaptcha"
        data-sitekey="{{config('services.recaptcha.key')}}">
    </div>
@endif
              </div>
              <button type="submit">إرسال</button>
            </div>

          </div>
        </form>
      </div><!-- End Contact Form -->

    </div>

  </div>

</section><!-- End Contact Section -->

</main>




@endsection
@section('footer')
@parent

@endsection

 

 
 