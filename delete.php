<?php
    include('config.php');

    if(isset($_POST['submit'])) {
        $missionId = $_POST['mission'];
        $sql = "DELETE FROM missions WHERE MissionID = '$missionId'";
        if ($con->query($sql) === TRUE){
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $con->error;
        }

        // Close the connection
        $con->close();
    }
?>

<html>
    <body>
        
        <form action="delete.php" method="POST">
            <h2> Mission Table Deletion </h2>
            <label for="mission">Mission ID: </label>
            <input type="number" id="mission" name="mission">
            <input type="submit" name="submit">
        </form>
    </body>
</html>

<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #212121;
        color: white;
        font-family: Arial, Helvetica, sans-serif;
    }
    h2 {
        text-align: center;
    }
    form {
        background-color: black;
        padding: 20px;
        border-radius: 20px;
    }
    label {
        font-size: 22px;
    }

    input[type=number] {
        padding: 15px;
        font-size: 20px;
        border: 1px solid black;
        background-color: #252525;
        color: white;
    }
    input[type=number]::placeholder  {
        color: #ffffff;
    }
    input[type=submit] {
        background-color: #f64137;
        padding: 15px;
        padding-top: 19px;
        font-weight: bold;
        font-size: 16px;
        color: #ffffff;
        border: none;
}
</style>