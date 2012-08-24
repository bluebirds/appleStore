<?php



global $filepath;



// create substring by taking care of the words



function substr_by_words($str, $length, $minword = 3) {



    $sub = '';



    $len = 0;



   



    foreach (explode(' ', $str) as $word) {



        $part = (($sub != '') ? ' ' : '') . $word;



        $sub .= $part;



        $len += strlen($part);



       



        if (strlen($word) > $minword && strlen($sub) >= $length) {



            break;



        }



    }



   



    return $sub . (($len < strlen($str)) ? '...' : '');



}







/*



 * generate a random number of length specified default length is 1



 *



 */



function random_number($length = 1) {



	$rand = "";



	for($i = 0; $i < $length; $i++){



		$rand .= rand(0, 9); 



	}



	return $rand;



}







/*



 * encode id for use in the url



 *



 */



function encode_id_for_url($id) {



	return (random_number(2) . ($id + $id) . random_number(2));



}







/*



 * decode id for use in the url



 *



 */



function decode_id_for_url($id) {



	return (((int)substr($id, 2, -2)) / 2);



}







/*



 * check file name, whether it is a valid image or not



 * file_name - name of the file to be checked



 *



 */



function is_valid_image($file_name) {

	return in_array(extract_extension($file_name), array('jpg', 'jpeg', 'png', 'gif','bmp'));



}


/*



 * check file name, whether it is a valid image or not



 * file_name - name of the file to be checked



 *



 */
 function is_valid_file($file_name) {
	 echo "call";
	 echo $file_name;

	return in_array(extract_extension($file_name), array('jpg', 'jpeg', 'png', 'gif','bmp'));



}


/*
get extension
*/
function get_extension($file_name) {
	return extract_extension($file_name);
}







/*



 * extract extension from file name



 * file_name - name of the file to be checked



 *



 */



function extract_extension($file_name) {
	
	return strtolower(substr(strrchr($file_name, "."), 1));



}







/*



 * upload file



 * dir - directory to upload file



 * file - $_FILES["file"]



 * new_name - name of the file to be saved with



 *



 */



function upload_file($dir, $file, $new_name) {


	global $ROOT_DIR;
	return move_uploaded_file(
		$file['tmp_name'], 
		 $dir . DIRECTORY_SEPARATOR . $new_name



	);
	

}







/*



 * generate new unique file name



 * prefix - prefix to be used with file name



 * file_name - current file name



 *



 */



function generate_unique_file_name($prefix, $file_name) {



	return uniqid($prefix) . "." . extract_extension($file_name);



}







/*



 * send email to spefified email address



 * to - one (string) email address or an array of email addresses



 * from - (string) email sender



 * subject - (string) subject of the email



 * message - (string) email body section



 */



function send_email($data) {



	$recievers = (is_array($data["to"]) ? $data["to"] : array($data["to"]));



	



	$mail_headers = "MIME-Version: 1.0" . "\r\n";



	$mail_headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";



	$mail_headers .= "From: <". $data["from"] .">\r\n";



	



	for($i = 0; $i < count($recievers); $i++) {



		mail($recievers[$i], $data["subject"], $recievers["message"], $mail_headers);



	}



}











?>