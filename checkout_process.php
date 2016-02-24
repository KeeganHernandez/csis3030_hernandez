<?php
include('global.php');

$firstname = mysqli_real_escape_string($connection,$_POST["firstname"]);
$address = mysqli_real_escape_string($connection,$_POST["address"]);
$city = mysqli_real_escape_string($connection,$_POST["city"]);
$state = mysqli_real_escape_string($connection,$_POST["state"]);
$zip = mysqli_real_escape_string($connection,$_POST["zip"]);

$id = intval($_POST["id"]);

if ($firstname == "") {
	$errormessage = $errormessage . "First Name can't be empty <br />";
}

if ($address == "") {
	$errormessage = $errormessage . "Address can't be empty <br />";
}

if ($city == "") {
	$errormessage = $errormessage . "City can't be empty <br />";
}

if ($state == "") {
	$errormessage = $errormessage . "State can't be empty <br />";
}

if ($zip == "") {
	$errormessage = $errormessage . "Zip can't be empty <br />";
}

		if ($errormessage!="") {
			include ("checkout_form.php");
			die ();
		}
?>

Order Placed!<br/><br/>


<?php 

echo $firstname . "<br/>";
echo $address . "<br/>";
echo $city . "<br/>";
echo $state . "<br/>";
echo $zip . "<br/>";
?>
<?php 

                    $result = mysqli_query($connection,"select * from cart
                    join products on (cart.product_id=products.id)
                    where session_id='" . session_id() . "' order by product_id");
                    while($row = mysqli_fetch_array($result)){
	
                    echo $row['product_name'] . " ";
            
                    echo $row['quantity'] . "<br/>";
                    

include("jwu_mail.php");
	$message= "Hello, " . $firstname . "\n" .
        "your order for " . $row['product_name'] . " " . $row['quantity'] . " has been received. \n\n It's being shipped out to " . $address .
         " " . $city . ", " . $state . " " . $zip . " " . " and should arrive in the next 5 business days. \n\n Thanks for shopping with us!";
	jwu_mail("keh795@jwu.edu","Test", $message);
                    }

                    ?>