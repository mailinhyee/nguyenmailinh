<!DOCTYPE html>
<html>
<head>
	<title>Exercise5</title>
</head>
<body>
	<?php
	    $SoDien = 500;
	    echo "Số điện = $SoDien <br/>";
	        if ("101" > $SoDien) {
	        $GiaDien = 450;
	        $GiaDiensau = $GiaDien * 1.1;
	        echo "Gía tiền điện p nộp trước tính thuế là: $GiaDienK <br/>"; 
	        echo "Gía tiền điên p nôp sau tính thuế  VAT là: $GiaDiensau";
	    }
	    if ("100" < $SoDien && $SoDien < "201") {
	        $GiaDien = 600;
	        $GiaDiensau = $GiaDien * 1.1;
	        echo "Gía tiền điện p nộp trước tính thuế là: $GiaDien <br/>"; 
	        echo "Gía tiền điên p nôp sau tính thuế  VAT là: $GiaDiensau";
	    }
	    if ("200" < $SoDien &&  $SoDien <"301") {
	        $GiaDien = 750;
	        $GiaDiensau = $GiaDien * 1.1;
	        echo "Gía tiền điện p nộp trước tính thuế là: $GiaDien <br/>"; 
	        echo "Gía tiền điên p nôp sau tính thuế  VAT là: $GiaDiensau";
	    }
	    if ("300" < $SoDien &&  $SoDien <"501") {
	            $GiaDien = 900;
	            $GiaDiensau = $GiaDien * 1.1;
	            echo "Gía tiền điện p nộp trước tính thuế là: $GiaDien <br/>"; 
	            echo "Gía tiền điên p nôp sau tính thuế  VAT là: $GiaDiensau";
	    }
	    if ("500" < $SoDien &&  $SoDien <"1001") {
	        $GiaDien = 1000;
	        $GiaDiensau = $GiaDien * 1.1;
	        echo "Gía tiền điện p nộp trước tính thuế là: $GiaDien <br/>"; 
	        echo "Gía tiền điên p nôp sau tính thuế  VAT là: $GiaDiensau";
	    }
	    if ("1000" < $SoDien) {
	        $GiaDien = 1200;
	        $GiaDiensau = $GiaDien * 1.1;
	        echo "Gía tiền điện p nộp trước tính thuế là: $GiaDien <br/>"; 
	        echo "Gía tiền điên p nôp sau tính thuế  VAT là: $GiaDiensau";
	    }
	?>
</body>
</html>