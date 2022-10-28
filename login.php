 <?php 
// $array = array( "name" => "", "email" => "", "phone" => "", "message" => "",  "nameError" => "", "phoneError" => "", "messageError" => "","isSuccess" => false);

// $emailto = "gomegha3@gmail.com";

// if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // $array['firstname'] = verifyInput($_POST['firstname']);
    // $array['name'] = verifyInput($_POST['name']);
    // $array['email'] = verifyInput($_POST['email']);
    // $array['phone'] = verifyInput($_POST['phone']);
    // $array['message'] = verifyInput($_POST['message']);
    // $array['isSuccess'] = true;
    // $emailText = "";
    

    // if (empty($array['firstname'])) {
    //     $array['firstnameError'] = "je veux connaître ton prénom";
    //     $array['isSuccess'] = false;
    // }else{
    //     $emailText .= "firstname: {$array['firstname']}\n";
    // }

//     if (empty($array['name'])) {
//         $array['nameError'] = "Et même ton nom";
//         $array['isSuccess'] = false;
//     } else {
//         $emailText .= "name: {$array['name']}\n";
//     }

//     if(!isEmail($array['email'])){
//         $array['emailError'] = " Ce n'est pas un email valide !";
//         $array['isSuccess'] = false;
//     } else {
//         $emailText .= "email: {$array['email']}\n";
//     }

//     if(!isPhone($array['phone'])){
//         $array['phoneError'] = " Que des chiffres et des espaces ";
//         $array['isSuccess'] = false;
//     } else {
//         $emailText .= "phone: {$array['phone']}\n";
//     }

//     if (empty($array['message'])) {
//         $array['messageError'] = "Que veux tu me dire ?";
//         $array['isSuccess'] = false;
//     } else {
//         $emailText .= "message: {$array['message']}\n";
//     }

//     if($array['isSuccess']){
//         $headers = "From: {$array['name']} <{$array['email']}>\r\n\Reply-To: {$array['email']}";
//         mail($emailto, "un message de votre site",$emailText,$headers);
//     }

//     echo json_encode($array);

// }

// function verifyInput($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);

//     return $data;
// }

// function isEmail($var){
//     return filter_var($var, FILTER_VALIDATE_EMAIL);
// }

// function isPhone ($var){

    // expression régulière
//     return preg_match("/^[0-9 ]*$/", $var);
// 
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $message= $_POST['message'];

$Connection= new mysqli('localhost','root',' ','login');
if($connection->connect_error)
{
   die('connection failed : '.$connection->connect_error);
}
else
{
    $query=$connection->prepare("insert into user (name, email, phone, message)values(?,?,?,?)");
    $query->bind_param("ssis",$name,$email,$phone,$message);
    $query->execute();
    echo"Thabk you for your response";
    $query->close();
    $connection->close();
}



?>