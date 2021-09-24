<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include "../connect.php";

$queryTotal = mysqli_query($conn, "SELECT * FROM dokumen
										WHERE datediff(expired, now()) <= '30'");
$totalMail = mysqli_num_rows($queryTotal);

if ($totalMail > 0) {
	function email_data()
	{
		include "../connect.php";
		include "../function.php";

		$queryMail = mysqli_query($conn, "SELECT id_dokumen, nm_dokumen, thn_dokumen,
													upload.nama as yg_upload, waktu_diupload,
													rubah.nama as yg_rubah, waktu_dirubah,
													expired, datediff(expired, now()) as selisih,
													file, menu, sub_menu, kd_folder
												FROM dokumen
												INNER JOIN ms_folder folder
													ON kd_folder = id_folder
												LEFT JOIN login upload
													ON upload.id = diupload_oleh
												LEFT JOIN login rubah
													ON rubah.id = dirubah_oleh
												WHERE datediff(expired, now()) <= '30'
												ORDER BY nm_dokumen ASC");

		$pesan = "";

		$pesan .= "Dear Bapak/Ibu <b>PT. Pelayaran Ekanuri Indra Pratama</b> <br><br>
						Berikut dokumen yang akan kadaluarsa kurang dari 30 hari, dan dokumen yang sudah kadaluarsa<br>
						Mohon untuk dilakukan perubahan masa kadaluarsa atau perubahan file pada dokumen berikut: <br><br>
						<table border='1' style='border-collapse: collapse;'>
							<tr>
								<th>Kode Dokumen</th>
								<th>Nama Dokumen</th>
								<th>Tahun Dokumen</th>
								<th>Diupload Oleh</th>
								<th>Waktu Diupload</th>
								<th>Dirubah Oleh</th>
								<th>Waktu Dirubah</th>
								<th>Kadaluarsa</th>
								<th>Selisih</th>
								<th>Nama File</th>
							<tr> ";

		while ($dataMail = mysqli_fetch_assoc($queryMail)) {

			$pesan .= "<tr>
								<td>" . $dataMail['id_dokumen'] . "</td>
								<td>" . $dataMail['nm_dokumen'] . "</td>
								<td>" . $dataMail['thn_dokumen'] . "</td>
								<td>" . $dataMail['yg_upload'] . "</td>
								<td>" . date('d', strtotime($dataMail['waktu_diupload'])) . " " . ($bln_singkat[date('m', strtotime($dataMail['waktu_diupload']))]) . " " . date('y', strtotime($dataMail['waktu_diupload'])) . " " . date('H:i', strtotime($dataMail['waktu_diupload'])) . "</td>
								<td>" . $dataMail['yg_rubah'] . "</td>
								<td>" . date('d', strtotime($dataMail['waktu_dirubah'])) . " " . ($bln_singkat[date('m', strtotime($dataMail['waktu_dirubah']))]) . " " . date('y', strtotime($dataMail['waktu_dirubah'])) . " " . date('H:i', strtotime($dataMail['waktu_dirubah'])) . "</td>
								<td>" . date('d', strtotime($dataMail['expired'])) . " " . ($bln_singkat[date('m', strtotime($dataMail['expired']))]) . " " . date('y', strtotime($dataMail['expired'])) . "</td>
								<td>" . $dataMail['selisih'] . " Hari</td>
								<td>" . $dataMail['file'] . "</td>
							</tr>";
		}
		$pesan .= "</table> <br>
							Email ini otomatis dibuat oleh sistem <br>
							Salam Hormat, <br>
							Ekanuri Sistem. <br>";

		return $pesan;
	}

	require_once "library/PHPMailer.php";
	require_once "library/Exception.php";
	require_once "library/OAuth.php";
	require_once "library/POP3.php";
	require_once "library/SMTP.php";

	$mail = new PHPMailer;

	//Enable SMTP debugging. 
	//$mail->SMTPDebug = 3;    //NGILANGIN DEBUG KEKNYA                           
	//Set PHPMailer to use SMTP.
	$mail->isSMTP();
	//Set SMTP host name                          
	$mail->Host = "tls://smtp.gmail.com"; //host mail server
	//Set this to true if SMTP host requires authentication to send email
	$mail->SMTPAuth = true;
	//Provide username and password     
	$mail->Username = "system.ekanuri@gmail.com";   //nama-email smtp          
	$mail->Password = base64_decode("U3lzdGVtMTM1Nzk=");           //password email smtp
	//If SMTP requires TLS encryption then set it
	$mail->SMTPSecure = "tls";
	//Set TCP port to connect to 
	$mail->Port = 587;

	$mail->From = "system.ekanuri@gmail.com"; //email pengirim
	$mail->FromName = "System Ekanuri (No Reply)"; //nama pengirim

	$mail->addAddress("operation.shipping@ekanuri.com", "Operation Shipping"); //email penerima 
	// $mail->addAddress("ahmadjuantoro@gmail.com", "Ahmad Juantoro"); //email penerima 

	$mail->isHTML(true);

	$mail->Subject = $totalMail . " Dokumen Akan Kadaluarsa"; //subject
	$mail->Body = email_data(); // isi pesan
	$mail->AltBody = ""; //body email (optional)


	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message has been sent successfully";
	}
}
