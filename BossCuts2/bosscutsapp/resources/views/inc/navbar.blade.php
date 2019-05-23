<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="padding: 0.8rem;">
  <div class="container">
    <!-- <a class="navbar-brand logo" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a> -->
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
      <span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navcol-1">

      <ul class="nav navbar-nav ml-auto">
      @guest
	      @if (Route::has('register'))
          <li class="nav-item" role="presentation"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="/cuts">Hair Styles</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="{{ route('login') }}">Book Now</a></li>
        @endif @else
          <li class="nav-item" role="presentation"><a class="nav-link" href="/">Home</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="/cuts">Hair Styles</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" href="/posts/create">Book Now</a></li>
      @endguest
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @if (Route::has('register'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }}<span class="caret"></span></a>
          <div class="dropdown-menu dropdown-menu-left text-left" aria-labelledby="navbarDropdown">
            <a href="/posts" class="dropdown-item">Admin: Bookings</a>
            <a href="{{ route('logout') }}" class="dropdown-item text-center"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>