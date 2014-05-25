<?php

namespace Cubalider\Component\Mobile\Manager;

interface MobileManagerInterface
{
    /**
     * Picks a mobile using given criteria
     *
     * @param mixed $criteria
     *
     * @return mixed
     */
    public function pick($criteria);

    /**
     * Adds given mobile
     *
     * @param mixed $mobile
     *
     * @return void
     */
    public function add($mobile);

    /**
     * Remove given mobile
     *
     * @param mixed $mobile
     *
     * @return void
     */
    public function remove($mobile);
}