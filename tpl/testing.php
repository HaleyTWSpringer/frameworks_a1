<?php

            $jsondata = file_get_contents("../data/instructorstest.json");
            $json = json_decode($jsondata,true);
            echo $json['instructors'][0]['instructor_name'];
?>
