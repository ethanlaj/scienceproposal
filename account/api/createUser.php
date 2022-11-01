<?PHP
ini_set("display_errors", 1);
error_reporting(E_ALL);

//if (isset($_POST["user_id"])) {
require_once("../../database/accountFunctions.php");

//$user_id = $_POST["user_id"];
$user_id = 7;
$firstName = array_key_exists("firstName", $_POST)
    ? $_POST["firstName"]
    : null;
$lastName = array_key_exists("lastName", $_POST)
    ? $_POST["lastName"]
    : null;
$email = array_key_exists("email", $_POST)
    ? $_POST["email"]
    : null;
$username = array_key_exists("username", $_POST)
    ? $_POST["username"]
    : null;
$pwd = array_key_exists("pwd", $_POST)
    ? $_POST["pwd"]
    : null;
$phoneNumber = array_key_exists("phoneNumber", $_POST)
    ? $_POST["phoneNumber"]
    : null;
$birthday = array_key_exists("birthday", $_POST)
    ? $_POST["birthday"]
    : null;


try {
    createUser($user_id, $firstName, $lastName, $email, $userName, $pwd, $phoneNumber, $birthday);
} catch (Exception $e) {
    echo $e;
}
