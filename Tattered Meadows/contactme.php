<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Womens boutique appareal built on sustainable fashion principles. All collections are handmade by recycling unwanted garments to create new and fashionable pieces."
    />
    <title>Tattered Meadows | Contact</title>
    <link rel="stylesheet" href="style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Ingrid+Darling&family=Nunito&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/148bf6fa70.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header class="nav-container">
      <nav>
        <ul class="nav-menu">
          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sizing.html">Sizing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.html">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="About.html">About</a>
          </li>
        </ul>

        <div class="hamburger">
          <span class="bar"></span>

          <span class="bar"></span>

          <span class="bar"></span>
        </div>

        <h1 class="title">
          <a href="index.html">Tattered Meadows</a>
        </h1>

        <div class="cart">
          <a href="#">
            <i class="fa-solid fa-bag-shopping"></i>
          </a>
        </div>
      </nav>
    </header>

    <section>
        <h2 class="pageID">Contact Us</h2>
        <?php
      /*
       * Below are 2 different forms to be re-used       
       * 
       * Only use one at a time, comment out the other!       
       *
       */

      include 'includes/contact_include.php'; #site keys & code here
  
      $toAddress = "brandondavila315@outlook.com";  //place your/your client's email address here
      $toName = "Emily Shaffer"; //place your client's name here
      $website = "Tattered Meadows";  //place NAME of your client's website

      // echo loadContact('simple.php');#demonstrates a simple contact form
      echo loadContact('multiple.php');#demonstrates multiple form elements

  ?>
    </section>

    <footer>
        <p>
          <small>
            &copy; 2022-<?=date("Y")?>
            by <a href="contactme.php">Brandon Davila</a>, All Rights Reserved ~
            <a id="html-checker" href="#">Check HTML</a> ~
            <a id="css-checker" href="#">Check CSS</a> |
            <a href="disclaimer.html" class="disclaimer"> Disclaimer</a>
          </small>
        </p>
      </footer>
  
      <script>
        //https://tinyurl.com/dynamic-html-checker
        document
          .getElementById("html-checker")
          .setAttribute(
            "href",
            "https://validator.w3.org/nu/?doc=" + location.href
          );
        document
          .getElementById("css-checker")
          .setAttribute(
            "href",
            "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href
          );
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector(".nav-menu");
  
        hamburger.addEventListener("click", () => {
          hamburger.classList.toggle("active");
          navMenu.classList.toggle("active");
        });
  
        document.querySelectorAll("nav-link").forEach((n) =>
          n.addEventListener("click", () => {
            hamburger.classList.remove("active");
            navMenu.classList.remove("active");
          })
        );
      </script>
    </body>
  </html>
  