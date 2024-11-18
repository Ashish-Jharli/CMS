<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<?php include("includes/sidebar.php"); ?>
<?php include("includes/conn.php"); 

$fullname=$email=$username=$password="";

$fullnameErr=$emailErr=$usernameErr=$passwordErr="";

if($_SERVER['REQUEST_METHOD']=="POST"){

    if(empty($_POST['fullname'])){
        $fullnameErr = "Fullname is required";
    }else{
        $fullname = $_POST['fullname'];
    }
    
    if(empty($_POST['email'])){
        $emailErr = "Email is required";
    }else{
        $email = $_POST['email'];

        if(!preg_match("(^[-\w\.]+@([-a-z0-9]+\.)+[a-z]{2,4}$)i", $email)){
            $emailErr="Please enter correct email address";
        }
    }
    
    if(empty($_POST['username'])){
        $usernameErr = "Username is required";
    }else{
        $username = $_POST['username'];
    }

    if(empty($_POST['password'])){
        $passwordErr="password is required";
    }else{
        $password=$_POST['password'];
        $pattern="/^(?=.\d)(?=.[@#\-$%^&+=§!\?])(?=.[a-z])(?=.[A-Z])[0-9A-Za-z@#\-$%^&+=§!\?]{8,20}$/";
        if(!preg_match($pattern,$password)){
            $passwordErr="";
        }
    }
}

if(empty($fullnameErr) && empty($emailErr) && empty($usernameErr) && empty($passwordErr)){

    if (!empty($_POST['fullname']) && $password == $cpassword) {
        
        // $hash = md5($_POST['password']);
        $sql = "INSERT INTO register(fullname, email, username, password) VALUES('".$_POST['fullname']."','".$_POST['email']."','".$_POST['username']."','".$_POST['password']."')";

        if ($conn->query($sql)==true) {
            echo "inserted successfully";
        } else {
            echo "Error: ".$sql.$conn->connet_error;
        }
        
    }
}

?>
<style>
    .error{
        color:red;
    }
</style>
    <div class="col-md-10 bg-light pad">
        <h1 class="head">Register <small> Page </small></h1>
        <hr>
        <div class="container">

            <form style="max-width: 60%; margin: auto;" method="POST" enctype="multipart/form-data" action="<?php echo($_SERVER['PHP_SELF']); ?>">
            <p class="error">* required filds</p>
            <div class="form-group">
                <label for="exampleInputfullname">Full Name</label>
                <span class="error">*<?php echo $fullnameErr; ?></span>
                <input type="text" class="form-control" id="exampleInputfullname" name="fullname">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <span class="error">*<?php echo $emailErr; ?></span>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputusername">Username</label>
                <span class="error">*<?php echo $usernameErr; ?></span>
                <input type="text" class="form-control" id="exampleInputusername" name="username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <span class="error">*<?php echo $passwordErr; ?></span>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="form-group">
                <label for="CPassword">Confirm Password</label>
                <span class="error">*<?php echo $passwordErr; ?></span>
                <input type="password" class="form-control" id="CPassword" name="cpassword">
            </div>
            <div class="form-group">
                <div class="row">
                <div class="col-sm-6 col-sm-offset-3 m-auto mt-3">
                    <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                    class="form-control btn btn-login btn-primary pb-4" value="submit">
                </div>
                </div>
            <div class="form-group">
                <div class="row">
                <div class="col-sm-offset-3 m-auto">
                <p class="text-center text-muted mt-5 mb-0"> Already have an account? <a href="../login.php"
                            class="fw-bold text-body"><u>Login Now</u></a></p>
                </div>
                </div>
            </div>
            </form>
         </div>
    </div>

 <?php include("includes/footer.php"); ?>  