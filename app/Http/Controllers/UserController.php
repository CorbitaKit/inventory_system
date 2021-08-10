<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Eloquent\UserRepository;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;

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

	public function update(Requests $request){

	}

	public function edit($user_id){

		$user = $this->userRepository->getWhere($user_id);


		


		return response(json_encode(new  UserResource($user)),200);
	}

	public function destroy($user_id){
		$user = $this->userRepository->destroy($user_id);

		$user->delete();

		return  response('deleted',200);
	}
    
}
