<html>
   <head>
      <title>Form Example</title>
      <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ URL::to('css/bootstrap.min.css') }}" />     
   </head>
   <body>

   <div class="jumbotron text-muted text-center">
      <h2>FORM EXAMPLE</h2>
   </div>
   
      <div class="container">
         
         <?php
         echo Form::open(array('url' => 'foo/bar'));
         ?>
               <div class="form-group">
                  <?php
                     echo Form::text('username','Username');
                     echo '<br/>';
                  ?>
               </div>

               <div class="form-group">
                  <?php
                     echo Form::text('email', 'example@gmail.com');
                     echo '<br/>';
                  ?>
               </div>

               <div class="form-group">
                  <?php
                     echo Form::password('password');
                     echo '<br/>';
                  ?>
               </div>

               <div class="form-group">
                  <?php
                     echo Form::checkbox('name', 'value');
                     echo '<br/>';
                  ?>
               </div>

               <div class="form-group">
                  <?php
                     echo Form::radio('name', 'value');
                     echo '<br/>';
                  ?>
               </div>

               <div class="form-group">
                  <?php
                     echo Form::file('image');
                     echo '<br/>';
                  ?>
               </div>

               <div class="form-group">
                  <?php
                     echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
                     echo '<br/>';
                  ?>
               </div>


               <?php
               echo Form::submit('Click Me!', array('class' => 'btn btn-primary'));
            echo Form::close();
         ?>

      </div>
      
   </body>
</html>