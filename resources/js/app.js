
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('content-frame', require('./components/Framing/ContentFrame.vue'));
Vue.component('project-frame', require('./components/Framing/ProjectFrame.vue'));

Vue.component('task-content', require('./components/Tasks/TaskContent.vue'));
Vue.component('action-item-content', require('./components/ActionItems/ActionItemContent.vue'));
Vue.component('deliverable-content', require('./components/Deliverables/DeliverableContent.vue'));
Vue.component('issue-content', require('./components/Issues/IssueContent.vue'));
Vue.component('resource-content', require('./components/Resources/ResourceContent.vue'));
Vue.component('project-content', require('./components/Projects/ProjectContent.vue'));

Vue.component('confirm-cancel-buttons', require('./components/Other/ConfirmCancelButtons.vue'));
Vue.component('pmmodal', require('./components/Other/PMModal.vue'));

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
