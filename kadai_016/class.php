<!DOCTYPE>

<head>
  <meta charest="utf-8">
</head>

<body>
  <p>
<?php

class Food{

  private $name;
  private $price;

  public function __construct(string $name, int $price) {
    $this ->name = $name;
    $this ->price = $price;
  }

  public function show_price(int $price) {
    echo '<br>'. $this ->price;
  }
};

$food = new Food('potato',250);

print_r($food);

echo '<br>';

class Animal{

  private $name;
  private $height;
  private $weight;

  public function __construct(string $name, int $height, int $weight){
    $this ->name =$name;
    $this ->height =$height;
    $this ->weight =$weight;
  }

  public function show_height(int $height) {
    echo '<br>'. $this ->height;
  }
};

$Animal = new Animal('dog',60,5000);

print_r($Animal);

$food->show_price(250);
$Animal -> show_height(60);

?>
</p>
</body>