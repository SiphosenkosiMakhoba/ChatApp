<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: user.php");
}
include_once "header.php";
?>
<body>
    <div class="pad">
        <section class="sign-up">
            <header>Chat App</header>
            <form action="#" autocomplete="off" method="post">
                <div class="error-field"></div>
                <div class="input-field" >
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input-field" >
                    <label>Password</label>
                    <input type="password" name="pwd" placeholder="Enter your password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="button">
                    <input type="submit" name="submit" value="START CHATS">
                </div>

            </form>
            <p class="link">Not yet signed up? <a href="index.php">Sign up</a></p>
        </section>
    </div>
    <script type="text/javascript" src="JS/hide_password.js"></script>
    <script type="text/javascript" src="JS/login.js"></script>
</body>
</html>