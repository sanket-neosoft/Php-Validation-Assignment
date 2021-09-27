<?php
error_reporting(0);

// input fields 
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$feedback = $_POST["feedback"];

// error variables 
$nameErr = $emailErr = $phoneErr = $feedbackErr = "";

// validation
if (isset($_POST["sub"])) {

    // name validation 
    if (empty($name)) {
        $nameErr = "Please enter your Name.";
    } else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $nameErr = "Only alphabate allow";
    }

    // email validation 
    if (empty($email)) {
        $emailErr = "Please enter Email Address.";
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
        $emailErr = "Invalid Email Address.";
    }

    // phone number validation 
    if (empty($phone)) {
        $phoneErr = "Please enter your Name.";
    } else if (!preg_match("/^[6-9][0-9]{9}+$/", $phone)) {
        $phoneErr = "Only 10 digit  allow";
    }

    // feedback
    if (empty($feedback)) {
        $feedbackErr = "Please enter your Comment.";
    }

    if ($nameErr == "" && $emailErr == "" && $phoneErr == "" && $feedbackErr == "") {
        $success = "<div id='alert' class='alert alert-success text-center position-absolute start-50 top-50 w-50 translate-middle pt-3'>Feedback Submitted Succesfully</div>";
    }
}
?>

    <!-- navbar -->
    <?php
    include("nav.php")
    ?>

    <div class="container mt-5  py-5">
        <div class="row">
            <div class="col col-sm col-md my-auto text-center">
                <img src="images/circle.png" class="mb-4 logo-img" alt="">
                <h5 class="font-weight-light text-justify font-italic mx-5 mb-3 fb">We would love to hear your thoughts, suggestions, concerns or problems with anything so we can improve!</h5>
                <p class="my-5 text-muted text-center font-italic">&copy; 2017-<?php echo date("Y"); ?></p>
            </div>
            <div class="col col-sm col-md">
                <form class="p-4 border rounded" method="POST">
                    <h3 class="py-3 text-secondary">Contact Us</h3>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name">
                        <small id="err" class="form-text text-danger"><?php echo $nameErr; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                        <small id="err" class="form-text text-danger"><?php echo $emailErr; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                        <small id="err" class="form-text text-danger"><?php echo $phoneErr; ?></small>
                    </div>
                    <div class="form-group">
                        <label for="feedback">Feedback</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="3"></textarea>
                        <small id="err" class="form-text text-danger"><?php echo $feedbackErr; ?></small>
                    </div>
                    <!-- Button trigger modal -->
                    <button type="submit" class="btn btn-warning btn-block" name="sub" data-toggle="modal" data-target="#exampleModal">Submit</button>
                    <!-- Modal -->

                </form>
            </div>
        </div>
    </div>
    <!-- success msg -->
    <?php echo $success; ?>
    <!-- footer -->
    <?php
    include("footer.php");
    ?>
    <!-- Bootstrap JS -->
    <script src="fadeout.js"></script>
</body>

</html>