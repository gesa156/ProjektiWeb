<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Dashboard</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .header {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
    }

    .logo {
        margin: 0;
    }

    .navigation a {
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin-top: 20px;
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    th {
        background-color: blueviolet;
        color: #ffffff;
        border: 1px solid #dddddd;
        text-align: left;
        padding: 12px;
    }

    tr:nth-child(even) {
        background-color: #f0f0f0;
    }

    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 12px;
    }

  

    .goback-btn {
        display: inline-block;
        padding: 10px 20px;
        margin-right: 93%;
        font-size: 16px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
    }

    .goback-btn:hover {
        background-color: #45a049;
    }
</style>

<body>

    <header class="header">
        <h2 class="logo">PawPlanet Admin</h2>
        <nav class="navigation">
            <a href="login.php">View Home</a>
        </nav>
        <a href="Login.php" class="goback-btn">Go Back</a>
    </header>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>EMAIL</th>
            <th>AMOUNT</th>
            <th>EXP YEAR</th>
            <th>CVV</th>
            
        </tr>
        <?php
        include_once 'DonationRepository.php';

        $donationRepository = new DonationRepository();
        $donations = $donationRepository->getAllDonations();

        foreach ($donations as $donation) {
            echo
            "
                <tr>
                    <td>{$donation['id']}</td>
                    <td>{$donation['firstname']}</td>
                    <td>{$donation['lastname']}</td>
                    <td>{$donation['email']}</td>
                    <td>{$donation['amount']}</td>
                    <td>{$donation['expYear']}</td>
                    <td>{$donation['cvv']}</td>
                   
                </tr>
             ";
        }
        ?>
    </table>
</body>

</html>
