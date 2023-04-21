import Vue from "vue";
// Vueを読み込む
import Router from "vue-router";
// Vue Routerを読み込む
import ExampleComponent from "./components/ExampleComponent"
// Componentsを読み込む

Vue.use(Router)

export default new Router({
    mode: 'history',
    base: process.env.BASE_URL,
    routes: [{
        path: "/",
        component: ExampleComponent,
        name: "home"
    }]
})
