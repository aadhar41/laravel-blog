<html>

   <head>
      <title>Student Management | Add</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   </head>
   
   <body>
      
      <div class="container">
      <br>

         <form action = "/create" method = "post">
         
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         
            <div class="table-responsive ">

               <table class="table table-bordered table-bordered">
                  <tr>
                     <th>Name</th>
                     <td><input type='text' name='stud_name' /></td>
                  </tr>
                  <tr>
                     <td colspan = '2'>
                        <input type = 'submit' class="btn btn-primary" value = "Add student"/>
                     </td>
                  </tr>
               </table>

            </div>
            
         </form>

      </div>

   </body>
</html>