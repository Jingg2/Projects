<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wattpaddb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $language = $_POST['language'];
    $rating = $_POST['rating'];

    // Initialize the variable for image binary data
    $coverImageData = null;

    $status = $statusMsg = ''; 
    if(isset($_POST["submit"])){ 
        $status = 'error'; 
        if(!empty($_FILES["image"]["name"])) { 
            // Get file info 
            $fileName = basename($_FILES["image"]["name"]); 
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
             
            // Allow certain file formats 
            $allowTypes = array('jpg','png','jpeg','gif'); 
            if(in_array($fileType, $allowTypes)){ 
                $image = $_FILES['image']['tmp_name']; 
                $imgContent = addslashes(file_get_contents($image)); 
             
                // Insert image content into database 
              //  $insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
                 
                if($insert){ 
                    $status = 'success'; 
                    $statusMsg = "File uploaded successfully."; 
                }else{ 
                    $statusMsg = "File upload failed, please try again."; 
                }  
            }else{ 
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
            } 
        }else{ 
            $statusMsg = 'Please select an image file to upload.'; 
        } 
    } 
     
    // Prepare SQL query to insert data into the database
    $stmt = $conn->prepare("INSERT INTO stories (title, description, category, cover_image, language, rating) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Bind parameters
    $stmt->bind_param("ssssss", $title, $description, $category, $language, $rating,   $imgContent );
    
    // Send the binary data to the database
    //$stmt->send_long_data(5, $coverImageData); // column 5 corresponds to the `cover_image` BLOB column

    // Execute the query
    if ($stmt->execute()) {
        echo "Story saved successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>
        