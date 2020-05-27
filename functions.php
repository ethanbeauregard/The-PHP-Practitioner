<?php 


function checkage($age){

  if($age > 0 && $age < 18) {
    echo 'You are too young to drink, and enter the club';
  } else if($age > 18 && $age < 21){
    echo 'You are too young to drink, but you may enter the club';
  } else {
    echo 'You may drink, and enter the club';
  }
}

function dd($data){
  die(var_dump($data));
}