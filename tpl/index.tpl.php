<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>Quwius</title>
    <link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen">
    <meta charset="utf-8">
</head>
<body>
<nav>
    <a href="#"><img src="images/logo.png" alt="UWI online"></a>
    <ul>
        <li><a href="../controller/Controller.php?controller=Courses">Courses</a></li>
        <li><a href="../controller/Controller.php?controller=Streams">Streams</a></li>
        <li><a href="../controller/Controller.php?controller=AboutUs">About Us</a></li>
        <li><a href="../controller/Controller.php?controller=Login">Login</a></li>
        <li><a href="../controller/Controller.php?controller=SignUp">Sign Up</a></li>
    </ul>
</nav>
<div id="lead-in">
    <h1>Feed Your Curiosity,<br>
        Take Online Courses from UWI</h1>

    <form name="course_search" method="post" action="../controller/Controller.php?controller=">
        <div class="wide-thick-bordered" >
            <input class="c-banner-search-input" type="text" name="formSearch" value="" placeholder="Find the right course for you">
            <button class="c-banner-search-button"></button>
        </div>
    </form>
</div>
<header></header>
<main>
    <h1>Most Popular</h1>
    <div class="centered">
        <?php
        $imagepath = "../images/";
        $sectionLimit = 1;

        for($i = 0; $i < count($this->mostPopCourses); $i++)
        {
            $course_id = (int)$this->mostPopCourses[$i]["course_id"] - 1;
                ?>

        <section>
            <a href="<?php echo $imagepath . $this->mostPopCourses[$i]["course_image"]; ?>"><img
                        src="<?php echo $imagepath . $this->mostPopCourses[$i]["course_image"]; ?>"
                        alt="<?php echo $this->mostPopCourses[$i]["course_name"]; ?>" title="<?php echo $this->mostPopCourses[$i]["course_name"]; ?>">
                <span class="course-title"><?php echo $this->mostPopCourses[$i]["course_name"]; ?></span>
                <span><?php echo $this->mostPopInstructors[$course_id]["instructor_name"]; ?></span></a>
        </section>

        <?php

        $sectionLimit++;
        if ($sectionLimit == 5) {
            echo " </div>";
            echo " <div class=\"centered\">";
            $sectionLimit = 1;
        }
        ?>

    <h1>Learner Recommended</h1>
    <div class="centered">
        <?php

        }
    echo "</div>";

        ?>

    </div>
    <footer>
        <nav>
            <ul>
                <li>&copy;2018 Quwius Inc.</li>
                <li><a href="#">Company</a></li>
                <li><a href="#">Connect</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
            </ul>
        </nav>
    </footer>
</main>
</body>
</html>