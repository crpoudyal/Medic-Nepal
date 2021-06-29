<?php

// Use to fetch category data
class Fetch_caregory
{
    public $db = null;

    public function __construct(DBController $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }

    // fetch medicine data using getData Method
    public function getData($table = 'Category'){
        $result = $this->db->con->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($m = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $m;
        }

        return $resultArray;
    }

    // get product using medicine id
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