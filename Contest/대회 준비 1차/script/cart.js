const box = document.querySelector(".cart-header");
function genCart() {
  fetch("getCart.php")
    .then((res) => res.json())
    .then((data) => {
      console.log(data);
      data.forEach((e) => {
        box.innerHTML += `
    
        <div class="itemCart">
      <div class="img-box">
        <img
          src="./선수제공파일/A-Module/images/${e.itemcate}/${(e.itemidx).replace(/[^1-9]/g , '')}.PNG"
          alt="헤어케어-Img1" />
      </div>

      <div class="text-content">
        <div>
          <div class="item-title">
            <p>${e.title}</p>
          </div>
        </div>

        <div>
          <p class="fa price">₩ 가격: ${e.price}</p>
        </div>
        <div>
          <p>일반배송 2,500원 (20,000원 이상 무료배송)</p>
        </div>
        <div class="count">
        <input type="number" min="1" value="${e.count}">
        </div>
      </div>
    </div>


`;
      });
    });
}

genCart();
