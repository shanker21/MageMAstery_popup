<?php

namespace MageMastery\Popup\Model\ResourceModel\Popup\Grid;

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Api\Search\AggregationInterface;
use MageMastery\Popup\Model\ResourceModel\Popup\Collection as PopupCollection;
use Magento\Framework\Event\ManagerInterface;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

class Collection extends PopupCollection implements SearchResultInterface
{
    protected $aggregations;
    protected $timeZone;

    public function __construct(
        \Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory,
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        $mainTable,
        $eventPrefix,
        $eventObject,
        $resourceModel,
        TimezoneInterface $timeZone,
        $model = \Magento\Framework\View\Element\UiComponent\DataProvider\Document::class,
        \Magento\Framework\DB\Adapter\AdapterInterface $connection = null,
        \Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null
    ) {
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $connection, $resource);
        $this->_eventPrefix = $eventPrefix;
        $this->_eventObject = $eventObject;
        $this->timeZone = $timeZone;
        $this->_init($model, $resourceModel);
        $this->setMainTable($mainTable);
    }

    public function addFieldToFilter($field, $condition = null)
    {
        if ($field === 'created_at' || $field === 'updated_at') {
            if (is_array($condition)) {
                foreach ($condition as $key => $value) {
                    $condition[$key] = $this->timeZone->convertConfigTimeToUtc($value);
                }
            }
        }
        return parent::addFieldToFilter($field, $condition);
    }

    public function setItems(array $items = null)
    {
        // Implement the logic to set the items in the collection
    }

    public function getAggregations()
    {
        // Implement the logic to get the aggregations
    }

    public function setAggregations($aggregations)
    {
        // Implement the logic to set the aggregations
    }

    public function getSearchCriteria()
    {
        // Implement the logic to get the search criteria
    }

    public function setSearchCriteria(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null)
    {
        // Implement the logic to set the search criteria
    }

    public function getTotalCount()
    {
        // Implement the logic to get the total count
    }

    public function setTotalCount($totalCount)
    {
        // Implement the logic to set the total count
    }

    public function setCustomAttributes(array $attributes = null)
    {
        // Implement the logic to set the custom attributes
    }
}
