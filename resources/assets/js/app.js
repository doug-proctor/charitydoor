
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.config.debug = true
Vue.config.delimiters = ['((', '))']

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: 'body',
    data: {
    	identified: false,
		results: [],
		person: {},
		query: '',
		timeout: '',
    },
    ready: function() {
    	console.log('Im ready')
    },
    methods: {
		search: function() {
			$.get("/api/v1/names/get/" + this.query, function(data) {
				this.results = data
			}.bind(this));
		},
		debouncedSearch: function() {
			clearTimeout(this.timeout)
			this.timeout = setTimeout(function() {
				this.search()
			}.bind(this), 150)
		},
    },
});
