<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyWeb</title>
</head>

<body>
    <!-- ini navbar/sidebar -->
    <div>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="?page=About">About</a></li>
            <li><a href="?page=Users">Users</a></li>
            <li><a href="?page=addUsers">Add Users</a></li>
        </ul>
    </div>
    <!-- disini tempat conten berada -->
    <div class="content">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'Dashboard':
                    include "page/dashboard.php";
                    break;

                case 'About':
                    include "page/about.php";
                    break;

                case 'Users':
                    include "page/users.php";
                    break;

                case 'addUsers':
                    include "page/addUsers.php";
                    break;


                default:
                    echo "<center><h3>Maaf. Halaman ini tidak ditemukan!</h3></center>";
                    break;
            }
        } else {
            include "page/dashboard.php";
        }
        ?>
    </div>

</body>

</html>