<!DOCTYPE html>

<?php

$servername = "h90hr-mysql1";
$username = "mysql58450";
$password = "proske21";

try {
	$conn = new PDO("mysql:host=$servername;dbname=mysql72865", $username, $password);
	// set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected successfully";
}
catch(PDOException $e)
{
	echo "Connection failed: " . $e->getMessage();
}




// $servername = "192.168.186.21";
// $username = "ljamke";
// $password = "ljamke123";

// try {
// 	$conn = new PDO("mysql:host=$servername;dbname=teretana", $username, $password);
// 	// set the PDO error mode to exception
// 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	//echo "Connected successfully";
// }
// catch(PDOException $e)
// {
// 	echo "Connection failed: " . $e->getMessage();
// }



$ime = $_POST['name'];
$prezime = $_POST['lastname'];
$adresa = $_POST['adress'];
$telefon = $_POST['telefon'];
$email = $_POST['mail'];


for ($i=1; $i <=11; $i++){
	
	${"odg".$i}= '';
	${"odg".$i."comment"}='';
} 

for ($i=1; $i <=11; $i++){
	if(isset($_POST[$i])) {
		${"odg".$i}= $_POST[$i];
		if(isset($_POST[$i.'_comment'] )&& $_POST[$i] == 2){
			${"odg".$i."comment"}= $_POST[$i."_comment"];
		}
	}
} 


$sql = 'select mail 
from user
where mail = (:email)';

$param = array (
		'email' => $email
	);



// $select = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($select);
// $num_rows = mysqli_num_rows($row);
$Findmail = $conn -> prepare($sql);
$Findmail -> execute($param);
$Showmail = $Findmail -> fetchAll ( PDO::FETCH_ASSOC);


// echo $Showmail;

// if ($num_rows > 0) {
//     echo "email already exists.";
// }


$k=0;

print_r($Showmail);

// echo '<br>'.$email;

// foreach ($Showmail as $s ) {
// 	if ($s==$email){
// 		$k=1;
// 	}
// }

// echo '<br>'.$k;


// if (in_array($email, $Showmail, true)) {

// if ($k==0) {

if (count($Showmail) > 0) {

?>

<html>

	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="img/perect line logo small.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<title>Upitnik</title>
	</head>
	<body>
		<div id="kontejner">
			<div id="menu">
				<img src="../img/perect line logo small.png">
				<div>
					<ul>
						<li><h3 class="mail">eMail:</h3><p>fitnescentarperfectline@gmail.com</p></li>
						<li><h3 >Adresa:</h3><p>Stjepana Ljubiše 6. Zvezdara,<br>(u blizini Vukovog spomenika i T.C. Zira.)</p></li>
						<li><h3 class="phone">Telefon:</h3><p>060 73 73 328</p></li>
					</ul>
				</div>
			</div>
			<div id="content_save">
				
				
			</div>
		</div>
	</body>
</html>










 <?php

 } else {

	$query = ' insert into user (name, lastname, adress, mail, telephone)
	values (:name, :lastname, :adress, :mail, :telephone)';

	$params = array(
			'name' => $ime,
			'lastname' => $prezime,
			'adress' => $adresa,
			'mail' => $email,
			'telephone' => $telefon
	);

	$prepare = $conn->prepare($query);
	$prepare->execute($params);

$conn = null;


?>

<html>

	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="img/perect line logo small.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="../css/index.css">
		<title>Upitnik</title>
	</head>
	<body>
		<div id="kontejner">
			<div id="menu">
				<img src="../img/perect line logo small.png">
				<div>
					<ul>
						<li><h3 class="mail">eMail:</h3><p>fitnescentarperfectline@gmail.com</p></li>
						<li><h3 >Adresa:</h3><p>Stjepana Ljubiše 6. Zvezdara,<br>(u blizini Vukovog spomenika i T.C. Zira.)</p></li>
						<li><h3 class="phone">Telefon:</h3><p>060 73 73 328</p></li>
					</ul>
				</div>
			</div>
			<div id="content_save">
				
				<p><?php echo $ime ?></p>
				<p><?php echo $prezime ?></p>
				<p><?php echo $adresa ?></p>
				<p><?php echo $telefon?></p>
				<p><?php echo $email?></p>
				<?php for ($j=1; $j<=11; $j++) { ?>

					<p><?php echo ${"odg".$j}." - ".${"odg".$j."comment"}?></p>	
				
				<?php }	?>
			</div>
		</div>
	</body>
</html>


<?php } ?>
