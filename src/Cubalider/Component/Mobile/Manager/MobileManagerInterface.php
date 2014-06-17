<?php

namespace Cubalider\Component\Mobile\Manager;

use Cubalider\Component\Mobile\Model\Mobile;

/**
 * @author Yosmany Garcia <yosmanyga@gmail.com>
 */
interface MobileManagerInterface
{
    /**
     * Adds given mobile.
     *
     * @param Mobile $mobile
     *
     * @return void
     */
    public function add(Mobile $mobile);

    /**
     * Picks a mobile using given criteria.
     *
     * @param mixed $criteria
     *
     * @return Mobile|null The mobile or null if nothing is found
     */
    public function pick($criteria);

    /**
     * Removes given mobile.
     *
     * @param Mobile $mobile
     *
     * @return void
     */
    public function remove($mobile);
}