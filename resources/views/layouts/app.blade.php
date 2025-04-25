<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>@yield('title')</title>
@section('head')

@include('layouts.head')
@show
</head>
 


<body dir="{{app()->getLocale()=='en' ? 'ltr' : 'rtl' }}" class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">
<!--  
<div id="preloader"></div> -->
@if(strpos(url()->current(), 'register-form') !== false || strpos(url()->current(), 'contact-us') !== false) 
        
@include('layouts.header2')

@elseif(strpos(url()->current(), 'links') !== false || strpos(url()->current(), 'documents') !== false || strpos(url()->current(), 'eCatalogue-form') !== false || strpos(url()->current(), 'participate') !== false || strpos(url()->current(), 'survey-form') !== false|| strpos(url()->current(), 'visa-form') !== false) 

 
        
@include('layouts.header2')
    @else 
    @include('layouts.header')
    @endif



  @yield('content')
   

  <!-- ======= Footer ======= -->
@section('footer')

@include('layouts.footer')
@show
 
</body>

</html>