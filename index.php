<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body style="padding: 25px;">

    <?php
    echo "Hello Mujahid!! </br></br>" ;

// variables

    $one= "Hello";  //string
    $two = 123;     //Integer
    $three = 12.5;  //Float
    $four = true;   //boolean
    $five = array(123, 'Mujahid'); //Array
    $six = NULL;    //NULL

    echo var_dump($one);


    echo " </br></br>" ;

// if else
    $a = 5;
    $b = 3;
    if ($a < $b){
        echo "A is bigger";
    }else if($a > $b){
        echo "B is Smaller";
    }else{
        echo "Both are false" ;
    }

    echo " </br></br>" ;

    //

    ?>
</body>
</html>