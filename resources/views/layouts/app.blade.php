<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ URL::to('/css/app.css') }}" rel="stylesheet">
    <link href="{{ URL::to('/css/master.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
  <div id="header">
  	<div id="lheader">
  		<div id="lcbox">
  			<div id="logo">
  				<img src="img/logol.png">
  			</div>
        @if (Auth::guest())
        <div id="cari">

        </div>
      </div>
        <div id="menu">
    			<ul>
    				<a href="{{ url('/login') }}"><li>Login</li></a>
    				<a href="{{ url('/register') }}"><li>Register</li></a>
    			</ul>
    		</div>
        @else
  			<div id="cari">
  				<input type="text" placeholder="Pencarian">
  			</div>
  		</div>
  		<div id="menu">
  			<ul>
  				<a href="home"><li>Beranda</li></a>
  				<a href="setting"><li>Pengaturan</li></a>
          <a href="href="{{ url('/logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();""><li>Keluar</li></a>
  			</ul>
        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
  		</div>
      @endif
  	</div>
  </div>

    <div id="app">

        @yield('content')
    </div>

    <!-- Scripts
    <script src="/js/app.js"></script>-->
</body>
</html>
