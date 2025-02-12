<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuizMaster</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/lucide-react@0.7.0/dist/lucide-react.min.css" rel="stylesheet">
  <head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

</head>
<body class="bg-gradient-to-br from-blue-50 to-green-50">
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
            <button class="bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors" > <a href="login.php">Sign In</a></button>
      </nav>
      <button class="md:hidden" onClick="toggleMenu()">
        <span>Menu</span>
      </button>
    </div>
  </div>
</header>


  <main class="pt-24 pb-16">
    <section class="text-center px-4 mb-20">
      <h1 class="text-4xl md:text-5xl font-bold mb-6 bg-gradient-to-r from-blue-600 to-green-500 bg-clip-text text-transparent">
        Test Your Knowledge
      </h1>
      <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">
        Challenge yourself with our interactive quizzes across various subjects. Learn, compete, and track your progress.
      </p>
      <a href="login.php"><button class="bg-blue-600 text-white px-8 py-3 rounded-full hover:bg-blue-700 transition-colors inline-flex items-center gap-2">
        Start Quiz
     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
          <path d="M10.854 7.146a.5.5 0 0 1 0 .708L7.707 10H12.5a.5.5 0 0 1 0 1H7.707l3.147 2.146a.5.5 0 0 1-.708.707l-4-4a.5.5 0 0 1 0-.707l4-4a.5.5 0 0 1 .708 0z"/>
        </svg>
      </button></a>
    </section>

    <section id="quiz-categories" class="py-16 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4 sm:px-6">
    <h2 class="text-3xl font-semibold text-center mb-12">Popular Categories</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Category 1: DSA -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 cursor-pointer group">
        <div class="flex items-start space-x-4">
          <div class="p-3 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
            <i class="fas fa-code" style="font-size: 30px; color: #4b8df8;"></i> <!-- Icon for DSA -->
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-1">DSA</h3>
            <p class="text-sm text-gray-500">24 Quizzes</p>
          </div>
        </div>
      </div>
      
      <!-- Category 2: OS -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 cursor-pointer group">
        <div class="flex items-start space-x-4">
          <div class="p-3 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
            <i class="fas fa-microchip" style="font-size: 30px; color: #ff8c00;"></i> <!-- Icon for OS -->
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-1">Operating Systems</h3>
            <p class="text-sm text-gray-500">18 Quizzes</p>
          </div>
        </div>
      </div>

      <!-- Category 3: DBMS -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 cursor-pointer group">
        <div class="flex items-start space-x-4">
          <div class="p-3 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
            <i class="fas fa-database" style="font-size: 30px; color: #228B22;"></i> <!-- Icon for DBMS -->
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-1">DBMS</h3>
            <p class="text-sm text-gray-500">15 Quizzes</p>
          </div>
        </div>
      </div>

      <!-- Category 4: Python -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 cursor-pointer group">
        <div class="flex items-start space-x-4">
          <div class="p-3 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
            <i class="fas fa-python" style="font-size: 30px; color: #306998;"></i> <!-- Icon for Python -->
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-1">Python</h3>
            <p class="text-sm text-gray-500">32 Quizzes</p>
          </div>
        </div>
      </div>

      <!-- Category 5: DCCN -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 cursor-pointer group">
        <div class="flex items-start space-x-4">
          <div class="p-3 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
            <i class="fas fa-network-wired" style="font-size: 30px; color: #004d7a;"></i> <!-- Icon for DCCN -->
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-1">DCCN</h3>
            <p class="text-sm text-gray-500">20 Quizzes</p>
          </div>
        </div>
      </div>

      <!-- Category 6: Android Studio -->
      <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-all duration-300 border border-gray-100 cursor-pointer group">
        <div class="flex items-start space-x-4">
          <div class="p-3 bg-blue-50 rounded-lg group-hover:bg-blue-100 transition-colors">
            <i class="fas fa-android" style="font-size: 30px; color: #3ddc84;"></i> <!-- Icon for Android Studio -->
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-1">Android Studio</h3>
            <p class="text-sm text-gray-500">22 Quizzes</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <!-- Main Content -->

<!-- Footer Section -->
<!-- Footer Section -->
<footer style="background-color: #34495E; color: white; padding: 40px 20px; text-align: center; font-family: Arial, sans-serif;">
  <!-- Container for content -->
  <div style="max-width: 1200px; margin: 0 auto;">
  
    <!-- About Section -->
    <div style="margin-bottom: 30px;">
      <h5 style="font-weight: bold; text-transform: uppercase; font-size: 20px; letter-spacing: 1px; margin-bottom: 15px;">About Quiz</h5>
      <p style="font-size: 14px; color: #BDC3C7; line-height: 1.6; max-width: 800px; margin: 0 auto;">
        Online quizzes are a fun and interactive way to learn and test your knowledge across various subjects. 
        Whether you're a student, professional, or just looking for fun, enjoy a wide variety of quizzes available for free.
      </p>
    </div>
  
    <!-- Contact Section -->
    <div style="margin-bottom: 30px;">
      <h5 style="font-weight: bold; text-transform: uppercase; font-size: 20px; letter-spacing: 1px; margin-bottom: 15px;">Contact Us</h5>
      <p style="font-size: 14px; color: #BDC3C7; margin-bottom: 10px; line-height: 1.6;">
        <i class="fa fa-map-marker" aria-hidden="true" style="margin-right: 10px;"></i> 
        GGP Amethi, Uttar Pradesh, India
      </p>
      <p style="font-size: 14px; color: #BDC3C7; margin-bottom: 10px; line-height: 1.6;">
        <i class="fa fa-phone" aria-hidden="true" style="margin-right: 10px;"></i> 
        +91-8854673425
      </p>
      <p style="font-size: 14px; color: #BDC3C7; margin-bottom: 10px; line-height: 1.6;">
        <i class="fa fa-envelope" aria-hidden="true" style="margin-right: 10px;"></i>
        <a href="mailto:info@ggpamethi.in" style="color: #A8D0A2; text-decoration: none;">info@ggpamethi.in</a>
      </p>
    </div>
  
    <!-- Footer Bottom -->
    <div>
      <p style="font-size: 12px; color: #BDC3C7; margin-top: 20px; font-weight: 300;">
        &copy; 2021 GGP Amethi | All rights reserved
      </p>
    </div>
  
  </div>
</footer>
</body>
</html>
