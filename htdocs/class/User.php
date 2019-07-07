<?php
class User{

    private $mysqli;

    public function __construct($mysqli){
        $this->mysqli = $mysqli; 
    }

    public function add_patient(){
        $name = $this->mysqli->escape_string($_POST['name']);
        $baby_due_date = $this->mysqli->escape_string($_POST['baby_due_date']);
        $blood_type = $this->mysqli->escape_string($_POST['blood_type']);
        $born = $this->mysqli->escape_string($_POST['born']);
        $health_status = $this->mysqli->escape_string($_POST['health_status']);

        if($this->mysqli->query("INSERT INTO patients (baby_due_date, blood_type, born, health_status, name)" 
        . "VALUES ('$baby_due_date', '$blood_type', '$born', '$health_status', '$name')")){
        }
        else{ 
        }
        header('Location: ../index');
    }
    
    public function output_data(){

    }
}

?>