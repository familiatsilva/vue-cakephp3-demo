require('./bootstrap.js')
import Vue from 'vue'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'
Vue.use(VueResource)
Vue.use(VueRouter)

/*************************************************************************************************************
 COMPONENTES
/************************************************************************************************************/

/*************************************************************************************************************
 ROTAS
/************************************************************************************************************/
const routes = [
     {path: '/vue/new/index',       component:  resolve => require(['./pages/new/index.vue'], resolve)},
     {path: '/new/index',       component:  resolve => require(['./pages/new/index.vue'], resolve)},
     {path: '/new/edit',        component:  resolve => require(['./pages/new/edit.vue'], resolve)},
     {path: '/join/index',      component:  resolve => require(['./pages/join/index.vue'], resolve)},
     {path: '/join/edit',       component:  resolve => require(['./pages/join/edit.vue'], resolve)},
     {path: '*',                component:  resolve => require(['./pages/home.vue'], resolve)}
]
const router = new VueRouter({
    mode: 'history',
    routes: routes
})

/*************************************************************************************************************
 APP
/************************************************************************************************************/
const app = new Vue({
  router,
  mounted: function () {

    $('#app').show();


    var route = this.$router;
    $('.vue-link').click(function(e){
        e.preventDefault();
        route.push($(this).attr("href"))
    })
  }  
}).$mount('#app')




