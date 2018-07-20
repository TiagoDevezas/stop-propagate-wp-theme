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
      apiResponse: '',
      apiURL: 'http://vps.tiagodevezas.pt/sph/sph',
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
      this.apiResponse = ''
      this.loading = true
      let stringUrlParam = { string: this.stringToParse, hate: this.speechType, language: this.language }
      axios.post(this.apiURL, stringUrlParam).then((response) => {
        this.messageEmpty = false
        this.loading = false
        this.apiResponse = response.data[0]
      })
    }
  }
})
