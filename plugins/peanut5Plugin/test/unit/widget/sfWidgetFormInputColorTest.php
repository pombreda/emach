<?php

include(dirname(__FILE__).'/../../bootstrap/unit.php');

$t = new lime_test(1);
$w = new sfWidgetFormInputColor();

$t->is($w->render('color'), '<input type="color" name="color" id="color" />', 'render tag ok');