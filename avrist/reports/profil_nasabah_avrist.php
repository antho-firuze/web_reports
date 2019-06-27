<?php
try {
// require composer autoload
require __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf([
	'default_font' => 'arial',
	'setAutoTopMargin' => 'stretch',
]);

include('data_questioner.php');

// print_r($questions);
// die();

$var = (object)[
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

$footer = '<table border="0" style="border-collapse:collapse; width:100%;">
           <tr>
				<td style=" text-align: left; width:90%; height:auto; font-size:10px;">
					<strong>PT Avrist Asset Management/</strong><br></br>
					Wisma Metropolitan.lt.9 | Jl. Jenderal Sudimrna Kav 29. Jakarta 12920 | CS.AAM@Avrist.com
				</td>
				<td style="text-align: right; height:auto; font-size:10px;">
					160413-01
				</td>
           </tr>
		 </table>';
$mpdf->SetHTMLFooter($footer);

$htmlSatu = '
			<table border="0" style="border-collapse:collapse; width:100%;">
			<tr>
				<td valign="top" style="width:85%; height:auto; font-size:14px;">
					<strong>PROFIL NASABAH REKSA DANA/</strong><br></br>
					<em>MUTUAL FUND CUSTOMER PROFILE</em><br></br>
					<strong>NASABAH INDIVIDU/</strong><em> INDIVIDUAL CUSTOMER</em>
				</td>
				<td valign="top"style="height:auto;">
					<div id="img">
						<img src="C:/xampp/htdocs/web_reports/logo-avrist-asset-management.png">
					</div>
				</td>
			</tr>
			</table>
			<div id="img">
						<img src="C:/xampp/htdocs/reksadana.png">
			</div>
			<p style="font-size:12px; letter-spacing:-0.5px; text-align:justify;">
				<strong>Sesuai keputusan Bapepam No.KEP-20/PM/2004, setiap Manager Investasi atau agen penjual reksa dana wajib mensyaratkan pemodal reksa dana untuk mengisi formulir profil pemodal reksa dana.</strong>
				'.$var->breakline2.'
				<strong>Untuk diisi oleh nasabah/</strong><em> To be completed by customer</em>
			</p>
			<table border="0" style="border-collapse:collapse; width:100%;">
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong>1.</strong></td>
					<td valign="top" style="height:20px; font-size:11px;">
						<strong>Jenis reksa dana Avrist yang anda minati./</strong><br></br>
						<em>Name of the Avrist Mutual Funds that you are willing to invest in.</em>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong></strong></td>
					<td valign="top" style=" border:1; height:20px; font-size:11px;"></td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong>2.</strong></td>
					<td valign="top" style="height:20px; font-size:11px;">
						<strong>Berapa lama Anda akan melakukan investasi di Reksa Dana tersebut?/</strong><br></br>
						<em>How long will you invest in the above mentioned Mutual Funds.</em>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong></strong></td>
					<td valign="top" style=" border:0; height:20px; font-size:11px;">
						<input type="checkbox">
						<label class="container">&emsp;<strong> < 1 Tahun/</strong><em> Year</em>
							<span class="checkmark"></span>
						</label>
						&emsp;
						<input type="checkbox" checked="checked">
						<label class="container">&emsp;<strong> 1 - 3 Tahun/</strong><em> Year</em>
							<span class="checkmark"></span>
						</label>
						&emsp;
						<input type="checkbox">
						<label class="container">&emsp;<strong> 3 - 5 Tahun/</strong><em> Year</em>
							<span class="checkmark"></span>
						</label>
						&emsp;
						<input type="checkbox">
						<label class="container">&emsp;<strong> > 5 Tahun/</strong><em> Year</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong>3.</strong></td>
					<td valign="top" style="height:20px; font-size:11px;">
						<strong>Apakah sebelumnya Anda pernah berinvestasi di Reksa Dana?/</strong><br></br>
						<em>Have you ever invested in Mutual Funds before?</em>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong></strong></td>
					<td valign="top" style=" border:0; height:20px; font-size:11px;">
						<input type="checkbox" checked="checked">
						<label class="container">&emsp;<strong> Ya, pernah/</strong><em> Yes, it has</em>
							<span class="checkmark"></span>
						</label>
						&emsp;
						<input type="checkbox">
						<label class="container">&emsp;<strong> Belum pernah/</strong><em> No, it has not</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong>4.</strong></td>
					<td valign="top" style="height:20px; font-size:11px;">
						<strong>Tujuan Invetasi/</strong><em> Investment objectives</em>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong></strong></td>
					<td valign="top" style=" border:0; height:20px; font-size:11px;">
						<input type="checkbox">
						<label class="container">&emsp;<strong> < 1 Tahun/</strong><em> Year</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong></strong></td>
					<td valign="top" style=" border:0; height:20px; font-size:11px;">
						<input type="checkbox" checked="checked">
						<label class="container">&emsp;<strong> 1 - 3 Tahun/</strong><em> Year</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong></strong></td>
					<td valign="top" style=" border:0; height:20px; font-size:11px;">
						<input type="checkbox">
						<label class="container">&emsp;<strong> 3 - 5 Tahun/</strong><em> Year</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong></strong></td>
					<td valign="top" style=" border:0; height:20px; font-size:11px;">
						<input type="checkbox">
						<label class="container">&emsp;<strong> > 5 Tahun/</strong><em> Year</em>
							<span class="checkmark"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td valign="top" style="text-align:center; width:5%; height:20px;; font-size:11px;"><strong>5.</strong></td>
					<td valign="top" style="height:20px; font-size:11px;">
						<strong>Mohon beri tanda {&#10003;} untuk jawaban yang paling mendekati profil anda sebagai Nasabah Reksa Dana/</strong><br></br>
						<em> Please mark {✓} for answers that most closely match your profile as a Mutual Fund Customer</em>
					</td>
				</tr>
			</table>
			<table border="1" style="border-collapse:collapse; width:100%;">
				<tr style="background-color: #6107b5;">
					<td colspan="2" style="color:white; text-align:center; width:85%; height:20px; font-size:10px;"><strong> Pertanyaan Detail/<em>Detail Questions</em> </strong></td>
					<td style="color:white; border-left:0; text-align:center; height:20px; font-size:10px;"><strong> Nilai/<em>Score</em></strong></td>
				</tr>
				';
$mpdf->WriteHTML($htmlSatu);

foreach($questions as $q) {
		if ($q['QuestionNo'] < 5) {
		$htmlSatu = '
		//valign="bottom" 
		<tr>
			<td valign="top" style="border-top:0; border-right:0; border-bottom:0; width:5%; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
				<strong>&ensp;'.$q['QuestionNo'].'.</strong>
			</td>
			<td valign="top" style="border-top:0; border-left:0; border-right:0; border-bottom:0; width:82.5%; height:auto; font-size:11px; letter-spacing:-0.5px;">
				<strong>'.$q['QuestionText'].'</strong>
			</td>
			<td valign="top" style="border-top:0; border-bottom:0; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
				<strong> </strong>
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
						<strong> </strong>
					</td>
					<td valign="top" style="border-left:0; border-top:0; border-right:0; border-bottom:0; height:auto; font-size:11px; letter-spacing:-0.5px;">
						<p style="font-size:6px;">&ensp;</p>
						'.$var->spasi4.'
						<input type="checkbox">
						<label class="container">&emsp;<strong>'.$qopt['OptionText'].'</strong>
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
				<strong> </strong>
			</td>
			<td valign="top" style="border-right:0; border-left:0; border-bottom:0; height:auto; font-size:1px; letter-spacing:-0.5px;">
				<strong> </strong>
			</td>
			<td style="border-right:0; border-left:0; border-bottom:0; text-align:center; font-size:1px; height:auto;"> 
				<strong> </strong>
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
		<tr style="background-color: #6107b5;">
			<td colspan="2" style="color:white; text-align:center; width:85%; height:20px; font-size:10px;"><strong> Pertanyaan Detail/<em>Detail Questions</em> </strong></td>
			<td style="color:white; border-left:0; text-align:center; height:20px; font-size:10px;"><strong> Nilai/<em>Score</em></strong></td>
		</tr>
	';
$mpdf->WriteHTML($htmlSatu);

foreach($questions as $q) {
	if ($q['QuestionNo'] > 4) {
	$htmlSatu = '
	//valign="bottom" 
	<tr>
		<td valign="top" style="border-top:1; border-right:0; border-bottom:0; width:5%; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
			<strong>&ensp;'.$q['QuestionNo'].'.</strong>
		</td>
		<td valign="top" style="border-top:1; border-left:0; border-right:0; border-bottom:0; width:82.5%; height:auto; font-size:11px; letter-spacing:-0.5px;">
			<strong>'.$q['QuestionText'].'</strong>
		</td>
		<td valign="top" style="border-top:1; border-bottom:0; height:auto; font-size:11px; letter-spacing:-0.5px; text-align:center;">
			<strong> </strong>
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
					<strong> </strong>
				</td>
				<td valign="top" style="border-left:0; border-top:0; border-right:0; border-bottom:0; height:auto; font-size:11px; letter-spacing:-0.5px;">
					<p style="font-size:6px;">&ensp;</p>
					'.$var->spasi4.'
					<input type="checkbox">
					<label class="container">&emsp;<strong>'.$qopt['OptionText'].'</strong>
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
			<strong> </strong>
		</td>
		<td valign="top" style="border-right:0; border-left:0; border-bottom:0; height:auto; font-size:1px; letter-spacing:-0.5px;">
			<strong> </strong>
		</td>
		<td style="border-right:0; border-left:0; border-bottom:0; text-align:center; font-size:1px; height:auto;"> 
			<strong> </strong>
		</td>
	</tr>
	';
	$mpdf->WriteHTML($htmlSatu);		
	}
}

//another tricky row
$htmlSatu =	'
	<tr>
		<td valign="top" style="border-top:0; border-right:0; border-left:0; border-bottom:0; width:5%; height:20px; font-size:11px; letter-spacing:-0.5px; text-align:center;">
			<strong> </strong>
		</td>
		<td style="text-align:right; border-top:0; border-right:0; border-left:0; border-bottom:0; height:20px; font-size:11px; letter-spacing:-0.5px;">
			<strong>Total Nilai/</strong><em> Total Score&ensp;</em>
		</td>
		<td style="border-top:0; text-align:center; font-size:11px; height:20px;"> 
			<strong>  </strong>
		</td>
	</tr>
</table>';
$mpdf->WriteHTML($htmlSatu);


$htmlSatu =	'
	'.$var->breakline2.'
	<p style="font-size:11px;">
		<strong>Total nilai yang anda peroleh menunjukan profil berinvestasi anda/</strong><br></br>
		</em>The total value you get shows your investment profile</em>
	</p>
	<table border="0" style="border-collapse:collapse; width:100%;">
		<tr>
			<td style="text-align:left; border-top:0; border-right:0; border-left:0; border-bottom:0; width:8%; height:20px; font-size:11px; letter-spacing:-0.5px;">
				<strong>10 - 90</strong>
			</td>
			<td style="text-align:left; border-top:0; border-right:0; border-left:0; border-bottom:0; height:20px; font-size:11px; letter-spacing:-0.5px;">
				<strong>= Sangat Konservatif/</strong><em> Very Conservatife</em>
			</td>
		</tr>
		<tr>
			<td style="text-align:left; border-top:0; border-right:0; border-left:0; border-bottom:0; width:8%; height:20px; font-size:11px; letter-spacing:-0.5px;">
				<strong>100 - 150</strong>
			</td>
			<td style="text-align:left; border-top:0; border-right:0; border-left:0; border-bottom:0; height:20px; font-size:11px; letter-spacing:-0.5px;">
				<strong>= Konservatif/</strong><em> Conservatife</em>
			</td>
		</tr>
		<tr>
			<td style="text-align:left; border-top:0; border-right:0; border-left:0; border-bottom:0; width:8%; height:20px; font-size:11px; letter-spacing:-0.5px;">
				<strong>160 - 210</strong>
			</td>
			<td style="text-align:left; border-top:0; border-right:0; border-left:0; border-bottom:0; height:20px; font-size:11px; letter-spacing:-0.5px;">
				<strong>= Moderat/</strong><em> Moderat</em>
			</td>
		</tr>
		<tr>
			<td style="text-align:left; border-top:0; border-right:0; border-left:0; border-bottom:0; width:8%; height:20px; font-size:11px; letter-spacing:-0.5px;">
				<strong>220 - 280</strong>
			</td>
			<td style="text-align:left; border-top:0; border-right:0; border-left:0; border-bottom:0; height:20px; font-size:11px; letter-spacing:-0.5px;">
				<strong>= Agresif/</strong><em> Agresive</em>
			</td>
		</tr>
	</table>
	<p style="font-size:11px; text-align:justify;">
		<strong>Penyataan nasabah Reksa Dana/</strong></em> Declaration of Mutual Funds customer</em><br></br>
		<strong>Nasabah menyadari dan mengertu bahwa jabawan yng diberikan dalam Profil Nasabah Reksa Dana ini digunakan untuk analisa Manager Investasi guna membantu nasabah mengetahui tingkat risiko investasi yang dapat diterima/</strong>
		<em>The Customer realizes and understands that the employee who is given in the Customer Profile of the Investment Fund is used for the Investment Manager analysis to help customers know the level of investment risk that can be received</em>
		'.$var->breakline2.'
		<strong>Apabila nasabah telah melengkapi dengan benar Profil Nasabah Reksa Dana ini akan tetapi memilih Reksa Dana Avrist Management dengan karakter yang tidak sesuai dengan Profil Risiko nasabah yang telah diisi diatas, maka pilihan Reksa Dana tersebut adalah semata-mata berdasarkan keinginan nasabah sendiri, nasabah mengerti dan bersedia menerima risiko atas investasi yang nasabah lakukan tersebut /</strong>
		<em>If the customer has correctly completed this Mutual Fund Customer Profile but chooses Avrist Management Mutual Fund with characters that are not in accordance with the customer Risk Profile that has been filled in above, then the choice of the Investment Fund is solely based on the customers own wishes, the customer understands and is willing accept the risk of the investment that the customer does</em>		
	</p>
	<table border="1" style="border-collapse:collapse; width:100%;">
		<tr>
			<td style="border-right:0; text-align:center; width:8%; font-size:11px; border-bottom:0;"></td>
			<td colspan="2" style="border-bottom:0; border-left:0; border-right:0; text-align:left; font-size:11px; width:46%; letter-spacing:-0.5px;">
				<strong>Tandatangan Nasabah/</strong><em> Customer Signature</em>
				'.$var->breakline5.'
				_______________________________________________
			</td>
			<td colspan="2" style="border-bottom:0; border-left:0; text-align:left; font-size:11px; letter-spacing:-0.5px;">
				<strong>Tandatangan Nasabah/</strong><em> Customer Signature</em>
				'.$var->breakline5.'
				_______________________________________________
			</td>
		</tr>
		<tr>
			<td style="border-top:0; border-right:0; text-align:center; width:8%; font-size:11px;"></td>
			<td style="border-top:0; border-left:0; border-right:0; text-align:left; font-size:11px; width:12%;">
				<strong>Nama/</strong><em> Name</em><br></br>
				<strong>Jabatan/</strong><em> Title</em><br></br>
				<strong>Tanggal/</strong><em> Date</em><br></br>
			</td>
			<td style="border-left:0; border-top:0; border-right:0; text-align:left; font-size:11px;">
				<strong>: </strong><br></br>
				<strong>: </strong><br></br>
				<strong>: </strong><br></br>
			</td>
			<td style="border-top:0; border-left:0; border-right:0; text-align:left; font-size:11px; width:12%;">
				<strong>Nama/</strong><em> Name</em><br></br>
				<strong>Jabatan/</strong><em> Title</em><br></br>
				<strong>Tanggal/</strong><em> Date</em><br></br>
			</td>
			<td style="border-left:0; border-top:0; text-align:left; font-size:11px;">
				<strong>: </strong><br></br>
				<strong>: </strong><br></br>
				<strong>: </strong><br></br>
			</td>
		</tr>
	</table>
	'.$var->breakline1.'
	<table bgcolor="#6b42f4" border="0" style="border-collapse:collapse; width:100%;">
		<tr>
			<td style="text-align:justify; font-size:11px;">
				<strong> Disclaimer: Pertanyaan-pertanyaan yang tercantum dalam Profil Nasabah reksa Dana ini disediakan oleh PT Avrist Asset management semata-mata untuk membantu nasabah menemukan profil investasi dan tidak merupakan nasihat, saran, undangan, atau bujukan untuk membeli unit-unit penyertaan Reksa Dana. Nasabah selayaknya mengerti bahwa Reksa Dana memiliki risiko./</strong>
				<em>The questions listed in this Mutual Funds Customer Profile are provided by PT Avrist Asset Management solely to help customers find investment profiles and do not constitute advice, suggestions, invitations, or inducements to purchase Investment Fund participation units. The Customer should understand that the Investment Fund is at risk.</em>
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