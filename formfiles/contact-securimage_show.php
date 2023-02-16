<?php

include 'contact-securimage.php';

$img = new securimage();

// Change some settings

$img->image_width = 120;
$img->image_height = 36;

$img->code_length = 5;
$img->charset = 'ABCDEFGHKLMNPRSTUVWYZ23456789';
$img->perturbation = 0.10;
$img->iscale = 10;
$img->text_angle_minimum = -17;
$img->text_angle_maximum = 17;
$img->image_bg_color = new Securimage_Color("#e4e4c9");
$img->text_color = new Securimage_Color("#b1b165");
$img->use_transparent_text = false;
$img->num_lines = 15;
$img->line_color = new Securimage_Color("#DBDBB7");
$img->draw_lines_over_text = false;

$img->show(); // alternate use:  $img->show('/path/to/background_image.jpg');
