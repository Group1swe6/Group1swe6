<?php
// Include TCPDF library
require_once('../tcpdf/tcpdf.php');

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch data from your table
$sql = "SELECT * FROM assignments";
$result = $mysqli->query($sql);

// Create new PDF document
$pdf = new TCPDF();

// Set document information
$pdf->SetAuthor('Group1');
$pdf->SetTitle('Assignments PDF');

// Add a page
$pdf->AddPage();

// Set table content
$html = '<table border="1">
            <tr>
                <th>Assignment ID</th>
                <th>Driver ID</th>
                <th>Vehicle ID</th>
            </tr>';

// Fetching data and adding to the HTML table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>
                    <td>' . $row['assignment_id'] . '</td>
                    <td>' . $row['driver_id'] . '</td>
                    <td>' . $row['vehicle_id'] . '</td>
                 </tr>';
        // Add more columns as needed
    }
}

$html .= '</table>';

// Output the HTML content as PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output PDF as a file or inline display
$pdf->Output('assignments_table.pdf', 'D'); // 'D' will force download, use 'I' for inline display

// Close database connection
$mysqli->close();
?>