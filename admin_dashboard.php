<?php
include 'AnimalDatabase.php';
$db = new AnimalDatabase();

// add/edit/delete form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    $name = $_POST["name"] ?? '';
    $category = $_POST["category"] ?? '';
    $description = $_POST["description"] ?? '';
    $image_url = $_POST["image_url"] ?? '';
    $id = $_POST["id"] ?? null; // Get ID if set

    switch ($_POST['action']) {
        case 'add':
            $db->addAnimal($name, $category, $description, $image_url);
            break;
        case 'edit':
            if ($id) {
                $db->updateAnimal($id, $name, $category, $description, $image_url);
                // Redirect to clear edit mode
                header('Location: admin_dashboard.php');
                exit;
            }
            break;
        case 'delete':
            if ($id) {
                $db->deleteAnimal($id);
            }
            break;
    }
}

// Check if we are editing an animal
$editingAnimal = null;
if (isset($_GET['edit']) && is_numeric($_GET['edit'])) {
    $editId = $_GET['edit'];
    $editingAnimal = $db->getAnimalById($editId); 

$animals = $db->getAnimals();}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - PawPlanet</title>
    <link rel="stylesheet" href="admin_dashboard.css">
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

.admin-section {
    margin: 20px;
    background-color: white;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.animal-form input[type="text"],
.animal-form input[type="url"],
.animal-form textarea {
    width: 100%;
    padding: 8px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.animal-form textarea {
    height: 100px;
    resize: vertical;
}

.animal-form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.animal-form input[type="submit"]:hover {
    background-color: #45a049;
}

.animal-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 0 20px;
}

.animal-item {
    background-color: #fff;
    margin: 10px;
    padding: 15px;
    width: calc(33% - 20px);
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    text-align: center;
}

.animal-item img {
    max-width: 100%;
    height: auto;
    border-radius: 5px;
}

.animal-item h4 {
    margin: 10px 0;
}

.animal-item p {
    color: #555;
}

.animal-item a, .animal-item form {
    margin: 10px 5px;
    display: inline-block;
}

.animal-item a {
    color: #0275d8;
    text-decoration: none;
}

.animal-item form input[type="submit"] {
    padding: 5px 10px;
    background-color: #d9534f;
    border: none;
    border-radius: 4px;
    color: white;
    cursor: pointer;
}

.animal-item form input[type="submit"]:hover {
    background-color: #c9302c;
}

</style>
<body>
    <header class="header">
        <h2 class="logo">PawPlanet Admin</h2>
        <nav class="navigation">
            <a href="collection.php">View Collection</a>
        </nav>
    </header>

    <main>
        <div class="admin-section">
            <h3><?php echo $editingAnimal ? 'Edit Animal' : 'Add New Animal'; ?></h3>
            <form method="post" class="animal-form">
                <input type="hidden" name="action" value="<?php echo $editingAnimal ? 'edit' : 'add'; ?>">
                <?php if ($editingAnimal): ?>
                    <input type="hidden" name="id" value="<?php echo $editingAnimal['id']; ?>">
                <?php endif; ?>
                <input type="text" name="name" placeholder="Name" value="<?php echo $editingAnimal['name'] ?? ''; ?>">
                <input type="text" name="category" placeholder="Category" value="<?php echo $editingAnimal['category'] ?? ''; ?>">
                <textarea name="description" placeholder="Description"><?php echo $editingAnimal['description'] ?? ''; ?></textarea>
                <input type="url" name="image_url" placeholder="Image URL" value="<?php echo $editingAnimal['image_url'] ?? ''; ?>">
                <input type="submit" value="<?php echo $editingAnimal ? 'Update Animal' : 'Add Animal'; ?>">
            </form>
        </div>

        <div class="animal-list">
            <?php while($row = $animals->fetch_assoc()): ?>
                <div class="animal-item">
                    <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                    <h4><?php echo htmlspecialchars($row['name']); ?></h4>
                    <p><?php echo htmlspecialchars($row['description']); ?></p>
                    
                    <!-- Edit Link -->
                    <a href="?edit=<?php echo $row['id']; ?>">Edit</a>

                    <!-- Delete Form -->
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="action" value="delete">
                        <input type="submit" value="Delete">
                    </form>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
</body>
</html>
