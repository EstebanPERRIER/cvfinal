<?php
$data=yaml_parse_file('data/stage.yaml');

echo "<div id=stageglobal>";
echo '<h1 id="stage">Expérience</h1>';
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
echo "</br>";
echo "<div id='pdf'>";
echo '<a href="https://www.pdf.investintech.com/preview-frames.php?id=WGMxUkVjRVMxVTZqTTBFZ25yOFhwbEY0SWZDNmlCbERtZE1xVGRSWkdlZHB1dElPb0x4SXhGSFNwdDdZaTRGT0xPMzJrNG91MHNONGVHMVZwd2N0bzNZdTRsS1p3c2xMODhkbmtsZ05CdmVEeS94TjQvL09QcHczYU1DcWtZaU0=" target="_blank">'.$data["cv"]. '</a>' ."<br />";
echo '<a href="images/cv.pdf" download="CV Perrier Estéban.pdf">Télécharger</a>';
echo "</br>";
echo "</div>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "<hr size='1'>";
?>