<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo json_encode('Det gick bra');
} else {
    echo json_encode('Det gick inte bra');
};


?>