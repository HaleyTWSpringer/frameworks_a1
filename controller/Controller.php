<?php

class Controller
{
    protected $model;
    protected $view;

    function __construct(Model $m, View $v)
    {
       $this->model = $m;
       $this->view = $v;
       $this->validRequest = ['login', 'signin'];
    }

    function updateView(Model $model, View $view)
    {
        print "View retrieved";
        $this->model = $model;
        $view->updateState($model);
    }

    function handleRequest($request)
    {
        print "Model retrieved";
        return $this->request;
    }

}