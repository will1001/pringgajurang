


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
Vue.component('Pemerintahan',{
	template : '#Pemerintahan',
});

Vue.component('Kesejahteraan',{
	template : '#Kesejahteraan',
});

Vue.component('Pelayanan',{
	template : '#Pelayanan',
});

Vue.component('Tata_Usaha_dan_Umum',{
	template : '#Tata_Usaha_dan_Umum',
});

Vue.component('Keuangan',{
	template : '#Keuangan',
});

Vue.component('Perencanaan',{
	template : '#Perencanaan',
});

Vue.component('Kewilayahan',{
	template : '#Kewilayahan',
});

Vue.component('Pembangunan',{
	template : '#Pembangunan',
});


// ---------------------

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

