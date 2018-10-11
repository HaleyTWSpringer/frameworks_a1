<?php

include("Observable.php");
abstract class Model implements Observable
{
    private $current_request = "";
    private $response = "";
    private $observers = [];
    protected $jsonCourses =  "../data/courses.json";
    protected $jsonCoursesI =  "../data/course_instructor.json";
    protected $jsonFacultyDept =  "../data/faculty_department.json";
    protected $jsonFacultyDeptC =  "../data/faculty_dept_courses.json";
    protected $jsonInstruct =  "../data/instructors.json";
    protected $jsonStreamInstruct =  "../data/stream_instructor.json";
    protected $jsonStreams =  "../data/streams.json";
    protected $jsonUserCourses =  "../data/user_courses.json";
    protected $jsonUsers =  "../data/users.json";

    abstract public function getAll();
    abstract public function getRecord();

    function __construct()
    {
        print "Model created...\n";

    }

    function notify()
    {
        echo "made it to the model";
        foreach ($this->observers as $obs)
        {
            $obs->update($this);
        }
    }

    function attach(Observer $obs)
    {
        $this->observers[] = $obs;
    }

    function detach(Observer $obs)
    {
        $this->observers = array_filter(
            $this->observers,
            function ($a) use ($obs) {
                return (!($a === $obs));
            }
        );
    }

  function getData()
  {
      print "Data successfully Retrieved $this->response \n";
      return $this->current_request;
  }

    function verify($data)
    {
        if (ctype_alpha($data)) {
            return true;
        } else {
            return false;
        }
    }

    function getResponse()
    {
        return $this->response;
    }
}