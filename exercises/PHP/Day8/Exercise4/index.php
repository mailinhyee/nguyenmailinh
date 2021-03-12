<!DOCTYPE html>
<html>
<head>
	<title>Exercise4</title>
</head>
<body>
	<?php
	    $masanpham = 'EV2009';
	    $tensanpham = 'Tấm hợp kim nhôm ngoài trời EV2009';
	    $SoLuong = '500';
	    $DonGia = '160000';
	    const VAT = '0.05';
	    echo "Mã sản phẩm: $masanpham <br/>"; 
	    echo "Tên sản phẩm: $tensanpham <br/>";
	    echo VAT;
	    echo "<br/>";
	    $trctruthueVAT = $SoLuong * $DonGia;
	    $sautruthueVAT = $SoLuong * $DonGia * VAT;
	    echo "Sản phẩm trước khi trừ thuế VAT: $trctruthueVAT";
	    echo "<br/>";
	    echO "Sản phẩm sau khi trừ thuế VAT: $sautruthueVAT";
	?>
</body>
</html>