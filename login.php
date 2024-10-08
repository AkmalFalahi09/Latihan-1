<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="login.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

        <form action="proses_login.php" method="post">

          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Nama Pegawai</label>
            <input name="nama_pegawai" type="text" id="form3Example3" class="form-control form-control-lg"
              placeholder="masukkan nama pegawai" />
          </div>

          <div data-mdb-input-init class="form-outline mb-3">
            <label class="form-label" for="form3Example4">Password</label>
            <input name="password" type="password" id="form3Example4" class="form-control form-control-lg"
              placeholder="masukkan password" />
          </div>
          <div class="text-center text-lg-start mt-4 pt-2">
              <input type="submit" name="login" value="login" class="btn btn-primary btn-lg">
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php" class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>