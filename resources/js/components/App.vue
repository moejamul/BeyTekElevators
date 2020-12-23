<template>
  <div>
    <!--     router-link :to is for navigating between components, the names are defined in router.js -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand"> <h1>Laravel 8 VueJS task</h1></a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link disabled"
            ><router-link :to="{ name: 'listbuildings' }">
              list Buildings with their Elevators
            </router-link></a
          >
          <a class="nav-item nav-link disabled"
            ><router-link :to="{ name: 'managers' }">
              list managers
            </router-link></a
          >
          <a class="nav-item nav-link disabled"
            ><router-link :to="{ name: 'addbuilding' }">
              add building
            </router-link></a
          >
          <a class="nav-item nav-link disabled"
            ><router-link :to="{ name: 'addmanager' }">
              add manager
            </router-link></a
          >
          <a class="nav-item nav-link disabled"
            ><router-link :to="{ name: 'addelevator' }">
              add elevator
            </router-link></a
          >
          <a class="nav-item nav-link disabled"
            ><router-link :to="{ name: 'elevators' }">
              List elevators and their Buildings names
            </router-link></a
          >
          <a class="nav-item nav-link active"
            ><router-link :to="{ name: 'login' }"> Login</router-link
            ><span class="sr-only">(current)</span></a
          >
          <a class="nav-item nav-link"
            ><router-link :to="{ name: 'register' }"> Register</router-link></a
          >
          <a class="nav-item nav-link"
            ><router-link :to="{ name: 'dashboard' }">
              dashboard</router-link
            ></a
          >
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- this is where the components get displayed -->
      <router-view></router-view>
    </div>
  </div>
</template>
<script>
export default {};
</script>


