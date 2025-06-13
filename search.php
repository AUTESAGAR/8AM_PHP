<?php
    $conn = mysqli_connect("localhost", "root", "", "trading");
    $searchText = $_POST['search_data']; // "A"
    $filteredResults = [];
    $sql = "SELECT * FROM `courses` WHERE `title` LIKE '%" . $searchText . "%'";
    $run = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_assoc($run)) {
        $filteredResults[] = $data['title'];
    }
    if (!empty($filteredResults)) {
        foreach ($filteredResults as $result) {
            echo "<p><a href='singlePage.php?title=$result'>" . $result . "</a></p>";
        }
    } else {
        echo "<p>No results found</p>";
    }
?>