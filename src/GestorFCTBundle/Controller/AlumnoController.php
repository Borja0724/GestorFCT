<?php

namespace GestorFCTBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AlumnoController extends Controller
{
  public function mostrarAlumnoAction()
  {
    $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:Alumno');
    $alumno = $repository->findAll();
    return $this->render('GestorFCTBundle:Default:alumno_tabla.html.twig',array("alumno"=>$alumno));
  }
}
