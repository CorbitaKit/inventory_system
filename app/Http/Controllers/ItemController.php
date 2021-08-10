<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Repositories\Eloquent\ItemRepository;


class ItemController extends Controller
{
	private $item_repository;

	public function __construct(ItemRepository $item_repo){
		$this->item_repository = $item_repo;
	}
    public function store(Request $request){

    	$validation = Validator::make($request->all(),[
    		'name' => 'required',
    		'quantity' => 'required|integer',
    		'utility' => 'required',
    		'price' => 'required|integer',
    		'date_arrive' => 'required|date'
    	]);


    	if($validation->fails()){
    	
    		return response(json_encode($validation->messages()),422);
    	}


    	$this->item_repository->store($request->all());

    	return response('created',201);

    }

    public function getItems(){
    	$items = $this->item_repository->get();

    	return response(json_encode($items),200);
    }
}
