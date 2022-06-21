<template>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Editar Blog</h4></div>
            </div>
        
            <div class="card-body">
                
                        <form @submit.prevent="actualizar">
                            <div class="row">
                                <div class="col-12 mb-2">
                                        <div class="form-group">
                                        <label>Nombre</label>
                                         <input type="text" class="form-control" v-model="bloc.nombre">
                                        </div>
                                </div>
                                <div class="col-12 mb-2">
                                     <div class="form-group">
                                    <label>Cantidad de creditos</label>
                                    <input type="text" class="form-control" v-model="bloc.creditos">
                                    </div>
                                 </div>

                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                    <label>Docente</label>
                                    <input type="text" class="form-control" v-model="bloc.docente">
                                    </div>
                                 </div>

                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                    <label>Asignatura de Prerrequisitos</label>
                                    <input type="text" class="form-control" v-model="bloc.asignaturap">
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                    <label>Horas Autonomas</label>
                                    <input type="text" class="form-control" v-model="bloc.horasau">
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                    <label>Horas Dirigidas</label>
                                    <input type="text" class="form-control" v-model="bloc.horasdi">
                                    </div>
                                </div>
                        
                                <div class="col-12">
                                     <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                        
                </div>
            
        </div>
        
    </div>
</div>

</template>

<script>

export default {
    name: "editarbloc",
    data(){
        return{
            bloc:{
                id:'',
                nombre:"",
                creditos:"",
		        docente:"",
		        asignaturap:"",
		        horasau:"",
		        horasdi:""
            }
        }
    },
    mounted() {
        this.mostrarBloc()
        
    },
    methods: {
       async mostrarBloc(){
           this.axios.get(`/api/bloc/${this.$route.params.id}`)
            .then(response=>{
                const {nombre, creditos, docente, asignaturap, horasau, horasdi} = response.data
                this.bloc.nombre = nombre,
                this.bloc.creditos = creditos,
                this.bloc.docente = docente,
                this.bloc.asignaturap = asignaturap,
                this.bloc.horasau = horasau,
                this.bloc.horasdi = horasdi
            })
            .catch(error=>{
                console.log(error)
            })
        },
           async actualizar(){
              this.axios.put(`/api/bloc/${this.$route.params.id}`, this.bloc) 
            .then(response=>{
                this.$router.push({                
                name:"/mostrarblocs"
                }) 
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }

}
</script>

