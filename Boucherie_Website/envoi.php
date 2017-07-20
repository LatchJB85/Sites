<?php
ini_set('display_error',1);

//Empêche de mettre des caractères spéciaux dans les textbox => code//
foreach($_POST as $key => $value){$_POST[$key] = htmlspecialchars($value);}
//récup données formulaire//
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$contact=$_POST["contact"];
$date=$_POST["date"];
$heure=$_POST["heure"];
$nombre=$_POST["nombre"];

$rotiVeau=isset($_POST["veau"])?$_POST["veau"] :"";
$rotiPorc=isset($_POST["porc"])?$_POST["porc"] :"";
$rotiPoulet=isset($_POST["poulet"])?$_POST["poulet"] :"";
$rotiDinde=isset($_POST["dinde"])? $_POST["dinde"]:"";
$rotiAgneau=isset($_POST["agneau"])? $_POST["agneau"]:"";
$rotiCerf=isset($_POST["cerf"])?$_POST["cerf"] :"";

$ragPorc=isset($_POST["ragporc"])? $_POST["ragporc"]:"";
$ragVeau=isset($_POST["ragveau"])? $_POST["ragveau"]:"";
$ragBoeuf=isset($_POST["ragboeuf"])?$_POST["ragboeuf"] :"";
$emPoulet=isset($_POST["empoulet"])?$_POST["empoulet"] :"";
$emVeau=isset($_POST["emveau"])?$_POST["emveau"] :"";
$emPorc=isset($_POST["emporc"])? $_POST["emporc"]:"";
$emBoeuf=isset($_POST["emboeuf"])? $_POST["emboeuf"]:"";
$civet=isset($_POST["civet"])? $_POST["civet"]:"";
$blanquette=isset($_POST["blanquette"])? $_POST["blanquette"]:"";
$emDinde=isset($_POST["emdinde"])? $_POST["emdinde"]:"";

if (!empty($rotiVeau) || !empty($rotiPorc) || !empty($rotiPoulet) || !empty($rotiDinde) || !empty($rotiAgneau) || !empty($rotiCerf) || !empty($ragPorc) || !empty($ragVeau) || !empty($ragBoeuf) || !empty($emPoulet) || !empty($emVeau) || !empty($emPorc) || !empty($emBoeuf) || !empty($civet) || !empty($blanquette) || !empty($emDinde))
{
	$display_fifth_line = True;
}

$sauceChamp=isset($_POST["champignons"])?$_POST["champignons"] :"";
$sauceCurry=isset($_POST["currys"])?$_POST["currys"] :"";
$sauceMadere=isset($_POST["madere"])?$_POST["madere"] :"";
$sauceCognac=isset($_POST["cognac"])?$_POST["cognac"] :"";
$sauceProvence=isset($_POST["provencale"])?$_POST["provencale"] :"";

if (!empty($sauceChamp) || !empty($sauceCurry) || !empty($sauceMadere) || !empty($sauceCognac) || !empty($sauceProvence))
{
	$display_sixth_line = True;
}


$riz=isset($_POST["riz"])? $_POST["riz"]:"";
$polente=isset($_POST["polenta"])? $_POST["polenta"]:"";
$patate=isset($_POST["patate"])?$_POST["patate"] :"";
$puree=isset($_POST["puree"])?$_POST["puree"] :"";
$patategrill=isset($_POST["patategrill"])?$_POST["patategrill"] :"";
$gratin=isset($_POST["gratin"])?$_POST["gratin"] :"";

if (!empty($riz) || !empty($polente) || !empty($patate) || !empty($puree) || !empty($patategrill) || !empty($gratin))
{
	$display_seventh_line = True;
}


$jardiniere=isset($_POST["jardin"])?$_POST["jardin"] :"";
$haricot=isset($_POST["haricots"])?$_POST["haricots"] :"";
$tomates=isset($_POST["tomates"])?$_POST["tomates"] :"";
$choux=isset($_POST["choux"])?$_POST["choux"] :"";
$papet=isset($_POST["papet"])?$_POST["papet"] :"";
$marronscar=isset($_POST["marrons"])?$_POST["marrons"] :"";
$pruneauxchut=isset($_POST["pruneaux"])?$_POST["pruneaux"] :"";
$myrtillechut=isset($_POST["myrtilles"])?$_POST["myrtilles"] :"";

if (!empty($jardiniere) || !empty($haricot) || !empty($tomates) || !empty($choux) || !empty($papet))
{
	$display_eighth_line = True;
}
if (!empty($marronscar) || !empty($pruneauxchut) || !empty($myrtillechut))
{
	$display_ninth_line = True;
}

$soupeleg=isset($_POST["soupe"])? $_POST["soupe"]:"";
$macaronisalpe=isset($_POST["macaronis"])?$_POST["macaronis"] :"";
$traversporc=isset($_POST["travers"])?$_POST["travers"] :"";
$choucroutegarnie=isset($_POST["choucroute"])?$_POST["choucroute"] :"";
$lasagne=isset($_POST["lasagnes"])?$_POST["lasagnes"] :"";
$jambonalos=isset($_POST["jambonos"])?$_POST["jambonos"] :"";

if (!empty($soupeleg) || !empty($macaronisalpe) || !empty($traversporc) || !empty($choucroutegarnie) || !empty($lasagne) || !empty($jambonalos))
{
	$display_tenth_line = True;
}

$viandesecvs=isset($_POST["viandesecigp"])?$_POST["viandesecigp"] :"";
$coppamaison=isset($_POST["coppa"])?$_POST["coppa"] :"";
$lardsecvs=isset($_POST["lardsec"])? $_POST["lardsec"]:"";
$jamboncruvs=isset($_POST["jamboncru"])? $_POST["jamboncru"]:"";
$viandeseccheval=isset($_POST["viandecheval"])?$_POST["viandecheval"] :"";
$viandeseccerf=isset($_POST["viandecerf"])?$_POST["viandecerf"] :"";
$saucisseseche=isset($_POST["saucissesec"])?$_POST["saucissesec"] :"";

if (!empty($viandesecvs) || !empty($lardsecvs) || !empty($jamboncruvs) || !empty($viandeseccheval) || !empty($viandeseccerf) || !empty($saucisseseche) || !empty($coppamaison))
{
	$display_eleventh_line = True;
}

$fromagenendaz=isset($_POST["fromnendaz"])?$_POST["fromnendaz"] :"";
$fromagebrignon=isset($_POST["frombrignon"])?$_POST["frombrignon"] :"";
$fromfumenende=isset($_POST["fromfume"])?$_POST["fromfume"] :"";
$tommenendaz=isset($_POST["tomme"])?$_POST["tomme"] :"";
$seracnendaz=isset($_POST["serac"])?$_POST["serac"] :"";
$gruyerealp=isset($_POST["gruyere"])?$_POST["gruyere"] :"";

if (!empty($fromagenendaz) || !empty($fromagebrignon) || !empty($fromfumenende) || !empty($tommenendaz) || !empty($seracnendaz) || !empty($gruyerealp))
{
	$display_twelvth_line = True;
}

$roastbeef=isset($_POST["roastbeef"])?$_POST["roastbeef"] :"";
$roastpork=isset($_POST["roastpork"])?$_POST["roastpork"] :"";
$pate=isset($_POST["pate"])?$_POST["pate"] :"";
$tartareboeuf=isset($_POST["tartareboeuf"])?$_POST["tartareboeuf"] :"";
$charcuterie=isset($_POST["charcuterie"])?$_POST["charcuterie"] :"";

if (!empty($roastbeef) || !empty($roastpork) || !empty($pate) || !empty($tartareboeuf) || !empty($charcuterie))
{
	$display_thirteenth_line = True;
}

$saumon=isset($_POST["saumon"])?$_POST["saumon"] :"";
$prawn=isset($_POST["prawn"])?$_POST["prawn"] :"";
$tartaresaumon=isset($_POST["tartaresaumon"])?$_POST["tartaresaumon"] :"";

if (!empty($saumon) || !empty($prawn) || !empty($tartaresaumon))
{
	$display_fourteenth_line = True;
}

$brochettes=isset($_POST["brochettes"])?$_POST["brochettes"] :"";
$saucissesgrill=isset($_POST["saucissesgrill"])?$_POST["saucissesgrill"] :"";
$lardailours=isset($_POST["lardailours"])?$_POST["lardailours"] :"";
$grillades=isset($_POST["grillades"])?$_POST["grillades"] :"";

if (!empty($brochettes) || !empty($saucissesgrill) || !empty($lardailours) || !empty($grillades))
{
	$display_fifteenth_line = True;
}

$lact=isset($_POST["lactose"])?$_POST["lactose"] :"";
$cocon=isset($_POST["oeufs"])?$_POST["oeufs"] :"";
$glut=isset($_POST["gluten"])?$_POST["gluten"] :"";
$celeriac=isset($_POST["celeri"])?$_POST["celeri"] :"";
$nuts=isset($_POST["noix"])?$_POST["noix"] :"";
$senf=isset($_POST["moutarde"])?$_POST["moutarde"] :"";
$crevette=isset($_POST["crustaces"])?$_POST["crustaces"] :"";
if (!empty($lact) || !empty($cocon) || !empty($glut) || !empty($celeriac)  || !empty($nuts) || !empty($senf) || !empty($crevette))
{
	$display_sixteenth_line = True;
}

$remarques=$_POST["remarques"];
if (!empty($remarques))
{
	$display_seventeenth_line = True;
}

//données envoyées//
$title = '<b>Un client vous a envoyé une demande d\'offre :</b> <br>';
$first_line = 'Nom du client : ' . $nom . ' ' . $prenom . '<br>';
$second_line = "Contact : $contact <br>";
$third_line = "Date et heure de commande : $date $heure <br>";
$fourth_line= "nombre de personnes: $nombre <br>";
// données envoyées sous condition qu'une case soit été cochée dans la rubrique du formulaire
if($display_fifth_line)
{
	$fifth_line= " Viandes:<br>$rotiPorc  $rotiVeau<br>$rotiAgneau  $rotiDinde  $rotiPoulet  $rotiCerf<br>$ragPorc  $ragVeau  $ragBoeuf  $emPoulet<br> $emDinde $emVeau $emPorc $emBoeuf $civet $blanquette <br>";
}
else {$fifth_line='';}

if($display_sixth_line)
{
	$sixth_line=' Sauces:<br>'.$sauceChamp. '  '. $sauceCurry.'  '. $sauceMadere.'  '.  $sauceCognac.'  '.$sauceProvence.'<br>';
}
else {$sixth_line='';}

if($display_seventh_line)
{
	$seventh_line="Accompagnements:<br> $gratin $patate $patategrill $puree $polente $riz<br>";
}
else {$seventh_line='';}

if($display_eighth_line)
{
	$eight_line="Légumes:<br> $jardiniere $haricot $tomates $choux $papet <br>";
}
else {$eight_line='';}

if($display_ninth_line)
{
	$ninth_line="Garnitures spéciales:<br> $myrtillechut $pruneauxchut $marronscar<br>";
}
else {$ninth_line='';}

if($display_tenth_line)
{
	$tenth_line="Autres propositions:<br> $choucroutegarnie $lasagne $jambonalos $soupeleg $macaronisalpe $traversporc<br>";
}
else {$tenth_line='';}

if($display_eleventh_line)
{
	$eleventh_line="Plats valaisans:<br> $viandesecvs $jamboncruvs $lardsecvs $saucisseseche $viandeseccerf $viandeseccheval $coppamaison<br>";
}
else {$eleventh_line='';}

if($display_twelvth_line)
{
	$twelwth_line="Fromages:<br> $gruyerealp $tommenendaz $fromfumenende $fromagebrignon $fromagenendaz $seracnendaz<br>";
}
else {$twelwth_line='';}

if($display_thirteenth_line)
{
	$thirteenth_line="Plats de viandes froides:<br> $roastbeef $roastpork $pate $tartareboeuf $charcuterie<br>";
}
else {$thirteenth_line='';}

if($display_fourteenth_line)
{
	$fourteenth_line="Poissons:<br> $prawn $saumon $tartaresaumon<br>";
}
else {$fourteenth_line='';}

if($display_fifteenth_line)
{
	$fifteenth_line="Grillades:<br> $brochettes $saucissesgrill $lardailours $grillades<br>";
}
else {$sixteenth_line='';}

if($display_sixteenth_line)
{
	$sixteenth_line="Allergies:<br> $lact $cocon $glut $celeriac $nuts $crevette $senf<br>";
}
else {$sixteenth_line='Aucune allergies<br>';}


if($display_seventeenth_line)
{
	$seventeenth_line="Questions et remarques:<br> $remarques<br>";
}
else {$seventeenth_line='Aucune questions ni remarques';}
$text = "$title $first_line $second_line $third_line $fourth_line $fifth_line $sixth_line $seventh_line $eight_line $ninth_line $tenth_line 
$eleventh_line $twelwth_line $thirteenth_line $fourteenth_line $fifteenth_line $sixteenth_line $seventeenth_line";
//print $text;

$envoi= mail('info@latch85.ch','demande d\'offre',$text,'Content-Type: text/html; charset="utf-8"');

if ($envoi) 
{
	
	 header("location: _index.php"); 
	
}


?>
