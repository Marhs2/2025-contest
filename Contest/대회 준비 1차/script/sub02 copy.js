function drag() {
  function resotre(id) {
    $(`.items .itemBox[data-id="${id}"]`).css("opacity", 1).draggable("enable");
  }

  $(".items .itemBox").each((i, el) => {
    $(el).attr("data-id", `orig-${i}`).draggable({
      helper: "clone",
    });
  });

  $(".drop").droppable({
    accept: ".itemBox:not(.cloned)",

    drop(evnet, ui) {
      const $orig = ui.draggable;
      const id = $orig.data("id");

      const $clone = $orig
        .clone()
        .removeClass("ui-draggable ui-draggable-handle")
        .addClass("cloned")
        .attr("data-id", id)
        .appendTo(this);

      $clone.draggable({
        stop(e, item_ui) {
          if (!$(this).data("returned")) {
            resotre($(this).data("id"));
            $(this).remove();
          }
        },
      });

      $orig.css({ opacity: 0.3 }).draggable("disable");

      $clone.find(".text-content").get(0).innerHTML += `
      <div>
      <span>개수 : </span>
      <input type ="number" class="itemCount" value ="1" min="1"/>
       </div>
      <div >
      <span>총 가격: </span>
      <span class="itemTotalPrice">65,000원 </span>
       </div>
      `;

      priceChange();
    },
  });

  $("body").droppable({
    accept: ".cloned",
    drop(event, ui) {
      const $clone = ui.draggable;
      resotre($(this).data("id"));
      $clone.data("returned", true).remove();
    },
  });

  // [...$(".items .itemBox")].each(el, () => {
  //   $(el).draggable({
  //     helper: "clone",
  //   });
  // });
}