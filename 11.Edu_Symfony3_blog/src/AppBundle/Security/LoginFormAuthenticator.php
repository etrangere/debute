<?php
namespace AppBundle\Security;

use AppBundle\Form\LoginForm;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
//use AppBundle\Security\LoginFormAuthenticator;




class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{


    private $formFactory;

    private $em;

    private $router;



    public function __construct(FormFactoryInterface $formFactory,EntityManagerInterface $em,RouterInterface $router)
   {
       $this->formFactory = $formFactory;
       $this->em = $em;
       $this->router = $router;
   }


    public function getCredentials(Request $request)
    {

        $isLoginSubmit = $request->getPathInfo()== '/login'&& $request->isMethod('POST');

        if (!$isLoginSubmit)
        {
            return;
        }

        $form = $this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);
        $data = $form->getData();

        return $data;

    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username = $credentials['_username'];

        return $this->em->getRepository('AppBundle:User')

            ->findOneBy(['email'=> $username]);
    }

    public function checkCredentials($credentials, UserInterface $user)
    {
        $password = $credentials['_password'];

        if($password == 'ggg')
        {
            return true;

        }

        return false;
    }

    protected function getLoginUrl()
    {

     return $this->router->generate('security_login');


    }

    protected function getDefaultSuccessRedirectUrl()
    {
        return $this->router->generate('homepage');

    }


}