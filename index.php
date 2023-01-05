<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>


<html>

<head>
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">Data Mahasiswa</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        </div>
        <a href="add.php">+</a><br /><br />

        <table width='80%' border=1>

            <tr>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>NPM</th>
                <th>Update</th>
            </tr>
            <?php
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['name'] . "</td>";
                echo "<td>" . $user_data['mobile'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
            }
            ?>
        </table>
</body>

</html>