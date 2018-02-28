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
            <td>ID</td>
            <td>Name</td>
            <td>Edit</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td><a href = 'delete/{{ $user->id }}' class="btn btn-outline-dark" >Delete</a></td>
         </tr>
         @endforeach
      </table>
      </div>
   
   </body>
</html>