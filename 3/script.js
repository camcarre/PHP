
const data = [
    {
      name: "Hero 1",
      image: "hero.png",          
      description: "Description du premier héros"
    },
    {
      name: "Hero 2",
      image: "hero.png",
      description: "Description du second héros"
    },
    {
      name: "Hero 3",
      image: "hero.png",
      description: "Description du troisième héros"
    },
    {
      name: "Hero 4",
      image: "hero.png",
      description: "Encore un autre héros..."
    },
    {
      name: "Hero 5",
      image: "hero.png",
      description: "Un héros de plus !"
    },
    {
      name: "Hero 6",
      image: "hero.png",
      description: "Et encore un autre..."
    },
   ];
  
 const cardsContainer = document.getElementById("cards-container");

 function createCard(index) {
    const card = document.createElement("div");
    card.classList.add("card");

    const heroImage = document.createElement("img");
    heroImage.src = "hero.png";
    heroImage.alt = "Héros " + index;

    const cardInfo = document.createElement("div");
    cardInfo.classList.add("card-info");
    cardInfo.textContent = "Description du héros " + index;

     card.appendChild(heroImage);
    card.appendChild(cardInfo);

    return card;
}

 function loadMoreCards(count = 6) {
    for (let i = 0; i < count; i++) {
        const card = createCard(cardsContainer.children.length + 1);
        cardsContainer.appendChild(card);
    }
}

 const observer = new IntersectionObserver((entries) => {
    const lastCard = entries[0];
    if (lastCard.isIntersecting) {
        loadMoreCards(6);
    }
}, {
    root: null,
    threshold: 0.1,
});

 const sentinel = document.createElement("div");
sentinel.style.width = "100%";
sentinel.style.height = "20px";
cardsContainer.appendChild(sentinel);
observer.observe(sentinel);

 loadMoreCards(12);