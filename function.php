<?php
if(!empty($_POST['age'])){
if($_POST['age'] < 18){
echo 'Оскільки ви не досягли 18 років, не можете залишити свій коментар';
} else {

echo 'Дякую, ваш коментар з`явиться одразу після обробки';
}}
?>