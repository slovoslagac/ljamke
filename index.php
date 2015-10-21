<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="img/perect line logo small.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title>Upitnik</title>
	</head>
	<body>
		<div id="kontejner">
			<form method="post" action="db/saveUp.php">
				<div id="menu">
					<img src="img/perect line logo small.png">
					<div>
						<ul>
							<li><h3 class="mail">eMail:</h3><p>fitnescentarperfectline@gmail.com</p></li>
							<li><h3 >Adresa:</h3><p>Stjepana Ljubiše 6. Zvezdara,<br>(u blizini Vukovog spomenika i T.C. Zira.)</p></li>
							<li><h3 class="phone">Telefon:</h3><p>060 73 73 328</p></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div id="naslov">
						<div>
							<p>Ime: </p>
							<input name="name" id="name" type="text" required />
						</div>
						<div>
							<p>Prezime: </p>
							<input name="lastname" id="lastname" type="text" required />
						</div>
						<div>
							<p>Adresa: </p>
							<input name="adress" type="text" required />
						</div>
						<div>
							<p>Telefon: </p>
							<input name="telefon" type="number" required />
						</div>
						<div >
							<p>e-mail: </p>
							<input name="mail" type="email" required />
						</div>
					</div>
					<div>
						<hr>
					</div>
					<div>
					</div>
					<div class="pitanje">
							<h2>1. Koji su ciljevi vašeg vežbanja?</h2>
						<label class="odg1">
						    <input type="radio" name="1" value="1"><p>Rekreacija, da se osecam bolje</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="1" value="2"><p>Korigovanje telesne težine, zatezanje i oblikovanje tela</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="1" value="3"><p>Zdravstveni, proporuka lekara</p>
						</label>
					</div>

					<div class="pitanje">
							<h2>2. Da li ste se bavili sportom pre dolaska kod nas?</h2>
						<label class="odg">
						    <input type="radio" name="2" value="1"><p>Ne</p>
						</label>
						<label class="odg">
						    <input type="radio" name="2" value="2"><p>Da (napišite kojim sportom)</p><input type="text" name="2_comment" />
						</label>
					</div>

					<div class="pitanje">
							<h2>3. Koliko često vežbate?</h2>
						<label class="odg1">
						    <input type="radio" name="3" value="1"><p>Svakodnevno</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="3" value="2"><p>Nekoliko puta nedeljno</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="3" value="3"><p>Nekoliko puta mesečno</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="3" value="4"><p>Ne vežbam</p>
						</label>
					</div>

					<div class="pitanje">
							<h2>4. Kojom ocenom bi opisali stepen svoje fizičke spreme?</h2>
						<label class="odg2">
						    <p>Ocene od 1 do 5</p><input type="number" name="4" min="1" max="5"/>
						</label>
					</div>

					<div class="pitanje">
							<h2>5. Da li ste imali neke teže povrede / prelome?</h2>
						<label class="odg">
						    <input type="radio" name="5" value="1"><p>Ne</p>
						</label>
						<label class="odg">
						    <input type="radio" name="5" value="2"><p>Da (napišite koja povreda/prelom je u pitanju)</p><input type="text" name="5_comment" />
						</label>
					</div>
					

					<div class="pitanje">
						<tr class="naslov">
							<h2>6. Da li bolujete od neke hronične bolesti (npr: bolesti srca, krvnih sudova, povišenog sećera u krvi, astme...)?</h2>
						</tr>
						<label class="odg">
						    <input type="radio" name="6" value="1"><p>Ne</p>
						</label>
						<label class="odg">
						    <input type="radio" name="6" value="2"><p>Da</p><input type="text" name="6_comment" >
						</label>
						<label class="odg">
						    <input type="radio" name="6" value="3"><p>Ne znam</p>
						</label>
					</div>

					<div class="pitanje">
							<h2>7. Kakav vam je krvni pritisak?</h2>
						<label class="odg1">
						    <input type="radio" name="7" value="1"><p>U granicama urednog</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="7" value="2"><p>Snižen ( < 90 / 60 mmHg )</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="7" value="3"><p>Povišen ( > 140 / 90 mmHg )</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="7" value="4"><p>Ne znam</p>
						</label>
					</div>

					<div class="pitanje">
							<h2>8. Da li ste imate probleme sa zglobovima?</h2>
						<label class="odg">
						    <input type="radio" name="8" value="1"><p>Ne</p>
						</label>
						<label class="odg">
						    <input type="radio" name="8" value="2"><p>Da (napišite koji je problem u pitanju)</p><input type="text" name="8_comment" />
						</label>
					</div>

					<div class="pitanje">
							<h2>9. Da li pijete neke lekove?</h2>
						<label class="odg">
						    <input type="radio" name="9" value="1"><p>Ne</p>
						</label>
						<label class="odg">
						    <input type="radio" name="9" value="2"><p>Da (napišite koje)</p><input type="text" name="9_comment" />
						</label>
					</div>


					<div class="pitanje">
							<h2>10. Da li ste alergični na određene vreste lekova, hrane ili nešto slično?</h2>
						<label class="odg">
						    <input type="radio" name="10" value="1"><p>Ne</p>
						</label>
						<label class="odg">
						    <input type="radio" name="10" value="2"><p>Da</p><input type="text" name="10_comment" />
						</label>
						<label class="odg">
						    <input type="radio" name="10" value="3"><p>Ne znam</p>
						</label>
					</div>

					<div class="pitanje">
							<h2>11. Kako ste saznali za nas?</h2>
						<label class="odg1">
						    <input type="radio" name="11" value="1"><p>Preporuka</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="11" value="2"><p>Sajt</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="11" value="3"><p>Plakat</p>
						</label>
						<label class="odg1">
						    <input type="radio" name="11" value="4"><p>Flajer</p>
						</label>
					</div>


					<div id="save">
						<input type="submit" value="Sačuvaj" accesskey="x" />
					</div>
				</div>

			</form>
			<div id="footer">
				
			</div>
		</div>

	</body>

</html>
