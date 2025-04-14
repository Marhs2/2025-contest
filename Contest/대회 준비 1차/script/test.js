function drag() {
  function resotre(id) {
    $(`.item .itemBox[data-id="orig-${id}"]`)
      .css("opacity", 0.3)
      .draggable("enable");
  }

  $(".item .itemBox").Each((i, el) => {
    $(el).attr("data-id", `orig-${id}`).draggable({
      helper: "clone",
    });
  });

  $(".drop").droppable({
    accept: ".item .itemBox:not(.cloned)",

    drop(event, ui) {
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
          if ($(this).data("retruned")) {
            resotre($(this).data("id"));
            $(this).remove();
          }
        },
      });
      $orig.css({ opacity: 0.3 }).draggable("disable");
      $orig.find("text-content").get(0).innerHTML += `
      <div>
      <span>개수: </span>
      <input type="number" class="itemCount">
      </div>
      <div>
      <span>총 가격: </span>
      <span class="itemTotalPrice">총 가격: </span>
      </div>`;
    },
  });

  $("body").droppable({
    accept: ".cloned",

    drop(event, ui) {
      const $clone = ui.draggable;
      resotre($(this).data("id"));
      $(this).data("returned", true).remove();
    },
  });
}
