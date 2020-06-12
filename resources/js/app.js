require("./bootstrap");

window.Vue = require("vue");

// Vue.component("articles", require("./components/Articles.vue"));
Vue.component("articles", () => import("./components/Articles"));
Vue.component("navbar", () => import("./components/Navbar"));

const app = new Vue({
    el: "#app"
});
