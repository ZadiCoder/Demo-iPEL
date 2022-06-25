<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
h1,p,spam {
  color: white;
  text-shadow: 2px 2px 4px #000000;
}

</style>
    <!--Bootstrap Awesome CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
      <title>Login</title>
</head>
<body style="background-color:#4682B4;">
    <div class="mb-3 mt-5 text-center font-weight-light" style="font-size:40px;">
    <i class="fa fa-cog fa-spin fa-2x fa-fw text-white font-weight-light">
        </i><spam> iPEL Customer Services</spam>
    </div>
        <p class="text-center text-white" style="font-size:20px;">
        <i class="fa fa-user-secret fa-1x text-danger font-weight-light"></i> Admin Area</p>
    <div class="container-fluid">
        <div class="row justify-content-center mt-5 ">
            <div class="col-sm-6 col-md-4">
                <form action="" class="shadow-lg p-4 bg-dark" method="POST">
                    <div class="form-group text-white">
                    <i class="fa fa-user"></i><label for="email"
                     class="font-weight-bold pl-2">Email</label> <input type="email"
                     class="form-control" placeholder="Email" name="aEmail">
                    
                    </div>
                    <div class="form-group text-white">
                    <i class="fa fa-key"></i><label for="pass"
                     class="font-weight-bold pl-2">Password</label>
                     <input type="password" class="form-control"
                      placeholder="Password" name="aPassword">
                    </div>
                    <button type="submit" class="btn btn-outline-danger mt-4
                    font-weight-bold btn-block shadow-sm text-white ">Login </button>
                    <a href="../index.php" class="btn btn-info
                mt-3 font-weight-bold shadow-sm btn-block  ">Back to Home</a>
               
                </form>

            </div>
        </div>
    </div>

<!-- Java Script -->
<script src="../js/Jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 

</body>
</html>
