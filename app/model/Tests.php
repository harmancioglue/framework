<?php

class Tests extends BaseModel
{
    public function getPosts()
    {
        $this->db->query("SELECT * FROM posts");
        $test = $this->db->getResultSet();
        $test = 4;
    }
}