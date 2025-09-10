<script setup></script>

<template>
  <section>
    <div class="Wrapper">
      <div class="image w-screen flex justify-center align-center relative h-[40vh] mt-[10vh]">
        <div class="chip absolute w-full flex justify-center items-center">
          <h1 class="text-transparent bg-text w-full text-7xl font-bold text-center text-white">
            Category
          </h1>
        </div>
        <img class="w-full h-full object-cover" src="@/assets/media/wü.jpg" alt="wurzburg" />
      </div>
    </div>
  </section>
</template>

<style scoped>
.image img {
  width: 60vw;
  height: 40vh;
  border-radius: 1rem;
  box-shadow:
    0.3rem 0.3rem 0.6rem var(--greyLight-2),
    -0.2rem -0.2rem 0.5rem var(--white);
}
.image .chip {
  top: 50%;
  transform: translateY(-50%);
  width: 55vw;
  height: 35vh;
}
.image .chip h1 {
  text-transform: uppercase;
}
@media screen and (max-width: 1024px) {
  .Wrapper .image img {
    width: 90vw !important;
  }
  .image .chip {
    width: 85vw;
  }
}
</style>
