

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
  <!-- <?php include("includes/header.php"); ?> -->

  <div class="container">
    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login page</p>

    <form style="max-width: 60%; margin: auto;" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 m-auto">
            <input type="submit" name="login-submit" id="login-submit" tabindex="4"
              class="form-control btn btn-login btn-primary" value="Log In">
          </div>
        </div>
      <div class="form-group">
        <div class="row">
          <div class="col-sm-offset-3 m-auto">
          <p class="text-center text-muted mt-5 mb-0">Not have already an account? <a href="./admin/register.php"
                      class="fw-bold text-body"><u>Ragistration Now</u></a></p>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
</body>

</html>