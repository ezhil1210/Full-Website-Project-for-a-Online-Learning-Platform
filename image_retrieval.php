<?php
// Database connection details
$servername = "sql12.freesqldatabase.com";
$username = "sql12653514";
$password = "Dng6EptZbA";
$database = "sql12653514";

// Create a database connection
$db = mysqli_connect($servername, $username, $password, $database);

// Check the connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Filename of the image you want to retrieve
$filename = 'bg.jpg';

// ID of the image you want to retrieve
$imageId = 3;

// Retrieve the image data based on the filename and ID
$query = "SELECT image_data FROM image WHERE id = $imageId AND image_data = '$filename'";
$result = mysqli_query($db, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($db));
}

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    // Output the image data
    header("Content-Type: image/jpeg"); // Adjust the content type based on your image format
    echo $row['image_data'];
} else {
    echo "Image not found";
}

// Close the database connection
mysqli_close($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeuralTransformers .AI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface|Poppins">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <iframe
src="https://www.chatbase.co/chatbot-iframe/-TUCZ01wA1lAdJC2Q3JKx"
width="100%"
style="height: 100%; min-height: 700px"
frameborder="0"
></iframe>

    <script>
window.embeddedChatbotConfig = {
chatbotId: "-TUCZ01wA1lAdJC2Q3JKx",
domain: "www.chatbase.co"
}
</script>
<script
src="https://www.chatbase.co/embed.min.js"
chatbotId="-TUCZ01wA1lAdJC2Q3JKx"
domain="www.chatbase.co"
defer>
</script>

</head>
<body>
<header>
    <img src="icon.png">
         <a href="#" class="logo"></a>
    </img>
    <nav class="navbar">
        
      <a href="aboutus.html">About us</a>
      <a href="courses.html">Courses</a>
      <a href="#products">Products</a>
      <a href="services.html">Services</a>
      <a href="login.html">Login</a>
      <a href="register.html">Sign Up</a>
    </nav>

</header>

<section class="home" id="home">
      
<div>
 <div>
    <div class="content">
        <p>It's time to connect with</p>
        <span class="heading">Neural Transformers .AI </span>
        
    </div>
 </div>
    <div>
        <a href="http://localhost/16.10/register.html" class="btn">connect</a>
    </div>

    
    <br> <br> 
</section>
<h1 class="welcome-div1">Welcome to NeuralTransformers.ai!</h1>
<div class="welcome-div">
    <p>We are a leading product-based company specializing in cutting-edge technologies such as artificial intelligence and natural language processing. Our innovative solutions include chatbots, OCR (Optical Character Recognition), and document summarizers. In addition, we offer comprehensive training programs in data science, data analysis, cloud, and .NET, along with placement and internship opportunities. Explore our website to discover how our products and services can revolutionize your business.</p>
</div>
<br> <br> 

<h1 class="welcome-div1">products</h1>
<br>
<div class="container">
    <div class="product-container">
        <a href="#" class="product-box">
          <img src="image_retrieval.php" alt="Image" >
        <h2>OCR</h2>
      </a>
      
      <a href="product3.html" class="product-box">
        <img src="chatbothome.webp" alt="Chatbots">
        <h2>Chatbots</h2>
      </a>
      
      <a href="product3.html" class="product-box">
        <img src="summaryhome.jpg" alt="Document summarizer">
        <h2>Document summarizer</h2>
      </a>
    </div>
  </div> 
  <br> <br> <br> 
  <h1 class="welcome-div1">Gallery</h1>
  <br>
  <div class="slideshow-container">
    <div class="slide">
      <div class="rounded-div">
        <img src="./images/slideshow1.jpg" alt="Slideshow 1">
      </div>
    </div>
    <div class="slide">
      <div class="rounded-div">
        <img src="./images/slideshow2.jpg" alt="Slideshow 2">
      </div>
    </div>
    <div class="slide">
      <div class="rounded-div">
        <img src="./images/slideshow3.jpg" alt="Slideshow 3">
      </div>
    </div>
    <div class="slide">
      <div class="rounded-div">
        <img src="./images/slideshow4.jpg" alt="Slideshow 4">
      </div>
    </div>
  </div>
  <br> <br>
  <h1 class="welcome-div1">Courses Offered</h1>
  <div class="para">
    <p>At NeuralTransformers.ai, we provide extensive and real-time training programs designed to
      equip individuals with the skills and knowledge needed to excel in today's competitive job
      market. Our programs cover a wide range of domains, including Data Science, Data
      Analysis, Full Stack .NET Development, Python, SQL, AZ104, AZ400, and more. With a
      focus on practical learning and hands-on experience, our training programs offer:
      </p>
      
      <a href="courses.html" class="button">Explore</a>
  </div>
  <div class="programs">
    <a href="courses.html#data">
    <div class="program">
        <img src="./images/data.jpg" alt="Data Science">
        
        <p><b>Data Science:</p></b>
    </a>
    </div>
    <a href="courses.html#analysis">
    <div class="program">
        <img src="./images/analysis.jpg" alt="Data Analysis">
        <p><b>Data Analysis:</p></b>
      </a>
    </div>
    <a href="courses.html#full">
    <div class="program">
        <img src="./images/full.jpg" alt="Full Stack .NET Development">
        <p><b>Full Stack .NET Development:</p></b>
    </a>
    </div>
</div>
<a href="courses.html#python">
<div class="programs">
  <div class="program">
      <img src="./images/python.jpg" alt="Data Science">
      <p><b>Python:</p></b>
    </a>
  </div>
  <a href="courses.html#sql">
  <div class="program">
      <img src="./images/sql.png" alt="Data Analysis">
      <p><b>SQL:</p></b>
  </a>
  </div>
  <a href="courses.html#azure">
  <div class="program">
      <img src="./images/azure.png" alt="Full Stack .NET Development">
      <p><b>Azure Certifications (AZ104, AZ400):</p></b>
  </a>
  </div>

</div>







  <footer class="black-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="quick-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSepkEbn49yNjmrggwbAQSjxBtAWPKDNTICRFsqIEeZDspxqWw/viewform">
                            <i class="fas fa-link"></i> Course Registration</a></li>
                        <li><a href="mailto:admin@neuraltransformers.com"><i class="fas fa-envelope"></i> Email: admin@neuraltransformers.com</a></li>
                        <li><a href="https://maps.app.goo.gl/GwSZXvcvtb2ZDRQ56"><i class="fas fa-map-marker-alt"></i> Address: S-7, 15th Avenue, 3rd Floor,<br> Jawaharlal Nehru Road, Ashok Nagar, Chennai - 600083</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="connect-with-us">
                    <h4>Connect with us:</h4>
                    <div class="social-icons">
                        <a href="https://www.instagram.com/transformers_ai/" target="_blank">
                            <i class='bx bxl-instagram'></i>
                        </a>
                        <a href="https://www.youtube.com/@Transformers_ai" target="_blank">
                            <i class='bx bxl-youtube'></i>
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=100091802811772&mibextid=ZbWKwL" target="_blank">
                            <i class='bx bxl-facebook'></i>
                        </a>
                        <a href="https://twitter.com/Transformers_ai" target="_blank">
                            <i class='bx bxl-twitter'></i>
                        </a>
                        <a href="linkedin.com/company/transformers-ai/" target="_blank">
                            <i class='bx bxl-linkedin'></i>
                        </a>
                    </div>
                    <div class="contact-info">
                        <p><i class="fas fa-phone"></i> Contact Us: 9342153224, 6369434981</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 Neural Transformers_ai All Rights Reserved.<br>Website developed by: Kavin, Prajan, Ezhil</p>
    </div>
</footer>



</body>
</html>
