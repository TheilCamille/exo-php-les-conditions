<?php

//exo 1 

$age = 26;

if($age > 18)
{
	echo "Vous êtes majeur.";
}
else
{
	echo "Vous êtes mineur.";
}

//exo 2

$IsEasy = True;

if($IsEasy == True)
{
	echo "</br>C'est facile!!";
}
else
{
	echo "</br>C'est difficile!!!";
}

switch($IsEasy) {
	case True:
		echo "</br>C'est facile!!";
		break;
	case False:
		echo "</br>C'est difficile!!!";
		break;	
}

//exo 3

$genre = "femme" || "homme" ;
$age = 26;

if(($genre == "homme") && ($age > 18))
{
	echo "</br>Vous êtes un homme et vous êtes majeur.";
}
elseif (($genre == "femme") && ($age > 18)) 
{
	echo "</br>Vous êtes une femme et vous êtes majeur.";
}
elseif (($genre == "homme") && ($age < 18)) 
{
	echo "</br>Vous êtes un homme et vous êtes mineur.";
}
else
{
	echo "</br>Vous êtes une femme et vous êtes mineur.";
}

//exo 4
$magnitude = 5;

switch($magnitude) {
	case 1:
		echo "</br>Micro-séisme impossible à ressentir";
		break;
	case 2:
		echo "</br>Micro-séisme impossible à ressentir mais enregistrable par les sistomètres.";
		break;
	case 3:
		echo "</br>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.";
		break;
	case 4:
		echo "</br>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.";
		break;
	case 5:
		echo "</br>Séisme capable d'engender des dégats importants sur de vieux batiments ou bien des batiments présentants des degauts de construction. Peu de dégats sur des batiements modernes.";
		break;
	case 6:
		echo "</br>Fort séisme capable d'engendrer des dectruction majeures sur une large distance (180 km) autour de l'épicentre.";
	case 7:
		echo "</br>Séisme capable de destructions majeures à modérées sur une très larges zone en fonction de la distance.";
		break;
	case 8:
		echo "</br>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.";
	case 9:
		echo "</br>Séisme capable de tout détruire sur une tès vaste zone.";
		break;
	}

//exo 5

$maVariable = "Personne";
if($maViariable != 'Homme')
	{
		echo "</br>C'est une développeuse !!!";
	}
else
	{
		echo "</br>C'est une développeur !!!";
	}

//exo 6

$monAge = 26;
if($monAge >= 18)
	{
		echo "</br>Tu es un majeur";
	}
else
	{
		echo "Tu n'es pas majeur";
	}
//exo 7

$maVariable = True;
if($maVariable == false)
	{
		echo "</br>C'est pas bon !!!";
	}
else
	{
		echo "</br>C'est ok !!";
	}

//exo 8

if($maVariable)
	{
		echo "</br>C'est ok !!";
	}
else
	{
		echo "</br>C'est pas bon !!!";
	}

		