/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.Event = new Vue();
window.axios = require('axios');
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
window.events = new Vue();

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('task-form', require('./components/TaskForm.vue'));
Vue.component('task-list', require('./components/TaskList.vue'));

// Teacher
Vue.component('teacher-list', require('./components/teacher/teacherlist.vue'));
Vue.component('teacher-add', require('./components/teacher/addTeacher.vue'));

// Fetcher
Vue.component('fetcher-add', require('./components/fetcher/addfetcher.vue'));
Vue.component('fetcher-list', require('./components/fetcher/fetcherlist.vue'));

// Student
Vue.component('student-add', require('./components/student/addstudent.vue'));
Vue.component('student-list', require('./components/student/studentlist.vue'));

window.flash = function(message) {
    window.events.$emit('flash', message);
}
const app = new Vue({
    el: '#template'
});