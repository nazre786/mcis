<?php

class Inventory {

    public function selectAll() {
        $sql = "SELECT mfn.id AS id,m.id AS model_id,mfn.name AS manufacturer_name,m.mname AS model_name,m.count AS count,m.image_url_1 AS img1,m.image_url_2 AS img2,m.status From manufacturer AS mfn INNER JOIN model AS m ON mfn.id=m.mfn_id";
        $result = DB::select_sql($sql);
        return $result;
    }

}
