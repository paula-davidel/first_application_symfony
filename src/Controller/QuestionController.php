<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    // use annotations

    /**
     * @Route("/questions")
     */

    public function questions()
    {
        return new Response("What a bewitching controller we have conjured!");
    }

    /**
     * @Route("/questions/{id}")
     */
    public function show($id)
    {
        // the first and basic code
//        return new Response("Future page to show a question!");


        // the second code is for an argument that it's present in URL
//        return new Response(sprintf(
//            'Future page to show a question has the id: "%d"',
//            $id));


        // the third code is for twigs => for this you need to extend AbstractController,
        // because we want to access the render method that contains the twig file

        $answers = [
            'Make sure your cat is sitting perfectly still',
            'HOnestly, I like funny shoes better than my CAT',
            'Maybe... try saying the spell backwords?'
        ];
        return $this->render("questions/show.html.twig",[
            // here we will send the params to twig file
            "id_question" => $id,
            "answers" => $answers
        ]);

    }
}