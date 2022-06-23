
@extends('layouts.main')
@section('title','Buscapé Music')
@section('containts')
	 <main>  
   <div class="busca">
        <form action="" method="get">
          <div class="campo"> 
            <input type="text" name="search" class="search" placeholder="Estou procurando por..."><button type="submit"><i class="bi bi-search"></i></button>
          </div>
        </form>
      </div>

        <nav class="categoria">
          <div class="fundo-icon">  
            <a class="categoria" href="/violeiro"> 
            <img src="/img/cortar.png" alt="" width="50">
            </a>
          </div>
          <div class="fundo-icon">
            <a class="categoria" href="/guitarrista">
            <img src="/img/cortar2.png" alt="" width="50">
            </a>
          </div>
          <div class="fundo-icon">
            <a class="categoria" href="/baterista">
            <img src="/img/cortar3.png" alt="" width="50">
            </a>
          </div>
          <div class="fundo-icon">
            <a class="categoria" href="/baixista">
            <img src="/img/cortar4.png" alt="" width="50">
            </a>
          </div>
          <div class="fundo-icon">
            <a class="categoria" href="/vocalista">
            <img src="/img/cortar5.png" alt="" width="50">
            </a>
          </div>
          <div class="fundo-icon">
            <a class="categoria" href="/tecladista">
            <img src="/img/cortar6.png" alt="" width="50" height="50">
            </a>
          </div>
        </nav>
        <div class="titulo-categoria">
          <p class="titulo-categoria">Violeiros</p>
          <p class="titulo-categoria">Guitarristas</p>
          <p class="titulo-categoria">Bateristas</p>
          <p class="titulo-categoria">Baixistas</p>
          <p class="titulo-categoria">&nbsp;Vocalistas</p>
          <p class="titulo-categoria">Tecladistas</p>
        </div>
        
        <div class="container-anuncios">
          <h2 class="anuncios">Anúncios Destaques</h2>
        </div>


      
         
       
       
        </main>
@endsection  

