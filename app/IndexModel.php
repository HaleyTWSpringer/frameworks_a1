<?php

include("Model.php");

    class IndexModel extends Model
    {
        protected $indexCourses;
        protected $indexInstructors;
        protected $indexRecCourses;
        protected $indexRecInstructors;

        public function getAll()
        {
            echo "Made it to IndexModel";
            $request = "$this->jsonCourses";
            $request2 = "$this->jsonInstruct";
            if(file_exists($request) || file_exists($request2))
            {

                $courses = file_get_contents($request);
                $instructors = file_get_contents($request2);

                $json_courses = json_decode($courses);
                $json_instructors = json_decode($instructors);

                usort($json_courses, function($a, $b) { //Sort the array using a user defined function
                    return $a->course_access_count > $b->course_access_count ? -1 : 1; //Compare the course access amount to find the most popular courses
                });

                $jsonCourseIterator = new RecursiveIteratorIterator(
                    new RecursiveArrayIterator($json_courses),
                    RecursiveIteratorIterator::SELF_FIRST);

                $jsonInstructorIterator = new RecursiveIteratorIterator(
                    new RecursiveArrayIterator($json_instructors),
                    RecursiveIteratorIterator::SELF_FIRST);

                $this->indexCourses = $jsonCourseIterator;
                $this->indexInstructors = $jsonInstructorIterator;

                usort($json_courses, function($a,$b)
                {
                    return $a->course_recommendation_count > $b->course_recommendation_count ? - 1 : 1;
                });

                $jsonRecCourseIterator = new RecursiveIteratorIterator(
                    new RecursiveArrayIterator($json_courses),
                    RecursiveIteratorIterator::SELF_FIRST);


                $jsonRecInstructorIterator = new RecursiveIteratorIterator(
                    new RecursiveArrayIterator($json_instructors),
                    RecursiveIteratorIterator::SELF_FIRST);


                $this->indexRecCourses = $jsonRecCourseIterator;
                $this->indexRecInstructors = $jsonRecInstructorIterator;

                $this->notify();
            }
        }

        public function getRecord()
        {

        }

        public function getPopInstructors()
        {
            return $this-> indexInstructors;
        }

        public function getPopCourses()
        {
            return $this-> indexCourses;
        }

        public function getRecInstructors()
        {
            return $this-> indexRecInstructors;
        }

        public function getRecCourses()
        {
            return $this-> indexRecCourses;
        }
    }
