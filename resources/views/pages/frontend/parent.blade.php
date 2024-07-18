<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/header.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/style/footer.css') }}">
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    
    <link rel="icon" href="{{ asset('frontend/assets/image/bq_logo.png') }}" type="image/x-icon" />

    <title>BQ Magetan</title>
  </head>
  <body>
    <!-- !!! NAVBAR HERO !!! -->
    @include('pages.frontend.includes.header')
    <!-- !!! NAVBAR HERO END !!! -->

   @yield('content')

    <!-- FOOTER  -->
    @include('pages.frontend.includes.footer')

    
    <!-- FOOTER END -->
   <script src="{{ asset('frontend/assets/script/index.js') }}" type="text/javascript" defer></script>
  </body>
</html>
