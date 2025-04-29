<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];

    //basic validation
    if (empty($name) || empty($email)) {
        echo "<h1>Please Provide All Fields.</h1>";
    }else {
        $sanitized_name = htmlspecialchars($name);
        $sanitized_email = htmlspecialchars($email);

        $data = "Name: " . $sanitized_name . "Email: " . $sanitized_email . "\n";

        $filename = "form_data.txt";

        // open the given file and then append 'a'. if dont exist create one
        $file = fopen($filename, 'a');

        if ($file) {
            fwrite($file, $data);
            fclose($file);

            echo "<h1>Form Submitted Successfully.</h1>";
        } else {
            echo "<h1>Something Went Wrong.</h1>";
        }
    }
}