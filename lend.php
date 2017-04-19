<?php
require 'init.php';
//Form//
$form = $app->layout->add('Form');
$form->setModel(new friends($db));

$form->onSubmit(function($form) {
	$form->model->Save();
	return $form->success('Record updated');
});
?>

