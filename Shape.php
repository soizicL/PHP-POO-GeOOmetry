<?php
namespace Geoometry;

abstract class Shape
{

    /**
     * @var string
     */
    protected $color = 'red';

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     * @return Shape
     */
    public function setColor(string $color)
    {
        $this->color = $color;
        return $this;
    }


// METHODES ABSTRAITES

    /**
     * @return float
     */
    abstract public function getPerimeter() : float;


    /**
     * @return float
     */
    abstract public function getArea() : float;


}