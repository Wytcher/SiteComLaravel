@extends('layout.layout')

@section('titulo','Index')
  

@section('conteudo')
<link rel="stylesheet" type="text/css" href="css/floating-labels.css">
  
<div class="container-fluid h-100">
  <div class="row">
    
    <div class="col-md-6">
      <div class="row pt-5 pl-5 pr-5">
                
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <div class="text-center mb-4">
            <img class="mb-3" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-2 font-weight-norma titulo">TecBlog</h1>
            <p class="fontIndex">Seu site de controle pessoal</p>
          </div>

          <div class="form-label-group">
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Endereço de Email" required="" autofocus="">
            <label for="inputEmail">Endereço de Email</label>
          </div>

          <div class="form-label-group">
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Senha" required="">
            <label for="inputPassword">Senha</label>
          </div>
          <div class="row">
            <div class="col-6"><input type="checkbox" name="lembrar"><small>Lembrar de mim</small></div>
            <div class="col-6"><small><a href="">Recuperar senha</a></small></div>
          </div>
          <button class="btn btn-lg btn-primary btn-block mt-2" type="submit" style="background-color: #87CEEB!important;">Entrar</button>
          <div class="container">
            <div class="card-login">
                <hr style="background-color: #ccc;">
                @if (Route::has('register'))
                  <center><small class="text text-center fontIndex">Não tem uma conta? <a href="{{route('registro')}}" style="text-decoration: none;" class="text text-warning ">INSCREVA-SE AQUI!</a></small></center>
                 @endif
            </div>
          </div> 
        </form>
      </div>
    </div>
    <div class="col-md-6 fundo">
    </div>
  </div><!-- fim row-->
</div><!-- fim container-->


@endsection
