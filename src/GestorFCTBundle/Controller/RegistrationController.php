<?php

namespace GestorFCTBundle\Controller;

use GestorFCTBundle\Form\UserType;
use GestorFCTBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        $roles = ["ROLE_USUARIO"];

        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $this->get('security.password_encoder')
                ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $user->setRoles($roles);

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('alumno_tabla');
        }

        return $this->render(
            'GestorFCTBundle:Default:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function loginAction(Request $request){

      $authenticationUtils = $this->get('security.authentication_utils');

      // get the login error if there is one
      $error = $authenticationUtils->getLastAuthenticationError();

      // last username entered by the user
      $lastUsername = $authenticationUtils->getLastUsername();

      return $this->render('GestorFCTBundle:Default:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
      ));
    }

    public function adminAction()
    {
      $repository = $this->getDoctrine()->getRepository('GestorFCTBundle:User');
      $user = $repository->findAll();
      return $this->render('GestorFCTBundle:Default:admin.html.twig',array("user"=>$user));
    }


}
