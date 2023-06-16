// Login
document.querySelector(".img-btn").addEventListener("click", function () {
  document.querySelector(".containerLogin").classList.toggle("s-signup");
});

// Profile
document.querySelector(".profile-card").addEventListener("click", function (event) {
  if (event.type === "click") {
    this.classList.toggle("flipped");
  }
});
