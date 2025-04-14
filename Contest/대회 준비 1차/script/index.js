const $singupModal = $(".singupModal");
const $loginModal = $(".loginModal");

$(".signup , .singupModal .modal-close ").on("click", () => {
  $singupModal.toggle();
});

$(".login , .loginModal .modal-close ").on("click", () => {
  $loginModal.toggle();
});

$(".DESC").on("click",()=>{
  
})
