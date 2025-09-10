<script setup>
import { ref, onMounted, onUnmounted } from "vue";
import { useRouter } from "vue-router";
// Reactive state to toggle the `show` class
const showResults = ref(false);
const router = useRouter();
// Handler for the input interaction
const toggleResults = (event) => {
  if (event.target.value.trim().length > 0) {
    showResults.value = true;
  } else {
    showResults.value = false;
  }
};

// Function to hide results when clicking outside
const hideResults = (event) => {
  const resultsElement = document.querySelector(".results");
  if (resultsElement && !resultsElement.contains(event.target)) {
    showResults.value = false;
  }
};

// Add event listener when component is mounted
onMounted(() => {
  document.addEventListener("click", hideResults);
});

// Remove event listener when component is unmounted
onUnmounted(() => {
  document.removeEventListener("click", hideResults);
});
const goToCategory = (url) => {
  router.push(url);
};
</script>

<template>
  <section>
    <div class="imageWrap relative">
      <div class="Overlay"></div>
      <img src="@/assets/media/wü.jpg" alt="würzburg Panorama" class="object-cover" />
      <div class="search" :class="{ show: showResults }">
        <input
          type="text"
          class="search__input"
          placeholder="Wo nach Suchen sie?"
          @click="showResults = true"
          @input="toggleResults"
        />
        <div class="results" :class="{ show: showResults }">
          <div class="catResult flex flex-col w-full">
            <h2 class="ml-4 text-lg font-semibold uppercase text-[var(--accent-dark)]">
              Kategorie
            </h2>
            <div class="search_result" @click="goToCategory('/Category?id=' + 1)">
              <div class="img flex justify-center items-center">
                <img src="/src/assets/media/shopImage.jpeg" alt="" />
              </div>
              <h3 class="ml-4 text-lg font-semibold uppercase text-[var(--primary-dark)]">
                lorem ipsum
              </h3>
            </div>
            <div class="search_result" @click="goToCategory('/Category?id=' + 2)">
              <div class="img flex justify-center items-center">
                <img src="/src/assets/media/shopImage.jpeg" alt="" />
              </div>
              <h3 class="ml-4 text-lg font-semibold uppercase text-[var(--primary-dark)]">
                lorem ipsum
              </h3>
            </div>
            <div class="search_result" @click="goToCategory('/Category?id=' + 3)">
              <div class="img flex justify-center items-center">
                <img src="/src/assets/media/shopImage.jpeg" alt="" />
              </div>
              <h3 class="ml-4 text-lg font-semibold uppercase text-[var(--primary-dark)]">
                lorem ipsum
              </h3>
            </div>
          </div>
          <div class="catResult flex flex-col w-full">
            <h2 class="ml-4 text-lg font-semibold uppercase text-[var(--accent-dark)]">
              Kategorie
            </h2>
            <div class="search_result" @click="goToCategory('/Category?id=' + 1)">
              <div class="img flex justify-center items-center">
                <img src="/src/assets/media/shopImage.jpeg" alt="" />
              </div>
              <h3 class="ml-4 text-lg font-semibold uppercase text-[var(--primary-dark)]">
                lorem ipsum
              </h3>
            </div>
            <div class="search_result" @click="goToCategory('/Category?id=' + 2)">
              <div class="img flex justify-center items-center">
                <img src="/src/assets/media/shopImage.jpeg" alt="" />
              </div>
              <h3 class="ml-4 text-lg font-semibold uppercase text-[var(--primary-dark)]">
                lorem ipsum
              </h3>
            </div>
            <div class="search_result" @click="goToCategory('/Category?id=' + 3)">
              <div class="img flex justify-center items-center">
                <img src="/src/assets/media/shopImage.jpeg" alt="" />
              </div>
              <h3 class="ml-4 text-lg font-semibold uppercase text-[var(--primary-dark)]">
                lorem ipsum
              </h3>
            </div>
          </div>
        </div>
        <div class="search__icon">
          <i class="fa-solid fa-magnifying-glass"></i>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped>
.imageWrap {
  width: 60vw;
  height: 40vh;
}
section {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 2rem;
  height: 60vh;
  width: 100vw;
}
.imageWrap > img {
  border-radius: 1rem;
  height: 100%;
  width: 100%;
}
.search {
  position: absolute;
  background-color: white;
  border-radius: 1rem;
  width: 50vw;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  z-index: 10;
}
.search__input {
  width: 100%;
}s
.search.show > .search__input {
  box-shadow: none;
}
.search.show {
  border-radius: 1rem 1rem 0 0 !important;
  box-shadow: 0.3rem 0.3rem 0.6rem var(--greyLight-2), -0.2rem -0.2rem 0.5rem var(--white);
}

.results {
  display: none;
  overflow: hidden;
  height: 0;
  transition: height 5s ease-in-out;
}
.results.show {
  display: flex;
  flex-direction: column;
  position: absolute;
  background-color: white;
  border-radius: 0 0 1rem 1rem;
  width: 100%;
  left: 50%;
  top: 3.99rem;
  transform: translate(-50%, 0);
  z-index: 11;
  box-shadow: 0.3rem 0.3rem 0.6rem var(--greyLight-2), -0.2rem -0.2rem 0.5rem var(--white);
  overflow: scroll;
  height: 40vh;
  transition: height 5s ease-in-out;
}
.results.show .search_result {
  display: flex;
  margin: 1rem;
  padding: 1rem 0;
  align-items: center;
  gap: 1rem;
  cursor: pointer;

}
.results.show .search_result img {
  width: 5rem;
  height: 5rem;
  border-radius: 50%;
}
.img {
  width: 5.5rem;
  height: 5.5rem;
  border-radius: 50%;
  box-shadow: 0.3rem 0.3rem 0.6rem var(--greyLight-2), -0.2rem -0.2rem 0.5rem var(--white);
}
.search svg {
  width: 1.5rem;
}
@media screen and (max-width: 1024px) {
  .imageWrap {
    width: 80vw;
    height: 50vh;
  }
}
@media screen and (max-width: 820px) {
  .search {
    width: 90%;
  }
  .imageWrap {
    width: 95vw;
    height: 50vh;
  }
}
</style>
