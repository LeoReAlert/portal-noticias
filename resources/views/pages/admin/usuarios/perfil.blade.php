@extends('pages.admin.index')

@section('content') 

<div class="white_shd full margin_bottom_30">
    <div class="full graph_head">
       <div class="heading1 margin_0">
        <h1 class="display-5">Seu Perfil</h1>
       </div>
    </div>
    <div class="full price_table padding_infor_info">
       <div class="row">
          <!-- user profile section --> 
          <!-- profile image -->
          <div class="col-lg-12">
             <div class="full dis_flex center_text">
                 @foreach($users as $user)
                <div class="profile_img"><img src="{{ asset('/uploads/profile/'. $user->profile_image ) }}"></div>
                 @endforeach
                <div class="profile_contant">
                   <div class="contact_inner">
                      <h3>{{ Auth::user()->name }}</h3>
                      <p><strong>Tipo: </strong> Administrator</p>
                      <ul class="list-unstyled">
                         <li><i class="fa fa-envelope-o"></i> : {{ Auth::user()->email }}</li>
                         <li><i class="fa fa-phone"></i> : 679999999</li>
                      </ul>
                   </div>
                </div>
             </div>
             <!-- profile contant section -->
             <div class="full inner_elements margin_top_30">
                <div class="tab_style2">
                   <div class="tabbar">
                      <nav>
                         <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#recent_activity" role="tab" aria-selected="true">Atividade</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#project_worked" role="tab" aria-selected="false">Projetos</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#profile_section" role="tab" aria-selected="false">Atualizar dados</a>
                         </div>
                      </nav>
                      <div class="tab-content" id="nav-tabContent">
                         <div class="tab-pane fade show active" id="recent_activity" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="msg_list_main">
                               <ul class="msg_list">
                                  <li>
                                     <img src="{{ asset('assets/img/universo.jpg') }}" class="img-responsive" style="width:50px;margin:10px;" alt="#">
                                     <span>
                                     <span class="name_user">Noticia</span>
                                     <span class="msg_user">Sobre ampliação das obras</span>
                                     <span class="time_ago">12 min ago</span>
                                     </span>
                                  </li>
                                  <li>
                                     <img src="{{ asset('assets/img/universo.jpg') }}" class="img-responsive" style="width:50px;margin:10px;"  alt="#">
                                     <span>
                                     <span class="name_user">Lei orgância</span>
                                     <span class="msg_user">Nova lei para acesso a deficiêntes</span>
                                     <span class="time_ago">12 min ago</span>
                                     </span>
                                  </li>
                               </ul>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="project_worked" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et 
                               quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                               qui ratione voluptatem sequi nesciunt.
                            </p>
                         </div>
                         <div class="tab-pane fade" id="profile_section" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et 
                               quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos 
                               qui ratione voluptatem sequi nesciunt.
                            </p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <!-- end user profile section -->
          </div>
       </div>
    </div>
 </div>



@endsection('content')