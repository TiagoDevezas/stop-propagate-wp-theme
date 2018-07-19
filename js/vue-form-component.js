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
      apiURL: 'http://vps.tiagodevezas.pt/sph/sph'
    }
  },
  methods: {
    parseString () {
      this.apiResponse = ''
      this.loading = true
      let stringUrlParam = { string: this.stringToParse, hate: this.speechType, language: this.language }
      axios.post(this.apiURL, stringUrlParam).then((response) => {
        this.loading = false
        this.apiResponse = response.data
      })
    }
  }
})
