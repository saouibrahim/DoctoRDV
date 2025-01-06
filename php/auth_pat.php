<?php
include 'request.php';

//This function is used to authenticate the patient

function authenticatePatient($email, $password) {
    //this is the request that is used to check if the patient exists in the database
    $request = "SELECT * FROM patient WHERE email = '$email' AND password = '$password'";
    //this is the result of the request
    $result = executeRequest($request);
    //if the result is empty then the patient does not exist
    if (empty($result)) {
        return ["error" => "Patient not found"];
    }
    //if the patient exists then return the patient
    return $result[0];
}

//when the button log in is clicked
//the function is used to authenticate the patient
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $patient = authenticatePatient($email, $password);

    if (isset($patient['error'])) {
        echo $patient['error'];
    } else {
        session_start();
        $_SESSION['patient'] = $patient;
        header('Location: patient.php');
    }
}


?>