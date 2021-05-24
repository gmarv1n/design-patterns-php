<?php
/**
 * Creational Patterns: Builder
 * DesktopComputer class
 *
 * Собственно сам компьютер, который может иметь разные конфигурации.
 *
 * @author Gregory Yatsukhno <codejournaldev@gmail.com>
 * @version 26.03.2021
 */
namespace DesignPatterns\Creational\Builder;

class DesktopComputer
{
    private $components = [];

    // Каждый компьютер в любом случае будет состоять из корпуса,
    // материнской платы, блока питания и оперативной памяти
    // (еще, конечно, процессора, но я этот момент упустил),
    // в целом, даже без участия "Строителей", такой ПК
    // будет работать
    public function __construct()
    {
        array_push($this->components, "Desktop is made of: case, motherboard, power supply, RAM,");    
    }

    // Метод собирает строку из элементов массива
    // компонентнов компьютера и выводит
    public function getDescription(): void
    {   
        $descriptionString = "";
        if (isset($this->components[1])) {
            foreach ($this->components as $component) {
                $descriptionString .= $component." ";
            } 
            echo $descriptionString;
        } else {
            echo $this->components[0];
        }
    }

    // Метод для добавления компонента
    public function addComponent($component): void
    {
        array_push($this->components, $component);
    }
}