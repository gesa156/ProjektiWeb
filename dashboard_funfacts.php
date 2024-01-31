<?php
// Database connection
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "animals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$funfact = $_POST['funfact'] ?? '';
$id = $_POST['id'] ?? '';

// Handle 'edit' action
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action == 'edit' && $id) {
        $stmt = $conn->prepare("UPDATE animal_details SET funfact = ? WHERE id = ?");
        $stmt->bind_param("si", $funfact, $id);
        $stmt->execute();
        $stmt->close();
        header('Location: dashboard_funfacts.php');
        exit;
    }
}

function fetchFacts($conn) {
    $result = $conn->query("SELECT id, name, category, description, image_url, funfact FROM animal_details");
    return $result->fetch_all(MYSQLI_ASSOC);
}

$facts = fetchFacts($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fun Facts Admin Dashboard</title>
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

        .animal-cards-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 20px;
        }

        .animal-card {
            background-color: #fff;
            margin: 10px;
            padding: 15px;
            width: calc(33% - 20px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }

        .animal-card img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .animal-card h3 {
            margin: 10px 0;
        }

        .animal-form textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            height: 100px; /* Adjust height as needed */
            resize: vertical;
        }

        .animal-form button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .animal-form button:hover {
            background-color: #45a049;
        }

        .goback-btn  {
            display: inline-block;
            margin-right:93%;
            padding: 10px 20px;
            font-size: 16px;
            text-align: right;
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
</head>
<body>
<header class="header">
        <h2 class="logo">PawPlanet Admin</h2>
        <nav class="navigation">
            <a href="funfacts.php">View Funfact</a>
        </nav>
        <a href="Login.php" class="goback-btn">Go Back</a>
    </header>
    <div class="animal-cards-container">
    <?php foreach ($facts as $fact): ?>
        <div class="animal-card">
            <h3><?php echo htmlspecialchars($fact['name']); ?></h3>
            <img src="<?php echo htmlspecialchars($fact['image_url']); ?>" alt="<?php echo htmlspecialchars($fact['name']); ?>">
            <p><strong>Category:</strong> <?php echo htmlspecialchars($fact['category']); ?></p>
            <p><strong>Description:</strong> <?php echo htmlspecialchars($fact['description']); ?></p>
            <p><strong>Current Fun Fact:</strong> <?php echo htmlspecialchars($fact['funfact']); ?></p>
            
            <form method="post" class="animal-form">
                <input type="hidden" name="action" value="edit">
                <input type="hidden" name="id" value="<?php echo $fact['id']; ?>">
                <textarea name="funfact" placeholder="Update Fun Fact"></textarea>
                <button type="submit">Update Fun Fact</button>
            </form>
        </div>
    <?php endforeach; ?>
    </div>
</body>
</html>
