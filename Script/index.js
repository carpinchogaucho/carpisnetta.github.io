
document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("¡Gracias por tu mensaje! Me pondré en contacto pronto.");
});

function playVideo() {
  const container = document.querySelector(".video-container");
  container.innerHTML = `
    <iframe
      width="560"
      height="315"
      src="https://www.youtube.com/embed/TNfCHBjewe0?autoplay=1"
      title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
    ></iframe>
  `;
}
  container.classList.remove("hidden");
  document.querySelector(".minecraft-video-preview").style.display = "none";
