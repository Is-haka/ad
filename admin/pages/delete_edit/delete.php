<?php
    require_once("../../../connect.php");

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        
        $event = "DELETE FROM events WHERE id = $_GET[id] ";
        $revent = mysqli_query($db, $event);
        if ($revent) {
            echo "Deleted";
            header("location: ../news_event.php");
        }
        else {
            echo "something wrong here";
        }
    }

?>