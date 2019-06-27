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
						<strong>Formulir Pembelian Unit Penyertaan Reksa Dana</strong>
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
                    <td style=" width:20%; height:40px; font-size:12px;">Jenis Penempatan</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="font-size:12px;"> 
                        '.$var->spasi8.'
                        <input type="checkbox">
                        <label class="container">
                            <span class="checkmark">Penempatan Awal</span>
                        </label>
                        '.$var->spasi20.'
                        <input type="checkbox">
                        <label class="container">
                           <span class="checkmark">Penempatan Dana</span>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Nama Reksa Dana</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
            </table>
            <table border="0" style="width:100%;">
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Jumlah Pembelian</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                    <td style=" width:20%; height:40px; font-size:12px;">&ensp;Mata Uang</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
            </table>
            <table border="0" style="width:100%;">
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Terbilang</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Bank Pengirim</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Bank Penerima</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
                <tr>
                    <td style=" width:20%; height:20px; font-size:6px;"> </td>
                    <td style=" width:10px; height:20px; font-size:6px;"> </td>
                    <td style=" font-size:12px;"> </td>
                </tr>
            </table>
            <table border="1" style="background-color: #221b34; border-collapse:collapse; width:100%;">
				<tr>
					<td style="color:white; font-size:14px; height:25px;">
						&ensp;REKENING INVESTOR*
					</td>
				</tr>
            </table>
            <table border="0" style="width:100%;">
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Nomor Rekening</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Nama Bank</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
            </table>
            <table border="0" style="width:100%;">
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Cabang</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                    <td style=" width:20%; height:40px; font-size:12px;">&ensp;Kota</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
            </table>
            <table border="0" style="width:100%;">
                <tr>
                    <td style=" width:20%; height:40px; font-size:12px;">Nama Pemilik Rekening</td>
                    <td style=" width:10px; height:40px; font-size:12px;">: </td>
                    <td style="border-bottom:1pt solid black; font-size:12px;"> </td>
                </tr>
            </table>
            <table border="0" style="width:100%;">
                <tr>
                    <td style=" height:30px; font-size:12px;">
                        *Diisi khusus nasabah yang melakukan penempatan awal
                    </td>
                </tr>
            </table>
            '.$var->breakline1.'
			';
$mpdf->WriteHTML($htmlSatu);

$htmlSatu ='
            <table border="1" style="background-color: #221b34; border-collapse:collapse; width:100%;">
                <tr>
                    <td style="color:white; font-size:14px; height:25px;">
                        &ensp;PERNYATAAN
                    </td>
                </tr>
            </table>
            <table border="0" style="width:100%;">
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">1.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan telah memahami bahwa Reksa Dana adalah produk pasar modal dan bukan merupakan produk Bank, tidak dijamin oleh Bank dan tidak termasuk simpanan yang merupakan objek program penjaminan Pemerintah atau penjaminan simpanan.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">2.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan telah memahami bahwa Reksa Dana bukan merupakan produk PT Raiz Invest Indonesia sebagai agen penjual efek Reksa Dana. Reksa Dana merupakan produk yang dikelola oleh Manajer Investasi.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">3.</td>
                    <td style=" font-size:12px;">
                        Saya memahami bahwa Bank Mitra hanya berfungsi sebagai gerbang pembayaran dari transaksi efek Reksa Dana yang saya lakukan di PT Raiz Invest Indonesia.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">4.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan telah memahami bahwa investasi melalui Reksa Dana mengandung risiko dan kinerja masa lalu tidak mencerminkan kinerja masa datang, sehingga PT Raiz Invest Indonesia tidak bertanggung jawab atas segala kerugian akibat pilihan investasi Saya.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">5.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan telah memahami bahwa PT Raiz Invest Indonesia tidak bertanggung jawab atas segala kerugian, kehilangan, tuntutan, maupun gugatan yang Saya alami yang mungkin timbul sebagai akibat penyampaian informasi yang tidak lengkap atau akibat tidak dilaksanakannya instruksi Saya, antara lain pemabatalan, perubahan instruksi (untuk instruksi yang belum dijalankan) yang disampaikan kepada PT Raiz Invest Indonesia kecuali jika kerugian tersebut terbukti diakibatkan oleh kesalahan dan/atau kelalaian PT Raiz Invest Indoensia.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">6.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan bahwa telah secara sadar bersedia bertanggung jawab secara penuh atas segala tindakan yang saya lakukan, dan membebaskan PT Raiz Invest Indonesia, termasuk anak perusahaan, afiliasi, pemegang saham, direksi, pejabat, karyawan sepenuhnya dari segala tuntutan, kerugian, pembayaran maupun ongkos apapun yang timbul yang diderita oleh PT Raiz Invest Indonesia baik secara langsung maupun tidak langsung, termasuk antara lain biaya penasehat hukum dan biaya perkara, yang berkaitan dengan dilaksanakannya atau tidak dilaksanakannya instruksi Saya oleh Manajer Investasi.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">7.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan bahwa telah membaca dan menyetujui seluruh isi Prospektus dan Keterangan Ringkas produk Reksa Dana yang saya pilih serta memahami risiko atas keputusan investasi yang saya buat.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">8.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan bahwa telah membaca dan menelaah, dan menyetujui seluruh syarat dan ketentuan penggunaan situs dan aplikasi PT Raiz Invest Indonesia dan seluruh pernyataan maupun peraturan sebagaimana terlampir bersama formulir ini.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">9.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan bahwa semua informasi yang telah diberikan dalam formulir ini adalah benar dan sah.
                    </td>
                </tr>
                <tr>
                    <td valign="top" style=" text-align:center; width:5%; font-size:12px;">10.</td>
                    <td style=" font-size:12px;">
                        Saya menyatakan bahwa telah memahami bahwa pembelian dianggap sah apabila seluruh dokumen diterima PT Raiz Invest Indonesia dengan lengkap dan dana sudah efektif di rekening Reksa Dana sesuai dengan aturan yang berlaku.
                    </td>
                </tr>
            </table>
';
$mpdf->WriteHTML($htmlSatu);

$htmlSatu = '
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