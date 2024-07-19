<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCE Bengaluru</title>
    <style>
        /* Root variables */
        :root {
            --primary-color: #0088cc;
            --background-color: #000;
            --text-color: #fff;
            --secondary-background: #111;
        }

        /* Global styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        /* Main content container */
        .sports-container-div {
            padding-top: 10vh;
        }

        .main-content {
            max-width: 1800px;
            margin: 0 auto;
            padding: 20px;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        /* Sports heading section */
        .sports-heading-section {
            background-color: white;
            /* padding: 20px 0; */
            margin-bottom: 30px;
            text-align: center;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        .sports-heading-section h1 {
            font-size: 3rem;
            font-weight: bold;
            text-transform: uppercase;
            /* letter-spacing: 5px; */
            margin: 0;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
            color: black;
        }

        /* Sports container */
        .sports-container {
            display: flex;
            align-items: center;
            background-color: var(--secondary-background);
            border-radius: 15px;
            margin-bottom: 40px;
            overflow: hidden;
            transition: transform 0.3s ease-out;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        .sports-container:hover {
            transform: translateY(-5px);
        }

        /* Alternating layout */
        .sports-container.reverse {
            flex-direction: row-reverse;
            background-color: white;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        /* Sports image */
        .sports-image {
            flex: 1;
            padding: 20px;
        }

        .sports-slideshow {
            position: relative;
            height: 300px;
            border: 2px solid var(--primary-color);
            border-radius: 10px;
            overflow: hidden;
        }

        .sports-slideshow img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
        }

        .sports-slideshow img.active {
            opacity: 1;
        }

        /* Sports content */
        .sports-content {
            flex: 2;
            padding: 20px;
            border-left: 4px solid var(--primary-color);
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        .sports-container.reverse .sports-content {
            border-left: none;
            border-right: 4px solid var(--primary-color);
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        .sports-content h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--primary-color);
            text-align: center;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        .sports-content p {
            font-size: 1rem;
            color: #ccc;
            margin-bottom: 20px;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        /* Responsive design */
        @media (max-width: 768px) {

            .sports-container,
            .sports-container.reverse {
                flex-direction: column;
            }

            .sports-image,
            .sports-container.reverse .sports-image {
                padding: 20px 20px 0 20px;
            }

            .sports-content,
            .sports-container.reverse .sports-content {
                border-left: none;
                border-right: none;
                border-top: 4px solid var(--primary-color);
                font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
            }

            .sports-slideshow {
                height: 200px;
            }

            .sports-heading-section h1 {
                font-size: 2rem;
            }

            .sports-content h1 {
                font-size: 1.5rem;
            }

            .sports-content p {
                font-size: 0.9rem;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .sports-container {
            animation: fadeIn 0.5s ease-out;
        }

        .sports-container.reverse .sports-content p {
            color: black;
            font-family: 'SF Pro Display', 'SF Pro Icons', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif;
        }

        .sports-container .sports-content h1 {
            color: #fff;
            /* Heading color for sports-container */
        }

        .sports-container.reverse .sports-content h1 {
            color: #000;
            /* Heading color for sports-container reverse */
        }
    </style>
    <link rel="stylesheet" href="../public/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/footer.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="navBar"><?php include __DIR__ . '/../includes/navbar.php'; ?></div>

    <div class="sports-container-div">


        <div class="main-content">
            <div class="sports-heading-section">
                <h1>Sports</h1>
            </div>

            <div class="sports-container">
                <div class="sports-image">
                    <div class="sports-slideshow">
                        <img src="https://i.pinimg.com/originals/00/99/88/009988ed036b1a5b7c064830c538eb1e.jpg"
                            alt="Slide 1">
                        <img src="https://www.aljazeera.com/wp-content/uploads/2022/10/000_32LY6Z7.jpg?resize=770%2C513&quality=80"
                            alt="Slide 2">
                        <img src="https://cdn.britannica.com/63/211663-050-A674D74C/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.jpg"
                            alt="Slide 3">
                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/media_bank/202309/indias-jasprit-bumrah-celebrates-the-wicket-of-sri-lankas-pathum-nissanka-ap-135700795-1x1_1.jpg?VersionId=.mC58vrINDUNLkCUaQsnRuQOPr6ZyX6b"
                            alt="Slide 4">
                        <img src="https://library.sportingnews.com/styles/crop_style_16_9_desktop/s3/2024-02/GettyImages-2034532575%281%29.jpg?h=01582e12&itok=LBme_vW_"
                            alt="Slide 5">
                    </div>
                </div>
                <div class="sports-content">
                    <h1>CRICKET</h1>
                    <hr>
                    <p>Cricket is a bat-and-ball game played between two teams of eleven players on a field at the
                        centre of which is a 22-yard (20-metre) pitch with a wicket at each end, each comprising two
                        bails balanced on three stumps.</p>
                    <p>The game proceeds when a player on the fielding team, called the bowler, "bowls" (propels) the
                        ball from one end of the pitch towards the wicket at the other end, with an "over" consisting of
                        six such deliveries.</p>
                </div>
            </div>

            <div class="sports-container reverse">
                <div class="sports-image">
                    <div class="sports-slideshow">
                        <img src="https://i.pinimg.com/originals/00/99/88/009988ed036b1a5b7c064830c538eb1e.jpg"
                            alt="Slide 1">
                        <img src="https://www.aljazeera.com/wp-content/uploads/2022/10/000_32LY6Z7.jpg?resize=770%2C513&quality=80"
                            alt="Slide 2">
                        <img src="https://cdn.britannica.com/63/211663-050-A674D74C/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.jpg"
                            alt="Slide 3">
                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/media_bank/202309/indias-jasprit-bumrah-celebrates-the-wicket-of-sri-lankas-pathum-nissanka-ap-135700795-1x1_1.jpg?VersionId=.mC58vrINDUNLkCUaQsnRuQOPr6ZyX6b"
                            alt="Slide 4">
                        <img src="https://library.sportingnews.com/styles/crop_style_16_9_desktop/s3/2024-02/GettyImages-2034532575%281%29.jpg?h=01582e12&itok=LBme_vW_"
                            alt="Slide 5">
                    </div>
                </div>
                <div class="sports-content">
                    <h1>BASKETBALL</h1>
                    <hr>
                    <p>Basketball is a team sport in which two teams, most commonly of five players each, opposing one
                        another on a rectangular court, compete with the primary objective of shooting a basketball
                        through the defender's hoop.</p>
                    <p>A field goal is worth two points, unless made from behind the three-point line, when it is worth
                        three. After a foul, timed play stops and the player fouled or designated to shoot a technical
                        foul is given one, two or three one-point free throws.</p>
                </div>
            </div>

            <div class="sports-container">
                <div class="sports-image">
                    <div class="sports-slideshow">
                        <img src="https://i.pinimg.com/originals/00/99/88/009988ed036b1a5b7c064830c538eb1e.jpg"
                            alt="Slide 1">
                        <img src="https://www.aljazeera.com/wp-content/uploads/2022/10/000_32LY6Z7.jpg?resize=770%2C513&quality=80"
                            alt="Slide 2">
                        <img src="https://cdn.britannica.com/63/211663-050-A674D74C/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.jpg"
                            alt="Slide 3">
                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/media_bank/202309/indias-jasprit-bumrah-celebrates-the-wicket-of-sri-lankas-pathum-nissanka-ap-135700795-1x1_1.jpg?VersionId=.mC58vrINDUNLkCUaQsnRuQOPr6ZyX6b"
                            alt="Slide 4">
                        <img src="https://library.sportingnews.com/styles/crop_style_16_9_desktop/s3/2024-02/GettyImages-2034532575%281%29.jpg?h=01582e12&itok=LBme_vW_"
                            alt="Slide 5">
                    </div>
                </div>
                <div class="sports-content">
                    <h1>FOOTBALL</h1>
                    <hr>
                    <p>Football is a family of team sports that involve, to varying degrees, kicking a ball to score a
                        goal. Unqualified, the word football normally means the form of football that is the most
                        popular where the word is used.</p>
                    <p>Various forms of football can be identified in history, often as popular peasant games.
                        Contemporary codes of football can be traced back to the codification of these games at English
                        public schools during the 19th century.</p>
                </div>
            </div>

            <div class="sports-container reverse">
                <div class="sports-image">
                    <div class="sports-slideshow">
                        <img src="https://i.pinimg.com/originals/00/99/88/009988ed036b1a5b7c064830c538eb1e.jpg"
                            alt="Slide 1">
                        <img src="https://www.aljazeera.com/wp-content/uploads/2022/10/000_32LY6Z7.jpg?resize=770%2C513&quality=80"
                            alt="Slide 2">
                        <img src="https://cdn.britannica.com/63/211663-050-A674D74C/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.jpg"
                            alt="Slide 3">
                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/media_bank/202309/indias-jasprit-bumrah-celebrates-the-wicket-of-sri-lankas-pathum-nissanka-ap-135700795-1x1_1.jpg?VersionId=.mC58vrINDUNLkCUaQsnRuQOPr6ZyX6b"
                            alt="Slide 4">
                        <img src="https://library.sportingnews.com/styles/crop_style_16_9_desktop/s3/2024-02/GettyImages-2034532575%281%29.jpg?h=01582e12&itok=LBme_vW_"
                            alt="Slide 5">
                    </div>
                </div>
                <div class="sports-content">
                    <h1>VOLLEYBALL</h1>
                    <hr>
                    <p>Volleyball is a team sport in which two teams of six players are separated by a net. Each team
                        tries to score points by grounding a ball on the other team's court under organized rules.</p>
                    <p>It has been a part of the official program of the Summer Olympic Games since Tokyo 1964. Beach
                        volleyball was introduced to the programme at the Atlanta 1996 Summer Olympics.</p>
                </div>
            </div>

            <div class="sports-container">
                <div class="sports-image">
                    <div class="sports-slideshow">
                        <img src="https://i.pinimg.com/originals/00/99/88/009988ed036b1a5b7c064830c538eb1e.jpg"
                            alt="Slide 1">
                        <img src="https://www.aljazeera.com/wp-content/uploads/2022/10/000_32LY6Z7.jpg?resize=770%2C513&quality=80"
                            alt="Slide 2">
                        <img src="https://cdn.britannica.com/63/211663-050-A674D74C/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.jpg"
                            alt="Slide 3">
                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/media_bank/202309/indias-jasprit-bumrah-celebrates-the-wicket-of-sri-lankas-pathum-nissanka-ap-135700795-1x1_1.jpg?VersionId=.mC58vrINDUNLkCUaQsnRuQOPr6ZyX6b"
                            alt="Slide 4">
                        <img src="https://library.sportingnews.com/styles/crop_style_16_9_desktop/s3/2024-02/GettyImages-2034532575%281%29.jpg?h=01582e12&itok=LBme_vW_"
                            alt="Slide 5">
                    </div>
                </div>
                <div class="sports-content">
                    <h1>TENNIS</h1>
                    <hr>
                    <p>Tennis is a racket sport that can be played individually against a single opponent (singles) or
                        between two teams of two players each (doubles). Each player uses a tennis racket that is strung
                        with cord to strike a hollow rubber ball covered with felt over or around a net and into the
                        opponent's court.</p>
                    <p>The modern game of tennis originated in Birmingham, England, in the late 19th century as lawn
                        tennis. It had close connections both to various field (lawn) games such as croquet and bowls as
                        well as to the older racket sport today called real tennis.</p>
                </div>
            </div>

            <div class="sports-container reverse">
                <div class="sports-image">
                    <div class="sports-slideshow">
                        <img src="https://i.pinimg.com/originals/00/99/88/009988ed036b1a5b7c064830c538eb1e.jpg"
                            alt="Slide 1">
                        <img src="https://www.aljazeera.com/wp-content/uploads/2022/10/000_32LY6Z7.jpg?resize=770%2C513&quality=80"
                            alt="Slide 2">
                        <img src="https://cdn.britannica.com/63/211663-050-A674D74C/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.jpg"
                            alt="Slide 3">
                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/media_bank/202309/indias-jasprit-bumrah-celebrates-the-wicket-of-sri-lankas-pathum-nissanka-ap-135700795-1x1_1.jpg?VersionId=.mC58vrINDUNLkCUaQsnRuQOPr6ZyX6b"
                            alt="Slide 4">
                        <img src="https://library.sportingnews.com/styles/crop_style_16_9_desktop/s3/2024-02/GettyImages-2034532575%281%29.jpg?h=01582e12&itok=LBme_vW_"
                            alt="Slide 5">
                    </div>
                </div>
                <div class="sports-content">
                    <h1>CHESS</h1>
                    <hr>
                    <p>Chess is a board game of strategic skill for two players, played on a chequered board on which
                        each playing piece is moved according to precise rules. The object is to put the opponent's king
                        under a direct attack from which escape is impossible (checkmate).</p>
                    <p>Chess is believed to have originated in India sometime before the 7th century. The game spread to
                        Persia and then to the Arab world. From there it spread to Europe, where it evolved into its
                        current form in the 15th century.</p>
                </div>
            </div>

            <div class="sports-container">
                <div class="sports-image">
                    <div class="sports-slideshow">
                        <img src="https://i.pinimg.com/originals/00/99/88/009988ed036b1a5b7c064830c538eb1e.jpg"
                            alt="Slide 1">
                        <img src="https://www.aljazeera.com/wp-content/uploads/2022/10/000_32LY6Z7.jpg?resize=770%2C513&quality=80"
                            alt="Slide 2">
                        <img src="https://cdn.britannica.com/63/211663-050-A674D74C/Jonny-Bairstow-batting-semifinal-match-England-Australia-2019.jpg"
                            alt="Slide 3">
                        <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/media_bank/202309/indias-jasprit-bumrah-celebrates-the-wicket-of-sri-lankas-pathum-nissanka-ap-135700795-1x1_1.jpg?VersionId=.mC58vrINDUNLkCUaQsnRuQOPr6ZyX6b"
                            alt="Slide 4">
                        <img src="https://library.sportingnews.com/styles/crop_style_16_9_desktop/s3/2024-02/GettyImages-2034532575%281%29.jpg?h=01582e12&itok=LBme_vW_"
                            alt="Slide 5">
                    </div>
                </div>
                <div class="sports-content">
                    <h1>BADMINTON</h1>
                    <hr>
                    <p>Tennis is a racket sport that can be played individually against a single opponent (singles) or
                        between two teams of two players each (doubles). Each player uses a tennis racket that is strung
                        with cord to strike a hollow rubber ball covered with felt over or around a net and into the
                        opponent's court.</p>
                    <p>The modern game of tennis originated in Birmingham, England, in the late 19th century as lawn
                        tennis. It had close connections both to various field (lawn) games such as croquet and bowls as
                        well as to the older racket sport today called real tennis.</p>
                </div>
            </div>


        </div>
    </div>

    <div class="Footer"><?php include __DIR__ . '/../includes/footer.php'; ?></div>
    <script>
        function setupSlideshows() {
            const slideshows = document.querySelectorAll('.sports-slideshow');

            slideshows.forEach(slideshow => {
                const images = slideshow.querySelectorAll('img');
                let currentIndex = 0;

                function showNextImage() {
                    images[currentIndex].classList.remove('active');
                    currentIndex = (currentIndex + 1) % images.length;
                    images[currentIndex].classList.add('active');
                }

                // Show the first image initially
                images[currentIndex].classList.add('active');

                // Change image every 3 seconds
                setInterval(showNextImage, 3000);
            });
        }

        function addRevealEffect() {
            const elementsToReveal = document.querySelectorAll('.sports-container');
            const observer = new IntersectionObserver(
                (entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('reveal');
                        }
                    });
                },
                { threshold: 0.1 }
            );

            elementsToReveal.forEach((element) => {
                observer.observe(element);
            });
        }

        // Call the functions when the page loads
        window.addEventListener('load', () => {
            setupSlideshows();
            addRevealEffect();
        });

        // Prevent default behavior on container click
        document.querySelectorAll('.sports-container').forEach(container => {
            container.addEventListener('click', function (e) {
                e.preventDefault();
            });
        });
    </script>
</body>

</html>