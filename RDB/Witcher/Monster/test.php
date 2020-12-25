<!DOCTYPE>
<html>
	<head>
	<meta charset="utf-8" />
		<title>Bestiarium</title>
		<link rel="stylesheet" type="text/css" href="fell.css">
	</head>
<body>
<?php

$servername = "localhost";
$user = "root";
$pw = "";
$daten = "witcher";

$con = new mysqli($servername, $user, $pw, $daten);

	if($con->connect_error)
	{
		die("Fehler");
	}
?> 
	<div id="website">
		<div id="header">
			<h3><a href="http://localhost/Witcher/index.html">Home</a></h3>
			<h1><strong>Bestiarium</strong></h1>			
		</div>
		<div id="main">
			<div id="menu">
							<!-- 	BESTIEN   -->
				<li><a href="#"><strong>Bestien</strong><span class="sub-arrow"></span></a>
					<ul>
						<font font size="2px"
						<li><a href="test.php"><em>Bär</a></li>
						<li><a href="#">Hund</a></li>
						<li><a href="#">Panther</a></li>
						<li><a href="#">Wildschwein</a></li>
						<li><a href="#">Wolf</em></a></li>
						</font>
					</ul>
				</li>
							<!-- 	BESTIEN   -->
				<li><a href="#"><strong>Dracanoiden</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Basislisk</a></li>
						<li><a href="#">Der Drache von Fyresdal</a></li>
						<li><a href="#">Gabeschwanz</a></li>
						<li><a href="#">Gorgo</a></li>
						<li><a href="#">Kreischling</a></li>
						<li><a href="#">Köingswyvern</a></li>
						<li><a href="#">Mutterschleimling</a></li>
						<li><a href="#">Schleimling</a></li>
						<li><a href="#">Silberbasislisk</a></li>
						<li><a href="#">Wyvern</em></a></li>
					</font>
					</ul>
				</li>		
								<!-- 	GEISTER   -->
				<li><a href="#"><strong>Geister</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Bargest</a></li>
						<li><a href="#">Büßer</a></li>
						<li><a href="#">Geist von Daphne</a></li>
						<li><a href="#">Die Erscheinung aus dem Gemälde</a></li>
						<li><a href="#">Die weiße Dame</a></li>
						<li><a href="#">Erscheinung</a></li>
						<li><a href="#">Hannah aus dem Wald</a></li>
						<li><a href="#">Hims</a></li>
						<li><a href="#">Mittagserscheinung</a></li>
						<li><a href="#">Nachtscheinung</a></li>
						<li><a href="#">Nachtmahr</a></li>
						<li><a href="#">Pestmaiden</a></li>
						<li><a href="#">Teufel beim Brunnen</a></li>
						<li><a href="#">Todesfee</a></li>
						<li><a href="#">Ätherische Erscheinung</em></a></li>
					</font>	
					</ul>
				</li>
								<!-- 	HYBRIDE   -->
				<li><a href="#"><strong>Hybride</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Erynien</a></li>
						<li><a href="#">Greif</a></li>
						<li><a href="#">Harpyie</a></li>
						<li><a href="#">Melusine</a></li>
						<li><a href="#">Opinicus</a></li>
						<li><a href="#">Salma</a></li>
						<li><a href="#">Sirenen</a></li>
						<li><a href="#">Sukkube</em></a></li>
					</font>	
					</ul>
				</li>
								<!-- 	INSEKTOIDE   -->
				<li><a href="#"><strong>Insektoiden</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Arachnomorph</a></li>
						<li><a href="#">Endriagenarbeiter</a></li>
						<li><a href="#">Endriagendrohne</a></li>
						<li><a href="#">Endriagenkrieger</a></li>
						<li><a href="#">Gepanzerte Krabbenspinne</a></li>
						<li><a href="#">Giftige Krabbenspinne</a></li>
						<li><a href="#">Harrisi</a></li>
						<li><a href="#">Kikimora-Arbeiter</a></li>
						<li><a href="#">Kikimora-Krieger</a></li>
						<li><a href="#">Krabbspinne</a></li>
						<li><a href="#">Riesentausendfüßler</a></li>
						<li><a href="#">Weiße Witwe</em></a></li>
					</font>	
					</ul>
				</li>
								<!-- 	KONSTRUKTE   -->
				<li><a href="#"><strong>Konstrukte</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Djinn</a></li>
						<li><a href="#">Eisgenien</a></li>
						<li><a href="#">Erdgenien</a></li>
						<li><a href="#">Feuergenien</a></li>
						<li><a href="#">Gargoyl</a></li>
						<li><a href="#">Golem</a></li>
						<li><a href="#">Hund der Wilden Jagd</a></li>
						<li><a href="#">Moreaus Golem</a></li>
						<li><a href="#">Tharazane</em></a></li>
					</font>	
					</ul>
				</li>
								<!-- 	NEKROPHAGEN   -->
				<li><a href="#"><strong>Nekrophagen</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Abaya</a></li>
						<li><a href="#">Alghul</a></li>
						<li><a href="#">Ertrunkener</a></li>
						<li><a href="#">Fleckenwicht</a></li>
						<li><a href="#">Ghul</a></li>
						<li><a href="#">Gruftweib</a></li>
						<li><a href="#">Ignis Fatuus</a></li>
						<li><a href="#">Moderhaut</a></li>
						<li><a href="#">Nebling</a></li>
						<li><a href="#">Platzer</a></li>
						<li><a href="#">Trauerschnepfe</a></li>
						<li><a href="#">Wasserweib</a></li>
						<li><a href="#">Wicht</em></a></li>
					</font>
					</ul>
				</li>
								<!-- 	OGROIDE   -->
				<li><a href="#"><strong>Ogroide</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Eisriese</a></li>
						<li><a href="#">Eistroll</a></li>
						<li><a href="#">Felstroll</a></li>
						<li><a href="#">Golyat</a></li>
						<li><a href="#">Hagubman</a></li>
						<li><a href="#">Nekkar</a></li>
						<li><a href="#">Wumm-a-Wumm</a></li>
						<li><a href="#">Zyklop</em></a></li>
					</font>
					</ul>
				</li>
								<!-- 	RELIKTE   -->
				<li><a href="#"><strong>Relikte</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Bies</a></li>
						<li><a href="#">Brüllaffe</a></li>
						<li><a href="#">Das Monster von Tufo</a></li>
						<li><a href="#">Der Pedel</a></li>
						<li><a href="#">Doppler</a></li>
						<li><a href="#">Geist des Waldes</a></li>
						<li><a href="#">Glumaar</a></li>
						<li><a href="#">Grottor</a></li>
						<li><a href="#">Göttling</a></li>
						<li><a href="#">Kernun</a></li>
						<li><a href="#">Kobold</a></li>
						<li><a href="#">Morvudd</a></li>
						<li><a href="#">Muhmen</a></li>
						<li><a href="#">Silvane</a></li>
						<li><a href="#">Tschort</a></li>
						<li><a href="#">Waldschrat</a></li>
						<li><a href="#">Waldteufel</em></a></li>
					</font>
					</ul>	
				</li>
								<!-- 	VAMPIRE   -->
				<li><a href="#"><strong>Vampire</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Alpe</a></li>
						<li><a href="#">Alpha-Garkin</a></li>
						<li><a href="#">Bruxae</a></li>
						<li><a href="#">Dettlaff</a></li>
						<li><a href="#">Ekimmen</a></li>
						<li><a href="#">Flatterer</a></li>
						<li><a href="#">Gael</a></li>
						<li><a href="#">Garkins</a></li>
						<li><a href="#">Höhere Vampir</a></li>
						<li><a href="#">Katakane</a></li>
						<li><a href="#">Protoflatterer</a></li>
						<li><a href="#">Sarasti</a></li>
						<li><a href="#">Unsichtbarer</em></a></li>
					</font>	
					</ul>
				</li>
								<!-- 	VERFLUCHTE   -->
				<li><a href="#"><strong>Verfluchte</strong></a>
					<ul>
					<font font size="2px">
						<li><a href="#"><em>Archespore</a></li>
						<li><a href="#">Berserker</a></li>
						<li><a href="#">Krötenprinz</a></li>
						<li><a href="#">Fehlgeborener</a></li>
						<li><a href="#">Ufhedinn</a></li>
						<li><a href="#">Werwolf</em></a></li>
					</font>	
					</ul>	
				</li>

			</div>
			<div id="inhalt"> 
				<div id="links">
				 <li><h href="#"><font color="red" font size=5px ><strong>VARIATION:</strong></font></h>
					<font color="#FFF" font size=4px >
					<ul>
						<li><b href="#"><em></b></li>
						<li><b href="#"></b></li>
						<li><b href="#"></b></li>		
						<li><b href="#"></b></li>
						<li><b href="#"></b></em></li>							
					</ul>
				</li>	
				<li><h href="#"><font color="red" font size=5px ><strong>BEWEGUNG:</strong></font></h>
					<font color="#FFF" font size=4px >
					<ul>
						<li><b href="#"><em></b></li>
						<li><b href="#"></b></li>
						<li><b href="#"></b></em></li>							
					</ul>
				</li>	
				<li><h href="#"><font color="red" font size=5px ><strong>REGOINEN:</strong></font></h>
					<font color="#FFF" font size=4px >
					<ul>
						<li><b href="#"><em></b></em></li>						
					</ul>
				</li>	
				<li><h href="#"><font color="red" font size=5px ><strong>VORKOMMEN:</strong></font></h>
					<font color="#FFF" font size=4px >
					<ul>
						<li><b href="#"><em></b></em></li>						
					</ul>
				</li>	
				</div>	
				</font>
			</div>	
							 
			<div id="map">
				<!-- 400x 400 PIXEL BILD -->
				<b href="#"><img src= height = "400"; width = "400";/></b>
				<div id="rechts">
				<li><font color="darkblue" font size=5px ><strong>SCHWÄCHEN:</strong></font>
					<font color="#FFF" font size=4px >
					<ul>
						<li><g href="#"><em>Bomben:</em> </g></li>
						<li><g href="#"><em>Öl:</em></g></li>
						<li><g href="#"><em>Tränke:</em></g></li>
						<li><g href="#"><em>Zeichen:</em></g></li>						
					</ul>
				</li></font>
				<li><font color="darkblue" font size=5px ><strong>RESISTENZEN:</strong></font>
					<font color="#FFF" font size=4px >
					<ul>
						<li><g href="#"></g></li>
						<li><g href="#"></g></li>
						<li><g href="#"></g></li>						
					</ul>
				</li></font>
								
				</div>
				<div id="unten">
				<li><font color="darkblue" font size=5px ><p align="center"><strong>NAME:</strong></font>
					<font color="#FFF" font size=4px >
					<ul>
						<li><p align="center"></li>						
					</ul>
				</li></font>
				<li><font color="darkblue" font size=5px ><p align="center"><strong>KLASSE:</strong></font>
					<font color="#FFF" font size=4px >
					<ul>
						<li><p align="center"></li>						
					</ul>
				</li></font>
				</div>
			</div>
		</div>		
	</div>
</body>
</html>