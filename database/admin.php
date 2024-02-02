<?php

include_once 'user.php';
include_once 'userRepository.php';


$user1 = new User(null, 'djellezathaqiA', 'djellezaAthaqi@gmail.com', 'ubtUBT123','admin');
$user2 = new User(null, 'aulonaqkaA', 'aulonaAqaka@gmail.com', 'ubtUBT123','admin');

$userRepository = new UserRepository();


$userRepository->insertUser($user1);


$userRepository->insertUser($user2);

echo "Two users have been inserted successfully.";

?>