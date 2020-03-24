<nav class="navbar navbar-inverse fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"> {{config('app.name', 'LSAPP')}} </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"> <a href=" {{ route('home') }} ">Home</a></li>
                <li class="active"> <a href=" {{ route('about') }} ">About</a></li>
                <li class="active"> <a href=" {{ route('services') }} ">Services</a></li>
                <li class="active"> <a href=" ">Blog</a></li>
            </ul>
        </div>
    </div>
  </nav>