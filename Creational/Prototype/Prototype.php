<?php
/**
 * Creational Patterns: Prototype
 * Prototype class
 *
 * Класс - прототип, который необходимо
 * клонировать
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 25.03.2021
 */
namespace DesignPatterns\Creational\Prototype;

class Prototype
{
    private $objectName;
    private $objectID;

    public function __construct($objName, $objId)
    {
        $this->objectName = $objName;
        $this->objectID = $objId;        
    }

    // В данном примере при клонировании меняем поле имени
    // и инкрементируем ID
    public function __clone()
    {
        $this->objectName .= " CLONED";
        $this->objectID++;
    }

    public function __toString()
    {
        return "ID is: ".$this->objectID." and name is: ".$this->objectName;
    }
}