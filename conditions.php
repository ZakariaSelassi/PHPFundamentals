<html>
<?php
  function cleanup_room(){
    $room_is_filthy = true;
    if ($room_is_filthy != true) 
    { 
        echo "Yuk, la pièce est sale: nettoyons-la!";
        $room_is_filthy = false;
        if($room_is_filthy == false)
        {
          echo "<br> La chambre est maintenant propre!" ;
        }
    } 
    else 
    {
        echo "<br> Rien à faire, la chambre est soignée." ; 
    }


   
}
cleanup_room ();
?>
</html>