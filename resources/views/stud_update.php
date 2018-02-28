<html>
   
   <head>
      <title>Student Management | Edit</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   </head>
   
   <body>

      <div class="container">
         <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
         
            <table class="table table-bordered table-hover table-bordered">
               <tr>
                  <th>Name</th>
                  <td>
                     <input type = 'text' name = 'stud_name' value = '<?php echo $users[0]->name; ?>'/>
                  </td>
               </tr>
               <tr>
                  <td colspan = '2'>
                     <input type = 'submit' value = "Update student" />
                  </td>
               </tr>
            </table>
         
         </form>
      </div>
      
   </body>
</html>