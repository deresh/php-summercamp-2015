app.router={start:function(){this.$container=$("body"),this.$container.on("click.router",".jsLink",function(a){a.preventDefault(),this.get($(a.currentTarget).attr("href"))}.bind(this))},get:function(a){var b=this;$.get(a,function(c){document.title=c.pageTitle,window.history.pushState({},c.pageTitle,a),app.require("app.controllers."+c.pageType,function(a){window.scrollTo(0,0),app.currentController.close(),b.$container.addClass("appModeOn").html(c.html),app.currentController=new a})})}},app.router.start();