<template>
  <main class="w-screen h-screen flex justify-center items-start">
    <div class="components swing-in-top-fwd w-[90vw]">
      <div class="wrap flex flex-col align-center justify-between h-full">
        <div class="cat py-5 relative">
          <h1 class="text-[var(--accent)] text-4xl uppercase w-[fit-content] glowtext p-2">
            Shops
          </h1>
          <div class="items flex gap-10 flex-wrap">
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Restaurants</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Einkaufszentrum</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Metzgerei</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Supermarkt</a>
          </div>
        </div>
        <div class="line"></div>
        <div class="cat py-5">
          <h1 class="text-[var(--accent)] text-4xl uppercase w-[fit-content] glowtext p-2">
            Shops
          </h1>
          <div class="items flex gap-10 flex-wrap">
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Restaurants</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Einkaufszentrum</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Metzgerei</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Supermarkt</a>
          </div>
        </div>
        <div class="line"></div>
        <div class="cat py-5">
          <h1 class="text-[var(--accent)] text-4xl uppercase w-[fit-content] glowtext p-2">
            Shops
          </h1>
          <div class="items flex gap-10 flex-wrap">
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Restaurants</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Einkaufszentrum</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Metzgerei</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Supermarkt</a>
          </div>
        </div>
        <div class="line"></div>
        <div class="cat py-5">
          <h1 class="text-[var(--accent)] text-4xl uppercase w-[fit-content] glowtext p-2">
            Shops
          </h1>
          <div class="items flex gap-10 flex-wrap">
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Restaurants</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Einkaufszentrum</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Metzgerei</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Supermarkt</a>
          </div>
        </div>
        <div class="line"></div>
        <div class="cat py-5">
          <h1 class="text-[var(--accent)] text-4xl uppercase w-[fit-content] glowtext p-2">
            Shops
          </h1>
          <div class="items flex gap-10 flex-wrap">
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Restaurants</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Einkaufszentrum</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Metzgerei</a>
            <a class="text-[var(--greyLight-1)] text-3xl" href="">Supermarkt</a>
          </div>
        </div>
        <div class="line"></div>
      </div>
    </div>
  </main>
</template>
<style scoped>
.glowtext {
  color: white; /* Use the rich royal gold color for the text */
  text-shadow:
    0 0 5px var(--primary-light),
    /* Soft gold light for the inner glow */ 0 0 10px var(--primary),
    /* Rich royal gold for the mid glow */ 0 0 15px var(--primary-dark),
    /* Deep golden bronze for the outer glow */ 0 0 20px var(--primary),
    /* Balanced emerald green for an accent glow */ 0 0 30px var(--primary-light),
    /* Deep forest green for a deeper accent */ 0 0 40px var(--primary-dark); /* Light jade green for a subtle highlight */
}
.cat {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 3rem;
}
.line {
  height: 1px;
  width: 80%;
  background-color: white;
  margin: 0 auto;
}
.components {
  border-radius: 0rem 0rem 3rem 3rem;
  background: var(--primary);
  margin-top: -1em;
  overflow: scroll;
  height: 80vh;
}
.swing-in-top-fwd {
  -webkit-animation: swing-in-top-fwd 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) both;
  animation: swing-in-top-fwd 1s cubic-bezier(0.175, 0.885, 0.32, 1.275) both;
}

@-webkit-keyframes swing-in-top-fwd {
  0% {
    -webkit-transform: rotateX(-100deg);
    transform: rotateX(-100deg);
    -webkit-transform-origin: top;
    transform-origin: top;
    opacity: 0;
  }
  100% {
    -webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);
    -webkit-transform-origin: top;
    transform-origin: top;
    opacity: 1;
  }
}
@keyframes swing-in-top-fwd {
  0% {
    -webkit-transform: rotateX(-100deg);
    transform: rotateX(-100deg);
    -webkit-transform-origin: top;
    transform-origin: top;
    opacity: 0;
  }
  100% {
    -webkit-transform: rotateX(0deg);
    transform: rotateX(0deg);
    -webkit-transform-origin: top;
    transform-origin: top;
    opacity: 1;
  }
}
@media screen and (max-width: 600px) {
  .line {
    display: none;
  }
  .cat {
    border-bottom: solid 1px white;
  }
}
</style>
