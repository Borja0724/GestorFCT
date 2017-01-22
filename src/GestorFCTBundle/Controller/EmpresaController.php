<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Empresa;
use Symfony\Component\HttpFoundation\JsonResponse;
use GestorFCTBundle\Form\EmpresaType;
use Symfony\Component\HttpFoundation\Request;

class EmpresaController extends Controller
{
  public function mostrarTablaAction()
  {
    $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Empresa');
    $empresa = $repository->findAll();

    return $this->render('GestorFCTBundle:Default:Empresa_tabla.html.twig',array("empresas"=>$empresa));
  }

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

	    return $this->redirectToRoute('empresa_tabla');
    }

    return $this->render('GestorFCTBundle:Default:Empresa_form.html.twig',array('formulario'=>$form->createView()));
  }

  private function serializeEmpresa(Empresa $empresa)
  {
   return array(
     'nombre' => $empresa->getNombre(),
     'direccion' => $empresa->getDireccion(),
     'cp' => $empresa->getCp(),
     'telefono1' => $empresa->getTelefono1(),
     'telefono2' => $empresa->getTelefono2(),
     'fechaCreacion' => $empresa->getFechaCreacion(),
   );
  }

  public function empresasAction()
  {
    $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Empresa');
    $empresas = $repository->findAll();

    //var_dump($empresas);

    $data = array('empresas' => array());
    foreach ($empresas as $empresa)
    {
      $data['empresas'][] = $this->serializeEmpresa($empresa);
    }

    $response = new JsonResponse($data, 400);
    return $response;
    //return $this->json($empresas);*/
 }
}
