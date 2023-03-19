<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="icon" type="image/png" href="{{asset("assets/admin")}}/images/favicon.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{asset("assets/admin")}}/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset("assets/admin")}}/css/all.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset("assets/admin")}}/style.css">
      <title>Travele | Travel & Tour HTML5 template </title>
</head>
<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">


            <x-admin.nav-bar />
            <x-admin.side-bar />

            {{$slot}}

            <!-- Content / End -->
            <!-- Copyrights -->
            <x-admin.copyright />

        </div>
        <!-- Dashboard / End -->
    </div>
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <script src="{{asset("assets/admin")}}/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{asset("assets/admin")}}/js/bootstrap.min.js"></script>
    <script src="{{asset("assets/admin")}}/js/canvasjs.min.js"></script>
    <script src="{{asset("assets/admin")}}/js/chart.js"></script>
    <script src="{{asset("assets/admin")}}/js/counterup.min.js"></script>
    <script src="{{asset("assets/admin")}}/js/jquery.slicknav.js"></script>
    <script src="{{asset("assets/admin")}}/js/dashboard-custom.js"></script>
</body>
</html>