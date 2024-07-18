<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SVCE Bengaluru</title>
    <link rel="stylesheet" href="../public/css/navbar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../public/css/footer.css?v=<?php echo time(); ?>">
    <style>
        @layer library, reset, base, demo;
        @import 'https://unpkg.com/open-props@2.0.0-beta.5' layer(library);
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300..700&display=swap');

        @layer reset {

            *,
            ::before,
            ::after {
                box-sizing: border-box;
            }

            :where(:not(dialog)) {
                margin: 0;
            }
        }

        @layer base {
            html {
                --nav-block-size: 74px;
                --brand-gradient: linear-gradient(227deg,
                        #1400c7 0%,
                        #00bbff 100%);

                @media (prefers-reduced-motion: no-preference) {
                    scroll-behavior: smooth;
                }
            }

            body {
                font-family: 'Inter', sans-serif;
                min-block-size: 100dvb;
                font-size: 80px;
            }
        }


        @layer demo {
            .navbar {
                min-block-size: var(--nav-block-size);
                display: grid;
                position: fixed;
                inset-block-start: 0;
                inset-inline: 0;
                background-color: white;
                z-index: var(--layer-3);
                place-items: center end;
                padding-block: var(--size-3);
                padding-inline: var(--size-5);

                @media (width >=600px) {
                    padding-inline: 6dvi;
                }
            }

            .nav-cta-btn {
                font-size: var(--font-size-1);
                font-weight: var(--font-weight-7);
                inline-size: max-content;
                white-space: nowrap;
                text-decoration: none;
                padding-block: var(--size-3);
                padding-inline: var(--size-7);
                border: var(--border-size-2) solid transparent;
                color: black;
                position: relative;
                isolation: isolate;

                background: linear-gradient(white, white) padding-box,
                    var(--brand-gradient) border-box;
                border-radius: var(--radius-6);
                overflow: hidden;

                &::before {
                    content: '';
                    display: block;
                    position: absolute;
                    inset: 0;

                    background: var(--brand-gradient);
                    mix-blend-mode: screen;
                }

                &:hover {
                    color: white;

                    &::before {
                        background: var(--brand-gradient) padding-box,
                            var(--brand-gradient) border-box;
                        background-repeat: no-repeat;
                        background-size: contain;
                        mix-blend-mode: normal;
                        z-index: -1;
                    }
                }
            }

            .section {
                --section-block-size: max(400px, 100dvb);
                display: grid;
                background-color: white;
                min-block-size: var(--section-block-size);
                position: relative;
                block-size: 100%;
                display: grid;

                >* {
                    grid-area: 1/1;
                }
            }

            .section-wrapper {
                position: relative;
                display: grid;

                @media (width >=960px) {
                    grid-template-columns: 1fr 1fr;
                }

                @media (width < 960px) {
                    padding-block-start: calc(var(--nav-block-size) + var(--size-3));
                    padding-block-end: var(--size-3);
                }
            }

            .video {
                display: block;
                inline-size: 100%;
                block-size: 100%;
                object-fit: cover;
                position: relative;
                z-index: -1;
            }

            .content-wrapper {
                display: grid;

                @media (width < 960px) {
                    gap: var(--size-7);
                }
            }

            .meta {
                display: grid;
                gap: var(--size-3);
            }

            .content {
                display: grid;
                inline-size: 100%;
                place-items: center;

                @media (width >=960px) {
                    padding: var(--size-10);
                    min-block-size: 100cqb;
                    place-items: center end;
                }

                @media (width < 960px) {
                    gap: var(--size-5);
                }
            }

            .mobile-visual {
                inline-size: 100%;
                aspect-ratio: var(--ratio-square);

                @media (width >=960px) {
                    display: none;
                }
            }

            .headline {
                font-size: var(--font-size-7);
                font-weight: var(--font-weight-4);
                max-inline-size: var(--size-content-1);
                text-wrap: pretty;

                @media (width < 960px) {
                    font-size: var(--font-size-6);
                }
            }

            .desc {
                font-size: 18px;
                line-height: 1.5;
                max-inline-size: 60ch;
                text-wrap: pretty;
                padding-top: 20px;
                text-align: justify;

                @media (width < 960px) {
                    font-size: var(--font-size-3);
                }
            }

            .visual {
                display: grid;
                position: sticky;
                block-size: var(--section-block-size);
                inset-block-start: 0;
                container-type: size;

                @media (width < 960px) {
                    display: none;
                }
            }

            .video-visual {
                inline-size: 100%;
                block-size: var(--section-block-size);
                display: block;
                position: sticky;
                inset-block-start: 0;
                isolation: isolate;
                filter: hue-rotate(210deg);
            }

            .card-wrapper {
                container-type: size;
                display: grid;
                place-items: center;
                overflow: clip;

                >* {
                    grid-area: 1/1;
                }
            }

            .card {
                aspect-ratio: var(--ratio-square);
                inline-size: 70cqi;
                border-radius: var(--radius-3);
                scale: 0.4;
            }

            .card-img {
                display: block;
                inline-size: 100%;
                block-size: 100%;
                object-fit: cover;
            }

            .card-1 {
                scale: 1;
            }

            .card-2 {
                translate: -35cqi 30cqb;
                opacity: 0.1;
            }

            .card-3 {
                translate: 0cqi 50cqb;
                opacity: 0.1;
            }

            .card-4 {
                translate: 45cqi 40cqb;
                opacity: 0.1;
            }

            .content-1 {
                --_text-gradient: linear-gradient(227deg,
                        #1400c7 0%,
                        #00bbff 100%);
            }

            .content-2 {
                --_text-gradient: linear-gradient(227deg,
                        #28dc28 0%,
                        #00bbff 100%);
            }

            .content-3 {
                --_text-gradient: linear-gradient(227deg,
                        #1400c7 0%,
                        #b800b1 100%);
            }

            .content-4 {
                --_text-gradient: linear-gradient(227deg,
                        #b800b1 0%,
                        #f50000 100%);
            }

            .text-highlight {
                background: var(--_text-gradient);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
                text-fill-color: transparent;
            }
        }

        @supports (animation-timeline: scroll()) {
            body {
                timeline-scope: --content-1, --content-2, --content-3, --content-4;
            }

            .section {
                view-timeline-name: --section;
            }

            .content-1 {
                view-timeline-name: --content-1;
            }

            .content-2 {
                view-timeline-name: --content-2;
            }

            .content-3 {
                view-timeline-name: --content-3;
            }

            .content-4 {
                view-timeline-name: --content-4;
            }

            .card {
                animation-timing-function: linear;
                animation-fill-mode: forwards;
            }

            .card-1 {
                animation-timeline: --content-1;
                animation-name: slide-up-first-card;
            }

            .card-2 {
                animation-timeline: --content-2;
                animation-name: slide-up-card;
            }

            .card-3 {
                animation-timeline: --content-3;
                animation-name: slide-up-card;
            }

            .card-4 {
                animation-timeline: --content-4;
                animation-name: slide-up-card;
            }

            .video-visual {
                animation-timeline: --section;
                animation-range-end: exit 110%;
                animation-name: update-hue;
                animation-timing-function: step-end;
                animation-fill-mode: forwards;
            }

            @keyframes update-hue {
                0% {
                    filter: hue-rotate(210deg);
                }

                25% {
                    filter: hue-rotate(150deg);
                }

                45% {
                    filter: hue-rotate(300deg);
                }

                60% {
                    filter: hue-rotate(4deg);
                }
            }

            @keyframes slide-up-first-card {
                50% {
                    translate: 0;
                    opacity: 1;
                }

                90% {
                    translate: 0 -50cqi;
                    scale: 0.6;
                }

                100% {
                    translate: 0 -100cqi;
                    opacity: 0;
                }
            }

            @keyframes slide-up-card {
                50% {
                    opacity: 1;
                    translate: 0;
                    scale: 1;
                }

                90% {
                    opacity: 0.5;
                    scale: 0.6;
                    translate: 0 -50cqb;
                }

                100% {
                    translate: 0 -100cqi;
                    opacity: 0;
                }
            }
        }

        h1 {
            font-size: 40px;
            padding: 30px;
        }

        h2 {
            font-size: 80px;
        }

        .heading {
            font-size: 20px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0088cc;
            color: white;
            text-transform: capitalize;
        }

        .content {
            padding-top: 0px;
        }

        .cultural-section-div {
            position: relative;
            top: 10vh;
        }
    </style>
</head>

<body>
    <div><?php include __DIR__ . '/../includes/navbar.php'; ?></div>
    <div class="cultural-section-div">
        <div class="heading">
            <h1>EXTRA CURRICULUM ACTIVITIES</h1>
        </div>
        <div class="section">
            <div class="video-visual">
                <video class="video" autoplay loop muted poster="" role="none"
                    aria-label="background gradient animation">
                    <source
                        src="https://raw.githubusercontent.com/mobalti/open-props-interfaces/main/dynamic-content-lockups-v2/assets/bg-gradient-animation.mp4"
                        type="video/mp4" />
                </video>
            </div>
            <div class="section-wrapper">
                <div class="content-wrapper">
                    <div class="content content-1">
                        <div class="mobile-visual">
                            <img class="card-img" src="../public/images/kalavaibhava.png" alt="KALAAVAIBHAVA" />
                        </div>
                        <div class="meta">
                            <h2 class="headline">
                                KALAAVAIBHAVA<span class="text-highlight"><br>Festival of Colors</span>
                            </h2>
                            <p class="desc">
                                Sri Venkateshwara College of Engineering (Bengaluru, India) is organizing cultural event
                                named
                                as “KALAAVAIBHAVA” festival of colors. The main theme behind organizing this event is to
                                provide
                                a platform for the students to exhibit their talents in cultural activity apart from the
                                academics. We encourage the students to take part in various cultural event that is
                                organized
                                for three days. Even we allow external students from different colleges from different
                                places to
                                take part in the event and exhibit their hidden talents.
                            </p>
                        </div>
                    </div>
                    <div class="content content-2">
                        <div class="mobile-visual">
                            <img class="card-img" src="../public/images/udyukta.png" alt="UDYUKTA" />
                        </div>
                        <div class="meta">
                            <h2 class="headline">
                                UDYUKTA <br>
                                <span class="text-highlight">A Technical Fest</span>
                            </h2>
                            <p class="desc">
                                Immerse Yourself in a World Where Technology.....
                            </p>
                        </div>
                    </div>
                    <div class="content content-3">
                        <div class="mobile-visual">
                            <img class="card-img" src="../public/images/shrusti.png" alt="Shrusti" />
                        </div>
                        <div class="meta">
                            <h2 class="headline">
                                Shrusti <br>
                                <span class="text-highlight">A Cultural Fest</span>
                            </h2>
                            <p class="desc">
                                Harness powerful spells and enchantments to dominate your foes
                                and change the course of battle.
                            </p>
                        </div>
                    </div>
                    <div class="content content-4">
                        <div class="mobile-visual">
                            <img class="card-img" src="../public/images/karanataka.png" alt="Karnataka Rajyotsava" />
                        </div>
                        <div class="meta">
                            <h2 class="headline">
                                Karnataka <br> Rajyotsava <br> <span class="text-highlight">
                                    Karnataka <br> State Day.</span>
                            </h2>
                            <p class="desc">
                                Kannada Rajyotsava, also known as Karnataka Formation Day is celebrated on 1 November of
                                every
                                year. We celebrated Kannada Rajyotsava on 15th November in the presence of the esteemed
                                chief
                                guest Dr. Shri Belur Raghunandan along with our faculty and students
                            </p>
                        </div>
                    </div>
                </div>
                <div class="visual">
                    <div class="card-wrapper">
                        <div class="card card-1">
                            <img class="card-img" src="../public/images/kalavaibhava.png" alt="KALAAVAIBHAVA" />
                        </div>
                        <div class="card card-2">
                            <img class="card-img" src="../public/images/udyukta.png" alt="UDYUKTA" />
                        </div>
                        <div class="card card-3">
                            <img class="card-img" src="../public/images/shrusti.png" alt="Shrusti" />
                        </div>
                        <div class="card card-4">
                            <img class="card-img" src="../public/images/karanataka.png" alt="Karnataka Rajyotsava" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div><?php include __DIR__ . '/../includes/footer.php'; ?></div>
        </div>
    </div>
</body>

</html>