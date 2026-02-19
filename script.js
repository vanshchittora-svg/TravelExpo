
// CONTENT fade + slide
gsap.from(".content h2", {
  y: 40,
  opacity: 0,
  duration: 1,
  delay: 0.4,
  ease: "power3.out"
});

gsap.from(".content p", {
  y: 30,
  opacity: 0,
  duration: 1,
  delay: 0.7,
  stagger: 0.2,
  ease: "power3.out"
});

// FORM reveal
gsap.from(".form-container", {
  scale: 0.95,
  opacity: 0,
  duration: 1,
  delay: 1.1,
  ease: "power3.out"
});



