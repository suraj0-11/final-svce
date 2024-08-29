<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SVCE Bengaluru</title>
  <link rel="stylesheet" href="navbar.css" />
</head>

<body>
  <nav id="nav-navbar">
    <div class="nav-container">
      <a href="#" class="nav-logo">
        <img src="../assets/svce-logo.png" alt="SVCE Logo" width="60" height="60" />
        <span>SVCE Bengaluru</span>
      </a>
      <ul class="nav-menu">
        <li class="nav-item has-dropdown">
          <a href="#" class="nav-link">Study</a>
          <div class="nav-dropdown">
            <div class="nav-dropdown-content">
              <div class="nav-dropdown-column">
                <h3>Programs</h3>
                <ul>
                  <li><a href="#">Undergraduate</a></li>
                  <li><a href="#">Postgraduate</a></li>
                  <li><a href="#">Doctoral</a></li>
                </ul>
              </div>
              <div class="nav-dropdown-column">
                <h3>Admissions</h3>
                <ul>
                  <li><a href="#">How to Apply</a></li>
                  <li><a href="#">Scholarships</a></li>
                  <li><a href="#">International Students</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item has-dropdown">
          <a href="#" class="nav-link">Life @ SVCE</a>
          <div class="nav-dropdown">
            <div class="nav-dropdown-content">
              <div class="nav-dropdown-column">
                <h3>Campus Life</h3>
                <ul>
                  <li><a href="#">Housing</a></li>
                  <li><a href="#">Dining</a></li>
                  <li><a href="#">Sports & Recreation</a></li>
                </ul>
              </div>
              <div class="nav-dropdown-column">
                <h3>Student Activities</h3>
                <ul>
                  <li><a href="#">Clubs & Societies</a></li>
                  <li><a href="#">Events</a></li>
                  <li><a href="#">Volunteering</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Library</a>
        </li>
        <li class="nav-item has-dropdown">
          <a href="#" class="nav-link">Academics</a>
          <div class="nav-dropdown">
            <div class="nav-dropdown-content">
              <div class="nav-dropdown-column">
                <h3>Departments</h3>
                <ul>
                  <li><a href="#">Engineering</a></li>
                  <li><a href="#">Sciences</a></li>
                  <li><a href="#">Management</a></li>
                </ul>
              </div>
              <div class="nav-dropdown-column">
                <h3>Resources</h3>
                <ul>
                  <li><a href="#">Academic Calendar</a></li>
                  <li><a href="#">Course Catalog</a></li>
                  <li><a href="#">Research Opportunities</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item has-dropdown">
          <a href="#" class="nav-link">About Us</a>
          <div class="nav-dropdown">
            <div class="nav-dropdown-content">
              <div class="nav-dropdown-column">
                <h3>Our Institution</h3>
                <ul>
                  <li><a href="#">History</a></li>
                  <li><a href="#">Mission & Vision</a></li>
                  <li><a href="#">Leadership</a></li>
                </ul>
              </div>
              <div class="nav-dropdown-column">
                <h3>Campus</h3>
                <ul>
                  <li><a href="#">Facilities</a></li>
                  <li><a href="#">Location</a></li>
                  <li><a href="#">Virtual Tour</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item has-dropdown">
          <a href="#" class="nav-link">News & Events</a>
          <div class="nav-dropdown">
            <div class="nav-dropdown-content">
              <div class="nav-dropdown-column">
                <h3>News</h3>
                <ul>
                  <li><a href="#">Latest News</a></li>
                  <li><a href="#">Press Releases</a></li>
                  <li><a href="#">Newsletters</a></li>
                </ul>
              </div>
              <div class="nav-dropdown-column">
                <h3>Events</h3>
                <ul>
                  <li><a href="#">Upcoming Events</a></li>
                  <li><a href="#">Academic Calendar</a></li>
                  <li><a href="#">Alumni Events</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">Contact Us</a>
        </li>
      </ul>
      <button id="nav-toggle" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </nav>
  <div class="spacer"></div>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const navbar = document.getElementById("nav-navbar");
      const navToggle = document.getElementById("nav-toggle");
      const navMenu = document.querySelector(".nav-menu");
      const dropdownItems = document.querySelectorAll(
        ".nav-item.has-dropdown"
      );

      // Function to handle navbar background on scroll
      function handleScroll() {
        if (window.scrollY > 50) {
          navbar.classList.add("scrolled");
        } else {
          navbar.classList.remove("scrolled");
        }
      }

      // Add scroll event listener
      window.addEventListener("scroll", handleScroll);

      navToggle.addEventListener("click", () => {
        navToggle.classList.toggle("active");
        navMenu.classList.toggle("active");
      });

      // Close mobile menu when a link is clicked
      document.querySelectorAll(".nav-link").forEach((link) => {
        link.addEventListener("click", () => {
          navToggle.classList.remove("active");
          navMenu.classList.remove("active");
        });
      });

      // Handle dropdowns
      dropdownItems.forEach((item) => {
        const link = item.querySelector(".nav-link");
        const dropdown = item.querySelector(".nav-dropdown");
        let timeoutId;

        item.addEventListener("mouseenter", () => {
          clearTimeout(timeoutId);
          closeAllDropdowns();
          dropdown.style.display = "block";
        });

        item.addEventListener("mouseleave", () => {
          timeoutId = setTimeout(() => {
            dropdown.style.display = "none";
          }, 300);
        });

        link.addEventListener("click", (e) => {
          if (window.innerWidth <= 768) {
            e.preventDefault();
            dropdown.style.display =
              dropdown.style.display === "block" ? "none" : "block";
          }
        });
      });

      function closeAllDropdowns() {
        document.querySelectorAll(".nav-dropdown").forEach((dropdown) => {
          dropdown.style.display = "none";
        });
      }

      // Close dropdowns when clicking outside
      document.addEventListener("click", (e) => {
        if (!e.target.closest(".nav-item.has-dropdown")) {
          closeAllDropdowns();
        }
      });
    });
  </script>
</body>

</html>