


Vue.component('indexpage',{
	template : '#indexpage',
});


Vue.component('bidangpemerintahan',{
	template : '#bidangpemerintahan'
	methods:{
    testing:function(){
        console.log("alhamdulillah");
    }
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
        consol