<?php
include_once "config.php";

// Query to get terminal count grouped by type
$type_query = "SELECT terminal_type, COUNT(*) as count FROM terminals GROUP BY terminal_type";
$type_result = mysqli_query($conn, $type_query);

// Query to get terminal count grouped by status
$status_query = "SELECT status, COUNT(*) as count FROM terminals GROUP BY status";
$status_result = mysqli_query($conn, $status_query);

// Create a CSV file
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="pos_terminal_report.csv"');

$output = fopen('php://output', 'w');

// Write header for terminal count by type
fputcsv($output, ['Terminal Type', 'Count']);

// Write data for terminal count by type
while ($row = mysqli_fetch_assoc($type_result)) {
    fputcsv($output, [$row['terminal_type'], $row['count']]);
}

// Write a separator
fputcsv($output, []); // Blank line

// Write header for terminal count by status
fputcsv($output, ['Status', 'Count']);

// Write data for terminal count by status
while ($row = mysqli_fetch_assoc($status_result)) {
    fputcsv($output, [$row['status'], $row['count']]);
}

fclose($output);
exit();
?>
