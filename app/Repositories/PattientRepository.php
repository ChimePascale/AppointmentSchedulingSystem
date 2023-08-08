<?php

    namespace App\Repositories;

    use App\Models\Pattient;

    class PattientRepository extends UserRepository {

        private $specialization;
        public $work_date;
      
        public function __construct(Models $Pattient, $name, $address, $email, $phoneNumber, $DOB, $gender, $id, $specialization) {
          $this->model = $User;
            $this->name = $name;
            $this->email = $email;
            $this->gender = $gender;
            $this->password = $password; 
        }
      }
?>



