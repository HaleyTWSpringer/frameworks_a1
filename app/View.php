<?php
include("Observer.php");

abstract class View implements Observer
{

    protected $modelPopCourses;
    protected $modelPopInstructors;
    protected $data = null;
    protected $var_data;
    protected $tpl = null;
    protected $collector;
    abstract function updateState(Observable $m);
    abstract function addVar($name, $value);

    function __construct()
    {
        print "View created...\n";
    }

    function display()
    {
        for($i = 0; $i < count($this->collector); $i++)
        {
            extract($this->collector[$i]);
        }
        require($this->tpl);
    }

    function update(Observable $m)
    {
       $this->collector = $this->updateState($m);
    }


    function setTemplate($filename)
    {
    $this->tpl = $filename;
    }

}