<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    </head>
    <body>
       <div id="app">

            <div class="d-flex align-items-stretch justify-content-around">
              <div class="col-sm border border-gray d-flex justify-content-center">
                <counter></counter>
              </div>
              <div class="col-sm border border-gray d-flex justify-content-center">
               <storage></storage>
              </div>
              <div class="col-sm border border-gray d-flex justify-content-center">
                <other></other>
              </div>
            </div>

       </div>

       <script src="/js/app.js"></script>
    </body>
</html>
