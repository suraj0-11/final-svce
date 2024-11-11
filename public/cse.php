<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCE Bengaluru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />

    <link rel="stylesheet" href="../public/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/academics.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/footer.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="navBar"><?php include __DIR__ . '/../includes/navbar.php'; ?></div>
    <div class="aca-img">
        <img class="aca-bgimg" src="../assets/bgimages/1.jpg" alt="cse-cy">
    </div>
    <div class="aca-navbar">
        <div class="aca-navbar-toggle">
            <button id="nav-toggle">Menu</button>
        </div>
        <ul id="aca-navLinks" class="hidden">
            <li class="aca-navLists"><a href="#overview">Overview</a></li>
            <li class="aca-navLists"><a href="#programme-structure">Programme Structure</a></li>
            <li class="aca-navLists"><a href="#research-facilities">Research Facilities</a></li>
            <li class="aca-navLists"><a href="#career-opportunities">Career Opportunities</a></li>
            <li class="aca-navLists"><a href="#faculty-staff">Faculty & Staff</a></li>
            <li class="aca-navLists"><a href="#events-news">Events & News</a></li>
            <li class="aca-navLists"><a href="#alumni-giving">Alumni & Giving</a></li>
            <li class="aca-navLists"><a href="#contact-us">Contact Us</a></li>
        </ul>
    </div>


    <article class="article-wrapper">
        <h1 class="title">Computer Science & Engineering - Cyber Security</h1>

        <nav class="side-nav">
            <ul class="side-nav-list">
                <li class="side-nav-header"><strong>Other Programs</strong></li>
                <hr>
                <li class="side-nav-item" id="basic-science"><a href="academics/cse.php">Basic <br>Science</a></li>
                <hr>
                <li class="side-nav-item" id="cse"><a href="academics/cse.php">Computer Science <br> &
                        <br>Engineering</a></li>
                <hr>
                <li class="side-nav-item" id="cse-ai"><a href="academics/cse-ai.php">Computer Science & <br>Engineering
                        - Artificial <br>Intelligence</a></li>
                <hr>
                <li class="side-nav-item" id="cse-ds"><a href="academics/cse-ds.php">Computer Science & <br>Engineering
                        - Data <br>Science</a></li>
                <hr>
                <li class="side-nav-item" id="cse-cy"><a href="academics/cse-cy.php">Computer Science & <br>Engineering
                        - Cyber <br>Security</a></li>
                <hr>
                <li class="side-nav-item" id="ise"><a href="academics/ise.php">Information Science <br>&
                        <br>Engineering</a></li>
                <hr>
                <li class="side-nav-item" id="ece"><a href="academics/ece.php">Electronics & <br>Communication
                        <br>Engineering</a></li>
                <hr>
                <li class="side-nav-item" id="me"><a href="academics/mech.php">Mechanical <br> Engineering</a></li>
                <hr>
                <li class="side-nav-item" id="civil"><a href="academics/civil.php">Civil <br>Engineering</a></li>
                <hr>
                <li class="side-nav-item" id="mba"><a href="academics/mba.php">Masters of <br>Business
                        Administration</a></li>
                <hr>
                <li class="side-nav-item" id="mtech-st"><a href="academics/mtech-st.php">MTech - Structural
                        <br>Engineering</a></li>
            </ul>

        </nav>
        <div class="right-image-container">

            <img src="../public/images/image.png" alt="Description of the image">
            <div class="button-container">
                <a href="#" class="button">Contact Us</a>
                <a href="#" class="button">Download Brochure</a>
                <a href="#" class="button">Book a 1-2-1 Chat</a>
                <a href="#" class="button">FAQs</a>
                <a href="#" class="button special">Applications Closed for 2024 Entry</a>
            </div>
        </div>



        <img src="" alt="Description of the image">
        </div>

        <div class="main-content">
            <section id="overview">
                <h2 class="subhead">Overview</h2>
                <p class="article-paragraph">Welcome to the Department of Computer Science and Engineering (CSE) with a
                    specialization in Cybersecurity. Our program prepares students to tackle the growing challenges of
                    cyber threats through a comprehensive curriculum covering network security, data protection,
                    cryptography, ethical hacking, and risk management.</p>
                <p class="article-paragraph">Led by experienced faculty and supported by state-of-the-art facilities,
                    students gain practical experience through hands-on labs, real-world projects, and internships. Our
                    partnerships with leading tech companies and government agencies provide unique opportunities for
                    collaborative projects and networking, enhancing employability.</p>
                <p class="article-paragraph">Students engage in cutting-edge research and are encouraged to participate
                    in extracurricular activities like the Cybersecurity Club and hackathons. Our emphasis on ethical
                    practices and professional responsibility ensures graduates are well-rounded professionals. Join us
                    to become part of a community dedicated to making the digital world a safer place.</p>
            </section>

            <section id="programme-structure">
                <h2 class="subhead">Programme Structure</h2>
                <div class="mini-navbar">
                    <a href="#year-2" class="nav-link" data-target="year-2-content">2nd Year</a>
                    <a href="#year-3" class="nav-link" data-target="year-3-content">3rd Year</a>
                    <a href="#year-4" class="nav-link" data-target="year-4-content">4th Year</a>
                </div>

                <div id="year-2-content" class="content">
                    <img src="../assets/cse-cy-images/3-4.jpg" alt="Programme Structure for 3rd and 4th Semester"
                        style="width: 100%;">
                </div>
                <div id="year-3-content" class="content">
                    <img src="../assets/cse-cy-images/5-6.png" alt="Programme Structure for 3rd and 4th Semester"
                        style="width: 100%;">
                </div>
                <div id="year-4-content" class="content">
                    <img src="../assets/cse-cy-images/7-8.png" alt="Programme Structure for 5th and 6th Semester"
                        style="width: 100%;">
                </div>
            </section>

            <section id="research-facilities" style="display: flex; flex-wrap: wrap;">
                <h2 class="subhead" style="width: 100%;">Research Facilities</h2>
                <div style="width: 100%;">
                    <p class="research-cse-cy"><b>Advancing Knowledge, Transforming Lives</b><br>
                        At SVCE Bengaluru, we are dedicated to pushing the boundaries of knowledge and making a tangible
                        impact on the world. Our research programs are designed to foster innovation, inspire
                        creativity, and address some of the most pressing challenges of our time.
                    </p>
                    <br>
                    <p class="research-cse-cy"><b>Multidisciplinary Approach</b><br>
                        Our research initiatives span across a wide range of disciplines, integrating science,
                        technology, engineering, arts, humanities, and social sciences. This multidisciplinary approach
                        allows us to tackle complex problems from multiple perspectives, leading to holistic and
                        sustainable solutions
                    </p>
                </div>

            </section>
            <br>
            <section id="research-facilities" style="display: flex; flex-wrap: wrap;">
                <div style="width: 100%;">
                    <p class="research-cse-cy"><b>World-Class Faculty</b><br>
                        Our esteemed faculty members are leaders in their fields, bringing a wealth of experience and
                        expertise to our research endeavors. They are committed to mentoring the next generation of
                        scholars and fostering a collaborative research environment that encourages critical thinking
                        and innovation.
                    </p>
                    <br>
                    <p class="research-cse-cy"><b>Cutting-Edge Facilities</b><br>
                        We provide our researchers with access to state-of-the-art facilities and resources. Our
                        laboratories, libraries, and research centers are equipped with the latest technology to support
                        groundbreaking discoveries and advancements.
                    </p>
                </div>

            </section>
            <br>
            <section id="research-facilities" style="display: flex; flex-wrap: wrap;">
                <div style="width: 100%;">
                    <p class="research-cse-cy"><b>Community and Global Impact</b><br>
                        Our research is not confined to the walls of our institution. We actively collaborate with
                        industry partners, government agencies, and international organizations to ensure that our
                        findings have a real-world impact. From local community projects to global initiatives, our
                        research is making a difference.
                    </p>
                    <br>
                    <p class="research-cse-cy"><b>Join Us in Shaping the Future</b><br>
                        We invite you to explore our research programs and discover the exciting work being done at SVCE
                        Bengaluru. Whether you are a prospective student, a current scholar, or a potential
                        collaborator, there are endless opportunities to get involved and contribute to the advancement
                        of knowledge
                    </p>
                    <br><br>
                </div>
                <div class="image-labs">
                    <img src="..\assets\cse-cy-images\commslab.jpg" alt="lab">
                    <img src="..\assets\cse-cy-images\labs.jpg" alt="lab">
                </div>
            </section>

            <br><br>
            <section id="career-opportunities">
                <h2 class="subhead">Career Opportunities</h2>
                <p style="text-align:justify;" class="article-paragraph">Cybersecurity is too important for any
                    online-based business to overlook. Businesses, governments, and non-profit organizations are
                    investing heavily in cyber defenses and hiring a growing number of cybersecurity specialists due to
                    the ever-growing and ever-changing nature of cyber threats. Because of this, the Bureau of Labor
                    Statistics projects that from 2020 to 2030, the employment of information security analysts in
                    computer systems design and related services would increase by 33 percent.</p>
                <p style="text-align:justify;" class="article-paragraph">SVCE Bengaluru graduates are poised to enter
                    this market in leadership roles with the requisite multifunctional skill sets and strong network
                    provided by the Department of CSE-Cyber Security program.</p>
                <b>Cybersecurity Salaries</b>
                <p style="text-align:justify;" class="article-paragraph">As cyber and information professionals gain
                    more education and experience, the compensation numbers become even more attractive, as shown by the
                    CareerOne Stop median salaries for the following positions:</p>

                <div class="cse-cy-stats-container">
                    <div class="cse-cy-stat-item">
                        <h1 class="cse-cy-stat-number">$117,800</h1>
                        <p class="cse-cy-stat-description">Computer network architect</p>
                    </div>
                    <div class="cse-cy-stat-item">
                        <h1 class="cse-cy-stat-number">$112,245</h1>
                        <p class="cse-cy-stat-description">Software developer</p>
                    </div>
                    <div class="cse-cy-stat-item">
                        <h1 class="cse-cy-stat-number">$154,230</h1>
                        <p class="cse-cy-stat-description">Computer information systems manager</p>
                    </div>
                </div>


            </section>

            <section id="faculty-staff">
                <h2 class="subhead">Faculty & Staff</h2>
                <p class="article-paragraph">Faculty and staff information goes here...</p>
            </section>

            <section id="events-news">
                <h2 class="subhead">Events & News</h2>
                <p class="article-paragraph">Latest events and news go here...</p>
            </section>

            <section id="alumni-giving">
                <h2 class="subhead">Alumni & Giving</h2>
                <p class="article-paragraph">Alumni information and giving opportunities go here...</p>
            </section>

            <section id="contact-us">
                <h2 class="subhead">Contact Us</h2>

                <div class="futuristic-container">
                    <div class="futuristic-row">
                        <div class="futuristic-contact-info">
                            <div class="futuristic-contact-info-item">
                                <div class="futuristic-contact-info-icon">
                                    <i class="fas fa-home"></i>
                                </div>
                                <div class="futuristic-contact-info-content">
                                    <h4>Address</h4>
                                    <p>Kempegowda International Airport Bengaluru, Road, Kempegowda Int'l Airport
                                        Rd,<br> Vidya Nagar, Central Telecom Society, <br> Bengaluru, Karnataka 562157
                                    </p>
                                </div>
                            </div>
                            <div class="futuristic-contact-info-item">
                                <div class="futuristic-contact-info-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="futuristic-contact-info-content">
                                    <h4>Phone</h4>
                                    <p>571-457-2321</p>
                                </div>
                            </div>
                            <div class="futuristic-contact-info-item">
                                <div class="futuristic-contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="futuristic-contact-info-content">
                                    <h4>Email</h4>
                                    <p>suraj@gmail.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="futuristic-contact-form">
                            <h2>Contact Us</h2>
                            <form action="#" method="post">
                                <div class="futuristic-input-box">
                                    <input type="text" name="name" required>
                                    <span>Name</span>
                                </div>
                                <div class="futuristic-input-box">
                                    <input type="email" name="email" required>
                                    <span>Email</span>
                                </div>
                                <div class="futuristic-input-box">
                                    <textarea name="message" required></textarea>
                                    <span>Message</span>
                                </div>
                                <div class="futuristic-input-box">
                                    <input type="submit" value="Send">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </article>

    <div class="Footer"><?php include __DIR__ . '/../includes/footer.php'; ?></div>
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('#aca-navLinks a, .side-nav-list a, .mini-navbar a');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const windowHeight = window.innerHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                        const offsetPosition = targetPosition - (windowHeight * 0.20);

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('.nav-link');
            links.forEach(link => {
                link.addEventListener('click', (event) => {
                    event.preventDefault();
                    const targetId = event.target.getAttribute('data-target');
                    document.querySelectorAll('.content').forEach(content => {
                        content.style.display = 'none';
                    });
                    document.getElementById(targetId).style.display = 'block';
                });
            });
        });
        document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('.nav-link');
            const contentDivs = document.querySelectorAll('.content');

            navLinks.forEach(link => {
                link.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Remove active class from all links and content
                    navLinks.forEach(l => l.classList.remove('active'));
                    contentDivs.forEach(d => d.classList.remove('active'));

                    // Add active class to clicked link and corresponding content
                    this.classList.add('active');
                    const targetId = this.getAttribute('data-target');
                    document.getElementById(targetId).classList.add('active');
                });
            });

            // Activate the first tab by default
            navLinks[0].click();
        });
        document.addEventListener('DOMContentLoaded', function () {
            const navToggle = document.getElementById('nav-toggle');
            const navLinks = document.getElementById('aca-navLinks');
            const navItems = navLinks.querySelectorAll('.aca-navLists');
            const sections = document.querySelectorAll('section[id]');

            // Toggle menu visibility
            navToggle.addEventListener('click', function () {
                navLinks.classList.toggle('show');
            });

            // Highlight the current section
            function setActiveSection() {
                let index = sections.length;

                while (--index && window.scrollY + 50 < sections[index].offsetTop) { }

                navItems.forEach((item) => item.classList.remove('active'));
                navItems[index].classList.add('active');
            }

            setActiveSection();
            window.addEventListener('scroll', setActiveSection);

            // Scroll to the section and close the dropdown on item click
            navItems.forEach((item) => {
                item.addEventListener('click', function () {
                    const targetId = this.querySelector('a').getAttribute('href').substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const windowHeight = window.innerHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                        const offsetPosition = targetPosition - (windowHeight * 0.20);

                        window.scrollTo({
                            top: offsetPosition,
                            behavior: 'smooth'
                        });

                        navLinks.classList.remove('show');
                    }
                });
            });
        });

    </script>
</body>

</html>