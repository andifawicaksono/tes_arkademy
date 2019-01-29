<?php 

/**
 * 
 */
class soal_3
{
	
	public function BuatKotak($panjang)
	{

		if ($panjang%2 == 0) {
			echo "Bilangan yang di inputkan adalah bilangan genap";
		}else{

			for ($i=1; $i <= $panjang; $i++) { 
					
				for ($b=1; $b <= $panjang; $b++) {
					if (($panjang+1) / 2 == $b || ($panjang+1) / 2 == $i) {
						echo "*";
					}elseif ($b == $panjang || $i == $panjang) {
						echo "*";
					}elseif ($b == 1 || $i == 1) {
						echo "*";
					}
					else{
						echo "&nbsp&nbsp";
					}
				}
					echo "<br>";
			}

		}

	}
	
}

$soal_3 = new soal_3();
$soal_3->BuatKotak(7);

?>