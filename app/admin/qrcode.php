<?php

require './class/phpqrcode.php';

QRcode::png('http://'.$_SERVER['HTTP_HOST'].'/index.php?id='.$_GET['id'], false, 'L', 15);