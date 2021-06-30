<?php

// Use to fetch medicine data
class Fetch_medicine
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch data using getData Method
    public function getData($table){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch data one by one
        while ($data = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $data;
        }

        return $resultArray;
    }

    // get medicine using medicine id
    public function getMedicine($m_id = null, $table= 'Medicine'){
        if (isset($m_id)){
            $result = $this->db->con->query("SELECT * FROM {$table} WHERE m_id={$m_id}");

            $resultArray = array();

            // fetch product data one by one
            while ($m = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $resultArray[] = $m;
            }

            return $resultArray;
        }
    }

}