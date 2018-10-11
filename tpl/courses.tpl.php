<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>Quwius</title>
    <link rel="stylesheet" href="../css/styles.css" type="text/css" media="screen">
    <meta charset="utf-8">
</head>
<body>
<nav>
    <a href="#"><img src="../images/logo.png" alt="UWI online"></a>
    <ul>
        <li><a href="../controller/Controller.php?controller=Courses">Courses</a></li>
        <li><a href="../controller/Controller.php?controller=Streams">Streams</a></li>
        <li><a href="../controller/Controller.php?controller=AboutUs">About Us</a></li>
        <li><a href="../controller/Controller.php?controller=Login">Login</a></li>
        <li><a href="../controller/Controller.php?controller=SignUp">Sign Up</a></li>
    </ul>
</nav>
<main>
    <h1>Courses</h1>
      <?php

        $courses = file_get_contents("../data/courses.json");
        $instructors = file_get_contents("../data/instructors.json");
        $facultydept = file_get_contents("../data/faculty_department.json");
        $facultycourses = file_get_contents("../data/faculty_dept_courses.json");
        $lecturer = [];
        $facultyD = [];
        $facultyC = [];
        $boolcourses = false;
        $imagepath = "../images/";


        $json_courses = json_decode($courses);
        $json_instructors = json_decode($instructors);
        $json_facultydept = json_decode($facultydept);
        $json_facultycourses = json_decode($facultycourses);

      $jsonCourseIterator = new RecursiveIteratorIterator(
          new RecursiveArrayIterator($json_courses),
          RecursiveIteratorIterator::SELF_FIRST);

      $jsonInstructorIterator = new RecursiveIteratorIterator(
          new RecursiveArrayIterator($json_instructors),
          RecursiveIteratorIterator::SELF_FIRST);

      $jsonFacultyDIterator = new RecursiveIteratorIterator(
          new RecursiveArrayIterator($json_facultydept),
          RecursiveIteratorIterator::SELF_FIRST);

      $jsonFacultyCIterator = new RecursiveIteratorIterator(
          new RecursiveArrayIterator($json_facultycourses),
          RecursiveIteratorIterator::SELF_FIRST);

      $count = 0;
      foreach($jsonFacultyDIterator as $Dkey => $Dval)
      {
          if(!is_array($Dval) && !(is_object($Dval)))
          {
            $facultyD[$count] = $Dval;
            $count++;
          }
      }

      foreach($jsonFacultyCIterator as $Ckey => $Cval)
      {
      }

      $count = 0;

        for($i = 1 ; $i <= 6; $i++)
        {
            for($j = 1; $j <= 16; $j++)
            {
                if(($i == 1 && $j == 1) || ($i == 1 && $j == 2) || ($i == 1 && $j == 3) || ($i == 1 && $j == 8) || ($i == 1 && $j == 9) || ($i == 1 && $j == 10) || ($i == 1 && $j == 15))
                {

                        if(!is_array($Cval) && !(is_object($Cval)))
                        {
                            if($Ckey  == "faculty_dept_name" && $Cval == 1);
                            $facultyC[$count] = $Cval;
                            $count++;
                        }
                }
                elseif(($i == 2 && $j == 6 ) || ()

            }
      }

      $count = 1;
      foreach ($jsonInstructorIterator as $key => $val) {
          if (!is_array($val) && !(is_object($val))) {
              if ($key == "instructor_name")
              {
                  $lecturer[$count] = $val;
                  $count++;
              }

          }
      }
      $count = 0;
      foreach ($jsonCourseIterator as $key => $val) {
          if (!is_array($val) && !is_object($val)) {
              if ($key == "course_name") {
                  $courseName = $val;
              }

              if ($key == "course_id") {
                  $count = (int)$val;
              }

              if ($key == "course_image") {
                  ?>


                  <ul class="course-list">
                      <li><div>
                              <a href="<?php echo $imagepath . $val; ?>"><img src="<?php echo $imagepath . $val; ?>" alt="course image"></a>
                          </div>
                          <div>
                              <a href="#"><span class="faculty-department"><?php echo $facultyC[$count]; ?></span>
                                  <span class="course-title"><?php echo $courseName; ?></span>
                                  <span class="instructor"><?php echo $lecturer[$count]; ?></span></a>
                          </div>
                          <div>
                              <p>Get Curious.</p>
                              <a href="#" class="startnow-button startnow-btn">Start Now!</a>
                          </div>
                      </li>
                  </ul>

                  <?php
              }
          }
      }

      ?>


    <h1>Courses</h1>
    <ul class="course-list">
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/mathematics.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="../images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
        <li><div>
                <a href="#"><img src="images/innovation.jpg" alt="course image"></a>
            </div>
            <div>
                <a href="#"><span class="faculty-department">Faculty or Department</span>
                    <span class="course-title">Course Title</span>
                    <span class="instructor">Course Instructor</span></a>
            </div>
            <div>
                <p>Get Curious.</p>
                <a href="#" class="startnow-button startnow-btn">Start Now!</a>
            </div>
        </li>
    </ul>
    <footer>
        <nav>
            <ul>
                <li>&copy;2015 Quwius Inc.</li>
                <li><a href="#">Company</a></li>
                <li><a href="#">Connect</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
            </ul>
        </nav>
    </footer>
</main>
</body>
</html>