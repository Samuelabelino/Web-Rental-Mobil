<?php
include('includes/config.php');
error_reporting(0);
$rumahtitle = $_POST['rumahtitle'];
$brand = $_POST['brandname'];
$nomor = $_POST['nomor'];
$rumahoverview = $_POST['rumahoverview'];
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
$id = $_POST['id'];

$sql = "UPDATE rumah SET nama_rumah='$rumahtitle',nomor='$nomor',id_merek='$brand',deskripsi='$rumahoverview',harga='$priceperday',bb='$fueltype',tahun='$modelyear',
	kamar='$kamarcapacity',AirConditioner='$airconditioner',PowerDoorLocks='$powerdoorlocks',AntiLockBrakingSystem='$antilockbrakingsys',
	BrakeAssist='$brakeassist',PowerSteering='$powersteering',DriverAirbag='$driverairbag',PassengerAirbag='$passengerairbag',PowerWindows='$powerwindow',
	CDPlayer='$cdplayer',CentralLocking='$centrallocking',CrashSensor='$crashcensor',LeatherSeats='$leatherseats' where id_rumah='$id'";
$query 	= mysqli_query($koneksidb, $sql);
if ($query) {
	echo "<script type='text/javascript'>
			alert('Berhasil edit data.'); 
			document.location = 'rumah.php'; 
		</script>";
} else {
	echo "No Error : " . mysqli_errno($koneksidb);
	echo "<br/>";
	echo "Pesan Error : " . mysqli_error($koneksidb);

	echo "<script type='text/javascript'>
			alert('Terjadi kesalahan, silahkan coba lagi!.'); 
			document.location = 'rumahedit.php?id=$id'; 
		</script>";
}
