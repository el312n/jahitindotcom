<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Email</title>
</head>
<body>

<b>Selamat Datang Di Jahitin.com ! </b><br><br>
Hi,<?php echo e($name); ?>

<br><br>
Untuk Bisa Login dan menikmati layanan kami silahkan verifikasi email dan aktifkan account kamu dengan klik link berikut: <br>
<?php echo link_to('confrimation/'.$email.'/'.$confirmCode, 'Kofirmasi email dan aktifkan akumnu'); ?>


</a>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
Salam Satu Jarum,<br><br>

<a href="http://jahitin.com"><p>Customer Service Jahitin.com</p></a>
</body>
</html>