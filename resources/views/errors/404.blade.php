
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">

<style>
.imagen{
background: url(img/login13.jpg) fixed;
background-size: cover;
background-repeat: no-repeat;
background-position: center center;
}

h1{
  font-size: 130px;
  font-family: sans-serif;
  font-weight: 600;
}
</style>

</head>

<body style="overflow: hidden; ">
  <div class="row align-items-center"  style="height:600px;">
    <div class="col-6 text-center">
      <h1>404</h1>
      <h4 class="mb-5">No se encuentra la página</h4>
      <a role="button" class="btn login_btn btn-sm" href="{{ url('principal') }}">HomeBanking</a>
    </div>
    <div class="col-6 imagen" style="height:600px;">
    </div>
  </div> 
</body>
</html>

