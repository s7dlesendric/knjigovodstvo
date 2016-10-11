<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/11/16
 * Time: 7:38 AM
 */

namespace AppBundle\Elements;


class DivElement extends Element
{


    public function __construct($name='div', $id=null)
    {
        parent::__construct($name, $id);
    }

}