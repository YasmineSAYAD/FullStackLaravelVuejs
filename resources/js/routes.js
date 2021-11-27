import VueRouter from "vue-router";
import Bookables from "./bookables/Bookables";
import Example2Component from "./components/Example2Component";
const routes=[
    {
        path:"/",
        component:Bookables,
        name:"home",
    },
    {
        path:"/second",
        component:Example2Component,
        name:"second",
    },
];
const router=new VueRouter({
    routes,
    mode: 'history',
});
export default router;