<template>
  <Layout class="bg-white">
    <main>
      <header>
        <nav class="absolute w-full z-40">
          <ul class="flex justify-around text-lg md:text-2xl text-blue-100 max-w-5xl mx-auto px-8 py-4 rounded-b">
            <li><a href="#camere" class="menu-item scroll-to">Camere</a></li>
            <li><a href="#facilitati" class="menu-item scroll-to">Facilităţi</a></li>
            <li><g-link to="/contact/" class="menu-item">Contact</g-link></li>
          </ul>
        </nav>

        <div class="post-cover overflow-hidden relative max-h-32 md:max-h-48 md:min-h-48 z-10">
          <div class="max-w-xl md:max-w-3xl xl:max-w-4xl text-center px-6 absolute z-10 flex flex-col items-center m-auto inset-0">
            <div class="m-auto">
              <h1 class="text-5xl md:text-7xl font-pinyon font-bold leading-tight mb-2 text-splash-logo">
                Chez Marcel
                <span class="text-sm md:text-xl font-sans font-hairline -mt-2 md:-mt-6 block text-rights ml-14 md:ml-10">Sinaia, România</span>
              </h1>
            </div>
          </div>
          <ClientOnly>
            <parallax :speed-factor="0.22" :sectionHeight="50">
              <img src="https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1558691761/sinaia-peles-bucegi.jpg" alt="Sinaia Peleş Bucegi">
            </parallax>
          </ClientOnly>
        </div>
      </header>

      <section>
        <booking-form class="-mt-24" locale="ro-ro" minGuests="1" maxGuests="14" guestsNum="2" />
      </section>

      <section id="camere">
        <div class="max-w-5xl mx-auto pt-24 pb-20 md:pb-24 xl:py-32 px-8">
          <div class="flex flex-col mx-auto md:mx-0 max-w-xs">
            <span class="uppercase text-red-400 font-sans font-bold text-sm">Cazare în Sinaia</span>
            <h2 class="text-4xl font-sans font-bold text-black leading-none md:leading-snug">Camere &amp; Suite</h2>
          </div>
          <ul class="flex flex-wrap py-8 -mx-4 -mb-8 justify-center">
            <li class="w-full max-w-sm md:w-1/2 lg:w-1/3 px-4 mb-8" v-for="camera in $page.camere.edges" :key="camera.node.id">
              <figure class="shadow hover:shadow-lg hover:-mt-1 transition-shadow duration-200 rounded-b">
                <g-link :to="`${camera.node.path}/`" class="block text-black">
                  <img class="rounded-t" :src="camera.node.card" alt="Cameră dublă parter Chez Marcel Sinaia">
                  <figcaption class="bg-white p-4 rounded-b">
                    <h3 class="flex justify-between items-center text-2xl mb-2">
                      {{ camera.node.name }}
                      <span class="flex items-center h-5 font-sans font-normal text-xxs text-white bg-blue-500 px-1 rounded uppercase">{{ camera.node.floor }}</span>
                    </h3>
                    <p class="text-gray-600 text-base italic">{{ camera.node.excerpt }}</p>
                  </figcaption>
                </g-link>
              </figure>
            </li>
          </ul>
        </div>
      </section>
      <section class="bg-gray-100 py-24 xl:py-32" id="facilitati">
        <div class="max-w-5xl mx-auto px-8">
          <div class="flex flex-col mx-auto mb-12 md:mx-0 max-w-xs">
            <span class="uppercase text-red-400 font-sans font-bold text-sm">Facilităţi Cazare</span>
            <h2 class="text-4xl font-sans font-bold text-black leading-none md:leading-snug">Spaţii &amp; Activităţi</h2>
          </div>
          <ul class="pt-8 md:pb-8">
            <li class="flex flex-wrap items-center w-full mb-6 md:mb-24">
              <div class="md:-ml-24 md:mr-12 md:w-3/5 w-full">
                <img src="https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1562235092/facilities/gradina-foisor.jpg" alt="Grădină şi foişor">
              </div>
              <div class="text-xl text-gray-700 md:w-2/5 w-full">
                <p class="mb-6 md:-mr-12">
                  Un grătar cu prietenii? Sau, poate, cafeaua de dimineaţă alături de o carte bună?
                  <br><br>
                  Oferă-ţi câteva momente de relaxare într-un loc liniştit, <em>construit din lemn chiar de către Marcel</em>.
                </p>
                <ul class="w-full leading-loose text-base mt-4 text-gray-600">
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>tâmplărie din lemn creată chiar de Marcel</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>foişor, leagăn, fântână decorativă</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>vedere către Munţii Baiului</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>facilităţi pentru grătar</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>priză dublă în foişor</span>
                  </li>
                </ul>
              </div>
            </li>
            <li class="flex flex-wrap-reverse md:flex-wrap items-center w-full mb-6 md:mb-24">
              <div class="text-xl text-gray-700 md:w-2/5 w-full">
                <p class="mb-6 md:-mr-12">
                  Bucătăria lui Marcel îţi oferă tot ce ai nevoie, fie că vrei să îţi faci o cafea repede, fie că iei micul dejun înainte de o drumeţie pe munte.
                <br><br>
                  Este un spaţiu folosit în comun, cu intrare din living şi din curtea interioară.
                </p>
                <ul class="w-full leading-loose text-base mt-4 text-gray-600">
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>masă şi scaune pliabile (4 persoane)</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>frigider, aragaz + cuptor, hotă</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>cuptor cu microunde</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>cafetieră, prăjitor de pâine</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>cană electrică / fierbător</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>farfurii, căni, pahare, tacâmuri</span>
                  </li>
                </ul>
              </div>
              <div class="md:-mr-24 md:ml-12 md:w-3/5 w-full">
                <img src="https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1562236328/facilities/bucatarie.jpg" alt="Bucătărie">
              </div>
            </li>
            <li class="flex flex-wrap items-center w-full">
              <div class="md:-ml-24 md:mr-12 md:w-3/5 w-full">
                <img src="https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1562236902/facilities/living.jpg" alt="Living">
              </div>
              <div class="text-xl text-gray-700 md:w-2/5 w-full">
                <p class="mb-6 md:-mr-12">
                  Un rummy cu prietenii sau familia? Ultimul episod din serialul favorit de pe Netflix?
                  <br><br>
                  Recomandăm întotdeauna drumeţiile, şi aerul curat şi tare de munte.
                  Dar ştim că sunt momente când nu te poţi bucura de ele, motiv pentru care îţi punem la dispoziţie acest living.
                </p>
                <ul class="w-full leading-loose text-base mt-4 text-gray-600">
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>spaţiu comun</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>masă pentru dining</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>canapea mare, fotoliu</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span>Smart TV 4K de 140 cm</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span><strong class="text-red-600 uppercase">Netflix</strong>, HBO, cablu TV</span>
                  </li>
                  <li class="flex flex-grow-0 items-baseline">
                      <svg class="fill-current w-4 mr-2 text-green-600 flex flex-shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 11l2-2 5 5L18 3l2 2L7 18z"></path></svg>
                      <span><strong class="text-black">Playstation 4</strong>, rummy, cărţi de joc</span>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="py-24 md:pt-32 md:pb-0">
        <div class="max-w-5xl mx-auto px-8">
          <div class="flex flex-col text-center">
            <h2 class="text-4xl font-sans font-bold text-black leading-none md:leading-snug mb-4 md:mb-0">Concediu la munte, în Sinaia?</h2>
            <span class="text-gray-500 font-sans text-lg">Alege camera care ți se potrivește ţie sau familiei tale</span>
            <a href="#camere" class="scroll-to mt-16 border border-blue-500 self-center font-sans transition duration-150 text-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-md rounded px-6 py-4 no-underline z-10">Alege camera &uarr;</a>
          </div>
        </div>
      </section>
      <site-footer language="ro" />
    </main>
  </Layout>
</template>

<script>
import Parallax from 'vue-parallaxy'
import SiteFooter from '@/components/Footer'
import scrollToElement from 'scroll-to-element'
import BookingForm from '@/components/BookingForm'

function addScrollTo(el) {
  let href = el.target.getAttribute('href')
  scrollToElement(href, {
    ease: 'out-expo',
    duration: 400
  })
}

export default {
  components: {
    Parallax,
    BookingForm,
    SiteFooter,
  },
  data() {
    return {
      scrollTargets: [],
    }
  },
  metaInfo () {
    return {
      title: `${this.$static.metadata.siteName} | Cazare în centrul oraşului Sinaia`,
      meta: [
        { property: "og:type", content: 'website' },
        { property: "og:title", content: `${this.$static.metadata.siteName} | Cazare în centrul oraşului Sinaia` },
        { property: "og:description", content: this.$static.metadata.siteDescription },
        { property: "og:url", content: this.$static.metadata.siteUrl },
        { property: "og:image", content: this.ogImageUrl },

        { name: "twitter:card", content: "summary_large_image" },
        { name: "twitter:title", content: `${this.$static.metadata.siteName} | Cazare în centrul oraşului Sinaia` },
        { name: "twitter:description", content: this.$static.metadata.siteDescription },
        { name: "twitter:image", content: this.ogImageUrl },
      ],
    }
  },
  updated () {
    const vm = this
    this.$nextTick(function () {
      vm.scrollTargets = document.querySelectorAll('.scroll-to')
      vm.scrollTargets.forEach(el => {
        document.addEventListener ? el.addEventListener('click', addScrollTo, false) : el.attachEvent('onclick', addScrollTo)
      })
    })
  },
  mounted () {
    const vm = this
    this.$nextTick(function () {
      vm.scrollTargets = document.querySelectorAll('.scroll-to')
      vm.scrollTargets.forEach(el => {
        document.addEventListener ? el.addEventListener('click', addScrollTo, false) : el.attachEvent('onclick', addScrollTo)
      })
    })
  },
  computed: {
    ogImageUrl() {
      return 'https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1559760386/twitter-card.jpg'
    },
  },
}
</script>

<page-query>
  query Home {
    camere: allCamera(limit: 5, sortBy: "id", order: ASC) {
      edges {
        node {
          id
          card
          excerpt
          floor
          name
          path
          title
        }
      }
    }
  }
</page-query>

<static-query>
query {
  metadata {
    siteName
    siteDescription
  }
}
</static-query>
