<template>
  <main class="page-wrapper">
    <section class="product-wrapper">
      <div class="hide absolute right-5 top-5 btn" @click="$emit('close')">
        <i class="fa-solid fa-x"></i>
      </div>
      <aside class="product-img-wrapper w-[45vw]">
        <img :src="mainImage" alt="Main product image" class="product-img mb-5 w-[45vw] h-[77vh]" />
        <!-- Swiper container with navigation arrows -->
        <div class="swiper-thumbnails thumbnails flex overflow-x-hidden relative">
          <div class="swiper-wrapper">
            <!-- Swiper slides -->
            <div
              class="swiper-slide"
              v-for="(image, index) in thumbnails"
              :key="index"
              @click="changeImage(image.src)"
            >
              <img
                :src="image.src"
                :alt="image.alt"
                :class="{ thumbnail: true, active: image.src === mainImage }"
                class="h-[80px] w-[80px] min-w-[80px] object-cover"
              />
            </div>
          </div>
          <!-- Navigation arrows -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </aside>
      <article class="product-info flex flex-col gap-5 w-[45vw]">
        <div class="wrapper flex flex-col gap-5">
          <h1 class="text-[var(--accent-dark)] font-bold text-4xl"><slot name="title"></slot></h1>
          <a
            href=""
            class="text-xl flex gap-2 align-center font-semibold text-[var(--primary-dark)]"
            ><i class="fa-solid fa-map-pin text-[var(--primary-dark)]"></i>
            <span>Location 12, 97225 City</span></a
          >
        </div>
        <div class="text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt magni provident officia,
          reiciendis autem ipsa nulla aperiam asperiores. Saepe, repudiandae neque. Laborum delectus
          accusamus cum at, quis in laudantium distinctio alias aspernatur autem eius labore quas
          omnis possimus magni iusto accusantium laboriosam expedita inventore libero blanditiis
          dolorum qui. Recusandae perferendis doloremque quisquam quod et. Eum sequi, voluptates nam
          ipsa a dolorem voluptatem quisquam ab eos molestiae fugit, libero, debitis pariatur!
        </div>
        <div class="ratings flex justify-between mt-5">
          <div class="stars">
            <p class="font-semibold text-[var(--primary-dark)] text-l">Kunden bewertung:</p>
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
            <p class="font-semibold text-[var(--primary-dark)] text-l">Unser bewertung:</p>
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
        <CatPageComments />
      </article>
    </section>
  </main>
</template>

<script>
import { ref, onMounted } from 'vue'
import CatPageComments from './CatPageComments.vue'
export default {
  components: {
    CatPageComments, // Register the comments component
  },
  setup() {
    const mainImage = ref(
      'https://images.unsplash.com/photo-1575475845137-36cea99e9751?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fHNob3BzfGVufDB8fDB8fHww',
    )
    const thumbnails = ref([
      {
        src: 'https://images.unsplash.com/photo-1575475845137-36cea99e9751?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fHNob3BzfGVufDB8fDB8fHww',
        alt: 'Thumbnail 1',
      },
      {
        src: 'https://images.unsplash.com/photo-1565982540206-bb4f9d4e3fa4?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        alt: 'Thumbnail 2',
      },
      {
        src: 'https://images.unsplash.com/photo-1569917761875-e2897cee7d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        alt: 'Thumbnail 3',
      },
      {
        src: 'https://images.unsplash.com/photo-1575475845137-36cea99e9751?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fHNob3BzfGVufDB8fDB8fHww',
        alt: 'Thumbnail 1',
      },
      {
        src: 'https://images.unsplash.com/photo-1565982540206-bb4f9d4e3fa4?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        alt: 'Thumbnail 2',
      },
      {
        src: 'https://images.unsplash.com/photo-1569917761875-e2897cee7d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        alt: 'Thumbnail 3',
      },
      {
        src: 'https://images.unsplash.com/photo-1575475845137-36cea99e9751?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzR8fHNob3BzfGVufDB8fDB8fHww',
        alt: 'Thumbnail 1',
      },
      {
        src: 'https://images.unsplash.com/photo-1565982540206-bb4f9d4e3fa4?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        alt: 'Thumbnail 2',
      },
      {
        src: 'https://images.unsplash.com/photo-1569917761875-e2897cee7d80?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        alt: 'Thumbnail 3',
      },
    ])

    const changeImage = (src) => {
      mainImage.value = src
    }

    // Initialize Swiper after the component is mounted
    onMounted(() => {
      // eslint-disable-next-line no-undef
      new Swiper('.swiper-thumbnails', {
        loop: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
        slidesPerView: 5,
        grabCursor: true,
        breakpoints: {
          0: {
            slidesPerView: 3,
            slidesPerGroup: 3,
          },
          520: {
            slidesPerView: 4,
            slidesPerGroup: 4,
          },
          820: {
            slidesPerView: 5,
            slidesPerGroup: 5,
          },
          1024: {
            slidesPerView: 5,
            slidesPerGroup: 5,
          },
        },
      })
    })

    return {
      mainImage,
      thumbnails,
      changeImage,
    }
  },
}
</script>
<style scoped>
/* Existing styles remain unchanged */

/* Swiper navigation arrows */
.swiper-button-next,
.swiper-button-prev {
  position: absolute;
    top: 75%;
    transform: translate(0,-50%);
    width: 30px;
    height: 30px;
    background-color: var(--primary);
    color: var(--white);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    z-index: 10;
    opacity: 0.7;
    transition: opacity 0.3s ease;
}

.swiper-button-next:hover,
.swiper-button-prev:hover {
  opacity: 1;
}

.swiper-button-next::after,
.swiper-button-prev::after {
  font-family: 'Font Awesome 5 Free'; /* Ensure Font Awesome is loaded */
  font-weight: 900;
  font-size: 16px;
}

.swiper-button-next::after {
  content: '\f054'; /* Font Awesome chevron-right icon */
}

.swiper-button-prev::after {
  content: '\f053'; /* Font Awesome chevron-left icon */
}

.swiper-button-next {
  right: 10px;
}

.swiper-button-prev {
  left: 10px;
}
</style>
<style>
.thumbnail {
  cursor: pointer;
}

.thumbnail.active {
  border: 2px solid #007bff;
}
</style>

<style scoped>
.hide {
  width: 2rem;
  height: 2rem;
  color: var(--greyLight-1);
  background: var(--primary-dark);
}
.page-wrapper {
  background-color: var(--greyLight-1);
  color: var(--greyDark);
  padding: 20px;
  font-family: Arial, sans-serif;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 99;
  width: 100vw;
}

.product-wrapper {
  position: relative;
  max-width: 95vw;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  grid-gap: 50px;
  margin: 50px auto;
  background: var(--white);
  border: 1px solid var(--greyLight-2);
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  padding: 20px;
  max-height:100vh;
  overflow:hidden;
}

.product-img-wrapper img.main-image {
  max-width: 100%;
  border: 5px solid var(--primary-light);
  border-radius: 8px;
  margin-bottom: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
.thumbnails img,
.product-img {
  border-radius: 1rem;
  object-fit: cover;
  object-position: center;
}

.thumbnail {
  border: 2px solid var(--primary-light);
  border-radius: 5px;
  cursor: pointer;
  transition:
    transform 0.3s ease,
    border-color 0.3s ease;
}

.thumbnail:hover {
  transform: scale(1.1);
  border-color: var(--primary-dark);
}

.thumbnail.active {
  border-color: var(--accent);
  border-radius: 1rem;
}

.product-info {
  padding: 20px;
  overflow:scroll;
  height:calc(95vh - 20px);
}

.tags {
  font-size: 14px;
  background-color: var(--accent-light);
  color: var(--white);
  padding: 5px 10px;
  border-radius: 5px;
  display: inline-block;
  margin-bottom: 10px;
}
.star-rating {
  margin-top: 0;
  justify-content: start;
  font-size: 1em;
}
.swiper-slide {
  display: flex;
  justify-content: center;
}
@media screen and (max-width: 1024px) {
  .product-wrapper {
    max-width: 100vw;
  }
  .product-img {
    height: 50vh;
  }

}
@media screen and (max-width: 960px) {
  .product-wrapper {
    display: flex;
    flex-direction: column;
    overflow: scroll !important;
    max-height: 90vh;
  }
  .product-img,
  .product-info,
  .product-img-wrapper {
    width: 100%;
  }
  .product-info{
    overflow:unset;
  }
}
</style>
