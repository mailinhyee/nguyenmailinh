<?php
    $i = 0;
    //viet chuong trinh tinh va in ra tong 100 so ng
    $tong = 0;
    while ($i <= 100) {
        $tong += $i;
        $i++;
    }
    echo "Tổng của 100 số nguyên đầu tiên(1-100) là: $tong";
    //viet chuong trinh in ra cac so chia het cho 3 in(20-50)
    while ($i <= "50") {
        if ($i % 3 == 0 && $i >="20") {
            echo $i."  ";    
        }
        $i++;
    }

?>