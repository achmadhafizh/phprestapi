<?php

class WebLib {   
	
	public function getInformixConnection() {
        try {
            $db2 = DB2();
			return $db2;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function getMYSQLConnection() {
        try {
            $db = DB();
			return $db;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function insertArrayDataMYSQL($table, $data) {
		try {
            $db = DB();
			$columns = "";
			$values = "";
			
			foreach($data as $key => $value) {
				$values = $values.",".$value;
				$columns = $columns.",".$key;
			}
			
			$values = substr($values, 1);
			$columns = substr($columns, 1);
			
			$query = $db->prepare("INSERT INTO $table($columns) VALUES($values)");
            
            if($query->execute()) {
				return true;
			} else {
				return false;
			}
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function updateArrayDataMYSQL($table, $data, $condition) {
		try {
            $db = DB();
			$records = "";
			
			foreach($data as $key => $value) {
				$records = $records.",".$key."=".$value;
			}
			
			$records = substr($records, 1);
			
			$query = $db->prepare("UPDATE $table SET $records WHERE $condition");
            
            if($query->execute()) {
				return true;
			} else {
				return false;
			}
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function deleteDataMYSQL($table, $condition) {
		try {
            $db = DB();
			
			$query = $db->prepare("DELETE FROM $table WHERE $condition");
            
            if($query->execute()) {
				return true;
			} else {
				return false;
			}
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function executeQueryMYSQL($sql) {
		try {
            $db = DB();

			$query = $db->prepare($sql);
            
            if($query->execute()) {
				return true;
			} else {
				return false;
			}
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function fetchRowsArrayMYSQL($sql) {
        try {
			$db = DB();
			
			$query = $db->prepare($sql);
            
            $query->execute();
            
            $data = array();
			while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
				$data[] = $row;
			}
			
			return $data;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function fetchRowsObjectMYSQL($sql) {
        try {
			$db = DB();
			
			$query = $db->prepare($sql);
            
            $query->execute();
            
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function insertArrayDataInformix($table, $data) {
		try {
            $db2 = DB2();
			$columns = "";
			$values = "";
			
			foreach($data as $key => $value) {
				$values = $values.",".$value;
				$columns = $columns.",".$key;
			}
			
			$values = substr($values, 1);
			$columns = substr($columns, 1);
			
			$query = $db2->prepare("INSERT INTO $table($columns) VALUES($values)");
            
            if($query->execute()) {
				return true;
			} else {
				return false;
			}
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function updateArrayDataInformix($table, $data, $condition) {
		try {
            $db2 = DB2();
			$records = "";
			
			foreach($data as $key => $value) {
				$records = $records.",".$key."=".$value;
			}
			
			$records = substr($records, 1);
			
			$query = $db2->prepare("UPDATE $table SET $records WHERE $condition");
            
            if($query->execute()) {
				return true;
			} else {
				return false;
			}
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function deleteDataInformix($table, $condition) {
		try {
            $db2 = DB2();
			
			$query = $db2->prepare("DELETE FROM $table WHERE $condition");
            
            if($query->execute()) {
				return true;
			} else {
				return false;
			}
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function executeQueryInformix($sql) {
		try {
            $db2 = DB2();

			$query = $db2->prepare($sql);
            
            if($query->execute()) {
				return true;
			} else {
				return false;
			}
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function fetchRowsArrayInformix($sql) {
        try {
			$db2 = DB2();
			
			$query = $db2->prepare($sql);
            
            $query->execute();
            
            $data = array();
			while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
				$data[] = $row;
			}
			
			return $data;
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function fetchRowsObjectInformix($sql) {
        try {
			$db2 = DB2();
			
			$query = $db2->prepare($sql);
            
            $query->execute();
            
            return $query->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
    
}
