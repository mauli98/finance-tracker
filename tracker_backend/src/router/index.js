<<<<<<< HEAD
import { createRouter, createWebHistory } from 'vue-router';
import CategoryComponent from '../components/CategoryComponent.vue';
import BudgetComponent from '../components/BudgetComponent.vue';
import TransactionComponent from '../components/TransactionComponent.vue';
import LoginComponent from '../components/LoginComponent.vue';
import LogoutComponent from '../components/LogoutComponent.vue';
import RegisterComponent from '../components/RegisterComponent.vue';

const routes = [
    {
        path: '/register',
        name: 'Register',
        component: RegisterComponent
    },
    {
        path: '/login',
        name: 'Login',
        component: LoginComponent
    },
    {
        path: '/logout',
        name: 'Logout',
        component: LogoutComponent
    },
    {
        path: '/',
        name: 'Categories',
        component: CategoryComponent
    },
    {
        path: '/budgets',
        name: 'Budgets',
        component: BudgetComponent
    },
    {
        path: '/transactions',
        name: 'Transactions',
        component: TransactionComponent
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
=======
import { createRouter, createWebHistory } from 'vue-router';
import CategoryComponent from '../components/CategoryComponent.vue';
import BudgetComponent from '../components/BudgetComponent.vue';
import TransactionComponent from '../components/TransactionComponent.vue';
import LoginComponent from '../components/LoginComponent.vue';
import LogoutComponent from '../components/LogoutComponent.vue';
import RegisterComponent from '../components/RegisterComponent.vue';

const routes = [
    {
        path: '/register',
        name: 'Register',
        component: RegisterComponent
    },
    {
        path: '/login',
        name: 'Login',
        component: LoginComponent
    },
    {
        path: '/logout',
        name: 'Logout',
        component: LogoutComponent
    },
    {
        path: '/',
        name: 'Categories',
        component: CategoryComponent
    },
    {
        path: '/budgets',
        name: 'Budgets',
        component: BudgetComponent
    },
    {
        path: '/transactions',
        name: 'Transactions',
        component: TransactionComponent
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;
>>>>>>> bad9025c37016ff1bd767d4eb47ee92af493d14a
