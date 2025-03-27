<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: user.php");
    }
    include_once "header.php";
?>

<body>
    <div class="pad">
    <section class = "sign-up">
        <header><b>Makhoba Connect</b></header>
        
        <form action="includes/formhandler.php" method = "post" autocomplete="off">
            <div class="error-field">Error</div>
            <div class ="name-detail">
                <div class = "input-field" id="fname">
                    <label for="fname">First Name </label>
                    <input type="text" name = "fname" placeholder = "First Name" required/>
                </div>
                <div class = "input-field" id="lname">
                    <label for="lname">Last Name </label>
                    <input type="text" name="lname" placeholder = "Last Name" required/>
                </div>
            </div>
            <div class = "input-field">
                <label for="email">Email</label>
                <input type="email" name = "email" placeholder="Enter email address" required>
            </div>
            <div class = "input-field">
                <label for="phone">Phone</label>
                <input type="tel" name = "phone" placeholder="(012-345-6789)" required>
            </div>
            <div class = "input-field">
                <label for="pwd">Password</label>
                <input id="password" type="password" name = "pwd" placeholder="Enter password" required>
                <i class="fas fa-eye"></i>
            </div>
            <div class="input-field">
                <label for="Rpwd">Confirm Password</label>
                <input id="Rpassword" type="password" name = "Rpwd" placeholder="Confirm password" required>
                <i class="fas fa-eye"></i>
            </div>

            <div class="input-file">
                <label for="image-input">Profile image</label>
                <input name = "image-input" type="file" required>
            </div>

            <div class="button">
                <input type="submit" name="submit" value="START CHATS" >
            </div>
            
            
        </form>
        <p class="link">already have an account? <a href="login.php">sign in</a></p>

    </section>
</div>
<script type="text/javascript" src="JS/hide_password.js"></script>
<script type="text/javascript" src="JS/signup.js"></script>
</body>
</html>
