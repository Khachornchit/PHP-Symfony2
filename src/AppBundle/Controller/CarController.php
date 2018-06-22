<?php
/**
 * Created by PhpStorm.
 * User: kajornjitsongsaen
 * Date: 22/6/18
 * Time: 22:29
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CarController extends Controller
{
    /**
     * @Route("/cars")
     */
    public function carList()
    {
        $car = array("Volvo", "BMW", "Toyota");
        return $this->render('car/cars.html.twig', array(
            'page_title' => "Top Brand Cars",
            'cars' => $car,
        ));
    }
}