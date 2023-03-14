<?php

$voters_age = 19;
$has_PVC = true;
$voters_ward = 060;

if($voters_age > 18 && $has_PVC == true && $voters_ward == 020){
    echo "Voter eligible to vote";
}

elseif($voters_age <= 18 && $has_PVC == true && $voters_ward == 020){
    echo "Voter is less than the required age";
}

elseif($voters_age > 18 && $has_PVC == false && $voters_ward == 020){
    echo "Voter does not have PVC";
}

elseif($voters_age > 18 && $has_PVC == true && $voters_ward != 020){
    echo "Voter ward is not 20";
}

else{
    echo "You cannot vote";
}

?>