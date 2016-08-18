<?php

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends Controller
{
	/**
     * @Route("/lucky/number/{count}")
     */
	public function numberAction($count)
	{
		$numbers = array();
		$html = '<html><body>';
		for($i=0;$i<$count;$i++)
		{
			$numbers[] = rand(0,100);
		}

		$numbersList = implode(', ', $numbers);

		return $this->render(
			'lucky/number.html.twig',
			array('luckyNumbersList' => $numbersList)
		);
	}
  
}