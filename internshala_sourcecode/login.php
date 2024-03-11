<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login_style.css">

    <style>
       body {
            background-color: gainsboro;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 16px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .well.bg-info {
            background: linear-gradient(to bottom, #fff 0%, #f0f0f0 100%);
            border: 1px solid #000;
            border-radius: 9px;
            padding: 20px;
            margin-bottom: 20px;
            flex: 1;
            height: auto;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 200px;
            position: relative;
        }

        .well.bg-info:hover {
            background-color: #e0e0e0;
        }

        .container.bg-success {
            background-color: transparent;
            padding-top: 20px;
        }

        .navbar {
            margin-bottom: 0;
        }

        .intern_title {
            color: black;
            font-size: xx-large;
            font-weight: bolder;
            justify-self: center;
            margin-bottom: 50px;
            align-self: center;
            text-align: center;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        .input-group-addon {
            background-color: transparent; /* Remove the background */
            border: none; /* Remove the border */
            padding: 0; /* Remove padding */
            margin-right: 5px; /* Add margin to the right */
            width: auto; /* Set width to auto */
            position: absolute; /* Set position to absolute */
            margin-top: 30px; /* Adjust the top margin to align with the input field */
            margin-left: 60px;
            color: black;
            
        }

        .glyphicon {
            width: 20px; /* Adjust icon width */
            
        }

        .form-control {
          border-color: black;
          margin-top: 20px;
            padding-left: 25px; /* Add padding to the left of the input field for the icon */
            margin-left: 102px; /* Add margin to the left of the input field */
            margin-bottom: 50px;
        }
        .login-form {
          background-color: #fff;
          padding: 50px;
          border-radius: 5px;
          border-color: black;
          box-shadow: 0 0 10px rgba(0,0,0,0.1);
          margin-top: 150px;
        width: 565px;
  height: 475px;
  justify-content: center;
  align-items: center;
  margin-left: 300px;
  border-radius: 5%;
}
    </style>
  </head>
<body>
    <div class="container">
        <nav class="navbar navbar-inverse" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./" style="font-size:xx-large ; font-weight:bolder" >Internshala</a>
                <a class="navbar-brand" href="./" style="font-size: larger;margin-left: 10px; font-family: Arial;">Jobs</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav"></ul>
                </div>
            </div>
        </nav>
        <div class="login-form well well-lg rounded-4">
            <h1 class="text-center" style="font-weight:bolder ; font-size:xx-larger;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ; margin-bottom: 25px;">LOGIN</h1>
            <form role="form" action="logincheck.php" method="post" onsubmit="return validateForm()">
                <div class="input-group mb-3">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                </div>
                <button type="submit" class="btn btn-info btn-block">Log In</button>
                <p class="text-center" style="margin-top: 25px;">Don't have an account yet? <a href="signup.php">Sign Up</a></p>
            </form>
            <div id="error-msg" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <p class="text-danger">Username or Password is Wrong</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    
</body>
</html>
