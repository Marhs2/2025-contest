const box = document.querySelector(".sale-items");

fetch("product.json")
  .then((res) => res.json())
  .then((data) => {
    Object.keys(data.product).forEach((e) => {
      const item = data.product[e];
      const genre = document.createElement("div");
      genre.classList.add(e);

      Object.keys(item).forEach((asd) => {
        const it = document.createElement("div");
        it.classList.add("itemBox");
        const dd = item[asd];

        it.innerHTML += `


              <div class="img-cover"><img src="./asset/A-Module/images/${e}/${asd}.PNG" alt="${e}Img${asd}"></div>
              <div class="item-content">
                <div class="item-title">${dd.title}</div>
            <div class="item-pirce">가격: <span class="price">${dd.price}</span></div>
                <div class="btn">
                  <a href="#">구매하기</a>
                  <a href="#">장바구니담기</a>
                </div>
            </div>
          
        `;

        genre.innerHTML += it.outerHTML;
      });

      box.innerHTML += genre.outerHTML;
    });
  });
