<<<<<<< HEAD
<template>
  <div>
    <button @click="logout">Logout</button>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  methods: {
    async logout() {
      try {
        await axios.post('/api/logout');
        localStorage.removeItem('token'); // Remove token from local storage
        // Optionally, redirect to login page or update application state
        console.log('Logged out successfully');
      } catch (error) {
        console.error('Logout failed:', error);
      }
    }
  }
};
</script>

<style scoped>
button {
  background-color: #dc3545;
  color: white;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
}

button:hover {
  background-color: #c82333;
}
</style>
=======
<template>
  <div>
    <button @click="logout">Logout</button>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  methods: {
    async logout() {
      try {
        await axios.post('/api/logout');
        localStorage.removeItem('token'); // Remove token from local storage
        // Optionally, redirect to login page or update application state
        console.log('Logged out successfully');
      } catch (error) {
        console.error('Logout failed:', error);
      }
    }
  }
};
</script>

<style scoped>
button {
  background-color: #dc3545;
  color: white;
  border: none;
  padding: 10px 15px;
  cursor: pointer;
}

button:hover {
  background-color: #c82333;
}
</style>
>>>>>>> bad9025c37016ff1bd767d4eb47ee92af493d14a
