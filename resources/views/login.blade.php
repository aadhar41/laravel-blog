<html>
   
   <head>
      <title>Login Form</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   </head>

   <body>
      
      <div class="container">
        <br>  
            @if (count($errors) > 0)
             <div class="alert alert-danger alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ol>
                   @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                   @endforeach
                </ol>
             </div>
            @endif
      
      <?php
         echo Form::open(array('url'=>'/validation'));
      ?>
      
      <table class="table table-bordered">
         <tr>
            <td align = 'center' colspan = '2'><h3>Login</h3></td>
         </tr>
         
         <tr>
            <td>Username</td>
            <td><div class="form-group"><?php echo Form::text('username'); ?></div></td>
         </tr>
         
         <tr>
            <td>Password</td>
            <td><div class="form-group"><?php echo Form::password('password'); ?></div></td>
         </tr>
         
         <tr>
            <td align = 'center' colspan = '2'>
               <?php echo Form::submit('Login',array('class'=>'btn btn-primary')); ?>
            </td>
         </tr>
      </table>
      
      <?php
         echo Form::close();
      ?>

      </div>
   
   </body>
</html>