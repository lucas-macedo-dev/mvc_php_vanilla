<?php

namespace your_app_name\Models;
use your_app_name\Models\BaseModel;

class Users extends BaseModel
{
    public function get_total_users()
    {
        $this->db_connect();
        return $this->query("SELECT COUNT(*) total FROM your_table");
    }
}