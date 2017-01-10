<?php

namespace GestorFCTBundle\Controller;
use GestorFCTBundle\Form\ProfesoresType;
use GestorFCTBundle\Entity\Profesores;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProfesorController extends Controller
{

  // Este controller el que fa es mostrar els Datos de la BBDD en una tabla
    public function mostrarProfesorAction()
    {
        $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Profesores'); //Recuperamos el repositorio
        $profesor = $repository->findAll(); // Recupera todo los datos de la BBDD

        return $this->render('GestorFCTBundle:Default:profesor.html.twig',array("profesor"=>$profesor)); //Envia los datos a la vista
    }

  // Este controller el que fa es crear el formulari en la vista e insetar els datos en la BBDD
    public function formularioProfesorAction(Request $request)
    {
      $form = $this->createForm(ProfesoresType::class);

      // Creamos un nuevo Profesor
      $profesor = new Profesores();
      $form = $this->createForm(ProfesoresType::class,$profesor);

      $form->handleRequest($request); // Capturamos el request que hace el form

      if( $form->isSubmitted() && $form->isValid()){ // Compueva que los datos esten enviados y sean validos

        $profesor = $form->getData(); // Cogemos los datos

        // Enviamos los datos
        $em = $this->getDoctrine()->getManager();
        $em->persist($profesor);
        $em->flush();

        return $this->redirectToRoute('profesor_all'); // Te envia a la ruta que le pones
      }

      return $this->render('GestorFCTBundle:Default:formularioProfesor.html.twig',array('formulario'=>$form->createView()));
    }


// A partir de asi es el API

    private function serializeProfesor(Profesores $profesor)
 {
   return array(
     'nombre' => $profesor->getNombre(),
      'apellidos' => $profesor->getApellidos(),
      'departamento' => $profesor->getDepartamento(),
   );
 }
 public function proferosesApiAction()
 {
     $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Profesores');
     $profesores = $repository->findAll();


     //var_dump($empresas);
     $data = array('empresas' => array());
     foreach ($profesores as $profesor) {
         $data['empresas'][] = $this->serializeProfesor($profesor);
     }
     $response = new JsonResponse($data, 400);
     return $response;
     //return $this->json($profesores);*/
 }

}
