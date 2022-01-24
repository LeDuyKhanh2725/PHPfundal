<?php

require __DIR__ . '/vendor/autoload.php';


use Staff\Manager;
use Staff\HRStaff;


$Managerinfo = new Manager('A01', 'Khanh', 'leduykhanh2725Âgmail.com', '000001111',TRUE);

var_dump($Managerinfo->getInfo());

$Managerinfo->ManageInfor();


$HRstaffinfo = new HRStaff('B01', 'Duy Khanh', 'leduykhanh7777Âgmail.com', '000002222',10);

var_dump($HRstaffinfo->getInfo());

$HRstaffinfo->ManageInfor();
