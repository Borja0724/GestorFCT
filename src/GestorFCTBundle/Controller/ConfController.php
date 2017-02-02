<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Conf;
use Symfony\Component\HttpFoundation\JsonResponse;
use GestorFCTBundle\Form\ConfType;
use Symfony\Component\HttpFoundation\Request;

class ConfController extends Controller
{
  public function mostrarTablaAction()
  {
    $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Conf');
    $conf = $repository->findAll();

    return $this->render('GestorFCTBundle:Default:Conf_tabla.html.twig',array("conf"=>$conf));
  }

  public function formularioAction(Request $request)
  {
    $form = $this->createForm(ConfType::class);

    $conf = new Conf();
    $form = $this->createForm(ConfType::class,$conf);

    $form->handleRequest($request);

    if( $form->isSubmitted() && $form->isValid()){

      $conf = $form->getData();

      $em = $this->getDoctrine()->getManager();
      $em->persist($conf);
      $em->flush();

	    return $this->redirectToRoute('conf_tabla');
    }

    return $this->render('GestorFCTBundle:Default:Conf_form.html.twig',array('form'=>$form->createView()));
  }
}
