<html>
   <head>
      <title>Upload File</title>
      <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}" />     
   </head>
   <body>
      
      <div class="container">
         <br>
         <div class="alert alert-secondary">
         <?php
            echo Form::open(array('url' => '/uploadfile','files'=>'true'));
            echo 'Select the file to upload.';
            echo "<br>";
            echo "<br>";
            echo Form::file('image');
            echo "<br>";
            echo "<br>";
            echo Form::submit('Upload File');
            echo Form::close();
         ?>
         </div>
      </div>
   
   </body>
</html>