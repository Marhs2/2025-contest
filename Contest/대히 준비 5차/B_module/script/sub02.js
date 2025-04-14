const $CntrlCon = $(".controlContainer");
const $video = document.querySelector("video");

$CntrlCon.change(() => {
  $("#hide").is(":checked")
    ? $(".control").css("display", "none")
    : $(".control").css("display", "block");

  $("#loop").is(":checked") ? ($video.loop = true) : ($video.loop = false);

  if ($("#autoplay").is(":checked")) {
    localStorage.setItem("autoplay", true);
    $video.play();
  } else {
    localStorage.setItem("autoplay", false);
    $video.pause();
  }
});

if (localStorage.getItem("autoplay") == "true") {
  $("#autoplay").prop("checked", true);
  $video.muted = true;
  $video.play();
  $video.muted = false;
}

$(".start").on("click", () => {
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
  $video.playbackRate += 0.1;
});
$(".rateminus").on("click", () => {
  $video.playbackRate -= 0.1;
});
$(".ratereset").on("click", () => {
  $video.playbackRate = 1;
});

$(".nonUserCart ,.close").on("click", () => {
  $(".modal").toggle();
});

function categoty() {
  [...$(".category div")].forEach((e) => {
    e.addEventListener("click", () => {
      fetch("./product.json")
      .then((res) => res.json())
      .then((data) => {
        const itemBox = $(".itemCart").get(0);
        itemBox.innerHTML = ''
          Object.keys(data.product[e.textContent]).forEach((i) => {
            const item = data.product[e.textContent][i];
            itemBox.innerHTML += `
            <div class="itemBox" data-id="${e.textContent + i}">
            <div class="img-cover"><img src="./asset/A-Module/images/${
              e.textContent
            }/${i}.PNG" alt="헤어케어Img3"></div>
            <div class="item-content">
              <div class="item-title">${item.title}</div>
              <div class="item-pirce">가격: ${item.price}</span></div>
            </div>
            `;
          });
          $(".itemCart .itemBox").each((i, e) => resotre(e));
        });
    });
  });
}

categoty();

function resotre(e) {
  $(e).draggable({
    helper: "clone",
    appendTo: "body",
    zIndex: 9999,
  });
}

function drag() {
  $(".drop").droppable({
    accept: ".itemCart .itemBox",

    drop(event, ui) {
      const $orig = ui.draggable;
      const id = $orig.data("id");

      if (!$orig.hasClass("cloned")) {
        const $exit = $(`.itemBox.cloned[data-id="${id}"]`);

        if ($exit.length) {
          const $input = $exit.find(".itemCount");
          let $origPrice = $exit.find(".price");
          let $change = $exit.find(".itemTotalText");
          $input.val(parseInt($input.val() || 0) + 1);
          $change.text($input.val() * $origPrice.text().replace(/[^0-9]/g, ""));
        } else {
          const $clone = $orig
            .clone()
            .css({ position: "relative", top: 0, left: 0, opacity: 1 })
            .removeClass("ui-draggable ui-draggable-handle")
            .addClass("cloned")
            .attr("data-id", id)
            .appendTo(this);

          $clone.find(".item-content").append(`
              
              
              <div class="count">
                <input type="number" value="1" min="1" class="itemCount">
              </div>

              <div class="itemTotal">
                총 금액: <span class="itemTotalText">${$orig
                  .find(".price")
                  .text()}</span>
              </div>
              
              `);

          $clone.draggable({
            helper: "clone",
            appendTo: "body",
            zIndex: 9999,
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
      } else {
        $orig.data("valid-drop", false);
      }
    },
  });

  $("body").droppable({
    accept: ".cloned",

    drop(event, ui) {
      ui.draggable.data("valid-drop", true);

      ui.draggable.remove();
    },
  });
}

drag();
