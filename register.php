<!DOCTYPE html>
<?php


require_once "pdo.php";

if ( isset($_POST['teacher_name']) && isset($_POST['teacher_email'])
     && isset($_POST['teacher_password'])) {
    //$_POST['teacher_name'] = $_POST['teacher_name'].$POST['teacher_secondname'];

    $sql = "INSERT INTO teachers (teacher_name, teacher_email, teacher_password)
              VALUES (:teacher_name, :teacher_email, :teacher_password)";
    $stmt = $pdo->prepare($sql);


    $stmt->execute(array(
        ':teacher_name' => $_POST['teacher_name'],
        ':teacher_email' => $_POST['teacher_email'],
        ':teacher_password' => $_POST['teacher_password']));
    header( 'Location: login.php' ) ;
    return;
}
?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Teacher - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create Your Teacher Account!</h1>
              </div>
              <form class="user" method="post" oninput='password_confirm.setCustomValidity(password_confirm.value != password.value ? "Passwords do not match." : "")'>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="teacher_name" id="teacher_name" required placeholder="First Name">
                  </div>
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="teacher_secondname" id="teacher_secondname" required placeholder="Second Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="teacher_email" name="teacher_email" required placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"  aria-describedby="passwordHelpBlock" id="teacher_password" name="teacher_password" required placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password_confirm" name="password_confirm" required placeholder="Repeat Password">
                  </div>
                  <small id="passwordHelpBlock" class="form-text text-muted">
                    <script type="text/javascript">
                    // Password retype code in Javascript
                    function matchpass(){
                    var firstpassword=document.f1.teacher_password.value;
                    var secondpassword=document.f1.password_confirm.value;

                    if(firstpassword==secondpassword){
                    return true;
                    }
                    else{
                    alert("password must be same!");
                    return false;
                    }
                    }
                    </script>

                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </small>
                </div>
                <input type="submit" class="btn btn-primary btn-user btn-block" value="Register Account" </>
                <hr>
                <a href="index.php" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
