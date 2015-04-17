<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Migration\MapReader;

use Migration\Config;

/**
 * Class MapReaderSalesOrder
 */
class MapReaderSalesOrder extends MapReaderAbstract
{
    /**
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        parent::__construct($config);
        $this->init($this->config->getOption('sales_order_map_file'));
    }
}