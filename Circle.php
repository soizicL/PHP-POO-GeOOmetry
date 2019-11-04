<?php
namespace Geoometry;

class Circle extends Shape

{
    const PI = 3.14159;

    /**
     * @var float
     */
    private $radius;

    /**
     * Circle constructor.
     * @param string $color
     */
    public function __construct(float $radius)
    {
        $this -> setRadius(abs($radius));
    }

    // GETTERS AND SETTERS

    /**
     * @return float
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @param float $radius
     * @return Circle
     */
    public function setRadius(int $radius): Circle
    {
        if ($radius <= 0) {
            throw new LogicException('Error message !!!');
        } else {
            $this->radius = $radius;
            return $this;
        }
    }

    /**
     * @return string
     */
    public function __toString() : string
    {
        return '<div style="width:' . $this->getRadius() . 'px;
                height:' . $this->getRadius() . 'px;
                border-radius:50%;
                background:' . parent::getColor() . ';">
                </div>';
    }

    /**
     * @return int
     */
    public function getDiameter(): int
    {
        return 2 * $this->getRadius();
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return $this->getDiameter() * self::PI;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return (($this ->radius) * ($this ->radius)) * self::PI;
    }
}
