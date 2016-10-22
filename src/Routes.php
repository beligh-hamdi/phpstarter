<?php
/**
 * Created by PhpStorm.
 * User: influans
 * Date: 10/22/16
 * Time: 4:54 PM
 */

namespace Starter;


class Routes
{
    private $controller;
    private $action;
    private $layout = "default";

    private $baseUrl = "/phpstarter";

    function __construct() {

        $split = explode('?',$_SERVER['REQUEST_URI']);
        $path = $split[0];
        $path =str_replace($this->baseUrl,"",$path);
        $error = false;

        switch($path) {
            case '/':
                $this->setController('Person');
                $this->setAction('index');
                break;
            case '/about':
                $this->setController('Person');
                $this->setAction('about');
                break;
            case '/api/get/':
                $this->setController('Person');
                $this->setAction('get');
                $this->layout = null;
                break;
            case '/api/post':
                $this->setController('Person');
                $this->setAction('post');
                $this->layout = null;
                break;
            default:
                echo '404 Not found!';//todo: make layout for 404
                $error = true;
                break;
        }
        if(!$error)
            $this->call();
    }
    public function call() {
        $controllerName = 'Starter\Controllers\\' . $this->getController() . 'Controller';
        $controller = new $controllerName();
        $this->loadView($controller);
    }
    public function loadView($controller) {
        $content = $controller->{ $this->getAction() }();
        if(!is_null($this->layout))
            require_once("src/Views/layouts/$this->layout.php"); //todo : make views dir dynamic
    }
    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }
    /**
     * @param mixed $controller
     */
    public function setController($controller)
    {
        $this->controller = $controller;
    }
    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * @param mixed $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }
    
}