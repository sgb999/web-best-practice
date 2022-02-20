require('./bootstrap');
import { createApp, h } from 'vue'
import { createInertiaApp, Link, Head } from '@inertiajs/inertia-vue3'


createInertiaApp({
    resolve: name => require(`./components/pages/${name}`),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('inertia-link', Link)
            .component('Head', Head)
            .mount(el)
    },

    title: title => `${title}`
})
