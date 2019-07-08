<template>
  <Layout>
    <main>
      <header :class="$page.camera.header[0].bgcolor" class="flex flex-col items-center py-24">
        <h1 id="top" class="text-6xl leading-tight">{{ $page.camera.name }}</h1>
        <p class="text-xl italic px-6 text-center sm:px-0 mb-32" :class="$page.camera.header[0].subtitleColor">{{ $page.camera.subtitle }}</p>
      </header>
      <section class="mb-6">
        <booking-form class="-mt-32" minGuests="1" :maxGuests="$page.camera.booking[0].maxGuests || 2" :blockID="$page.camera.booking[0].blockid" :roomID="$page.camera.booking[0].roomid" />
      </section>
      <article class="max-w-xl md:max-w-2xl xl:max-w-3xl mx-auto px-6 sm:px-12 pt-16">
        <div class="markdown text-xl leading-normal text-gray-900 border-b pb-8 mb-8" v-html="$page.camera.content" />
        <section class="flex flex-col sm:flex-row flex-wrap items-center -mx-4 border-b pb-8 mb-8" v-if="$page.camera.facilities">
          <header class="flex flex-col-reverse text-center w-full">
            <h2 id="facil" class="font-sans font-bold w-full px-4 mb-8 text-3xl text-black">Facilităţi incluse</h2>
            <span class="uppercase text-red-400 font-sans font-bold text-sm mt-4">Pentru confortul tău</span>
          </header>
          <div class="w-full sm:w-1/2 p-4 self-start" v-for="(facility, index) in $page.camera.facilities" :key="index">
            <h3 class="font-medium mb-2 text-lg justify-start font-sans text-black">
              {{ facility.name }}
            </h3>
            <ul class="sm:pl-2 text-gray-800">
              <li v-for="(item, index) in facility.items" :key="index" class="flex items-start leading-loose">
                <svg class="fill-current w-3 mr-2 text-green-500 flex-shrink-0 pt-2 mt-px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                <span v-html="item"/>
              </li>
            </ul>
          </div>
        </section>
        <section v-if="$page.camera.images">
          <header class="flex flex-col-reverse text-center w-full">
            <h2 id="photos" class="font-sans font-bold w-full px-4 mb-8 text-3xl text-black">Galerie Foto</h2>
            <span class="uppercase text-red-400 font-sans font-bold text-sm mt-4">{{ $page.camera.name }} în imagini</span>
          </header>
          <ul class="gallery">
            <li v-for="(image, index) in $page.camera.images" :key="index" class="mb-8">
              <img :src="image.src" :alt="image.title">
            </li>
          </ul>
        </section>
      </article>
      <section class="sm:pt-32" v-if="$page.camera.cta">
        <div class="max-w-5xl mx-auto px-8">
          <div class="flex flex-col text-center">
            <h2 class="text-3xl sm:text-4xl font-sans font-bold text-black" v-html="$page.camera.cta[0].title" />
            <span class="text-gray-500 font-sans" v-html="$page.camera.cta[0].subtitle" />
            <span class="pt-6 text-xl">👇</span>
            <a href="#top" v-html="$page.camera.cta[0].btnText" class="scroll-to mt-8 border border-blue-500 self-center font-sans transition-blue-cta text-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-md rounded px-6 py-4 no-underline z-10" />
          </div>
        </div>
      </section>
      <site-footer language="ro" />
    </main>
  </Layout>
</template>

<script>
import config from '~/.temp/config.js'
import SiteFooter from '@/components/Footer'
import BookingForm from '@/components/BookingForm'

export default {
  components: {
    BookingForm,
    SiteFooter,
  },
  metaInfo() {
    return {
      title: `${this.$page.camera.title} | Cazare în centrul oraşului Sinaia`,
      meta: [
        {
          key: 'description',
          name: 'description',
          content: this.$page.camera.description
        },

        { property: "og:type", content: 'article' },
        { property: "og:title", content: this.$page.camera.title },
        { property: "og:description", content: this.$page.camera.description },
        { property: "og:image", content: this.ogImageUrl },

        { name: "twitter:card", content: "summary_large_image" },
        { name: "twitter:title", content: this.$page.camera.title },
        { name: "twitter:description", content: this.$page.camera.description },
        { name: "twitter:image", content: this.ogImageUrl },
      ],
    }
  },
  mounted () {
    import('medium-zoom').then(mediumZoom => {
      this.zoom = mediumZoom.default('.gallery img')
    })
  },
  computed: {
    config() {
      return config
    },
    ogImageUrl() {
      return this.$page.camera.thumbnail || 'https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1559760386/twitter-card.jpg'
    },
  },
}
</script>

<page-query>
query Camera ($path: String) {
  camera (path: $path) {
    booking {
      roomid
      blockid
      maxGuests
    }
    content
    cta {
      title
      subtitle
      btnText
    }
    description
    facilities {
      name
      items
    }
    header {
      bgcolor
      subtitleColor
    }
    images {
      title
      src
    }
    name
    subtitle
    title
  }
}
</page-query>
