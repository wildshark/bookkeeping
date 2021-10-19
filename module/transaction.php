<?php

class tranaction{


    public static function add_income($conn,$r){

        $sql ="INSERT INTO 'main'.'bk_transaction'('clock', 'tran_date', 'category_id', 'details', 'tran_type', 'ref', 'dr') VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);
        $stmt->bindParam(6,$r[5]);
        $stmt->bindParam(7,$r[6]);

        return $stmt->execute();

    }

    public static function add_expenses($conn,$r){

        $sql ="INSERT INTO 'main'.'bk_transaction'('clock', 'tran_date', 'category_id', 'details', 'tran_type', 'ref', 'cr') VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);
        $stmt->bindParam(6,$r[5]);
        $stmt->bindParam(7,$r[6]);
        
        return $stmt->execute();
    }

    public static function fetch_income($conn){

        $sql ="SELECT * FROM 'main'.'qry_income' LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }

    public static function fetch_expenses($conn){

        $sql ="SELECT * FROM 'main'.'qry_expenses' LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
        
    }

    public static function fetch_bank($conn){

        $sql ="SELECT * FROM 'main'.'qry_bank' LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }

    public static function fetch_cash($conn){

        $sql ="SELECT * FROM 'main'.'qry_cash' LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
        
    }

    public static function view($conn,$id){

        $sql ="SELECT qry_transaction.* FROM qry_transaction WHERE qry_transaction.ref = 1";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();

        return $stmt->fetch();
    }

    public static function delete($conn,$id){

        $sql ="DELETE FROM 'main'.'bk_transaction' WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$id);

        return $stmt->execute();
        
    }

    public static function report(){

    }   

}


?>