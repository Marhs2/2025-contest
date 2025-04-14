const $Ctrls = $(".videoContainer");
const $video = document.querySelector("video");
$video.src =  src="./[웹디자인 및 개발] 2025 지방기능경기대회 선수제공파일/B-Module/AD.mp4";

$Ctrls.change(() => {
  $("#loop").prop("checked") == true
    ? ($video.loop = true)
    : ($video.loop = false);
  $("#hide").prop("checked") == true
    ? $(".controls").css("display", "none")
    : $(".controls").css("display", "block");
  if ($("#autoplay").prop("checked") == true) {
    localStorage.setItem("autoplay", true);
    $video.play();
  } else {
    localStorage.setItem("autoplay", false);
    $video.pause();
  }
});

if (localStorage.getItem("autoplay") == "true") {
  $("#autoplay").prop("checked", true);
  $video.muted = true
    $video.play();
  
}

$(".play").on("click", () => {
  $video.play();
});
$(".pause").on("click", () => {
  $video.pause();
});
$(".stop").on("click", () => {
  $video.pause();
  $video.currentTime = 0;
});
$(".timeminus").on("click", () => {
  $video.currentTime -= 10;
});
$(".timeplus").on("click", () => {
  $video.currentTime += 10;
});
$(".rateplus").on("click", () => {
  $video.playbackRate -= 0.1;
});
$(".rateminus").on("click", () => {
  $video.playbackRate += 0.1;
});
$(".ratereset").on("click", () => {
  $video.playbackRate = 1;
});

function userId() {
  let IDs = ["ASDFGHJKLZXCVBNMQWERTYUIOP1234567890"].join("").split("");
  let userId = [];
  for (let i = 0; i <= 6; i++) {
    const ran = Math.floor(Math.random() * IDs.length);
    userId+= IDs[ran]
  }
  $(".Id").text(userId);
}

userId();
