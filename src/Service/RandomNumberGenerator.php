<?php


namespace App\Service;

use Psr\Log\LoggerInterface;

class RandomNumberGenerator
{
    private $logger;
    // I used the Logger service that is preinstalled
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function getRandomNumber()
    {
        $numbers = [12,32,51,44,65];
        // shuffle = randomizes the order of the elements into an array
        shuffle($numbers);
        $number = array_pop($numbers);
        return $number;
    }
}