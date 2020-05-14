Nova.booting((Vue, router, store) => {
  Vue.component('index-phone_number', require('./components/IndexField'))
  Vue.component('detail-phone_number', require('./components/DetailField'))
  Vue.component('form-phone_number', require('./components/FormField'))
})
