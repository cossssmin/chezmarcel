<template>
  <div class="px-8">
    <div class="flex flex-wrap items-center md:justify-between bg-white text-gray-900 text-xl max-w-5xl p-6 lg:px-12 md:py-16 shadow-2xl mx-auto rounded z-30 relative">
      <div class="w-full md:w-1/2 max-w-xs lg:max-w-full mx-auto lg:mx-0">
        <ClientOnly>
          <v-date-picker
            mode="range"
            v-model="range"
            @input="updateDates"
            :min-date="new Date()"
            :popover="{ placement: 'bottom', visibility: 'click' }"
            :columns="2"
            :first-day-of-week="2"
            :locale="locale"
            ref="calendar">
            <div class="flex lg:ml-5 cursor-pointer">
              <div class="w-1/3 flex flex-col lg:h-24 lg:justify-around items-center self-center">
                <span class="text-gray-500 text-lg lg:text-xl">Check-in:</span>
                <span v-show="range.start" v-text="niceDate(range.start)" class="capitalize" />
              </div>
              <div class="w-1/3 flex flex-col lg:-ml-10 lg:pl-6 h-16 lg:h-24 justify-center items-center self-center">&rarr;</div>
              <div class="w-1/3 flex flex-col lg:h-24 lg:justify-around items-center self-center">
                <span class="text-gray-500 text-lg lg:text-xl">Check-out:</span>
                <span v-show="range.end" v-text="niceDate(range.end)" class="capitalize" />
              </div>
            </div>
          </v-date-picker>
        </ClientOnly>
      </div>
      <div class="flex md:w-1/4 w-full">
        <div class="justify-center flex md:flex-col md:h-16 lg:h-24 py-4 md:py-0 md:justify-around w-full">
          <label for="guestsNum" class="text-gray-500 mr-6 text-lg lg:text-xl">{{ guestsLabel || 'Persoane' }}:</label>
          <input @input="enforceMinGuests" name="guestsNum" id="guestsNum" class="w-10 outline-none" type="number" v-model="numGuests" :min="minGuests" :max="maxGuests">
        </div>
      </div>
      <div class="flex flex-col w-full lg:w-1/4 items-center lg:items-start pt-6 lg:py-4">
        <a :href="checkAvailabilityUrl"
          target="_blank"
          rel="nofollow noopener no-referrer"
          class="lg:self-start bg-blue-500 hover:bg-blue-700 text-white font-bold font-sans text-base px-4 py-2 no-underline border-2 border-white shadow">
            {{btnLabel || 'Verifică Disponibilitate'}}
        </a>
        <span class="block text-xs text-gray-500 font-sans mt-4">{{btnHelperText || 'Va deschide Booking.com într-un tab nou'}}</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'BookingForm',
  props: ['locale', 'minGuests', 'maxGuests', 'guestsLabel', 'btnLabel', 'btnHelperText', 'blockID', 'roomID', 'guestsNum'],
  data() {
    const today = new Date()
    return {
      range: {},
      cal: null,
      checkIn: this.formatDate(today),
      checkOut: this.formatDate(today.setDate(today.getDate() + 2)),
      numGuests: 2,
    }
  },
  mounted() {
    this.numGuests = this.guestsNum || this.maxGuests
  },
  methods: {
    enforceMinGuests(ev) {
      if (ev.target.value < 1) {
        this.numGuests = 1
      }
    },
    updateDates(ev) {
      this.checkIn = this.formatDate(ev.start)
      this.checkOut = this.formatDate(ev.end)
    },
    niceDate(date) {
      const d = new Date(date)
      return `${d.getDate()} ${d.toLocaleString(this.locale, { month: 'long' })}`
    },
    formatDate(date) {
      let d = new Date(date),
          month = '' + (d.getMonth() + 1),
          day = '' + d.getDate(),
          year = d.getFullYear()

      if (month.length < 2) month = '0' + month
      if (day.length < 2) day = '0' + day

      return [year, month, day].join('-')
    },
  },
  computed: {
    bookingURL() {
      return `https://www.booking.com/hotel/ro/chez-marcel-sinaia.html`
    },
    checkAvailabilityUrl() {
      return `${this.bookingURL}?checkin=${this.checkIn};checkout=${this.checkOut};group_adults=${this.numGuests}${this.roomID ? ';show_room='+this.roomID : ''}${this.blockID ? ';highlighted_blocks='+this.blockID : ''}${this.roomID ? '#RD'+this.roomID : ''}`
    },
  },
}
</script>
