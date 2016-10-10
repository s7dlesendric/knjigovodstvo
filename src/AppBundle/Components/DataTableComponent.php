<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/10/16
 * Time: 7:41 PM
 */

namespace AppBundle\Components;


use AppBundle\Intefaces\IEvent;

class DataTableComponent extends Component
{

    /**
     * Should return html which will render component
     * @return mixed
     */
    public function render()
    {
        // TODO: Implement render() method.
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