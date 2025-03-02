<<<<<<< HEAD
<template>
  <div id="app">
    <router-view></router-view>
    <LogoutComponent v-if="isLoggedIn" @logout="handleLogout" />

  </div>
</template>

<script>
import LogoutComponent from './components/LogoutComponent.vue';

export default {
  name: 'App',
  components: {
    LogoutComponent
  },
  data() {
    return {
      isLoggedIn: false // This should be updated based on authentication state

    };
  }
};
</script>


<style>
/* Add your global styles here */
</style>
=======
<template>
  <div id="app">
    <router-view></router-view>
    <LogoutComponent v-if="isLoggedIn" @logout="handleLogout" />

  </div>
</template>

<script>
import LogoutComponent from './components/LogoutComponent.vue';

export default {
  name: 'App',
  components: {
    LogoutComponent
  },
  data() {
    return {
      isLoggedIn: false // This should be updated based on authentication state

    };
  }
};
</script>


<style>
/* Add your global styles here */
</style>
>>>>>>> bad9025c37016ff1bd767d4eb47ee92af493d14a
