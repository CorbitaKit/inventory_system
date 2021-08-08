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
		$validated = $request->validated();

		if($validated){

			$this->userRepository->store($request);
			return response('created',201);
		}

		


		
	}

	public function get(){

		$users = $this->userRepository->get();


		return response(json_encode($users),200);
	}
    
}
