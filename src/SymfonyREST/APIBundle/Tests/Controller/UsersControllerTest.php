<?php

namespace SymfonyREST\APIBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UsersControllerTest extends WebTestCase
{
	public function testIndex()
	{
		$client = static::createClient();

		$crawler = $client->request(
			'GET',
			'/users',
			array(),
			array(),
			array(
				'CONTENT_TYPE'          => 'application/json',
				'HTTP_REFERER'          => '/foo/bar',
				'HTTP_X-Requested-With' => 'XMLHttpRequest',
			)
		);

		$this->assertTrue($client->getResponse());
	}
}