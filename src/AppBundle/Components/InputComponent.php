<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/10/16
 * Time: 7:46 PM
 */

namespace AppBundle\Components;


use AppBundle\Intefaces\IEvent;

class InputComponent extends Component
{

    const INPUT_TYPE_TEXT='text';
    const INPUT_TYPE_PASSWORD = 'password';
    const INPUT_TYPE_EMAIL = 'email';
    const INPUT_TYPE_BUTTON = 'button';
    const INPUT_TYPE_SUBMIT = 'submit';

    /**
     * InputComponent constructor.
     */
    public function __construct($type)
    {
        $this->setType($type);
    }


    /**
     * Should return html which will render component
     * @return mixed
     */
    public function render()
    {
        $this->return.= "<input ";
        $this->return.= "type='".$this->getType()."' ";
        if($this->getClass()){
            $this->return.= "class='".$this->getClass()."' ";
        }
        foreach($this->getAttr() as $key=>$value){
            $this->return.=$key.="='"."{$value}"."' ";
        }
        $this->return .= "/>";
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
}