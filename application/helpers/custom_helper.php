<?php  
	function unicode_to_text($string)
	{
		$str = preg_replace('/%u([0-9A-F]+)/', '&#x$1;', $string);
		$text = html_entity_decode($str, ENT_COMPAT, 'UTF-8');
		return $text;
	}
?>