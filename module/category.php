<?php

class category{

    public static function add($conn,$r){

        $sql ="INSERT INTO 'main'.'bk_category'('book_id', 'category_title') VALUES (?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);

        return $stmt->execute();
    }

    public static function update($conn,$r){

        $sql ="UPDATE 'main'.'bk_category' SET 'book_id' = ?, 'category_title' = ? WHERE rowid = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);

        return $stmt->execute();
    }

    public static function fetch($conn){

        $sql ="SELECT * FROM 'main'.'qry_category' LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
        
    }

    public static function fetch_income($conn){

        $sql ="SELECT * FROM 'main'.'qry_category' WHERE book_id = 1 LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
        
    }

    public static function fetch_expenses($conn){

        $sql ="SELECT * FROM 'main'.'qry_category' WHERE book_id = 2 LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
        
    }

    public static function status($conn,$r){

        $sql ="UPDATE 'main'.'bk_category' SET 'status_id' = ? WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);

        return $stmt->execute();
    }

    public static function delete($conn,$r){
        
        $sql ="DELETE FROM 'main'.'bk_category' WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);

        return $stmt->execute();
    }
    
}


?>