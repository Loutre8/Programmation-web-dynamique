<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php

		$my_text = "Bonjour je suis un petit chat mignon qui fait plein de bêtises";
		$my_text_2 = "Deuxième texte"; 

function text_test($text, $limite){
	$size_text=strlen($text);
	if(strlen($text)>$limite){
			echo "text too long";
	} else {
	//echo strlen($my_text);
	//echo $my_text;
	echo $text;
	}
}

text_test($my_text, 50);

?>

</body>
</html>