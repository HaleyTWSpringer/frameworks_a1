<?php
include("Controller.php");
include("../app/IndexModel.php");
include("../app/IndexView.php");

class IndexController extends Controller
{
    function view()
    {
        $this->model->getall();
	    $this->view->display();

    }
}

$model = new indexModel();

$view = new indexView();

$view->settemplate("../tpl/index.tpl.php");

$controller = new indexController($model, $view);

$model->attach($view);

$model->getAll();

$controller->view(); // displays the page