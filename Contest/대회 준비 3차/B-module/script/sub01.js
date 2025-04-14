const mottoContainer = Array.from($(".mottoContainer").get(0).children);

mottoContainer.forEach((e) => {
  $(e).mouseenter(() => {
    mottoContainer.forEach((i) => {
      const Des = `Des${}`
      i.style.backgroundImage = `url("./images/${e.className}.png")`;
    });
  });

  $(e).mouseleave(() => {
    mottoContainer.forEach((i) => {
      i.style.backgroundImage = `url("./images/${i.className}.png")`;
    });
  });
});
