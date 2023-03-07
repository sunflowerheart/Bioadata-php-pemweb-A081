<?php
$web_title = "Yafi Arya Maulana";
$name = "Yafi Arya Maulana";
$h2 = "Mahasiswa UPN “Veteran” Jawa Timur";
$h1 = "Bio";
$text  = "Saya lahir di Surabaya, 12 Oktober 2003. Saya merupakan mahasiswa Fakultas Ilmu Komputer prodi Informatika yang saat ini sedang menjalani semester 4.						Selain itu, saya mahasiswa yang berperan aktif di dalam organisasi maupun kepanitiaan yang ada di kampus. 
	   Lalu untuk skill, saya mampu menjalankan bahasa program C++ & python. Dan saya seorang pekerja keras dan berdedikasi tinggi.";
$h1_org = "Organisasi";
$h2_th = "2022-2023";
$text_org = "Anggota Inti Paduan Suara Gita Widya Giri UPN “Veteran” Jawa Timur";
$h1_kp = "Kepanitiaan";
$h2_thn1 ="2021";
$text_kp1  = "Panitia Divisi Keamanan Makrab Sonic";
$h2_thn2 ="2022";
$text_kp2  = "Panitia Divisi Perlengkapan Porsimnas Wimaya UPN “Veteran” Jawa Timur ";
$h2_thn2 ="2022";
$text_kp3  = "Ketua Divisi Humas Kuliah Tamu  Himatifa UPN “Veteran” Jawa Timur";
$h2_thn2 ="2022";
$text_kp4  = "Ketua Divisi Konsumsi Donor Darah BEM FASILKOM UPN “Veteran” Jawa Timur";
$h2_thn2 ="2022";
$text_kp5  ="Ketua Divisi Perlengkapan Funday With Fasilkom BEM FASILKOM UPN “Veteran” Jawa Timur";
$h1_pend = "Pendidikan";
$h2_thn3 = "2009-2015 SDN Sambikerep II ";
$h2_thn4 = "2015-2018 SMPN 53 Surabaya ";
$h2_thn5 = "2018-2021 SMKS Wijaya Putra Surabaya";
$h2_thn6 = "2021-Sekarang UPN “Veteran” Jawa Timur";
$h1_sk = "Skill";
$h2_sk1 = "C++";
$h2_sk2 = "Python";
$h2_sk3 = "Microsoft Office";
$h1_cont = "Contact";
$h2_cont1 = "Telepon:081325370399";
$h2_cont2 = "Email:yafiaryamaulana";
$h2_cont3 = "Linked In:Yafi Arya Maulana";
?>
<!DOCTYPE html>
<html>
  <head>
  <style>
  ul {
  list-style-type: none;
  margin: 0;
  padding: auto;
  overflow: hidden;
  background-color: black;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 10px 20px;
  text-decoration: none;
}
</style>

  <title> <?=$web_title;?> </title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
	<div id="article">
			<div class="entry">
				<h1><?=$name;?></h1>
				<h2><?=$h2;?></h2>
					<div class="entry-inner">
						<h1><?=$h1;?></h1>
						<p><?=	$text;?></p>
					</div>
					<div class="entry-inner">
						<h1><?=$h1_org;?></h1>
						<h2><?=$h2_th;?></h2> <p><?=$text_org;?></p>
					</div>
					<div class="entry-inner">
						<h1><?=$h1_kp;?></h1>
						<h2><?=$h2_thn1;?></h2> <p><?=$text_kp1;?></p>
						<h2><?=$h2_thn2;?></h2> <p><?=$text_kp2;?></p>
						<h2><?=$h2_thn2;?></h2> <p><?=$text_kp3;?></p>
						<h2><?=$h2_thn2;?></h2> <p><?=$text_kp4;?></p>
						<h2><?=$h2_thn2;?></h2> <p><?=$text_kp5;?></p>
					</div>	
			</div>
	</div>
		<div id ="sidebar">
			<div class="out">
				<div class="out-class">
					<img height="200px" width="200px" border-radius="50%" src="baru.jpg" /> 
				</div>
			</div>
				<p> <h1><?=$h1_pend;?></h1> </p>
					<h2><?=$h2_thn3;?></h2>
					<h2><?=$h2_thn4;?></h2> 
					<h2><?=$h2_thn5;?></h2> 
					<h2><?=$h2_thn6;?></h2>
			<div class="out">
				<div class="out-class">
						<h1><?=$h1_sk;?></h1>
							<h2><?=$h2_sk1;?></h2>
							<h2><?=$h2_sk2;?></h2>
							<h2><?=$h2_sk3;?></h2>
				</div>
			</div>
			<div class="out">
				<div class="out-class">
						<h1><?=$h1_cont;?></h1>
						<h2><?=$h2_cont1;?></h2>
						<h2><?=$h2_cont2;?></h2>
						<h2><?=$h2_cont3;?></h2>
				</div>
			</div>	
</body>
</html>				