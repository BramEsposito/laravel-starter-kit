<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Language test page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    	  	<a class="navbar-brand" href="#">{{ config('app.name') }}</a>
    	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=	"#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="	false" aria-label="Toggle navigation">
    	  	  	<span class="navbar-toggler-icon"></span>
    	  	</button>

    		<div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav"> 
                    @if (Route::has('login'))
                        @auth
                            <li  class="nav-item"><a class="nav-link" href="{{ url('/admin') }}">Dashboard</a></li>
                    @else
                            <li  class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li  class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endauth
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ LaravelLocalization::getCurrentLocale() }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            @endforeach
                        </div>
                      </li>
                </ul>    		    
    		</div>
    	</nav>
    	<div class="jumbotron">
            <h1 class="display-4">@lang('This is a testpage')</h1>
            <p class="lead">@lang('This page is a showcase page for how a localised page could look.')</p>
            <hr class="my-4">
            <p>@lang('We use the native Laravel localization support and the laravel-localization package.')</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="https://laravel.com/docs/5.6/localization" role="button">Laravel's Localization Docs</a>
                <a class="btn btn-primary btn-lg" href="https://github.com/mcamara/laravel-localization" role="button">laravel-localization</a>
            </p>
        </div>

		<h3>Items to do for a real multilanguage site:</h3>
		<ul>
			<li>Translation of the Login ans Register link for Auth()</li>
			<li>Hide the "en" part of the slug when on the English version of the site</li>
            <li>translation of the admin section (in vue.js?)</li>
		</ul>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>