<!DOCTYPE html>
<html>
<head>
	<title>Exẻcise4</title>
</head>
<body>
	<?php
	    $i = 1;
	    $tong = 0;
	    $tong_binh_phuong = 0;
	    while ($i <= 100) {
	        $tong += $i;
	        $tong_binh_phuong += ($i * $i);
	        $i++;
	        if ($i == 50) break;
	    }
	    echo "Tổng = $tong <br/>";
	    echo "Tổng bình phương = $tong_binh_phuong";
	?>
</body>
</html>