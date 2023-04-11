import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-string-generator-field', IndexField)
  app.component('detail-nova-string-generator-field', DetailField)
  app.component('form-nova-string-generator-field', FormField)
})
