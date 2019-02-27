
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
var Vue = require('vue');
Vue.use(require('vue-resource'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('bidangpemerintahan', require('./components/BidangPemerintahan.vue'));
// Vue.component('example', require('./components/ExampleComponent.vue'));
// Vue.component('tabeldatapenduduk', require('./components/admincomponent/TabelDataPenduduk.vue'));


import tabeldatapenduduk from './components/admincomponent/TabelDataPenduduk.vue';
import buatsurat from './components/admincomponent/BuatSurat.vue';
import tabelakunlogindesa from './components/admincomponent/TabelAkunLoginDesa.vue';
import tabelberita from './components/admincomponent/TabelBerita.vue';
import tabelpengumuman from './components/admincomponent/TabelPengumuman.vue';
import tabelSOTK from './components/admincomponent/TabelSOTK.vue';


Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');



const app = new Vue({
    el: '#app',
    components : { tabeldatapenduduk,buatsurat,tabelakunlogindesa,tabelberita,tabelpengumuman,tabelSOTK },
    data:{
    	currentComponent : "tabeldatapenduduk",
    },
    methods: {
    swapComponent: function(component)
    {
      this.currentComponent = component;
    }
  }
});
