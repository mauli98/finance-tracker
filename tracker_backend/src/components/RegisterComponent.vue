<<<<<<< HEAD
<template>
  <div>
    <h1>Register</h1>
    <form @submit.prevent="register">
      <input v-model="email" placeholder="Email" type="email" />
      <input v-model="password" placeholder="Password" type="password" />
      <input v-model="name" placeholder="name" type="name" />
      <button type="submit">Register</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      name: ''
    };
  },
  methods: {
    async register() {
      try {
        const response = await axios.post('http://localhost:8000/api/register', {
          email: this.email,
          password: this.password,
          name: this.name
        });
        // Handle successful registration (e.g., redirect to login page)
        console.log('Registration successful:', response.data);
      } catch (error) {
        console.error('Registration failed:', error);
      }
    }
  }
};
</script>

<style scoped>
h1 {
  color: #333;
}
form {
  margin-bottom: 20px;
}
input {
  margin-right: 10px;
}
</style>
=======
<template>
  <div>
    <h1>Register</h1>
    <form @submit.prevent="register">
      <input v-model="email" placeholder="Email" type="email" />
      <input v-model="password" placeholder="Password" type="password" />
      <input v-model="name" placeholder="name" type="name" />
      <button type="submit">Register</button>
    </form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: '',
      password: '',
      name: ''
    };
  },
  methods: {
    async register() {
      try {
        const response = await axios.post('http://localhost:8000/api/register', {
          email: this.email,
          password: this.password,
          name: this.name
        });
        // Handle successful registration (e.g., redirect to login page)
        console.log('Registration successful:', response.data);
      } catch (error) {
        console.error('Registration failed:', error);
      }
    }
  }
};
</script>

<style scoped>
h1 {
  color: #333;
}
form {
  margin-bottom: 20px;
}
input {
  margin-right: 10px;
}
</style>
>>>>>>> bad9025c37016ff1bd767d4eb47ee92af493d14a
