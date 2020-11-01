<?php
class Student {

    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getPosts(){
        $this->db->query('SELECT *,
                        student.id as studentId,
                        users.id as userId,
                        student.created_at as studentCreated,
                        users.created_at as userCreated
                        FROM posts
                        INNER JOIN users
                        ON student.user_id = users.id
                        ORDER BY student.created_at DESC
                        ');

        $results = $this->db->resultSet();

        return $results;
    }
}