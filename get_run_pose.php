<?php
include 'db.php';
$result = $conn->query("SELECT * FROM poses");

echo "<table><tr><th>#</th><th>Motor 1</th><th>Motor 2</th><th>Motor 3</th><th>Motor 4</th><th>Motor 5</th><th>Motor 6</th><th>Action</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['motor1']}</td>
        <td>{$row['motor2']}</td>
        <td>{$row['motor3']}</td>
        <td>{$row['motor4']}</td>
        <td>{$row['motor5']}</td>
        <td>{$row['motor6']}</td>
        <td>
            <button onclick='loadPose(".json_encode($row).")'>Load</button>
            <button onclick='removePose({$row["id"]})'>Remove</button>
        </td>
    </tr>";
}
echo "</table>";
$conn->close();
?>

<script>
function loadPose(pose) {
    for (let i = 1; i <= 6; i++) {
        document.getElementById(`motor${i}`).value = pose[`motor${i}`];
        document.getElementById(`val${i}`).textContent = pose[`motor${i}`];
    }
}

function removePose(id) {
    fetch('remove_pose.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id })
    }).then(() => location.reload());
}
</script>