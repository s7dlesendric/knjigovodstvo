<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/10/16
 * Time: 8:01 PM
 */

namespace AppBundle\Views;


use AppBundle\Components\Component;

abstract class View
{

    private $components = array();

    public function registerComponent(Component $component){
        array_push($this->components,$component);
    }

    /**
     * get components for that view
     * @return array
     */
    public function getComponents(){
        return $this->components;
    }

    public function renderView(){
        $return = '';
        foreach($this->components as $component){
            $return .= $component->render();
        }
        return $return;
    }

}