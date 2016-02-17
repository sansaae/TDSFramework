<?php

namespace Tds\Database\QueryBuilder;

/**
 * Description of SqlQueryBuilder
 *
 * @author Teodor
 */

class SqlQueryBuilder implements QueryBuilderInterface {
    private $statement;
    
    private $where = '';
    
    private $limit;
    
    private $query = '';
    
    
    public function imploadData()
    {
        
    }

    public function detele($table) {
        $this->statement = "DELETE FROM $table";
        return $this;
    }

    public function insert($table, $data) {
        $this->statement = "INSERT INTO $table ";
        if(is_array($data))
        {
            $fields = array_keys($data);
            $this->statement .= '('.implode(",", $fields).')';
            $this->statement .= ' VALUES ('.implode(",", $data).')';
        }
        elseif(is_string($data))
        {
            $this->statement .= "VALUES($data)";
        }
        else
        {
            throw new Exception("Invalid data type!");
        }
        return $this;
    }

    public function select($table, $fields = '*') {
        $this->statement = "SELECT ";
        
        if(is_array($fields))
        {
            $this->statement .= implode(',', $fields);
        }
        elseif(is_string($fields))
        {
            $this->statement .= $fields;
        }
        else
        {
            throw new Exception("Invalid data type!");
        }
        
        $this->statement .= " FROM ".$table;
        return $this;
    }

    public function showColumns($table) {
        $this->statement = "SHOW COLUMNS FROM $table";
        return $this;
    }

    public function update($table, $data) {
        $this->statement = "UPDATE $table SET ";
        if(is_array($data))
        {
            $this->statement .= implode(",", $data);
        }
        elseif(is_string($data))
        {
            $this->statement .= $data;
        }
        else
        {
            throw new Exception("Invalid data type!");
        }
        return $this;
    }

    public function where($data) {
        
    }
    
    public function __toString() {
        
    }

    public function limit($param1, $param2 = null) {
        $this->limit = $param1;
        if($param2 && intval($param2))
        {
            $this->limit .= ", ".intval($param2);
        }
        return $this;
    }

}
