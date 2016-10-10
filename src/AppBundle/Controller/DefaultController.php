<?php

namespace AppBundle\Controller;

use AppBundle\Components\FormComponent;
use AppBundle\Components\InputComponent;
use AppBundle\Views\TwoColumnView;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/getView", name="getview")
     * @param Request $request
     * @return JsonResponse
     */
    public function viewAction(Request $request)
    {
        $view = new TwoColumnView();
        $username = new InputComponent(InputComponent::INPUT_TYPE_EMAIL);
        $username->setAttr([
            'requried'=>'required',
            'class'=>'form-control'
        ]);
        $password = new InputComponent(InputComponent::INPUT_TYPE_PASSWORD);
        $password->setAttr([
            'required'=>'required',
            'class'=>'form-control'
        ]);

        $submit = new InputComponent(InputComponent::INPUT_TYPE_BUTTON);
        $submit->setAttr([
            'onclick'=>'alert("I need to call some function")',
            'class'=>'btn btn-primary pull-right',
            'value'=>'Ok Go',
        ]);
        $form = new FormComponent([
            'method'=>'post',
            'id'=>'form',
            'class'=>'col-lg-4 col-lg-offset-4'
        ]);
        $form->registerComponent($username);
        $form->registerComponent($password);
        $form->registerComponent($submit);
        $view->registerComponent($form);
        $resposne = array(
            'title'=>'Some title',
            'body'=>array(
                'content'=>$view->renderView()
            )
        );
        return new JsonResponse($resposne);
    }
}
