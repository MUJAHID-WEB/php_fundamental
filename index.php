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
    $c = 2;
    if ($a < $b){
        echo "A is bigger";
    }else if($a > $b){
        echo "B is Smaller";
    }else{
        echo "Both are false" ;
    }

    echo " </br></br>" ;

    // Operators: + - * / % **, = += -= /= *= %= , == ===  !== > < >= <=, , &&, ||, !
    
    echo $a%$b;

    echo " </br></br>" ;

    echo $a += 10;

    echo " </br></br>" ;

    if ($a === $b){
        echo "A and B is equal";
    }else{
        echo "false" ;
    }

    echo " </br></br>" ;

    $a++;
    echo $a;

    echo " </br></br>" ;

    if($a > $b && $a > $c){
        echo "A";
    }

    echo " </br></br>" ;

    if($a > $b || $a > $c){
        echo "A";
    }

    echo " </br></br>" ;

    // switch
    switch($a){
        case($a > $b && $a < $c):
            echo "A";

            break;
        default:
            echo "False";
    }



    echo " </br></br>" ;
    // Loop: For, While, Dowhile, forEach


    for ($i = 1; $i <= 100; $i++) {
        echo $i.', ';
    }

    echo " </br></br>" ;

    for ($i = 1; $i <= 100; $i++) {
        if($i%2 != 0){
            echo $i.', ';
        }
    }


    echo " </br></br>" ;

    $j = 1;

    while($j <= 50 ){
        echo $j.', ';
        $j++;
    }

    echo " </br></br>" ;


    echo " </br></br>" ;


    echo " </br></br>" ;


    echo " </br></br>" ;


    echo " </br></br>" ;


    echo " </br></br>" ;


    ?>
</body>
</html>