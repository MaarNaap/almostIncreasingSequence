<?php

/*  1 - for loop
 *  2.1 - if 1>0 = ok
 *  2.2 - if 0>1 =>
 *  3.1 - delete 0
 *  3.2 - run strict function
 *  3.2.1 - if true => return true break;
 *  3.2.2 - if false =>
 *  3.2.2.1 - add 0 again
 *  3.2.2.2 - delete 1
 *  3.2.2.3 - run strict function & repeat
 *
 * 
*/

    // almost incease
function almostIncreasingSequence($sequence){

$sCount = count($sequence);
for($a=1; $a < $sCount; $a++){
    if($sequence[$a-1] >= $sequence[$a]){
        $elementValue = $sequence[$a-1];
        array_splice($sequence,$a-1,1);
        if(increasing($sequence)){
            print "YES, TRUE 1";
            return true;
            break;
        }else{
            array_splice($sequence, $a-1, 0, $elementValue);
            array_splice($sequence, $a,1);
            if(increasing($sequence)){
                print "YES, TRUE 2";
                return true;
                break;
            } else{
                print "NO, FALSE 1";
                return false;
                break;
            }
        }

    } 
    
} print "YES, TRUE 4";
    return true;
}


// strict incease     
function increasing($sequence){
 $count = count($sequence);
 for($i=1; $i<$count; $i++){
   if($sequence[$i] > $sequence[$i-1]){
   }else{
    print "false";
    return false;
    break;
   } 
 } print "true";
   return true;
}
