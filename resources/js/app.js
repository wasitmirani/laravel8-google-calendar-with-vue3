
import { SetupCalendar, Calendar, DatePicker } from 'v-calendar';

import { createApp, h } from 'vue'
import { App, plugin } from '@inertiajs/inertia-vue3'

const el = document.getElementById('app')

createApp({
  render: () => h(App, {
    initialPage: JSON.parse(el.dataset.page),
    resolveComponent: name => require(`./Pages/${name}`).default,
  })
}).use(plugin)
.use(SetupCalendar, {})
// Use the components
.component('Calendar', Calendar)
.component('DatePicker', DatePicker)
.mount(el);
