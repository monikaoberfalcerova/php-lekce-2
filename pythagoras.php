<?php
$a = 4;
$b = 5;
$obdelnikobsah = $a * $b;
echo "Obsah obdélníku o stranách $a cm a $b cm je $obdelnikobsah cm².";
?>

<?php
echo '<br>';
echo '<br>';
?>

<?php
$strana = 6;
$uhel = 60;
$vyska = $strana * sin(deg2rad ($uhel));
$trojuhelnikobsah = round ($vyska * $strana / 2);
echo "Rovnostranný trojúhelník o straně délky $strana cm a úhlu $uhel stupňů je $trojuhelnikobsah cm².";
?>
