const lenis = new Lenis({
  smooth: true,
  lerp: 0.14,
});

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);
