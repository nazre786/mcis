<?php

class DB {

    private static $dbh;

    private final function  __construct() {
        
    }

    private static function makeConnection() {
        $dbname = "mcis";
        $server = "localhost";
        $dbusername   = 'root';
        $dbpassword   = 'morgenall';
        

        try {
            DB::$dbh = new PDO("mysql:host=".$server.";dbname=".$dbname, $dbusername, $dbpassword);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function select($table, $column = [], $where = "") {
        DB::makeConnection();
        $column_list    = "";
        
        if(!empty($column)) {
            foreach($column as $col) {
                $column_list .= "`$col`, ";
            }
            
            $column_list = trim($column_list, ", ");
        } else {
            $column_list = "*";
        }

        if($where === "") {
            $where = "1 = 1";
        }

        $sql = "SELECT $column_list FROM $table WHERE $where";
        $sql_stmt = DB::$dbh->prepare($sql);
        $sql_stmt->execute();
        $result = $sql_stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function select_sql($sql) {
        DB::makeConnection();
        $sql_stmt = DB::$dbh->prepare($sql);
        $sql_stmt->execute();
        $result = $sql_stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public static function update($table, $column = [], $where) {
        DB::makeConnection();
        $column_list    = "";

        if(!empty($column)) {
            foreach($column as $col => $val) {
                $column_list .= "$col = '$val', ";
            }
            $column_list = trim($column_list, ", ") . ", updated_date = NOW()";
        }
           
        if($where === "") {
            $where = "1 = 1";
        }

        $sql = "UPDATE $table SET $column_list WHERE $where";

        $sql_stmt = DB::$dbh->prepare($sql);
        return ($sql_stmt->execute());
    }

    public static function insert($table, $column = []) {
        DB::makeConnection();
        $col_list    = "";
        $val_list    = "";

        if(!empty($column)) {
            foreach($column as $col => $val) {
                $col_list .= "`$col`, ";
                $val_list .= "'$val', ";
            }
            
            $col_list = $col_list . "added_date, updated_date";
            $val_list = $val_list . "NOW(),NOW()";
        }

        $sql = "INSERT INTO $table ($col_list) VALUES ($val_list)";

        $sql_stmt = DB::$dbh->prepare($sql);
        return ($sql_stmt->execute());
    }
    
    public static function delete($table,$where){
        DB::makeConnection();
        if(!empty($where)){
        $sql = "DELETE FROM $table where $where";
        $sql_stmt = DB::$dbh->prepare($sql);
        return ($sql_stmt->execute());
        }
        else{
            return false;
        }
    }
}

     