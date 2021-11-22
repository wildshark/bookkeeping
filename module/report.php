<?php

class report{

    public static function income($conn,$r){

        $sql ="SELECT qry_income.category_title, sum(qry_income.amt) AS total FROM qry_income WHERE qry_income.tran_date BETWEEN ? AND ? GROUP BY qry_income.category_title";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r['start']);
        $stmt->bindParam(2,$r['end']);
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public static function expenses($conn,$r){

        $sql ="SELECT qry_expenses.category_title, sum(qry_expenses.amt) AS total FROM qry_expenses WHERE qry_expenses.tran_date BETWEEN ? AND ? GROUP BY qry_expenses.category_title";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r['start']);
        $stmt->bindParam(2,$r['end']);
        $stmt->execute();

        return $stmt->fetchAll();

    }
}

?>