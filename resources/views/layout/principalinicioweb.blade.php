<!DOCTYPE html>
<html>
<head>
    <title>GAMA | @yield('title','Login')</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/principalweb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-datetimepicker.min.css') }}">
    @section('alternalCSS')

    @show

    <script type="text/javascript" src="{{ URL::asset('assets/js/jquery-2.1.4.min.js') }}"> </script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap.min.js') }}"> </script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/moment.js') }}"> </script>
    <script type="text/javascript" src="{{ URL::asset('assets/js/bootstrap-datetimepicker.min.js') }}"> </script>
    @section('alternalJS')

    @show
</head>

<body>
    <header>
      <div class="container">
      <div class="row">
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

     <br/>
      <!-- Calendarios (Botones de busqueda) -->
        <div class="row">
            <div class="col-md-2 col-md-offset-3">
                <div class="form-group">
                  <span>   Entrada  <span class="glyphicon glyphicon-log-in"></span> </span>
                  <div class='input-group date' id='datetimepicker6'>
                      <input type='button' class="form-control" id="date1"/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                  <span>  Salida <span class="glyphicon glyphicon-log-out"></span></span>
                  <div class='input-group date' id='datetimepicker7'>
                      <input type='button' class="form-control" id="date2"/>
                      <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                </div>
            </div>
            <div class="col-md-2">
              <br>  
              <div class="form-group has-feedback"> 
                  <input type="button" class="form-control" value="Habitacion" />
                  <i class="glyphicon glyphicon-bed form-control-feedback"></i>
              </div>
            </div>
        </div> 
      </div>
    </header>

    <div class="container content">

        <section class="row">
            <div class="col-md-3 col-sm-3 leftbar" >
                asd
            </div>
            <div class="col-md-9 col-sm-9 rightbar">
                asd
            </div>



        </section>

    </div>
</body>

<script type="text/javascript">
  $(function () {
      $('#datetimepicker6').datetimepicker({
          format : "DD-MM-YYYY",
      });
      $('#datetimepicker7').datetimepicker({
          format : "DD-MM -YYYY",
          useCurrent: false //Important! See issue #1075
      });
      $("#datetimepicker6").on("dp.change", function (e) {
          $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
      });
      $("#datetimepicker7").on("dp.change", function (e) {
          $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
      });
  });
</script>
</html>
