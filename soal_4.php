<?php 

/**
 * 
 */
class soal_4
{
	
	public function ganti_kata($kalimat, $data, $data_baru)
	{
		
		$kalimat_count = strlen($kalimat);

		$kalimat_lama = str_split($kalimat);


		$kalimat_baru = "";

		for ($i=0; $i < $kalimat_count ; $i++) { 
	
			if ($kalimat_lama[$i] == $data) {
				$kalimat_baru .= $data_baru;
			}else{
				$kalimat_baru .= $kalimat_lama[$i];
			}

		}

		return $kalimat_baru;

	}
	
}

$soal_4 = new soal_4();
echo $soal_4->ganti_kata("kelompok", "o", "a");


?>