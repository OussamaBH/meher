<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route as Route;

class HomeController extends AbstractController
{
    /**
     * @Route (path="/home", name="home")
     * @param Request $request
     * @return Response
     */
    public function homePage(Request $request)
    {
        return $this->render("@Views/home.html.twig");
    }

    /**
     * @Route (path="/home/params", name="home_params")
     * @param Request $request
     * @return Response
     */
    public function homePageWithParams(Request $request)
    {
        $title = "Meher";
        return $this->render("@Views/home.params.html.twig", ["title" => $title]);
    }

    /**
     * @Route (path="/home/{title}", name="home_title")
     * @param Request $request
     * @param $title
     * @return Response
     */
    public function homePageWithGetParams(Request $request, $title)
    {
        return $this->render("@Views/home.params.html.twig", ["title" => $title]);
    }
}
