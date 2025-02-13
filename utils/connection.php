<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "video_blog";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch recipes
$sqlRecipes = "SELECT * FROM recipes";
$resultRecipes = $conn->query($sqlRecipes);

$recipes = [];
if ($resultRecipes && $resultRecipes->num_rows > 0) {
    while ($row = $resultRecipes->fetch_assoc()) {
        $recipes[] = $row;
    }
}

// Fetch stories
$sqlStories = "SELECT * FROM stories";
$resultsStories = $conn->query($sqlStories);

$stories = [];
if ($resultsStories && $resultsStories->num_rows > 0) {
    while ($row = $resultsStories->fetch_assoc()) {
        $stories[] = $row;
    }
}