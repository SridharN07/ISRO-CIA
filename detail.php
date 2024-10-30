<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="./detail.css">
    <style>
        label {
            font-size: 20px;
        }
        h2 {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if (!isset($_SESSION['username'])) {
        header('Location: AdminLogin.php');
        exit();
    }
    ?>


    <header class="nav">
        <h2><img class="logo" src="./Styles/Images/Logos/ISRO.png"></h2>
        <div class="navigation">
        </div>
        </header>
        <div class="main-body">
    <div class="sidebar">
        <h2>Admin Dashboard</h2>
        <ul>
            <li><a onclick="showMainData();">Home</a></li>
            <li><a href="#analytics">Analytics</a></li>
            <li><a onclick="showUserData();">Manage Users</a></li>
            <li><a onclick="showTableData();">Manage Table Data</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div class="main-content" id="main">
        <header>
            <h1>Welcome, <?php echo $_SESSION['username'] ?> </h1>
        </header>
        <div id="home">
        <section id="home">
            <h2>Dashboard Overview</h2>
            <div class="overview">
                <div class="stats">
                    <div class="card">
                        <h3>Active Users</h3>
                        <p id="users"><script>document.getElementById('users').innerHTML = Math.floor(Math.random() * 1000);</script></p>
                    </div>
                    <div class="card">
                        <h3>New Students</h3>
                        <p id="student"><script>document.getElementById('student').innerHTML = Math.floor(Math.random() * 1000);</script></p>
                    </div>
                    <div class="card">
                        <h3>Total Revenue</h3>
                        <p id="revenue">$<script>document.getElementById('revenue').innerHTML = '$' + Math.floor(Math.random() * 999999);</script></p>
                    </div>
                </div>
        </section>
        <section id="analytics">
            <h2>Analytics</h2>
            <div class="chart-container" style="width: 100%;">
                <canvas id="myChart"></canvas>
            
        </section>
        <section id="users">
            <h2>Users</h2>
            <div class="overview">
                <div class="stats">
                    <div class="card">
                        <h3>Users Count</h3>
                        <?php
                            include('config.php');

                            // Define the table name you want to display
                            $tableName = "Users";

                            // Fetch and display the table content
                            $sql = "SELECT COUNT(*) as count FROM $tableName";
                            $result = mysqli_query($con, $sql);

                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                echo $row['count'];
                            } else {
                                echo "Failed to Fetch Data! ";
                            }
                            mysqli_close($con);
                        ?>
                    </div>
                    <div class="card">
                        <h3>Students Count</h3>
                        <?php
                            include('config.php');
                            $tableName = "Registration";

                            // Fetch Data
                            $sql = "SELECT COUNT(*) as count FROM $tableName";
                            $result = mysqli_query($con, $sql);

                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                echo $row['count'];
                            } else {
                                echo "Failed to Fetch Data! ";
                            }
                            mysqli_close($con);
                        ?>
                    </div>
                    <div class="card">
                        <h3>Admins Count</h3>
                        <?php
                            include('config.php');
                            $tableName = "Admins";

                            $sql = "SELECT COUNT(*) as count FROM $tableName";

                            $result = mysqli_query($con, $sql);
                            if ($result) {
                                $row = mysqli_fetch_assoc($result);
                                echo $row['count'];
                            } else {
                                echo "Failed to Fetch Data! ";
                            }
                            mysqli_close($con);
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </div>

     <!--Users Updation Datas -->
    <section class="user-manage" id="user-main">
            <h2>Admin Management</h2>
                <?php
                    include 'config.php';

                    $sql = "SELECT * FROM admins";
                    $result = $con->query($sql);

                    if ($result->num_rows > 0) {
                        echo "<table border='1'>
                                <tr class='userheading'>
                                    <th>Admin ID</th>
                                    <th>Admin Name</th>
                                    <th>Admin Username</th>
                                    <th>Password</th>
                                </tr>";
                        
                        while($row = $result->fetch_assoc()) {
                            echo "<tr class='mission'>";
                            echo "<td>" . $row["AdminID"] . "</td>";
                            echo "<td>" . $row["AdminName"] . "</td>";
                            echo "<td>" . $row["AdminUsername"] . "</td>";
                            echo "<td>" . $row['AdminPassword'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }

                    $con->close();
                ?>
                    <button onclick="showInsertAdmin()">Insert</button>
                    <button onclick="showDeleteAdmin()">Delete</button>

                    <!--Insertion System for Admin-->
                        <div id="insertAdmin">
                            <form action="" method="POST" autocomplete="off">
                            <h2> Add Admin </h2>
                            <label for="name">Name: </label> <br>
                            <input type="text" id="name" name="name"> <br>
                            <label for="username">Username: </label> <br>
                            <input type="text" id="username" name="username"> <br>
                            <label for="password">Password: </label> <br>
                            <input type="password" id="password" name="password"> <br>
                            <input type="submit" name="insert">
                            </form>
                        </div>

                        
                    <!--Deletion System for Admin-->
                        <div id="deleteAdmin">
                            <form action="" method="POST">
                            <h2> Remove Admin </h2>
                            <label for="id">Admin ID: </label> <br>
                            <input type="number" id="id" name="id">
                            <input type="submit" name="delete">
                            </form>
                        </div>

                <style>
                    .userheading {
                        background-color: yellow;
                        color: black;
                    }
                </style>
                <script>
                    function showInsertAdmin() {
                        document.getElementById('insertAdmin').style.display = 'block';
                        document.getElementById('deleteAdmin').style.display = 'none';
                    }
                    function showDeleteAdmin() {
                        document.getElementById('insertAdmin').style.display = 'none';
                        document.getElementById('deleteAdmin').style.display = 'block';
                    }
                </script>

    </section>

    <!--Table Updation Datas -->
        <section class="table-manage" id="table-main">
            <h2>Website Table Management</h2> <br>
                        <!--For Insertion-->
                        <?php
                        include('config.php');
                        if(isset($_POST['insert'])) {
                            $name = $_POST['mission-name'];
                            $year = $_POST['year'];
                            $status = $_POST['status'];
                            $sql = "INSERT INTO missions (Name,Year,Status) VALUES ('$name','$year','$status')";
                            if ($con->query($sql) === TRUE){
                                echo "<p id='result'>Inserted!</p>";
                                echo "<script type='text/javascript'>
                                    var t = setTimeout(function() {
                                        document.getElementById('result').style.display = 'none';
                                    }, 4000);
                                </script>";
                            } else {
                                echo "Error deleting record: " . $con->error;
                            }
                            $con->close();
                        }
                        ?>
                        
                        <!--For Updation-->
                        <?php
                        include('config.php');
                        if(isset($_POST['update'])) {
                            $missionId = $_POST['mission'];
                            $name = $_POST['mission-name'];
                            $year = $_POST['year'];
                            $status = $_POST['status'];
                            $sql = "UPDATE missions SET Name = '$name',Year = '$year', Status = '$status' WHERE MissionID = '$missionId'";
                            if ($con->query($sql) === TRUE){
                                echo "<p id='result'>Updated!</p>";
                                echo "<script type='text/javascript'>
                                    var t = setTimeout(function() {
                                        document.getElementById('result').style.display = 'none';
                                    }, 4000);
                                </script>";
                            } else {
                                echo "Error deleting record: " . $con->error;
                            }
                            $con->close();
                        }
                        ?>

                        <!--For Deletion-->
                        <?php
                        include('config.php');
                        if(isset($_POST['delete'])) {
                            $missionId = $_POST['mission'];
                            $sql = "DELETE FROM missions WHERE MissionID = '$missionId'";
                            if ($con->query($sql) === TRUE){
                                echo "<p id='result'>Deleted!</p>";
                                echo "<script type='text/javascript'>
                                    var t = setTimeout(function() {
                                        document.getElementById('result').style.display = 'none';
                                    }, 4000);
                                </script>";
                            } else {
                                echo "Error deleting record: " . $con->error;
                            }
                            $con->close();
                            }
                        ?>

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
                            
                            while($row = $result->fetch_assoc()) {
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
                                <button onclick="showInsertTable()">Insert</button>
                                <button onclick="showUpdateTable()">Update</button>
                                <button onclick="showDeleteTable()">Delete</button>

                        <!--Insertion System -->
                        <div id="insertTable">
                            <form action="" method="POST">
                            <h2> Mission Table Insertion </h2>
                            <label for="mission-name">Mission Name: </label> <br>
                            <input type="text" id="mission-name" name="mission-name"> <br>
                            <label for="mission-year">Year: </label> <br>
                            <input type="number" maxlength="4" pattern="[0-9]" id="mission-year" name="year"> <br>
                            <label for="mission-status">Mission Status: </label> <br>
                            <input type="number" maxlength="1" pattern="[0-1]" id="status" name="status"> <br>
                            <input type="submit" name="insert">
                            </form>
                        </div>

                        <!--Updation System -->
                        <div id="updateTable">
                            <form action="" method="POST">
                            <h2> Mission Table Updation </h2>
                            <label for="mission">Mission ID: </label> <br>
                            <input type="number" id="mission" name="mission"> <br>
                            <label for="mission-name">Mission Name: </label> <br>
                            <input type="text" id="mission-name" name="mission-name"> <br>
                            <label for="mission-year">Year: </label> <br> 
                            <input type="number" maxlength="4" pattern="[0-9]" id="mission-year" name="year"> <br>
                            <label for="mission-status">Mission Status: </label> <br>
                            <input type="number" maxlength="1" pattern="[0-1]" id="status" name="status"> <br>
                            <input type="submit" name="update">
                            </form>
                        </div>

            <!--Deletion System -->
                        <div id="deleteTable">
                            <form action="" method="POST">
                            <h2> Mission Table Deletion </h2>
                            <label for="mission">Mission ID: </label> <br>
                            <input type="number" id="mission" name="mission">
                            <input type="submit" name="delete">
                            </form>
                        </div>


                    
            <script>
                function showInsertTable() {
                    document.getElementById('insertTable').style.display = 'block';
                    document.getElementById('updateTable').style.display = 'none';
                    document.getElementById('deleteTable').style.display = 'none';
                }
                function showUpdateTable() {
                    document.getElementById('insertTable').style.display = 'none';
                    document.getElementById('updateTable').style.display = 'block';
                    document.getElementById('deleteTable').style.display = 'none';
                }
                function showDeleteTable() {
                    document.getElementById('insertTable').style.display = 'none';
                    document.getElementById('updateTable').style.display = 'none';
                    document.getElementById('deleteTable').style.display = 'block';
                }
            </script>



            <style>
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
                form {
                    padding: 30px;
                }

                input::-webkit-outer-spin-button,
                input::-webkit-inner-spin-button {
                    -webkit-appearance: none;
                }

                input {
                    padding: 15px;
                    font-size: 20px;
                    border: 1px solid black;
                    background-color: #252525;
                    color: white;
                    margin: 10px;
                }
                input[type=number]::placeholder  {
                    color: #ffffff;
                }

                button {
                    margin-top: 10px;
                    background-color: #f64137;
                    padding: 19px 25px 20px 25px;
                    padding-top: 19px;
                    font-weight: bold;
                    font-size: 16px;
                    color: #ffffff;
                    border: none;
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
        </section>

        <section class="user-manage" id="user-main">
            <h2>Admin Management</h2>
        </section>

    <script src="script.js"></script>
    </div>
</body>
</html>
<script>
document.querySelectorAll('.sidebar ul li a').forEach(link => {
    link.addEventListener('click', function() {
        document.querySelector('.sidebar ul li a.active')?.classList.remove('active');
        this.classList.add('active');
    });
});

// Chart Generator
const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June','July','August','September','October','November','December'],
        datasets: [{
            label: '# of Visitors',
            data: [11200, 11900, 13500, 25000, 29000, 30000,32000,30000,35000,45000,46000,52000 ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

window.onload = showMainData();

function showTableData() {
    document.getElementById('home').style.display = 'none';
    document.getElementById('table-main').style.display = 'block';
    document.getElementById('user-main').style.display = 'none';
    document.getElementById('insertTable').style.display = 'none';
    document.getElementById('updateTable').style.display = 'none';
    document.getElementById('deleteTable').style.display = 'none';
}
function showMainData() {
    document.getElementById('home').style.display = 'block';
    document.getElementById('table-main').style.display = 'none';
    document.getElementById('user-main').style.display = 'none';
}
function showUserData() {
    document.getElementById('home').style.display = 'none';
    document.getElementById('user-main').style.display = 'block';
    document.getElementById('table-main').style.display = 'none';
    document.getElementById('insertAdmin').style.display = 'none';
    document.getElementById('deleteAdmin').style.display = 'none';
}
</script>