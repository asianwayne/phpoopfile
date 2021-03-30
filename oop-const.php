//const  定义php 常量， 类的常量
class Math {
  public $color;
  public $material;
  const PI = '3.14';

  const HIGHSCORE = 'NUM1';
  const HIGHSCORE1 = 'NUM2';
  const HIGHSCORE2 = 'NUM3';

  const COLOR_RED = 'RED';
  const COLOR_GREED = 'GREEN';


  public function __construct($color,$material) {
    $this->color = $color;
    $this->material = $material;

  }
  public function getMath() {
    self::PI;
  }
}

$myScore = new Math(Math::HIGHSCORE,MATH::COLOR_RED);

echo Math::PI;

var_dump($myScore);
