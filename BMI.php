<?php
if(isset($_GET['height'], $_GET['weight'], $_GET['calculate'])):
    $height = $_GET['height'];
    $Splitted = str_split($height);
    if(count($Splitted) == 3):
        $height = "{$Splitted[0]}.{$Splitted[1]}{$Splitted[2]}";
    endif;

    new BMI($_GET['weight'], $height);
endif;
?>

<form method="GET" action="<?=$_SERVER['PHP_SELF'];?>">
Height:
<input type="text" name="height" value="" />
<br />
Weight:
<input type="text" name="weight" value="" />
<br />
<button type="submit" name="calculate">Submit</button>
</form>

<br/>
<hr>
Below 18.5 Underweight<br/>
18.5 ' 24.9 Normal or Healthy Weight<br/>
25.0 ' 29.9 Overweight<br/>
30.0 and Above Obese
