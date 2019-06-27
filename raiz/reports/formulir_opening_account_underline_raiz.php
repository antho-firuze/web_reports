<?php
try {
// require composer autoload
require __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf([
	'default_font' => 'arial',
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
						<img src="C:/xampp/htdocs/web_reports/reksadana.png">
					</td>
					<td>
						<img src="C:/xampp/htdocs/web_reports/logo-raiz-invest-indonesia - 126x69.png">
					</td>
				</tr>
			</table>
			'.$var->breakline6.'
			<table border="0" style="width:100%;">
				<tr>
					<td style="text-align:center; font-size:28px;">
						<strong>FORMULIR PEMBUKAAN REKENING</strong><br></br>
						<div id="fontbaru" style="font-size:20px;">
						<em>ACCOUNT OPENING FORM</em><br></br>
						</div>
						<strong>REKENING INDIVIDU</strong><br></br>
						<div id="fontbaru" style="font-size:20px;">
						<em>INDIVIDUAL ACCOUNT</em>
						</div>
					</td>
				</tr>
			</table>
			'.$var->breakline6.'
			<table border="0" style="width:100%;">
                <tr>
                    <td style=" width:170px; height:auto; font-size:14px;">No.CIF</td>
                    <td style=" width:10px; height:auto; font-size:14px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:14px;">'.$var->cif.'</td>
                </tr>
                <tr>
                    <td style=" width:170px; height:auto; font-size:20px;">&nbsp;</td>
                    <td style=" width:10px; height:auto; font-size:20px;">&nbsp;</td>
                    <td style="font-size:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height:auto;">Kode Nasabah</td>
                    <td style=" width:10px; height:auto; font-size:14px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:14px;">'.$var->kodenasabah.'</td>
                </tr>
                <tr>
                    <td style=" width:170px; height:auto; font-size:20px;">&nbsp;</td>
                    <td style=" width:10px; height:auto; font-size:20px;">&nbsp;</td>
                    <td style="font-size:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height:auto;">Nama Nasabah</td>
                    <td style=" width:10px; height:auto; font-size:14px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:14px;">'.$var->namanasabah.'</td>
                </tr>
                <tr>
                    <td style=" width:170px; height:auto; font-size:20px;">&nbsp;</td>
                    <td style=" width:10px; height:auto; font-size:20px;">&nbsp;</td>
                    <td style="font-size:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height:auto;">Nama dan Kode Sales</td>
                    <td style=" width:10px; height:auto; font-size:14px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:14px;">'.$var->namadankodesales.'</td>
                </tr>
                <tr>
                    <td style=" width:170px; height:auto; font-size:20px;">&nbsp;</td>
                    <td style=" width:10px; height:auto; font-size:20px;">&nbsp;</td>
                    <td style="font-size:20px;">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height:auto;">Kantor Pemasaran</td>
                    <td style=" width:10px; height:auto; font-size:14px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:14px;">'.$var->kantorpemasaran.'</td>
                </tr>
			</table>
			'.$var->breakline10.'
			<p style="text-align:center"><strong>PT RAIZ INVEST INDONESIA</strong><br></br>
			The Energy Building, lantai 9, SCBD Lot 11A Jl.Jend. Sudirman kav 52-53, Jakarta 12190<br></br>
			Tel +62 21 2991 9053; Fax : +62 21 2991 9054, www.raizinvest.id</p>
		<pagebreak>';
$mpdf->WriteHTML($htmlSatu);

$htmlDua = '	
			<table border="0" style="border-collapse:collapse; width:100%;">
			<tr>
				<td valign="top" style="height:auto; font-size:14px;">
					<strong>PROFIL PEMBUKAAN REKENING/</strong><em> ACCOUNT OPENING FORM</em><br></br>
					<strong>REKENING INDIVIDU/</strong><em> INDIVIDUAL ACCOUNT</em>
				</td>
			</tr>
			<tr>
				<td valign="top" style="height:auto; font-size:14px;">&nbsp;</td>
			</tr>
			<tr>
				<td valign="top" style="height:auto; font-size:14px;">
					<strong>PT RAIZ INVEST INDONESIA/</strong><br></br>
					The Energy Building, lantai 9, SCBD Lot 11A Jl.Jend. Sudirman kav 52-53, Jakarta 12190<br></br>
					Tel +62 21 2991 9053; Fax : +62 21 2991 9054, www.raizinvest.id
				</td>
			</tr>
			<tr>
				<td valign="top" style="height:auto; height: 70px;">&nbsp;</td>
			</tr>
			<tr>
				<td valign="top" style="height:auto; font-size:14px;">
					<strong>I.'.$var->spasi4.'INFORMASI NASABAH/</strong><em> CUSTOMER INFORMATION</em>
				</td>
			</tr>
			</table>
			<table border="0" style="width:100%; margin-left:30px;">
                <tr>
                    <td style="width:255px; height:30px; font-size:11px;"><strong>1.'.$var->spasi4.'Nama lengkap sesuai Kartu identitas/</strong><br></br><em>'.$var->spasi8.'&nbsp;Name According to ID Card</em></td>
                    <td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namalengkap.'</td>
                </tr>
                <tr>
                    <td style="height:auto; font-size:11px"><strong>2.'.$var->spasi4.'Nama Depan/</strong><em> First Name</em></td>
                    <td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namadepan.'</td>
                </tr>
                <tr>
                    <td style="height:auto; font-size:11px"><strong>3.'.$var->spasi4.'Nama Keluarga/</strong><em> Family Name</em></td>
                    <td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namakeluarga.'</td>
                </tr>
                <tr>
                    <td style="height:auto; font-size:11px"><strong>4.'.$var->spasi4.'Nama Ibu Kandung sebelum menikah/</strong><em> '.$var->spasi8.'&nbsp;Mothers name before married</em></td>
                    <td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->maidenname.'</td>
                </tr>
				<tr>
					<td style="height:25px; font-size:11px"><strong>5.'.$var->spasi4.'Jenis Kelamin/</strong><em> Sex</em></td>
					<td style="font-size:11px; ">
						<input type="checkbox" checked="checked">
						<label class="container">&emsp;<strong>Pria/</strong><em> Male</em>
							<span class="checkmark"></span>
						</label>
						&emsp;
						<input type="checkbox">
						<label class="container">&emsp;<strong>Wanita/</strong><em> Female</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td style="height:25px; font-size:11px"><strong>6.'.$var->spasi4.'Kewarganegaraan/</strong><em> Nationality</em></td>
					<td style="font-size:11px; ">
						<input type="checkbox" checked="checked">
						<label class="container">&emsp;<strong>Indonesia/</strong><em> Indonesian</em>
							<span class="checkmark"></span>
						</label>
						&emsp;
						<input type="checkbox">
						<label class="container">&emsp;<strong>Asing/</strong><em> Foreigner</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td style="height:25px; font-size:11px"><strong>7.'.$var->spasi4.'Tempat & tanggal lahir/</strong><em> <br></br>'.$var->spasi8.'&nbsp;Place and Date of Birth</em></td>
					<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->tempatlahir.' '.$var->tanggallahir.' - '.$var->tanggallahirBulan.' - '.$var->tanggallahirTahun.'</td>
				</tr>
				<tr>
					<td style="height:25px; font-size:11px"><strong>8.'.$var->spasi4.'Kartu Identitas*/</strong><em> ID Card</em></td>
				</tr>
			</table>
			<table border="0" style="width:100%; margin-left:8%;">
				<tr>
					<td style="width:230px; height:25px; font-size:11px;"><strong>a. Jenis kartu identitas/</strong>'.$var->breakline1.$var->spasi4.'<em>&nbsp;Identity Card Type</em></td>
					<td style="font-size:11px; vertical-align:top;">
						<input type="checkbox" checked="checked">
						<label class="container">&emsp;<strong>KTP/</strong><em> National ID Card</em>
							<span class="checkmark"></span>
						</label>														
					</td>
					<td style="font-size:11px; vertical-align:top;">
						<input type="checkbox">
						<label class="container">&emsp;<strong>Paspor/</strong><em> Passport</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
			</table>
			
            <table border="0" style="width:100%; margin-left:8%;">
            <tr>
                <td valign="top" style="width:230px; height:25px; font-size:11px;"><strong>b. No Kartu Identitas/</strong>'.$var->breakline1.$var->spasi4.'<em>&nbsp;Identity Number</em></td>
                <td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->nokartuidentitas.'</td>
            </tr>
            <tr>
                <td style="width:230px; height:25px; font-size:11px;"><strong>c. Berlaku sampai dengan/</strong>'.$var->breakline1.$var->spasi4.'<em>&nbsp;Valid until</em></td>
                <td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->masaberlaku.'</td>
            </tr>
			</table>
			
			<table border="0" style="width:100%; margin-left:8%;">
				<tr>
					<td style="height:30px; font-size:11px; letter-spacing: -0.5px;"><strong> Bagi WNI kartu identitas utama yang digunakan hanya KTP, sedangkan bagi WNA yang digunakan adalah Paspor/</strong>'.$var->breakline1.'<em> For Indonesian citizens the main identity card used is only KTP, while for the foreigners used are passports</em></td>
				</tr>
			</table>
			
			<table border="0" style="width:100%; margin-left:30px;">
				<tr>
					<td style="width:250px; height:30px; font-size:11px;"><strong>9.'.$var->spasi4.'No NPWP/</strong><em> NPWP Number</em></td>
					<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->npwpno.'</td>
				</tr>
				<tr>
					<td style="height:25px; font-size:11px;"><strong>'.$var->spasi8.'<font size="1"> </font>Tanggal registrasi/</strong><em> Registrastion date</em></td>
					<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->npwpregisdate.'</td>
				</tr>
				<tr>
					<td style="height:25px; font-size:11px;"><strong>10.'.$var->spasi4.'Alamat sesuai kartu identitas/</strong>'.$var->breakline1.$var->spasi10.'<em> Address according to ID Card</em></td>
					<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->idcardaddress.'</td>
				</tr>
				<tr>
					<td style="height:25px; font-size:11px;"></td>
					<td style="font-size:11px;">RT '.$var->spasi4.$var->rt.$var->spasi4.' RW '.$var->spasi4.$var->rw.$var->spasi4.' Kelurahan '.$var->spasi4.$var->kelurahan.$var->spasi4.'</td>
				</tr>
				<tr>
					<td style="height:25px; font-size:11px;"></td>
					<td style="font-size:11px;"><strong>Kecamatan/ </strong>'.$var->spasi4.$var->kecamatan.$var->spasi4.' <strong>Kota/ </strong>'.$var->spasi4.$var->kota.' <br></br><em> Sub-district</em>'.$var->spasi46.'<em> City</em></td>
				</tr>
				<tr>
					<td style="height:25px; font-size:11px;"></td>
					<td style="font-size:11px;"><strong>Provinsi/ </strong>'.$var->spasi10.$var->provinsi.$var->spasi4.' <strong>Kode Pos/ </strong>'.$var->spasi4.$var->kodepos.' <br></br><em> Province</em>'.$var->spasi51.'<em> Postal Code</em></td>
				</tr>
			</table>
			'.$var->breakline6.'
			<table border="0" style="width:150px; margin-left:505px;">
				<tr>
					<td style="border:1px solid #000"><p style="font-size:11px">Paraf/Initial:'.$var->breakline4.'</p></td>
				</tr>
			</table>
			<pagebreak>';
$mpdf->WriteHTML($htmlDua);

$htmlTiga = '<br></br>
				<table border="0" style="width:100%; margin-left:30px;">
					<tr>
						<td style="width:255px; height:25px; font-size:11px;"><strong>11.'.$var->spasi4.'Alamat korespondensi/</strong>'.$var->breakline1.$var->spasi10.'<em> Correspondent Address</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->koresponaddress.'</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px;"></td>
						<td style="font-size:11px;">RT '.$var->koresponrt.$var->spasi4.' RW '.$var->spasi4.$var->koresponrw.$var->spasi4.' Kelurahan '.$var->spasi4.$var->koresponkelurahan.$var->spasi4.'</td>
                    </tr>
                    <tr>
                        <td style="height:25px; font-size:11px;"></td>
                        <td style="font-size:11px;"><strong>Kecamatan/ </strong>'.$var->spasi4.$var->koresponkecamatan.$var->spasi4.' <strong>Kota/ </strong>'.$var->spasi4.$var->koresponkota.' <br></br><em> Sub-district</em>'.$var->spasi46.'<em> City</em></td>
                    </tr>
                    <tr>
                        <td style="height:25px; font-size:11px;"></td>
                        <td style="font-size:11px;"><strong>Provinsi/ </strong>'.$var->spasi10.$var->koresponprovinsi.$var->spasi4.' <strong>Kode Pos/ </strong>'.$var->spasi4.$var->koresponkodepos.' <br></br><em> Province</em>'.$var->spasi51.'<em> Postal Code</em></td>
                    </tr>
					<tr>
						<td style="height:auto; font-size:11px"><strong>12.'.$var->spasi4.'Nomor telepon rumah/</strong><br></br><em> '.$var->spasi10.'&nbsp;Home Phone Number</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->nomorteleponrumah.'</td>
					</tr>
					<tr>
						<td style="height:auto; font-size:11px"><strong>13.'.$var->spasi4.'Nomor faksimili/</strong><em>&nbsp;Fax</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->faksimili.'</td>
					</tr>
					<tr>
						<td style="height:auto; font-size:11px"><strong>14.'.$var->spasi4.'Nomor telepon genggam/</strong><br></br><em> '.$var->spasi10.'&nbsp;Phone Number</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->nomortelepongenggam.'</td>
					</tr>
					<tr>
						<td style="height:auto; font-size:11px"><strong>15.'.$var->spasi4.'Alamat e-mail/</strong><em>&nbsp;Email address</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->alamatemail.'</td>
					</tr>
					<tr>
						<td style="height:auto; font-size:11px"><strong>16.'.$var->spasi4.'Agama/</strong><em>&nbsp;Religion</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->agama.'</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"><strong>17.'.$var->spasi4.'Pendidikan terakhir/</strong><em>&nbsp;Education</em></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> SD/</strong><em> Primary School</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> Sarjana/</strong><em> Bachelor</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> SMP/</strong><em> Junior High School</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox" checked="checked">
							<label class="container"><strong> Pascasarjana/</strong><em> Postgraduate</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> SMA/</strong><em> High School</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> Doktor/</strong><em> Doctor</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Diploma/</strong><em> Diploma</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> lainnya/</strong><em> Others</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"><strong>18.'.$var->spasi4.'Pekerjaan/</strong><em> Occupation</em></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Pelajar atau mahasiswa/</strong>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> TNI atau POLRI/</strong><br></br> '.$var->spasi9.'<em> Student '.$var->spasi49.' Army/Police</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Karyawan/</strong><em> Employee</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> Ibu Rumah Tangga/</strong><em> Housewife</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Wiraswasta/</strong><em> Entrepreneur</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> Pensiun/</strong><em> Pension</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> PNS & Pegawai BUMN/</strong>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox"  checked="checked">
							<label class="container"><strong> lainnya/</strong><em>Others</em><br></br><em>'.$var->spasi9.' Government employees </em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
				</table>
				<table border="0" style="width:100%; margin-left:8%;">
					<tr>
						<td style="width:230px; height:auto; font-size:11px;">&ensp;<strong>a. Nama Perusahaan/</strong><em>&nbsp;Company</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namaperusahaan.'</td>
					</tr>
					<tr>
						<td style="width:230px; height:auto; font-size:11px;">&ensp;<strong>b. Bidang Usaha/</strong><em>&nbsp;Business fields</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->bidangusaha.'</td>
					</tr>
					<tr>
						<td style="width:230px; height:auto; font-size:11px;">&ensp;<strong>c. Jabatan/</strong><em>&nbsp;Position</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->jabatan.'</td>
					</tr>
					<tr>
						<td style="width:230px; height:auto; font-size:11px;">&ensp;<strong>d. Alamat perusahaan/</strong>'.$var->breakline1.$var->spasi6.'<em>&nbsp;Company address</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->alamatperusahaan.'</td>
					</tr>
					<tr>
						<td style="width:230px; height:auto; font-size:11px;">&ensp;<strong>e. Nomor telp perusahaan/</strong>'.$var->breakline1.$var->spasi6.'<em>&nbsp;Company phone number</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->nomortelpperusahaan.'</td>
					</tr>
					<tr>
						<td style="width:230px; height:auto; font-size:11px;">&ensp;<strong>f. Nomor faksimili/</strong><em>&nbsp;Fax</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->nomorfaksimiliperusahaan.'</td>
					</tr>
				</table>
				
				<table border="0" style="width:100%; margin-left:30px;">
					<tr>
						//letter-spacing:-1px;
						<td style="width:255px; height:25px; font-size:11px"><strong>19.'.$var->spasi4.'Penghasilan setahun/</strong>'.$var->breakline1.$var->spasi10.'<em> Annual income</em></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox">
							<label class="container"><strong> < Rp. 50.000.000</strong>
								<span class="checkmark"></span>
							</label>
							&ensp;
							<input type="checkbox">
							<label class="container"><strong>Rp. 500.000.000 < Rp 1.000.000.000</strong>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox"  checked="checked">
							<label class="container"><strong>Rp. 50.000.000 < Rp 100.000.000</strong>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox">
							<label class="container"><strong>Rp. 1.000.000.000 < Rp 5.000.000.000</strong>
								<span class="checkmark"></span>
							</label>
						</td>							
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox">
							<label class="container"><strong>Rp. 100.000.000 < Rp 500.000.000</strong>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong>> Rp 5.000.000.000</strong>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"><strong>20.'.$var->spasi4.'Nama ahli waris/</strong><em>&nbsp;name of heir</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namaahliwarissatu.' <strong>Hubungan</strong>/<em> Relation </em>'.$var->namaahliwarissatuhubungan.'</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"><strong></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namaahliwarisdua.' <strong>Hubungan</strong>/<em> Relation </em>'.$var->namaahliwarisduahubungan.'</td>
					</tr>
				</table>
				<table border="0" style="width:100%; margin-left:30px;">
					<tr>
						<td style="width:400px; height:25px; font-size:11px"><strong>21.'.$var->spasi4.'Pihak keluarga tidak serumah yang dapat dihubungi dalam kondisi darurat/</strong>'.$var->breakline1.$var->spasi10.'<em> Non-homemakers can be contacted in an emergency</em></td>
					</tr>
				</table>
				
				<table border="0" style="width:100%; margin-left:8.5%;">
					<tr>
						<td style="width:225px; height:auto; font-size:11px"><strong>Nama Lengkap/</strong><em> Full name</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namakeluargadarurat.'</td>
					</tr>
					<tr>
						<td style="width:225px; height:auto; font-size:11px"><strong>Hubungan/</strong><em> Relation</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namakeluargahubungan.'</td>
					</tr>
					<tr>
						<td style="width:225px; height:auto; font-size:11px"><strong>Alamat/</strong><em> Address</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namakeluargaalamat.'</td>
					</tr>
					<tr>
						<td style="width:225px; height:auto; font-size:11px"><strong>No telepon/</strong><em> Phone number</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namakeluargatelepon.'</td>
					</tr>
				</table>
				
				<table border="0" style="width:150px; margin-left:505px;">
					<tr>
						<td style="border:1px solid #000"><p style="font-size:11px">Paraf/Initial:'.$var->breakline4.'</p></td>
					</tr>
				</table>
		<pagebreak>';
$mpdf->WriteHTML($htmlTiga);

$htmlEmpat = '	<table border="0" style="width:100%; margin-left:30px;">
					<tr>
						<td style="width:250px; height:25px; font-size:11px"><strong>22.'.$var->spasi4.'Sumber dana investasi/</strong><br></br><em>'.$var->spasi12.'Investment fund source</em></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Gaji/</strong><em> Salary</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> Hasil Investasi/</strong><em> Investment Results</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Hasil usaha/</strong><em> Company results</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox" checked="checked">
							<label class="container"><strong> Lainnya/</strong><em> Others</em><br></br>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Orang tua/</strong><em> Parents</em>'.$var->spasi34.'&nbsp;<u>'.$var->sumberdanainvestasilainnya.'</u>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"><strong>23. Tujuan investasi/</strong><em> investment goal</em></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Keamanan dana investasi/</strong><em> security of investment funds</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox" checked="checked">
							<label class="container"><strong> Pendapatan dan pertumbuhan dalam jangka panjang/</strong><br></br>'.$var->spasi6.'<em> Long-term income and growth</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"><strong></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Pendapatan dari keamanan dana investasi/</strong>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> Pertumbuhan/ </strong><br></br><em>'.$var->spasi8.'Income from security of investment funds'.$var->spasi25.' Growth</em> 
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
				</table>
				<table border="0" style="width:100%;">
					<tr>
						<td style="width:100%; height:auto; font-size:14px;">
							<strong>II.'.$var->spasi4.'INFORMASI KELUARGA/</strong><em> FAMILY INFORMATION</em>
						</td>
					</tr>
				</table>
				<table border="0" style="width:100%; margin-left:30px;">
					<tr>
						<td style="width:250px; height:auto; font-size:11px;"><strong>1.'.$var->spasi4.'Status perkawinan/</strong><em>&nbsp;Marital status</em></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox">
							<label class="container"><strong> Lajang/</strong><em> Single</em>
								<span class="checkmark"></span>
							</label>
							<input type="checkbox">
							<label class="container"><strong> Menikah/</strong><em> Married</em>
								<span class="checkmark"></span>
							</label>
							<input type="checkbox">
							<label class="container"><strong> Janda/Duda/</strong><em> Widow/Widower</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"><strong>2.'.$var->spasi4.'Nama pasangan/Orang Tua/</strong>'.$var->breakline1.$var->spasi7.'<em> Partner/Parents Name</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namapasanganatauorangtua.'</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"><strong>3.'.$var->spasi4.'Kartu Identitas*/</strong><em> ID Card</em></td>
					</tr>
				</table>
				
				<table border="0" style="width:100%; margin-left:8%;">
					<tr>
						<td style="width:225px; height:25px; font-size:11px;"><strong>a. Jenis kartu identitas/</strong>'.$var->breakline1.$var->spasi4.'<em>&nbsp;Identity Card Type</em></td>
						<td style="font-size:11px; vertical-align:top;">
							<input type="checkbox" checked="checked">
							<label class="container"> <strong>KTP/</strong><em> National ID Card</em>
								<span class="checkmark"></span>
							</label>														
						</td>
						<td style="font-size:11px; vertical-align:top;">
							<input type="checkbox">
							<label class="container"> <strong>Paspor /</strong><em> Passport </em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
				</table>

				<table border="0" style="width:100%; margin-left:8%;">
					<tr>
						<td style="width:225px; height:auto; font-size:11px;"><strong>b. No Kartu Identitas/</strong>'.$var->breakline1.$var->spasi4.'<em>&nbsp;Identity Number</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->nokartuidentitasinformasikeluarga.'</td>
					</tr>
					<tr>
						<td style="width:225px; height:auto; font-size:11px;"><strong>c. Berlaku sampai dengan/</strong>'.$var->breakline1.$var->spasi4.'<em>&nbsp;Valid until</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->masaberlakuidentitasinformasikeluarga.'</td>
					</tr>
				</table>
				
				<table border="0" style="width:100%; margin-left:30px;">
					<tr>
						<td style="width:250px; height:25px; font-size:11px"><strong>4.'.$var->spasi4.'Pekerjaan/</strong><em> Occupation</em></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Pelajar atau mahasiswa/</strong>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> TNI atau POLRI/</strong><br></br> '.$var->spasi13.'<em> Student '.$var->spasi49.' Army/Police</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Karyawan/</strong><em> Employee</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox" checked="checked">
							<label class="container"><strong> Ibu Rumah Tangga/</strong><em> Housewife</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> Wiraswasta/</strong><em> Entrepreneur</em>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> Pensiun/</strong><em> Pension</em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; ">
							<input type="checkbox">
							<label class="container"><strong> PNS & Pegawai BUMN/</strong>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong> lainnya/</strong><em>Others</em><br></br><em>'.$var->spasi13.' Government employees </em>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
				</table>
				<table border="0" style="width:100%; margin-left:8%;">
					<tr>
						<td style="width:225px; height:auto; font-size:11px;">&ensp;<strong>a. Nama Perusahaan/</strong><em>&nbsp;Company</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namaperusahaaninformasikeluarga.'</td>
					</tr>
					<tr>
						<td style="width:225px; height:auto; font-size:11px;">&ensp;<strong>b. Bidang Usaha/</strong><em>&nbsp;Business fields</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->bidangusahainformasikeluarga.'</td>
					</tr>
					<tr>
						<td style="width:225px; height:auto; font-size:11px;">&ensp;<strong>c. Jabatan/</strong><em>&nbsp;Position</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->jabataninformasikeluarga.'</td>
					</tr>
					<tr>
						<td style="width:225px; height:auto; font-size:11px;">&ensp;<strong>d. Alamat perusahaan/</strong>'.$var->breakline1.$var->spasi6.'<em>&nbsp;Company address</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->alamatperusahaaninformasikeluarga.'</td>
					</tr>
				</table>
				<table border="0" style="width:100%; margin-left:30px;">
					<tr>
						//letter-spacing:-1px;
						<td style="width:250px; height:25px; font-size:11px"><strong>5.'.$var->spasi4.'Penghasilan setahun/</strong>'.$var->breakline1.$var->spasi8.'<em> Annual income</em></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox">
							<label class="container"><strong> < Rp. 50.000.000</strong>
								<span class="checkmark"></span>
							</label>
							&ensp;
							<input type="checkbox">
							<label class="container"><strong>Rp. 500.000.000 < Rp 1.000.000.000</strong>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox">
							<label class="container"><strong>Rp. 50.000.000 < Rp 100.000.000</strong>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox">
							<label class="container"><strong>Rp. 1.000.000.000 < Rp 5.000.000.000</strong>
								<span class="checkmark"></span>
							</label>
						</td>							
					</tr>
					<tr>
						<td style="height:25px; font-size:11px"></td>
						<td style="font-size:11px; letter-spacing:-0.5px;">
							<input type="checkbox">
							<label class="container"><strong>Rp. 100.000.000 < Rp 500.000.000</strong>
								<span class="checkmark"></span>
							</label>
							&emsp;
							<input type="checkbox">
							<label class="container"><strong>> Rp 5.000.000.000</strong>
								<span class="checkmark"></span>
							</label>
						</td>
					</tr>
				</table>
				<table border="0" style="width:100%;">
					<tr>
						<td style="width:100%; height:auto; font-size:14px;">
							<strong>III.'.$var->spasi4.'KETERANGAN BANK/</strong><em> BANK DETAIL</em>
						</td>
					</tr>
				</table>
				<table border="0" style="width:100%; margin-left:30px;">
					<tr>
						<td style="width:250px; height:25px; font-size:11px"><strong>1.'.$var->spasi4.'Nomor rekening rupiah/</strong>'.$var->breakline1.$var->spasi8.'<em>&nbsp;Account number in rupiah</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->nomorrekeningrupiah.'</td>
					</tr>
					<tr>
						<td style="width:250px; height:25px; font-size:11px"><strong>'.$var->spasi6.' Nama Bank/</strong><em>&nbsp;Bank Name</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namabank.' <strong>Cabang</strong>/<em> Branch </em>'.$var->cabangbank.'</td>
					</tr>
					<tr>
						<td style="width:250px; height:25px; font-size:11px"><strong>'.$var->spasi6.' Jenis rekening/</strong><em>&nbsp;Account type</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; solid black; font-size:11px;">'.$var->jenisrekeningrupiah.'</td>
					</tr>
					<tr>
						<td style="width:250px; height:25px; font-size:11px"><strong>2.'.$var->spasi4.'Nomor rekening Dolar AS/</strong>'.$var->breakline1.$var->spasi8.'<em>&nbsp;Account number in US Dollar</em></td>
						<td valign="bottom" style="border-bottom:0.5pt solid black; solid black; font-size:11px;">'.$var->nomorrekeningdolar.'</td>
					</tr>
					<tr>
						<td style="width:250px; height:25px; font-size:11px"><strong>'.$var->spasi6.' Nama Bank/</strong><em>&nbsp;Bank Name</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namabank.' <strong>Cabang</strong>/<em> Branch </em>'.$var->cabangbank.'</td>
					</tr>
					<tr>
						<td style="width:250px; height:25px; font-size:11px"><strong>'.$var->spasi6.' Jenis rekening/</strong><em>&nbsp;Account type</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->jenisrekeningdolar.'</td>
					</tr>
				</table>
				<table border="0" style="width:100%; margin-left:7.25%;">
					<tr>
						<td style="height:30px; font-size:11px; letter-spacing: -0.5px;"><strong> Bagi WNI kartu identitas utama yang digunakan hanya KTP, sedangkan bagi WNA yang digunakan adalah Paspor/</strong>'.$var->breakline1.'<em> For Indonesian citizens the main identity card used is only KTP, while for the foreigners used are passports</em></td>
					</tr>
				</table>
				<table border="0" style="width:150px; margin-left:505px;">
					<tr>
						<td style="border:1px solid #000"><p style="font-size:11px">Paraf/Initial:'.$var->breakline4.'</p></td>
					</tr>
				</table>
			<pagebreak>';
$mpdf->WriteHTML($htmlEmpat);

$htmlLima = '
			<table border="0" style="width:100%;">
				<tr>
					<td style="height:auto; font-size:14px; letter-spacing:-0.5px;">
						<strong>IV.'.$var->spasi4.'KETERANGAN BANK/</strong><em> BANK DESCRIPTION</em></td>
					<td style="font-size:11px; letter-spacing:-0.5px; vertical-align:top;">&nbsp;</td>
				</tr>
				<tr>
					<td style="width:500px; height:auto; font-size:10px; letter-spacing:-0.5px;"><strong>'.$var->spasi16.'Apakah Anda atau keluarga dekat Anda sedangatau pernah memegang jabatan di pemerintahan ?/</strong><br></br><em>'.$var->spasi16.'Are you or your immediate family or have held a position in government?</em></td>
					<td style="font-size:11px; letter-spacing:-0.5px; vertical-align:top;">
						'.$var->spasi2.'
						<input type="checkbox">
						<label class="container"><strong>Ya/ </strong><em>Yes</em>
							<span class="checkmark"></span>
						</label>
						&emsp;
						<input type="checkbox" checked="checked">
						<label class="container"><strong>Tidak/ </strong><em>No</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td style="width:500px; height:auto; font-size:10px; letter-spacing:-0.5px;"><strong>'.$var->spasi16.' Jika Ya, mohon diisi pertanyaan berikut ini/ </strong><em>If Yes, please fill in the following question</em></td>
				</tr>
			</table>
			<table border="0" style="width:100%; margin-left:12px;">
					<tr>
						<td style="width:270px; height:20px; font-size:11px"><strong>'.$var->spasi8.' Nama/</strong><em>&nbsp;Name</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namaketerangantambahan.'</td>
					</tr>
					<tr>
						<td style="width:270px; height:20px; font-size:11px"><strong>'.$var->spasi8.' Nama instansi/</strong><em>&nbsp;Name of agency</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->namainstansiketerangantambahan.'</td>
					</tr>
					<tr>
						<td style="width:270px; height:20px; font-size:11px"><strong>'.$var->spasi8.' Jabatan/</strong><em>&nbsp;Occupation</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->jabatanketerangantambahan.'</td>
					</tr>
					<tr>
						<td style="width:270px; height:20px; font-size:11px"><strong>'.$var->spasi8.' Masa jabatan/</strong><em>&nbsp;Length of service</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->masajabatanketerangantambahan.'</td>
					</tr>
					<tr>
						<td style="width:270px; height:20px; font-size:11px"><strong>'.$var->spasi8.' Hubungan keluarga/</strong><em>&nbsp;Family relationship</em></td>
						<td style="border-bottom:0.5pt solid black; font-size:11px;">'.$var->hubungankeluargaketerangantambahan.'</td>
					</tr>
					<tr>
						<td style="width:270px; height:auto; font-size:4px"><strong>&nbsp;</td>
						<td style="font-size:4px;">&nbsp;</td>
					</tr>
			</table>

			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:left; width:70%; height:20px;; font-size:14px;">
						<strong>V.'.$var->spasi4.'PERNYATAAN NASABAH/</strong><em> CUSTOMER DECLARATION</em>'.$var->breakline1.'
					</td>
				</tr>
				<tr>
					<td style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:justify; height:20px; font-size:11px; letter-spacing:-0.5px;">
						<strong>Dengan menandatangani formulir ini Saya/Kami menyatakan bahwa semua data yang Saya/Kami isi adalah benar. Saya/Kami telah bertemu dengan marketing officer PT Raiz Invest Indonesia yang memiliki ijin WAPERD, dan telah membaca dan mengerti isi prospektus dan dengan ini menyatakan terikat pada persyaratan-persyaratan serta ketentuan yang tercantum dalam prospektus, Kontrak Investasi Kolektif, dan formulir ini. Informasi yang diberikan dalam Formulir Pembukaan Rekening Nasabah ini adalah benar dan lengkap. Nasabah akan segera memberitahukan PT Raiz Invest Indonesia dan setiap klaim, gugatan, ganti rugi dan tanggung jawab hukum dalam bentuk apapun yang mungkin timbul apabila terdapat kekeliruan atau kesalahan dalam penanganan rekening nasabah di PT Raiz Invest Indonesia sebagai akibat kelalaian atau kekeliruan nasabah dalam melakukan pengkinian data secara lengkap. Saya mengerti bahwa penggunaan uang tunai atau cek/giro tidak dapat dilakukan untuk investasi ini./</strong>
						<em>By signing this form I / We declare that all the data that I / We have filled in is correct. I / We have met with the marketing officer of PT Raiz Invest Indonesia who has a WAPERD license, and has read and understood the contents of the prospectus and hereby states that it is bound to the terms and conditions listed in the prospectus, Collective Investment Contract and this form. The information provided in this Customer Account Opening Form is correct and complete. The Customer will immediately notify PT Raiz Invest Indonesia and any claim, lawsuit, compensation and legal liability in any form that may arise if there is a mistake or error in handling customer accounts at PT Raiz Invest Indonesia as a result of negligence or customer error in updating data completely. I understand that the use of cash or checks / demand deposits cannot be made for this investment.</em>
						'.$var->breakline1.'
						<strong>Tanggal/</strong><em> Date </em><u>'.$var->spasi20.$var->parafpernyataannasabah.$var->spasi20.'</u>
						'.$var->breakline4.$var->spasi32.'
						<u>Nama & Tandatangan Nasabah</u>
						'.$var->breakline1.$var->spasi32.'
						<em>Name & Appoint Customer</em>
					</td>
				</tr>
				<tr>
					<td style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:justify; height:auto; font-size:9px;">&nbsp;</td>
				</tr>
			</table>

			<table border="1" style="border-collapse:collapse; width:100%;">
				<tr>
					<td colspan="2" style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:left; width:100%; height:25px; font-size:14px;">
						<strong>VI.'.$var->spasi4.'DOKUMEN YANG DIPERLUKAN/</strong><em> REQUIRED DOCUMENTS</em>'.$var->breakline1.'
					</td>
					<td style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:center; height:25px; font-size:14px;"></td>
				</tr>
				<tr>
					<td style="text-align:center; width:25%; height:25px; font-size:10px;"><strong> Ketersediaan/<em> Availability</em></strong></td>
					<td style="text-align:center; width:45%; height:25px; font-size:10px;"><strong> Nama Dokumen/<em>Name of Document</em></strong></td>
					<td style="text-align:center; height:25px; font-size:10px;"><strong> Catatan/<em>Note</em></strong></td>
				</tr>
				<tr>
					<td style="text-align:center; width:25%; height:25px; font-size:10px;">
						<input type="checkbox" checked="checked">
						<label class="container">
							<span class="checkmark"></span>
						</label>
					</td>
					<td style="width:45%; height:25px; font-size:10px;"><strong>&ensp;Fotokopi KTP/Paspor/</strong>'.$var->breakline1.$var->spasi2.'<em>Photocopy of KTP/Passport</em></td>
					<td style="height:25px; font-size:10px;"></td>
				</tr>
				<tr>
					<td style="text-align:center; width:25%; height:25px; font-size:10px;">
						<input type="checkbox">
						<label class="container">
							<span class="checkmark"></span>
						</label>
					</td>
					<td style="width:45%; height:25px; font-size:10px;"><strong>&ensp;Fotokopi NPWP/</strong>'.$var->breakline1.$var->spasi2.'<em>Photocopy of NPWP</em></td>
					<td style="height:25px; font-size:10px;"></td>
				</tr>
				<tr>
					<td style="text-align:center; width:25%; height:25px; font-size:10px;">
						<input type="checkbox">
						<label class="container">
							<span class="checkmark"></span>
						</label>
					</td>
					<td style="width:45%; height:25px; font-size:10px;"><strong>&ensp;Dokumen lainnya/</strong>'.$var->breakline1.$var->spasi2.'<em>Other document</em></td>
					<td style="height:25px; font-size:10px;"></td>
				</tr>
			</table>
			'.$var->breakline1.'

			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:left; width:70%; height:20px;; font-size:14px;">
						<strong>VII.'.$var->spasi4.'PERNYATAAN SALES/</strong><em> SALES DECLARATION</em>'.$var->breakline1.'
					</td>
				</tr>
				<tr>
					<td style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:justify; height:20px; font-size:11px; letter-spacing:-0.5px;">
						<strong>Saya telah melakukan verifikasi awal terhadap seluruh dokumen dan informasi yang diberikan oleh nasabah, termasuk informasi mengenai keberadaan beneficial owner. Saya menyadari PT Raiz Invest Indonesia berhak melakukan verifikasi lanjutan dan dokumen pendukung lainnya atas informasi yang telah diberikan oleh nasabah./ </strong>
						<em>I have made initial verification of all documents and information provided by the customer, including information regarding the existence of the beneficial owner. I am aware that PT Raiz Invest Indonesia has the right to carry out further verification and other supporting documents for information provided by the customer.</em>	
					</td>
				</tr>
				<tr>
					<td style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:justify; height:20px; font-size:8px;"></td>
				</tr>
			</table>
			<table border="1" style="border-collapse:collapse; width:100%;">
				<tr>
					<td colspan="2" style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:left; width:70%; height:20px;; font-size:14px;">
						<strong>VIII.'.$var->spasi4.'KOLOM PERSETUJUAN/ACKNOWLEDGEMENT</strong><em> APPROVAL</em>'.$var->breakline1.'
					</td>
					<td style="border-left:0; border-top:0; border-right:0; border-bottom:0; text-align:center; height:20px; font-size:14px;"></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align:center; width:70%; height:20px;; font-size:10px;"><strong> FRONT LINE </strong></td>
					<td style="text-align:center; height:20px; font-size:10px;"><strong> BACK OFFICE </strong></td>
				</tr>
				<tr>
					<td style="text-align:center; width:35%; height:20px; font-size:10px;"><strong> Sales </strong></td>
					<td style="width:35%; height:20px; font-size:10px;"><strong>&ensp;Team Leader/ Head of Sales </strong></td>
					<td style="text-align:center; height:20px; font-size:10px;"><strong> Operations Department </strong></td>
				</tr>
				<tr>
					<td valign="bottom" style="width:35%; height:80px; font-size:10px;"><strong>&ensp;Nama/ </strong><em>Name </em></td>
					<td valign="bottom" style="width:35%; height:80px; font-size:10px;"><strong>&ensp;Nama/ </strong><em>Name </td>
					<td valign="bottom" style="height:80px; font-size:10px;"><strong>&ensp;Nama/ </strong><em>Name </td>
				</tr>
				<tr>
					<td valign="bottom" style="width:35%; height:20px; font-size:10px;"><strong>&ensp;Tanggal/ </strong><em>Date </em></td>
					<td valign="bottom" style="width:35%; height:20px; font-size:10px;"><strong>&ensp;Tanggal/ </strong><em>Date </td>
					<td valign="bottom" style="height:20px; font-size:10px;"><strong>&ensp;Tanggal/ </strong><em>Date </td>
				</tr>
			</table>
			<p style="font-size:10px; text-align:justify; letter-spacing:-0.5px;">
				<strong>PT Raiz Invest Indonesia memiliki hak untuk menolak pembukaan rekening nasabah, dengan pertimbangannya sendiri,tanpa memberikan penjelasan./ </strong>
				<em>PT Raiz Invest Indonesia has the right to refuse opening customer accounts, with its own consideration, without giving an explanation</em>
			</p>
			<table border="0" style="width:150px; margin-left:540px;">
					<tr>
						<td style="border:1px solid #000"><p style="font-size:11px">Paraf/Initial:'.$var->breakline4.'</p></td>
					</tr>
				</table>
			';
$mpdf->WriteHTML($htmlLima);
			

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