<?php
$data=yaml_parse_file('data/formation.yaml');

echo "<div id=formation>";
echo '<h1 id="stage">Formation</h1>';
echo '<h2 id="stage1">'.$data ["stage1"].'</h2>';
echo "<br />";
echo "<p id='pstage'>".$data["stage1contenue"]."</p>";
echo "<br />";

echo '<h2 id="stage1">'.$data ["stage2"].'</h2>';
echo "<br />";
echo "<p id='pstage'>".$data ["stage2contenue"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage2contenue2"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage2contenue3"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage2contenue4"]."</p>";
echo "<br />";

echo '<h2 id="stage1">'.$data ["stage3"].'</h2>';
echo "<br />";
echo "<p id='pstage'>".$data["stage3contenue"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage3contenue2"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage3contenue3"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage3contenue4"]."</p>";
echo "<br />";

echo '<h2 id="stage1">'.$data ["stage4"].'</h2>';
echo "<br />";
echo "<p id='pstage'>".$data["stage4contenue"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage4contenue2"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage4contenue3"]."</p>";
echo "<br />";

echo '<h2 id="stage1">'.$data ["stage5"].'</h2>';
echo "<br />";
echo "<p id='pstage'>".$data["stage5contenue"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage5contenue2"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage5contenue3"]."</p>";
echo "<br />";
echo "<p id='pstage'>".$data["stage5contenue4"]."</p>";
echo "<br />";
echo "</div>";




?>