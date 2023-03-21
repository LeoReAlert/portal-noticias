<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Login</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="{{ asset('assets/admin/style.css') }}" />
      <!-- site icon -->
      <link rel="icon" href="{{ asset('assets/admin/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap.min.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('assets/admin/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('assets/admin/css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets/admin/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('assets/admin/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}" />
         <!-- site css -->

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="dashboard dashboard_1">

<div class="full_container">
         <div class="container">
            <div class="center verticle_center full_height">
               <div class="login_section">
                  <div class="logo_login">
                     <div class="center">
                        <img width="210" src="{{ asset('assets/admin/images/logo/logo.png') }}" alt="#" />
                     </div>
                  </div>
                  <div class="login_form">
                     <form method="POST" action="{{ route('verifica.login') }}">
                        {{ csrf_field() }}
                        <fieldset>
                           <div class="field">
                              <label class="label_field">Email</label>
                              <input type="email" name="email" placeholder="Seu E-mail..." />
                           </div>
                           <div class="field">
                              <label class="label_field">Senha</label>
                              <input type="password" name="password" placeholder="Sua senha de acesso..." />
                           </div>
                         
                              <a class="forgot" href="">Perdeu sua senha?</a>
                           </div>
                           <div class="field margin_0">
                              <label class="label_field hidden"></label>
                              <button type="submit" class="main_bt">Acessar</button>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>




<!-- jQuery -->
      <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
      <script src="{{ asset('assets/admin/js/animate.js') }}"></script>
      <!-- select country -->
      <script src="{{ asset('assets/admin/js/bootstrap-select.js') }}"></script>
      <!-- owl carousel -->
      <script src="{{ asset('assets/admin/js/owl.carousel.js') }}"></script> 
      <!-- chart js -->
      <script src="{{ asset('assets/admin/js/Chart.min.js') }}"></script>
      <script src="{{ asset('assets/admin/js/Chart.bundle.min.js') }}"></script>
      <script src="{{ asset('assets/admin/js/utils.js') }}"></script>
      <script src="{{ asset('assets/admin/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
      <script src="{{ asset('assets/admin/js/perfect-scrollbar.min.js') }}"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
      <script src="{{ asset('assets/admin/js/chart_custom_style1.js') }}"></script>

</body>
</html>