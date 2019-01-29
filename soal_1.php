<?php


/**
 * 
 */
class soal_1 extends School
{
	
	function getData()
	{

		$sekolah = new School();

		$skill1 = new Skillku();

		$skill1->pemograman = "Menguasai Bahasa Pemograman PHP";
		$skill1->exsakta = "Sabuk kuning dalam Karate";

		$skill2 = new Skillku();

		$skill2->pemograman = "Menguasai Bahasa Pemograman JAVA";
		$skill2->exsakta = "Aktif dalam organisasi OSIS di SMP";

		$skills = array($skill1, $skill2);

		$name  = "Andifa Nur Wicaksono";
		$address = "Perum Pondok Rindang D-113, Kec Pakisaji, Malang";
		$hobbies = array('membaca', 'karate');
		$is_married = false;
		$school_1 = $sekolah->highSchool;
		$university = $sekolah->university;


		$data = array('name'=>$name, 'address'=>$address, 'hobbies'=>$hobbies, 'is_married'=>$is_married ,'school'=>$school_1,'Universitas'=>$university,'skills'=>$skills);

		return json_encode($data);

	}
}

class School
{
	public $highSchool = "SMK PGRI 3 MALANG";
	public $university = "SKARIGA";
}

class Skillku
{
	public $pemograman;
	public $exsakta;
}

$soal_1 = new soal_1();
echo $soal_1->getData();