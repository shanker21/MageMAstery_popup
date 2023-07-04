<?php

namespace MageMastery\Popup\Model;

use Magento\Framework\Model\AbstractModel;
use MageMastery\Popup\Model\ResourceModel\Popup as PopupResourceModel;
use MageMastery\Popup\Api\Data\PopupInterface;

class Popup extends AbstractModel implements PopupInterface
{
	private const POPUP_ID = 'popup_id';
    private const NAME = 'name';
    private const CONTENT = 'content';
    private const IS_ACTIVE = 'is_active';
    private const CREATED_AT = 'created_at';
    private const UPDATED_AT = 'updated_at';
    private const TIMEOUT = 'timeout';

	protected function _construct()
    {
        $this->_eventPrefix = 'magemastery_popup';
        $this->_eventObject = 'popup';
        $this->_idFieldname = 'popup_id';
        $this->_init(PopupResourceModel::class);
    }

    public function getPopupId():int
    {
        return (array) $this->getData(self::POPUP_ID);
    }
    public function setPopupId(int $popupId)
    {
        $this->setData(self::POPUP_ID, $popupId);
    }
    public function getName():string
    {
        return (string) $this->getData(self::NAME);
    }
    public function setName(string $name)
    {
        $this->setData(self::NAME, $name);
    }
    public function getIsActive():bool
    {
        return (string) $this->getData(self::IS_ACTIVE);   
    }
    public function setIsActive(bool $isactive)
    {
        $this->setData(self::IS_ACTIVE, $isactive);
    }
    public function getContent():string
    {
        return (string) $this->getData(self::CONTENT);
    }
    public function setContent(string $content)
    {
        $this->setData(self::CONTENT, $content);
    }

    public function getCreatedAt():string
    {
        return (string) $this->getData(self::CREATED_AT);
    }
    public function setCreatedAt(string $createdAt)
    {
        $this->setData(self::CREATED_AT, $created_at);
    }

    public function getUpdatedAt():string
    {
        return (string) $this->getData(self::UPDATED_AT);
    }
    public function setUpdatedAt(string $updatedAt)
    {
        $this->setData(self::UPDATED_AT, $updated_at);
    }

    public function getTimeOut():int
    {
        return (string) $this->getData(self::TIMEOUT);
    }
    public function setTimeOut(int $timeout)
    {
        $this->setData(self::TIMEOUT, $timeout);
    }
}