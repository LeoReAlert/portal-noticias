<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/fonts/icomoon/style.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

  <!-- Style -->
  <link rel="stylesheet" href="{{ asset('assets/css/estilo.css') }}">
</head>

<body>

  @include('layouts.partials.nav')

  @include('layouts.partials.icones')

  @yield('content')

  @include('layouts.partials.footer')



  <div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <section><a href="#" class="go-top"></a></section>

  <script>
    var counter1 = document.getElementById('counter1');
var counter2 = document.getElementById('counter2');
var counter2 = document.getElementById('counter3');
var counter2 = document.getElementById('counter4');
var counter2 = document.getElementById('counter5');

function increment(i, max, element){
  if(i > max) return;
  setTimeout(function(){
    element.innerText = Math.round(i);
    increment(i+(max/100), max, element);
  },10)
}

increment(0,1500, counter1 );
increment(0,500, counter2  );
increment(0,2000, counter3 );
increment(0,3000, counter4 );
increment(0,3000, counter5 );
        
  </script>


  <!-- Javascript do topo --->
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <!-- Javascript do topo --->



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>