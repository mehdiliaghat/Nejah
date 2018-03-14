
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login nejah</title>
    <!-- Core CSS - Include with every page -->
    <link href="plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/main-style.css" rel="stylesheet" />
</head>
<body class="body-Login-back">
<div>
    @yield('content')
</div>

<!-- Core Scripts - Include with every page -->
<script src="plugins/jquery-1.10.2.js"></script>
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/metisMenu/jquery.metisMenu.js"></script>
<script>
    $(document).ready(function(){
        $('#tde').change(function(){

            var type = $(this).val();

            $.ajax({
                url: baseUrl+"/get-cities/",
                method: "POST",
                data:{type:type},
                success:function(data){
                    $('#show_cities').html(data);
                }

            });
        });

    });
</script>
</body>
</html>