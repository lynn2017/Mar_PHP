<?php
/*

Use PHP 5.3.

Task: 
Develop a function which validates string looking like this "[{}]"
Every opening bracket should have corresponding closing bracket of same type
"[{}]" is a correct string, "[{]}" is malformed one.


Usage: <your host>/validateString.php?i={input string}

Example: <your host>/validateString.php?i={[{{}

*/



function validateString($inputString) {

	$symbols = array('(' => ')', '[' => ']', '{' => '}');
 
	$stack = array();

    foreach (str_split($inputString) as $char) {
    //push
    if(in_array($char, array_keys($symbols))) {
        array_push($stack, $symbols[$char]);
    //pop
    }else if(in_array($char, array_values($symbols))) {
        if ($char != array_pop($stack)) //not match
        {
            return false;
            break;
        }
    }
}

    // Your code here
	return true;
}

$inputString = 'asd({)}asdasdf{asd}[]fasdf';

echo "'".$inputString."' is ";
echo validateString($inputString)?"correct":"incorrect";