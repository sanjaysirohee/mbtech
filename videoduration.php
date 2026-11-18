<?php
$file='https://mbtech.in/3b69d88c763b8c6e34d7b3fe4a9e3bb8.mp4';
function getDurationSeconds($file){
   $dur = shell_exec("ffmpeg -i ".$file." 2>&1");
   if(preg_match("/: Invalid /", $dur)){
      return false;
   }
   preg_match("/Duration: (.{2}):(.{2}):(.{2})/", $dur, $duration);
   if(!isset($duration[1])){
      return false;
   }
   $hours = $duration[1];
   $minutes = $duration[2];
   $seconds = $duration[3];
   return $seconds + ($minutes*60) + ($hours*60*60);
}
?>