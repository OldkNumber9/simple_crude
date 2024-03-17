<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <link href="https://cdn.datatables.net/v/bs5/dt-1.13.3/b-2.3.5/datatables.min.css" rel="stylesheet"/>
 
 <script src="https://cdn.datatables.net/v/bs5/dt-1.13.3/b-2.3.5/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Simple-crude</title>
  </head>
  <body class="bg-secondary">

  <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"> 
          <li><a href="/simple_crude/index.php" class="nav-link px-2 text-white">Home</a></li>
        </ul>
      </div>
    </div>
  </header>


    <div class="container-fluid ">
    <div class="pt-5"></div>
    <div class="row justify-content-center text-white">
            <div class="col-md-8">
                <table class="table table-hover table-dark" id="table_show">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Country</th> 
                            <th scope="col">currency</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- modal update data -->
    <!-- Modal -->
<div class="modal fade" id="update_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update <span id="u_name"></span> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="update_form">
            <div class="mb-3">
                <label for="u_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="u_name_input" name="u_name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="u_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="u_email" name="u_email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="u_phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="u_phone" name="u_phone" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="u_country" class="form-label">Country</label>
                <input type="text" class="form-control" id="u_country" name="u_country" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="u_region" class="form-label">currency</label>
                <input type="text" class="form-control" id="u_currency" name="u_currency" aria-describedby="emailHelp">
            </div>
            <input type="hidden" name="u_id" id="u_id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- modal insert data -->
<div class="modal fade" id="insert_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update <span id="u_name"></span> </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="insert_form">
            <div class="mb-3">
                <label for="u_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="u_email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="u_phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="u_country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="currency" class="form-label">currency</label>
                <input type="text" class="form-control" id="currency" name="currency" aria-describedby="emailHelp">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="insert">insert</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  <script>
    function updateData(id){
        $.ajax({
            url:"api.php?statement=get",
            method:"POST",
            data:{id:id},
            dataType:"json",
            success:function(data){
                console.log(data);
                $('#u_name_input').val(data[0].name);
                $('#u_name').text(data[0].name);
                $('#u_email').val(data[0].email);
                $('#u_phone').val(data[0].phone);
                $('#u_country').val(data[0].country);
                // $('#u_region').val(data[0].region);
                $('#u_id').val(data[0].id);
                $('#u_currency').val(data[0].currency);
                $('#update_user').modal('show');
            }
        });
    }
    function deleteData(id,name){
        Swal.fire({
            title: 'Are you sure?',
            text: "You want to delete user :  "+name+" ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:"api.php?statement=delete",
                    method:"POST",
                    data:{id:id},
                    success:function(data){
                        if(data=="success"){
                            Swal.fire(
                                'Deleted!',
                                'Your data has been deleted.',
                                'success'
                            )
                            $('#table_show').DataTable().ajax.reload();
                        }
                    }
                });
            }
        })
    }
    $(document).ready(function(){
        $("#insert").on('click',function(){
            let data = $("#insert_form").serialize();
            $.ajax({
                url:"api.php?statement=insert",
                method:"POST",
                data:data,
                success:function(data){
                    if(data=="success"){
                        Swal.fire(
                            'Inserted!',
                            'Your data has been inserted.',
                            'success'
                        )
                        $('#insert_user').modal('hide');
                        $('#table_show').DataTable().ajax.reload();
                    }
                }
            });
        })
        $("#save").on('click',function(){
            let data = $("#update_form").serialize();
            $.ajax({
                url:"api.php?statement=update",
                method:"POST",
                data:data,
                success:function(data){
                    if(data=="success"){
                        Swal.fire(
                            'Updated!',
                            'Your data has been updated.',
                            'success'
                        )
                        $('#update_user').modal('hide');
                        $('#table_show').DataTable().ajax.reload();
                    }
                }
            });
        });
        $('#table_show').DataTable({
            dom:'Bfrtip',
            buttons:[
                {
                    text:'Add New',
                    className:'btn btn-success btn-sm ',
                    action:function(){
                        $('#insert_user').modal('show');
                    }
                }
            ],
            "ajax":{
                "url":"api.php?statement=show",
                "dataSrc":""
            },
            
            "columns":[
                {"data":"id"},
                {"data":"name"},
                {"data":"email"},
                {"data":"phone"},
                {"data":"country"},
                {"data":"currency"},
                {"data":"id",
                    "render":function(data,type,row,meta){
                        let output='';
                        output +=  `<button class='btn btn-primary btn-sm m-1' onclick='updateData(${data})'>Update</button>`;
                          output +=  `<button class='btn btn-danger btn-sm m-1' onclick='deleteData(${data},"${row.name}")'>Delete</button>`;
                        return output;
                    }
                }
            ],
            "initComplete":function(){
            this.api().columns([4]).every(function() {
              let column = this;
              let select = $(`<select class="form-control"><option value="">All Country</option></select>`)
              .appendTo($(column.header()).empty())
                .on("change", function() {
                  let val = $.fn.dataTable.util.escapeRegex($(this).val());
                  column.search(val ? "^" + val + "$" : "", true, false).draw();
                });
                column.data().unique().sort().each(function(d,j){
                        select.append('<option value="'+d+'">'+d+'</option>')
                    })
            })
            // add column3 filter email type such as gmail.com, yahoo.com
            this.api().columns([2]).every(function() {
              let column = this;
              let select = $(`<select class="form-control"><option value="">All Email</option></select>`)
              .appendTo($(column.header()).empty())
                .on("change", function() {
                  let val = $.fn.dataTable.util.escapeRegex($(this).val());
                column.search(val ? val : "", true, false).draw();
                });
                // return email type
                column.data().unique().sort().each(function(d,j){
                    let email = d.split('@');
                    select.append('<option value="'+email[1]+'">'+email[1]+'</option>')
                })
            })
             
          }
        });
    });
  </script>
</html>