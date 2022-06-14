<?php

include_once "User.php";

$my_new_user = new User("nika", "zizikski");

echo $my_new_user->getSurname();