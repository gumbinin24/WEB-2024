<?php
$link = new mysqli('db', 'root', 'donut', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $link->real_escape_string($_POST['email']);
    $title = $link->real_escape_string($_POST['title']);
    $category = $link->real_escape_string($_POST['categories']);
    $description = $link->real_escape_string($_POST['text']);

    $query = "INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')";
    $link->query($query);
}

$mark = [];
if ($result = $link->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $mark[] = $row;
    }
    $result->close();
}

$link->close();
?>

<!doctype html>
    <html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>lab_5</title>
    </head>
    <body>
    <h1>Alexito</h1>

    <form action="code.php" method="POST">
        <label for="email">Email</label>
        <label>
            <input type="email" name="email" required>
        </label><br>

        <label for="title">Title</label>
        <label>
            <input type="text" name="title" required>
        </label><br>

        <label for="categories">Categories</label>
        <label>
            <select name="categories" required>
                <option value="clothes">Clothes</option>
                <option value="electronics">Electronics</option>
                <option value="services">Services</option>
            </select>
        </label><br>

        <label for="description">Description:</label><br>
        <label>
            <textarea name="text" rows="10" cols="54" required></textarea>
        </label><br>

        <button type="submit">Post</button>
    </form>
    <div id="table">
        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($mark as $ad):
                echo "<tr>";
                echo "<td>" . ($ad['email']) . "</td>";
                echo "<td>" . ($ad['title']) . "</td>";
                echo "<td>" . ($ad['description']) . "</td>";
                echo "<td>" . ($ad['category']) . "</td>";
                echo "</tr>";
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
    </body>
</html>
