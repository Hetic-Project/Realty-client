const fileInput = document.getElementById('file-input');
const imageContainer = document.getElementById('image-container');

fileInput.addEventListener('change', function() {
  const file = this.files[0];
  const reader = new FileReader();

  reader.onload = function(e) {
    imageContainer.style.backgroundImage = `url(${e.target.result})`;
    imageContainer.classList.add("imageCreateLocation");
    imageContainer.removeAttribute("id");
  };

  reader.readAsDataURL(file);
});
