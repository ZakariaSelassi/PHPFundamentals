<html>
<?php
  function cleanup_room(){
    $possible_states = array("Health hazard","filthy", "dirty","clean","CCleaner");
    $room_filthiness = $possible_states[2];
    if($possible_states[0] == $room_filthiness)
    {
      echo "Yuk, Room is Disgusting! Let's clean it up !";
    }else if($possible_states[1] == $room_filthiness)
    {
      echo "Yuk,Sale sale";
    }
    else if($possible_states[2] == $room_filthiness)
    {
      echo "Yuk,Sale";
    }
    else if($possible_states[3] == $room_filthiness)
    {
      echo "Yuk,Clear";
    }else{

        echo "Yuk,Cleaner";

    }
}
cleanup_room();
?>
</html>