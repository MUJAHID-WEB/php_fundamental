<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in PHP</title>
</head>

<body>

    <form action="contact.php" method="POST" enctype="multipart/form-data">
        <label>Username</label>
        <input type="text" name="user_name"> <br><br>
        <label>Image</label>
        <input type="file" name="img"> <br><br>
        <label>Email</label>
        <input type="email" name="email"> <br><br>
        <label>Password</label>
        <input type="Password" name="password"> <br><br>
        <br>
        <input type="submit" value="Submit Data" name="btn">
    </form>

</body>

</html>