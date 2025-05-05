<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json; charset=UTF-8');
mb_internal_encoding('UTF-8');

file_put_contents('debug.log', "Script started at " . date('Y-m-d H:i:s') . "\n", FILE_APPEND);

$host = 'localhost';
$dbname = 'travel_website';
$username = 'root';
$password = '12345';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    $error = "Connection failed: " . $conn->connect_error;
    file_put_contents('debug.log', "$error\n", FILE_APPEND);
    echo json_encode(['error' => $error]);
    exit;
}
$conn->set_charset("utf8mb4");

file_put_contents('debug.log', "Database connected successfully\n", FILE_APPEND);

$result = $conn->query("SHOW TABLES LIKE 'tours'");
if ($result->num_rows == 0) {
    $error = "Table 'tours' does not exist";
    file_put_contents('debug.log', "$error\n", FILE_APPEND);
    echo json_encode(['error' => $error]);
    exit;
}

$destination = isset($_GET['destination']) ? trim($_GET['destination']) : '';
$tourType = isset($_GET['tourType']) ? trim($_GET['tourType']) : '';
$departureDate = isset($_GET['departureDate']) ? trim($_GET['departureDate']) : '';
$guests = isset($_GET['guests']) ? (int)$_GET['guests'] : 0;

file_put_contents('debug.log', "Raw Params: destination='$destination', tourType='$tourType', departureDate='$departureDate', guests='$guests'\n", FILE_APPEND);

if (empty($destination) || empty($tourType) || empty($departureDate)) {
    file_put_contents('debug.log', "Invalid or missing parameters\n", FILE_APPEND);
    echo json_encode([]);
    exit;
}

$normalizedDate = '';
if (preg_match('/^(\d{4})-(\d{2})-(\d{2})$/', $departureDate, $matches)) {
    $normalizedDate = "$matches[1]-$matches[2]-$matches[3]";
} elseif (preg_match('/^(\d{2})\/(\d{2})\/(\d{4})$/', $departureDate, $matches)) {
    $normalizedDate = "$matches[3]-$matches[2]-$matches[1]";
} else {
    file_put_contents('debug.log', "Invalid date format: '$departureDate'\n", FILE_APPEND);
    echo json_encode([]);
    exit;
}
$departureDate = $normalizedDate;

file_put_contents('debug.log', "Normalized Params: destination='$destination', tourType='$tourType', departureDate='$departureDate', guests='$guests'\n", FILE_APPEND);

$sql = "SELECT * FROM tours WHERE destination = ? AND tour_type = ? AND DATE(departure_date) = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    $error = "Prepare failed: " . $conn->error;
    file_put_contents('debug.log', "$error\n", FILE_APPEND);
    echo json_encode(['error' => $error]);
    exit;
}

$stmt->bind_param('sss', $destination, $tourType, $departureDate);
if (!$stmt->execute()) {
    $error = "Execute failed: " . $stmt->error;
    file_put_contents('debug.log', "$error\n", FILE_APPEND);
    echo json_encode(['error' => $error]);
    exit;
}

$result = $stmt->get_result();
$tours = $result->fetch_all(MYSQLI_ASSOC);

file_put_contents('debug.log', "Query Result: " . json_encode($tours, JSON_UNESCAPED_UNICODE) . "\n\n", FILE_APPEND);

$stmt->close();
$conn->close();

echo json_encode($tours);
?>