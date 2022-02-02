var app = new Vue({
	el: "#app",
	data(){
		return{
			listUsuarios: [],
            
			detalleUsuarios:null
		}
		
	},
	mounted(){
		axios
		.get('https://my-user-manager.herokuapp.com/users')
		.then(resp => (this.listUsuarios = resp.data))
	},
	methods:{
		detalle: function(index){
            
			this.detalleUsuarios = index
		},

        ocultar: function(){
            
			this.detalleUsuarios = null;
		}
	}

})