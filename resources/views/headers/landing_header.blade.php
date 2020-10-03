<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }} | Laciudad Network</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ URL::asset('images/logo.png') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/mains.css') }}">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
</head>
<body>
<div class="loaderbg">
   <div class="loader"></div>
</div>
<div class="my-header">
    <nav class="my-navbar navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="{{ URL::asset('images/logo.png') }}">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pricing">Subscription</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Compensation">Compensation</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Affiliation">Affiliate Partnership</a>
            </li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a role="button" aria-label="login" href="login" class="btn btn-outline-basic navbtn my-2 my-sm-0">
                  Log in
                </a>
              </li>
              <li>
                <a role="button" aria-label="Open an Account" href="signup" class="btn btn-light signbutton  my-2 my-sm-0">Sign up
                </a>
              </li>
            </ul>
        </div>
      </div>
    </nav>


    <div class="blob d-none d-md-block">
      <!-- This SVG is from https://codepen.io/Ali_Farooq_/pen/gKOJqx -->
      <svg xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 310 350">
        <path d="M156.4,339.5c31.8-2.5,59.4-26.8,80.2-48.5c28.3-29.5,40.5-47,56.1-85.1c14-34.3,20.7-75.6,2.3-111  c-18.1-34.8-55.7-58-90.4-72.3c-11.7-4.8-24.1-8.8-36.8-11.5l-0.9-0.9l-0.6,0.6c-27.7-5.8-56.6-6-82.4,3c-38.8,13.6-64,48.8-66.8,90.3c-3,43.9,17.8,88.3,33.7,128.8c5.3,13.5,10.4,27.1,14.9,40.9C77.5,309.9,111,343,156.4,339.5z"/>
      </svg>
    </div><!--/blob-->
