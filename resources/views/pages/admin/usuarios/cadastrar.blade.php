@extends('pages.admin.index')

@section('content')


<div class="mt-5">
  <h1 class="display-5">Cadastrar novo Usuário do Sistema</h1>
  <form method="POST" action="{{ route('user.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">E-mail</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        placeholder="user@exemplo.com" value="{{ old('text_email') }}">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Nome</label>
      <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="Nome Exemplo"
        value="{{ old('text_name') }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Foto Perfil</label>
      <input name="profile_image" type="file" value="{{ old('img_profile_image') }}">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Senha</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="********"
        value="{{ old('text_password') }}">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>



@endsection('content')