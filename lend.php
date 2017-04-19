<?php
require 'init.php';
//Form//
$form = $app->layout->add('Form');
$form->setModel(new friends($db));

$form->onSubmit(function($form) {
	$form->model->save();
	return $form->success('Record updated');
});
?>

