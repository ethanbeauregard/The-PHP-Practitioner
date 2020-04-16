<?php


function checkAge($age){
  if($age < 18) {
    echo 'Not allowed in';
  } else if($age >= 18 && $age < 21) {
    echo 'Allowed in, but cannot drink';
  } else {
    echo 'Allowed in and can drink'; 
  }
}