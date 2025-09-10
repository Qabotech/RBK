<script setup>
import { ref, watch, computed, onMounted, onUnmounted } from 'vue'
import { useRoute, useRouter } from 'vue-router'
import NavMenu from '@/components/NavMenu.vue'
const route = useRoute()
const router = useRouter()

// Define a reactive variable to track the selected tab by name
const selectedTab = ref('Home')

// Define refs for each tab label
const homeLabel = ref(null)
const aboutLabel = ref(null)
const contactLabel = ref(null)
const categoryLabel = ref(null)
const show = ref(false)

// Define a reactive variable to track the width of the active label
const width = ref(0)

// Define a mapping between the route paths and tab names
const pathToTab = {
  '/': 'Home',
  '/about': 'About',
  '/contact': 'Contact',
  '/Category': 'Category',
}

// Watch the current route and update the selected tab by name
watch(
  () => route.path,
  (newPath) => {
    selectedTab.value = pathToTab[newPath] || 'Home' // Default to 'Home' if path is not found
  },
)

// Function to navigate when a tab is selected
const navigate = (tab) => {
  const tabToPath = Object.keys(pathToTab).find((path) => pathToTab[path] === tab)
  if (tabToPath) {
    router.push(tabToPath)
  }
}

// Store the labels' positions and widths
const tabPositions = ref({})

// Function to set the positions of the tab labels
const setTabPositions = () => {
  tabPositions.value = {
    Home: homeLabel.value?.offsetLeft || 0,
    About: aboutLabel.value?.offsetLeft || 0,
    Contact: contactLabel.value?.offsetLeft || 0,
    Category: categoryLabel.value?.offsetLeft || 0,
  }
  // Recalculate width of the active label
  const activeLabel = {
    Home: homeLabel.value,
    About: aboutLabel.value,
    Contact: contactLabel.value,
    Category: categoryLabel.value,
  }[selectedTab.value]
  if (activeLabel) {
    width.value = activeLabel.offsetWidth
  }
}

// Watch for changes and calculate the position
onMounted(() => {
  setTabPositions()

  // Recalculate tab positions on window resize
  window.addEventListener('resize', setTabPositions)
})

// Remove the event listener when the component is unmounted
onUnmounted(() => {
  window.removeEventListener('resize', setTabPositions)
})

const transformValue = computed(() => {
  // Calculate the position based on the selected tab
  const position = tabPositions.value[selectedTab.value] || 0
  return `translateX(${position - 2}px)`
})
const showMenu = () => {
  show.value = !show.value
}
</script>

<template>
  <section>
    <div class="wrap z-[2147483647]">
      <div class="segmented-control">
        <input
          type="radio"
          name="radio2"
          value="Home"
          id="tab-home"
          :checked="selectedTab === 'Home'"
          @change="navigate('Home')"
        />
        <label ref="homeLabel" for="tab-home" class="segmented-control__1">Home</label>

        <input
          type="radio"
          name="radio2"
          value="About"
          id="tab-about"
          :checked="selectedTab === 'About'"
          @change="navigate('About')"
        />
        <label ref="aboutLabel" for="tab-about" class="segmented-control__1">About</label>

        <input
          type="radio"
          name="radio2"
          value="Contact"
          id="tab-contact"
          :checked="selectedTab === 'Contact'"
          @change="navigate('Contact')"
        />
        <label ref="contactLabel" for="tab-contact" class="segmented-control__1">Contact</label>

        <input
          type="radio"
          name="radio2"
          value="Category"
          id="tab-category"
          :checked="selectedTab === 'Category'"
          @change="navigate('Category')"
        />
        <label ref="categoryLabel" for="tab-category" class="segmented-control__1">Category</label>

        <span class="segmented-control__icon" @click="showMenu()">
          <i class="fa-solid fa-circle-chevron-down"></i>
        </span>

        <!-- Replacing the color div with magic line effect -->
        <div class="magic-line" :style="{ transform: transformValue, width: width + 'px' }"></div>
      </div>
    </div>
    <NavMenu v-if="show"></NavMenu>
  </section>
</template>

<style scoped>
.wrap {
  width: auto;
  box-shadow:
    0.3rem 0.3rem 0.6rem var(--greyLight-2),
    -0.2rem -0.2rem 0.5rem var(--white);
  border-radius: 1rem;
  margin: 1em 1em;
  width: calc(100vw - 2em);
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 0;
  border-radius: 0 0 1em 1em;
  background: var(--greyLight-1);
  border: 1px solid var(--greyLight-2);
}

/* SEGMENTED-CONTROL */
.segmented-control {
  height: 4rem;
  display: flex;
  align-items: center;
  position: relative;
}
.segmented-control input {
  display: none;
}
.segmented-control > input:checked + label {
  transition: all 0.5s ease;
  color: var(--primary);
}
.segmented-control__1,
.segmented-control__icon {
  min-width: 6.8rem;
  width: auto;
  height: 3.6rem;
  font-size: 1.2rem;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  color: var(--greyDark);
  transition: all 0.5s ease;
}
.segmented-control__1:hover,
.segmented-control__2:hover,
.segmented-control__3:hover,
.segmented-control__icon:hover {
  color: var(--primary);
}

/* Magic Line Styling */
.magic-line {
  position: absolute;
  height: 1px;
  background-color: var(--primary);
  transition: transform 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  margin-left: 0.3rem;
  border-radius: 0.8rem;
  bottom: 5px;
  pointer-events: none;
}
.segmented-control__icon {
  min-width: unset;
}
</style>
