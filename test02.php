<?php
function accu ($n){
    $total = 0;
    for ($i = 1; $i <= $n; $i ++){
        $total += $i ; //$total = $total + $i
        }
        return $total;
}
function fact ($n){
    $total = 1;
    for ($i = 1; $i <= $n; $i ++){
        $total *= $i ; 
        }
        return $total;
}
function gen_row ($bgc, $c1, $c2, $c3){
    echo "<tr bgcolor = $bgc><td>$c1</td><td>$c2</td><td>$c3</td></tr>";

}
echo "<table border=0 width=300>";
gen_row ("#aaaaaa", "i", "累加", "累乘");

for ($i = 1; $i<=20; $i += 1){
    
    if ($i%2)
    gen_row ("#cccccc", $i, accu ($i), fact ($i));
    else
    gen_row ("#ccccff", $i, accu ($i), fact ($i));
    
}
echo "</table>";
