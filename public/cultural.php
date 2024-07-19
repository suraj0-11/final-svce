<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCE Bengaluru</title>
    <link rel="stylesheet" href="../public/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/cultural.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/footer.css?v=<?php echo time(); ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
</head>

<body>
    <div class="navBar"><?php include __DIR__ . '/../includes/navbar.php'; ?></div>

    <main>
        <div class="Heading">
            <h1 class="Event-Heading">KALAVAIBHAVA</h1>
        </div>
        <div class="Video-Container">
            <video class="mainVideo" src="../assets/video/av1.mkv" loop muted></video>
            <button class="play-pause-btn">
                <svg class="pause-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    fill="#0088cc" height="50px" width="50px" version="1.1" id="Capa_1" viewBox="0 0 512 512"
                    xml:space="preserve">
                    <path
                        d="M256,0C114.617,0,0,114.615,0,256s114.617,256,256,256s256-114.615,256-256S397.383,0,256,0z M224,320  c0,8.836-7.164,16-16,16h-32c-8.836,0-16-7.164-16-16V192c0-8.836,7.164-16,16-16h32c8.836,0,16,7.164,16,16V320z M352,320  c0,8.836-7.164,16-16,16h-32c-8.836,0-16-7.164-16-16V192c0-8.836,7.164-16,16-16h32c8.836,0,16,7.164,16,16V320z" />
                </svg>
                <svg class="play-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    height="50px" width="50px" version="1.1" id="_x32_" viewBox="0 0 512 512" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #0088cc;
                        }
                    </style>
                    <g>
                        <path class="st0"
                            d="M256,0C114.625,0,0,114.625,0,256c0,141.374,114.625,256,256,256c141.374,0,256-114.626,256-256   C512,114.625,397.374,0,256,0z M351.062,258.898l-144,85.945c-1.031,0.626-2.344,0.657-3.406,0.031   c-1.031-0.594-1.687-1.702-1.687-2.937v-85.946v-85.946c0-1.218,0.656-2.343,1.687-2.938c1.062-0.609,2.375-0.578,3.406,0.031   l144,85.962c1.031,0.586,1.641,1.718,1.641,2.89C352.703,257.187,352.094,258.297,351.062,258.898z" />
                    </g>
                </svg>
            </button>
        </div>
        <div class="cul-container">
            <section class="cul-slide" id="cul-slide1">
                <h2 class="cul-heading">Advanced Cameras</h2>
                <p class="cul-subheading">Selfie-takers. Movie-makers. Boundary-breakers.</p>
                <div class="cul-content">
                    <img src="path_to_camera_image.jpg" alt="Advanced Camera">
                </div>
            </section>
            <section class="cul-slide" id="cul-slide2">
                <h2 class="cul-heading">Apple-Designed Chips</h2>
                <p class="cul-subheading">The kind of fast you can feel.</p>
                <div class="cul-content">
                    <img src="path_to_chip_image.jpg" alt="Apple Chip">
                </div>
            </section>
            <section class="cul-slide" id="cul-slide3">
                <h2 class="cul-heading">Battery Life</h2>
                <p class="cul-subheading">The power of great battery life.</p>
                <div class="cul-content">
                    <img src="path_to_battery_image.jpg" alt="Battery Life">
                </div>
            </section>
            <section class="cul-slide" id="cul-slide4">
                <h2 class="cul-heading">Innovation</h2>
                <p class="cul-subheading">Beautiful and durable, by design.</p>
                <div class="cul-content">
                    <video id="cul-video" src="path_to_video.mp4" loop muted></video>
                    <button class="cul-play-pause-btn" id="cul-play-pause-btn">
                        <svg class="cul-play-icon" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z" />
                        </svg>
                    </button>
                </div>
            </section>
            <section class="cul-slide" id="cul-slide5">
                <h2 class="cul-heading">Personalize Your iPhone</h2>
                <p class="cul-subheading">Make it you. Through and through.</p>
                <div class="cul-content">
                    <img src="path_to_personalization_image.jpg" alt="Personalization">
                </div>
            </section>
        </div>
        <div class="spacer"></div>
    </main>

    <div class="Footer"><?php include __DIR__ . '/../includes/footer.php'; ?></div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const video = document.querySelector('.mainVideo');
            const playPauseBtn = document.querySelector('.play-pause-btn');
            const videoContainer = document.querySelector('.Video-Container');

            playPauseBtn.addEventListener('click', togglePlayPause);

            function togglePlayPause() {
                if (video.paused) {
                    video.play();
                    videoContainer.classList.add('video-playing');
                } else {
                    video.pause();
                    videoContainer.classList.remove('video-playing');
                }
            }

            gsap.registerPlugin(ScrollTrigger);

            // GSAP animation for the video container
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: '.Video-Container',
                    start: 'top 30%',
                    end: 'bottom 40%',
                    markers: false,
                    scrub: 0.5,
                }
            });
            tl.to('.mainVideo', {
                borderRadius: '30px',
                duration: 0.1
            });
            tl.to('.mainVideo', {
                width: '90vw',
                height: '50vh',
                ease: 'power2.out',
            });

            // GSAP animation for the play/pause button
            gsap.fromTo(playPauseBtn,
                {
                    xPercent: 0,
                    yPercent: 0
                },
                {
                    xPercent: -15,  // Move 5% to the left
                    yPercent: -15,  // Move 5% up
                    scrollTrigger: {
                        trigger: '.Video-Container',
                        start: 'top 30%',
                        end: 'bottom 40%',
                        scrub: 0.5,
                    }
                }
            );
        });
        gsap.registerPlugin(ScrollTrigger);

        // Horizontal scroll animation
        gsap.to(".cul-container", {
            x: () => -(document.querySelector(".cul-container").scrollWidth - window.innerWidth),
            ease: "none",
            scrollTrigger: {
                trigger: ".cul-container",
                pin: true,
                scrub: 1,
                end: () => "+=" + document.querySelector(".cul-container").scrollWidth
            }
        });

        // Animate slides
        gsap.utils.toArray(".cul-slide").forEach((slide, i) => {
            gsap.from(slide, {
                opacity: 0,
                scale: 0.8,
                duration: 1,
                ease: "power2.out",
                scrollTrigger: {
                    trigger: slide,
                    start: "left center",
                    end: "right center",
                    toggleActions: "play none none reverse"
                }
            });
        });

        // Video play/pause functionality
        const video = document.getElementById('cul-video');
        const playPauseBtn = document.getElementById('cul-play-pause-btn');

        playPauseBtn.addEventListener('click', () => {
            if (video.paused) {
                video.play();
                playPauseBtn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>';
            } else {
                video.pause();
                playPauseBtn.innerHTML = '<svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>';
            }
        });
    </script>

</body>

</html>