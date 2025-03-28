<?php
    session_start();
    include_once "header.php";
    include_once "includes/config.php";

    if(!isset($_SESSION['unique_id'])){
        hearder("location: login.php");
    }
?>

    <body>
        <div class = "wrapper">
            <section class="chat-area">
                <header>
                    <?php
                    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);

                    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id};");

                    if(mysqli_num_rows($sql)>0){
                        $row = mysqli_fetch_assoc($sql);
                    }else{
                        header("location: user.php");
                    }
                    ?>
                    <a href="user.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="includes/images/<?php echo $row['profile_picture'];?>" alt="">
                    <div class="details">
                        <span><?php echo $row['firstname']. " " .$row["lastname"];?></span>
                        <p><?php echo $row['user_status'];?></p>
                    </div>

                </header>
                <div class="chat-box">

                </div>
                <form action="#" class="typing-area">
                    <input type="text" class="incoming_id" name="incoming_id" value=<?php echo $user_id ?> hidden>
                    <input type="text" name="message" class="input-field" placeholder="Type message here..." autocomplete="off">
                    <button><i class="fab fa-telegram-plane"></i></button>
                </form>
            </section>

        </div>
        <script type="text/javascript" src="JS/chat.js"></script>
    </body>
</html>