import $ from 'jquery'
import domReady from '@roots/sage/client/dom-ready'

domReady(() => {
  var test = 10
  console.log('Test:', test)
  console.log('Using jQuery:', $.fn.jquery)

  $('.some-class').addClass('active')
})
