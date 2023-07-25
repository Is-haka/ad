<?php
    require_once("../../connect.php");

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        
        $event = "DELETE FROM events WHERE id = $_GET[id] ";
        $revent = mysqli_query($db, $event);
        if ($revent) {
            echo "Deleted";
            header("location: ./news_event.php");
        }
        else {
            echo "something wrong here";
        }
    }
    elseif(isset($_GET["id_news"])) {

        $news = "DELETE FROM news WHERE id = $_GET[id_news] ";
        $rnews = mysqli_query($db, $news);
        if ($rnews) {
            echo "Deleted";
            header("location: ./news_event.php");
        }
        else {
            echo "something wrong here";
        }
    }

?>