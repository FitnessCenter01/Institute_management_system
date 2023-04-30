<?php
include "db.php";


$deptid = $_GET['deptid'];




// Include the TCPDF library
require_once('tcpdf/tcpdf.php');

// Create a new TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
$fetch=mysqli_query($con,"select * from `deptdetails` where `department_id`='$deptid'");
$rowdb=mysqli_fetch_array($fetch);

// Set the document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($rowdb['hod_name']);
$pdf->SetTitle('Dept Report');

$fetch=mysqli_query($con,"select * from `deptdetails` where `department_id`='$deptid'");
$rowdb=mysqli_fetch_array($fetch);

// Set the header data
$header_data = array(
    '                        ',$rowdb['department_name']
);
$pdf->setHeaderData('', 0, implode("\n", $header_data), '');

// Set the header font
$pdf->setHeaderFont(array('helvetica', 'B', 16));

// Set the default font
$pdf->SetFont('helvetica', '', 12);

// Add a page
$pdf->AddPage();

// Define the table data
$table_data = array(
    'Department Name' => $rowdb['department_name'],
    'Department ID' => $rowdb['department_id'],
    'Year of commencement' => $rowdb['year_of_commencement'],
    'AICTE Approved Intake' => $rowdb['aicte_approved_intake'],
    'Duration (in year)' => $rowdb['duration'],
    'NBA Accredation Status' => $rowdb['nba_accredation_status'],
    'Accredation date' => $rowdb['nba_accredation_date'],
    'No of labs' => $rowdb['no_of_labs'],
    'No of classrooms' => $rowdb['no_of_classroom'],
    'No of tutorial rooms' => $rowdb['no_of_tutorial_rooms'],
    'No of seminar halls' => $rowdb['no_of_seminar_hall'],
    'Departmental library' => $rowdb['departmental_library'],
    'Student-computer ratio' => $rowdb['student_comp_ratio'],
    'HOD Name' => $rowdb['hod_name'],
    'HOD qualification' => $rowdb['hod_qualification'],
    'HOD charge' => $rowdb['hod_charge'],
    'Total Students in first year' => $rowdb['total_stud_in_first_yr'],
    'Total Students in second year' => $rowdb['total_stud_in_second_yr'],
    'Total Students in final year' => $rowdb['total_stud_in_final_yr'],
    'Student Faculty Ratio(SFR-2019-20)' => $rowdb['student_faculty_ratio'],
    'Number of Regular Faculties in Department' => $rowdb['no_of_regular_faculties'],
    'Number of vacant posts for faculty' => $rowdb['no_of_vacant_post_for_faculty'],
    'Number of vacant posts for HOD' => $rowdb['No_of_vacant_post_for_hod'],
    'Number of PG./PhD faculties' => $rowdb['no_of_pg_phd_faculties'],
    'Number of Lab Assistants' => $rowdb['no_of_lab_assistants'],
    'Number of students passed in First class in final year' => $rowdb['first_class_students_in_final_year'],
    'Result of last final year (% passing)' => $rowdb['result_of_last_final_year_per_pass'],
    'Average result of final year of last three years (% passing)' => $rowdb['average_result_last_three_year_final_year'],
    'Number of Industry oriented/ Application type projects' => $rowdb['no_of_industry_oriented_projects'],
    'Number of Sponsored projects' => $rowdb['no_of_sponsered_project']
    




);

// Define the table header
$table_header = array('', '');

// Create the table
$html = '<center><table border="0" cellpadding="5">';
$html .= '<tr>';
foreach ($table_header as $header) {
    $html .= '<th>' . $header . '</th>';
}
$html .= '</tr>';
foreach ($table_data as $header => $data) {
    $html .= '<tr>';
    $html .= '<td><strong>' . $header . '</strong></td>';
    $html .= '<td>' . $data . '</td>';
    $html .= '</tr>';
}
$html .= '</table></center>';

// Output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// Output the PDF as a download
$pdf->Output($rowdb['department_name'].'.pdf', 'D');


?>