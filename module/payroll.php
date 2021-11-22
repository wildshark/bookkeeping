<?php

class payroll{

    public static function ssf($r){

        return ($r['basic'] * (5.5/100));
    }
    
    public static function taxable_income($r){
     
        return $r['basic'] - ($r['basic'] *(5.5/100));
    }

    public static function gross_salary($r){

        return ($r['basic'] - ($r['basic'] *(5.5/100)) - ($r['provt_fund'] + $r['paye']));
    }

    public static function net_salary($r){

        return ((($r['basic'] - ($r['basic'] *(5.5/100))) - ($r['provt_fund'] + $r['paye'])) - ( $r['education_loan'] + $r['salary_advance'] + $r['rent_advance']));
    }

    public static function ssf_13($r){

        return (((($r['basic'] - ($r['basic'] *(5.5/100))) - ($r['provt_fund'] + $r['paye'])) - ($r['education_loan'] + $r['salary_advance'] + $r['rent_advance']))*(13/100));
    }

    public static function ssnit($r){

        return ((($r['basic'] - ($r['basic'] *(5.5/100))) - ($r['provt_fund'] + $r['paye'])) - ( $r['education_loan'] + $r['salary_advance'] + $r['rent_advance']))*(13.5/100); 
    }

    public static function add_main($conn,$r){

        $sql ="INSERT INTO 'main'.'bk_payroll'('pay_date', 'pay_month') VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);

        return $stmt->execute();
    }

    public static function update_main($conn,$r){

        $sql ="UPDATE 'main'.'bk_payroll' SET 'pay_date' = ?, 'pay_month' = ? WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);

        return $stmt->execute();

    }

    public static function fetch_main($conn){

        $sql ="SELECT * FROM 'main'.'get_payroll' LIMIT 0,1000";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();

    }

    public static function delete_main($conn,$r){

        $sql ="DELETE FROM 'main'.'payroll_details' WHERE payroll_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        
        $stmt->execute();

        $sql ="DELETE FROM 'main'.'bk_payroll' WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        
        return $stmt->execute();

    }

    public static function add_details($conn,$r){

        $sql ="INSERT INTO 'main'.'payroll_details'('payroll_id', 'full_name', 'ref', 'basic_salary', 'provt_fund', 'paye', 'education_loan', 'salary_advance', 'rent_advance', 'ssf', 'taxable_income', 'gross_salary', 'net_salary', 'ssf_13', 'ssnit') VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);
        $stmt->bindParam(6,$r[5]);
        $stmt->bindParam(7,$r[6]);
        $stmt->bindParam(8,$r[7]);
        $stmt->bindParam(9,$r[8]);
        $stmt->bindParam(10,$r[9]);
        $stmt->bindParam(11,$r[10]);
        $stmt->bindParam(12,$r[11]);
        $stmt->bindParam(13,$r[12]);
        $stmt->bindParam(14,$r[13]);
        $stmt->bindParam(15,$r[14]);
        return $stmt->execute();


    }

    public static function update_details($conn,$r){

        $sql ="UPDATE 'main'.'payroll_details' SET 'payroll_id' = ?, 'full_name' = ?, 'ref' = ?, 'basic_salary' = ?, 'provt_fund' = ?, 'paye' = ?, 'education_loan' = ?, 'salary_advance' = ?, 'rent_advance' = ?, 'ssf' = ?, 'taxable_income' = ?, 'gross_salary' = ?, 'ssf_13' = ? WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        $stmt->bindParam(2,$r[1]);
        $stmt->bindParam(3,$r[2]);
        $stmt->bindParam(4,$r[3]);
        $stmt->bindParam(5,$r[4]);
        $stmt->bindParam(6,$r[5]);
        $stmt->bindParam(7,$r[6]);
        $stmt->bindParam(8,$r[7]);
        $stmt->bindParam(9,$r[8]);
        $stmt->bindParam(10,$r[9]);
        $stmt->bindParam(11,$r[10]);
        $stmt->bindParam(12,$r[11]);
        $stmt->bindParam(13,$r[12]);
        $stmt->bindParam(14,$r[13]);

        return $stmt->execute();
    }

    public static function fetch_details($conn,$r){

        //$sql ="SELECT payroll_details.* FROM payroll_details WHERE payroll_details.payroll_id = ?";
        $sql ="SELECT payroll_details.* FROM payroll_details";
        $stmt = $conn->prepare($sql);
        //$stmt->bindParam(?,$r[0]);
        $stmt->execute();

        return $stmt->fetchAll();

    }

    public static function delete_details($conn,$r){

        $sql ="DELETE FROM 'main'.'payroll_details' WHERE rowid = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$r[0]);
        
        return $stmt->execute();

    }
}

?>