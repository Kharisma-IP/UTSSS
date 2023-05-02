<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Buku-ku.com</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts-->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('md5/css/mdb.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('md5/css/style.css')}}"/>
  </head>
  <body>
       @include('Components.navbar')
       @yield('content')
        @include('Components.footer')
        <script type="text/javascript" src="{{asset ('md5/js/mdb.min.js')}}"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>
  </body>
