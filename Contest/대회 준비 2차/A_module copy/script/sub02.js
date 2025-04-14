function fnVideo() {
  const video = document.querySelector("video");

  $(".play").on("click", () => {
    video.play();
  });
  $(".stop").on("click", () => {
    video.pause(0);
  });
  $(".pause").on("click", () => {
    video.pause();
  });
  $(".timeMinus10s").on("click", () => {
    video.currentTime -= 10;
  });
  $(".timePlus10s").on("click", () => {
    video.currentTime += 10;
  });
  $(".speedMinus").on("click", () => {
    video.playbackRate += 0.1;
  });
  $(".speedPlus").on("click", () => {
    video.playbackRate -= 0.1;
  });
  $(".speedReset").on("click", () => {
    video.playbackRate = 1;
  });

  $("#loop").change(() => {
    $("#loop").is(":checked")
      ? $("video").prop("loop", true)
      : $("video").prop("loop", false);
  });

  $("#hide").change(() => {
    $("#hide").is(":checked")
      ? ($(".control").get(0).style.display = "none")
      : ($(".control").get(0).style.display = "block");
  });

  $(".autoplay").change(() => {
    if ($("#autoplay").is(":checked") == true) {
      localStorage.setItem("autoplay", true);
      video.play();
    } else if ($("#autoplay").is(":checked") == false) {
      localStorage.setItem("autoplay", false);
      video.pause(0);
    }
  });

  if (localStorage.getItem("autoplay") == "true") {
    $("#autoplay").prop("checked", true);
    video.muted = true;
    video.play();
  }
  console.log(localStorage.getItem("autoplay"));
}
$(".nonUseBuy").on("click", () => {
  $(".modal").show();
  $("body").css("overflow", "hidden");
});
$(".closeModal").on("click", () => {
  $(".modal").hide();
  $("body").css("overflow", "visible");
});

const IDs = ["ABCDEFGHIJKLMNOPQRSTUVWXZ123456789"].join("").split("");

let userID = $(".userIdText").get(0);

console.log(userID);
for (let i = 0; i <= 5; i++) {
  const ran = Math.floor(Math.random() * IDs.length);
  userID.textContent += IDs[ran];
}

let Total = 0;

function changeTotal() {
  let realTotal = 0;
  Array.from($(".drop .item-Box")).forEach((e) => {
    Total += parseInt(
      $(e)
        .find(".itemtotalPriceText")
        .get(0)
        .textContent.replace(/[^0-9]/g, "")
    );
    realTotal += Total;
    Total = 0;
  });
  $(".totalPriceText").get(0).textContent = realTotal.toLocaleString("en-us");
}

function changeitme(count, price, item) {
  $(item).find(".itemtotalPriceText").get(0).textContent = (
    price * count
  ).toLocaleString("en-us");
  changeTotal();
}

function getItem() {
  Array.from($(".drop .item-Box")).forEach((asd) => {
    asd.addEventListener("change", (item) => {
      changeitme(
        $(asd).find("input").val(),
        $(asd)
          .find(".price")
          .text()
          .replace(/[^0-9]/g, ""),
        asd
      );
    });
  });
}

function resotre(e) {
  $(e).draggable({
    helper: "clone",
    appendTo: "body",
    zIndex: 9999,
  });
}

function drag() {
  $(".drop").droppable({
    accept: ".modalItemContainer .itemBox",

    drop(event, ui) {
      const $orig = ui.draggable;
      const id = $orig.data("id");

      if (!$orig.hasClass("cloned")) {
        const $exit = $(`.itemBox.cloned[data-id="${id}]"`);

        if ($exit.length) {
          const $input = $exit.find(".itemCount");
          $input.val(parseInt($input.val() || 0) + 1);
        } else {
          const $clone = $orig
            .clone()
            .css({ position: "relative", top: 0, left: 0, opacity: 1 })
            .removeClass("ui-draggable ui-draggable-handle")
            .addClass("cloned")
            .attr("data-id", id)
            .appendTo(this);

          $clone.draggable({
            helper: "clone",
            appendTo: "body",
            start() {
              $(this).data("valid-drop", false);
            },

            stop() {
              if ($(this).data("valid-drop")) {
                $(this).data("valid-drop", true);
                $(this).remove();
              }
            },
          });
        }
      }
    },
  });
}

$(".modalItemContainer .itemBox").each((i, e) => resotre(e));

drag();
fnVideo();
