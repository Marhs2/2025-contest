function addCart() {
  [...$(".addCrat")].forEach((e) => {
    e.addEventListener("click", () => {
      console.log(e.closest(".itemCart").querySelector("img").alt.split("-"));
      const data = new FormData();
      data.append(
        "cate",
        e.closest(".itemCart").querySelector("img").alt.split("-")[0]
      );
      data.append(
        "num",
        e.closest(".itemCart").querySelector("img").alt.split("-")[1]
      );
      data.append(
        "price",
        e
          .closest(".itemCart")
          .querySelector(".price")
          .textContent.replace(/[^0-9]/g, "")
      );
      data.append(
        "title",
        e.closest(".itemCart").querySelector(".item-title").textContent.trim()
      );

      fetch("addCart.php", {
        method: "POST",
        body: data,
      })
        .then((res) => res.text())
        .then((data) => console.log(data));
    });
  });
}

addCart();
