<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
      :root {

/* Fonts */
--font-default: 'Open Sans', system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
--font-primary: 'Source Sans Pro', sans-serif;
--font-secondary: 'Poppins', sans-serif;

/* Colors */
/* The *-rgb color names are simply the RGB converted value of the corresponding color for use in the rgba() function */

/* Default text color */
--color-default: #1a1f24;
--color-default-rgb: 26, 31, 36;

/* Defult links color */
--color-links: #0ea2bd;
--color-links-hover: #1ec3e0;

/* Primay colors */
--color-primary: #0ea2bd;
--color-primary-light: #1ec3e0;
--color-primary-dark: #0189a1;

--color-primary-rgb: 14, 162, 189;
--color-primary-light-rgb: 30, 195, 224;
--color-primary-dark-rgb: 1, 137, 161;

/* Secondary colors */
--color-secondary: #485664;
--color-secondary-light: #8f9fae;
--color-secondary-dark: #3a4753;

--color-secondary-rgb: 72, 86, 100;
--color-secondary-light-rgb: 143, 159, 174;
--color-secondary-dark-rgb: 58, 71, 83;

/* General colors */
--color-blue: #0d6efd;
--color-blue-rgb: 13, 110, 253;

--color-indigo: #6610f2;
--color-indigo-rgb: 102, 16, 242;

--color-purple: #6f42c1;
--color-purple-rgb: 111, 66, 193;

--color-pink: #f3268c;
--color-pink-rgb: 243, 38, 140;

--color-red: #df1529;
--color-red-rgb: 223, 21, 4;

--color-orange: #fd7e14;
--color-orange-rgb: 253, 126, 20;

--color-yellow: #ffc107;
--color-yellow-rgb: 255, 193, 7;

--color-green: #059652;
--color-green-rgb: 5, 150, 82;

--color-teal: #20c997;
--color-teal-rgb: 32, 201, 151;

--color-cyan: #0dcaf0;
--color-cyan-rgb: 13, 202, 240;

--color-white: #ffffff;
--color-white-rgb: 255, 255, 255;

--color-gray: #6c757d;
--color-gray-rgb: 108, 117, 125;

--color-black: #000000;
--color-black-rgb: 0, 0, 0;

}

/*--------------------------------------------------------------
# 2. Override default Bootstrap variables
--------------------------------------------------------------*/
:root {

--bs-blue: var(--color-blue);
--bs-indigo: var(--color-indigo);
--bs-purple: var(--color-purple);
--bs-pink: var(--color-pink);
--bs-red: var(--color-red);
--bs-orange: var(--color-orange);
--bs-yellow: var(--color-yellow);
--bs-green: var(--color-green);
--bs-teal: var(--color-teal);
--bs-cyan: var(--color-cyan);
--bs-white: var(--color-white);
--bs-gray: var(--color-gray);
--bs-gray-dark: #343a40;
--bs-gray-100: #f8f9fa;
--bs-gray-200: #e9ecef;
--bs-gray-300: #dee2e6;
--bs-gray-400: #ced4da;
--bs-gray-500: #adb5bd;
--bs-gray-600: #6c757d;
--bs-gray-700: #495057;
--bs-gray-800: #343a40;
--bs-gray-900: #212529;
--bs-primary: var(--color-blue);
--bs-secondary: var(--color-blue);
--bs-success: #198754;
--bs-info: #0dcaf0;
--bs-warning: #ffc107;
--bs-danger: #dc3545;
--bs-light: #f8f9fa;
--bs-dark: #212529;
--bs-primary-rgb: var(--color-primary-rgb);
--bs-secondary-rgb: var(--color-secondary-rgb);
--bs-success-rgb: 25, 135, 84;
--bs-info-rgb: 13, 202, 240;
--bs-warning-rgb: 255, 193, 7;
--bs-danger-rgb: 220, 53, 69;
--bs-light-rgb: 248, 249, 250;
--bs-dark-rgb: 33, 37, 41;
--bs-white-rgb: var(--color-white-rgb);
--bs-black-rgb: var(--color-black-rgb);
--bs-body-color-rgb: var(--color-default-rgb);
--bs-body-bg-rgb: 255, 255, 255;
--bs-font-sans-serif: var(--font-default);
--bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
--bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
--bs-body-font-family: var(--font-default);
--bs-body-font-size: 1rem;
--bs-body-font-weight: 400;
--bs-body-line-height: 1.5;
--bs-body-color: var(--color-default);
--bs-body-bg: #fff;

}

/*--------------------------------------------------------------
# 3. Set color and background class names
--------------------------------------------------------------*/
/* Fonts */
.font-default { font-family: var(--font-default) !important; }
.font-primary { font-family: var(--font-primary) !important;}
.font-secondary { font-family: var(--font-secondary) !important; }

/* Text Colors */
.color-default { color: var(--color-default) !important; }
.color-links { color: var(--color-links) !important; }
.color-links:hover { color: var(--color-links-hover) !important; }
.color-primary { color: var(--color-primary) !important; }
.color-primary-light { color: var(--color-primary-light) !important; }
.color-primary-dark { color: var(--color-primary-dark) !important; }
.color-secondary { color: var(--color-secondary) !important; }
.color-secondary-light { color: var(--color-secondary-light) !important; }
.color-secondary-dark { color: var(--color-secondary-dark) !important; }
.color-blue { color: var(--color-blue) !important; }
.color-indigo { color: var(--color-indigo) !important; }
.color-purple { color: var(--color-purple) !important; }
.color-pink { color: var(--color-pink) !important; }
.color-red { color: var(--color-red) !important; }
.color-orange { color: var(--color-orange) !important; }
.color-yellow { color: var(--color-yellow) !important; }
.color-green { color: var(--color-green) !important; }
.color-teal { color: var(--color-teal) !important; }
.color-cyan { color: var(--color-cyan) !important; }
.color-white { color: var(--color-white) !important; }
.color-gray { color: var(--color-gray) !important; }
.color-black { color: var(--color-black) !important; }

/* Background Colors */
.bg-default { background-color: var(--color-default) !important; }
.bg-primary { background-color: var(--color-primary) !important; }
.bg-primary-light { background-color: var(--color-primary-light) !important; }
.bg-primary-dark { background-color: var(--color-primary-dark) !important; }
.bg-secondary { background-color: var(--color-secondary) !important; }
.bg-secondary-light { background-color: var(--color-secondary-light) !important; }
.bg-secondary-dark { background-color: var(--color-secondary-dark) !important; }
.bg-blue { background-color: var(--color-blue) !important; }
.bg-indigo { background-color: var(--color-indigo) !important; }
.bg-purple { background-color: var(--color-purple) !important; }
.bg-pink { background-color: var(--color-pink) !important; }
.bg-red { background-color: var(--color-red) !important; }
.bg-orange { background-color: var(--color-orange) !important; }
.bg-yellow { background-color: var(--color-yellow) !important; }
.bg-green { background-color: var(--color-green) !important; }
.bg-teal { background-color: var(--color-teal) !important; }
.bg-cyan { background-color: var(--color-cyan) !important; }
.bg-white { background-color: var(--color-white) !important; }
.bg-gray { background-color: var(--color-gray) !important; }
.bg-black { background-color: var(--color-black) !important; }
</style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">
    
          <a href="javascript:;" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>RiyaShop<span>.</span></h1>
          </a>
    
          <nav id="navbar" class="navbar">
            <ul>
              <li class="dropdown"><a href="#"><span>Home</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a></li>
              <li><a class="nav-link scrollto" href="index.html#about">Shop</a></li>
              <li><a href="blog.html">Blog</a></li>
              <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
          </nav>
    
          <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a>
        </div>
      </header>
    
      <main id="main">
        @yield('breadcrumbs')

        @include("message.notify")

        @yield('content')
    
      </main>
    
      <footer id="footer" class="footer">
        <div class="footer-content">
          <div class="container">
          </div>
        </div>
    
        <div class="footer-legal text-center">
          <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-center">
    
            <div class="d-flex flex-column align-items-center align-items-lg-start">
              <div class="copyright">
                &copy; Copyright <strong><span>RiyaShop</span></strong>. All Rights Reserved
              </div>
            </div>
    
            <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
            </div>
    
          </div>
        </div>
    
      </footer>
    
      <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    
      {{-- <div id="preloader"></div> --}}
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>