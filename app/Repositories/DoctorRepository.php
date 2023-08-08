<?php

    namespace App\Repositories;

    use App\Models\Doctor;

    class DoctorRepository extends UserRepository {
        private $specialization;
        public $workDate;
      
        public function __construct(Models $Doctor, $name, $address, $email, $phoneNumber, $DOB, $gender, $id, $specialization) {
          $this->model = $Doctor;
          $this->specialization = $specialization;
          $this->workDate = $workDate;
          $this->name = $name;
          $this->address = $address;
          $this->telephone = $phoneNumber;
          $this->email = $email;
          $this->gender = $gender;
          $this->password = $password;
           
        }
        public function getDoctorDetails() {
            $userDetails = $this->getUserDetails();
            $userDetails['specialization'] = $this->specialization;
            $userDetails['workDate'] = $this->workDate;
            return $userDetails;
          }
        
      }
?>

