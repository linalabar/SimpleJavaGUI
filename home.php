<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nursery Name</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="header">
    <div class="logo">
      <img src="images/logo.png" alt="Nursery Name">
      <h1>Nursery Name</h1>
    </div> 
    <nav>
      <ul>
        <li><a href="#"><u>Home</u></a></li>
        <li><a href="#">Activities</a></li>
        <li><a href="#">Meals</a></li>
        <li><a href="parentlogin.html">Parent log In</a></li>
        <li><a href="nurselogin.html">Nurse log In</a></li>
        <!--li><button onclick="toggleLogin()">
                Nurse Log In
            </button>
            <div class="nurse-overlay">
                <div class="nurse-login">
                    <div class="nurse-header">
                        <h1>login</h1>
                        <i class="fas fa-times" onclick="toggleLogin()"></i>
                    </div>

                    <div class="nurse-body">
                        <form action="" class="form">
                            <input type="text" class="username" placeholder="enter your full  name"/>
                            <input type="email" placeholder="enter your email ">
                            <input type="password" placeholder="enter your password">
                        </form>
                        <div class="nurse-footer">
                            <button type="submit">login</button>    
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function toggleLogin(){
                    document.querySelector(".nurse-overlay").classList.toggle("open");
                }
            </script>
        </li-->
        <li><a href="adminlogin.html">Admin log In</a></li>
      </ul>
    </nav>
</div>
  
  <main>
    <div class="hero">
      <img src="images/hero.jpg" alt="Give your kid the best possible start!">
      <h2>Give your kid the best <br>possible start!</h2>
    </div>
    <section class="location">
      <h2>Our Location and Hours of Operation</h2>
      <p>123 Main Street, Anytown USA</p>
      <p>Saturday - Thursday: 8:00am - 6:00pm</p>
    </section>
    <section class="categories">
      <ul>
        <li>
          <a href="#">
            <img src="images/baby.jpg" alt="Baby">
            <h3>Baby</h3>
            <p>Ages 0-2</p>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="images/toddler.jpg" alt="Toddler">
            <h3>Toddler</h3>
            <p>Ages 2-4</p>
          </a>
        </li>
        <li>
          <a href="#">
            <img src="images/preschooler.jpg" alt="Preschooler">
            <h3>Preschooler</h3>
            <p>Ages 4-6</p>
          </a>
        </li>
      </ul>
    </section>
    <section class="about">
      <div class="image">
        <img src="images/activities.jpg" alt="Our Activities">
      </div>
      <div class="text">
        <h2>Our Activities</h2>
        <p>We offer a wide range of activities to stimulate your child's learning and development, including arts and crafts, music, and outdoor play.</p>
      </div>
    </section>
  </main>
  
  <footer>
    <p>&copy; 2023 Nursery Name. All rights reserved.</p>
  </footer>
</body>
</html>

