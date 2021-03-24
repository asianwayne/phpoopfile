
//介绍了oop 的class , construct,destruct, instance ,variables等用法， 还有static 的用法，static 直接读取class变量而无需实例化
require 'header.php';

/* class Car
{
  private $color = 'red';
  private $weight = 2000;
  static public $availableColors  = array(
    'red','blue','yellow','brown'
  );

  static $counter = 0;
  public $mycounter = 0;

  public function __construct($color = null,$weight = null) { //括号里传递变量的话在执行class的时候就必须要传递参数，可以设置 = null ,来表示值为空,也可以定义任何一个值，来表示值可选；在construct 传递的参数传递到class执行参数里
    $this->mycounter++;
    $this->color = $color;
    $this->weight = $weight;
    echo "this is first to excute:" . PHP_EOL;
    echo $this->color . PHP_EOL;

    //Car::$counter++;
    //在class里面的话也可以用self,  指向的是class本身
    self::$counter++;  //这个就是Car::$counter++;
  }

  public function get_color() {
    return $this->color;
  }

  // public function __destruct() {  //destruct 函数  跟construct函数相反 在所有method结束后执行 
  //   echo "I am dead " . $this->color . PHP_EOL;
  // }

}

$myCar = new Car('yellow',5000);  //创建实例 create instance 
$myCar2 = new Car('blue',20000);

echo $myCar->get_color() . PHP_EOL;  //PHP EOL是空格符 或换行符 
echo $myCar2->get_color() . PHP_EOL;
echo "<br>";

unset($myCar);  //unset函数销毁变量, 所以下面再执行$myCar->availableColors(); 会显示变量不存在
//sleep(5);  //sleep 函数延迟执行当前脚本  设置5秒的话 就是 5秒后才会执行这段php 


//每当创建class实例时候class就会带 available属性  
//$myCar->availableColors();
//$myCar2->availableColors; //这种写法是进入变量，带括号是进入函数；

//static property 和 normal instance property 的区别
//static property 是以static 作为标记， normal instance是直接以 $变量作为开始
//static properties are associate to the class; not instance, and normal instance like color weight and availabel class 
//are associate to the instance; 
//如果把avaiblabel 变量设置为static public, 那么要调用这个变量的方式就变成了
Car::$availableColors;
$mycar = new Car();
 // 每创建一个实例 $counter 加1 ；

echo Car::$counter . ' ' . $mycar->mycounter . PHP_EOL;

//$this->mycounter; 这个就是指向class 下面定义的变量 $couter, 以实例形式的话 变量前面美元符不用加

//$mycar->color;  常规的不需要变量符 $
//Car::$availableColors; 
//
$mycar2 = new Car();
echo Car::$counter . ' ' . $mycar->mycounter . PHP_EOL;

$mycar3 = new Car();
echo Car::$counter . ' ' . $mycar->mycounter . PHP_EOL; */
