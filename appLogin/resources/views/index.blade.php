<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.5">
        <title>Laravel</title>
        <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/jumbotron.css') }}" rel="stylesheet">
        <link href="{{ url('assets/css/own.css') }}" rel="stylesheet">
    </head>
    <body>

        <main role="main">

            <div class="container">
                @isset($nombre) 
                    @if($nombre!='juan')
                    <div class="alert alert-danger"><p>Nick no correcto</p></div>
                    @endif
                @endisset
                
                <form action="{{url('login/')}}" method="post">
                    @csrf
                   
                    <input type="text" name="login" placeholder="Introduce tu nickname" value="{{old('login')}}"/>
                    
                     @error('login')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                   
                    <input type="password" name="password" placeholder="Introduce la clave" value="{{old('password')}}"/>
                    
                     @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <input type="submit" value="Login"/>
                </form>
                <a href="{{url('./forget')}}">¿Has olvidado la clave?</a>
            </div>
        </main>
        <footer class="container">
           
        </footer>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="{{url("assets/js/jquery-3.3.1.slim.min.js")}}"><\/script>')</script>
        <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>