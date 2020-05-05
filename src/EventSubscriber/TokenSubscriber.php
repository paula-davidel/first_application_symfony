<?php


namespace App\EventSubscriber;


use App\Controller\ApiController;
use App\Controller\TokenAuthenticatedController;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

class TokenSubscriber implements EventSubscriberInterface
{
    private $tokens;

    public function __construct()
    {
        $this->tokens = array(
            "user1" => "token1",
            "user2" => "token2"
        );
    }

    //subscriber method
    public function beforeController(ControllerEvent $event)
    {
        $controller = $event->getController();

        if(is_array($controller) && $controller[0] instanceof TokenAuthenticatedController) {
            // get the token that is the HTTP request
            $token = $event->getRequest()->query->get('token');
            if (!in_array($token, $this->tokens))
            {
                // show the error if don't put in URL the ine token from $tokens array
                throw new AccessDeniedHttpException("This needs a valid token");
            }
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => "beforeController"
            ];
    }
}