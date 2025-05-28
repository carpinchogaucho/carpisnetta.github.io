
document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("¡Gracias por tu mensaje! Me pondré en contacto pronto.");
});

function playVideo(url) {
  window.open(url, "_blank");
}

function playVideo() {
  const sound = document.getElementById("click-sound");
  if (sound) sound.play().catch(() => {});

  const container = document.getElementById("yt-video-container");
  container.innerHTML = `
    <iframe
      width="640"
      height="360"
      src="https://www.youtube.com/embed/TNfCHBjewe0?autoplay=1"
      title="YouTube video"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
    ></iframe>
  `;
}