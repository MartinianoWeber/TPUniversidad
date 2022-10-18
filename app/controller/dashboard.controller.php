<?php

require_once './app/models/dashboard.model.php';
require_once './app/views/dashboard.view.php';


class Dashboard{
    private $view;
    private $model;

  public function __construct() {
        $this->model = new dashboardModel();
        $this->view = new dashboardView();
    }

    public function showDashboard() {
        $historial = $this->model->getHistory();
        $this->view->showDashboard($historial);
    }
}

?>