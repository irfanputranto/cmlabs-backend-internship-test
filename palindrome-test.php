<?php

function isPalindrome($word) {
	$clnWord = strtolower(str_replace(' ', '', $word));
	
	$reversedWord = strrev($clnWord);
	
	return $clnWord == $reversedWord;
}

$wordToCheck = "refer";

if(isPalindrome($wordToCheck)) {
	echo $wordToCheck . " adalah palindrome";
} else {
	echo $wordToCheck . " bukan palindrome";
}