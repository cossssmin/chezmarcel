<template>
  <footer class="bg-footer bg-contain lg:bg-cover xl:bg-auto min-h-30 xl:min-h-60 flex items-end py-16 md:py-8">
    <div class="max-w-5xl mx-auto px-8 flex flex-wrap w-full">
      <div class="w-full md:w-1/2">
        <g-link :to="text[language].logoUrl" class="inline-block font-pinyon text-5xl no-underline text-splash-logo mb-2">Chez Marcel</g-link>
      </div>
      <div class="flex flex-col justify-between w-full md:w-1/2 text-splash-logo md:text-right text-lg">
        <p>{{ text[language].addressText }}</p>
        <p><a href="tel:+40743602363" class="block my-4">+40 (743) 602 363</a></p>
        <p>
          <a href="https://goo.gl/maps/6fJpDF8KdCo" class="underline">{{ text[language].mapsText }}</a>
          <span class="px-4">|</span>
          <g-link :to="inverseLogoUrl" class="inline-block text-sm text-splash-logo mb-8 underline uppercase">{{ inverseLanguage }}</g-link>
        </p>
      </div>
    </div>
  </footer>
</template>

<script>

export default {
  name: 'Footer',
  props: {
    language: {
      default: 'ro',
      type: String
    }
  },
  data() {
    return {
      text: {
        ro: {
          logoUrl: '/',
          mapsText: 'Vezi pe Google Maps',
          addressText: 'Republicii 11, Sinaia, Prahova, România',
        },
        en: {
          logoUrl: '/en/',
          mapsText: 'See on Google Maps',
          addressText: '11 Republicii, Sinaia, Romania',
        }
      }
    }
  },
  computed: {
    inverseLanguage() {
      return this.language == 'en' ? 'ro' : 'en'
    },
    inverseLogoUrl() {
      return this.language == 'en' ? '/' : '/en/'
    }
  }
}
</script>
