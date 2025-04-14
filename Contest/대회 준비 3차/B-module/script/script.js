const hide = document.getElementById("hide");
const loop = document.getElementById("loop");
const ctrlCon = document.querySelector(".controlcontainer");
const ctrlS = document.querySelector(".controls");
const video = document.querySelector("video");

ctrlCon.addEventListener("change", () => {
  ctrlS.style.display = hide.checked == true ? "none" : "block";
  video.loop = loop.checked == true ? true : false;
});

$(".play").on("click", () => {
  video.play();
});
$(".pause").on("click", () => {
  video.pause();
});
$(".stop").on("click", () => {
  video.currentTime = 0;
  video.pause();
});
$(".timeminus").on("click", () => {
  video.currentTime -= 10;
});
$(".timeplus").on("click", () => {
  video.currentTime += 10;
});
$(".rateminus").on("click", () => {
  video.playbackRate -= 0.1;
});
$(".rateplus").on("click", () => {
  video.playbackRate += 0.1;
});
$(".resetrate").on("click", () => {
  video.playbackRate = 1;
});

$("#autoplay").change(() => {
  if ($("#autoplay").prop("checked") == true) {
    localStorage.setItem("auto", true);
    video.play();
  } else {
    localStorage.setItem("auto", false);
    video.pause();
  }
});

if (localStorage.getItem("auto") == "true") {
  video.muted = true;
  video.play();
  $("#autoplay").prop("checked", true);
}
