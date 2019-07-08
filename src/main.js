import DefaultLayout from '~/layouts/Default.vue'

export default function (Vue, {head}) {
  Vue.component('Layout', DefaultLayout)

  if (process.isClient) {
    const { default: VCalendar } = require('v-calendar')
    Vue.use(VCalendar, {})
	}

  head.htmlAttrs = { lang: 'en', class: 'h-full' }
  head.bodyAttrs = { class: 'antialiased font-serif' }

  head.link.push({
    rel: 'stylesheet',
    href: 'https://fonts.googleapis.com/css?family=Pinyon+Script%7CCardo'
  })
}
