<?php 

$pronouns = array('I', 'You', 'He/She','We', 'You', 'They');
$find = 'He/She';

foreach($pronouns as $key => $value)
{   
    if(strpos($value,$find) !== false)
    {
        $pronouns[$key] = $value ." codes";
    }
    else
    {
        $pronouns[$key] = $value ." code";
    }
   
}
var_dump($pronouns);

$n = 0;
while($n <100)
{   
    $n++;
    echo $n. " ";
    
}

for($i=0; $i<=100; $i++)
{   
    echo $i;
}

$nameBe = array("Humberto Mahlum",
"Domitila Borne",
"Lakia Pettiway",
"Zaida Wilcoxen",
"Caterina Burkley",
"Isela Mcshan",
"Arthur Logsdon",
"Bernie Waxman",
"Peggie Ridgway",
"Vernia Mcfalls",
"Nelia Naron",
"Lucius Herrod",
"Stacie Luedtke",
"Victoria Levins",
"Reid Mijares",
"Zona Chagnon",
"Verla Hardison",
"Madalyn Remmers",
"Domingo Kelly",
"Angel Berney");

foreach($nameBe as $name)
{
    echo $name . "<br>";
}

$country = array('BE' => "Belgique", 'NL' => "Pays-bas",'FR' => "France",'ES' => "Espagne" ,'DE' => "Allemagne", "PT" => "Portugale", "S" => "Suisse", "I" => "Itali");
?>

<label for="country-select"> Country </label>
<select name="country" id="country-select">
    <option value="">Choose a country</option>
    <?php
        foreach($country as $key => $value)
        {
            echo '<option value="'.$value.'">'.$key.'</option>';
        }
    ?>
</select>