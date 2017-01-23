<?php

namespace GestorFCTBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Constraints\Regex;



/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="GestorFCTBundle\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     *
     * @Assert\NotBlank( message= "El campo esta vacio")
     *
     * @Assert\Length(
     *      min = 4,
     *      max = 32,
     *      minMessage = "Minimo 4 caracteres",
     *      maxMessage = "Máximo 32 caracteres"
     * )
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     *
     * @Assert\NotBlank( message= "El campo esta vacio")
     *
     * @Assert\Email(
     *     message = "Email incorrecto",
     *     checkMX = true
     * )
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64)
     *
     */
    private $password;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @Assert\NotBlank( message= "El campo esta vacio" )
     *
     * @Assert\Regex(
     *     pattern="/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",
     *     match=true,
     *     message="El password debe contener una mayúscula, letras y números y no debe tener menos de 8 caracteres"
     *
     * )
     */

    private $plainPassword;

    public function getPlainPassword(){

     return $this->plainPassword;
    }

    public function setPlainPassword($password){

     $this->plainPassword = $password;
   }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


    public function getSalt(){

      // The bcrypt algorithm doesn't require a separate salt.
      // You *may* need a real salt if you choose a different encoder.
      return null;
    }

    public function getRoles(){

      return array('ROLE_USER');
    }

    public function eraseCredentials(){}
}
