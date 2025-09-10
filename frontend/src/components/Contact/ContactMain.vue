<template>
  <main class="text-gray-100 px-8 py-12">
    <div
      class="contact max-w-screen-xl mt-24 px-8 grid gap-8 grid-cols-1 md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 py-16 mx-auto text-gray-900 rounded-lg"
    >
      <div class="flex flex-col justify-between">
        <div>
          <h2 class="text-4xl lg:text-5xl font-bold leading-tight text-[var(--primary)]">
            Lass uns über alles reden!
          </h2>
          <div class="text-[var(--accent-dark)] mt-8">
            Keine Lust auf Formulare? <br />
            Schreiben Sie uns einfach eine E-Mail :
            <span class="underline">someemail@email.com</span>. <br />
            <b>oder</b><br />
            telefonieren Sie uns: <span class="underline">+49 123 456 789</span>
          </div>
        </div>
        <div class="mt-8 text-center">
          <Image />
        </div>
      </div>
      <div>
        <form @submit.prevent="submitForm">
          <div>
            <label for="fullName" class="uppercase text-sm text-gray-600 font-bold"
              >Vollständiger Name</label
            >
            <input
              id="fullName"
              v-model="form.fullName"
              class="text-left w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="text"
              placeholder="Ihr vollständiger Name"
              required
            />
          </div>
          <div class="mt-8">
            <label for="email" class="uppercase text-sm text-gray-600 font-bold">E-Mail</label>
            <input
              id="email"
              v-model="form.email"
              class="text-left w-full bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              type="email"
              placeholder="Ihre E-Mail-Adresse"
              required
            />
          </div>
          <div class="mt-8">
            <label for="message" class="uppercase text-sm text-gray-600 font-bold">Nachricht</label>
            <textarea
              id="message"
              v-model="form.message"
              class="w-full h-32 bg-gray-300 text-gray-900 mt-2 p-3 rounded-lg focus:outline-none focus:shadow-outline"
              placeholder="Ihre Nachricht"
              required
            ></textarea>
          </div>
          <div class="mt-8">
            <button
              type="submit"
              class="uppercase text-sm font-bold tracking-wide bg-[var(--accent)] text-gray-100 p-3 rounded-lg w-full focus:outline-none focus:shadow-outline"
            >
              Nachricht senden
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>
</template>

<script>
import Image from './Image.vue' // Ensure the correct path to your Image component

export default {
  components: {
    Image,
  },
  data() {
    return {
      form: {
        fullName: '',
        email: '',
        message: '',
      },
    }
  },
  methods: {
    submitForm() {
      // Handle form submission
      console.log('Form submitted:', this.form)
      // Here you can add your logic to send the form data to a server
      // Example: Use axios or fetch to send the data to an API endpoint
    },
  },
}
</script>

<style>
.contact {
  box-shadow:
    rgba(0, 0, 0, 0.4) 0px 2px 4px,
    rgba(0, 0, 0, 0.3) 0px 7px 13px -3px,
    rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}
input {
  border: none;
}
</style>
