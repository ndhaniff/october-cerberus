import VueRouter from "vue-router";

let routes = [
	{
		path: '/',
		component: require('./components/index.vue')
	}
]

const router = new VueRouter({
	scrollBehavior() {
			return { x: 0, y: 0 };
	},
	routes,
	linkActiveClass: "active",
	mode: "history",
});

export default router