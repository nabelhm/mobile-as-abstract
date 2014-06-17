<?php

namespace Cubalider\Component\Mobile\Model;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
class Mobile
{
    /**
     * @var string
     */
    private $number;

    /**
     * @param string $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }
}