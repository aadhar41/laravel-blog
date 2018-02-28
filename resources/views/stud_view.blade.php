<html>
   
   <head>
      <title>View Student Records</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   </head>
   
   <body>
      <div class="container">
         
         <div class="table-responsive ">
            <table class="table table-bordered table-hover">
               <tr>
                  <th>ID</th>
                  <th>Name</th>
               </tr>
               <?php $i=1; ?>
               @foreach ($users as $user)
               <tr>
                  <td><?php echo $i; ?></td>
                  <td>{{ $user->name }}</td>
               </tr>
               <?php $i++; ?>
               @endforeach
            </table>
         </div>

      </div>
   </body>
</html>