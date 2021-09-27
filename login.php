<?php
error_reporting(0);

// input fields 
$email = input_field($_POST["email"]);
$password = input_field($_POST["password"]);

// error variables 
$emailErr = $passwordErr  = "";

// sample users
$users = [
    "sanket@gmail.com" => "Sanket123",
    "shashank@gmail.com" => "Shashank123",
    "prashant@gmail.com" => "Prashant123"
];

// validation
if (isset($_POST["sub"])) {

    // email validation 
    if (empty($email)) {
        $emailErr = "Please Enter Email Address.";
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
        $emailErr = "Invalid Email Address.";
    }

    // password validation 
    if (empty($password)) {
        $passwordErr = "Password is required.";
    } else if (!preg_match("/^[a-zA-Z0-9]{3,16}+$/", $password)) {
        $passwordErr = "Length of password should be between 4, 16 characters.";
    }

    $flag = FALSE;
    if ($emailErr == "" && $passwordErr == "") {
        foreach ($users as $emailId => $upass) {
            if ($email == $emailId && $password == $upass) {
                $flag = True;
                break;
            }
        }
        if ($flag) {
            header("Location: index.php");
            exit();
        } else {
            $msg = "*** User Does not Exist. ***";
            $color = "danger";
        }
    }
}

// trim function 
function input_field($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!-- navbar -->
<?php
include("nav.php");
?>
<!-- main content -->
<div class="container p-5">
    <div class="mt-5 wrapper">
        <div id='alert' class='alert alert-<?php echo $color; ?> position-absolute translate-middle top-0 start-50 w-50 text-center pt-3'><?php echo $msg; ?></div>
        <?php echo $cred; ?>
        <form class="form-signin p-4 border rounded" method="POST">
            <div class="text-center">
                <img src="images/circle.png" class="my-2" alt="" width="150rem" height="">
            </div>
            <h3 class="py-3 text-secondary">Login</h3>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="err" class="form-text text-danger"><?php echo $emailErr; ?></small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                <small id="err" class="form-text text-danger"><?php echo $passwordErr; ?></small>
            </div>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" id="check" onclick="show();"> Show Password
                </label>
            </div>
            <!-- Button trigger modal -->
            <button type="submit" class="btn btn-warning btn-block" name="sub" data-toggle="modal" data-target="#exampleModal">Login</button>
            <!-- Modal -->

        </form>
    </div>
</div>
<!-- footer -->
<?php
include("footer.php");
?>
<!-- Custom JS -->
<script src="js/fadeout.js"></script>
<script>
    const show = () => {
        let password = document.getElementById("password");
        if (password.type == "password") {
            password.type = "text";
        } else {
            password.type = "password";
        }
    }
</script>
</body>

</html>