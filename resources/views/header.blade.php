<div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="@if (Auth::guest()) {{route('index')}} @else {{route('home')}} @endif">Vinyl Records</a>
        </div>
        <div class="navbar-collapse collapse">
        @if (Auth::guest())
          <form class="navbar-form navbar-right" method="POST" action="{{ route('login') }}" role="form">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" id="email" type="email" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
          </div>
        @else
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" onClick="return false;">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
                  <li>
                    <a href="{{route('admin')}}">Create vinyl</a>
                  </li>
              </ul>
          </li>
         @endif
         </ul>
      </div>
        </div>
</div>
@if ($errors->has('email'))
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      <strong>{{ $error }}</strong>
    </div>
  @endforeach
@else

@endif



    {{-- <nav class="header">
      <ul>
        <li class="icon"><a href="{{route('index')}}"><i class="fa fa-music fa-3x" aria-hidden="true"></i></a></li>
        <li><h1>Последние пластинки </h1></li>
        <li> <a class="box" href="{{route('admin')}}">Добавить пластинки</a></li>
        <li> <a class="box" href="{{route('adminshow')}}">Удалить/Изменить пластинки</a></li>
      </ul>
    </nav> --}}
