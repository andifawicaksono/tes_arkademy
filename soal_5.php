<?php 

/**
 * 
 */
class soal_5
{
	
	public function hitung_jabat($jumlah_orang)
	{
		
		if ($jumlah_orang == 0) {
			return 0;
		}else{

			$jumlah = 0;

			for ($i=1; $i < $jumlah_orang ; $i++) { 
				
				$jumlah = $jumlah + $i;

			}

			return $jumlah;

		}

	}

}

$soal_5 = new soal_5();
echo "Result :". $soal_5->hitung_jabat(6);
?>