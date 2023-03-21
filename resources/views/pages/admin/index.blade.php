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
   <title>Admin</title>
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
      <div class="inner_container">

         <!-- Sidebar  -->
         <nav id="sidebar">
            <div class="sidebar_blog_1">
               <div class="sidebar-header">
                  <div class="logo_section">
                     <a href="index.html"><img class="logo_icon img-responsive"
                           src="{{ asset('assets/admin/images/logo/logo_icon.png') }}" alt="#" /></a>
                  </div>
               </div>
               <div class="sidebar_user_info">
                  <div class="icon_setting"></div>
                  <div class="user_profle_side">
                     @if(Auth::user())
                     <div class="user_img"><img class="img-responsive"
                           src="{{ Auth::user('/storage/perfil')->profile_image }}" alt="#" /></div>
                     @else
                     <div class="user_img"><img class="img-responsive" src="#" alt="#" /></div>
                     @endif
                     <div class="user_info">
                        @if(Auth::user())
                        <h6>{{ Auth::user()->name }}</h6>
                        @endif
                        <p><span class="online_animation"></span> Online</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="sidebar_blog_2">
               <h4>Painel Administrativo</h4>
               <ul class="list-unstyled components">
                  <li class="active">
                     <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-newspaper-o"></i> <span>Publicações</span></a>
                     <ul class="collapse list-unstyled" id="dashboard">
                        <li>
                           <a href="dashboard.html">> <span>Nova Publicação</span></a>
                        </li>
                        <li>
                           <a href="dashboard_2.html">> <span>Todas as Publicações</span></a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-photo purple_color"></i> <span>Banners Destaque</span></a>
                     <ul class="collapse list-unstyled" id="element">
                        <li><a href="general_elements.html">> <span>Banner Topo</span></a></li>
                        <li><a href="media_gallery.html">> <span>Galeria de imagens</span></a></li>
                        <li><a href="icons.html">> <span>Anúncio 1</span></a></li>
                        <li><a href="invoice.html">> <span>Anúncio 2</span></a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-user blue2_color"></i> <span>Usuários</span></a>
                     <ul class="collapse list-unstyled" id="apps">
                        <li><a href="{{ route('perfil') }}">> <span>Perfil</span></a></li>
                        <li><a href="{{ route('user') }}">> <span>Listar</span></a></li>
                        <li><a href="{{ route('user.create') }}">> <span>Cadastrar</span></a></li>
                        <li><a href="calendar.html">> <span>Editar</span></a></li>
                     </ul>
                  </li>
                  <li class="active">
                     <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                           class="fa fa-suitcase green_color"></i> <span>Vereadores</span></a>
                     <ul class="collapse list-unstyled" id="additional_page">
                        <li>
                           <a href="profile.html">> <span>Todos os Vereadores</span></a>
                        </li>
                        <li>
                           <a href="project.html">> <span>Novo Cadastro</span></a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
         <!-- end sidebar -->
         <!-- content right -->
         <div id="content">

            <!-- topbar -->
            <div class="topbar">
               <nav class="navbar navbar-expand-lg navbar-light">
                  <div class="full">
                     <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i
                           class="fa fa-bars"></i></button>
                     <div class="logo_section">
                        <a href="{{ route('admin') }}"><img class="img-responsive"
                              src="{{ asset('assets/admin/images/logo/logo.png') }}" alt="" /></a>
                     </div>
                     <div class="right_topbar">
                        <div class="icon_info">
                           <ul class="user_profile_dd">
                              <li>
                                 @if(Auth::user())
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img
                                       class="img-responsive rounded-circle" src="{{ Auth::user()->profile_image }}"
                                       alt="#" /><span class="name_user">{{ Auth::user()->name }}</span></a>
                                 @else
                                 <a class="dropdown-toggle" data-toggle="dropdown"><img
                                       class="img-responsive rounded-circle" src="#" alt="#" /><span
                                       class="name_user">Admin teste</span></a>
                                 @endif
                                 <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('perfil') }}">Meu Perfil</a>
                                    <a class="dropdown-item" href="{{ route('perfil') }}">Configurações</a>
                                    <a class="dropdown-item" href="{{ route('perfil') }}">Ajuda</a>
                                    <a class="dropdown-item" href="/logout"><span>Sair</span> <i
                                          class="fa fa-sign-out"></i></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </nav>
            </div>
            <!-- end topbar -->

            @yield('content')

         </div><!-- end content right -->
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
   <script src="//code.jquery.com/jquery.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
   <script>
       $('#flash-overlay-modal').modal();
   </script>
</body>

</html>