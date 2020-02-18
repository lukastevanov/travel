<?php

include "db.php";
session_start();
$errormsg="";

/// KOD ZA UBACIVANJE KONTAKT PORUKE U BAZU

function insertcontact(){

if(isset($_POST['cemail'])){
	global $link;
	$cemail=$_POST['cemail'];
	$ctext=$_POST['ctext'];
	
		if($cemail == "" || $ctext == "" ){
		$errormsg="Sva polja moraju biti popunjena";
		
	}else{
	
	  $sql = "INSERT INTO contact(email,text,date)VALUES ('$cemail','$ctext',now())";

            if (mysqli_query($link, $sql)) {
               $errormsg= "Your contact message has been received.";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
            }
	}
	
	echo $errormsg;
}

}


try {
    insertcontact();
}
catch (Exception $e) {
    echo $e->getMessage();
}

/// KOD ZA REGISTRACIJU KORISNIKA

function registeruser(){

if(isset($_POST['fname'])){
	global $link;
	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$remail=$_POST['remail'];
	$rpass=$_POST['rpass'];
	
	if($fname == "" || $lname == "" || $remail == "" || $rpass == ""){
		$errormsg="Sva polja moraju biti popunjena";
		echo $errormsg;
		exit();
		
	} 
		$sql = "SELECT email FROM korisnik";
$result = mysqli_query($link,$sql);

while($row = mysqli_fetch_assoc($result))
    {
        $dbemail = $row['email'];
	
	}
		if ($dbemail == $remail){
	$errormsg="Email vec postoji u bazi.";
	
	echo $errormsg;
		exit();
	}
		
	
	
	  $sql = "INSERT INTO korisnik(ime,prezime,email,password)VALUES ('$fname','$lname','$remail',md5('$rpass'))";

            if (mysqli_query($link, $sql)) {
               $errormsg= "New user created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($link);
            }
	echo $errormsg;
	
}
}
try {
    registeruser();
}
catch (Exception $e) {
    echo $e->getMessage();
}

/// KOD ZA LOGOVANJE KORISNIKA
function loginuser(){

if(isset($_POST['lemail'])){
	global $link;
	$lemail=$_POST['lemail'];
	$lpass=$_POST['lpass'];
	
	if($lemail == "" || $lpass == ""){
		
		$errormsg="Sva polja moraju biti popunjena!";
	}else{
		
		  $query = "SELECT * FROM `korisnik` WHERE email='$lemail'
and password='".md5($lpass)."'";
 $result = mysqli_query($link,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['lemail'] = $lemail;
	 $semail=$_SESSION['lemail'];
            // Redirect user to index.php
     $errormsg="Ulogovani ste $semail";
         }else{
			 
			 $errormsg="Pogresno uneti podaci!";
		 }
	}
	echo $errormsg;
}
}
try {
    loginuser();
}
catch (Exception $e) {
    echo $e->getMessage();
}
?>