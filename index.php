<?php

//1. Write a simple PHP class which displays the following string.
//'MyClass class has initialized !'

class MainClass
{
    public function __construct()
    {
        echo 'Q1 : MyClass class has initialized !';
    }

}

$newClass = new MainClass;
?>
<br>

<?php

//2. Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class. 

class Message
{
    public $message='Hello All, I am ';
    public function introduce($name)
    {
        return $this->message.$name;
    }
}
$newMessage = new Message('Scott');
echo 'Q2 : '.$newMessage->introduce('Scott').'.';
?>
<br>

<?php

//3. Write a PHP class that calculates the factorial of an integer.

class factorial_of_a_number
{
  protected $number;
  public function __construct($num)
   {
        if (!is_int($num))
	   {
	      throw new InvalidArgumentException('Not a number or missing argument');
       }
        $this->number = $num;
	}
    public function result()
    {
        $factorial = 1;
        for ($i = 1; $i <= $this->number; $i++)
	    {
	        $factorial *= $i;
        }
	   return $factorial;
	}
}
$newfactorial = New factorial_of_a_number(10);
echo 'Q3 : '.$newfactorial->result();
?>
<br>

<?php

// 4. Write a PHP class that sorts an ordered integer array with the help of sort() function. 

class sortedArray
{
    protected $_asort;
    
    public function __construct(array $asort)
    {
        $this->_asort = $asort;
    }
    public function array_sort()
    {
        $sortedArray = $this->_asort;
        sort($sortedArray);
        return $sortedArray;
    }
}
$sorted_array = new sortedArray(array(11, -2, 4, 35, 0, 8, -9));
echo "Q4 : ";
print_r($sorted_array->array_sort());
?>
<br>

<?php

// 5. Calculate the difference between two dates using PHP OOP approach. 

$adate = new DateTime("1981-11-03");
$bdate = new DateTime("2013-09-04");
$interval = $adate->diff($bdate);
echo "Q5. Difference : " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days ";
?>
<br>

<?php

// 6. Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.

class MyCalculator {
    private $_value1, $_value2;
    public function __construct( $value1, $value2 ) 
    {
        $this->_value1 = $value1;
        $this->_value2 = $value2;
    }
    public function add() {
        return $this->_value1 + $this->_value2;
    }
    public function subtract() {
        return $this->_value1 - $this->_value2;
    }
    public function multiply() {
        return $this->_value1 * $this->_value2;
    }
    public function divide() {
        return $this->_value1 / $this->_value2;
    }
    }
    $my_Calculator = new MyCalculator(12, 6); 
    echo "Q6 : ";
    echo $my_Calculator-> add()."\n"; // Displays 18 
    echo $my_Calculator-> multiply()."\n"; // Displays 72
    echo $my_Calculator-> subtract()."\n"; // Displays 6
    echo $my_Calculator-> divide()."\n"; // Displays 2
?>
<br>

<?php

// 7. Write a PHP script to convert a string to Date and DateTime.

$newformat = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');

echo "Q7 : ". $newformat;
?>