<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/animation.css') }}">
    </head>
    <body>

       <div id="app">
            <nav class="navbar navbar-light bor bg-grayy d-flex justify-content-center" style="height: 10vh">
                <a class="navbar-brand text-muted" href="#"><h4>Mine of Moria</h4></a>
            </nav>
            <div class="d-flex align-items-stretch justify-content-around">
              <div class="col-sm bor d-flex justify-content-center mine" style="height: 90vh">
                <counter></counter>
              </div>
              <div class="col-sm bor d-flex justify-content-center bg-gray" style="height: 90vh">
               <storage></storage>
              </div>
              <div class="col-sm bor d-flex justify-content-center mine" style="height: 90vh">
                <other></other>
              </div>
            </div>



       </div>

       <script src="/js/app.js"></script>
    </body>
</html>
