


Vue.component('indexpage',{
	template : '#indexpage',
});


Vue.component('bidangpemerintahan',{
	template : '#bidangpemerintahan',
	data:function () {
  		return {
	    	active_elcomp: 0,
	    	currentViewBidangPemerintahan : "pemerintahan",
	  	}
	},
	methods:{
    testing(el){
        this.active_elcomp = el;
        console.log(this.active_elcomp);
    }
}
});

//sub componen pemerintahan
Vue.component('pemerintahan',{
	template : '#pemerintahan',
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
		isHidden : false
	},
	methods:{
    activate:function(el){
        this.active_el = el;
        console.log(this.active_el);
    }
  }
});

