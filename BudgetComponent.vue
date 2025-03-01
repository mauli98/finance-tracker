<template>
  <div>
    <h1>Budgets</h1>
    <form @submit.prevent="addBudget">
      <input v-model="newBudget" placeholder="Add a new budget" />
      <button type="submit">Add</button>
    </form>
    <ul>
      <li v-for="budget in budgets" :key="budget.id">{{ budget.category }}: {{ budget.amount }}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      newBudget: '',
      budgets: []
    };
  },
  methods: {
    async addBudget() {
      const token = localStorage.getItem('token'); // Assuming the token is stored in localStorage
      const response = await axios.post('http://localhost:8000/api/budgets', { category: this.newBudget }, {
        headers: {
          Authorization: `Bearer ${token}`
        }
      });
      this.budgets.push(response.data);
      this.newBudget = '';
    },
    async fetchBudgets() {
      const token = localStorage.getItem('token'); // Assuming the token is stored in localStorage
      const response = await axios.get('http://localhost:8000/api/budgets', {
        headers: {
          Authorization: `Bearer ${token}`
        }
      });
      this.budgets = response.data;
    }
  },
  mounted() {
    this.fetchBudgets();
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
