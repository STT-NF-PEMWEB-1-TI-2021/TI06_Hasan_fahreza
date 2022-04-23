<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Array Siswa</title>
	</head>
	<body>
		<?php
			$ns1 = ['id'=>1,'nim'=>'01102','uts'=>95,'uas'=>65,'tugas'=>90];
			$ns2 = ['id'=>2,'nim'=>'01122','uts'=>65,'uas'=>85,'tugas'=>80];
			$ns3 = ['id'=>3,'nim'=>'01132','uts'=>85,'uas'=>75,'tugas'=>70];
			$ns4 = ['id'=>4,'nim'=>'01142','uts'=>75,'uas'=>95,'tugas'=>60];
			$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
		?>
			<h1>Daftar Nilai Siswa</h1>
			<table>
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">NIM</th>
						<th scope="col">UTS</th>
						<th scope="col">UAS</th>
						<th scope="col">Tugas</th>
						<th scope="col">Nilai Akhir</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$nomor = 1;
						foreach($ar_nilai as $ns){
							echo '<tr><th scope="row">'.$nomor.'</th>';
							echo '<td>'.$ns['nim'].'</td>';
							echo '<td>'.$ns['uts'].'</td>';
							echo '<td>'.$ns['uas'].'</td>';
							echo '<td>'.$ns['tugas'].'</td>';
							$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
							echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
							echo '<tr/>';
							$nomor++;
						}
					?>
				</tbody>
			</table>
    </body>
</html>