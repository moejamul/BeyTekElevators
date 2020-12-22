<template>
  <div>
    <h1>Vue Router Demo App</h1>
    <router-link :to="{ name: 'test' }"> Test Route </router-link>
<router-link :to="{ name: 'bruh' }"> Test Bruh </router-link>
<router-link :to="{ name: 'listbuildings' }"> Test list </router-link>
<router-link :to="{ name: 'elevators' }"> Test elevators </router-link>
<router-link :to="{ name: 'managers' }"> Test managers </router-link>
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>
<script>
export default {
};
</script>


