<?php
/*Given an integer array nums, move all 0's to the end of it while maintaining the relative order of the non-zero elements. Note that you must do this in-place without making a copy of the array.
INPUT: 
nums = [0,1,0,3,12] 
OUTPUT:
 nums = [1,3,12,0,0]*/
 
 $nums =[0,1,0,3,12] ;
 $nums[0]=1;
 $nums[1]=3;
 $nums[2]=12;
 $nums[3]=0;
 $nums[4]=0;
 
 print_r($nums);


//////////////////////orrrrrrrrrrrrrrrrrrrrrr//////////////////////
echo"<hr>";
$nums = [0, 1, 0, 3, 12];
function moveZeroes(&$nums)
 {
    $nums = array_merge(array_filter($nums, function ($num) {return $num !== 0;}),
                        array_filter($nums, function ($num) {return $num === 0;}));
 }
 moveZeroes($nums);
print_r($nums);






?>