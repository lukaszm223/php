
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


while($row = mysqli_fetch_assoc($result)){

    $user_id = $_row['user_id'];
    $title = $_row['title'];
    $subject = $_row['subject'];
    $description = $_row['description'];
    $due_date = $_row['due_date'];
    $first_name = $_row['first_name'];
    $last_name = $_row['last_name'];
    $email = $_row['email'];
    $student_index = $_row['student_index'];
    

    echo "
    <div>
      <table>
        <tr>
            <th>user_id</th>
            <th>title</th>
            <th>subject</th>
        </tr>
        <tr>
            <td>$user_id</td>
            <td>$title</td>
            <td>$subject</td>
        </tr>
     </table>
    </div>
    ";
    header("Location: ../index.php");
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