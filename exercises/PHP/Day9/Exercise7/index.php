<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Exercise7</title>
</head>
<body>
    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <tbody>
            <?php for ($i=1; $i <= 8 ; $i++) {  
                echo "<tr>";
                for ($j=1; $j <= 8 ; $j++) { 
                    $total = $i + $j;
                    if ($total %2 == 0) {
                        echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
                    }
                    else{
                        echo "<td height=30px width=30px bgcolor=#000000></td>";
                    }
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>