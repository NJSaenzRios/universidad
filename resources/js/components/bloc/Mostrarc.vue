<template>
    <div class="container">
    <div class="row">
        <div class="col-lg-12 mb-4">
            <router-link :to='{name: "crearBloc"}' class="btn btn-success"><i class="fa-solid fa-circle-plus"></i></router-link>
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
                        <tr v-for="bloc in blocs" :key="bloc.id">
                        
                        <td>{{ bloc.id }}</td>
                        <td>{{ bloc.nombre }}</td>
                        <td>{{ bloc.creditos}}</td>
                        <td>{{ bloc.docente}}</td>
                        <td>{{ bloc.asignaturap}}</td>
                        <td>{{ bloc.horasau}}</td>
                        <td>{{ bloc.horasdi}}</td>

                        <td>
                            <router-link :to='{name:"editarBloc", params:{id:bloc.id}}' class="btn  btn-info"><i class="fa-solid fa-pen-to-square"></i></router-link>

                            <a type="button" @click="borrarBloc(bloc.id)" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                            
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
    name:'blocs',
    data(){
        return{
            blocs:[]
        }
    },
    mounted(){
        this.mostrarBlocs()
    },
    methods: {
        async mostrarBlocs(){
            await this.axios.get('/api/bloc')
            .then(response=>{
                this.blocs = response.data
            })
            .catch(error=>{
                this.bloc = []
            })
        },
    borrarBloc(id){
        if (confirm("¿confirma eliminar este registro?")){
            this.axios.delete(`/api/bloc/${id}`)
            .then(response=>{
                this.mostrarBlocs()
            })
            .catch(error=>{
                console.log(error)
            })
        }
    }
    }
}

</script>