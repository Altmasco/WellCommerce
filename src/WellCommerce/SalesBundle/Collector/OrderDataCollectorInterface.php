<?php
/*
 * WellCommerce Open-Source E-Commerce Platform
 * 
 * This file is part of the WellCommerce package.
 *
 * (c) Adam Piotrowski <adam@wellcommerce.org>
 * 
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 */

namespace WellCommerce\SalesBundle\Collector;

use WellCommerce\SalesBundle\Visitor\OrderVisitorInterface;

/**
 * Interface OrderDataCollectorInterface
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
interface OrderDataCollectorInterface extends OrderVisitorInterface
{
    /**
     * @return string
     */
    public function getDescription();
}