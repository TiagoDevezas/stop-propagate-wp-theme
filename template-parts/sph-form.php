<form class="black-80" id="sph-form">
  <div>
    <div class="mw8 center pv2 tc">
      <div class="f2 white flex justify-center items-center"><p class="dib">Try it</p> <img src="<?php echo get_template_directory_uri() . '/images/corner-right-down.svg' ?>" alt="" class="pt3 pl2 h2"></div>
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

    <div class="mw8 center ph5-ns pb5-ns">
      <!-- <label for="comment" class="f5 db mb2">Text</label> -->
      <textarea id="comment" name="comment" class="db border-box hover-black center w-70 ba b--black-20 pa2 br2 mb2 shadow-5" aria-describedby="comment-desc" v-model="stringToParse" rows="10"></textarea>
      <!-- <small id="comment-desc" class="f6 black-60">Helper text for a form control.</small> -->
      <div class="mt3 w-70 center">
        <a class="dib f4 fw7 pa2 link dim no-underline bg-animate white bg-dark-red" href="#0" @click.prevent="parseString()"><span class="flex items-center lh0">Submit <img src="<?php echo get_template_directory_uri() . '/images/loader.svg' ?>" alt="" class="ml2" v-if="loading" height="20px"></span></a>
        <!-- <input class="b ph3 pv2 input-reset ba b--black bg-transparent grow pointer f6" type="submit" value="Submit" @click.prevent="parseString()"> -->
      </div>
    </div>
    <div v-if="apiResponse">{{ apiResponse }}</div>
  </div>
</form>
