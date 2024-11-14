<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'cultivateHub');
$sql = "SELECT * FROM tbllandfiles";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Uploads files
if (isset($_POST['save'])) { // if save button on the form is clicked
    // name of the uploaded file
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = 'uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO tbllandfiles (name, size, downloads) VALUES ('$filename', $size, 0)";
            if (mysqli_query($conn, $sql)) {
				echo "<script type='text/javascript'> alert('file Uploaded Succesfully');
				document.location = 'http://localhost/cultivate/userhome.php'; </script>";
            }
        } else {
            echo "Failed to upload file.";
        }
    }
}
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM tbllandfiles WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'uploads/' . $file['name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE tbllandfiles SET downloads=$newCount WHERE id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}
 
 
 //view files
// Check if file ID parameter is set
if(isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // Fetch file details from the database
    $stmt = $pdo->prepare("SELECT * FROM tbllandfiles WHERE id=:id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $file = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if file exists
    if ($file) {
        // Set headers to force download
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $file['name'] . '"');
        header('Cache-Control: private, max-age=0, must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . strlen($file['file']));
        
        // Output PDF content
        echo $file['file'];
        exit;
    } else {
        echo "File not found.";
    }
}
?>
