<?php 

$username="Rahul";

//single line comment

/* multiple
line comment */

// data storage (variables,arrays)
$x = "hello world";   //string 
$y = 3345345;         //integer
$z = 432423.324234;   //float
$d = true;            //boolean

$dsfsdf___2423423 = "variable";
$_COOKIE;
// $34234;

//arrays
$arr = [1,"Akash","Bangalore",true,23434];          // index value array
echo $arr[1];

$arr2 = array('uid'=>1,'uname'=>"Akash",'city'=>"Bangalore",'fulltime'=>true,'salary'=>23434);   // key value pair
echo $arr2['uname'];



// data in/out (echo,print())
$result = print($x.$y.$z);

if(!isset($result)) {
    echo "Print stmt did not executed successfully";
}
echo $x,$y,$z;

//operators
$c = $a++;      //arithmetic operators ( +,-,*,/,%,++,-- )  :int
$a=10; $b="10"; if($a!=$b) { echo "stmt"; }    //comparison operators ( >,<,>=,<=,==,===,!= )   :boolean
$p=10; $p+=10; $p-=10; //assignment operators ( =,+=,-=,*=,/=,%= ) 
if(!isset($a)) {}   //logical operators ( && , || , ! )  :int
($p==10) ? $p++ : $p--;  //conditional/ternary operator (condition) ? truestmt : falsestmt;


//conditional/branching stmts - if, if else, else if, switch()...case
if($age>=18 && $age<62) {
    echo "You are eligible to get a license";
}
else if ($age>=62) {
    echo "You are renew your license";
}
else if ($age>=62) {
    echo "You are renew your license";
}
else if ($age>=62) {
    echo "You are renew your license";
}
else {
    echo "You are not eligible to get a license";
}


$grade = 'B';
switch($grade) {
    case 'A+':
        echo "Marks in the range of 95-100";
        break;
    case 'A':
        echo "Marks in the range of 81-95";
        break;
    case 'B+':
        echo "Marks in the range of 71-80";
        break;
    case 'B':
        echo "Marks in the range of 61-70";
        break;
    case 'C':
        echo "Marks in the range of 51-60";
        break;
    case 'D':
        echo "Marks in the range of 41-50";
        break;
    case 'F':
        echo "Marks in the range of 0-40";
        break;
    default:
        echo "Grade mentioned is wrong";  
}


//iteration stmts - for(), while(), do...while()
$var=100;
while($var<=50) {
    if($var%2==0) {
        echo $var,"<br>";
    }
    $var++;
}

for($var=200;$var<=150;$var++) {
    if($var%2==0) {
        echo $var,"<br>";
    }
}

$var=300;
do {
    if($var%2==0) {
        echo $var,"<br>";
    }
    $var++;
}
while($var<=250);

$arr = [1,"Akash","Bangalore",true,23434];
foreach($arr as $value) {
    echo '<br>',$value;
}

//functions
function addfunc($a,$b) {
    static $s=0;
    $s++;
    return $s+$a+$b;
}
echo $s;
$sum = addfunc(324,545);


//superglobal variables


//html forms


//cookies and sessions
$cookie_name = "name";
$cookie_value = "Akash Soni";

setcookie($cookie_name,$cookie_value,time()+(86400*30));


If ( !isset ($_COOKIE[$cookie_name])) {
  		echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  		echo "Cookie '" . $cookie_name . "' is set!<br>";
  		echo "Value is: " . $_COOKIE[$cookie_name];
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
        #xuyz {

        }
        body * {

        }
    </style>
</head>
<body id="xuyz">
    Hello <?php echo $username ?>! This is PHP.
    <br><br>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="email" name="email"><br>
        Password: <input type="password" name="pwd"><br>
        <input type="submit">
    </form>

    
</body>
</html>