<?php
$data=yaml_parse_file('data/A_propos.yaml');

echo "</br>";
echo "<h1>A Propos</h1>";
echo "<div id='accroche'>";
echo "<p>".$data["accroche"]."</p>";
echo "</br>";
echo "<p id='presentation'>".$data["presentation"]."</p>";
echo "</div>";
echo "</br>";
echo "<hr size='1'>";
/*echo '<img src="images/'.$data['image'].'" />';*/

?>

