<?php
session_start();
include_once "includes/config.php";
include_once "header.php";

if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
}


?>
    <body>
        <div class = "wrapper">
            <section class = "users">
                <header>
                    <div class = "content">
                        <?php
                            $sql=mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                            if(mysqli_num_rows($sql)>0){
                                $row = mysqli_fetch_assoc($sql);
                            }
                        ?>
                        <img src="includes/images/<?php echo $row['profile_picture'];?>" alt="">
                        <div class="details">
                            <span><?php echo $row['firstname']. " ".$row['lastname'];?></span>
                            <p><?php echo $row['user_status'];?></p>
                        </div>
                    </div>
                    <a href="includes/logout.php?logout_id=<?php echo $row['unique_id'];?>" class = "logout">Logout</a>
                </header>
                <div class = "search">
                    <span class="text">Select the user to start chat</span>
                    <br>
                    <input type="text" placeholder="Enter name to search...">
                    <button><i class = "fas fa-search"></i></button>
                </div>
                <div class = "users-list"></div>
            </section>
        </div>
        <script type="text/javascript" src="JS/users.js"></script>
    </body>
</html>