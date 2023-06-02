<?php
    function ConnectDB()
    {
        $conn = null;
        try
        {
            $conn = new PDO("mysql:localhost = localhost; dbname = Kiemtra", "root", "root");
            $conn->query("SET NAMES UTF8");
        }
        catch(PDOException $ex)
        {
            echo "<p>" . $ex->getMessage() . "</p>";
        }
        return $conn;
    }

    function getlistBook()
    {
        $conn = ConnectDB();
        //Kiem tra loi ket noi CSDL
        if($conn == null)
            return -1;
        $sql = "SELECT * FROM Library WHERE TRUE";
        $pdo_stm=$conn->prepare($sql);
        $ketqua = $pdo_stm->execute();
        //Kiem tra loi SQL
        if($ketqua ==false)
            return -2;
        else
        {
            $rows = $pdo_stm->fetchAll();
            return $rows;
        }
    }
?>