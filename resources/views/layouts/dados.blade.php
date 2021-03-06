<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{--Bootstrap--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    {{--CSS--}}
    <link rel="stylesheet" href="/css/dados.css">
  </head>
  <body>
    
    <header>
      <div class="navbar-anuncio">
        <h1 class="titulo"> Vem <b>encontrar</b> sua <b>banda</b> Musical!</h1>
      </div>
      <div class="navbar-menu">
        <h2 class="logo">
          <a href="/" class="logo">BM</a>
        </h2>
        <nav class="navegacao">
          <a href="{{route('meus-anuncios')}}" class="bi bi-grid"> &nbsp;Meus Anúncios</a>
          <a href="#" class="bi bi-chat"> &nbsp;Chat</a>
          <a href="#" class="bi bi-bell"> &nbsp;Notificações</a>
          <div class="container-collapse">
            @auth
            <p class="user"  data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              </svg>
              {{Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name}}
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
              </svg>
            </p>
            @endauth
           
            <div class="collapse" id="collapseExample">
             
              <a href="{{route('dados')}}" class="dados"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
              </svg>Dados</a>
              @auth

              <form action="logout" method="post" class="form-containts">
                @csrf
                <a href="logout"
                  class="sair" 
                  onclick="event.preventDefault();
                  this.closest('form').submit();" 
                  ><i class="bi bi-door-open-fill"></i>Sair</a>
              </form>
              @endauth
           
            </div>
          </div>
          @guest
          <a href="/login" class='bi bi-Person'>&nbsp;Entrar</a>
          @endguest
          <a href="{{route('anunciar')}}" class="anunciar">Anunciar</a>
        </nav>
      </div>

      </div>
    </header>

   @yield('containts')
   
      
    <footer>
      <div class="rodape">
        &copy;{{date('Y')}} - Buscapé Music
      </div>
    </footer>
  </body>
</html>