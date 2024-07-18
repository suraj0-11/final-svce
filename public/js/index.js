gsap.registerPlugin(ScrollTrigger);
ScrollTrigger.create({
  trigger: ".pinMoto",
  start: "top top",
  end: "bottom +=50vh",
  pin: ".moto",
  markers: false,
});

const textHolders = document.querySelectorAll(".Transition-Left .text-holder ");
const options = {
  root: null,
  rootMargin: "0px",
  threshold: 0.1,
};
const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("visible");
    } else {
      entry.target.classList.remove("visible");
    }
  });
}, options);

textHolders.forEach((textHolder) => {
  observer.observe(textHolder);
});

// Academic Onscroll
gsap.registerPlugin(ScrollTrigger);

// Fade in animations
const fadeInElements = gsap.utils.toArray(".fade-in");
fadeInElements.forEach((element) => {
  gsap.fromTo(
    element,
    {
      opacity: 0,
      y: 50,
    },
    {
      opacity: 1,
      y: 0,
      scrollTrigger: {
        trigger: element,
        start: "top bottom",
      },
    }
  );
});

// Background image animation

const marquees = Array.from(document.querySelectorAll(".marquee"));

class Marquee {
  constructor({ el }) {
    this.el = el;
    this.marqueeAnimation = [
      { transform: "translateX(0)" },
      { transform: `translateX(calc(-100% - var(--gap,0)))` },
    ];

    this.marqueeTiming = {
      duration: this.el.dataset.duration * 10000,
      direction: this.el.dataset.reverse ? "reverse" : "normal",
      iterations: Infinity,
    };
    this.animations = [];
    this.SLOWDOWN_RATE = 0.2;
    this.cloneMarqueeGroup();
    this.init();
  }

  init() {
    for (const m of this.marquee__groups) {
      let q = m.animate(this.marqueeAnimation, this.marqueeTiming);

      this.animations.push(q);
    }

    this.initEvents();
  }
  slowDownAnimations() {
    for (const a of this.animations) {
      a.playbackRate = this.SLOWDOWN_RATE;
    }
  }
  resumeAnimationSpeed() {
    for (const a of this.animations) {
      a.playbackRate = true;
    }
  }
  initEvents() {
    this.el.addEventListener("mouseenter", () => this.slowDownAnimations());
    this.el.addEventListener("mouseleave", () => this.resumeAnimationSpeed());
  }

  cloneMarqueeGroup() {
    let clone = this.el.querySelector(".marquee__group").cloneNode(true);
    clone.classList.add("clone");
    this.el.appendChild(clone);
    this.marquee__groups = Array.from(
      this.el.querySelectorAll(".marquee__group")
    );
  }
}

for (const m of marquees) new Marquee({ el: m });
