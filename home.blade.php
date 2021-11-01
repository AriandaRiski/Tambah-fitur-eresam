<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Wajib Retribusi</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    
<div class="wrapper">


  
  <!-- Content Wrapper. Contains page content -->
  

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Search</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <label for="pencarian"></label>
                    <Input type="text" id="input" class="form-control" placeholder="search">
                    <center>
                        <div id="read" class="m-2"></div>
                    </center>
                </div>
            </div>
        </div>
    </section>


 
</div>
<!-- ./wrapper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        readData()
        $("#input").keyup(function () {
            var strcari = $("#input").val();
            if (strcari != "") {
                $("#read").html('<center> <p class="text-muted"></center>')
                $.ajax({
                    type: "get",
                    url: "{{url('home/ajax') }}",
                    data: "code=" + strcari,
                    success: function (data) {
                        $("#read").html(data);
                    }
                });
            } else {
                readData()
            }
        });
    });

    function readData() {
        $.get("{{url('home/read')}}", {},

            function (data, status) {
                $("#read").html(data);
            });
    }
</script>
<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template')}}/dist/js/demo.js"></script>
</body>
</html>
