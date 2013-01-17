<?php

class ChangeCounterBehavior extends  CActiveRecordBehavior
{
    public $updateAttribute;
    public $counterDelta = 1;
    const START_COUNTER = 0;

    public function beforeSave($event)
    {
        if($this->getOwner()->isNewRecord)
        {
            $this->getOwner()->{$this->updateAttribute} = self::START_COUNTER;
        }
        else
            $this->getOwner()->{$this->updateAttribute} += $this->counterDelta;
    }
}