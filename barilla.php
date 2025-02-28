<?php 
$pates = pates(
  "Fusilli Al Bronzo" => "11",#fait
  "Fusilloni Al Bronzo" => "11",#fait
  "Linguine Al Bronzo" => "11",#fait
  "Mezzi Rigatoni Al Bronzo" => "14",#fait
  "Penne Rigate Al Bronzo" => "12",
  "Spaghetti Al Bronzo" => "11",
  "Spaghettoni Al Bronzo" => "12  ",
  "Coquillettes blé complet" => "7",
  "Farfalle Integrale" => "10",
  "Fusilli Blé Complet" => "11",
  "Linguine Blé Complet" => "9",
  "Penne Rigate Blé Complet" => "9",
  "Spaghetti Blé Complet" => "10",
  "Tortiglioni Blé Complet" => "11",
  "Cannelloni" => "30",
  "Casarecce" => "9",
  "Castellane" => "9",
  "Conchiglie" => "12",
  "Farfalle Generose" => "12",
  "Fettuccine" => "7",
  "Fusilli Bucati Corti" => "10",
  "Lasagne con Spinaci" => "20",
  "Lasagne semola Collezione" => "20",
  "Mafaldine" => "9 ",
  "Mezze Penne Tricolore" => "10",
  "Orecchiette" => "12",
  "Tagliatelle" => "6",
  "Tagliatelle aux Épinards" => "7",
  "Tortellini au Jambon et au Fromage" =>"11",#fait
  "Treccine" => "10",
  "Trofie" => "10",
  "Fettuccine à l'œuf" => "7",
  "Fettuccine Ricce à l'œuf" =>"7",
  "Lasagne à l'œuf"=>"20",
  "Pappardelle à l'œuf"=>"7",
  "Tagliatelle à l'œuf"=>"7",
  "Casarecce de Pois Chiche"=>"9",
  "Fusilli de lentilles corail"=>"9",
  "Risoni aux Lentilles Corail et aux Pois Chiches" =>"9",
  "Risoni aux Lentilles Corail, aux Pois Chiches et aux Petits Pois"=>"9",
  "Spaghetti de Lentilles Corail" =>"9",
  "Bavette"=>"8",
  "Capellini N°1"=>"3",
  "Ditalini Rigati"=>"8",
  "Filini"=>"3",
  "Fusilli"=>"11",
  "Girandole Torsades"=>"6",
  "Gnocchi"=>"11",
  "Maccheroni"=>"7",
  "Penne Lisce"=>"9",
  "Penne Rigate"=>"11",
  "Pipe Rigate"=>"10",
  "Rigatoni"=>"11",
  "Risoni"=>"10",
  "Spaghetti No. 5"=>" 10 ",
  "Spaghettini N°3"=>"5",
  "Spaghettoni N°7"=>"11",
  "Stelline"=>"6",
  "Mini Farfalle"=>"6",
  "Mini Penne Rigate"=>"6",
  "Mini Pipe Rigate"=>"6",
  "Coquillettes Sans Gluten"=>"7",
  "Fusilli Sans gluten"=>"11",
  "Lasagne sans gluten"=>"60",
  "Penne Rigate sans gluten"=>"9",
  "Spaghetti sans gluten"=>"10",
  "Tagliatelle sans gluten"=>"7"
);
function  trouver([]:string){

foreach ($minuteurs as $nom => $minutes) {
  $secondes = $minutes * 60;
  echo "Début du minuteur pour: $nom ($minutes minutes)\n";

  while ($secondes > 0) {
      echo "Temps restant pour $nom : " . gmdate("i:s", $secondes) . " minutes\n";
      sleep(1);
      $secondes--;
  }

  echo "Temps écoulé pour $nom !\n\n";
}
}
  include 'barilla.view.php';
?>
<script>
  const seconde= document.querySelector('.secondes.number')
const heure= document.querySelector('.heure.number')
const minutes= document.querySelector('.minutes.number')
const jour= document.querySelector('.jours.number')
console.log(seconde,minutes,heure,jour)
</script>
