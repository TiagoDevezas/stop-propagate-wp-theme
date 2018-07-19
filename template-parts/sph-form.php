<form class="black-80" id="sph-form">
  <div>
    <div v-if="loading">A carregar</div>

    <div class="">
      <div class="mw8 center pv2 tc">
        <label for="language-select" class="f5 mb2 near-white">Language</label>
        <select v-model="language" id="language-select">
          <option value="en">English</option>
          <option value="pt">Portuguese</option>
        </select>

        <label for="speech-select" class="f5 mb2 near-white">Speech Type</label>
        <select v-model="speechType" id="speech-select">
          <option value="hate">Hate</option>
          <option value="sexism">Sexism</option>
          <option value="racism">Racism</option>
        </select>
      </div>
    </div>

    <div class="mw8 center ph5 pb5">
      <!-- <label for="comment" class="f5 db mb2">Text</label> -->
      <textarea id="comment" name="comment" class="db border-box hover-black center w-70 ba b--black-20 pa2 br2 mb2" aria-describedby="comment-desc" v-model="stringToParse" rows="10"></textarea>
      <!-- <small id="comment-desc" class="f6 black-60">Helper text for a form control.</small> -->
      <div class="mt3 w-70 center">
        <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6" type="submit" value="Submit" @click.prevent="parseString()">
      </div>
    </div>
    <div v-if="apiResponse">{{ apiResponse }}</div>
  </div>
</form>
