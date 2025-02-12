<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuizMaster</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/lucide-react@0.7.0/dist/lucide-react.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #ECF0F1;
      color: #34495E;
      height: 100vh; /* Full viewport height */
      display: flex;
      flex-direction: column;
    }

    /* Header Styles */
    header {
      background-color: #16a34a; /* Green color */
      backdrop-filter: blur(10px);
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 50;
      border-bottom: 1px solid #E5E7EB;
    }
    header .container {
      max-width: 7xl;
      margin: 0 auto;
      padding: 0 1rem;
    }
    header .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 0;
    }
    header .header-content .brand {
      font-size: 1.5rem;
      font-weight: bold;
      color: white;
    }
    header .header-content nav {
      display: flex;
      gap: 2rem;
    }
    header .header-content nav a {
      color: white;
      transition: color 0.3s;
    }
    header .header-content nav a:hover {
      color: #93C5FD; /* Light blue */
    }
    header .header-content button {
      background-color: #2563EB;
      color: white;
      padding: 0.5rem 1.5rem;
      border-radius: 9999px;
      border: none;
      transition: background-color 0.3s;
    }
    header .header-content button:hover {
      background-color: #1D4ED8; /* Darker blue */
    }
    header .menu-toggle {
      display: none;
    }

    /* Container for login form */
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: calc(100vh - 80px); /* Full viewport height minus header */
    }

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 100%;
      max-width: 400px; /* Max width of the login form */
    }

    .title {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #34495E;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      font-size: 14px;
      margin-bottom: 8px;
      color: #BDC3C7;
    }

    .input-group input,
    .input-group select {
      width: 100%;
      padding: 12px;
      font-size: 14px;
      border: 1px solid #BDC3C7;
      border-radius: 4px;
      outline: none;
      background-color: #ECF0F1;
      color: #34495E;
    }

    .input-group input:focus,
    .input-group select:focus {
      border-color: #16a34a; /* Green color */
      background-color: #fff;
    }

    .button {
      background-color: #16a34a;
      color: white;
      padding: 14px;
      font-size: 16px;
      width: 100%;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .button:hover {
      background-color: #15803d; /* Darker green */
    }

    .footer {
      text-align: center;
      font-size: 12px;
      margin-top: 30px;
      color: #BDC3C7;
    }

    .footer a {
      color: #16a34a;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    /* Mobile styles */
    @media (max-width: 768px) {
      header .header-content nav {
        display: none;
      }
      header .menu-toggle {
        display: block;
        font-size: 1.2rem;
        color: white;
        cursor: pointer;
      }
      header .menu-toggle.active {
        display: block;
      }
    }

    /* Mobile Menu Styles */
    .menu {
      display: none;
    }
    .menu.active {
      display: block;
      background-color: #16a34a;
      position: absolute;
      top: 60px;
      right: 0;
      left: 0;
      padding: 1rem;
      text-align: center;
    }
    .menu a {
      color: white;
      display: block;
      padding: 10px;
      transition: color 0.3s;
    }
    .menu a:hover {
      color: #93C5FD;
    }
  </style>
</head>

<body class="bg-gradient-to-br from-blue-50 to-green-50">

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
        <button class="md:hidden" onClick="toggleMenu()">
          <span>Menu</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Menu -->
  <div id="menu" class="menu">
    <a href="#">Home</a>
    <a href="#">Quizzes</a>
    <a href="#">Leaderboard</a>
    <a href="login.php">Sign In</a>
  </div>

 <br>
 <br>
 <br> <!-- Login Container -->
  <div class="login-container">
    <div class="container">
      <div class="title">Login</div>
      
      <form action="VALID.php" method="POST">
        <!-- Username Field -->
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="emai" placeholder="Enter your username" required>
        </div>
        
        <!-- Password Field -->
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="pass" placeholder="Enter your password" required>
        </div>
        
        <!-- User Type Dropdown -->
        <div class="input-group">
          <label for="user">User Type</label>
          <select class="form-control" name="user" id="user" required>
            <option value="admin">Admin</option>
            <option value="faculty">Faculty</option>
            <option value="student">Student</option>
          </select>
        </div>
        
        <!-- Login Button -->
        <button type="submit" class="button">Login</button>
      </form>
      
      <!-- Footer with links -->
      <div class="footer">
        <p>Don't have an account? <a href="#">Sign Up</a></p>
        <p>Forgot your password? <a href="#">Reset Password</a></p>
      </div>
    </div>
  </div>

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





































<!-- <div class="row bg-danger" style="margin:0px; min-height:400px; background-image:url('content/images/login.jfif');  backgound-repeat:no-repeat; background-size:100% ; margin-top:5px;">
    <div class="col-sm-4"></div>
    <div class="col-sm-4" style="padding-top:10px;">
 
       <h3 style="text-align:center; margin-top:5px; color:white; background:maroon; padding:10px;">Login Here!!</h3>
       <div style="min-height:200px; background:rgba(255,255,255,0.3); width:100%">


      


         <form action="VALID.php" method="POST">

        
          <div class="form-group col-sm-12">
               <label>User Type</label>
               <select class="form-control" name="user">
               <option>admin</option>
               <option>faculty</option>
               <option>student</option>

               </select>
           </div>
           <div class="form-group col-sm-12">
               <label>Email address</label>
               <input type="email" class="form-control" name="emai" placeholder="Enter email">
           </div>
           <div class="form-group col-sm-12">
               <label>Password</label>
               <input type="password" class="form-control" name="pass" placeholder="Password">
           </div>
            <div class="form-group col-sm-12">
               <center> <button type="submit" class="btn btn-dark" style="width:150px; margin-bottom:15px;">Login</button></center>
           </div>
         </form>
       </div>   
    </div>
    <div class="col-sm-4"></div>
</div> -->
