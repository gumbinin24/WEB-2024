<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Task 3</title>
    </head>
    <body>
    <div style="text-align: center">
    <h1>Online_Shop</h1>
    <form action="disp.php" method="post">
        <label for="email">Email</label>
        <label>
            <input type="email" name="email" required>
        </label>
        <label for="title"><br>Title</label>
        <label>
            <input type="text" name="title" required>
        </label><br>
        <label for="categories">Categories</label>
        <label>
            <select name="categories" required>
                <option value="clothes">Clothes</option>
                <option value="electronics">Electronics</option>
                <option value="furniture">Services</option>
            </select>
        </label><br>
        <label for="description">Description:</label><br>
        <label>
            <textarea name="text" rows="10" cols="56" required></textarea>
        </label><br>
            <button type="submit">Confirm</button>
    </form>
    <div id="table" style="text-align: center">
        <table>
            <thead>
            <tr>
                <th>Email</th>
                <th>Title</th>
                <th>Category</th>
                <th>Description</th>

    </div>
        <tbody>
            <?php
            $categories = ["clothes", "electronics", "furniture"];
            foreach ($categories as $category) {
                $dir = "lab-3/Task 3/categories/$category";
                $fileNames = scandir($dir, SCANDIR_SORT_ASCENDING);
                foreach ($fileNames as $fileName) {
                    if ($fileName !== '.' && $fileName !== '..') {
                        echo '<tr>';
                        $filePath = $dir . "/" . $fileName;
                        $file = fopen($filePath, "r");
                        if ($file) {
                            $fileData = file($filePath);
                            foreach ($fileData as $data) {
                                $values = explode(":", $data);
                                echo "<td>" . $values[1] . "</td>";
                            }
                            fclose($file);
                        }
                        echo '</tr>';
                    }
                }
            }
            ?>
            </tbody>
    </div>
    <a href="index.php"><h2>Return back</h2></a>
    </body>
    </html>