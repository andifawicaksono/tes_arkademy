<?php 

/**
 * 
 */
class soal_2
{
	
	public function is_username_valid($username)
	{
		if (preg_match("/[A-Z]/", $username) !== 0) {
			echo "Tidak boleh ada huruf kapital";
		}elseif (strpos($username, '_') === false) {
			echo "Username Tidak Terdapat tanda '_' ";
		}elseif (strlen($username) != 8) {
			echo "Karakter Username harus memiliki 8 karater tidak kurang dan tidak lebih";
		}else{
			echo "Username Benar";
		}
	}

	public function is_password_valid($password)
	{
		if (preg_match("/[A-Z]/", $password) === 0) {
			echo "Password harus memiliki huruf kapital";
		}elseif (preg_match("/[a-z]/", $password) === 0) {
			echo "Password harus memiliki huruf kecil";
		}elseif (preg_match("/[0-9]/", $password) === 0) {
			echo "Password harus memiliki huruf Angka";
		}elseif (preg_match("/[\'^!£$%&*()}{@#~?><>,|=_+¬-]/", $password) === 0) {
			echo "Password harus memiliki karakter spesial";
		}elseif (strlen($password) != 8) {
			echo "Karakter password harus memiliki 8 karater tidak kurang dan tidak lebih";
		}else{
			echo "Password Benar";
		}
	}
	
}

$soal = new soal_2();
$soal->is_username_valid('aigboss_');
echo "<br>";
$soal->is_password_valid('qaZW_123');
?>