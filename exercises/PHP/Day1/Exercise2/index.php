<!DOCTYPE html>
<html>
<head>
	<title>Exercise2</title>
</head>
<body>
	<?php
	    function kiem_tra_chan_le($number) {
	    	if ($number % 2 == 0) {
	            echo "$number là số chẵn<br/>";    		
	    	}
	    	else{
	    		echo "$number là số lẻ<br/>";
	    	}
	    }
	kiem_tra_chan_le(34);
	kiem_tra_chan_le(27);
	kiem_tra_chan_le(8);
	kiem_tra_chan_le(26);
	?>
</body>
</html>