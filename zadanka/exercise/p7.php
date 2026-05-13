
<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

if ($user_id <= 0) {
    echo "<p>No user selected. Please go back and choose a user.</p>";
    exit;
}

$sql = "SELECT u.id AS user_id, u.first_name, u.last_name, u.email, u.student_index, e.title, e.subject, e.description, e.due_date, e.status
        FROM users u
        LEFT JOIN exercises e ON u.id = e.user_id
        WHERE u.id = $user_id";

$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}

$rows = mysqli_fetch_assoc($result, MYSQLI_ASSOC);

while($row = mysqli_fetch_assoc($result)){

    $user_id = $_POST['user_id'];
    $title = $_POST['title'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $student_index = $_POST['student_index'];
    
    $id = $row['id'];

    echo "
    <div>
        <h3>Id użytkownika: $user_id</h3>
        <p>Wiek użytkownika: $title</p>
        <label for='zgoda'>
            Czy użytkownik wyraził zgodę:
        <input type='text' id='zgoda' disabled value=$subject>
     </label>
    </div>
    ";
}

$user = $rows[0];
$hasExercises = false;
foreach ($rows as $row) {
    if (!empty($row['title'])) {
        $hasExercises = true;
        break;
    }
}
?>
