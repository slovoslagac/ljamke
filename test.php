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
					<p>Upitnik</p>
				</div>
				<div id="content">
					<div class="pitanje">
						<tr class="naslov">
							<p>1. Da li ste alergični na određene vreste lekova, hrane ili nešto slično?</p>
						</tr>
						<label class="odg">
						    <input type="radio" name="alergija" id="id_cfimb_5_1" value="1"><p>Ne</p>
						</label>
						<label class="odg">
						    <input type="radio" name="alergija" id="id_cfimb_5_2" value="2"><p>Da</p><input type="text" name="alergija_comment" >
						</label>
						<label class="odg">
						    <input type="radio" name="alergija" id="id_cfimb_5_3" value="3"><p>Ne znam</p>
						</label>
					</div>
				</div>

			</form>
			<div id="footer">
				
			</div>
		</div>

	</body>

</html>