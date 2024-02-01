<?php

include_once 'user.php';
include_once 'userRepository.php';

// Create two user instances with different data
$user1 = new User(null, 'djellezathaqiA', 'djellezaAthaqi@gmail.com', 'ubtUBT123','admin');
$user2 = new User(null, 'aulonaqkaA', 'aulonaAqaka@gmail.com', 'ubtUBT123','admin');

// Create a UserRepository instance
$userRepository = new UserRepository();

// Insert the first user
$userRepository->insertUser($user1);

// Insert the second user
$userRepository->insertUser($user2);

echo "Two users have been inserted successfully.";

?>