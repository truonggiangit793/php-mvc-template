<?php

class Students extends db {

    public function getStudents(){
        
        $db = new db();
        $data = $db->prepare('SELECT * FROM `student` ');
        $data->execute();
        while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            $students[] = array(
                'id'             => $OutputData['id'],
                'firstname'         => $OutputData['firstname'],
                'lastname'          => $OutputData['lastname'],
                'gender'          => $OutputData['gender']
            );
        };
        return $students;
    }

}