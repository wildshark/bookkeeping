<?php

class investment{

    public static function add_main($conn,$r){

        $sql ="INSERT INTO 'main'.'invest_main'('invest_name', 'start_date', 'end_date') VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);

        return $stmt->execute();
    }

    public static function fetch_main($conn){

        $sql ="SELECT *,rowid 'NAVICAT_ROWID' FROM 'main'.'invest_main' ORDER BY 'invest_id' DESC LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function update_main($conn,$r){

        $sql ="UPDATE 'main'.'invest_main' SET 'invest_name' = ?, 'start_date' = ?, 'end_date' = ? WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);

        return $stmt->execute();

    }

    public static function fetch_details($conn,$id){

        $sql ="SELECT invest_details.* FROM invest_details WHERE invest_id =?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function add_details_invest($conn,$r){

        $sql="INSERT INTO 'main'.'invest_details'('invest_id', 'tran_date', 'details', 'ref', 'invest') VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);

        return $stmt->execute();
    }

    public static function add_details_profit($conn,$r){


        $sql ="INSERT INTO 'main'.'invest_details'('invest_id', 'tran_date', 'details', 'ref', 'profit') VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);

        return $stmt->execute();
    }

    public static function add_details_checkout($conn,$r){

        $sql ="INSERT INTO 'main'.'invest_details'('invest_id', 'tran_date', 'details', 'ref', 'cashout') VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);

        return $stmt->execute();
    }

    public static function delete_details($conn,$r){

        $sql ="DELETE FROM 'main'.'invest_details' WHERE rowid =?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        
        return $stmt->execute();
    }
}

?>