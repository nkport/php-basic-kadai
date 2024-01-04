<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>【ページのタイトル】</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php
class Food
{
    private $name;
    private $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function showPrice()
    {
        echo $this->price . '<br>';
        return $this->price;
    }
}
class Animal
{
    private $name;
    private $height;
    private $weight;
    public function __construct($name, $height, $weight)
    {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    public function showHeight()
    {
        echo $this->height;
        return $this->height;
    }

}

$potato = new Food('potato', 250);
$dog = new Animal('dog', 60, 5000);

print_r($potato);
echo '<br>';
print_r($dog);
echo '<br>';

$potato->showPrice();
$dog->showHeight();

?>

</body>

</html>