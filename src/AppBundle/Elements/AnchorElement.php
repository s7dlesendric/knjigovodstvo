<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/11/16
 * Time: 7:57 AM
 */

namespace AppBundle\Elements;


class AnchorElement extends Element
{
    private $path;


    public function __construct($name='a', $id=null, $path = 'javascript:;',$spf = true)
    {
        parent::__construct($name, $id);
        $this->path = $path;
        if($spf){
            $this->setClass('spf-link');
        }
    }

}