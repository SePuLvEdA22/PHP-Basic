<?php
require_once './untils/functions.php';

$data = get_data(API_URL);
$untilMessage = get_until_message($data['days_until']);
?>

<?= require 'sections/head.php' ?>
<?= require 'sections/main.php' ?>
<?= require 'sections/styles.php' ?>