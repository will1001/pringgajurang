
var vo2 = new Vue({
	el : '#app2',
	data: {
		currentView : "indexpage",
		active_el : 0,
		isHidden: false,
		message: 'Hello Vue!'
	},
	methods:{
    activate:function(el){
        this.active_el = el;
    }
  }
});