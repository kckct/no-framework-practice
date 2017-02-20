<?php declare(strict_types = 1);

namespace App\Controllers;

use Http\Response;
use Http\Request;

class Homepage
{
	private $response;
	private $request;

	public function __construct(Request $request, Response $response)
	{
		$this->request = $request;
		$this->response = $response;
	}

	public function show()
	{
		$content = '<h1>Hello World</h1>';
		$content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
		$this->response->setContent($content);
	}
}
