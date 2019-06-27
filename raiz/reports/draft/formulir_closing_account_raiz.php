<?php
try {
// require composer autoload
require __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font' => 'helvetica',
	'setAutoTopMargin' => 'stretch',
]);


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
					<td style="border-bottom:1pt solid black; text-align:center; font-size:20px; font-family: helvetica;">
						<strong>Formulir Penutupan Rekening Efek Reksa Dana</strong>
					</td>
                </tr>
                <tr>
					<td style="text-align:center; font-size:6px; font-family: helvetica;">
						&nbsp;
					</td>
				</tr>
			</table>
            <table border="1" style="background-color: #221b34; border-collapse:collapse; width:100%;">
				<tr>
					<td style="color:white; font-size:14px; height:25px;">
						&ensp;DATA NASABAH
					</td>
				</tr>
            </table>
            <table border="0" style="width:100%;">
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Nama lengkap</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Nomor Investor</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Alasan Penutupan</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
            </table>
            '.$var->breakline1.'
			';
$mpdf->WriteHTML($htmlSatu);

$htmlSatu = '
			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td style="font-size:12px; text-align:justify;">
						Dengan ini Saya mengajukan permohonan Penutupan Rekening di PT Raiz Invest Indonesia dan Saya setuju bahwa PT Raiz Invest Indonesia akan melakukan penjualan kembali sisa Unit Penyertaan Reksa Dana yang masih terdapat pada Rekening Saya dan dana hasil penjualan kembali tersebut akan ditransfer ke rekening Saya yang terdaftar di S-INVEST
					</td>
				</tr>
            </table>
            '.$var->breakline1.'
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