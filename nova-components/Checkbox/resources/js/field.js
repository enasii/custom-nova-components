Nova.booting((Vue, router, store) => {
  Vue.component('index-checkbox', require('./components/IndexField'))
  Vue.component('detail-checkbox', require('./components/DetailField'))
  Vue.component('form-checkbox', require('./components/FormField'))
})
