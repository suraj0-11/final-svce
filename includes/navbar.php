<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SVCE Bengaluru</title>
  <link rel="stylesheet" href="public/css/navbar.css">
</head>

<body>
  <div>
    <nav id="navbar" class="transparent">
      <div class="logoContainer">
        <div class="logoText">
          <span class="logoSize">
            <img src="../assets/SVCE-Logo.png" alt="SVCE Logo" width="64" height="64" />
          </span>
          <a class="no-underline" href="index.php">
            <span class="logoGlow">
              <span class="logoTextFirstSize">SVCE </span>
              <span class="logoTextSecondSize">Bengaluru</span>
            </span>
          </a>
        </div>
      </div>
      <ul id="navLinks" class="hidden md:flex no-underline">
        <li class="navLists">
          <a href="#">Who We Are</a>
        </li>
        <li class="navLists">
          <a href="#">Campus &amp; City</a>
        </li>
        <li class="navLists">
          <a href="../public/cse-cy.php">Academic Life</a>
        </li>
        <li class="navLists">
          <a href="#">Research</a>
        </li>
        <li class="navLists">
          <a href="#">Admissions &amp; Aid</a>
        </li>
      </ul>
      <button id="toggleNav" class="md:hidden">
        <img src="../assets/more.png" alt="" />
      </button>
    </nav>
  </div>
  <script src="../public/js/navbar.js"></script>
</body>

</html>