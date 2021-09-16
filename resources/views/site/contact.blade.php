@extends('site.master.layout')

@section('content')
<div class="container text=center py-5">
      
 <h1 class="display">CONTATO</h1>
   <p class="lead">Seja bem vindo! informe sua duvida no formulario abaixo.</p>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nome</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Exemplo: João e Maria">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">E-mail</label>
  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Exemplo: seu@email.com.br">
</div>
 <button type="button" class="w-20 btn btn-lg btn-primary">Enviar</button>
</div>

@endsection
