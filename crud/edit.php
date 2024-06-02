<?php
    include("function.php");

    $objCrudAdmin = new crudApp();

    $students = $objCrudAdmin->display_data();

    if(isset($_GET['status'])){
        if($_GET['status']='edit'){
            $id = $_GET['id'];
            $returndata= $objCrudAdmin->display_data_by_id($id);
        }
    }
    if(isset($_POST['edit_btn'])){
        $msg =$objCrudAdmin->update_data($_POST);
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>CRUD APP</title>
  </head>
  <body>
    <div class="container my-4 p-4 shadow">
        <h2><a style="text-decoration: none;" href="index.php">DarunIT Student Database</a></h2>
        <form class="form" action="" method="post" enctype="multipart/form-data">
        <?php if(isset($msg)){echo $msg;} ?>
            <input class="form-control mb-2" type="text" name="u_std_name" value="<?php echo $returndata['std_name']; ?>">
            <input class="form-control mb-2" type="number" name="U_std_roll" value="<?php echo $returndata['std_roll']; ?>">
            <label for="image">Upload Your Image</label>
            <input class="form-control mb-2" type="file" name="u_std_img" >
            <input type="hidden" name="std_id" value="<?php echo $returndata['id']; ?>">
            <input type="submit" value="Update Information" name="edit_btn" class="form-control bg-warning">
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>