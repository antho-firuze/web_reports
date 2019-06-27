<?php
try {
// require composer autoload
require __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font' => 'helvetica',
	'setAutoTopMargin' => 'stretch',
]);

include('data_questioner_raiz.php');

//ini_set("pcre.backtrack_limit", "1000000000000");
//$stylesheet = file_get_contents('style.css');

$var = (object)[
	'cif' => '1234567890',
	'kodenasabah' => '1234567890',
	'namanasabah' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'namadankodesales' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'kantorpemasaran' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'namalengkap'	=> 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'namadepan'	=> 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'namakeluarga'	=> 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'maidenname' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'tempatlahir' => 'abcdefghijklmno',
	'tanggallahirTahun' => '1990',
	'tanggallahirBulan' => 'Januari',
	'tanggallahir' => '01',
	'nokartuidentitas' => '1234567890',
	'masaberlaku' => 'Seumur Hidup',
	'npwpno' => '1234567890',
	'npwpregisdate' => '1234567890',
	'idcardaddress' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'rt' => '01',
	'rw' => '01',
	'kelurahan' => 'abcdefghijklmnopqrstuvwxyz',
	'kecamatan' => 'abcdefghijklmno',
	'kota' => 'abcdefghijklmno',
	'provinsi' => 'abcdefghijklmno',
	'kodepos' => '12345',
	'koresponaddress' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'koresponrt' => '01',
	'koresponrw' => '01',
	'koresponkelurahan' => 'abcdefghijklmnopqrstuvwxyz',
	'koresponkecamatan' => 'abcdefghijklmno',
	'koresponkota' => 'abcdefghijklmno',
	'koresponprovinsi' => 'abcdefghijklmno',
	'koresponkodepos' => '12345',
	'nomorteleponrumah' => '123456789012345',
	'faksimili' => '123456789012345',
	'nomortelepongenggam' => '123456789012345',
	'alamatemail' => 'abcdefghijklmno@abcdefghi.abcde',
	'agama' => 'abcdefghijklmno',
	'namaperusahaan' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'bidangusaha' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'jabatan' => 'abcdefghijklmnopqrstuvwxyz',
	'alamatperusahaan' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'nomortelpperusahaan' => '123456789012345',
	'nomorfaksimiliperusahaan' => '123456789012345',
	'namaahliwarissatu' => 'abcdefghijklmno',
	'namaahliwarissatuhubungan' => 'abcdefghijklmno',
	'namaahliwarisdua' => 'abcdefghijklmno',
	'namaahliwarisduahubungan' => 'abcdefghijklmno',
	'namakeluargadarurat' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'namakeluargahubungan' => 'abcdefghijklmno',
	'namakeluargaalamat' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'namakeluargatelepon' => '123456789012345',
	'sumberdanainvestasilainnya' => 'abcdefghijklmno',
	'namapasanganatauorangtua' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'nokartuidentitasinformasikeluarga' => '123456789012345',
	'masaberlakuidentitasinformasikeluarga' => 'seumur hidup',
	'namaperusahaaninformasikeluarga' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'bidangusahainformasikeluarga' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
	'jabataninformasikeluarga' => 'abcdefghijklmnopqrstuvwxyz',
	'alamatperusahaaninformasikeluarga' => 'abcdefghijklmnopqrstuvwxyz abcdefghi',
    'nomorrekeningrupiah' => '12345678901234567890',
    'nomorrekeningdolar' => '12345678901234567890',
    'jenisrekeningrupiah' => 'abcdefghijklmnopqrstuvwxyz',
    'jenisrekeningdolar' => 'abcdefghijklmnopqrstuvwxyz',
	'namabank' => 'abcdefghijklmnopqrstuvwxyz',
	'cabangbank' => 'abcdefghijklmno',
	'namaketerangantambahan' => 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz',
	'namainstansiketerangantambahan' => 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz',
	'jabatanketerangantambahan' => 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz',
	'masajabatanketerangantambahan' => 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz',
	'hubungankeluargaketerangantambahan' => 'abcdefghijklmnopqrstuvwxyz abcdefghijklmnopqrstuvwxyz',
	'parafpernyataannasabah' => '25 April 2017',
	
	'breakline1' => '<br></br>',
	'breakline2' => '<br></br><br></br>',
	'breakline3' => '<br></br><br></br><br></br>',
	'breakline4' => '<br></br><br></br><br></br><br></br>',
	'breakline5' => '<br></br><br></br><br></br><br></br><br></br>',
	'breakline6' => '<br></br><br></br><br></br><br></br><br></br><br></br>',
	'breakline8' => '<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>',	
	'breakline9' => '<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>',
	'breakline10' => '<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>',
	'spasi2' => '&ensp;',
	'spasi3' => '&ensp;&nbsp;',
	'spasi4' => '&emsp;',
	'spasi5' => '&emsp;&nbsp;',
	'spasi6' => '&emsp;&nbsp;&nbsp;',
	'spasi7' => '&emsp;&nbsp;&nbsp;&nbsp;',
	'spasi8' => '&emsp;&emsp;',
	'spasi9' => '&emsp;&emsp;&nbsp;',
	'spasi10' => '&emsp;&emsp;&nbsp;&nbsp;',
	'spasi12' => '&emsp;&emsp;&emsp;',
	'spasi13' => '&emsp;&emsp;&emsp;&nbsp;',
	'spasi14' => '&emsp;&emsp;&nbsp;&nbsp;&emsp;',
	'spasi16' => '&emsp;&emsp;&emsp;&emsp;',
	'spasi18' => '&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;',
	'spasi20' => '&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi22' => '&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;',
	'spasi24' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi25' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;',
	'spasi26' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;',
	'spasi28' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi30' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;',
	'spasi32' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi34' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;',
	'spasi40' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi44' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi46' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;',
	'spasi48' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi49' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;',
	'spasi50' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;',
	'spasi51' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&nbsp;',
	'spasi60' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi72' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
	'spasi80' => '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;',
];


$htmlSatu = '<br></br>
			<table border="0" style="width:100%;">
				<tr>
					<td style="width:80%;">
						<img src="C:/xampp/htdocs/web_reports/reksadana - 219x88.png">
					</td>
					<td>
						<img src="C:/xampp/htdocs/web_reports/logo-raiz - 257x78.png">
					</td>
				</tr>
			</table>
			'.$var->breakline1.'
			<table border="0" style="width:100%;">
				<tr>
					<td style="text-align:center; font-size:20px; font-family: helvetica;">
						<strong>Formulir Pembukaan Rekening Efek Reksa Dana</strong>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1pt solid black; text-align:center; font-size:20px; font-family: helvetica;">
						<strong>Profil Pemodal Reksa Dana</strong>
					</td>
				</tr>
			</table>
			<table border="0" style="width:100%;">
				<tr>
					<td style="text-align:justify; height:auto; font-size:11px; letter-spacing:-0.5;">
						Sesuai Peraturan Bapepam Nomor IV.D2, setiap Manajer Investasi atau Agen Penjual Efek Reksa Dana wajib mensyaratkan invester Reksa Dana untuk mengisi formulir Profil Pemodal Reksa Dana ini.
					</td>
				</tr>
			</table>
			'.$var->breakline1.'
			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px; font-size:11px;">1.</td>
					<td valign="top" style="height:20px; font-size:11px;">
						Jenis portofolio/nama Reksa Dana yang Anda minati:
					</td>
				</tr>
			</table>
			<table border="1" style="border-style:dotted; border-collapse:collapse; width:70%;">
				<tr>
					<td valign="top" style="border-left:0; border-right:0; border-bottom:0; border-top:0;  text-align:center; width:7.4%; height:20px; font-size:11px;"><strong></strong></td>
					<td valign="top" style="border:1; border-style:dotted; width:10%; height:20px; font-size:11px;"></td>
					<td valign="top" style="border-style:dotted; width:150px; border:1; height:20px; font-size:11px;"><strong>&ensp;Tipe portfolio</strong></td>
					<td valign="top" style="border:1; border-style:dotted; height:20px; font-size:11px;"><strong>&ensp;Jenis Reksa Dana</strong></td>
				</tr>
				<tr>
					<td valign="top" style="border-left:0; border-right:0; border-bottom:0; border-top:0;  text-align:center; width:7.4%; height:20px; font-size:11px;"><strong></strong></td>
					<td style="width:10%; border:1; border-style:dotted; height:20px; font-size:11px; text-align:center;">
						<input type="checkbox">
						<label class="container">
						<span class="checkmark"></span>
						</label>
					</td>
					<td valign="top" style="width:150px; border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Konservatif</td>
					<td valign="top" style=" border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Reksa Dana Pasar Uang</td>
				</tr>
				<tr>
					<td valign="top" style="border-left:0; border-right:0; border-bottom:0; border-top:0;  text-align:center; width:7.4%; height:20px; font-size:11px;"><strong></strong></td>
					<td style="width:10%; border:1; border-style:dotted; height:20px; font-size:11px; text-align:center;">
						<input type="checkbox">
						<label class="container">
						<span class="checkmark"></span>
						</label>
					</td>
					<td valign="top" style="width:150px; border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Moderat</td>
					<td valign="top" style=" border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Reksa Dana Pendapatan Tetap</td>
				</tr>
				<tr>
					<td valign="top" style="border-left:0; border-right:0; border-bottom:0; border-top:0;  text-align:center; width:7.4%; height:20px; font-size:11px;"><strong></strong></td>
					<td style="width:10%; border:1; border-style:dotted; height:20px; font-size:11px; text-align:center;">
						<input type="checkbox">
						<label class="container">
						<span class="checkmark"></span>
						</label>
					</td>
					<td valign="top" style="width:150px; border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Agresif</td>
					<td valign="top" style=" border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Reksa Dana Indeks Saham</td>
				</tr>
			</table>
			'.$var->breakline1.'
			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px; font-size:11px;">2.</td>
					<td valign="top" style="height:20px; font-size:11px;">
						Berapa lama Anda akan melakukan investasi di portofolio/Reksa Dana tersebut?
					</td>
				</tr>
			</table>
			<table border="0" style="border-collapse:collapse; width:80%; margin-left:36px;">
				<tr>
					<td valign="top" style="border:1; border-right:0; border-style:dotted; width:130px; height:auto; font-size:11px;">
						&nbsp;
						<input type="checkbox">
						<label class="container">&nbsp; < 1 Tahun
							<span class="checkmark"></span>
						</label>
					</td>
					<td valign="top" style="width:130px; border:1; border-right:0; border-style:dotted; height:auto; font-size:11px;">
						&nbsp;
						<input type="checkbox" checked="checked">
						<label class="container">&nbsp; 1 - 3 Tahun
							<span class="checkmark"></span>
						</label>
					</td>
					<td valign="top" style="width:130px; border:1; border-right:0; border-style:dotted; height:auto; font-size:11px;">
						&nbsp;	
						<input type="checkbox">
						<label class="container">&nbsp; 3 - 5 Tahun
							<span class="checkmark"></span>
						</label>
					</td>
					<td valign="top" style=" border:1; border-style:dotted; height:auto; font-size:11px;">
						&nbsp;
						<input type="checkbox">
						<label class="container">&nbsp; > 5 Tahun
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
			</table>
			'.$var->breakline1.'
			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px; font-size:11px;">3.</td>
					<td valign="top" style="height:20px; font-size:11px;">
						Apakah sebelumnya Anda pernah berinvestasi di Reksa Dana?
					</td>
				</tr>
			</table>
			<table border="0" style="border-collapse:collapse; width:40%; margin-left:36px;">
				<tr>
					<td valign="top" style="border:1; border-right:0; border-style:dotted; width:130px; height:auto; font-size:11px;">
						&nbsp;
						<input type="checkbox" checked="checked">
						<label class="container">&nbsp;Ya, pernah
							<span class="checkmark"></span>
						</label>
					</td>
					<td valign="top" style="width:130px; border:1; border-style:dotted; height:auto; font-size:11px;">
						&nbsp;
						<input type="checkbox">
						<label class="container">&nbsp;Belum pernah
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
			</table>
			'.$var->breakline1.'
			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px; font-size:11px;">4.</td>
					<td valign="top" style="height:20px; font-size:11px;">
						Tujuan investasi:
					</td>
				</tr>
			</table>
			<table border="0" style="border-collapse:collapse; width:70%;">
				<tr>
					<td valign="top" style="text-align:center; width:7.4%; height:20px; font-size:11px;"><strong></strong></td>
					<td style="width:5%; border:1; border-right:0; border-style:dotted; height:20px; font-size:11px; text-align:center;">
						<input type="checkbox">
						<label class="container">
						<span class="checkmark"></span>
						</label>
					</td>
					<td style="width:150px; border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Keamanan dana investasi</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:7.4%; height:20px; font-size:11px;"><strong></strong></td>
					<td style="width:5%; border:1; border-right:0; border-style:dotted; height:20px; font-size:11px; text-align:center;">
						<input type="checkbox">
						<label class="container">
						<span class="checkmark"></span>
						</label>
					</td>
					<td style="width:150px; border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Pendapatan dan keamanan dana investasi</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:7.4%; height:20px; font-size:11px;"><strong></strong></td>
					<td style="width:5%; border:1; border-right:0; border-style:dotted; height:20px; font-size:11px; text-align:center;">
						<input type="checkbox">
						<label class="container">
						<span class="checkmark"></span>
						</label>
					</td>
					<td style="width:150px; border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Pendapatan dan pertumbuhan dalam jangka panjang</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:7.4%; height:20px; font-size:11px;"><strong></strong></td>
					<td style="width:5%; border:1; border-right:0; border-style:dotted; height:20px; font-size:11px; text-align:center;">
						<input type="checkbox">
						<label class="container">
						<span class="checkmark"></span>
						</label>
					</td>
					<td style="width:150px; border:1; border-style:dotted; height:20px; font-size:11px;">&ensp;Pertumbuhan</td>
				</tr>
			</table>
			'.$var->breakline1.'
			<table>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px; font-size:11px;">5.</td>
					<td valign="top" style="height:20px; font-size:11px;">
						Mohon beri tanda {&#10003;} untuk jawaban yang paling mendekati profil Anda sebagai investor Reksa Dana:
					</td>
				</tr>
			</table>
			<table border="1" style="border-collapse:collapse; width:100%;">
				<tr style="background-color: #221b34;">
					<td colspan="2" style="color:white; text-align:center; width:85%; height:20px; font-size:10px;"><strong> Pertanyaan Detail/<em>Detail Questions</em> </strong></td>
					<td style="color:white; border-left:0; text-align:center; height:20px; font-size:10px;"><strong> Nilai/<em>Score</em></strong></td>
				</tr>
			';
$mpdf->WriteHTML($htmlSatu);

foreach($questions as $q) {
	if ($q['QuestionNo'] < 4) {
	$htmlSatu = '
	//valign="bottom" 
	<tr>
		<td valign="top" style="border-top:0; border-right:0; border-bottom:0; width:5%; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
			&ensp;'.$abjad[$q['QuestionNo']].'.
		</td>
		<td valign="top" style="border-top:0; border-left:0; border-right:0; border-bottom:0; width:82.5%; height:auto; font-size:11px; letter-spacing:-0.5px;">
			'.$q['QuestionText'].'
		</td>
		<td valign="top" style="border-top:0; border-bottom:0; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
			
		</td>
	</tr>
	';
	$mpdf->WriteHTML($htmlSatu);
	// $mpdf->WriteHTML($questions_opt['QuestionNo'] = $q['QuestionNo']);
	// $opt = $questions_opt['QuestionNo']$q['QuestionNo'];
	foreach($questions_opt as $qopt) {
		if ($qopt['QuestionNo'] == $q['QuestionNo']) {
			$htmlSatu = '
			<tr>
				<td valign="top" style="border-right:0; border-top:0; border-right:0; border-bottom:0; width:5%; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">

				</td>
				<td valign="top" style="border-left:0; border-top:0; border-right:0; border-bottom:0; height:auto; font-size:11px; letter-spacing:-0.5px;">
					<p style="font-size:6px;">&ensp;</p>
					'.$var->spasi4.'
					<input type="checkbox">
					<label class="container">&emsp;'.$qopt['OptionText'].'
						<span class="checkmark"></span>
					</label>
				</td>
				<td style="border-top:0; border-bottom:0; text-align:center; font-size:11px; height:auto;"> '.$qopt['OptionValue'].'</td>
			</tr>';
			$mpdf->WriteHTML($htmlSatu);
		}
	}
	//tricky row
	$htmlSatu = '
	<tr>
		<td valign="top" style="border-right:0; border-left:0; border-bottom:0; width:5%; height:auto; font-size:1px; letter-spacing:-0.5px; text-align:center;">
			
		</td>
		<td valign="top" style="border-right:0; border-left:0; border-bottom:0; height:auto; font-size:1px; letter-spacing:-0.5px;">
			
		</td>
		<td style="border-right:0; border-left:0; border-bottom:0; text-align:center; font-size:1px; height:auto;"> 
			
		</td>
	</tr>
	';
	$mpdf->WriteHTML($htmlSatu);		
	}
}

//another tricky row
$htmlSatu =	'
</table><pagebreak>';
$mpdf->WriteHTML($htmlSatu);


$htmlSatu ='

<table border="1" style="border-collapse:collapse; width:100%;">
	<tr style="background-color: #221b34;">
		<td colspan="2" style="color:white; text-align:center; width:85%; height:20px; font-size:10px;"><strong> Pertanyaan Detail/<em>Detail Questions</em> </strong></td>
		<td style="color:white; border-left:0; text-align:center; height:20px; font-size:10px;"><strong> Nilai/<em>Score</em></strong></td>
	</tr>
';
$mpdf->WriteHTML($htmlSatu);

foreach($questions as $q) {
	if ($q['QuestionNo'] > 3) {
	$htmlSatu = '
	//valign="bottom" 
	<tr>
		<td valign="top" style="border-top:1; border-right:0; border-bottom:0; width:5%; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
			&ensp;'.$abjad[$q['QuestionNo']].'.
		</td>
		<td valign="top" style="border-top:1; border-left:0; border-right:0; border-bottom:0; width:82.5%; height:auto; font-size:11px; letter-spacing:-0.5px;">
			'.$q['QuestionText'].'
		</td>
		<td valign="top" style="border-top:1; border-bottom:0; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
			
		</td>
	</tr>
	';
	$mpdf->WriteHTML($htmlSatu);
	// $mpdf->WriteHTML($questions_opt['QuestionNo'] = $q['QuestionNo']);
	// $opt = $questions_opt['QuestionNo']$q['QuestionNo'];
	foreach($questions_opt as $qopt) {
		if ($qopt['QuestionNo'] == $q['QuestionNo']) {
			$htmlSatu = '
			<tr>
				<td valign="top" style="border-right:0; border-top:0; border-right:0; border-bottom:0; width:5%; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
					
				</td>
				<td valign="top" style="border-left:0; border-top:0; border-right:0; border-bottom:0; height:auto; font-size:11px; letter-spacing:-0.5px;">
					<p style="font-size:6px;">&ensp;</p>
					'.$var->spasi4.'
					<input type="checkbox">
					<label class="container">&emsp;'.$qopt['OptionText'].'
						<span class="checkmark"></span>
					</label>
				</td>
				<td style="border-top:0; border-bottom:0; text-align:center; font-size:11px; height:auto;"> '.$qopt['OptionValue'].'</td>
			</tr>';
			$mpdf->WriteHTML($htmlSatu);
		}
	}
	//tricky row
	$htmlSatu = '
	<tr>
		<td valign="top" style="border-right:0; border-left:0; border-bottom:0; width:5%; height:auto; font-size:1px; letter-spacing:-0.5px; text-align:center;">
			
		</td>
		<td valign="top" style="border-right:0; border-left:0; border-bottom:0; height:auto; font-size:1px; letter-spacing:-0.5px;">
			
		</td>
		<td style="border-right:0; border-left:0; border-bottom:0; text-align:center; font-size:1px; height:auto;"> 
			
		</td>
	</tr>
	';
	$mpdf->WriteHTML($htmlSatu);		
	}
}

//another tricky row
$htmlSatu =	'
<tr>
	<td valign="top" style="border:1; border-top:0; border-right:0; width:5%; height:30px; font-size:11px; letter-spacing:-0.5px; text-align:center;">
		
	</td>
	<td valign="top" style="text-align:right; border:1; border-top:0; border-left:0; border-right:0; height:30px; font-size:11px; letter-spacing:-0.5px;">
		Total Nilai&ensp;
	</td>
	<td style="border-top:0; text-align:center; font-size:11px; height:30px;"> 
		
	</td>
</tr>
</table>';
$mpdf->WriteHTML($htmlSatu);

$htmlSatu =	'
			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td style="font-size:4px;">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td style="font-size:12px;">
						Total nilai yang Anda peroleh menunjukan profil risiko berinvestasi anda
					</td>
				</tr>
			</table>
			<table border="0" style="border-collapse:collapse; width:25%; margin-left:10px;">
				<tr>
					<td style="text-align:left; border:1; border-style:dotted; border-right:0; width:40%; height:20px; font-size:11px; letter-spacing:-0.5px;">
						&ensp;10 - 100
					</td>
					<td style="text-align:left; border:1; border-style:dotted; height:20px; font-size:11px; letter-spacing:-0.5px;">
						&ensp;Konservatif
					</td>
				</tr>
				<tr>
					<td style="text-align:left; border:1; border-style:dotted; border-right:0; width:40%; height:20px; font-size:11px; letter-spacing:-0.5px;">
						&ensp;110 - 200
					</td>
					<td style="text-align:left; border:1; border-style:dotted; height:20px; font-size:11px; letter-spacing:-0.5px;">
						&ensp;Moderat
					</td>
				</tr>
				<tr>
					<td style="text-align:left; border:1; border-style:dotted; border-right:0; width:40%; height:20px; font-size:11px; letter-spacing:-0.5px;">
						&ensp;200 - 180
					</td>
					<td style="text-align:left; border:1; border-style:dotted; height:20px; font-size:11px; letter-spacing:-0.5px;">
						&ensp;Agresif
					</td>
				</tr>
			</table>
			'.$var->breakline1.'
			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td style="font-size:12px;">
						<strong>Pernyataan Investor Reksa Dana</strong>
					</td>
				</tr>
				<tr>
					<td style="font-size:4px;">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td style="font-size:11px; text-align:justify;">
						Investor menyadari dan mengerti bahwa jawaban yng diberikan dalam Profil Pemodal Reksa Dana ini digunakan untuk analisa Agen Penjual Efek Reksa Dana dalam rangka membantu investor mengetahui tingkat risiko investasi yang dapat diterimanya.
					</td>
				</tr>
				<tr>
					<td style="font-size:4px;">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td style="font-size:11px; text-align:justify;">
						Apabila investor telah melengkapi dengan benar Profil Reksa Dana ini, akan tetapi memilih portofolio/Reksa Dana dengan karakter yang tidak sesuai dengan Profil Pemodal Reksa Dana yang telah diisinya di atas, maka pilihan portofolio/Reksa Dana tersebut adalah semata-mata berdasarkan keinginan investor sendiri. Sehubungan dengan hal tersebut, investor mengerti dan bersedia menerima risiko atas investasi yang dilakukannya tersebut
					</td>
				</tr>
				<tr>
					<td style="font-size:8px;">
						&nbsp;
					</td>
				</tr>
			</table>
			<table border="1" style="background-color: #221b34; border-collapse:collapse; width:100%;">
				<tr>
					<td style="color:white; font-size:14px; height:25px;">
						&ensp;LEMBAR PERSETUJUAN
					</td>
				</tr>
			</table>
			<table border="1" style=" border-collapse:collapse; width:20%;">
				<tr>
					<td style="border-left:0; border-right:0; border-top:0; font-size:18px;">&nbsp;</td>
				</tr>
			</table>
			<table border="0" style=" border-collapse:collapse; width:100%;">
				<tr>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; font-size:11px; height:20px;">
						'.$var->spasi8.'Tempat & Tanggal
					</td>
					<td valign="middle" style="text-align:center; border-left:0; border-right:0; border-bottom:0; font-size:11px; height:20px;">
						Diisi oleh PT Raiz Invest Indonesia
					</td>
				</tr>
				<tr>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="text-align:center; border-left:0; border-right:0; border-bottom:0; font-size:6px;">
						&nbsp;
					</td>
				</tr>
			</table>
			<table border="1" style=" border-collapse:collapse; width:100%;">
				<tr>
					<td valign="middle" style="width:40%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:10%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:15%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						Marketing
					</td>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						:
					</td>
				</tr>
				<tr>
					<td valign="middle" style="width:40%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:10%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:15%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td valign="middle" style="width:40%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:10%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:15%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						Operations
					</td>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						:
					</td>
				</tr>
				<tr>
					<td valign="middle" style="width:40%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:10%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:15%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td valign="middle" style="width:40%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:10%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:15%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						Compliance
					</td>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						:
					</td>
				</tr>
				<tr>
					<td valign="middle" style="width:40%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:10%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:15%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:6px;">
						&nbsp;
					</td>
				</tr>
				<tr>
					<td valign="middle" style="width:40%; text-align:left; border-left:0; border-right:0; border-bottom:0; font-size:11px;">
						'.$var->spasi14.'Tanda Tangan Nasabah dan Nama Jelas
					</td>
					<td valign="middle" style="width:10%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						&nbsp;
					</td>
					<td valign="middle" style="width:15%; text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						Tanggal Disetujui
					</td>
					<td valign="middle" style="text-align:left; border-left:0; border-right:0; border-bottom:0; border-top:0; font-size:11px;">
						:
					</td>
				</tr>
			</table>
			'.$var->breakline1.'
			<table bgcolor="#221b34" border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td style="color:white; text-align:justify; font-size:11px; padding: 5px;">
						<strong> Pernyataan Peringatan (Disclaimer)</strong><br></br>
						Pertanyaan-pertanyaan yang tercantum dalam Profil Pemodal reksa Dana ini disediakan oleh PT Raiz Invest Indonesia semata-mata untuk membantu investor menemukan profil risiko berinvestasinya dan bukan merupakan nasihat, saran, undangan, atau bujukan untuk membeli unit penyertaan Reksa Dana mengandung risiko. Nasabah selayaknya mengerti bahwa Reksa Dana memiliki risiko.
					</td>
				</tr>
			</table>
			';
$mpdf->WriteHTML($htmlSatu);



//$mpdf->WriteHTML($stylesheet,1);
$mpdf->useSubstitutions = false; // optional - just as an example
//$mpdf->SetHeader($url . "\n\n" . 'Page {PAGENO}');  // optional - just as an example
$mpdf->CSSselectMedia='mpdf'; // assuming you used this in the document header
$mpdf->setBasePath($url);

$mpdf->Output();
} catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception name used for catch
// Process the exception, log, print etc.
echo $e->getMessage();
}