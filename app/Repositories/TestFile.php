<?php

    namespace App;

    $userRepository = new UserRepository('Pasi', '123 Main St', '1234567890', 'pasi@example.com', 'U001', 'Male');
    $userDetails = $userRepository->getUserDetails();
      echo "User Details:" . PHP_EOL;
    foreach ($userDetails as $field => $value) {
    echo "$field: $value" . PHP_EOL;
    }

    $doctorRepository = new DoctorRepository('Dr. Mae', '456 Elm St', '9876543210', 'mae@example.com', 'D001', 'Female', 'Cardiology', '2022-12-31');
    $doctorDetails = $doctorRepository->getDoctorDetails();
    echo "Doctor Details:" . PHP_EOL;
    foreach ($doctorDetails as $field => $value) {
    echo "$field: $value" . PHP_EOL;
    }

    $specialtyRepository = new SpecialtyRepository();
    $specialtyRepository->addSpecialty(1, 'Cardiology');
    $specialtyRepository->addSpecialty(2, 'Pediatrics');
    $specialtyRepository->addSpecialty(3, 'Dermatology');

    $specialties = $specialtyRepository->getSpecialties();
    echo "Specialties:" . PHP_EOL;
    foreach ($specialties as $id => $name) {
    echo "ID: $id, Name: $name" . PHP_EOL;
    }


?>