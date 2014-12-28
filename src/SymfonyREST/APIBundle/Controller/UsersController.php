<?php

namespace SymfonyREST\APIBundle\Controller;

use SymfonyREST\APIBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class UsersController extends Controller {

	/**
	 * @return array
	 * @View()
	 */
	public function getUsersAction() {
		$users = $this->getDoctrine()->getRepository('SymfonyRESTAPIBundle:User')->findAll();
		return array('users' => $users);
	}

	/**
	 * @param User $user
	 * @return array
	 * @View()
	 * @ParamConverter("user", class="SymfonyRESTAPIBundle:User")
	 */
	public function getUserAction(User $user) {
		return array('user' => $user);
	}
}