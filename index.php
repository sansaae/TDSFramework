<?php
/**
 * Description of index
 *
 * @author Teodor
 */

use Tds\Database\QueryBuilder\SqlQueryBuilder;

require_once 'autoload.php';

$f = new SqlQueryBuilder();
var_dump($f->showColumns('world'));

