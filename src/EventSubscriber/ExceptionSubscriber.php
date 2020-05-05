<?php


namespace App\EventSubscriber;


use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\KernelEvents;

class ExceptionSubscriber implements EventSubscriberInterface
{
    public function onException(ExceptionEvent $event)
    {
        $e = $event->getThrowable();
        if(!$e instanceof AccessDeniedHttpException)
        {
            return;
        }
        // get the error like a json type
        $responseData = ["error" => $e->getMessage()];
        // put the response Data into a json file
        $response = new JsonResponse($responseData);
        $event->setResponse($response);
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => "onException"
        ];
    }
}