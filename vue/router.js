import {createRouter, createWebHistory} from 'vue-router';
import Landing from './pages/Landing';

const router = createRouter({
    history: createWebHistory(),
    routes: [
        {
            name: 'landing',
            path: '/',
            component: Landing,
        },
        /*{
            name: 'book-form',
            path: '/book/edit/:bookId?',
            component: BookForm,
            props: true,
            alias: '/book/add'
        },
        {
            name: 'book-item',
            path: '/book/:bookId(\\d+)',
            component: BookItem,
            props: true
        },*/
    ],
    scrollBehavior(to, from, savedPosition) {
        console.log('===Router:scrollBehavior===');
        console.log(to);
        console.log(from);
        console.log(savedPosition);
        console.log('===Router:scrollBehavior===');

        if (to.hash) {
            return {
                el: to.hash,
            }
        } else {
            return { top: 0 }
        }
    },
});

export default router;