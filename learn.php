<?php
include "./b8.php";
function _getb8()
{
    $b8=new b8; 
	if(!$b8->constructed) {
        error_log("Could not initialize b8. Truncating.");
        return NULL;
    }
    return $b8;
}
//print_r(api_learn_ham("资生堂学习机,史前最低价,只需12元即可买到心仪的学习机!"));
$b8 = _getb8();
print_r($b8->classify("资生堂"));
