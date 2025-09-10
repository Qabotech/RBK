
<script setup>

</script>
<template>

    <div class="wrapper w-screen h-screen flex items-center justify-between px-[5vw]">
        <div class="text  h-full right-0 w-[20vw]  flex flex-col items-center justify-center">
          <h2 class="text-7xl font-bold text-[var(--accent)] uppercase">lorem Ipsum</h2>
          <p class="text-[var(--greyDark)]">lorem Nisi nostrud nostrud irure proident dolor aliqua ut exercitation. Irure elit commodo eu tempor dolor laboris minim deserunt ut ex voluptate consectetur. Deserunt veniam tempor dolore magna magna quis dolor laboris incididunt ad exercitation mollit. Ea ex proident ea nisi anim laborum esse incididunt ea pariatur ea. Nulla pariatur aliqua irure dolore. Sint anim ullamco duis culpa laboris nisi est enim exercitation eu minim id laborum.</p>

        </div>
        <!-- https://images.pexels.com/photos/2162909/pexels-photo-2162909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1 -->
        <!-- https://images.pexels.com/photos/2627023/pexels-photo-2627023.jpeg -->
        <img class="rounded-full h-[600px] w-[600px] object-cover" src="https://images.pexels.com/photos/6243769/pexels-photo-6243769.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        <div class="text  h-full left-0 w-[20vw] flex flex-col items-center justify-center ">
          <h2 class="text-7xl font-bold text-[var(--accent)] uppercase">lorem Ipsum</h2>
          <p class="text-[var(--greyDark)]">lorem Incididunt amet elit officia incididunt magna et adipisicing Lorem excepteur irure. Ut magna amet culpa fugiat aliqua in et. Aute ex commodo occaecat duis do dolore nulla tempor. Est ea amet deserunt deserunt enim quis do amet.</p>

        </div>

    </div>
</template>


<style scoped>
@media screen and (max-width: 1024px) {
  .wrapper{
    height:auto;
    flex-direction:column;
    gap:3rem;
  }
  .text{
    width:90%;
    text-align: center;
  }
  .text h2{
    margin-bottom:1rem;
  }
  .wrapper img{
    width:90vw;
    height:90vw;
  }
}
</style>
