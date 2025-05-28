
document.getElementById("contact-form").addEventListener("submit", function (e) {
  e.preventDefault();
  alert("¡Gracias por tu mensaje! Me pondré en contacto pronto.");
});

function playVideo(url) {
  window.open(url, "_blank");
}

function playVideo() {
  const sound = document.getElementById("click-sound");
  if (sound) {
    sound.currentTime = 0;
    sound.play().catch(e => console.warn("Autoplay bloqueado:", e));
  }

  const container = document.querySelector(".video-container");
  container.innerHTML = `
    <iframe
      width="560"
      height="315"
      src="https://youtu.be/TNfCHBjewe0?si=5T0Md9rSUUK8yc0I"
      title="YouTube video player"
      frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
    ></iframe>
  `;
}
  container.classList.remove("hidden");
  document.querySelector(".minecraft-video-preview").style.display = "none";


  document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("contact-form");
  const responseElement = document.getElementById("form-response");
  const submitButton = form.querySelector("button[type='submit']");

  if (form) {
    form.addEventListener("submit", async (e) => {
      e.preventDefault();

      
      submitButton.disabled = true;
      const originalText = submitButton.textContent;
      submitButton.textContent = "Enviando...";

      const formData = new FormData(form);

      try {
        const response = await fetch(form.action, {
          method: "POST",
          body: formData,
        });

        const result = await response.text();
        responseElement.textContent = result;
        responseElement.style.color = "green";
        form.reset();
      } catch (error) {
        responseElement.textContent = "Hubo un error al enviar el formulario.";
        responseElement.style.color = "red";
      } finally {
        
        submitButton.disabled = false;
        submitButton.textContent = originalText;
      }
    });
  }
});