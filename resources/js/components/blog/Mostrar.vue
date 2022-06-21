<template>
    <div class="container">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <router-link :to='{name: "crearBlog"}' class="btn btn-success"><i class="fa-solid fa-circle-plus"></i></router-link>
        </div>

        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="bg-primary text-white">

                        <th>Nombre</th>
                        <th>Cantidad de Creditos</th>
                        <th>Docente</th>
                        <th>Asignaturas de Prerrequisitos</th>
                        <th>Horas Autonomas</th>
                        <th>Horas Dirigidas</th>
                    </thead>

                    <tbody>
                        <tr v-for="blog in blogs" :key="blog.id">
                        
                        <td>{{ blog.id }}</td>
                        <td>{{ blog.nombre }}</td>
                        <td>{{ blog.creditos}}</td>
                        <td>{{ blog.docente}}</td>
                        <td>{{ blog.asignaturap}}</td>
                        <td>{{ blog.horasau}}</td>
                        <td>{{ blog.horasdi}}</td>

                        <td>
                            <router-link :to='{name:"editarBlog", params:{id:blog.id}}' class="btn  btn-info"><i class="fa-solid fa-pen-to-square"></i></router-link>

                            <a type="button" @click="borrarBlog(blog.id)" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>

                            
                            
                        </td>
                        </tr>  
                        
                  

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>
</template>

<script>



export default {
    name:'blogs',
    data(){
        return{
            blogs:[],     
        }
    },
    mounted(){
        this.mostrarBlogs()        
    },
    methods: {
        async mostrarBlogs(){
            await this.axios.get('/api/blog')
            .then(response=>{
                this.blogs = response.data
            })
            .catch(error=>{
                this.blog = []
            })
        },
    borrarBlog(id){
        if (confirm("¿confirma eliminar este registro?")){
            this.axios.delete(`/api/blog/${id}`)
            .then(response=>{
                this.mostrarBlogs()
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }
    
    }
}

</script>