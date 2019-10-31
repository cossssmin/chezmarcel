<template>
  <Layout>
    <main>
      <header class="bg-gray-100 flex flex-col items-center py-24">
        <h1 class="text-6xl leading-tight">Contact</h1>
        <p class="text-xl italic px-6 text-center sm:px-0 text-gray-700">Bookings, contact information, and directions</p>
      </header>
      <article class="max-w-xl md:max-w-2xl xl:max-w-3xl mx-auto px-6 sm:px-12 pt-16">
        <div class="markdown text-xl leading-normal text-gray-900">
          <p>You can call or WhatsApp us at <a href="tel:+40743602363" class="border-b hover:border-gray-500 text-blue-500"><strong>+40 (743) 602 363</strong></a></p>
          <p>Prefer email? <a href="mailto:chezmarcelsinaia@gmail.com" class="border-b hover:border-gray-500">chezmarcelsinaia@gmail.com</a></p>
          <h2 id="bookings">Bookings</h2>
          <p>Bookings are handled exclusively through <a href="https://www.booking.com/hotel/ro/chez-marcel-sinaia.html#availability_target" target="_blank" class="text-blue-600">Booking.com &nearr;</a></p>
          <h6>Notes:</h6>
          <ul>
            <li>We only accept credit card payments on Booking.com</li>
            <li>If you're a
              <a href="https://www.booking.com/genius.html" target="_blank" class="inline-block rounded-tl rounded-bl bg-genius text-white text-sm px-2 py-px leading-full font-sans font-semibold cursor-help" title="You're a .genius member if you booked at least two times on Booking.com">.genius</a>
              Booking.com member, you get a 10% discount
            </li>
          </ul>
          <hr />
          <h2 id="directions">
            Directions
          </h2>
          <p>
            Chez Marcel is located at 11 Republicii Blvd, in Sinaia, Romania.
          </p>
          <h3 id="access">
            Entrance from street level
          </h3>
          <p>
            From street level, access the inner courtyard (by foot or by car) using the ramp on the right side of the "Casa Noastră" restaurant, as shown below:
          </p>
          <iframe src="https://www.google.com/maps/embed?pb=!4v1549035788807!6m8!1m7!1s3CIW2yEMsDw50gE5Ts20Fg!2m2!1d45.34380306203104!2d25.54835926717609!3f51.24213267421409!4f-2.5873329581139615!5f1.1924812503605782" height="450" frameborder="0"  class="border-0 w-full" allowfullscreen></iframe>
          <p class="mt-8">
            Take a left turn at the base of the ramp, then turn right, following the road all the way - you'll get to the inner courtyard where you'll recognize the building.
          </p>
          <h3 id="map">Map</h3>
          <p>Find us on Waze and Google Maps by searching for <em>Chez Marcel Sinaia</em> :</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d858.1315718750229!2d25.548201731175713!3d45.34419160692475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b3178db9b1ff99%3A0x2deb07ffe2e28e2e!2sChez+Marcel+Sinaia!5e0!3m2!1sro!2sro!4v1535567425114" height="450" frameborder="0" class="border-0 w-full" allowfullscreen></iframe>
          <div class="font-sans text-base bg-blue-200 text-blue-700 p-4 rounded my-8 sm:mb-0">In order to suggest the correct navigation route - through Republicii Blvd., not the yellow E60 beltway - the pin on the map is not placed <em>exactly</em> on top of the building.</div>
          <hr>
          <p class="mt-6 font-bold"><span class="text-green-600">We recommend Waze</span> - currently, it's the only app that shows the correct access road, from Republicii street level to our inner courtyard:</p>
          <g-image src="https://res.cloudinary.com/chezmarcelsinaia/image/upload/v1572535553/waze-route.jpg" />
        </div>
      </article>
      <section class="sm:pt-32">
        <div class="max-w-5xl mx-auto px-8">
          <div class="flex flex-col text-center">
            <h2 class="text-3xl sm:text-4xl font-sans font-bold text-black">See your accommodation options</h2>
            <span class="text-gray-500 font-sans">Select the room that fits you or your family best</span>
            <span class="pt-6 text-xl">👇</span>
            <a href="/en/#rooms" class="scroll-to mt-8 border border-blue-500 self-center font-sans transition-blue-cta text-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-md rounded px-6 py-4 no-underline z-10">
              Select room &rarr;
            </a>
          </div>
        </div>
      </section>
      <site-footer language="en" />
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
      title: 'Contact and bookings at Chez Marcel | Accommodation in central Sinaia, Romania',
      meta: [
        {
          key: 'description',
          name: 'description',
          content: 'Contact information, bookings, and directions to Chez Marcel Sinaia, Prahova Valley'
        },

        { property: "og:type", content: 'article' },
        { property: "og:title", content: 'Contact Chez Marcel Sinaia' },
        { property: "og:description", content: 'Contact information, bookings, and directions to Chez Marcel Sinaia, Prahova Valley' },
        { property: "og:url", content: `${this.config.siteUrl}/en/contact/` },
        { property: "og:image", content: this.ogImageUrl },

        { name: "twitter:card", content: "summary_large_image" },
        { name: "twitter:title", content: 'Contact Chez Marcel Sinaia' },
        { name: "twitter:description", content: 'Contact information, bookings, and directions to Chez Marcel Sinaia, Prahova Valley' },
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
