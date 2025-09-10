<script setup></script>
<template>
  <div class="wrapper flex w-full h-[70vh] items-center justify-center">
    <div class="img w-[50vw] h-full flex items-center justify-end">
      <img
        class="object-cover rounded-[30rem] h-[70vh] rotate-[270deg]"
        src="https://images.unsplash.com/photo-1532459190037-b2b87f669453?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt=""
      />
    </div>
    <div class="text w-[50vw] h-full flex items-start justify-center flex-col ml-10 relative">
      <h1 class="text-[10rem] font-bold uppercase text-[var(--primary)]">
        About <br />
        Us
      </h1>
      <p class="text-[var(--greyDark)] ml-20">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, repellendus.
      </p>
    </div>
  </div>
</template>

<style scoped>
@media screen and (max-width: 1024px) {
  .wrapper {
    height: auto;
  }
  .text {
    position: absolute;
    text-align: center;
    margin: 0;
  }
  .text h1 {
    font-size: 4rem;
  }
  br {
    display: none;
  }
  p {
    margin: 0;
  }
  img {
    height: 50vh;
  }
}
</style>
