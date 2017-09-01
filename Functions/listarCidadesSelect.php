<?php
    if($_GET["id"])
    {
        include "../Config/dataaccess.php";
        $id = $_GET["id"];
        $sql = mysqli_query($con, "SELECT * FROM prk_cidades WHERE cid_etd_id = $id ORDER BY cid_descricao ASC");
        while ($row = mysqli_fetch_array($sql))
        {
            echo "<option value='".$row["cid_id"]."'>".$row["cid_descricao"]."</option>";
        }
    }
?>