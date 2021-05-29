 <?php  
// terkoneksi ke database
$conn = mysqli_connect("localhost", "root", "", "php");
function registrasi($data){
	global $conn;
	$email = strtolower(stripslashes($data["email"]));
	$password= mysqli_real_escape_string($conn, $data["password"]);
 $password02 = mysqli_real_escape_string($conn,  $data["password02"]);

 //cek konfimasi
 if ( $password !== $password02) {
 	echo "<'script'> 
			alert(' konfirmasi password tidak sesuai!')
 			</'script'>"; 
 			return false;   
 }


}

?>