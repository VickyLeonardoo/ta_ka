<?php
require 'koneksi.php';

$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$email=$_POST['email'];
$pesan=$_POST['pesan'];


$sql=mysqli_query($conn,"INSERT INTO komentar(nama,email,no_hp,pesan)values
('$nama','$email','$no_hp','$pesan')");

if ($sql)
{
?>
<script type="text/javascript">
	alert ('Data Berhasil Disimpan');
	window.location='index.php';
</script>
<?php
} else {
	echo 'eror';
}
?>

