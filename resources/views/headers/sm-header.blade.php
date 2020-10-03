<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }} | Laciudad network</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('css/style-sm.css') }}">
    <link rel="icon" href="{{ URL::asset('image/logo.png') }}">
  <!-- Stylesheet -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('Ionicons/css/ionicons.min.css') }}" rel="stylesheet" >
 <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.1.45/css/materialdesignicons.min.css" />
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="d-block d-lg-none">
   <section>
    <div class="laciudad-top-ad-spaces">
      <a href="contact-us" target="_blank" class="border-overlay">
        <img src="{{ URL::asset('image/top-pro-banner2.png') }}" class="img-responsive">
      </a>
    </div>
  </section>
<div id="mySidenav" class="sidenav">
  <span>
      <img src="{{ URL::asset('image/laciudadlogo.jpg') }}" class="logoclass">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </span>
  <div class="all-cat">
    <div class="side-cat">
      <span class="font-weight-bold">Categories</span>
    </div>
    <ul class="list-unstyled side-cat-uls pt-2">
      <li class="">
        <a class=" collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1"><span class="sm-my-cat"><img src="{{ URL::asset('image/m-cloth.png') }}" alt="" class="img-responsive">Fashion</span>
        <span class="pull-right"><i class="mdi mdi-chevron-right"></i> </span>
        </a>
        <div class="collapse" id="submenu1" aria-expanded="false">
          <ul class="flex-column pl-2 nav collapse-item-drop">
              <li class=""><a class="nav-link py-0" href="#"><span> <i class="mdi mdi-square-medium-outline"></i> Dresses</span></a></li>
              <li class=""><a class="nav-link py-0" href="#"><span> <i class="mdi mdi-square-medium-outline"></i> Shirts</span></a></li>
              <li class=""><a class="nav-link py-0" href="#"><span> <i class="mdi mdi-square-medium-outline"></i> Shoes</span></a></li>
          </ul>
        </div>
      </li>
      <li class="">
        <a class="" data-close-menu="0" href="">
          <span class="sm-my-cat"><img src="{{ URL::asset('image/sm.png') }}" alt="" class="img-responsive">Smartphone & Tablet
          </span>
          <span class="pull-right"><i class="mdi mdi-chevron-right"></i> </span>
        </a>
      </li>
      <li class="">
        <a class="" data-close-menu="0" href="">
          <span class="sm-my-cat"><img src="{{ URL::asset('image/com.png') }}" alt=""> Supermarket
          </span>
          <span class="pull-right"><i class="mdi mdi-chevron-right"></i> </span>
        </a>
      </li>
      <li class="">
        <a class="" data-close-menu="0" href="">
          <span class="sm-my-cat"><img src="{{ URL::asset('image/ele.png') }}" alt="">Electronics
          </span>
          <span class="pull-right"><i class="mdi mdi-chevron-right"></i> </span>
        </a>
      </li>
      <li class="">
        <a class="" data-close-menu="0" href="">
          <span class="sm-my-cat"><img src="{{ URL::asset('image/tv.png') }}" alt="">Home Appliances
          </span>
          <span class="pull-right"><i class="mdi mdi-chevron-right"></i> </span>
        </a>
      </li>
      <li class="">
        <a class="" data-close-menu="0" href="">
          <span class="sm-my-cat"><img src="{{ URL::asset('image/kid.png') }}" alt="">Baby Products
          </span>
          <span class="pull-right"><i class="mdi mdi-chevron-right"></i> </span>
        </a>
      </li>
      <li class="">
        <a class="" data-close-menu="0" href="">
          <span class="sm-my-cat"><img src="{{ URL::asset('image/health.png') }}" alt="">Health & Beauty and others
          </span>
          <span class="pull-right"><i class="mdi mdi-chevron-right"></i> </span>
        </a>
      </li>
    </ul>
  </div>

  <div class="border-top pt-3">
    <a href="/affiliate" class="sm-my-cat">Become an Affiliate</a>
    <a href="/voucher-vendor" class="sm-my-cat">Become a Vendor</a>
    <a href="/userform" class="sm-my-cat">Become our Network Marketer</a>
    <a href="/account-settings" class="sm-my-cat">Account Settings</a>
    <a href="/contact-us" class="sm-my-cat">Contact Us</a>
    <a href="/logout" class="sm-my-cat">Log Out</a>
  </div>

</div>

<div id="main" class="shadow-sm">
  <span class="main-sidei">  <i style="cursor:pointer; font-size: 20px;" class="fa fa-bars" onclick="openNav()"></i> </span>
  <img src="{{ URL::asset('image/laciudadlogo.jpg') }}" class="logoclass">
    <ul class="pull-right list-inline inline-ul">
      <li class="list-inline-item"><a href="sm-hub"><span class=""><i class="mdi mdi-warehouse"></i></span></a>
      </li>
      <li class="list-inline-item"><a href="profile"><span class=""><i class="mdi mdi-account-outline height-icon"></i></span></a></li>
      <li class="list-inline-item">
        <a href="#">
          <span class="icon-menutoggle">
            <span><img src="{{ URL::asset('image/pigeon.png') }}"></span>
            <span class="badge badge-notify">6</span>
          </span>
        </a>
      </li>
  </ul><!-- end inline-ul-->
  <div class="form-group sm-search">
    <span class="fa fa-search form-control-feedback"></span>
    <input type="text" class="form-control" placeholder="Find Citizens, Products and Services....">
  </div>
</div>
</div>
<style>
    .neo-button{
        padding: 8px;
    }
</style>
