<?php

    namespace App\Repositories;

    use Illuminate\DataBase\Eloquent\Models;

    class BaseRepository {
        protected $model;
         public function __construct(Models $model){
            $this->model = $model;
         }
         public function getAll(){
            return $this->model->newQuery->all();
         }
         public function getById(){
            return $this->model->newQuery->find($id);
         }
         public function create(array $data){
            return $this->model->newQuery->create($data);
         }
         public function update($id, array $data){
            $model = $this->getById($id);
            if ($model){
                $model->newQuery->update($data);
                return $model;
            }
         }
         public function delete($id){
            $model = $this->getById($id);
            if($model){
                return $model->newQuery->delete();
            }
         }
    }
?>