<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Eloquent\UserRepository;
use App\Http\Requests\UserRequest;


class UserController extends Controller{

	private $userRepository;


	public function __construct(UserRepository $userRepository){

		$this->userRepository = $userRepository;
	}


	public function store(UserRequest $request){

		return $this->userRepository->store($request);
	}
    
}
