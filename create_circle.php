
	<?php 
			
	function create_circle($color, $width, $height){

	echo '<div class="circle" style ="
				background:'.$color.'; 
				width:'.$width.'px; 
				border-radius: 50%; 
				height:'.$height.'px;
				"> </div>';
													}
	create_circle('pink', 500, 500);
	
	?>

