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
$sql = "SELECT * FROM fuelingperson";
$result = $mysqli->query($sql);

// Create new PDF document
$pdf = new TCPDF();

// Set document information
$pdf->SetAuthor('Group1');
$pdf->SetTitle('Fueling PDF');

// Add a page
$pdf->AddPage();

// Set table content
$html = '<table border="1">
            <tr>
                <th>Fuel Person ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Fuel Job ID</th>
            </tr>';

// Fetching data and adding to the HTML table
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '<tr>
                    <td>' . $row['fuel_person_id'] . '</td>
                    <td>' . $row['name'] . '</td>
                    <td>' . $row['phone'] . '</td>
                    <td>' . $row['email'] . '</td>
                    <td>' . $row['fuel_job_id'] . '</td>
                 </tr>';
        // Add more columns as needed
    }
}

$html .= '</table>';

// Output the HTML content as PDF
$pdf->writeHTML($html, true, false, true, false, '');

// Output PDF as a file or inline display
$pdf->Output('fuel_table.pdf', 'D'); // 'D' will force download, use 'I' for inline display

// Close database connection
$mysqli->close();
?>