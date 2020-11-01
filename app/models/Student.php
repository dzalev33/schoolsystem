<?php


class Student extends Controller {



//    get all students
    public static function getAllStudents()
    {
        $sql = "SELECT
			students.id,
			students.`name`,
			schoolsystem.`name` AS schoolsystem_name,
			schoolsystem.type AS schoolsystem_type
			FROM
			students
			INNER JOIN schoolsystem ON students.schoolsystem = schoolsystem.id
			GROUP BY
			students.id,
			students.`name`,
			schoolsystem.`name`,
			schoolsystem.type";
        $query = static::getConnection()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }


    public function getStudent(){

    }

    public function getStudentCMS(){

    }
    
    public function getStudentCSMB(){

    }


}