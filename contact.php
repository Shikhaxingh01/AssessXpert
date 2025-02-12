<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - QuizMaster</title>

  <!-- Link to Tailwind CSS or custom styles -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
  <style>
    /* Custom CSS for Contact Us Page */
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

    .contact-section {
      padding: 80px 20px;
      background-color: #fff;
      text-align: center;
    }

    .contact-title {
      font-size: 2rem;
      font-weight: 600;
      color: #2D6A4F;
    }

    .contact-content {
      font-size: 1.2rem;
      color: #333;
      margin-top: 20px;
      line-height: 1.6;
      max-width: 900px;
      margin: 0 auto;
    }

    .contact-form {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
      background-color: #f9fafb;
      border-radius: 10px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px;
      margin-bottom: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 1rem;
    }

    .contact-form button {
      background-color: #2D6A4F;
      color: white;
      padding: 12px 20px;
      font-size: 1rem;
      border-radius: 5px;
      border: none;
      cursor: pointer;
    }

    .contact-form button:hover {
      background-color: #1f5c42;
    }

    .google-map {
      margin-top: 40px;
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

<!-- Contact Us Section -->
<div class="contact-section">
  <h2 class="contact-title">Contact Us</h2>
  <p class="contact-content">
    We'd love to hear from you! Whether you have a question, suggestion, or just want to connect, feel free to reach out to us.
    You can either send us a message through the form below or contact us directly via our email or phone number.
  </p>

  <!-- Contact Form -->
  <div class="contact-form">
    <form action="submit_form.php" method="POST">
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>
      <textarea name="message" rows="6" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </div>

  <!-- Google Map -->
  <div class="google-map">
    <h3>Our Location</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14325.057394844873!2d81.80630527273165!3d26.15551894587881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399af5a4702faacb%3A0x9314a14ecb88a438!2sAmethi%2C%20Uttar%20Pradesh%20227405!5e0!3m2!1sen!2sin!4v1637328227407!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
