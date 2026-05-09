document.addEventListener("DOMContentLoaded", () => {
  const items = document.querySelectorAll(".fade-item");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("show");
        } else {
          // небольшая задержка убирает дерганье
          setTimeout(() => {
            entry.target.classList.remove("show");
          }, 100);
        }
      });
    },
    {
      threshold: 0.2,
    }
  );

  items.forEach((item) => observer.observe(item));
});
