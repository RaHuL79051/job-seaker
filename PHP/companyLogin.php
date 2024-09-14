<?php
include('./db_connection.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $companyName = $_POST['companyName'];
    $companyEmail = $_POST['companyEmail'];
    $contactPerson = $_POST['contactPerson'];
    $contactPhone = $_POST['contactPhone'];
    $companyAddress = $_POST['companyAddress'];
    $companyWebsite = $_POST['companyWebsite'];
    $industryType = $_POST['industryType'];
    $companyDescription = $_POST['companyDescription'];
    $jobCategories = implode(",", $_POST['jobCategories']); // Handle multi-select
    $jobLocation = $_POST['jobLocation'];

if (!is_dir('uploads')) {
  mkdir('uploads', 0777, true);
}

// Check if file is uploaded and no errors occurred
if (isset($_FILES['companyLogo']) && $_FILES['companyLogo']['error'] == 0) {
  $companyLogo = $_FILES['companyLogo']['name'];
  $logoTemp = $_FILES['companyLogo']['tmp_name'];
  $logoFolder = "uploads/" . basename($companyLogo);
  $companyLogo = preg_replace("/[^a-zA-Z0-9\._-]/", "_", $_FILES['companyLogo']['name']);

  // Move the uploaded file to the 'uploads' directory
  if (move_uploaded_file($logoTemp, $logoFolder)) {
      echo "Logo uploaded successfully.";
  } else {
      echo "Failed to upload logo.";
  }
} else {
  echo "No file uploaded or an error occurred.";
}



    // Move the uploaded file to the 'uploads' directory
    if (move_uploaded_file($logoTemp, $logoFolder)) {
        echo "Logo uploaded successfully.";
    } else {
        echo "Failed to upload logo.";
    }

    // Agreement checkbox value
    $agreement = isset($_POST['agreement']) ? 1 : 0;

    // Prepare SQL query
    $sql = "INSERT INTO company_register (company_name, company_email, contact_person_name, contact_phone, company_address, company_website, industry_type, company_description, job_categories, job_location, company_logo, agreement, isVarified)
            VALUES ('$companyName', '$companyEmail', '$contactPerson', '$contactPhone', '$companyAddress', '$companyWebsite', '$industryType', '$companyDescription', '$jobCategories', '$jobLocation', '$companyLogo', '$agreement', '0')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "Application submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
