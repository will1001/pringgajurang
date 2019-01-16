


Vue.component('indexpage',{
	template : '#indexpage',
});


Vue.component('bidangpemerintahan',{
	template : '#bidangpemerintahan',
});

Vue.component('panduanpenduduk',{
	template : '#panduanpenduduk',
});


Vue.component('halamanbisnis',{
	template : '#halamanbisnis',
});

Vue.component('untukpengunjung',{
	template : '#untukpengunjung',
});

Vue.component('lembagaindex',{
	template : '#lembagaindex',
});

Vue.component('statistikindex',{
	template : '#statistikindex',
});



var vo = new Vue({
	el : '#app',
	data: {
		currentView : "indexpage",
		active_el : 0,
		pesan : "oke"
	},
	methods:{
    activate:function(el){
        this.active_el = el;
    }
  }
});