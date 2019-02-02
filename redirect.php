<?php

$_POST['CODE'] = 'CODE'; // Simulate post data...
$array_of_codes = array('CODE' => 'pathtoredirect');
$get_code = addslashes(strtoupper($_POST['CODE']));

if(array_key_exists($get_code, $array_of_codes))
{
    header("Location:".$array_of_codes[$get_code]."");
}else
{
    echo "Error: Code not in array.";
}
?>