<?php
// Tasks
// 1. Variables 
$name = "Ellen Karganilla";
$age = 22;
$address = "Pasay City";
$hobbies = "creating trackers";
$pet_peeve = "noisy environment"; 

echo 'Name: ' . $name, '<br>';
echo 'Age: ' . $age, '<br>';
echo 'Address: ' . $address, '<br>';
echo 'Hobbies: ' . $hobbies, '<br>';
echo 'Pet_peeve: ' . $pet_peeve, '<br>';


// 2. Single-line comment
$name = "Ellen Karganilla";
$age = 22;
$address = "Pasay City";
// $hobbies = "creating trackers";
// $pet_peeve = "noisy environment";  


// 3. Constants
define('NAME', 'Ellen Karganilla'); 
define('AGE', 22);
define('ADDRESS', 'Pasay City');
define('HOBBIES', 'creating trackers');
define('PET_PEEVE', 'noisy environment');

echo 'Name: ' . NAME, '<br>';
echo 'Age: ' . AGE, '<br>';
echo 'Address' . ADDRESS, '<br>';
echo 'Hobbies: ' . HOBBIES, '<br>';
echo 'Pet_peeve: ' . PET_PEEVE, '<br>';


// 4. var_dump
var_dump(NAME);
var_dump(AGE);
var_dump(ADDRESS);
var_dump(HOBBIES);
var_dump(PET_PEEVE);

// 5. Multi-line comment
/*
Noisy environment interrupts my concentration and makes it difficult for me 
to focus on tasks particularly when I'm trying to study, or enjoy a quiet activity. 
It also makes me more stressed, which changes my mood. It also gives me headaches. 
More significantly, it throws off my sleeping pattern, which results in bad sleep 
and related health problems. 
*/