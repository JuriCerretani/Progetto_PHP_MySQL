<?php


function allTrash($list){

  echo "<h3> This is the weekly separate waste collection : </h3> <br>";
  foreach ($list as $arr){
    echo '<strong style="color:green;">'.$arr->Day.'</strong>'.' '.'<strong>'.$arr->Trash_Type.'</strong>'
    .' '. $arr->Start_Time.'-'.$arr->End_Time.'<br><br>';
  }

}

function trashToday($DT,$dailyTrash){
  if($dailyTrash->rowCount() == 0){
    echo '<h1> &#128577; No Trash Today &#128577; </h1>';
  } else {
    echo "<h1> &#128465; Today's Trash : &#128465; </h1>";
    foreach ($DT as $arr){
      echo '<strong>'.$arr->Trash_Type.'</strong>'.' '. $arr->Start_Time.'-'.$arr->End_Time.'<br><br>';
      }
      echo '<br>';
    }
  }





?>
