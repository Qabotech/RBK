<script setup>
import Slider from '@/components/Cat/CatBoxSlider.vue'
</script>
<template>
  <section class="flex justify-center align-center">
    <div class="components mt-[10vh] bg-[var(--greyLight-3)] flex">
      <div class="wrap text flex flex-col justify-around gap-10">
        <div class="wrapper">
          <h1 class="text-[var(--greyLight-1)] font-bold text-4xl"><slot name="title"></slot></h1>
          <a
            href=""
            class="text-2xl flex gap-2 align-center font-semibold text-[var(--greyLight-1)]"
            ><i class="fa-solid fa-map-pin text-[var(--primary-light)]"></i>
            <span>Location 12, 97225 City</span></a
          >
        </div>
        <div class="ratings flex flex-col gap-5">
          <div class="stars">
            <p class="font-semibold text-[var(--greyLight-1)] text-xl">Kunden bewertung:</p>
            <div class="star-rating">
              <div class="back-stars">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>

                <div class="front-stars" style="width: 70%">
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                  <i class="fa fa-star" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="hilal">
            <p class="font-semibold text-[var(--greyLight-1)] text-xl">Unser bewertung:</p>
            <div class="star-rating">
              <div class="back-stars">
                <i class="fa-solid fa-moon"></i>
                <i class="fa-solid fa-moon"></i>
                <i class="fa-solid fa-moon"></i>
                <i class="fa-solid fa-moon"></i>
                <i class="fa-solid fa-moon"></i>

                <div class="front-stars" style="width: 50%">
                  <i class="fa-solid fa-moon"></i>
                  <i class="fa-solid fa-moon"></i>
                  <i class="fa-solid fa-moon"></i>
                  <i class="fa-solid fa-moon"></i>
                  <i class="fa-solid fa-moon"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        <p
          class="font-semibold text-[var(--greyLight-1)] text-l underline cursor-pointer"
          @click="$emit('showDetails')"
        >
          mehr details
        </p>
      </div>
      <div class="wrap img overflow-hidden relative flex justify-center">
        <Slider>
          <div class="swiper-slide">
            <img src="@/assets/media/shopImage.jpeg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="@/assets/media/shopImage.jpeg" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="@/assets/media/shopImage.jpeg" alt="" />
          </div>
        </Slider>
      </div>
    </div>
  </section>
</template>
<style scoped>
.components {
  min-height: 50vh;
  height: auto;
  width: 80vw;
  padding: 1rem;
}
.components .wrap {
  height: calc(50vh- 1rem);
  width: 60%;
  padding: 1rem;
}
.wrap.text {
  width: 40%;
}
.star-rating {
  justify-content: start;
  font-size: 1.5rem;
  margin-top: 0;
}
.swiper-slide img {
  display: block;
  max-width: 100%;
  max-height: 100%;
  min-width: 100%;
  min-height: 100%;
  object-fit: cover;
  user-select: none;
}
@media screen and (max-width: 1024px) {
  .components {
    flex-direction: column-reverse;
  }
  .components > * {
    width: 100% !important;
  }
  .wrap.text {
    display: flex;
    flex-direction: row;
    text-align: center;
  }
  .components .wrapper {
    display: flex;
    justify-content: space-around;
    flex-direction: column;
  }
}
@media screen and (max-width: 820px) {
  .wrap.text {
    display: flex;
    flex-direction: column;
    text-align: center;
  }
  .wrap.text > * {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
  }
}
@media screen and (max-width: 440px) {
  .wrap.text .wrapper {
    flex-direction: column;
  }
}
@media screen and (max-width: 340px) {
  .wrap.text .ratings {
    flex-direction: column;
  }
}
</style>
