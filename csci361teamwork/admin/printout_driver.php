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
$sql = "SELECT * FROM driver";
$result = $mysqli->query($sql);

// Create new PDF document
$pdf = new TCPDF();

// Set document information
$pdf->SetAuthor('Group1');
$pdf->SetTitle('Drivers PDF');

// Add a page
$pdf->AddPage();

// Set table content
$html = '<table border="1">
            <tr>
                <th>Driver ID</th>
                <th>Gov ID</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Middle name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>License</th>
                <th>Job</th>
                <th>Address</th>
            </tr>';

// Fetching data and adding to the HTML table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>
                    <td>' . $row['driver_id'] . '</td>
                    <td>' . $row['government_id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['surname'] . '</td>
                    <td>' . $row['middle_name'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['driving_license_code'] . '</td>
                    <td>' . $row['job'] . '</td>
                    <td>' . $row['address'] . '</td>
                 </tr>';
        // Add more columns as needed
    }
}

$html .= '</table>';

// Output the HTML content as PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output PDF as a file or inline display
$pdf->Output('drivers_table.pdf', 'D'); // 'D' will force download, use 'I' for inline display

// Close database connection
$mysqli->close();
?>