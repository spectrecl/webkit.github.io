<?php
$random = mt_rand(10000, 100000 );
$result = mail("sergiokiseliov@gmail.com", "Консультация#$random",  "Имя: $_POST[name] \nЭлектронная почта: $_POST[email] \nSkype: $_POST[skype]");
echo 'Спасибо, в ближайшее время с Вами свяжется наш менеджер для уточнения всех данных';
?>	