<nav class="navbar nav nav-tabs nav-justified">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <li>
          <a class="navbar-brand" href="{{ asset('imagenes/ai.png') }}">
            <img alt="Brand" alt="A.I" width="100" height="30"  src="{{ asset('imagenes/ai.png')}}">
          </a>
        </li>
      </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li role="presentation" class="active">
            <a href="/">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span> 
              Inicio
            </a>
          </li>
          <li role="presentation">
            <a href="/algoritmos">
              <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 
              Algoritmos
            </a>
          </li>
          <li class="dropdown">
            <a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span> Animacion <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="/animacion/anchura"> 
                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>  Busqueda en anchura</a></li>
              <li><a href="/animacion/profundidad">
              <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>  Busqueda en profundidad</a></li>
            </ul>
          </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
        </nav>