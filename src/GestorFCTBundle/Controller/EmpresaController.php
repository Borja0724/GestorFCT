<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GestorFCTBundle\Entity\Empresa;
use Symfony\Component\HttpFoundation\JsonResponse;

class EmpresaController extends Controller
{
    public function mostrarTablaAction()
    {
        $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Empresa');
        $empresa = $repository->findAll();

        return $this->render('GestorFCTBundle:Default:empresa.html.twig',array("empresas"=>$empresa));
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
     foreach ($empresas as $empresa) {
         $data['empresas'][] = $this->serializeEmpresa($empresa);
     }
     $response = new JsonResponse($data, 400);
     return $response;
     //return $this->json($empresas);*/
 }

}
