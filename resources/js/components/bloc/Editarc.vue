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
                                         <input type="text" class="form-control" v-model="blog.nombre">
                                        </div>
                                </div>
                                <div class="col-12 mb-2">
                                     <div class="form-group">
                                    <label>Cantidad de creditos</label>
                                    <input type="text" class="form-control" v-model="blog.creditos">
                                    </div>
                                 </div>

                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                    <label>Docente</label>
                                    <input type="text" class="form-control" v-model="blog.docente">
                                    </div>
                                 </div>

                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                    <label>Asignatura de Prerrequisitos</label>
                                    <input type="text" class="form-control" v-model="blog.asignaturap">
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                    <label>Horas Autonomas</label>
                                    <input type="text" class="form-control" v-model="blog.horasau">
                                    </div>
                                </div>

                                <div class="col-12 mb-2">
                                    <div class="form-group">
                                    <label>Horas Dirigidas</label>
                                    <input type="text" class="form-control" v-model="blog.horasdi">
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
    name: "editarblog",
    data(){
        return{
            blog:{
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
        this.mostrarBlog()        
    },
     methods: {
       async mostrarBlog(){
           this.axios.get(`/api/blog/${this.$route.params.id}`)

            .then(response=>{
                const {nombre, creditos, docente, asignaturap, horasau, horasdi} = response.data
                this.blog.nombre = nombre,
                this.blog.creditos = creditos,
                this.blog.docente = docente,
                this.blog.asignaturap = asignaturap,
                this.blog.horasau = horasau,
                this.blog.horasdi = horasdi
            })
            .catch(error=>{
                console.log(error)
            })
        },
            async actualizar(){
                this.axios.put(`/api/blog/${this.$route.params.id}`, this.blog) 
            
                .then(response=>{
                this.$router.push({
                name:"mostrarBlogs"
                }) 
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }

}
</script>