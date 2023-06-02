<?php

    function ConnectDB()
    {
        $conn = null;
        try
        {
            $conn = new PDO("mysql:localhost = localhost; dbname=Kiemtra", "root", "root");
            $conn->query("SET NAMES UTF8");
        }
        catch(PDOException $ex)
        {
            echo "<p>" .$ex->getMessage(). "</p>";
        }
        return $conn;
    }

    function getListBooksbyId($key = "")
    {
        $conn = ConnectDB();
        if($conn == null)
        //Loi ket noi CSDL
            return -1;
        $sql = "SELECT * FROM Library";
        if($key!= "")
            $sql .= "WHERE title LIKE '%$key%'";
        $pdo_stm = $conn->prepare($sql);
        $ketqua = $pdo_stm->execute();
        if($ketqua == false)
            return -2;
        else
        {
            $rows = $pdo_stm->fetchAll();
            return $rows;
        }
    }
?>