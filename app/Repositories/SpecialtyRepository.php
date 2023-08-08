<?php

    namespace App\Repositories;

    use App\Models\Specialty;

    class SpecialtyRepository  {
        public $specialty = [];
    
        public function __construct(Models $Specialty, $name, $id) {
          $this->model = $Specialty;
          $this->name = $name;
          $this->id = $id;
           
        }
        public function addSpecialty($id, $name) {
            $this->specialties[$id] = $name;
          }
        
          public function getSpecialties() {
            return $this->specialties;
          }
        
      }
?>

