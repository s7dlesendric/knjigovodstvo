<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/10/16
 * Time: 10:12 PM
 */

namespace AppBundle\Components;


use AppBundle\Intefaces\IEvent;

class FormComponent extends Component
{
    private $components = array();

    const METHOD_POST = 'POST';
    const METHOD_GET = 'GET';



    /**
     * FormComponent constructor.
     */
    public function __construct(array $attr)
    {
        $this->setAttr($attr);
    }


    /**
     * Should return html which will render component
     * @return mixed
     */
    public function render()
    {
        $this->return.='<form ';
        foreach($this->getAttr() as $key=>$value){
            $this->return.=$key.="='"."{$value}"."' ";
        }
        $this->return.=' >';
        foreach($this->components as $component){
            $this->return.=$component->render();
        }

        $this->return.=' </form>';
        return $this->return;
    }

    /**
     * Should implement IEvent listenr which will load some action
     * @param IEvent $event
     * @return mixed
     */
    public function onload(IEvent $event)
    {
        // TODO: Implement onload() method.
    }

    /**
     * @param IEvent $event
     * @return mixed
     */
    public function onclick(IEvent $event)
    {
        // TODO: Implement onclick() method.
    }

    public function onchange()
    {
        // TODO: Implement onchange() method.
    }

    public function registerComponent(InputComponent $component){
        array_push($this->components,$component);
    }
}