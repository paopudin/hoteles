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
        <div class="container">
        
            <header  class="row"> 
                <div class="col-md-12">
                    HEADER

                </div> 
            </header> 

            <section class="row">
                
                <div class="col-md-3 leftbar" >
                    @section('leftBar')

                    @show
                </div>
                <div class="col-md-9 rightbar">
                    @section('content')

                    @show
                </div>

            </section>
            
        </div>
    </body>
</html>
