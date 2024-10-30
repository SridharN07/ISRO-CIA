<?php
                        include 'config.php';

                        $sql = "SELECT MissionID, Name, Year, Status FROM missions";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            echo "<table border='1'>
                                    <tr class='heading'>
                                        <th>MissionID</th>
                                        <th>Name</th>
                                        <th>Year</th>
                                        <th>Status</th>
                                    </tr>";
                            
                            $sl = 0;
                            while($row = $result->fetch_assoc()) {
                                $sl += 1;
                                $class = $row["Status"] ? "success" : "fail";
                                echo "<tr class='mission' id='$class'>";
                                echo "<td>" . $row["MissionID"] . "</td>";
                                echo "<td>" . $row["Name"] . "</td>";
                                echo "<td>" . $row["Year"] . "</td>";
                                echo "<td>" . ($row["Status"] ? "successful" : "unsuccessful") . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {
                            echo "0 results";
                        }

                        $con->close();
                        ?>

<style>
    body {
        font-family: calibri;
    }
        .heading {
            background-color: #f2aa4c;
        }
        #success {
            background-color: #4caf50;
        }
        #fail {
            background-color: #f44336;
        }
        table {
            width: 100%;
        }
        table,td,th {
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
            font-size: 20px;
            border: 2px solid black;
        }
        </style>