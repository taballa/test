Do.add('html5', {path: 'static/js/core/html5.js', type: 'js'});
Do.add('less', {path: 'static/js/core/less.min.js', type: 'js'});
Do.add('cookie', {path: 'static/js/lib/jquery.cookie.js', type: 'js'});
Do.add('bootstrap', {path: 'static/js/lib/bootstrap.js', type: 'js'});
Do.add('modernizr', {path: 'static/js/lib/modernizr.min.js', type: 'js'});
Do.add('plugins', {path: 'static/js/lib/plugins.js', type: 'js'});
Do.add('custom', {path: 'static/css/custom.css', type: 'css'});

Do.add('effect-css', {path: 'static/css/page/effect.css', type: 'css'});
Do.add('message-css', {path: 'static/css/page/message.css', type: 'css'});
Do.add('home-css', {path: 'static/css/page/home.css', type: 'css'});


Do.add('home', {path: 'static/js/home.js', type: 'js', requires: ['home-css']});
Do.add('portrait', {path: 'static/js/portrait.js', type: 'js'});
Do.add('form', {path: 'static/js/form.js', type: 'js'});
Do.add('radius', {path: 'static/js/radius.js', type: 'js'});
Do.add('effect', {path: 'static/js/effect.js', type: 'js', requires: ['effect-css']});
Do.add('message', {path: 'static/js/message.js', type: 'js', requires: ['cookie','message-css']});

