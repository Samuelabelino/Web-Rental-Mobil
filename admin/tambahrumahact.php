<?php
include('includes/config.php');
error_reporting(0);
$rumahtitle = $_POST['rumahtitle'];
$brand = $_POST['brandname'];
$nomor = $_POST['nomor'];
$rumahoverview = $_POST['rumahview'];
$priceperday = $_POST['priceperday'];
$fueltype = $_POST['fueltype'];
$modelyear = $_POST['modelyear'];
$kamarcapacity = $_POST['kamarcapacity'];
$airconditioner = $_POST['airconditioner'];
$powerdoorlocks = $_POST['powerdoorlocks'];
$antilockbrakingsys = $_POST['antilockbrakingsys'];
$brakeassist = $_POST['brakeassist'];
$powersteering = $_POST['powersteering'];
$driverairbag = $_POST['driverairbag'];
$passengerairbag = $_POST['passengerairbag'];
$powerwindow = $_POST['powerwindow'];
$cdplayer = $_POST['cdplayer'];
$centrallocking = $_POST['centrallocking'];
$crashcensor = $_POST['crashcensor'];
$leatherseats = $_POST['leatherseats'];
$vimage1 = $_FILES["img1"]["name"];
$vimage2 = $_FILES["img2"]["name"];
$vimage3 = $_FILES["img3"]["name"];
$vimage4 = $_FILES["img4"]["name"];
$vimage5 = $_FILES["img5"]["name"];
move_uploaded_file($_FILES["img1"]["tmp_name"], "img/vehicleimages/" . $_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"], "img/vehicleimages/" . $_FILES["img2"]["name"]);
move_uploaded_file($_FILES["img3"]["tmp_name"], "img/vehicleimages/" . $_FILES["img3"]["name"]);
move_uploaded_file($_FILES["img4"]["tmp_name"], "img/vehicleimages/" . $_FILES["img4"]["name"]);
move_uploaded_file($_FILES["img5"]["tmp_name"], "img/vehicleimages/" . $_FILES["img5"]["name"]);
$sql 	= "INSERT INTO rumah (nama_rumah,id_merek,nomor,deskripsi,harga,panjang,tahun,kamar,image1,image2,image3,image4,image5,
			AirConditioner,PowerDoorLocks,AntiLockBrakingSystem,BrakeAssist,PowerSteering,DriverAirbag,PassengerAirbag,
			PowerWindows,CDPlayer,CentralLocking,CrashSensor,LeatherSeats)
			VALUES ('$rumahtitle','$brand','$nomor','$rumahoverview','$priceperday','$fueltype','$modelyear','$kamarcapacity',
			'$vimage1','$vimage2','$vimage3','$vimage4','$vimage5','$airconditioner','$powerdoorlocks','$antilockbrakingsys',
			'$brakeassist','$powersteering','$driverairbag','$passengerairbag','$powerwindow','$cdplayer','$centrallocking',
			'$crashcensor','$leatherseats')";
$query 	= mysqli_query($koneksidb, $sql);
if ($query) {
	echo "<script type='text/javascript'>
			alert('Berhasil tambah data.'); 
			document.location = 'rumah.php'; 
		</script>";
} else {
	echo "No Error : " . mysqli_errno($koneksidb);
	echo "<br/>";
	echo "Pesan Error : " . mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'tambahrumah.php'; 
		</script>";
}
