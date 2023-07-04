<?php

namespace MageMastery\Popup\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Popup extends AbstractDb
{
    protected function _construct()
    {
        //call table name and primary id
        $this->_init('magemasetry_popup', 'popup_id');
    }

}