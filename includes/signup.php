<?php
session_start();
include_once "config.php";

$fname = mysqli_real_escape_string($conn, $_POST["fname"]);
$lname = mysqli_real_escape_string($conn, $_POST["lname"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);
$phoneNumber = mysqli_real_escape_string($conn, $_POST["phone"]);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phoneNumber) && !empty($fname)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE email_address = '{$email}'");
        if(mysqli_num_rows($sql)>0){
            echo "this email already exist";
        }else{
            if(isset($_FILES["image-input"])){
                $img_name = $_FILES["image-input"]["name"];
                $img_type = $_FILES["image-input"]["type"];
                $tmp_name = $_FILES["image-input"]["tmp_name"];
                $img_explode = explode('.',$img_name);
                $img_ext = end($img_explode);
                $extensions = ["jpeg","png","jpg"];

                if(in_array($img_ext,$extensions)==true){
                    $type = ["image/jpeg","image/jpg","image/png"];
                    if(in_array($img_type,$type)==true){
                        $time = time();
                        $new_img_name =$time.$img_name;
                        if(move_uploaded_file($tmp_name,"images/$new_img_name")){
                            $rand_id = rand(time(),1000000000);
                            $status = "online";
                            $encrypt_pass = md5($pwd);

                            $insert_query = mysqli_query($conn, "INSERT INTO users (unique_id, firstname, lastname, email_address, phone_number, pwd, profile_picture, user_status)VALUES ({$rand_id},'{$fname}', '{$lname}', '{$email}','{$phoneNumber}', '{$encrypt_pass}','{$new_img_name}','{$status}')");
                            if($insert_query){
                                $select_sql2=mysqli_query($conn, "SELECT * FROM users WHERE email_address = '{$email}'");
                                if(mysqli_num_rows($select_sql2)>0){
                                    $result = mysqli_fetch_assoc($select_sql2);
                                    $_SESSION['unique_id'] = $result['unique_id'];
                                    echo "success";
                                }else{
                                    echo "this email does not exist";
                                }
                            }else{
                                echo "something went wrong, Please try again";
                            }}
                    
                    }else{
                        echo "Please upload an image file (jpg, png, jpeg)";
                    }
                }else{
                    echo "Please upload an image file (jpg, png, jpeg)";
                }
            }
        }
    }else{
        echo "$email is not valid email";
    }
}else{
    echo "All input field are required!";
}