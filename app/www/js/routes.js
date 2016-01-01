angular.module('app.routes', [])

.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider
    
      
        
    .state('devotionApp', {
      url: '/home',
      templateUrl: 'templates/devotionApp.html',
      controller: 'devotionAppCtrl'
    })
        
      
    
      
        
    .state('login', {
      url: '/login',
      templateUrl: 'templates/login.html',
      controller: 'loginCtrl'
    })
        
      
    
      
        
    .state('devotionApp.devotionApp2', {
      url: '/home',
      views: {
        'tab1': {
          templateUrl: 'templates/devotionApp2.html',
          controller: 'devotionApp2Ctrl'
        }
      }
    })
        
      
    
      
        
    .state('devotionApp.podcasts', {
      url: '/podcasts',
      views: {
        'tab2': {
          templateUrl: 'templates/podcasts.html',
          controller: 'podcastsCtrl'
        }
      }
    })
        
      
    
      
        
    .state('devotionApp.settings', {
      url: '/settings',
      views: {
        'tab3': {
          templateUrl: 'templates/settings.html',
          controller: 'settingsCtrl'
        }
      }
    })
        
      
    ;

  // if none of the above states are matched, use this as the fallback
  $urlRouterProvider.otherwise('/login');

});