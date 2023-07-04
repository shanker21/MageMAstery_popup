<?php

namespace MageMastery\Popup\Model\ResourceModel\Popup;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MageMastery\Popup\Model\Popup as PopupModel;
use MageMastery\Popup\Model\ResourceModel\Popup as PopupResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PopupModel::class, PopupResourceModel::class);
    }
}
