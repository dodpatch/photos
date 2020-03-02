<?php

namespace App\Repositories;


abstract class BaseRepository
{
	protected $model;

	public function __construct(Model $model)
	{
		$this->model = $model;
	}

	public function store(array $inputs):Model
	{
		return $this->model->create($inputs);
	}

	public function getBySlug($slug):Model
	{
      return $this->model->whereSlug($slug)->firstOrFail();
	}

	public function getByUser($id):Model
	{
		return whereUserId($id)->get();
	}

	public function getAll()
	{
		return $this->model->all();
	}
}