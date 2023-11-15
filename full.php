<?php


// Create a database connection
$db = mysqli_connect('sql12.freesqldatabase.com', 'sql12653514', 'Dng6EptZbA', 'sql12653514');

// Check the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve the image data based on a unique identifier (e.g., ID)
$imageId = 1; // Change this to the appropriate ID for your image
$query = "SELECT filename FROM image WHERE id = $imageId";
$result = mysqli_query($db, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($db));
}

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Set the appropriate header to indicate that the response is an image
    header("Content-Type: image/jpg"); // Adjust the content type based on your image type

    // Output the image data from the database
    echo $row['image_data'];
} else {
    echo "Image not found";
}

// Close the database connection
mysqli_close($db);
?>