<?php

namespace MageMastery\Popup\Api\Data;

interface PopupInterface
{
    public function getPopupId():int;
    public function setPopupId(int $popupId);

    public function getName():string;
    public function setName(string $name);

    public function getContent():string;
    public function setContent(string $content);

    public function getIsActive():bool;
    public function setIsActive(bool $isactive);

    public function getCreatedAt():string;
    public function setCreatedAt(string $createdAt);

    public function getUpdatedAt():string;
    public function setUpdatedAt(string $updatedAt);

    public function getTimeOut():int;
    public function setTimeOut(int $timeout);

}