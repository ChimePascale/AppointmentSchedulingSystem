<?php

    namespace App\Repositories;

    use App\Models\User;

    class UserRepository extends BaseRepository{
        public $userRepository;
        public $name;
        public $email;
        public $gender;
        public $password;
        
        public function __contruct(Models $User, $name, $email, $gender, $password){
            $this->model = $User;
            $this->name = $name;
            $this->email = $email;
            $this->gender = $gender;
            $this->password = $password;
        }
        public function getUserDetails() {
            return [
              'name' => $this->name,
              'address' => $this->address,
              'phoneNumber' => $this->phoneNumber,
              'email' => $this->email,
              'id' => $this->id,
              'gender' => $this->gender,
            ];
          }
        
        public function findByEmail($email){
            return $this->email;
        }
        public function findByPhoneNumber($phoneNumber){
            return $this->phoneNumber;
        }
        public function findByPassword($password){
            return $this->password;
        }
        public function findByGender(){
            return $this->gender;
        }
    }
       
?>