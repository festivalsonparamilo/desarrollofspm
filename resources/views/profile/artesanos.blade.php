<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Inscripciones Milo 2016</title>
    <meta charset="UTF-8" name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/public/css/panel.css">
  <link rel="stylesheet" type="text/css" href="/public/css/footer.css">
  </head>

  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <img class="img-responsive" src="/public/Img/cabezaartesa.jpg">
        </div>
        <div class="col-md-2"></div>
      </div>
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          @yield('pasos')
        </div>
        <div class="col-md-2"></div>
      </div>
      <br>
      <br>
      <div class="row">
        @yield('cuerpo')
      </div>
    </div>
    <div class="container-fluid">
      <br>
      <br>
      <br>
      <div class="row" id="footer">
        @yield('botones')
      </div>
    </div>
    <script type="text/javascript" src="/public/js/jquery.js"></script>
    <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
  </body>
</html>