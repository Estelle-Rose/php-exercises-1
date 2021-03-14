<?php
function affichertableau($notes) {
        foreach ($notes as $key => $note) {   
             echo ($key === 0 ? '' : ' - ')  ;
             echo "$note";
            
        }
}
function calculermoyenne($notes) {
    $result = 0;   
    foreach ($notes as $note) {
       $result += $note;
    }
    return $result / count($notes);
}
function iseven($notes) {    
    foreach($notes as $note) {                
        if($note % 2 !== 0) {
            return false;
        }
    }
    return true;
}
?>