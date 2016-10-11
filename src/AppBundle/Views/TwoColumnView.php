<?php
/**
 * Created by PhpStorm.
 * User: darko
 * Date: 10/10/16
 * Time: 8:04 PM
 */

namespace AppBundle\Views;


use AppBundle\Elements\DivElement;

class TwoColumnView extends View
{
    private $row;
    private $leftDiv;
    private $rightDiv;
    /**
     * TwoColumnView constructor.
     */
    public function __construct()
    {
        $row = new DivElement('div','row-container');
        $row->setClass('row');
        $leftdiv = new DivElement('div','col-left');
        $leftdiv->setClass('col-lg-4 pull-left');

        $row->addChild($leftdiv);
        $rightdiv = new DivElement('div','col-right');
        $rightdiv->setClass('col-lg-8 pull-rigth');
        $row->addChild($rightdiv);

        $this->row = $row;
        $this->leftDiv = $leftdiv;
        $this->rightDiv = $rightdiv;
    }

}