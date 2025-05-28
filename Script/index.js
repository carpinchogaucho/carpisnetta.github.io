
document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("¡Gracias por tu mensaje! Me pondré en contacto pronto.");
});

function playVideo(url) {
  window.open(url, "_blank");
}

function playVideo(clickedThumbnail, videoId) {
  const sound = document.getElementById("click-sound");
  if (sound) {
    sound.currentTime = 0;
    sound.play().catch(e => console.warn("Autoplay bloqueado:", e));
  }

  const container = clickedThumbnail.closest(".video-container");
  if (!container) return;

  container.innerHTML = `
    <iframe
      width="560"
      height="315"
      src="https://www.youtube.com/embed/${videoId}?autoplay=1"
      title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
    ></iframe>
  `;
}