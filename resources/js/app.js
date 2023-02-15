import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/vue3';
import 'primeicons/primeicons.css';
import PrimeVue from 'primevue/config';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

import AppLayout from '@/Layouts/AppLayout.vue';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Summoners Codex';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async (name) => {
        // await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'))
        const pages = import.meta.glob("./Pages/**/*.vue");
        const imported = pages[`./Pages/${name}.vue`];
        const page = (await (typeof imported === "function" ? imported() : imported)).default;

        page.layout ??= AppLayout;

        return page;
    },
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(PrimeVue)
            .use(ZiggyVue, Ziggy)
            .component("Link", Link)
            .component("Head", Head)
            .mixin({ methods: { route } })
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
