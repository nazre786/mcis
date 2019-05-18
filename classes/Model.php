<?php

class Model {
    private $table = 'model';

    public function select() {

    }
    public function selectAll(){
        $result = DB::select($this->table);
        return $result;
    }

    public function insert($columns = []) {

        $result = DB::insert($this->table, $columns);
        if($result) {
            return "success";
        } else {
            return "failure";
        }
    }

    public function soldOut($id) {
        
        $result = DB::select($this->table, ["count"], "id = $id");
        $count = $result[0]['count'];
        
       if($count!=1){
           $count = $count-1;
           $result = DB::update($this->table, ["count" => $count], "id = $id");
        if($result) {return "success";} 
        else {return "failure";}
       }
       else if($count==1){
           $result = DB::delete($this->table,"id = $id");
           if($result){return "success";}
           else{return "failure";}
       }
       else{return "failure";}
        
    }
}