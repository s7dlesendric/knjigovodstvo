<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/10/16
 * Time: 7:32 PM
 */

namespace AppBundle\Components;


use AppBundle\Intefaces\IEvent;

abstract class Component
{
    private $data_attr = array(); //data-attr in html
    private $class; //css class
    private $type;
    private $name;
    private $id;
    private $attr = array();

    public $return = '';

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }


    /**
     * @return array
     */
    public function getDataAttr()
    {
        return $this->data_attr;
    }

    /**
     * @param array $data_attr
     */
    public function setDataAttr($data_attr)
    {
        $this->data_attr = $data_attr;
    }

    /**
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param mixed $class
     */
    public function setClass($class)
    {
        $this->class = $class;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }




    /**
     * Should return html which will render component
     * @return mixed
     */
    public abstract function render();

    /**
     * Should implement IEvent listenr which will load some action
     * @param IEvent $event
     * @return mixed
     */
    public abstract function onload(IEvent $event);

    /**
     * @param IEvent $event
     * @return mixed
     */
    public abstract function onclick(IEvent $event);

    public abstract function onchange();

    /**
     * @return array
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * @param array $attr
     */
    public function setAttr(array $attr)
    {
        $this->attr = $attr;
    }
    



}