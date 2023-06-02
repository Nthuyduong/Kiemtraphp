<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>BOOK MANAGEMENT</h1>
        <?php
            require_once("Database.php");
            $rows = getlistBook();
            if($rows == -1)
                die ("<h3>Loi ket noi CSDL<h3>");
            else if($rows == -2)
                die ("<h3>Loi SQL</h3>");
            else if(count($rows)==0)
                die("<h3>Khong tim thay du lieu</h3>");
        ?>
        <table width="800" align="center">
            <tr>
                <td>bookid</td>
                <td>authorid</td>
                <td>title</td>
                <td>ISBN</td>
                <td>pub_year</td>
                <td>avaiable</td>
            </tr>
            <?php
                foreach($rows as $row)
                {
            ?>
            <tr>
                <td><?$row["bookid"]?></td>
                <td><?$row["authorid"]?></td>
                <td><?$row["title"]?></td>
                <td><?$row["ISBN"]?></td>
                <td><?$row["pub_year"]?></td>
                <td><?$row["avaiable"]?></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </body>
</html>
