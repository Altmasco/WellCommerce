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

namespace WellCommerce\CommonBundle\DataSet\Admin;

use WellCommerce\CoreBundle\Component\DataSet\AbstractDataSet;
use WellCommerce\CoreBundle\Component\DataSet\Configurator\DataSetConfiguratorInterface;

/**
 * Class RoutingDataSet
 *
 * @author Adam Piotrowski <adam@wellcommerce.org>
 */
class RoutingDataSet extends AbstractDataSet
{
    /**
     * {@inheritdoc}
     */
    public function configureOptions(DataSetConfiguratorInterface $configurator)
    {
        $configurator->setColumns([]);
    }
}