<template>
  <main>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <router-link class="nav-link active" :to='{name: "home"}'>Inicio</router-link>        
          
        </li>

       <li class="nav-item">
           <router-link class="nav-link active" :to='{name: "mostrarBlogs"}'>Ingenieria de Sistemas</router-link> 
        </li>

        <li class="nav-item">
           <router-link class="nav-link active" :to='{name: "mostrarBlocs"}'>Ingenieria Electrónica</router-link> 
        </li>

      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<router-view></router-view>
</main>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>