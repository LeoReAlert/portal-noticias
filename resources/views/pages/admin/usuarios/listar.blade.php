@extends('pages.admin.index')

@section('content')

<div class="white_shd full margin_bottom_30 mt-5">
   <div class="full graph_head">
      <div class="heading1 margin_0">
         <h2>Lista de Usários</h2>
      </div>
   </div>
   <div class="table_section padding_infor_info">
      <div class="table-responsive-sm">
         <table class="table">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Foto</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Data</th>



               </tr>
            </thead>
            <tbody>

               @if(!empty($users))

               @foreach($users as $user)
               <tr>
                  <td> {{ $user->id }} </td>
                  <td> <img src="{{ asset('/uploads/profile/'. $user->profile_image) }}"> </td>
                  <td> {{ $user->name }} </td>  
                  <td> {{ $user->email }} </td>
                  <td> {{ $user->created_at }} </td>

               </tr>

               @endforeach
               @endif
            </tbody>
         </table>
      </div>
   </div>
</div>



@endsection('content')