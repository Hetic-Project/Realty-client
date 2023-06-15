// Login
document.querySelector(".img-btn").addEventListener("click", function () {
  document.querySelector(".containerLogin").classList.toggle("s-signup");
});

// Profile
document.querySelector(".profile-card").addEventListener("click", function () {
  this.classList.toggle("flipped");
});
