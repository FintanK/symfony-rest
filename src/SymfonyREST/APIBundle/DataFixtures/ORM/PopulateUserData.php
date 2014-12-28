<?php

namespace SymfonyREST\APIBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\Persistence\ObjectManager;
use SymfonyREST\APIBundle\Entity\User;

class PopulateUserData implements FixtureInterface {
	/**
	 * Load data fixtures with the passed EntityManager
	 */
	public function load(Objectmanager $manager) {
		$john = new User();
		$john->setUsername('john');
		$john->setPassword('johnspassword');
		$john->setEmail('john@example.com');

		$jane = new User();
		$jane->setUsername('jane');
		$jane->setPassword('janesspassword');
		$jane->setEmail('jane@example.com');

		$manager->persist($john);
		$manager->persist($jane);

		$manager->flush();
	}
} 