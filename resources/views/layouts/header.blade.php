<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container container-fluid d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img style="border-radius: 10px;" src="{{ asset('storage/' . $settings->header_logo)}}" alt="">
        <!-- <h1>Append</h1>
        <span>.</span> -->
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/"  @if( strpos(url()->full(), 'desar-factory') == false &&  strpos(url()->full(), 'about-us') == false)  class="active" @endif>الرئيسية</a></li>
          <li><a @if( strpos(url()->full(), 'about') !== false)  class="active" @endif href="{{url('about-us')}}">من نحن</a></li>
          <li><a @if( strpos(url()->full(), 'products') !== false)  class="active" @endif href="/#products"> منتجاتنا  </a></li>
          <!-- <li><a href="/#services">الخدمات</a></li>
          <li><a href="/#team">الفريق</a></li> -->
          <li><a target="_blank"  @if( strpos(url()->full(), 'desar-factory') !== false)  class="active" @endif href="https://desar.sa/">مصنع دسار الوطني</a></li>
          <li><a target="_blank" href="https://altaajstore.com/">المتجر</a></li>
          <!-- <li><a href="index.html#portfolio">Portfolio</a></li>
          <li><a href="index.html#team">Team</a></li>
          <li><a href="blog.html">Blog</a></li> -->
          <!-- <li class="dropdown has-dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown has-dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="dd-box-shadow">
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
         
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

     <a class="btn-getstarted" href="/#contact">تواصل معنا</a>   

      <!-- @if(session()->get('locale') == 'en')
          <a  class="btn-getstarted" href="{{ route('changeLang') }}?lang=ar">
              
           <strong> &nbsp; عربي &nbsp;</strong> </a> 
          @elseif(session()->get('locale') == 'ar')
         <a class="btn-getstarted" href="{{ route('changeLang') }}?lang=en">
      
            <strong>      &nbsp; EN &nbsp;</strong></a> 
          @else
        <a class="btn-getstarted" href="{{ route('changeLang') }}?lang=ar">
           
            <strong>      &nbsp; AR &nbsp;</strong></a> 
          @endif -->


    </div>
  </header><!-- End Header -->
