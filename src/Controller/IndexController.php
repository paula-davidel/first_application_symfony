<?php


namespace App\Controller;

use App\Entity\Hotel;
use App\Service\DateCalculator;
use App\Service\RandomNumberGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    private const HOTEL_OPENED = 1978;
    /**
     * @Route("/")
     */
    public function home(DateCalculator $date)
    {
        // generate a number
        // $year = $number_generator->getRandomNumber();
        // calculate the difference (age) between the current date and the date when the hotel was opened.
        $year = $date->yearDifference(self::HOTEL_OPENED);

//        $hotels = $this->getDoctrine()
//            ->getRepository(Hotel::class)
//            ->findAll();

        $hotels = $this->getDoctrine()
            ->getRepository(Hotel::class)
            ->findAllBelowPrice(650);

        $images = [
            ["src" => "images/hotel/intro_room.jpg", "class" => "", "alt" => "Intro Gallery Room Sample Pictures"],
            ["src" => "images/hotel/intro_pool.jpg", "class" => "", "alt" => "Intro Gallery Pool Sample Pictures"],
            ["src" => "images/hotel/intro_dining.jpg", "class" => "", "alt" => "Intro Gallery Dining Sample Pictures"],
            ["src" => "images/hotel/intro_attractions.jpg", "class" => "", "alt" => "Intro Gallery Attractions Sample Pictures"],
            ["src" => "images/hotel/intro_wedding.jpg", "class" => "hidesm", "alt" => "Intro Gallery Dining Sample Pictures"]
        ];
//      return new Response("<h1>My first Symfony page!</h1>");
        return $this->render("index.html.twig",
                ["year"=>$year, "images" => $images, "hotels" => $hotels]
            );
    }
}