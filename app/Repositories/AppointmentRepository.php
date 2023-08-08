<?php

    namespace App\Repositories;

    use App\Models\Pattient;

    class AppointmentRepository {

        private $id;
        public $time;
        public $date;
      
        public function __construct(Models $Appointment, $id, $time, $date) {
          $this->model = $Appointment;
          $this->time = $time;
          $this->date = $date;
          $this->id = $id; 
        }
        public function makeAppointment(){
            
        }
      }
?>
