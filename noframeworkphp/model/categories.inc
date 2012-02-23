<?php


class categories extends db {
	function load_list() {
	    try {
	      if(!self::$dbh) $this->connect();
	      $result = self::$dbh->query("SELECT * FROM categories");
	      $rows = $result->fetchAll(PDO::FETCH_ASSOC); 
	    } catch (PDOException $e) {
	      $this->fatal_error($e->getMessage());
	    }
	    $names=array();
	    foreach($rows as $i=>$row) {
		   $names[$i]=$rows[$i]['name'] ;
		}
	    return $names;
  }

}
?>