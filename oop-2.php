//sttaic  变量教学
class Car {
  public $color = 'red';
  private $weight = 20000;
  static $counter = 0;
  public $myCounter = 0;
  static $availabelColors = ['red','beige','yellow','green'];
  public function __construct() {
    $this->myCounter++;
    self::$counter++; //self reference the class,not instance 
  }

  public static function getAvailableColors() {
    return self::$availabelColors;
  }
}

$myCar = new Car();
 // instance
$myCar->color;

echo Car::$counter . ' ' . $myCar->myCounter . PHP_EOL;  

$myCar2 = new Car();

echo Car::$counter . ' ' . $myCar2->myCounter . PHP_EOL; //这里static 的 counter 随着实例自增。 $mycounter stays the same.


echo $myCar2->getAvailableColors();
//var_dump(Car::getAvailableColors()); 
 // how you call the static function from class outside; 
 // like color, every inantance has diffrent colors so it's should be an instance property; 
 // 
