


<nav class="navbar navbar-expand-sm  bg-danger text-light nav justify-content-center">
  <!-- Brand -->
  <!-- Links -->
  <ul class="navbar-nav">
<<<<<<< HEAD
  @if(Auth::user()->typeuser=='Administrador')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('academics.index') }}">Académicos</a>
    </li>
    <li class="nav-item">   
      <a class="nav-link" href="{{ route('departamentos.show') }}">Departamentos</a>
=======
  @auth
  <a class="navbar-brand" href="{{ route('home') }}">
          <div  style="width:40px">
            <img src="{{asset('logo.png')}}" class="img-fluid" alt="Responsive image">
          </div>
        </a>
  @if(Auth::user()->typeuser=='Administrador')
    <li class="nav-item">
      <a class="nav-link text-light " href="{{ route('mostrar_producto') }}">Equipos</a>
>>>>>>> 6d6c209... Se realizo la interfaz de producto
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="{{ route('facultades.show') }}">Reviews</a>
    </li>
<<<<<<< HEAD
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" >Usuarios</a>         
=======
    <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle " id="navbardrop" data-toggle="dropdown" >Usuarios</a>         
>>>>>>> 6d6c209... Se realizo la interfaz de producto
            <div class="dropdown-menu">
                <a class="dropdown-item " href="{{ route('register') }}">Agregar usuario de empleados</a>
                <form method="POST" action="{{ route('show') }}">
                    @csrf
                    <div class="form-group">
                                <button type="submit" class="btn ">
                                    {{('   Ver Usuarios') }}
                                </button>
                    </div>
                </form>
            </div>
            </li>
<<<<<<< HEAD
  @elseif(Auth::user()->typeuser=='Secretaria' or Auth::user()->typeuser == 'Miembro comision evaluadora')
      <li class="nav-item">
        <a class="nav-link" href="{{ route('academics.index') }}">Académicos</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{ route('facultades.show') }}">Facultades</a>
    </li>
  @elseif(Auth::user()->typeuser=='Decano')         
    <li class="nav-item">
      <a class="nav-link" href="{{ route('academics.index') }}">Académicos</a>
    </li>
    <li class="nav-item">   
      <a class="nav-link" href="{{ route('departamentos.show') }}">Departamentos</a>
    </li>
    <li class="nav-item">
    <li class="nav-item">
      <a class="nav-link" href="{{ route('facultades.show') }}">Facultades</a>
    </li>
  @elseif(Auth::user()->typeuser=='Director de escuela')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('academics.index') }}">Académicos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('facultades.show') }}">Facultades</a>
    </li>
  @endif        
                                                                                                                                                                                                                       
            <div  style="width:27px">
=======
    <li class="nav-item">
      <a class="navbar-brand" href="{{ route('departamentos.show') }}">
        <div  style="width:35px">
          <img src="{{asset('canasta.png')}}" class="img-fluid" alt="Responsive image">
        </div>
      </a>
    </li>
  @elseif(Auth::user()->typeuser=='Ensamblador')
      <li class="nav-item">
        <a class="nav-link text-light" href="{{ route('academics.index') }}">Equipos</a>
      </li>
      <li class="nav-item">
      <a class="nav-link text-light" href="{{ route('facultades.show') }}">Reviews</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="{{ route('facultades.show') }}">Confirmacion de envios</a>
    </li>
  @elseif(Auth::user()->typeuser=='Encargados de ventas')         
    <li class="nav-item">
      <a class="nav-link text-light" href="{{ route('academics.index') }}">Equipos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="{{ route('academics.index') }}">Reclamos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="{{ route('academics.index') }}">Confirmar stock</a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand" href="{{ route('departamentos.show') }}">
        <div  style="width:35px">
          <img src="{{asset('canasta.png')}}" class="img-fluid" alt="Responsive image">
        </div>
      </a>
    </li>
    <li class="nav-item">
    <li class="nav-item">
      <a class="nav-link text-light" href="{{ route('facultades.show') }}">Reviews</a>
    </li>
  @elseif(Auth::user()->typeuser=='cliente')
  <li class="nav-item">
      <a class="nav-link text-light " href="{{ route('mostrar_producto') }}">Equipos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href="{{ route('facultades.show') }}">Reviews</a>
    </li>
    <li class="nav-item">
      <a class="navbar-brand" href="{{ route('departamentos.show') }}">
        <div  style="width:35px">
          <img src="{{asset('canasta.png')}}" class="img-fluid" alt="Responsive image">
        </div>
      </a>
    </li>
  @endif    
                                                                                                                                                                                                                         
            <div  style="width:40px">
>>>>>>> 6d6c209... Se realizo la interfaz de producto
              <img src="{{asset('user.png')}}" class="img-fluid" alt="Responsive image">
            </div>
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbardrop" data-toggle="dropdown">
                {{ Auth::user()->name }}
              </a>
              <div class="dropdown-menu" >
                <a class="dropdown-item" href="#">Editar</a>
                <a class="dropdown-item " href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"> 
                    Cerrar sesión 
                </a>
              </div>
            </li>

  </ul>
</nav>

<!-- VISTA PARA CUANDO NO SE ESTE LOGEADO -->
@else
    <li class="nav-item">
      <a class="nav-link text-light " href="{{ route('mostrar_producto') }}">Equipos</a>
    </li>
    <li class="nav-item pull-right">
      <a class="nav-link text-light" href="{{ route('facultades.show') }}">Reviews</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link {{ setActive('login') }}  text-light " href="{{ route('login') }}">Logearse</a></li>
    </ul>
    <li class="nav-item">
      <a class="nav-link {{ setActive('register') }}  text-light " href="{{ route('register') }}">Registrarse</a></li>
    </ul>
@endauth

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf 
</form>
</nav>
