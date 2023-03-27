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

<title>Yafi Arya Maulana</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
	<div id="article">
			<div class="entry">
            <h1>Yafi Arya Maulana</h1>
				<h2>Mahasiswa UPN “Veteran” Jawa Timur</h2>
					<div class="entry-inner">
                    <p></p>
	                <p> <?php
                    $bio = "Saya lahir di Surabaya, 12 Oktober 2003. Saya merupakan mahasiswa Fakultas Ilmu Komputer prodi Informatika yang saat ini sedang menjalani semester 4. 
                    Selain itu, saya mahasiswa yang berperan aktif di dalam organisasi maupun kepanitiaan yang ada di kampus. 
                    Lalu untuk skill, saya mampu menjalankan bahasa program C++ & python. Dan saya seorang pekerja keras dan berdedikasi tinggi.";
                    echo $bio;

                    ?>.</p>

        <p> </p>

        <div class="entry-inner">
            <h1>Organisasi</h1>
            <h2>2022-2023</h2> <p>Anggota Inti Paduan Suara Gita Widya Giri UPN “Veteran” Jawa Timur</p>
		</div>

        <div class="entry-inner">
        <h1>Kepanitiaan</h1>
        <?php
                $kepanitiaan = array (
                    array ('kepanitiaan' => "Divisi Keamanan Makrab Sonic 2021", 'kepanitiaan1' => "Divisi Perlengkapan Porsimnas Wimaya UPN “Veteran” Jawa Timur 2022", 'kepanitiaan2' => "Ketua Divisi Humas Kuliah Tamu  Himatifa UPN “Veteran” Jawa Timur 2022", 'kepanitiaan3' => "Ketua Divisi Konsumsi Donor Darah BEM FASILKOM UPN “Veteran” Jawa Timur 2022", 'kepanitiaan4' => "Ketua Divisi Perlengkapan Funday With Fasilkom BEM FASILKOM UPN “Veteran” Jawa Timur 2022")
                );
                ?>

                <?php 
                    foreach ($kepanitiaan as $panitia) :
                ?>
                <ul>
                    <li><?php echo $panitia['kepanitiaan']?></li>
                    <li><?php echo $panitia['kepanitiaan1']?></li>
                    <li><?php echo $panitia['kepanitiaan2']?></li>
                    <li><?php echo $panitia['kepanitiaan3']?></li>
                    <li><?php echo $panitia['kepanitiaan4']?></li>

                </ul>
                <?php endforeach ?>
            </div>	
		</div>
	</div>
		<div id ="sidebar">
			<div class="out">
				<div class="out-class">
					<img height="200px" width="200px" border-radius="50px" src="baru.jpg" /> 
				</div>
			</div>
            <h1>Pendidikan</h1>
            <?php
                $pendidikan = array (
                array ('education' => "SDN Sambikerep II Surabaya", 'education1' => "SMP Negeri 53 Surabaya", 'education2' => "SMKS Wijaya Putra Surabaya", 'education3' => "Universitas Pembangunan Nasional Veteran Jawa Timur Prodi Informatika")
                );
                    ?>
                <?php
                    foreach ($pendidikan as $pend) :
                ?>
                <p>
                    <ul>
                        <li><?php echo $pend['education']?></li>
                        <li><?php echo $pend['education1']?></li>
                        <li><?php echo $pend['education2']?></li>
                        <li><?php echo $pend['education3']?></li>
                    </ul>
                </p>
                <?php endforeach?>
                <div class="out">
				<div class="out-class">
						<h1>Skill</h1>
                     <?php
                        $skill = array (
                        array ('keahlian' => "C++", 'keahlian1' => "Python", 'keahlian2' => "Microsoft Office")
                        );       
                        ?>
                                <?php
                                    foreach ($skill as $ski) :
                                ?>
                                <p>
                                    <ul>
                                        <li><?php echo $ski['keahlian']?></li>
                                        <li><?php echo $ski['keahlian1']?></li>
                                        <li><?php echo $ski['keahlian2']?></li>
                                    </ul>
                                </p>
                                <?php endforeach?>
                		</div>
			    </div>
			<div class="out">
				<div class="out-class">
						<h1>Contact</h1> 
                        <?php
                        $contact = array (
                        array ('kontak' => "Telepon:081325370399", 'kontak1' => "Email:yafiaryamaulana", 'kontak2' => "Linked In:Yafi Arya Maulana")
                        );                   
                        ?>
                                <?php
                                    foreach ($contact as $cont) :
                                ?>
                                <p>
                                    <ul>
                                        <li><?php echo $cont['kontak']?></li>
                                        <li><?php echo $cont['kontak1']?></li>
                                        <li><?php echo $cont['kontak2']?></li>
                                    </ul>
                                </p>
                                <?php endforeach?>
                        </div>
			    </div>	
</body>
</html>	