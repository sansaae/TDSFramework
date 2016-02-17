<?php
/**
 * Description of index
 *
 * @author Teodor
 */

use Tds\Database\QueryBuilder\SqlQueryBuilder;

require_once 'autoloads.php';

$f = new SqlQueryBuilder();
var_dump($f->showColumns('world'));

