
<?php
$conn = mysqli_connect("localhost", "root", "", "php_practice");

$user_id = isset($_GET['user_id']) ? intval($_GET['user_id']) : 1;

if ($user_id <= 0) {
    echo "<p>No user selected. Please go back and choose a user.</p>";
    exit;
}

$sql = "SELECT u.id AS user_id, u.first_name, u.last_name, u.email, u.student_index, e.title, e.subject, e.description, e.due_date, e.status
        FROM users u
        LEFT JOIN exercises e ON u.id = e.user_id
        WHERE u.id = $user_id";

$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)){

    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $student_index = $row['student_index'];
    $user_id = $row['user_id'];
    $title = $row['title'];
    $description = $row['description'];
    $subject = $row['subject'];
    $due_date = $row['due_date'];
    

    echo "
    <div>
      <table>
        <tr1>
            <th>imie: $first_name |||</th>
            <th>nazwisko: $last_name |||</th>
            <th>email: $email |||</th>
            <th>index: $student_index |||</th>
        </tr>s
      </table>
      <table>  
        <tr>
            <th>id: $user_id |||</th>
            <th>title: $title |||</th>
            <th>subject: $subject |||</th>
            <th>date: $due_date |||</th>
        </tr>
     </table>
    </div>
    ";
}
?>