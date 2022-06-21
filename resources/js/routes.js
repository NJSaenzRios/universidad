
const Home = () => import('./components/Home.vue');
const Contacto = () => import('./components/Contacto.vue');
const Crear = () =>import('./components/blog/Crear.vue');
const Mostrar = () =>import('./components/blog/Mostrar.vue');
const Editar = () =>import('./components/blog/Editar.vue');
const Crearc = () =>import('./components/bloc/Crearc.vue');
const Mostrarc = () =>import('./components/bloc/Mostrarc.vue');
const Editarc = () =>import('./components/bloc/Editarc.vue');

export const routes =  [
    
    {
        name:'home',
        path:'/',
        component: Home
    },
    {
        name:'contacto',
        path:'/contacto',
        component: Contacto
    },
    
    {
        name:'mostrarBlogs',
        path:'/blogs',
        component: Mostrar
    },
    {
        name:'crearBlog',
        path:'/crear',
        component: Crear
    },
    {
        name:'editarBlog',
        path:'/editar/:id',
        component: Editar
    },
    {
        name:'mostrarBlocs',
        path:'/blocs',
        component: Mostrarc
    },
    {
        name:'crearBloc',
        path:'/crearc',
        component: Crearc
    },
    {
        name:'editarBloc',
        path:'/editarc/:id',
        component: Editarc
    },
    
    ];
    


