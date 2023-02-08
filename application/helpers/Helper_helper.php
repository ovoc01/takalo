<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 if(!function_exists('getIndex')){
    function getIndex($length){
        $index_array = array();
        if($length<9){
            $index_array[] = $length;
        }
        else{
            for ($i=0; $i <$length ; $i++) { 
                if($i%9==0 && $i>0){
                    if(count($index_array)==0){
                        $index_array[] = $i;
                    }else{
                        $index_array[]  = $i - $index_array[count($index_array)-1];
                    }
                }
            }
            $index_array[] = $length - $index_array[count($index_array)-1] ;
        }
        return $index_array;
    }
 }
