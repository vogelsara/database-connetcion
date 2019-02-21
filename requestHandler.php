<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        if ($_POST["collectionType"] == "students") {
            getAllStudents();
        }
    } catch (PDOException $error) {
        echo $error.getMessage();
    }
} else {
    echo json_encode('Det gick inte bra');
};

function getAllStudents() {
    echo json_encode('Det gick bra! <3 :)');
}

?>