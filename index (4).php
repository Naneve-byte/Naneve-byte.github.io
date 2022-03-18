
<html>
	<head>
	    <title>JAKARTA-COVID</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script>
		$(document).ready(function(){
			$('body').removeClass('jsOff');
			$('body').addClass('jsOn');
		});

		$(document).ready(function(){
			$('body').removeClass('jsOff').addClass('jsOn');
			$('#tabs a')
			$('#tabs a').on ('click', function(e){
			$('#tabs a.current').removeClass('current');
			$('.tab-section:visible').hide();
			$(this.hash).show();
			$(this).addClass('current');
			e.preventDefault();	
			}).filter(':first').click();
		});

		</script>
<title></title>
</head>
	<body class="jsOff" style="background-color : #F0FF89">
	<header class="">
	<center>
	<a href="login.php" class="btn">Login</a>
	<header class="content">
	
		<h1>Jakarta Covid</h1>

		<p>Info Vaksin Pencegahan covid</p>
	</header>
	</center>
	<ul id="tabs">
		<li><a href="#tentang_covid">Apa itu Covid-19 ?</a></li>
		<li><a href="#info_vaksin">Info Vaksin</a></li>
		<li><a href="#pencegahan">Pencegahan</a></li>
		
	</ul>
	
		<div id="info_vaksin" class="content tab-section">
		
		<h2>Lokasi Vaksin Covid-19 di Jakarta</h2>
		<h3 dir="ltr" style="text-align:justify"><span >Jakarta Barat</span></h3>
		<h4 dir="ltr"><span >Puskesmas</span></h4>
		<a href="cari.php">Cari Tempat Vaksin</a>
		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKC Palmerah</span><br />
			<span >Jl. Palmerah Barat No. 120, RT 006/RW 14, 11480</span><br />
			<span >Telepon: 082123485668</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kecamatan Cengkareng</span><br />
			<span >Jl. Kamal Raya No. 2, RT 8/RW 7, Cengkareng Barat, 11730</span><br />
			<span >Telepon: +6285215639282</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kecamatan Grogol Petamburan</span><br />
			<span >Jl. Wijaya III Blok F Taman Duta Mas, RT 14/RW 09, 11460</span><br />
			<span >Telepon: 0215648379</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kecamatan Kebon Jeruk</span><br />
			<span >Jl. Raya Kebon Jeruk No. 2 RT 9/RW 1, 11510</span><br />
			<span >Telepon: 081383049557</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kecamatan Tambora Pos 1</span><br />
			<span >Jl. Krendang Utara No 4 (Lantai 5), RT 001/RW 003, 11260</span><br />
			<span >Telepon: 0216313651</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kecamatan Tambora Pos 2</span><br />
			<span >Jl Krendang Utara No. 4 (Lantai 1), RT 08/RW03, 11220</span><br />
			<span >Telepon: 0216313651</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKC Kalideres</span><br />
			<span >Jl. Tj. Pura No.14 RT 06/05, RT.7/RW.5, Pegadungan, Kec. Kalideres, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11830</span><span >&nbsp;&nbsp;&nbsp; </span><span >&nbsp;&nbsp;&nbsp; </span></p>
			</li>
		</ol>

		<h4 dir="ltr" style="text-align:justify"><span >Rumah Sakit Pemerintah</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD Cengkareng</span><br />
			<span >Jl. Bumi Cengkareng Indah No.1, RW.10, Cengkareng Tim., Kecamatan Cengkareng, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta</span><span >&nbsp;&nbsp;&nbsp; </span><br />
			<span >Telepon: 02154372874</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD Kalideres</span><br />
			<span >Jl. Satu Maret No. 48</span><br />
			<span >Telepon: 0215439057</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD Kembangan</span><br />
			<span >Jl. Topas Raya Blok FII No.03, RT.15/RW.7, Meruya Utara, Kec. Kembangan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0215870834</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD Tamansari </span><br />
			<span >Jl. Madu, Kel.Mangga Besar, Kec. Tamansari</span></p>
			</li>
		</ol>

		<h3 dir="ltr"><span >Jakarta Pusat</span></h3>

		<h4 dir="ltr"><span >Puskesmas</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM Kecamatan Cempaka Putih</span><br />
			<span >Jl. Pramuka Sari I</span><br />
			<span >Telepon: 0214219548</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PETOJO SELATAN</span><br />
			<span >Jl. Tanah Abang III</span><br />
			<span >Telepon: 0213520246</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN JOHAR BARU</span><br />
			<span >Jl Mardani Raya no 36</span><br />
			<span >Telepon: 0214256443</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN MENTENG</span><br />
			<span >Jl. Pegangsaan Barat no 14</span><br />
			<span >Telepon: 08111797282</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN SENEN</span><span >&nbsp;&nbsp;&nbsp; </span><br />
			<span >Jl. Kramat VII No. 31, RT.06 / RW.01, Kenari, Senen, RT.2/RW.1, RT.6/RW.1, Kenari, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 081334422794</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN TANAH ABANG</span><br />
			<span >Jl Danau Toba Blok A No.1</span><br />
			<span >Telepon: 089654720041</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN KEMAYORAN</span><br />
			<span >Jl.Harapan Mulia Barat no. 1</span><br />
			<span >Telepon: 0214251018</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM Kelurahan Petojo Selatan</span><br />
			<span >Jl. Taman Tanah Abang III</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN KEBON KELAPA</span><br />
			<span >Jl. BATU TULIS XIII NO. 1</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN PETOJO UTARA</span><br />
			<span >Jl. PETOJO SELATAN II</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN DURI PULO</span><br />
			<span >Jl. K.H. ZAINUL ARIFIN NO. 73</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN PEGANGSAAN</span><br />
			<span >Jl. Tambak No.28</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN KEBON SIRIH</span><br />
			<span >Jl. H. Agus Salim No.1,</span></p>
			</li>
		</ol>

		<h4 dir="ltr"><span >Rumah Sakit Pemerintah</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD CEMPAKA PUTIH</span><br />
			<span >Jl. Rawasari Selatan No.1</span><br />
			<span >Telepon: 0214224243</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD JOHAR BARU</span><br />
			<span >Jl. Tanah Tinggi XII No.15-23, RT.10/RW.9, Tanah Tinggi, Kec. Johar Baru, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02121470344</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD KEMAYORAN</span><br />
			<span >Jl. Serdang I No.3, RT.6/RW.5, Serdang, Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0214244277</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD SAWAH BESAR</span><br />
			<span >Jl. Dwiwarna Raya No.6-8, RT.15/RW.9, Karang Anyar, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</span></p>
			</li>
		</ol>

		<p dir="ltr" style="margin-left:36pt"><span >Telepon: 02162320819</span></p>

		<ol start="5">
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD TANAH ABANG</span><br />
			<span >Jl. KH. Mas Mansyur No. 30, RT. 05 / RT. 07, RT.5/RW.7, Kb. Kacang, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0213150427</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD TARAKAN</span><br />
			<span >Jl. Kyai Caringin No.7</span><br />
			<span >Telepon: 0213503003</span></p>
			</li>
		</ol>

		<h3 dir="ltr"><span >Jakarta Selatan</span></h3>

		<h4 dir="ltr"><span >Puskesmas</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN CILANDAK</span><br />
			<span >Jl. Komplek BNI 46 No.57, Cilandak Barat, Cilandak, RT.4/RW.5, Cilandak Barat, RT.4/RW.5, Cilandak Barat, Kec. Cilandak, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 081212956515</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN KEBAYORAN BARU</span><br />
			<span >JL.ISKANDARSYAH RAYA NO.105. KELURAHAN MELAWAI. KECAMATAN KEBAYORAN BARU</span><br />
			<span >Telepon: 081291996680</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN MAMPANG PRAPATAN</span><br />
			<span >Jl Liliana Blok C 24-25</span><br />
			<span >Telepon: 0217196578</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN PESANGGRAHAN</span><br />
			<span >JL. PALEM 8</span><br />
			<span >Telepon: +6281388705547</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN SETIABUDI</span><br />
			<span >Jl.. Halimun No.13</span><br />
			<span >Telepon: 0218295529</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PONDOK PINANG</span><br />
			<span >Jl. Ciputat Raya</span><br />
			<span >Telepon: 0811890922</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN CILANDAK TIMUR</span><br />
			<span >Jl. Madrasah No. 11 Rt 0010/04, RT.7/RW.6, Cilandak Timur, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12560</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN PASAR MINGGU</span><br />
			<span >Komp. TNI AL, Jl. B2 Rawa Bambu, RT.8/RW.7, Ps. Minggu, Kec. Ps. Minggu</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN KEBAGUSAN</span></p>
			</li>
		</ol>

		<p dir="ltr" style="margin-left:36pt"><span >Jl. Kebagusan Raya Gg. Puskesmas, RT.5/RW.1, Kebagusan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12520</span></p>

		<ol start="10">
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN PEJATEN BARAT 1</span><br />
			<span >Jl. Pejaten Barat I No.4E, RT.1/RW.8, Pejaten Barat, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12510</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN PEJATEN TIMUR</span><br />
			<span >Jl. Swadaya 1, RT.5/RW.10, Pejaten Tim., Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12510</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKC KEBAYORAN BARU</span><br />
			<span >JL.ISKANDARSYAH RAYA NO.105. KELURAHAN MELAWAI. KECAMATAN KEBAYORAN BARU</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel. Kebayoran Lama Utara</span><br />
			<span >Jl. Delman Utara (depan SMP 161 Jakarta), Kebayoran Lama Utara</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel. Cipulir 1</span><br />
			<span >Jl. Cipulir 1 No. 33, Cipulir</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel. Cipulir 2</span><br />
			<span >Jl. Kebon Mangga No. 20, Cipulir</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel. Grogol Selatan</span><br />
			<span >Jl. Kubur Islam no. 55, Grogol Selatan</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel. Grogol Utara 1</span><br />
			<span >Jl. Biduri, Grogol Utara</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel. Grogol Utara 2</span><br />
			<span >Jl. Kemandoran 1, Grogol Utara</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kelurahan Bintaro</span><br />
			<span >Jl. RC. Veteran Raya No.178, RT.9/RW.3, Bintaro, Kec. Pesanggrahan</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kelurahan Ulujami</span><br />
			<span >Jl. Inspeksi, RT.7/RW.7, Ulujami, Kec. Pesanggrahan</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kecamatan Setiabudi Lt.4</span><br />
			<span >Jl.Halimun Raya No.13 RT.07 RW.02 Kel Guntur Kec Setiabudi</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel Tebet Barat</span><br />
			<span >Jl. Tebet Barat IX No.64, RT.6/RW.4, Tebet Bar., Kec. Tebet</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel Kebon Baru</span><br />
			<span >Jl. Asem Baris II, Kebon Baru, Kec. Tebet</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel Manggarai</span><br />
			<span >Jl. Swadaya 1 No.1, RT.8/RW.7, Manggarai, Kec. Tebet</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kel Manggarai Selatan</span><br />
			<span >Jl. Doktor Saharjo RT.04/RW.07, Manggarai Sel, Kec. Tebet</span></p>
			</li>
		</ol>

		<h4 dir="ltr"><span >Rumah Sakit Pemerintah</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD JAGAKARSA</span><br />
			<span >Jl. Moh. Kahfi 1 No.27A, RT.1/RW.6, Jagakarsa, Kec. Jagakarsa, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02178882455</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD JATIPADANG</span><br />
			<span >Jl. Raya Ragunan No.16, RW.11, Ps. Minggu, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02122784477</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD KEBAYORAN BARU</span><br />
			<span >Jl. Abdul Majid Raya No.28, RT.2/RW.5, Cipete Utara, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12150</span><br />
			<span >Telepon: 022774429</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD KEBAYORAN LAMA</span><br />
			<span >Jl. Jatayu No.RT.1, RT.1/RW.12, Kby. Lama Sel., Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02127939067</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD MAMPANG PRAPATAN</span><br />
			<span >Jl. Kapten Tendean No.9, RT.1/RW.5, Mampang Prpt., Kec. Mampang Prpt., Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0217971115</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD PASAR MINGGU</span><br />
			<span >Jl. TB Simatupang No.1, RT.1/RW.5, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02129059999</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >POL VAKSINASI</span><br />
			<span >Jl Cenek NO I/1</span><br />
			<span >Telepon: 0217356087</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD TEBET</span><br />
			<span >Jl. Prof. DR. Soepomo SH No.54, RT.13/RW.2, Tebet Barat., Kec. Tebet, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0218314955</span></p>
			</li>
		</ol>

		<h3 dir="ltr"><span >Jakarta Utara</span></h3>

		<h4 dir="ltr"><span >Puskesmas</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN PENJARINGAN</span><br />
			<span >Jl. Raya Teluk Gong No.2, Penjaringan</span><br />
			<span >Telepon: 088210067913</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN CILINCING</span><br />
			<span >Jl. Sungai Landak No. 26 Cilincing - Jakarta Utara</span><br />
			<span >Telepon: 02121484022</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PEGANGSAAN DUA B</span><br />
			<span >Gendang</span><br />
			<span >Telepon: 02145853300</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN KOJA</span><br />
			<span >Jl. Mahoni Selatan No.9, RT.9/RW.1, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 087887399604 (hotline vaksinasi); 081298291487 (Posko KLB)</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KEBON BAWANG 2</span><br />
			<span >Jl Swasembada Timur 6 No.1, Kebon Bawang, Jakarta Utara</span><br />
			<span >Telepon: 02143905316</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN KAMAL MUARA</span><br />
			<span >Jl. Pluit Raya No.2</span><br />
			<span >Telepon: 085216501751</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN CILINCING I</span><br />
			<span >Jl.Cilincing Pagi No.11A</span><br />
			<span >Telepon: 0214416419</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN KALIBARU</span><br />
			<span >Jl.Kalibaru Timur Jakarta Utara</span></p>
			</li>
		</ol>

		<p dir="ltr" style="margin-left:36pt"><span >Telepon: 0214417993</span></p>

		<ol start="9">
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN KAPUK MUARA</span><br />
			<span >Duta Harapan Indah No. 45</span><br />
			<span >Telepon: 087885380595</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PAPANGGO</span><br />
			<span >Jl. Bisma Raya No.1</span><br />
			<span >Telepon: 02165832994</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PEJAGALAN</span><br />
			<span >Jl. Kura No.19</span><br />
			<span >Telepon: 081320077717</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PENJARINGAN 1</span><br />
			<span >Jl. Pluit Selatan</span><br />
			<span >Telepon: 081586416779</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PLUIT</span><br />
			<span >Jl. Muara Angke No. 2</span><br />
			<span >Telepon: 08129365386</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN ROROTAN</span><br />
			<span >Jl. Rorotan 9</span><br />
			<span >Telepon: 02144850175</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN SEMPER BARAT 1</span><br />
			<span >Jl. Duren No. 49</span><br />
			<span >Telepon: 0214400351</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS SUNTER JAYA 2</span><br />
			<span >Jl Kembang Sereh</span><br />
			<span >Telepon: 0216515132</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS PEMBANTU RUSUNAWA MARUNDA</span><br />
			<span >Rusun Marunda Cluster B Blok 8 Lantai Dasar</span><br />
			<span >Telepon: 02129251968</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKC PADEMANGAN</span><br />
			<span >Jl. Pademangan II Gang 22 No. 2, RT. 002 RW. 002 Kelurahan Pademangan Timur, Kecamatan Pademangan, Jakarta Utara, Kode Pos, RT.2/RW.2, East Pademangan, Pademangan, North Jakarta City, Jakarta 14410</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN PADEMANGAN BARAT 1</span><br />
			<span >Jl. Ampera Besar No.2, RT.8/RW.6, Pademangan Bar., Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14420</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN PADEMANGAN BARAT 2</span><br />
			<span >Jl. Waspada Raya No.23 13 15, RT.13/RW.15, Pademangan Barat</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN ANCOL</span><br />
			<span >Jl. Ancol Bar. III No.7, RT.1/RW.3, Ancol, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14430</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Puskesmas Kelurahan Sunter Agung III</span><br />
			<span >Jl. Agung Barat 25 No.2, RT.7/RW.10, Sunter Agung, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14350</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN RAWA BADAK SELATAN</span><br />
			<span >Jl. Alur Laut RT 8 RW 5</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN RAWA BADAK UTARA</span><br />
			<span >Jl. Rawabadak Barat No. 39, RT.6/RW.11, Rawabadak Utara 1, RT.4/RW.11, Rawabadak Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14230</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN SUKAPURA</span><br />
			<span >Jl. Tipar Cakung No.1, RT.4/RW.1, Sukapura, Kec. Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14140</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN SEMPER BARAT II</span><br />
			<span >Jl. Tipar Cakung No.18, RT.1/RW.4, Semper Barat, Cilincing, RT.6/RW.4, Semper Bar., Kec. Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14140</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKM KELURAHAN SEMPER BARAT III</span><br />
			<span >Jl. Pepaya 5, RT.6/RW.16, Semper Bar., Kec. Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta 14130</span></p>
			</li>
		</ol>

		<h4 dir="ltr" style="text-align:justify"><span >Rumah Sakit Pemerintah</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD CILINCING</span><br />
			<span >Jl. Madya Kebantenan No.4, RT.4/RW.2, Semper Tim., Kec. Cilincing, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0214416367</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD KOJA</span><br />
			<span >Jl. Deli No.4, RT.11/RW.7, Koja, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02143938478</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD PADEMANGAN</span><br />
			<span >Jl. Budi Mulia Raya No. 2 RT. 15 / RW. 11 Pademangan Barat Pademangan RT.11/RW.11, Kec. Pademangan Kota Jakarta Utara, Daerah Khusus Ibukota, RT.11/RW.11, Pademangan Barat, Kec. Pademangan, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0216452346</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD TANJUNG PRIOK</span><br />
			<span >Jl. Bugis No.3, Kebon Bawang, Tanjung Priok, RT.1/RW.4, Kb. Bawang, Tj. Priok, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02143908923</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD TUGU KOJA</span><br />
			<span >Jl. Walang Permai No.39, RW.12, Tugu Utara, Kec. Koja, Kota Jkt Utara, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02126061110</span></p>
			</li>
		</ol>

		<h3 dir="ltr"><span >Jakarta Timur</span></h3>

		<h4 dir="ltr"><span >Puskesmas</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN CAKUNG</span><br />
			<span >Jl. Raya Bekasi Km. 18 3 11 Jatinegara Kecamatan Cakung Kota Jakarta Timur Daerah Khusus Ibukota Jakarta, RT.3/RW.11, Jatinegara, Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0812141510603</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN DUREN SAWIT</span><br />
			<span >Jl. H. Dogol no 15 A Kel Duren Sawit&nbsp; Kec. Duren Sawit</span><br />
			<span >Telepon: 089636034567</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN JATINEGARA</span><br />
			<span >Jl. Matraman Raya No. 220</span><br />
			<span >Telepon: 089530519838</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN JATI 1</span><br />
			<span >Jl. Pulo Asem 4 No 19A</span><br />
			<span >Telepon: 081387420470</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN CIPINANG</span><br />
			<span >Jl. E Gg. Masjid Baitussalam No. 19</span><br />
			<span >Telepon: 081387420470</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN RAWAMANGUN</span><br />
			<span >Jl. Jeruk No. 3</span><span >&nbsp;&nbsp;&nbsp; </span><br />
			<span >Telepon: 081387420470</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PISANGAN TIMUR 2</span><span >&nbsp;&nbsp;&nbsp; </span><br />
			<span >l. H. Mugeni III No. 12</span><span >&nbsp;&nbsp;&nbsp; </span><br />
			<span >Telepon: 081387420470</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN JATINEGARA KAUM</span><br />
			<span >Jl. T. Badarudin</span><br />
			<span >Telepon: 081387420470</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN PULOGADUNG</span><br />
			<span >Jl. Kayu Putih Selatan III No. 2B Pulogadung</span><br />
			<span >Telepon: 081387420470</span></p>
			</li>
		</ol>

		<h4 dir="ltr"><span >Rumah Sakit Pemerintah</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSKD DUREN SAWIT</span><br />
			<span >Jl. Duren Sawit Baru No.2, RT.16/RW.6, Pd. Bambu, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0218628686</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSU ADHYAKSA</span><br />
			<span >Jl. Raya Mabes Hankam No.60, Ceger, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02129462345</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD BUDHI ASIH</span><br />
			<span >Jl. Dewi Sartika No.200, RT.1/RW.3, Cawang III, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0218090282</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD CIPAYUNG</span><br />
			<span >Jl. Mini III No.4, RT.4/RW.3, Bambu Apus, Kec. Cipayung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02185506588</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD CIRACAS</span><br />
			<span >Jl. Cibubur I No.RT.3, RT.13/RW.1, Cibubur, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02187711249</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD KRAMAT JATI</span><br />
			<span >Jl. Raya Inpres No.48, RT.9/RW.9, Kp. Tengah, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 02187791352</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD MATRAMAN</span><br />
			<span >Jl. Kebon Kelapa Raya No.29, Utan Kayu Utara, Matraman, RT.1/RW.10, Utan Kayu Sel., Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><span >&nbsp;&nbsp;&nbsp; </span><br />
			<span >Telepon: 02185909055</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD PASAR REBO</span><br />
			<span >Jl. TB Simatupang No.30, RT.9/RW.2, Gedong, Kec. Ps. Rebo, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta</span><br />
			<span >Telepon: 0218401127</span></p>
			</li>
		</ol>

		<h3 dir="ltr"><span >Kepulauan Seribu</span></h3>

		<h4 dir="ltr"><span >Puskesmas</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PKC. KEPULAUAN SERIBU UTARA</span><span >&nbsp;&nbsp;&nbsp; </span><br />
			<span >Pulau Kelapa</span><br />
			<span >Telepon: 081574117742</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KECAMATAN KEPULAUAN SERIBU SELATAN</span><br />
			<span >Jl. Pantai Selatan Pulau Tidung, Kel. Pulau Tidung, Kec. Kepulauan Seribu Selatan.</span><br />
			<span >Telepon: 085883121000</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PULAU PARI</span><br />
			<span >Pulau Lancang, Kel. Pulau Pari, Kec. Kepulauan Seribu Selatan.</span><br />
			<span >Telepon: 085883121000</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >PUSKESMAS KELURAHAN PULAU UNTUNG JAWA</span><br />
			<span >Jl. Raya Bournville, Pulau Untung Jawa, Kel. Pulau Untung Jawa, Kec. Kepulauan Seribu Selatan.</span><br />
			<span >Telepon: 085883121000</span></p>
			</li>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >Pos Kesehatan Pulau Pari</span><br />
			<span >Jl. Pendidikan, Pulau Pari, Kel. Pulau Pari, Kec. Kepulauan Seribu Selatan</span><span >&nbsp;&nbsp;&nbsp; </span><span >Telepon: 085883121000</span></p>
			</li>
		</ol>

		<h4 dir="ltr"><span >Rumah Sakit Pemerintah</span></h4>

		<ol>
			<li dir="ltr" style="list-style-type:decimal">
			<p dir="ltr"><span >RSUD Kepulauan Seribu</span><br />
			<span >Pulau Pramuka, Kelurahan Pulau Panggang, Kabupaten Administrasi Kepulauan Seribu, DKI Jakarta</span><br />
			<span >Telepon: 02154332705</span></p>
			</li>
		</ol>

		</div>
		
	<div id="pencegahan" class="content tab-section">
			<h2>Pencegahan covid-19</h2>
			
			<p > <span >Hubungi otoritas kesehatan setempat untuk mendapatkan panduan yang paling relevan untuk wilayah Anda.</span ><br/>
			<span ><br/>
			<span >Untuk mencegah penyebaran COVID-19:</span ><br/><ol>
			<li dir="otr" style="  list-style-type:circle">
			
			<span >Selalu jaga jarak aman dari orang lain (minimal 1 meter), meskipun mereka tidak tampak sakit.</span ><br/>
			<li dir="otr" style="  list-style-type:circle">
			<span >Kenakan masker di ruang publik, terutama di dalam ruangan atau jika pembatasan fisik tidak dimungkinkan.</span ><br/>
			<li dir="otr" style="  list-style-type:circle">
			<span >Sebaiknya pilih ruang terbuka dan berventilasi baik. Buka jendela jika berada di dalam ruangan.</span ><br/>
			<li dir="otr" style="  list-style-type:circle">
			<span >Cuci tangan Anda secara rutin. Gunakan sabun dan air, atau cairan pembersih tangan berbahan alkohol.</span ><br/>
			<li dir="otr" style="  list-style-type:circle">
			<span >Ikuti vaksinasi ketika giliran Anda. Ikuti panduan setempat terkait vaksinasi.</span ><br/>
			<li dir="otr" style="  list-style-type:circle">
			<span >Saat batuk atau bersin, tutup mulut dan hidung Anda dengan lengan atau tisu.</span ><br/>
			<li dir="otr" style="  list-style-type:circle">
			<span >Jangan keluar rumah jika merasa tidak enak badan.</span ><br/>
			</li></ol>
			<span >Jika demam, batuk, dan kesulitan bernapas, segera cari bantuan medis. Telepon terlebih dahulu agar penyedia layanan kesehatan dapat mengarahkan Anda ke fasilitas kesehatan yang tepat. Tindakan ini akan melindungi Anda dan mencegah penyebaran virus serta infeksi lainnya.</span ><br/>
			Masker
			Masker yang dipasang dengan benar dapat membantu mencegah penyebaran virus dari orang yang mengenakannya ke orang lain. Mengenakan masker saja tidak cukup untuk melindungi diri dari COVID-19, sehingga harus dikombinasikan dengan pembatasan fisik dan kebersihan tangan. Ikuti saran yang diberikan oleh otoritas kesehatan setempat.</p><br />
			
		</div>
		
		<div id="tentang_covid" class="content tab-section">
			<h2>COVID-19</h2>
			<h4>Asal Mula Virus Corona</h4>
			<p>Seperti dikutip dari World Health Organization (WHO), virus Corona berasal dari Coronaviruses (CoV) 
			yang menyebabkan penyakit mulai dari flu biasa hingga yang lebih parah seperti Middle East 
			Respiratory Syndrome (MERS-CoV) dan Severe Acute Respiratory Syndrome (SARS-CoV). Sedangkan 
			untuk Novel Coronavirus (nCoV) adalah jenis baru yang belum diidentifikasi sebelumnya pada 
			manusia. Virus Corona merupakan zoonosis, artinya ditularkan antara hewan dan manusia. Menurut 
			penyelidikan yang telah dilakukan, SARS-CoV ditularkan dari kucing luwak atau yang lebih dikenal 
			dengan musang ke manusia dan MERS-CoV dari unta ke manusia. Namun beberapa virus Corona 
			juga dikenal beredar pada hewan-hewan yang sebelumnya belum pernah menginfeksi manusia.</p>
			<h4>Ciri-ciri Terinfeksi Virus Corona</h4>
			<p><span>Jadi apa yang dimaksud virus Corona sebenarnya dan kapan seseorang bisa dikatakan terjangkit virus 
			tersebut? Gejala infeksi virus Corona sendiri cukup sulit dilihat pada awalnya. Hal ini dikarenakan 
			tidak semua orang yang sudah terinfeksi akan langsung memperlihatkan gejala-gejala awal dari virus 
			Corona. Dibutuhkan 2 hingga 14 hari sampai orang yang sudah terinfeksi tersebut mengeluarkan 
			tanda atau ciri-ciri virus Corona. Selama tenggang waktu tersebut bisa saja orang-orang yang 
			terinfeksi tanpa sadar menularkannya kepada orang lain. Inilah mengapa sangat penting untuk 
			mengisolasi diri di dalam rumah terlebih dahulu selama kurang lebih 2 minggu, terutama bagi orangorang yang baru saja bepergian ke luar negeri atau melakukan kontak dekat dengan pasien 
			terjangkit virus Corona.</span></br>
			<span>Agar lebih paham mengenai apa yang dimaksud virus Corona dan gejalanya, berikut ini beberapa 
			ciri-ciri orang yang terinfeksi virus Corona dengan tingkat yang lebih rendah seperti dikutip dari CDC : </span></br>
			<span>1.Demam</span></br>
			<span>2.Batuk</span></br>
			<span>3.Demam</span></br>
			<span>Sedangkan untuk pasien dengan tingkat yang lebih tinggi akan mengalami gejala virus Corona 
			berupa:
			</span></br>
			
			<span > Sulit bernapas atau napas pendek</span><br />
			<span > Nyeri atau sakit pada bagian dada</span><br />
			<span > Pusing atau tidak mampu berdiri dan menggerakkan tubuh</span><br />
			<span > Bibir atau wajah tampak membiru</span></p>
			
			<h4>Gejala Virus Corona Pada Manusia dari Hari ke Hari</h4><p><span >Untuk lebih jelasnya mengenai apa yang dimaksud virus Corona, berikut ini ciri-ciri virus Corona pada 
			manusia hari demi hari seperti dikutip dari Business Insider Singapore berdasarkan data dari 
			Zhongnan Hospital of Wuhan University:</span ></br>
			<li>
			<span >Hari 1: Pasien mengalami gejala virus Corona berupa demam. Pasien mungkin juga mengalami 
			kelelahan, nyeri otot, dan batuk kering. Sebagian kecil dari orang-orang tersebut mungkin juga 
			mengalami diare atau mual selama satu hingga dua hari sebelumnya.</span ></br>
			<li><span >Hari 5: Pasien mengalami gejala virus Corona berupa kesulitan bernapas, terutama untuk pasien 
			yang lanjut usia atau sebelumnya sudah memiliki riwayat penyakit.</span ></br>
			<li><span >Hari 7: Pasien mengalami gejala virus Corona berupa kondisi yang semakin memburuk, sebelum 
			akhirnya pasien dilarikan ke rumah sakit.</span ></br>
			<li><span >Hari 8: Pada titik ini, pasien dengan kasus yang parah (15 persen, menurut CDC China) akan 
			mengalami gejala virus Corona berupa gangguan pernapasan akut (ARDS), penyakit yang terjadi 
			ketika cairan terkumpul di paru-paru. ARDS ini sering kali berakibat fatal.</span ></br>
			<li><span >Hari 10: Jika pasien memiliki gejala yang memburuk, ini adalah waktu dalam perkembangan penyakit 
			ketika mereka kemungkinan besar dirawat di ICU. Pasien-pasien ini mungkin memiliki lebih banyak 
			sakit perut dan kehilangan nafsu makan daripada pasien dengan kasus yang lebih ringan. Hanya 
			sebagian kecil yang mati: Tingkat kematian saat ini berkisar sekitar 2%.</span ></br>
			<li><span >Hari 17: Rata-rata orang yang sudah sembuh dari gejala-gejala virus Corona akan diperbolehkan 
			pulang dari rumah sakit setelah dua setengah minggu.</span ></br></li>
			<span >Itulah beberapa gejala-gejala virus Corona pada manusia yang perlu kamu tahu. Setelah mengetahui 
			dengan jelas apa yang dimaksud virus Corona dan gejala-gejalanya, kamu juga perlu tahu bagaimana 
			cara untuk mencegah infeksi virus Corona</span ></p>

		</div>
</body>
</html>
