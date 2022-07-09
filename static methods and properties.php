<?php
class Circle {
    const PI = 3.14;

    public static function lengCircle(int $rad) {
        return 2 * self::PI * $rad;
    }

    public static function circleArea(int $rad) {
        return self::PI * pow($rad, 2);
    }
}

$cir = new Circle;

echo get_class($cir);
?>