<template>
  <div>
    <h1>Laravel 8 VueJS task </h1>
<router-link :to="{ name: 'login' }"> Login</router-link>
<router-link :to="{ name: 'register' }"> Register</router-link>
<router-link :to="{ name: 'dashboard' }"> dashboard</router-link>
<router-link :to="{ name: 'listbuildings' }"> list Buildings with their Elevators </router-link>
<router-link :to="{ name: 'elevators' }"> List elevators and their Buildings names </router-link>
<router-link :to="{ name: 'managers' }"> list managers </router-link>
<router-link :to="{ name: 'addbuilding' }"> add building </router-link>
<router-link :to="{ name: 'addmanager' }"> add manager </router-link>
<router-link :to="{ name: 'addelevator' }"> add elevator </router-link>
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>
<script>
export default {
};
</script>


