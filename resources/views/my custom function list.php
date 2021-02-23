<?php
admin.myapp.com
myapp.com
api.myapp.com


Route::middleware('web')->domain(env('SITE_URL'))->group(function(){
  all the main website route in here
});

Route::middleware('web')->domain('admin.' .env('SITE_URL'))->group(function(){
  all the admin portal aroute goes here
});


/*EMAIL CHECKER*/
public function emailExpression($email, $attribute){
	$email = trim(preg_replace('/\s+/', '', strtolower(strtoupper($email))));

	$email_expression = "/^[-A-Za-z0-9.-_]+@[-A-Za-z0-9.-_-]+\.[A-Za-z]{2,4}$/";
	$email_expression2 = "/^[ ]+[-A-Za-z0-9.-_-]+@[-A-Za-z0-9.-_-]+\.[A-Za-z]{3,5}$/";
	$email_expression3 = "/^[-A-Za-z0-9.-_]+@[-A-Za-z0-9.-_-]+\.[A-Za-z]{2,4}+[ ]+$/";
	$email_expression4 = "/^[ ]+[-A-Za-z0-9.-_-]+@[-A-Za-z0-9.-_-]+\.[A-Za-z]{3,5}+[ ]+$/";

	if(!empty($email)){

	if(preg_match($email_expression, $email) ||
	   preg_match($email_expression2, $email)||
	   preg_match($email_expression3, $email)||
	   preg_match($email_expression4, $email)){

		return $email;
	}
	else{
		echo ("Invalid $attribute address");
		
	}
	}
	else{
		echo "Please enter your $attribute address";
	}
	}



	/*PASSWORD CHECKER*/
public function passwordSanitize($password, $attribute){
	$password = trim(preg_replace('/\s+/', '', $password));
	$error = array();
	if(!empty($password)){
	if(strlen($password) > 6){
	if(preg_match("/[a-z]/", $password)){
	if(preg_match("/[A-Z]/", $password)){
	if(preg_match("/\d/", $password)){
	if(preg_match("/\W/", $password)){
		return $password;
	}
	else{
		$error[]= "$attribute should contain at least one special character (~!@#$%^&*(){}_-?/<>)";
	}
	}
	else{
		$error[]= "$attribute should contain at least one number (0-9)";
	}
	}
	else{
		$error[]= "$attribute should contain at least one capital Letter (A-Z)";
	}
	}
	else{
		$error[]= "$attribute should contain at least one small Letter (a-z)";
	}
	}
	else{
		$error[]= "Sorry $attribute should be minimum of 6 characters";
		
	}
	}
	else{
		$error[]= "Please enter your $attribute";
	}
	
	foreach ($error as $value) {
		echo $value;
	}

}



/*empty value checker*/

	public function inputChecker($name, $attribute){
		$name_expression = "/^[ A-Za-z._-]+$/";
	if(!empty($name)){
	if(preg_match($name_expression, $name)){

		$name = preg_replace('!\s+!', ' ', $name);
		return $name;
	}else{
		echo "Invalid character in the $attribute field";
	}
	}
	else{
		echo "Please enter your $attribute";
	}
	}


	public function allNameChecker($name, $attribute){
		$name_expression = "/^[ A-Za-z._-]+$/";
	if(!empty($name)){
	if(preg_match($name_expression, $name)){

		$name = preg_replace('!\s+!', '', $name);
		return $name;
	}else{
		echo "Invalid character in the $attribute field";
	}
	}
	else{
		echo "Please enter your $attribute";
	}
	}


	/*phone number checker*/

	public function phoneChecker($phone){
		$phone_expression = "/^[0-9]+$/";
	if(!empty($phone)){
		$phone = preg_replace('!\s+!', '', $phone);
	if(preg_match($phone_expression, $phone)){
	if(strlen($phone) == 11){
		$phone = "+234".ltrim($phone, $phone[0]);
		return $phone;
	}
	else{
		echo "Please phone number should look like 08012345678";
	}
	}
	else{
		echo "Invalid phone number";
	}
	}
	else{
		echo "Please enter your phone number";
	}
	}



	/*textarea checker*/

	public function textArea($string){
	if(!empty($string)){
	if(strlen($string) > 10){

		return $string;

	}
	else{
		echo "Message body too short";
	}
	}
	else{
		echo "Please you cannot send empty message";
	}
	}



	/*empty checker*/
	public function selectChecker($string, $attribute){
	if(!empty($string)){
	return $string;
	}
	else{
		echo "Please select $attribute";
	}
	}


	/*other options checker*/
	public function otherOptions($main, $option, $attribute){

		  $attribute = "/^[ A-Za-z._-]+$/";
        $value = preg_replace('!\s+!', ' ', $value);
            return  preg_match($attribute, $value);



		$name_expression = "/^[ A-Za-z._-]+$/";

		if($main == 'Others' && !empty($option)){
			if(preg_match($name_expression, $option)){
				$option = preg_replace('!\s+!', ' ', $option);
				return $option;
			}
			else{
				echo "Invalid character in the $attribute field";
			}
		}
		elseif ($main != 'Others' && empty($option)) {
			return $main;
		}
		else{
			echo "Please enter your $attribute option";
		}
	}


	/*date of birth checker*/

	public function dateOption($date, $attribute){
		$date_of_birth_expression ="/^[0-9]+\/[0-9]+\/[0-9]{2,4}$/";
		if(!empty($date)){
			if(preg_match($date_of_birth_expression, $date)){

				$dateChecker = $date;

				$dateChecker = explode("/", $date);
				$day = $dateChecker[0];
				$month = $dateChecker[1];
				$year = $dateChecker[2];
				if($day > 0 && $day <=31 && strlen($day) ==2){
					if($month > 0 && $month <=12 && strlen($month) ==2){
						if($year > 1900 && strlen($year) ==4){
							return $date;
						}
						else{
							echo "Invalid $attribute year entered (year should be greater than 1900)";
						}
					}
					else{
						echo "Invalid $attribute month entered (month should be between 01 - 12)";
					}
				}
				else{
					echo "Invalid $attribute day entered (day should be between 01 - 31)";
				}
			}
			else{
				echo "Invalid $attribute entered (dd/mm/yyyy)";
			}
		}
		else{
			echo "Please enter $attribute";
		}
	}


	/*this checks the account numbers*/
	public function accountNumber($var, $attribute){
	$var = preg_replace('!\s+!', '', $var);
	if(!empty($var)){
	if(is_numeric($var)){
	if(strlen($var) == 11){
	
	return $var;
	}
	else{
		echo "Please number should be 11";
		
	}
	}
	else{
		echo "Sorry only numbers allowed";
	}
	}
	else{
		echo "Please enter $attribute";
	}
	}


	/*only number method*/
	public function onlyNumber($var, $attribute){
	$var = preg_replace('!\s+!', '', $var);
	if(!empty($var)){
	if(is_numeric($var)){
	return $var;
	}
	else{
		echo "Sorry only numbers allowed in $attribute field";
	}
	}
	else{
		echo "Please enter $attribute";
	}
	}


	/*address checker*/
	public function addressChecker($name, $attribute){
	if(!empty($name)){
		$name = preg_replace('!\s+!', ' ', $name);
		return $name;
	}
	else{
		echo "Please enter your $attribute";
	}
	}


	/*address checker*/
	public function alphaNumeric($var, $attribute){
		$alphaNumeric = "/^[A-Za-z0-9]+$/";
		if(!empty($var)){
		if(preg_match($alphaNumeric, $var)){
			return $var;
		}
		else{
			echo "Invalid $attribute entered";
		}
		}
		else{
			echo "Please enter $attribute";
		}
		}


			/*loan other options checker*/
	public function loanStatusOptions($main, $option, $attribute){
	
	if($main == 'Active' && !empty($option)){
		return $option;
	}
	elseif ($main != 'Active' && empty($option)) {
		return $main = "null";
	}
	else{
		echo "Please enter your $attribute";
	}
	}


	/*accountNumber number checker*/

	public function accountNumberChecker($accountNumber){
		$phone_expression = "/^[0-9]+$/";
	if(!empty($accountNumber)){
		$accountNumber = preg_replace('!\s+!', '', $accountNumber);
	if(preg_match($phone_expression, $accountNumber)){
	if(strlen($accountNumber) == 10){
		
		return $accountNumber;
	}
	else{
		echo "Please account number should be 10 digit";
	}
	}
	else{
		echo "Invalid account number";
	}
	}
	else{
		echo "Please enter account number";
	}
	}

	/*checking if variables are equal*/

	public function variableAreEqual($variableOne, $variableTwo, $attribute){
		if($variableOne === $variableTwo){
			return $variableOne;
			return $variableTwo;
		}
		else{
			echo $attribute;
		}

	}


		/*checking if variables are not equal*/

	public function variableNotEqual($variableOne, $variableTwo, $attribute){
		if($variableOne !== $variableTwo){
			return $variableOne;
			return $variableTwo;
		}
		else{
			echo $attribute;
		}

	}



	/*image methods*/

	public function imageValidation($imageType, $imageURL, $tempName, $imageSize, $pngSize, $attribute){
		/*first check the type of the image submitted*/
		if(($imageType =="image/jpeg")||
		   ($imageType =="image/png") ||
		   ($imageType =="image/jpg") ||
		   ($imageType =="image/gif") ||
		   ($imageType =="image/tif")){

			/*create a link where the image should be saved*/
		   	$imageURL = $imageURL;

		   	/* move the temporary file name to the folder to be saved*/
		   move_uploaded_file($tempName, $imageURL);

		   /*theres a need to check the mime type*/
		   if(function_exists('finfo_open')){
			$finfo = finfo_open(FILEINFO_MIME_TYPE);
			$mtype = finfo_file($finfo, $imageURL);
			finfo_close($finfo);
		}
		elseif (function_exists('mime_content_type')) {
			$mtype = mime_content_type($imageURL);
		}

		if(($mtype =="image/jpg")|| ($mtype =="image/jpeg")	|| 
		($mtype =="image/png")||($mtype =="image/tif") ||($mtype =="image/gif")){

			$typeOk = True;

		switch($mtype) {
		case "image/gif": $src = imagecreatefromgif($imageURL); break;
		case "image/jpeg": 
		case "image/pjpeg": $src = imagecreatefromjpeg($imageURL); break;
		case "image/png": $src = imagecreatefrompng($imageURL); break;

		default: 			$typeOk = FALSE; break; 
		}

		if($typeOk){

		list($width, $height) = getimagesize($imageURL);

		$max = $imageSize;
		$newheight = $height;
		$newwidth = $width;


	if($width > $height && $max <$width){
		$newheight = $max / $width * $height;
		$newwidth = $max;
	}

	elseif($height >$width && $max < $height){
		$newwidth = $max / $height * $width;
		$newheight = $max;
	}

	elseif ($max < $width) {
		$newwidth = $newheight = $max;
	}



	$image_type  = $mtype;

	if($image_type =='image/png' && filesize($imageURL) >$pngSize){
  $tmp = imagecreatetruecolor($newwidth, $newheight);
  imagealphablending($tmp, FALSE);
  imagesavealpha($tmp, TRUE);
  imagefill($tmp, 0, 0, imagecolorallocatealpha($src, 0, 0, 0, 127));
  imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
  imageconvolution($tmp, array(array(-1, -1, -1,), array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
  imagepng($tmp, $imageURL);
  imagedestroy($tmp);
  imagedestroy($src);
  }
  elseif($image_type =='image/png' && filesize($imageURL) <$pngSize){
  $tmp = imagecreatetruecolor($newwidth, $newheight);
  imagealphablending($tmp, FALSE);
  imagesavealpha($tmp, TRUE);
  imagefill($tmp, 0, 0, imagecolorallocatealpha($src, 0, 0, 0, 127));
  imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
  imageconvolution($tmp, array(array(-1, -1, -1,), array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
  imagedestroy($tmp);
  imagedestroy($src);
  }

  else{
  
  $tmp = imagecreatetruecolor($newwidth, $newheight);
  imagecopyresampled($tmp, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
  imageconvolution($tmp, array(array(-1, -1, -1,), array(-1, 16, -1), array(-1, -1, -1)), 8, 0);
  imagejpeg($tmp, $imageURL);
  imagedestroy($tmp);
  imagedestroy($src);
  }

  return 	true;
 }
else{
		echo "Invalid $attribute";
	}
}
	else{
		unlink($imageURL); // this will remove the image if its not the type accepted
		echo "Invalid $attribute";
		}
		}
	else{
		echo "Invalid $attribute";
}
}








public function mimeType($fileTemName, $fileUrl, $FileType){
		  /* move the temporary file name to the folder to be saved*/
		   move_uploaded_file($fileTemName, $fileUrl);

		   /*theres a need to check the mime type*/
		   if(function_exists('finfo_open')){
			$finfo = finfo_open(FILEINFO_MIME_TYPE);
			$mtype = finfo_file($finfo, $fileUrl);
			finfo_close($finfo);
		}
		elseif (function_exists('mime_content_type')) {
			$mtype = mime_content_type($fileUrl);
		}

		if(in_array($mtype, $FileType)){
			//unlink($fileUrl); // this will remove the image if its not the type accepted
			return $fileUrl; 
		}
		else{
			unlink($fileUrl); // this will remove the image if its not the type accepted
	 	echo "Sorry only CSV files supported";
	 }
	}


	public function unlinkFile($fileUrl){
			unlink($fileUrl); // this will remove the image if its not the type accepted
			return true; 
	}









































}
?>