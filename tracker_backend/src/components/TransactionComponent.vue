<template>
  <div>
    <h1>Transactions</h1>
    <form @submit.prevent="addTransaction">
      <input v-model="newTransaction.amount" placeholder="Amount" />
      <input v-model="newTransaction.description" placeholder="Description" />
      <input v-model="newTransaction.category_id" placeholder="Category ID" />
      <input v-model="newTransaction.transaction_date" type="date" />
      <button type="submit">Add</button>
    </form>
    <ul>
      <li v-for="transaction in transactions" :key="transaction.id">
        {{ transaction.description }}: {{ transaction.amount }} on {{ transaction.transaction_date }}
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      newTransaction: {
        amount: '',
        description: '',
        category_id: '',
        transaction_date: ''
      },
      transactions: []
    };
  },
  methods: {
    async addTransaction() {
      const response = await axios.post('/api/transactions', this.newTransaction);
      this.transactions.push(response.data);
      this.newTransaction = { amount: '', description: '', category_id: '', transaction_date: '' };
    },
    async fetchTransactions() {
      const response = await axios.get('/api/transactions');
      this.transactions = response.data;
    }
  },
  mounted() {
    this.fetchTransactions();
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
