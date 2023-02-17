<template>
  <Layout>
    <main>
      <header class="bg-gray-100 flex flex-col items-center py-24">
        <h1 class="text-6xl leading-tight">Contact</h1>
        <p class="text-xl italic px-6 text-center sm:px-0 text-gray-700">Rezervări, date de contact, şi indicaţii de orientare</p>
      </header>
      <article class="max-w-xl md:max-w-2xl xl:max-w-3xl mx-auto px-6 sm:px-12 pt-16">
        <div class="markdown text-xl leading-normal text-gray-900">
          <p>Ne puteţi contacta telefonic sau prin WhatsApp, la <a href="tel:+40743602363" class="border-b hover:border-gray-500 text-blue-500"><strong>+40 (743) 602 363</strong></a></p>
          <p>De asemenea, vă stăm la dispoziţie şi la <a href="mailto:chezmarcelsinaia@gmail.com" class="border-b hover:border-gray-500">chezmarcelsinaia@gmail.com</a></p>
          <h2 id="rezervari">Rezervări</h2>
          <p>Rezervările la Chez Marcel Sinaia se fac prin <a href="https://www.booking.com/hotel/ro/chez-marcel-sinaia.html#availability_target" target="_blank" class="text-blue-600">Booking.com &nearr;</a>,
          sau la numărul de telefon de mai sus.</p>
          <h6>Menţiuni generale:</h6>
          <ul>
            <li>Chez Marcel Sinaia nu este persoană juridică, motiv pentru care nu putem emite factură fiscală</li>
            <li>Plata cu vouchere sau tichete de vacanţă nu este posibilă</li>
            <li>Garantarea rezervărilor directe se face prin plata unui avans nerambursabil, contravaloarea primei nopți de cazare</li>
          </ul>
          <h6>Menţiuni Booking.com:</h6>
          <ul>
            <li>Plata pe Booking.com se poate face doar cu cardul</li>
            <li>Booking.com nu acceptă carduri special emise pentru vouchere de vacanţă</li>
          </ul>
          <hr />
          <h2 id="orientare">
            Indicaţii de orientare
          </h2>
          <p>
            Chez Marcel se află în Sinaia, pe Bulevardul Republicii, la numărul 11.
          </p>
          <h3 id="acces">
            Acces din stradă
          </h3>
          <p>
            Accesul se face, inclusiv cu maşina, pe panta din partea dreaptă a restaurantului Casa Noastră (printre restaurant şi terasă).
          </p>
          <p>
            La baza pantei faceţi stânga, apoi dreapta, şi urmăriţi drumul de acces până la capăt - veţi ajunge în curtea interioară unde veţi recunoaşte clădirea.
          </p>
          <p class="mb-2 italic">Drumul de acces din Bld. Republicii:</p>
          <iframe src="https://www.google.com/maps/embed?pb=!4v1549035788807!6m8!1m7!1s3CIW2yEMsDw50gE5Ts20Fg!2m2!1d45.34380306203104!2d25.54835926717609!3f51.24213267421409!4f-2.5873329581139615!5f1.1924812503605782" height="450" frameborder="0"  class="border-0 w-full" allowfullscreen></iframe>
          <h3 id="harta">Harta</h3>
          <p>Ne găsiţi pe Waze şi Google Maps căutând <em>Chez Marcel Sinaia</em> :</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d858.1315718750229!2d25.548201731175713!3d45.34419160692475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b3178db9b1ff99%3A0x2deb07ffe2e28e2e!2sChez+Marcel+Sinaia!5e0!3m2!1sro!2sro!4v1535567425114" height="450" frameborder="0" class="border-0 w-full" allowfullscreen></iframe>
          <div class="font-sans text-base bg-blue-100 text-blue-700 p-4 rounded my-8 sm:mb-0">Pentru a putea sugera ruta corectă pentru navigaţie (şi anume cu acces din Bld. Republicii, nu din Calea Prahovei) pin-ul de pe hartă nu este plasat <em>exact</em> pe clădire.</div>
          <hr>
          <p class="mt-6 font-bold"><span class="text-green-600">Recomandăm Waze</span> - momentan, este singura aplicație care indică drumul de acces corect, până în parcarea din curtea interioară:</p>
          <g-image src="https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1572535553/waze-route.jpg" />
        </div>
      </article>
      <section class="sm:pt-32">
        <div class="max-w-5xl mx-auto px-8">
          <div class="flex flex-col text-center">
            <h2 class="text-3xl sm:text-4xl font-sans font-bold text-black">Concediu în doi, sau cu familia?</h2>
            <span class="text-gray-500 font-sans">Alege camera care ți se potrivește ţie sau familiei tale</span>
            <span class="pt-6 text-xl">👇</span>
            <a href="/#camere" class="scroll-to mt-8 border border-blue-500 self-center font-sans transition duration-150 text-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-md rounded px-6 py-4 no-underline z-10">
              Alege camera &rarr;
            </a>
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

export default {
  components: {
    SiteFooter,
  },
  metaInfo() {
    return {
      title: 'Contact Chez Marcel | Cazare în centrul oraşului Sinaia',
      meta: [
        {
          key: 'description',
          name: 'description',
          content: 'Date de contact, rezervări, şi localizare pe hartă Chez Marcel Sinaia, Valea Prahovei'
        },

        { property: "og:type", content: 'article' },
        { property: "og:title", content: 'Contact Chez Marcel Sinaia' },
        { property: "og:description", content: 'Date de contact, rezervări, şi localizare pe hartă Chez Marcel Sinaia, Valea Prahovei' },
        { property: "og:url", content: `${this.config.siteUrl}/contact/` },
        { property: "og:image", content: this.ogImageUrl },

        { name: "twitter:card", content: "summary_large_image" },
        { name: "twitter:title", content: 'Contact Chez Marcel Sinaia' },
        { name: "twitter:description", content: 'Date de contact, rezervări, şi localizare pe hartă Chez Marcel Sinaia, Valea Prahovei' },
        { name: "twitter:image", content: this.ogImageUrl },
      ],
    }
  },
  computed: {
    config() {
      return config
    },
    ogImageUrl() {
      return 'https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1559760386/twitter-card.jpg'
    },
  },
}
</script>
