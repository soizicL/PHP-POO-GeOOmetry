<?php
namespace Geoometry;
/**
 * Class Rectangle
 */
class Rectangle extends Shape
{
    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;



    /**
     * Rectangle constructor.
     * @param int $width
     * @param int $height
     */
    public function __construct(int $width, int $height)
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return Rectangle
     */
    public function setHeight(int $height): Rectangle
    {
        if (($this->height = $height) <= 0)
        {
            throw new \LogicException('une exception a été lancee');
        }else {

            return $this;
        }

    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): rectangle
    {
        if (($this->width = $width) <= 0)
        {
            throw new \LogicException('Error message !!!');
        }else {

            return $this;
        }

    }

      /**
     * @return string
     */
    public function __toString(): string
    {
        return '<div style="width:' . $this->getWidth() . 'px;
                           height:' . $this->getHeight() . 'px;
                           background:' . $this->getColor() . ';"></div>';
    }

    /**
     * @return float
     */
    public function getPerimeter(): float
    {
        return ($this -> width + $this -> height) *2;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return $this -> width * $this -> height;
    }
}