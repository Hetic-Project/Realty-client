// Login
document.querySelector(".img-btn").addEventListener("click", function () {
  document.querySelector(".containerLogin").classList.toggle("s-signup");
});

// Profile
const container = document.querySelector("#editProfileButton");
container.addEventListener("click", () => {
  container.classList.toggle("active");
});
