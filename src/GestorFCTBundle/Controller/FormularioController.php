<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Form\EmpresaType;
use GestorFCTBundle\Entity\Empresa;
use Symfony\Component\HttpFoundation\Request;

class FormularioController extends Controller
{
    public function formularioAction(Request $request)
    {
        $form = $this->createForm(EmpresaType::class);

        $empresa = new Empresa();
        $form = $this->createForm(EmpresaType::class,$empresa);

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid()){

          $empresa = $form->getData();

          $em = $this->getDoctrine()->getManager();
          $em->persist($empresa);
          $em->flush();

	        return $this->redirectToRoute('gestor_fct_empresa');
        }

        return $this->render('GestorFCTBundle:Default:formulario.html.twig',array('formulario'=>$form->createView()));
    }
}
