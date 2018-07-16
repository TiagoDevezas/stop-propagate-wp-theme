// Contact form

var formContainer = document.getElementById('simple-contact-form');

var formEl = formContainer.children[0];

formEl.className += 'measure-wide center tl';

fieldsetClassNames = ["scf-name", "scf-email", "scf-message"];

(function(fieldsetClassNames) {
  for (var i = 0; i < fieldsetClassNames.length; i++) {
    var fieldset = document.getElementsByClassName(fieldsetClassNames[i])[0];
    fieldset.className += ' ba b--transparent ph0 mh0';
    var label = fieldset.children[0];
    var input = fieldset.children[1];
    label.className += ' db fw6 lh-copy f6';
    input.className += 'pa2 input-reset ba bg-transparent w-100';

    input.removeAttribute("size");
    input.removeAttribute("maxlength");
  }

  var submitButton = document.getElementById('scf-button')
  submitButton.className += "mb2 input-reset f6 fw5 db pa2 bg-animate bg-dark-red hover-bg-moon-gray white hover-black ba b--transparent pointer";
})(fieldsetClassNames);


// window.onscroll = function() {addStickyClassToHeader()};

// var header = document.getElementById("masthead");


// var sticky = header.offsetTop;

// function addStickyClassToHeader() {
//   if (window.pageYOffset > sticky) {
//     header.classList.add("sticky");
//   } else {
//     header.classList.remove("sticky");
//   }
// } 
