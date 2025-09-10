<script setup>
import { ref } from 'vue'

import CatHeader from '@/components/Cat/CatHeader.vue'
import CatBox from '@/components/Cat/CatBox.vue'
import CatPage from '@/components/Cat/CatPage.vue'

const catPageVisible = ref(false)

const openCatPage = () => {
  catPageVisible.value = true
}
</script>

<template>
  <main>
    <CatHeader />
    <CatBox @showDetails="openCatPage">
      <template #title>Laden Name 0</template>
    </CatBox>
    <CatBox @showDetails="openCatPage">
      <template #title>Laden Name 1</template>
    </CatBox>
    <CatBox @showDetails="openCatPage">
      <template #title>Laden Name 2</template>
    </CatBox>
    <CatBox @showDetails="openCatPage">
      <template #title>Laden Name 3</template>
    </CatBox>

    <CatPage v-if="catPageVisible" @close="catPageVisible = false"
      ><template #title>Laden Name 0</template></CatPage
    >
  </main>
</template>
