//Components

// import promotionsComponent from './components/promotionsComponent.js'; 
// import formComponent from './components/formComponent.js';
import headerComponent from './components/headerComponent.js';
import navComponent from './components/navComponent.js';
import waitComponent from './components/waitComponent.js';
import videoComponent from './components/videoComponent.js';
import donorsComponent from './components/donorsComponent.js';
import profilesComponent from './components/profilesComponent.js';
import footerComponent from './components/footerComponent.js';
import eventsComponent from './components/eventsComponent.js';
import contactComponent from './components/contactComponent.js';
import organsinneedComponent from './components/organsinneedComponent.js';


const routes = [
    // { path: '/', redirect: {name: 'promotions'}},
    // { path: '/promotions', name: 'promotions', component: promotionsComponent },
    // { path: '/form', name: 'form', component: formComponent }
    // { path: '/nav', name: 'nav', component: navComponent }
];

const router = new VueRouter ({
    routes
});

const vm = new Vue ({
    el: '#app',

    data: {
        // message: "Hi from vue!",
        navComponent: navComponent.template,
        headerComponent: headerComponent.template,
        waitComponent: waitComponent.template,
        videoComponent: videoComponent.template,
        donorsComponent: donorsComponent.template,
        profilesComponent: profilesComponent.template,
        footerComponent: footerComponent.template,
        eventsComponent: eventsComponent.template,
        contactComponent: contactComponent.template,
        organsinneedComponent: organsinneedComponent.template,
    },

    router: router

}).$mount("#app");


  // Header fixed and Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
      $('#top').addClass('top-fixed');
    } else {
      $('.back-to-top').fadeOut('slow');
      $('#top').removeClass('top-fixed');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });