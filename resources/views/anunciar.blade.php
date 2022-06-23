
@extends('layouts.anuncios')
@section('title','Buscapé Music')
@section('containts')
    <main>
      <div class="container-title-form">
            <h1>Preencha os campos corretamente e terá seu trabalho divulgado,para ser reconhecido pelo mundo todo!</h1>
      </div>
    <div class="container-central"> 
      <div class="container-form">
      <form action="store" method="post" class="divulgacao" enctype="multipart/form-data">
        @csrf
      
        <Legend>Formulário de Divulgação</Legend> 

          <label for="nome">
            Nome Completo
          </label>
          <input type="text" name="nome" id="nome" class="form-control" value="{{Auth::user()->name}}"><br>

          <label for="telefone">
            Telefone
          </label>
          <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(61)99999-9999"><br>

          <label for="funcao">
            Função
          </label>
        <select name="funcao" id="funcao" class="form-control">
          <option value="Violeiro">Violeiro</option>
          <option value="Guitarrista">Guitarrista</option>
          <option value="Baterista">Baterista</option>
          <option value="Baixista">Baixista</option>
          <option value="Vocalista">Vocalista</option>
          <option value="Tecladista">Tecladista</option>
        </select><br>

          <label for="tempo">
            Quanto tempo tocando
          </label>
          <input type="text" name="tempo" id="tempo" class="form-control" placeholder="2 anos,meses,dias..."><br>

          <label for="cache">
            Cachê
          </label>
         <input type="number" name="cache" id="cache" class="form-control" min="100" placeholder="R$100,00...">
         <br>

          <label for="transporte">
            Transporte 
          </label><br>
          <input type="radio" name="transporte" id="transporte" value="Publico">&nbsp;Publico
          <input type="radio" name="transporte" id="transporte" value="Privado">&nbsp;Privado<br>

         <label for="arquivo">
         Foto de Perfil
       </label><br>
       <input type="file" class="arquivo" name="image" id="arquivo"/>

            <div class="alinhar-botao"> 
          <input type="submit" name="enviar" class="botao" />
          </div> 
      </form>
      </div>
      </div>
    </main>   
@endsection
