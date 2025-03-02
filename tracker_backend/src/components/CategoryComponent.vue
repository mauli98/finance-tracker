<<<<<<< HEAD
<template>
  <div>
    <h1>Categories</h1>
    <form @submit.prevent="addCategory">
      <input v-model="newCategory" placeholder="Add a new category" />
      <button type="submit">Add</button>
    </form>
    <ul>
      <li v-for="category in categories" :key="category.id">{{ category.name }}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      newCategory: '',
      categories: []
    };
  },
  methods: {
    async addCategory() {
      const response = await axios.post('/api/categories', { name: this.newCategory });
      this.categories.push(response.data);
      this.newCategory = '';
    },
    async fetchCategories() {
      const response = await axios.get('/api/categories');
      this.categories = response.data;
    }
  },
  mounted() {
    this.fetchCategories();
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
    <h1>Categories</h1>
    <form @submit.prevent="addCategory">
      <input v-model="newCategory" placeholder="Add a new category" />
      <button type="submit">Add</button>
    </form>
    <ul>
      <li v-for="category in categories" :key="category.id">{{ category.name }}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      newCategory: '',
      categories: []
    };
  },
  methods: {
    async addCategory() {
      const response = await axios.post('/api/categories', { name: this.newCategory });
      this.categories.push(response.data);
      this.newCategory = '';
    },
    async fetchCategories() {
      const response = await axios.get('/api/categories');
      this.categories = response.data;
    }
  },
  mounted() {
    this.fetchCategories();
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
