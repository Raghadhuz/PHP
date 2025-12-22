<?php

/* 
   - id is protected because child classes need it
   - salary is private to prevent direct access or modification
*/
abstract class Staff {

    public $name;
    protected $id;
    private $salary;

    public function __construct($name, $id, $salary) {
        $this->name = $name;
        $this->id = $id;
        $this->salary = $salary;
    }

    public function __destruct() {
        echo "Staff member {$this->name} record closed.<br>";
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function getTaxedSalary() {
        return $this->salary - ($this->salary * 0.10);
    }

    abstract public function performDuty();
}

interface SurgeonInterface {
    public function performSurgery();
}

interface EmergencyInterface {
    public function handleEmergency();
}

class Doctor extends Staff implements SurgeonInterface {

    public $specialty;

    public function __construct($name, $id, $salary, $specialty) {
        parent::__construct($name, $id, $salary);
        $this->specialty = $specialty;
    }

    public function performDuty() {
        // Accessing protected id (allowed)
        echo "Doctor {$this->name} (ID: {$this->id}) is treating patients.<br>";
    }

    public function performSurgery() {
        echo "Doctor {$this->name} is performing surgery in {$this->specialty}.<br>";
    }
}

class Nurse extends Staff implements EmergencyInterface {

    public $shiftTime;

    public function __construct($name, $id, $salary, $shiftTime) {
        parent::__construct($name, $id, $salary);
        $this->shiftTime = $shiftTime;
    }

    public function performDuty() {
        echo "Nurse {$this->name} is working on {$this->shiftTime} shift.<br>";
    }

    public function handleEmergency() {
        echo "Nurse {$this->name} is handling an emergency.<br>";
    }
}

class HospitalManager {

    public function checkWork(Staff $staffMember) {
        $staffMember->performDuty();
    }
}

// Create staff members
$doctor1 = new Doctor("Ahmad", 101, 2000, "Cardiology");
$doctor2 = new Doctor("Lina", 102, 2200, "Surgery");

$nurse1 = new Nurse("Sara", 201, 1200, "Morning");
$nurse2 = new Nurse("Omar", 202, 1300, "Night");

$doctor1->setSalary(2500);
echo "Doctor Ahmad Salary After Tax: " . $doctor1->getTaxedSalary() . "<br><br>";

$manager = new HospitalManager();

$staffMembers = [$doctor1, $doctor2, $nurse1, $nurse2];

foreach ($staffMembers as $staff) {
    $manager->checkWork($staff);
}

?>
