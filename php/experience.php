<?php
$data=yaml_parse_file('data/experience.yaml');
/*echo "<pre>";
print_r($data);
echo"</pre>";*/

foreach($data as $experience ){
    echo "<div id='experience'>";
    echo "</br>";
    echo "</br>";
    /*echo "<img class='figure' src='../images/profil.jpg' alt='Profil'>";*/
    echo '<img src="images/'.$experience['image'].'"/>';
    echo '<br /><h1 id="nom">'.$experience ["poste"].'</h1><br />'; 
    echo $experience ["etude"]."<br />"; 
    echo "<br />";
    echo $experience["lieu"]."<br />";
    echo "<br />";
    echo "De ".$experience["dateDebut"]." à ".$experience["dateFin"]."<br />";
    echo "<br />";
    echo  $experience["descriptif"]."<br />";
    echo "<br />";
    echo "Né le ".$experience["naissance"]."<br />";
    echo "<br />";
    echo "Localisation " .$experience["localisation"]."<br />";
    echo '<br /><h1 id="interet">'.$experience ["interet"].'</h1><br />';
    echo  $experience["passion"]."<br />";
    echo '<br /><h1 id="Social">'.$experience ["social"].'</h1><br />';
    echo  '<a href="https://www.facebook.com/profile.php?id=100008269170634" target="_blank">'.$experience["reseau"]. '</a>' ."<br />";
    echo  '<a href="https://twitter.com/Azorare" target="_blank">'.$experience["twitter"]. '</a>' ."<br />";
    echo "</div>";
   
}


?>

