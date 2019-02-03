<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          
         
          @if(Auth::check())
          <a class="nav-link" href="/">Posts</a>
          <a class="nav-link" href="{{ route('posts_create') }}">Create Post</a>
          <a class="nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
          <a class="nav-link ml-auto" href="{{ route('logout') }}">Logout</a>
          @else
          <a class="nav-link" href="{{ route('login')}}">Login</a>
          <a class="nav-link" href="{{ route('register')}}">Register</a>
          @endif 
        </nav> 
      </div>
    </div>
