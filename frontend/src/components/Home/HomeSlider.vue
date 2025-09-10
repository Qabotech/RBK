<script setup>
import { onMounted } from 'vue'

// Define an array of Swiper IDs
const swipers = ['shop1', 'shop2', 'shop3', 'shop4']

// Define items for each Swiper
const swiperItems = swipers.map(() => Array.from({ length: 12 }, (_, index) => ({ id: index + 1 })))

onMounted(() => {
  // Dynamically initialize all Swipers
  swipers.forEach((swiperId, index) => {
    new Swiper(`.mySwiper-${swiperId}`, {
      slidesPerView: 4,
      spaceBetween: 30,
      slidesPerGroup: 4,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: `.swiper-pagination-${swiperId}`,
        clickable: true,
      },
      navigation: {
        nextEl: `.swiper-button-next-${swiperId}`,
        prevEl: `.swiper-button-prev-${swiperId}`,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
          slidesPerGroup: 1,
        },
        520: {
          slidesPerView: 2,
          slidesPerGroup: 2,
        },
        820: {
          slidesPerView: 3,
          slidesPerGroup: 3,
        },
        1024: {
          slidesPerView: 4,
          slidesPerGroup: 4,
        },
      },
    })
  })
})
</script>

<template>
  <section>
    <!-- Loop through Swipers -->
    <div
      v-for="(swiperId, index) in swipers"
      :key="swiperId"
      class="wrapper flex justify-center flex-col"
    >
      <!-- Display Swiper name dynamically -->
      <h1 class="text-5xl text-center text-[var(--accent-dark)] font-bold mb-[5vh] uppercase">
        {{ swiperId }}
      </h1>
      <div :class="`swiper-button-prev swiper-button-prev-${swiperId} icon__btn left`"></div>
      <div :class="`mySwiper-${swiperId} Slider flex justify-start relative overflow-hidden`">
        <div class="swiper-wrapper">
          <div class="swiper-slide item" v-for="item in swiperItems[index]" :key="item.id">
            <div class="icon card">
              <img src="@/assets/media/shopImage.jpeg" alt="shop" />
            </div>
            <div class="text-[var(--primary-dark)]">
              <h1 class="w-full text-3xl">Shop Name {{ item.id }}</h1>
            </div>
          </div>
        </div>
        <div :class="`swiper-pagination swiper-pagination-${swiperId}`"></div>
      </div>
      <div :class="`swiper-button-next swiper-button-next-${swiperId} icon__btn right`"></div>
    </div>
  </section>
</template>

<style scoped>
::v-deep(.swiper-pagination-bullet-active) {
  background-color: var(--accent-dark) !important;
}

.wrapper {
  min-height: 40vh;
  height: auto;
  width: 100%;
  position: relative;
  padding: 2rem 3vh;
  margin-bottom: 5vh;
}

.Slider {
  box-shadow:
    0.3rem 0.3rem 0.6rem var(--greyLight-2),
    -0.2rem -0.2rem 0.5rem var(--white);
  border-radius: 1rem;
  overflow: hidden;
  width: 100%;
  padding: 2rem 0;
  position: relative;
}

.item {
  flex-shrink: 0;
  margin-right: 1rem;
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-items: center;
  width: 300px;
}
.swiper-wrapper {
  margin-bottom: 3vh;
}
.card {
  border-radius: 50%;
  box-shadow:
    0.3rem 0.3rem 0.6rem var(--greyLight-2),
    -0.2rem -0.2rem 0.5rem var(--white);
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 2rem;
  cursor: pointer;
  color: var(--greyDark);
  transition: all 0.5s ease;
  overflow: hidden;
  margin-bottom: 1em;
  width: 16vw;
  height: 16vw;
}

.card img {
  width: 15vw;
  height: 15vw;
  border-radius: 50%;
  object-fit: cover;
  user-select: none;
}

.chip {
  width: 90%;
  height: 4rem;
  border-radius: 1rem;
  box-shadow:
    inset 0.3rem 0.3rem 0.6rem var(--greyLight-2),
    inset -0.2rem -0.2rem 0.5rem var(--white);
  color: var(--greyDark);
  text-align: center;
}

.icon__btn {
  bottom: 0;
  background-color: var(--greyLight-1);
  z-index: 10;
  cursor: pointer;
}
.icon__btn.right {
  right: 1%;
}
.icon__btn.left {
  left: 1%;
}
.swiper-button-prev:after,
.swiper-button-next:after {
  font-size: 1em;
}
.swiper-pagination-bullet-active {
  background-color: var(--accent-dark) !important;
}
@media screen and (max-width: 1024px) {
}
@media screen and (max-width: 820px) {
  .icon__btn.right,
  .icon__btn.left {
    display: none;
  }
  .card img {
    width: 24vw;
    height: 24vw;
  }
  .card {
    width: 25vw;
    height: 25vw;
  }
}
@media screen and (max-width: 520px) {
  .card img {
    width: 37vw;
    height: 37vw;
  }
  .card {
    width: 38vw;
    height: 38vw;
  }
}
@media screen and (max-width: 420px) {
  .card img {
    width: 44vw;
    height: 44vw;
  }
  .card {
    width: 45vw;
    height: 45vw;
  }
}
</style>
