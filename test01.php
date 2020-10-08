<button type=button><a href="index.php">回首頁</a></button>
<button type=button><a href="TEST01.php?height=1.87&weight=55">小明的BMI</a></button>
<button type=button><a href="TEST01.php?height=1.76&weight=75">小華的BMI</a></button>
<button type=button><a href="TEST01.php?height=1.77&weight=95">小黃的BMI</a></button>
<hr>

<?php
///////////////////////原0827的test07
function computeBMI($height, $weight)
{ //變數命名用名詞，函數用動詞
    echo "身高：", $height, "m<br>";
    echo "體重：" . $weight . "kg<br>";
    $bmi = $weight / $height ** 2;
    echo "BMI：" . $bmi . "<br>";
    if ($bmi > 24) {
        echo "FAT！";
    } else if ($bmi >= 18.5) {
        echo "GREAT！";
    } else {
        echo "SKINNY！";
    }
}

$height = $_GET["height"];
$weight = $_GET["weight"];

if ($height != NULL and $weight != NULL) { //兩值皆不是空的才計算
    computeBMI($height, $weight); //將函數功能放進if之中
    echo "<hr>";
    //加網址列輸入以下：?height=1.87&weight=65
} else { //如有任一值是空的，則
    echo "請在網址列輸入資料<br>";
    echo "使用例：http://localhost/mySite/nkust-0827/test07.php?height=1.87&weight=65";
}
?>
<hr>

<hr>