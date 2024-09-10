<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCE Bengaluru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

        body {
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
            text-align: justify;
        }

        .article-paragraph {
            text-align: justify;
        }

        .mini-navbar {
            background-color: #333333;
            display: flex;
            justify-content: flex-start;
            padding: 0;
            margin: 0;
            border-bottom: 1px solid #444444;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .nav-link:hover {
            background-color: #444444;
        }

        .nav-link.active {
            background-color: #0099cc;
            color: white;
        }

        .content {
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        .content h3 {
            font-size: 18px;
            margin-top: 20px;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
        }

        .content td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .research-cse-cy {
            padding-right: 40px;
        }

        .image-cy {
            justify-content: center;
        }

        .image-labs {
            display: flex;
            justify-content: space-between;
        }

        .image-labs img {
            max-width: 100%;
            height: 290px;
            flex: 1;
            margin: 0 10px;
            object-fit: contain;
        }

        .cse-cy-stats-container {
            background-color: white;
            color: white;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 0 2rem 0 2rem;
        }

        .cse-cy-stat-item {
            text-align: center;
            flex: 1 1 200px;
            margin: 1rem;
            transition: transform 0.3s ease;
        }

        .cse-cy-stat-item:hover {
            transform: translateY(-5px);
        }

        .cse-cy-stat-number {
            font-size: 35px;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: #0088cc;
            transition: color 0.3s ease;
        }

        .cse-cy-stat-item:hover .college-stat-number {
            color: #0088cc;
        }

        .cse-cy-stat-description {
            font-size: clamp(0.8rem, 1.5vw, 1rem);
            color: black;
        }

        #career-opportunities b {
            font-size: 20px;

        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

        .futuristic-contact-section * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .futuristic-contact-section {
            min-height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('https://images.pexels.com/photos/325185/pexels-photo-325185.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .futuristic-contact-section::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-color: black;
        }

        .futuristic-container {
            max-width: 1080px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .futuristic-row {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            z-index: 3;
            position: relative;
        }

        .futuristic-contact-info {
            width: 45%;
        }

        .futuristic-contact-info-item {
            display: flex;
            margin-bottom: 30px;
        }

        .futuristic-contact-info-icon {
            height: 70px;
            width: 70px;
            background-color: #fff;
            text-align: center;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .futuristic-contact-info-icon i {
            font-size: 30px;
            color: #0088cc;
        }

        .futuristic-contact-info-content {
            margin-left: 20px;
        }

        .futuristic-contact-info-content h4 {
            color: #0088cc;
            font-size: 1.4em;
            margin-bottom: 5px;
        }

        .futuristic-contact-info-content p {
            color: black;
            font-size: 1em;
        }

        .futuristic-contact-form {
            background-color: #fff;
            padding: 40px;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .futuristic-contact-form h2 {
            font-weight: bold;
            font-size: 2em;
            margin-bottom: 10px;
            color: #333;
        }

        .futuristic-input-box {
            position: relative;
            width: 100%;
            margin-top: 10px;
            color: #0088cc;
        }

        .futuristic-input-box input,
        .futuristic-input-box textarea {
            width: 100%;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #333;
            outline: none;
            resize: none;
            background: none;
            color: #0088cc;
        }

        .futuristic-input-box span {
            position: absolute;
            left: 0;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            pointer-events: none;
            transition: 0.5s;
            color: #666;
        }

        .futuristic-input-box input:focus~span,
        .futuristic-input-box textarea:focus~span,
        .futuristic-input-box input:valid~span,
        .futuristic-input-box textarea:valid~span {
            color: #0088cc;
            font-size: 12px;
            transform: translateY(-20px);
        }

        .futuristic-input-box input[type="submit"] {
            width: 100%;
            background: #00bcd4;
            color: #FFF;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
            border: 1px solid #00bcd4;
            transition: 0.5s;
        }

        .futuristic-input-box input[type="submit"]:hover {
            background: #FFF;
            color: #00bcd4;
        }

        @media (max-width: 991px) {
            .futuristic-row {
                flex-direction: column;
            }

            .futuristic-contact-info {
                margin-bottom: 40px;
                width: 100%;
            }

            .futuristic-contact-form {
                width: 100%;
            }
        }
    </style>
    <link rel="stylesheet" href="../public/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/academics.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/footer.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="navBar"><?php include __DIR__ . '/../includes/navbar.php'; ?></div>
    <div class="aca-img">
        <img class="aca-bgimg" src="../assets/bgimages/3.jpg" alt="cse-cy">
    </div>
    <div class="aca-navbar">
        <ul id="aca-navLinks">
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
        <h1 class="title">Computer Science & Engineering - Cybersecurity</h1>

        <nav class="side-nav">
            <ul class="side-nav-list">

                <!-- New Header for Other Programs -->
                <li class="side-nav-header"><strong>Other Programs</strong></li>
                <hr> <br>
                <li class="side-nav-item"><a href="academics\cse.php">Basic Science</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\cse.php">Computer Science & Engineering</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\cse-ai.php">Computer Science & Engineering - Artificial
                        Intelligence</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\cse-ds.php">Computer Science & Engineering - Data
                        Science</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\cse-cy.php">Computer Science & Engineering - Cyber
                        Security</a></li>
                <hr><br>


                <li class="side-nav-item"><a href="academics\ise.php">Information Science & Engineering</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\ece.php">Electronics & Communication Engineering</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\mech.php">Mechanical Engineering</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\civil.php">Civil Engineering</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\mba.php">Masters of Business Administration</a></li>
                <hr><br>
                <li class="side-nav-item"><a href="academics\mtech-st.php">MTech - Structural Engineering</a></li><br>
            </ul>
        </nav>

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
    </script>
</body>

</html>