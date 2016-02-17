<?php

namespace Tds\Database\QueryBuilder;

/**
 * Description of QueryBuilderInterface
 *
 * @author Teodor
 */

interface QueryBuilderInterface {
    
    public  function select($table, $fields = '*');
    
    public function insert($table, $data);
    
    public function update($table, $data);
    
    public function detele($table);
    
    public function where($data);
    
    public function limit($param1, $param2 = null);

    public function showColumns($table);
}
