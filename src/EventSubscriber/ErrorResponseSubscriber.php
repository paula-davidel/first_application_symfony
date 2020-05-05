<?php


namespace App\EventSubscriber;


use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class ErrorResponseSubscriber implements EventSubscriberInterface
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function onResponse(ResponseEvent $event)
    {
        $response = $event->getResponse();
        $request = $event->getRequest();

        $ip = $request->getClientIp();

        $content = $response->getContent();
        // decode the json request as an associative array
        $content = json_decode($content,true);

        if(is_array($content) && !empty($content["error"]))
        {
            // add this information into a log file from var/log directory
            $this->logger->info("Unauthorized API request made by".$ip.". Status code ".
                $response->getStatusCode());
        }

    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => "onResponse"
        ];
    }

}