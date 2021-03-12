<?php

    if(isset($_GET['name']) AND isset($_GET['gender']) AND isset($_GET['teachername']) AND isset($_GET['excuse']))
    {
        if(empty($_GET['name']) OR empty($_GET['gender']) OR  empty($_GET['teachername']) OR  empty($_GET['excuse']))
        {
          echo '<p>complete all the champs </p>';
        }
        $nom = $_GET['name'];
        $sex = $_GET['gender'];
        if($_GET['gender'] = 'boy')
        {
          $sex = "mon fils";
        }
        else{
          $sex = "ma fille";
        }
        date_default_timezone_set('Europe/Paris');
        $data = date("F j, Y");
        switch($_GET['excuse'])
        {
          case 'sick' : echo "Monsieur le principal
          $sex $nom , élève en classe de 4ième dans votre collège, ne pourra pas assister au cours le $data.
          Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos.
          Notre enfant devrait reprendre la classe dans une semaine, soit le lundi 20 septembre 2018.
          Pour tout complément d’informations n’hésitez surtout pas à nous contacter.
          Nos plus sincères salutations
          Signature des parents (mère ou père).";
          break;
          case 'deceased' : echo "Monsieur le Directeur (madame la Directrice),
          Mon fils (ma fille) devrait nous accompagner , mon épouse et moi, ce lundi à l’enterrement de sa grand-mère décédée inopinément samedi.
          Pouvez-vous donc lui accorder une autorisation de sortie pour cette matinée? Il devrait être de retour dans votre établissement scolaire avant la reprise des cours de l’après-midi, le même jour.
          En vous remerciant de votre compréhension, je vous prie de croire, Madame la Directrice (monsieur le Directeur), à mes sentiments distingués.
          
          Les parents de l’élève Mohamed Yacobi.";
          break;
          case ' other' : echo "il a la flemme";
          break;
          default : echo "tout est pété";
          break;
        }
    }

?>
<form method="get">
  <label>Children Name : </label>
  <input type="text" id="children" name="name">
  <br>
  <label for="gender"> Gender : </label>
 
  <label>boy</label>
  <input type="radio" id="boy" name="gender">
  <label>girl</label>
  <input type="radio" id="girl" name="gender">
  <br>
  <label for="teacher"> Teacher : </label>
  <input type="text" id="teacher" name="teachername">
  <br>
  <label for="reason"> excuse : </label>
  <br>
  <label for="sick"> sickness </label>
  <input type="radio" id="sick" name="excuse" value="sick">

  <label for="deceased"> deceased </label>
  <input type="radio" id="deceased" name="excuse" value="deceased">
  <label for="other"> Others </label>
  <input type="radio" id="other" name="excuse" value="other">

  <input type="submit" name="submit" value="Greet me now">

</form>