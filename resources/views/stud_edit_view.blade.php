<html>
   <head>
      <title>View Student Records</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   </head>
   
   <body>
      
      <div class="container">
         <table class="table table-bordered table-hover table-bordered">
         <tr>
            <th>S.No.</th>
            <th>I.D.</th>
            <th>Name</th>
            <th>Action's</th>
         </tr>
         <?php $i=1; ?>
         @foreach ($users as $user)
            <tr>
               <td><?php echo $i; ?></td>
               <td>{{ $user->id }}</td>
               <td>{{ $user->name }}</td>
               <td><a href = 'edit/{{ $user->id }}' class="btn btn-outline-primary" >Edit</a></td>
            </tr>
         <?php $i++; ?>
         @endforeach
      </table>
      </div>
   
   </body>
</html>