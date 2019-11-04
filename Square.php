<?php
namespace Geoometry;

class Square extends Rectangle
{

    public function __construct(int $width)
    {
        return parent::__construct($width, $width);
    }

}