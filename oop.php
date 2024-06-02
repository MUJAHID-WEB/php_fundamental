<!-- 
 Class
Access Modifier - Public, Private, Protected
Properties
Method
Object 
Constructor
-->



<?php 

    Class MyClass {                             // class
        public $x, $y, $z;                      // properties
        public function __construct($a, $b) {   // constructor
            $this->x = $a;
            $this->y = $b;

        }
        public function mysum() {               // method
           $this->z =$this->x - $this->y;
           return $this->z;
        }

    }

    $mujahid = new MyClass(100, 50);            //object
    echo $mujahid->mysum();
    echo '<br>';
    $mujahid = new MyClass(300, 50);
    echo $mujahid->mysum();
    



?>