<?php

# Taks #01
# Take a number as parameter and returns its factorial. 
function fact($n){
  if($n === 1) return 1;
  return $n * fact($n -1);
}

echo "Fact(5) => " .fact(5) . "\n";
echo "Fact(6) => " . fact(6) . "\n";

# Taks #02
# Create arithmetic functions with two and three variables as arguments using function overloading that returns addition, subtraction, multiplication and division of two or three numbers supplied as arguments. 

class Arithmatic{

  function sum($args) {
    $total = 0;
    foreach($args as $arg){
      $total+=$arg;
    }
    return $total;
  }
  function dif($args) {
    $total = 0;
    foreach($args as $arg){
      $total-=$arg;
    }
    return $total;
  }
  function mul($args) {
    $total = 1;
    foreach($args as $arg){
      $total*=$arg;
    }
    return $total;
  }
  function div($args) {
    $total = 1;
    foreach($args as $arg){
      $total/=$arg;
    }
    return $total;
  }

  // NEW way to overload functions in php... :(
  function calArithmetic(){
    $args = func_get_args();
    return [
      'addition' => $this->sum($args),
      'subtraction' =>$this->dif($args),
      'multiplication' =>$this->mul($args),
      'division' =>$this->div($args)
    ];
  }

}

$calc = new Arithmatic();
$result = $calc->calArithmetic(1,2,3,4,5);
print_r($result);

# Taks #03
# Are there any other alternatives apart from the default argument hack to implement function overloading  in PHP? Explain each with an example.

# Ans: We know that php doesnot support the function overloading as we see in others oo programming languages. But their exists hacks from that we can achieve this overloading concept. The traditional way to use __call() function to invoke other functions. But i found it difficult to implement and found simpler approch, that is through func_get_args() method as shown in task #2. func_get_args() allow us to call inside any function. This function returns the arguments passed inside function in the form of array.

# Taks #04
# Create an e-mail validator that takes email via HTML form from the user and then validates it on the server using the following conditions:
# Should contain only one ‘@’
# Does not start with a number
# Should not contain spaces
# Length should not be greater than 20
# Should only end with .com or .edu.pk or .co.uk

// HINT: ^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$

function validate($email){

  $at = count(preg_split("/@/",$email)) -1; # Split the email based on the occurance of @  

  $startPat = preg_match("/^[a-zA-Z]/",$email);

  $space = count(preg_split("/ /",$email)) -1; # Split the email based on the occurance of white space. 

  $len = strlen($email);

  $end = preg_match("/.com$/", $email) ||  preg_match("/.edu.pk$/", $email) || preg_match("/.co.uk$/", $email);

  if($at === 1 && $startPat && $space === 0 && $len <= 20 && $end) return true;

  return false;
}

$email = "bilal@gmail.com";
echo (validate($email))? "VALID $email \n" : "INVALID!!! $email\n";

$email = "bilal@gmail.co.uk";
echo (validate($email))? "VALID $email \n" : "INVALID!!! $email\n";

$email = "bilal@protonmail.edu.pk";
echo (validate($email))? "VALID $email \n" : "INVALID!!! $email\n";

$email= "123@gmail.com";
echo (validate($email))? "VALID $email \n" : "INVALID!!! $email\n";

$email= "bilalgmail.com";
echo (validate($email))? "VALID $email \n" : "INVALID!!! $email\n";

$email= "bilal@@gmail.com";
echo (validate($email))? "VALID $email \n" : "INVALID!!! $email\n";

$email= "bilal@gmail.github";
echo (validate($email))? "VALID $email \n" : "INVALID!!! $email\n";

$email= "bi lal@gmail.com";
echo (validate($email))? "VALID $email \n" : "INVALID!!! $email\n";


?>