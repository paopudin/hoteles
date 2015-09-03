<!DOCTYPE html>
<html>
    <head>
        <title>GAMA | @yield('title','Login')</title>
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/principalweb.css') }}">

        @section('alternalCSS')

        @show

        <link rel="stylesheet" href="{{ URL::asset('assets/js/jquery-2.1.4.min.js') }}">

        @section('alternalJS')

        @show
    </head>
    <body>


        <header>
          <div class="row" style="margin:0px">
            <h1>Holetes Venezuela</h1>
            <div class="input-group col-md-5">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                    </button>
                </span>
            </div><!-- /input-group -->
          </div>
        </header>

        <div class="container">

            <section class="row">
                @section('content')

                @show 

            </section>

        </div>
    </body>
</html>
