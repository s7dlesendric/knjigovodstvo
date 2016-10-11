<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/11/16
 * Time: 7:38 AM
 */

namespace AppBundle\Elements;


use AppBundle\Components\Component;

abstract class Element
{
    private $id;
    private $class;
    private $childs = array();
    private $name;
    private $return;
    private $attr = array();
    private $components = array();

    /**
     * Element constructor.
     * @param string $name
     * @param string $id
     */
    public function __construct($name='element',$id=null)
    {
        $this->name = $name;
        $this->id = $this->setId($id);
        $this->return = '<'.$this->name;
        $this->return = ' id = "'.$this->getId().'" ';
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
        $this->id = 'generated-element-'.$this->name.'-'.$id;
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
    public function getChilds()
    {
        return $this->childs;
    }

    /**
     * @param mixed $childs
     */
    public function setChilds(array $childs)
    {
        $this->childs = $childs;
    }

    /**
     * @param Element $child
     */
    public function addChild(Element $child)
    {
        array_push($this->childs,$child);
    }


    public function render()
    {
        $this->return.='</'.$this->getName().'>';
        return $this->return;
    }

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
     * @return array
     */
    public function getAttr()
    {
        return $this->attr;
    }

    /**
     * @param array $attr
     */
    public function setAttr($attr)
    {
        $this->attr = $attr;
    }

    /**
     * @return array
     */
    public function getComponents()
    {
        return $this->components;
    }

    /**
     * @param Component $component
     */
    public function registrateComponent(Component $component)
    {
        array_push($this->childs,$component);
    }







}