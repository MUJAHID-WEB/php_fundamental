<?php
if (isset($_POST['btn'])) {
    $username = $_POST['user_name'];
    // print_r($_FILES['img']);
    $image = $FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];
    move_uploaded_file($tmp_name, "upload/".$image);

    $email = $_POST['email'];
    $password = $_POST['password'];
}
?>


<h3>Username:
    <?php if (isset($username)) {
        echo $username;
    } ?>
</h3>
<img src="upload/<?php if(isset($image)) {echo $image;} ?>" alt="">
<h3>Email:
    <?php if (isset($email)) {
        echo $email;
    } ?>
</h3>
<h3>Password:
    <?php if (isset($password)) {
        echo $password;
    } ?>
</h3>
<br>