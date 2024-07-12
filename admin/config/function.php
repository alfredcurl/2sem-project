<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require 'dbconn.php';

if (!function_exists('validate')) {
    function validate($conn, $string)
    {
        $validatedData = mysqli_real_escape_string($conn, $string);
        return trim($validatedData) == $string;
    }
}

if (!function_exists('redirect')) {
    function redirect($url, $status)
    {
        $_SESSION['status'] = $status;
        header('location: '.$url);
        exit(0);
    }
}

if (!function_exists('alertmessage')) {
    function alertmessage()
    {
        if(isset($_SESSION['status']))
        {
            echo '<div class = "alert alert-success">
            <h4>'.$_SESSION['status'].'</h4>
            </div>';
            unset($_SESSION['status']);
        }
    }
}

if (!function_exists('getAll')) {
    function getAll($tableName)
    {
        global $conn;

        $table = validate($conn, $tableName);

        $query = "SELECT * FROM $tableName";
        $result = mysqli_query($conn,$query);
        return $result;
    }
}

if (!function_exists('checkParamId')) {
    function checkParamId($param)
    {
        global $conn;

        if(isset($_GET[$param]) && is_numeric($_GET[$param])) {
            $paramResult = validate($conn, $_GET[$param]);
            return $_GET[$param];
        } else {
            redirect('users.php', 'Invalid parameter');
            exit(0); // Stop further execution
        }
    }
}



if (!function_exists('getById')) {
    function getById($tableName, $id)
    {
        global $conn;

        $table = validate($conn, $tableName);
        $id = validate($conn, $id);

        $query = "SELECT * FROM $tableName WHERE id = $id LIMIT 1";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $response = [
                    "status" => 200,
                    "data" => $row
                ];
                return $response;
            } else {
                $response = [
                    "status" => 500,
                    "message" => "No user found with ID: $id"
                ];
                return $response;
            }
        } else {
            $response = [
                "status" => 500,
                "message" => "Query execution failed: " . mysqli_error($conn)
            ];
            return $response;
        }
    }
}

