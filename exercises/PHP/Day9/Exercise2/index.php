<?php
    $mang_so_nguyen = array('12', '96','101','87','69');
    $tbc = array_sum($mang_so_nguyen)/count($mang_so_nguyen);
    echo "max = ".max($mang_so_nguyen)."<br/>";
    echo "min = ".min($mang_so_nguyen)."<br/>";
    echo "Trung bình cộng các giá trị trong mảng là: $tbc";
?>