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
?>