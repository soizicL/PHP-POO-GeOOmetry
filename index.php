<?php

function myAutoload($className) {
    $className = str_replace('Geoometry\\', '', $className);
    $className = str_replace('\\', '/', $className);
    require $className. ".php";
}

spl_autoload_register('myAutoload');

use Geoometry\Rectangle;
use Geoometry\Square;
use Geoometry\Shape;
use Geoometry\Circle;


echo '<br/>';
echo '<br/>---------------INSTANCIATION NOUVEAU RECTANGLE- 1------------<br/>';
echo '<br/>';


try {
    $rectangle = new Rectangle(200, 150);
    $rectangle -> setColor('black');
    echo $rectangle. '<br/>';
    echo 'l\'aire du rectangle est de : ' . $rectangle -> getArea(). 'px<sup>2</sup>' . '<br/>';
    echo 'le perimetre du rectangle est de : ' . $rectangle -> getPerimeter().'px<sup>2</sup>' . '<br/>';
} catch (LogicException $e) {
    echo $e -> getMessage();
}

echo '<br/>';
echo '<br/>---------------INSTANCIATION NOUVEAU RECTANGLE- 2------------<br/>';
echo '<br/>';

try {
    $rectangle = new Rectangle(200, -80);
    $rectangle -> setColor('blue');
    echo 'l\'aire du rectangle est de : ' . $rectangle -> getArea(). 'px<sup>2</sup>' . '<br/>';
    echo 'le perimetre du rectangle est de : ' . $rectangle -> getPerimeter().'px<sup>2</sup>' . '<br/>';
}catch (LogicException $e) {
    echo $e -> getMessage(). '<br>';
}
echo $rectangle -> __toString();


echo '<br/>';
echo '<br/>---------------INSTANCIATION NOUVEAU CARRE------------<br/>';
echo '<br/>';

try {
    $square = new Square(300);
    $square->setColor('red');
    echo $square . '<br>';
    echo "le perimetre du carré est de :" . $square->getPerimeter() . 'px<sup>2</sup>';
} catch (LogicException $e) {
    echo $e->getMessage() .'<br>';
}

echo '<br/>';
echo '<br/>---------------INSTANCIATION NOUVEAU CERCLE------------<br/>';
echo '<br/>';


try {
    $circle = new Circle(3.4);
    $circle->setColor('green');
    echo $circle, '<br>';
    echo "le perimetre du cercle est de : " . $circle->getPerimeter() . 'px<sup>2</sup>';
} catch (LogicException $e) {
    echo $e->getMessage() , '<br>';
}

echo $circle -> __toString();



