<?php

	namespace App\Repositories\Eloquent;
	use App\Repositories\Contracts\ItemInterface;
	use App\Item;

	class ItemRepository implements ItemInterface{

		private $model;

		public function __construct(Item $item){
			$this->model = $item;
		}

		public function store($data){

			$this->model->create($data);
		}

		public function get(){
			return $this->model->get();
		}
	}