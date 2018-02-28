<!DOCTYPE html>
<html>
    
   <head>
      <title>ERROR : 500</title>
      <link href = "https://fonts.googleapis.com/css?family=Lato:100" rel = "stylesheet" 
         type = "text/css">
   <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <style>
         html, body {
            height: 100%;
         }
         body {
            margin: 0;
            padding: 0;
            width: 100%;
            color: #B0BEC5;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
         }
         .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
         }
         .content {
            text-align: center;
            display: inline-block;
         }
         .title {
            font-size: 72px;
            margin-bottom: 40px;
         }
      </style>
        
   </head>
   <body>
    
      <div class = "container">
         <div class = "content">
            <div class = "title">
                  <div class="alert alert-dark">500 Internal Server Error</div>
            </div>
         </div>
      </div>
        
   </body>
</html>