<?php declare(strict_types = 1);

namespace App\Controllers;

use Http\Response;
use Http\Request;
use App\Template\Renderer;

class Homepage
{
	private $response;
	private $request;
	private $renderer;

	public function __construct(Request $request, Response $response, Renderer $renderer)
	{
		$this->request = $request;
		$this->response = $response;
		$this->renderer = $renderer;
	}

	public function show()
	{
		$data = [
			'name' => $this->request->getParameter('name', 'stranger'),
			'menuItems' => [['href' => '/', 'text' => 'Homepage']],
		];
		$html = $this->renderer->render('Homepage', $data);
		$this->response->setContent($html);
	}
}
