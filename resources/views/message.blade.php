<html>
   <head>
      <title>Ajax Example</title>
      
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>

      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>

      <script>
         function getMessage(){
            $.ajax({
               type:'POST',
               url:'/getmsg',
               data:'_token=<?php echo csrf_token(); ?>',
               success:function(data){
                  // console.log(data);
                  $("#msg").html(data.msg);
               }
            });
         }

         function getTitle() {
            $.ajax({
               type:'POST',
               url:'/gettitle',
               data:'_token=<?php echo csrf_token(); ?>',
               success:function(data){
                  console.log(data);
                  $("#title").html(data.title);
               }
            });
         }
      </script>
   </head>
   
   <body>

        <div class="container">
          <div class="jumbotron text-center text-muted" id="title">
            <h2>Ajax Laravel</h2>
          </div>
          <div id='msg' class="alert alert-info">
            This message will be replaced using Ajax. Click the button to replace the message.
          </div>

            <?php
              echo Form::button('Replace Message',['onClick'=>'getMessage()', 'class'=>'btn btn-info']);
            ?>         

            <?php
              echo Form::button('Replace Title',['onClick'=>'getTitle()', 'class'=>'btn btn-danger']);
            ?>
        </div>
        
   </body>

</html>