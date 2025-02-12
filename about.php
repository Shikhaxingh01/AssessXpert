<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - QuizMaster</title>
  
  <!-- Link to external CSS for Tailwind or custom styles -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for About Us Page */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f7fc;
    }

    header {
      background-color: #2D6A4F;
      backdrop-filter: blur(10px);
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 50;
      border-bottom: 1px solid #E5E5E5;
    }

    header .max-w-7xl {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1rem;
    }

    .about-section {
      padding: 80px 20px;
      background-color: #fff;
      text-align: center;
    }

    .about-title {
      font-size: 2rem;
      font-weight: 600;
      color: #2D6A4F;
    }

    .about-content {
      font-size: 1.2rem;
      color: #333;
      margin-top: 20px;
      line-height: 1.6;
      max-width: 900px;
      margin: 0 auto;
    }

    .team-section {
      padding: 60px 20px;
      background-color: #F9FAFB;
      text-align: center;
    }

    .team-title {
      font-size: 2rem;
      font-weight: 600;
      color: #2D6A4F;
    }

    .team-card {
      display: flex;
      justify-content: center;
      margin-top: 30px;
      flex-wrap: wrap;
    }

    .team-member {
      background-color: #fff;
      border-radius: 10px;
      width: 250px;
      margin: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
    }

    .team-member img {
      width: 100%;
      border-radius: 50%;
      height: 200px;
      object-fit: cover;
    }

    .team-member h3 {
      margin-top: 10px;
      font-size: 1.2rem;
      color: #2D6A4F;
    }

    .team-member p {
      font-size: 1rem;
      color: #666;
    }

    footer {
      background-color: #34495E;
      color: white;
      padding: 40px 20px;
      text-align: center;
      font-family: Arial, sans-serif;
    }

    footer .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    footer h5 {
      font-weight: bold;
      text-transform: uppercase;
      font-size: 20px;
      letter-spacing: 1px;
      margin-bottom: 15px;
    }

    footer p {
      font-size: 14px;
      color: #BDC3C7;
      line-height: 1.6;
      margin-bottom: 10px;
    }

    footer a {
      color: #A8D0A2;
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    footer .footer-bottom {
      font-size: 12px;
      color: #BDC3C7;
      margin-top: 20px;
      font-weight: 300;
    }
  </style>
</head>
<body>

<!-- Header Section -->
<header class="w-full bg-green-700 backdrop-blur-sm fixed top-0 z-50 border-b border-gray-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center py-4">
      <div class="flex items-center">
        <span class="text-2xl font-bold text-white">QuizMaster</span>
      </div>
      <nav class="hidden md:flex items-center gap-8">
      <a href="index.php" class="text-white hover:text-blue-300 transition-colors">Home</a>
          <a href="contact.php" class="text-white hover:text-blue-300 transition-colors">Contact Us</a>
          <a href="about.php" class="text-white hover:text-blue-300 transition-colors">About Us</a>
           <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors"> 
          <a href="login.php">Sign In</a>
        </button>
      </nav>
      <button class="md:hidden">
        <span>Menu</span>
      </button>
    </div>
  </div>
</header>

<!-- About Us Section -->
<div class="about-section">
  <h2 class="about-title">About Us</h2>
  <hr><br>
  <div class="about-content">
    <p>QuizMaster was created during the challenging times of the COVID-19 pandemic, when educational institutions around the world had to shift to online learning. In our college, our teachers used internal assessment marks based on various tests, but there was a challenge in conducting quizzes and tests due to the closure of the college.</p>

    <p>This is when <span class="highlight">Shikha Singh</span> and her team of four talented girls came together to solve this problem. We developed QuizMaster, an online platform that enables teachers to create and manage quizzes for students easily. It provided a seamless way to continue assessments and keep students engaged while being apart.</p>

    <p>QuizMaster not only helped our teachers in conducting quizzes but also made the assessment process transparent and easier for students. It became a bridge for both students and teachers during a difficult time, enabling the continuation of learning and evaluation remotely.</p>

    <p>Our team worked tirelessly to ensure that the platform was user-friendly, intuitive, and accessible to all. This project stands as a testament to the power of collaboration, creativity, and problem-solving in the face of adversity.</p>

    <p>At QuizMaster, we are committed to helping educational institutions create interactive assessments, fostering better learning experiences for both students and educators.</p>
  </div>
</div>
<!-- Our Team Section -->
<div class="team-section">
  <h2 class="team-title">Meet Our Team</h2>
  <div class="team-card">
    <div class="team-member">
      <img src="content/images/team_member1.jpg" alt="Team Member 1">
      <h3>Shikha Singh(Lead)</h3>
      <p>Backend developer <br>
      DBManagement</p>
    </div>
    <div class="team-member">
      <img src="content/images/team_member2.jpg" alt="Team Member 2">
      <h3>Saumya Agrahari</h3>
      <p>Backend & file handling</p>
    </div>
    <div class="team-member">
      <img src="content/images/team_member2.jpg" alt="Team Member 2">
      <h3>Ankita Singh</h3>
      <p>Fullstack Developer</p>
    </div>
    <div class="team-member">
      <img src="content/images/team_member2.jpg" alt="Team Member 2">
      <h3>Nandini Tiwari</h3>
      <p>Frontend Developer</p>
    </div>
    <div class="team-member">
      <img src="content/images/team_member3.jpg" alt="Team Member 3">
      <h3>Divya Tiwari</h3>
      <p>Fullstack developer</p>
    </div>
  </div>
</div>

<!-- Footer Section -->
<footer>
  <div class="container">
    <!-- About Section -->
    <div style="margin-bottom: 30px;">
      <h5>About Quiz</h5>
      <p>Online quizzes are a fun and interactive way to learn and test your knowledge across various subjects. Whether you're a student, professional, or just looking for fun, enjoy a wide variety of quizzes available for free.</p>
    </div>

    <!-- Contact Section -->
    <div style="margin-bottom: 30px;">
      <h5>Contact Us</h5>
      <p><i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i> GGP Amethi, Uttar Pradesh, India</p>
      <p><i class="fa fa-phone" aria-hidden="true" style="margin-right: 10px;"></i> +91-8854673425</p>
      <p><i class="fa fa-envelope" aria-hidden="true" style="margin-right: 10px;"></i> <a href="mailto:info@ggpamethi.in">info@ggpamethi.in</a></p>
    </div>

    <!-- Footer Bottom -->
    <div>
      <p>&copy; 2025 QuizMaster | All rights reserved</p>
    </div>
  </div>
</footer>

</body>
</html>
