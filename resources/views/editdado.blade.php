@extends('layouts.dados')
@section('title','Buscapé Music')
@section('containts')
		   <main>
      <div class="container-title-form">
            <h1>Atualizar Cadastro</h1>
      </div>
    <div class="container-central-editdado"> 

         <form action="{{route('update',['id' => Auth::user()->id])}}" method="post" class="form-editdado" enctype="multipart/form-data">
        @csrf
          @method('PUT')
        <Legend>Atualização de Dados</Legend> 
        <label for="first_name">Primeiro Nome</label>
        <input type="text" name="first_name" id="first_name" class="form-control" value="{{Auth::user()->first_name}}" placeholder="Primeiro Nome"/>
        <label for="last_name">Ùltimo Nome</label>
        <input type="text" name="last_name" id="last_name" class="form-control"  value="{{Auth::user()->last_name}}" placeholder="Ùltimo Nome"/>
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" value="{{Auth::user()->email}}" placeholder="E-mail">
        <label for="telefone">Telefone</label>
        <input type="number" name="telefone" id="telefone" class="form-control" value="{{Auth::user()->telefone}}" placeholder="Telefone">
        <div class="position-container-botao">
        <input type="submit" value="Atualizar" class="botao" />
        </div>
     
          </form> 

      </div>
    </main>    
@endsection