
<html lang="en">
<head>
    <title>Contact list</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link  href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>
      <body>
         <div class="container">
               <h2>Contact list</h2>
            <table class="table table-bordered" id="table">
               <thead>
                  <tr>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Image</th>
                     <th>created At</th>
                     <th>Action</th>
                  </tr>
               </thead>
            </table>
         </div>
       <script>
         $(function() {
               $('#table').DataTable({
               processing: true,
               serverSide: true,
               ajax: '{{ route('contactlist') }}',
               columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        {
                          data: 'image',
                          name: 'image',
                          render: function(data, type, full, meta){
                           return "<img src="+ data + " width='70' class='img-thumbnail' />";
                          },
                          orderable: false
                         },
                        { data: 'created_at', name: 'created_at' },
                        { data: 'action', name: 'action' }
                     ]
            });
         });
         </script>
   </body>
</html>