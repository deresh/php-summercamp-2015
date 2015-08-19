<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="homepage")
	 */
	public function homepageAction(Request $request)
	{
		$pageTitle = 'Homepage summercamp frontend';

		$html = $this->get('templating')->render('AppBundle:controllers:homepage.html.twig', [
			'title' => $pageTitle,
			'noLayout' => $request->isXmlHttpRequest()
		]);

		return $request->isXmlHttpRequest() ? new JsonResponse([
			'pageTitle' => $pageTitle,
			'html' => $html,
			'pageType' => 'homepage'
		]) : new Response($html);
	}

	/**
	 * @Route("/detail", name="detail")
	 */
	public function detailAction(Request $request)
	{
		return $this->render('AppBundle:controllers:detail.html.twig', [
			'title' => 'Detail summercamp frontend',
			'noLayout' => false
		]);
	}

	/**
	 * @Route("/search-results", name="searchResults")
	 */
	public function searchResultsAction(Request $request)
	{
		return new JsonResponse([
			'id' => 1,
			'title' => 'Test'
		]);
	}


}
