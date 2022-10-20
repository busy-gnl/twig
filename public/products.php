<?php
require_once __DIR__ . '/../config/twig.php';

$products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre', 'harpe'];
$twig->display('products.html.twig',  compact('products'));
