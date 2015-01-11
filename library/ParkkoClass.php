<?php  
class ParkkoClass {
	function convertToThaiNumber($num){  
		return str_replace(array( '0' , '1' , '2' , '3' , '4' , '5' , '6' ,'7' , '8' , '9' ),  
		array( "๐" , "๑" , "๒" , "๓" , "๔" , "๕" , "๖" , "๗" , "๘" , "๙" ),  $num);  
	}
	
	function thai_date($time){  
	   $thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");  
		$thai_month_arr=array(  
		    "0"=>"",  
		    "1"=>"มกราคม",  
		    "2"=>"กุมภาพันธ์",  
		    "3"=>"มีนาคม",  
		    "4"=>"เมษายน",  
		    "5"=>"พฤษภาคม",  
		    "6"=>"มิถุนายน",   
		    "7"=>"กรกฎาคม",  
		    "8"=>"สิงหาคม",  
		    "9"=>"กันยายน",  
		    "10"=>"ตุลาคม",  
		    "11"=>"พฤศจิกายน",  
		    "12"=>"ธันวาคม"                    
		); 

	    $thai_date_return="วัน".$thai_day_arr[date("w",$time)];  
	    $thai_date_return.= "ที่ ".$this->convertToThaiNumber(date("j",$time));  
	    $thai_date_return.= " ".$thai_month_arr[date("n",$time)];  
	    $thai_date_return.= " พ.ศ.".$this->convertToThaiNumber((date("Y",$time)+543));  
	    $thai_date_return.= " เวลา ".$this->convertToThaiNumber(date("H:i",$time))." น.";  
	    return $thai_date_return;  
	}  
	
	function timeDuration($begin, $end){  
	    $remain = intval(strtotime($end) - strtotime($begin));  
	    $hour=ceil($remain/3600);  
	    //$l_hour=$remain%3600;  
	    //$minute=floor($l_hour/60);  
	    //$second=$l_hour%60;  
	    //return $hour." ชั่วโมง ".$minute." นาที";  
	    return $hour." ชั่วโมง";
	} 
}
?> 