import Vue from 'vue/dist/vue.min.js' 
import axios from 'axios'

var sphForm = new Vue({
  el: '#sph-form',
  data () {
    return {
      loading: false,
      stringToParse: '',
      language: 'en',
      speechType: 'hate',
      submittedSpeechType: '',
      apiResponse: '',
      apiURL: 'http://stop-propaghate-api.inesctec.pt/sph',
      messageEmpty: true
    }
  },
  watch: {
    stringToParse: function(val, oldVal) {
      if (!val.length) {
        this.messageEmpty = true
      }
    }
  },
  methods: {
    parseString () {
      this.messageEmpty = true
      this.apiResponse = ''
      this.loading = true
      let stringUrlParam = { text: this.stringToParse, hate_type: this.speechType, language: this.language }
      axios.post(this.apiURL, stringUrlParam).then((response) => {
        this.submittedSpeechType = this.speechType
        this.messageEmpty = false
        this.loading = false
        this.apiResponse = response.data[0]
      })
    }
  }
})
