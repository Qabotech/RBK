<template>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <slot></slot>
    </div>
    <!-- Navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <!-- Pagination -->
    <div class="swiper-pagination"></div>
  </div>
</template>

<script>
export default {
  name: 'ImageSlider',
  mounted() {
    // Initialize Swiper after the component is mounted
    new Swiper('.swiper-container', {
      loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    })
  },
}
</script>
<style scoped>
::v-deep(.swiper-pagination-bullet-active) {
  background-color: var(--accent-dark) !important;
}
</style>
<style scoped>
/* Swiper container styling */
.swiper-container {
  width: 80%;
  height: calc(50vh - 6rem);
  border-radius: 1rem;
  margin-bottom: 2rem;
  overflow: hidden;
}

.swiper-slide {
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: var(--greyLight-1);
  border: 1px solid var(--primary-dark);
  border-radius: 10px;
}

/* Navigation buttons */
.swiper-button-next,
.swiper-button-prev {
  color: var(--primary-dark);
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
  color: var(--primary-light);
}

/* Pagination dots */
.swiper-pagination-bullet {
  background-color: var(--greyLight-2);
}

.swiper-pagination-bullet-active {
  background-color: var(--primary);
}
</style>
