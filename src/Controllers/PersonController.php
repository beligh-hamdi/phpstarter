<?php

namespace Starter\Controllers;

use Starter\Models\Person;
use Starter\Services\PersonService;

use \Exception;

class PersonController extends BaseController
{
    public function index() {

        $person = new Person();
        $person->firstName = 'Beligh';
        $person->lastName = 'Hamdi';
        $person->age = 33;
        $personService = new PersonService();
        $data['fullName'] = $personService->getFullName();
        return $this->loadView('src/Views/person/index.php',$data);
    }

    public function about() {

        $person = new Person();
        $person->firstName = 'Beligh';
        $person->lastName = 'Hamdi';
        $person->age = 33;
        $personService = new PersonService();
        $data['fullName'] = $personService->getFullName();
        return $this->loadView('src/Views/person/about.php',$data);
    }

    public function get() {
        /*
        $date = null;
        if(isset($_GET['date']) && !empty($_GET['date']))
            $date = $_GET['date'];
        $fromDate =  new DateTime($date);
        $oneMonthLater = new DateTime($date);
        $oneMonthLater->add(new DateInterval('P1M'));
        $calender = new Calendar($fromDate, $oneMonthLater);
        $calendarView = new CalendarView($calender);
        header('Content-Type: application/json');
        echo $calendarView->render();
        exit;
        */
    }
    public function post() {

        /*
        header('Content-Type: application/json');
        try {
            if(!$_POST)
                throw new Exception('No parameter supplied!');
            $user = new Person($_POST['name'], $_POST['email']);
        } catch(Exception $e) {
            http_response_code(400);
            $data['status'] = 'Error';
            $data['msg'] = $e->getMessage();
            echo json_encode($data);
            exit;
        }
        $person = new Person($_POST['date'], $user);
        $personService = new PersonService();
        $personService->add($person);
        exit;
        */
    }
}