<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <?php
    // 
    if(isset($_GET['upload']))
    {
      $upload = $_GET['upload'];

      if($upload === 'nothing')
      {
        echo "<script>alert('Masukkan gambar terlebih dahulu');</script>";
      } else 
      {

      }
    } else
    {
      $upload = '';
    }

    if(isset($_GET['confirm']))
    {
      $confirm = $_GET['confirm'];

      if($confirm === 'false')
      {
        echo "<script>alert('konfirmasi password tidak cocok');</script>";
      } else
      {

      }
    } else 
    {
      $confirm = '';
    }


    if(isset($_GET['message']))
    {
      $message = $_GET['message'];

      if($message === 'success')
      {
        echo "<script>alert('User baru berhasil ditambahkan');</script>";
      }else
      {
        echo "<script>alert('Ada masalah saat melakukan register');</script>";
      }

    }else
    {
      $message = '';
    }
  
  ?>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
              </div>
              <form action="function_regADM.php" class="user" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="Name" placeholder="Nama Lengkap" name="nama">
                </div>
                <div class="form-group">
                  <input type="textarea" class="form-control form-control-user" id="Alamat" placeholder="Alamat" name="alamat">
                </div>
                <div class="form-group">    
                  <input type="text" class="form-control form-control-user" id="NoHp" placeholder="No Handphone" name="nohp">
                </div>
                    <!-- <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div> -->
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Alamat Email" name="email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Konfirmasi Password" name="password2">
                  </div>
                </div>
                <div class=form-group>
                    <div class="custom-file">
                      <input type="file" name="fotoProfil" id="fotoProfil" class="custom-file-input">
                      <label for="fotoProfil" class="custom-file-label"> Pilih foto profil anda .... </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block" name="register"> Register </button>
                <!-- <hr> -->
                <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                  <i class="fab fa-google fa-fw"></i> Register with Google
                </a>
                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                  <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                </a> -->
              </form>
              <!-- <hr> -->
              <div class="text-center">
                <a class="small" href="forgot-password.php">Lupa Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Sudah punya akun? Login!</a>
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
