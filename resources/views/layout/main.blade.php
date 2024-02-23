<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{!! asset('public/css/images/morich.gif') !!}"/>
    <title>Coffe Valley</title>
    @include('layout.css_global')
    @yield('css_custom')
  </head>
  <body>

    <div class="wrapper">
        <div style="display: flex; align-items: center;">
            <img src="/images/logo.png" alt="logo" style="width: 100px; height: 100px;">
            <div style="margin-left: 20px;">
                <h1 style="margin-bottom: 0;">CofeeValley</h1>
                <h2 style="margin-top: 0;">Surabaya</h2>
            </div>
        </div>
        
      <!--Navbar-->
      @include('layout.navbar')
      <hr>
      <!--End Navbar-->
      
      <!--Content-->
      @yield('content')
      
    </div>
    
    
    @include('layout.js_global')
    @yield('js_custom')
    
</body>
<footer>
    @include('layout.footer')
</footer>
</html>