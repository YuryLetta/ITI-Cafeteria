<!doctype html>
<html lang="en">
  <head>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="custom.css">
    <style>
    body{
  font-family: 'Raleway', sans-serif;
  background: #E9ECE9;
}
.comments-main{
  background: #FFF;
}
.comment time, .comment:hover time,.icon-rocknroll, .like-count {
  -webkit-transition: .25s opacity linear;
  transition: .25s opacity linear;
}
.comments-main ul li{
  list-style: none;
}
.comments .comment {
  padding: 5px 10px;
  background: #00AF90;
}
.comments .comment:hover time{
  opacity: 1;
}
.comments .user-img img {
  width: 50px;
  height: 50px;
}
.comments .comment h4 {
  display: inline-block;
  font-size: 16px;
}
.comments .comment h4 a {
  color: #404040;
  text-decoration: none;
}
.comments .comment .icon-rocknroll {
  color: #545454;
  font-size: .85rem;
}
.comments .comment .icon-rocknroll:hover {
  opacity: .5;
}
.comments .comment time,.comments .comment .like-count,.comments .comment .icon-rocknroll {
  font-size: .75rem;
  opacity: 0;
}
.comments .comment time, .comments .comment .like-count {
  font-weight: 300;
}
.comments .comment p {
  font-size: 13px;
}
.comments .comment p .reply {
  color: #BFBFA8;
  cursor: pointer;
}
.comments .comment .active {
  opacity: 1;
}
.icon-rocknroll {
  background: none;
  outline: none;
  cursor: pointer;
  margin: 0 .125rem 0 0;
}
.comments .comment:hover .icon-rocknroll,.comments .comment:hover .like-count {
  opacity: 1;
}
.comment-box-main{
  background: #CA1D5F;
}
@media (min-width: 320px) and (max-width: 480px){
  .comments .comment h4 {
    font-size: 12px;
  }
  .comments .comment p{
    font-size: 11px;
  }
  .comment-box-main .send-btn button{
    margin-left: 5px;
  }
}
    </style>
  </head>
  <body>
	<div class="container">
    <?php include '../Controllers/iterateprocess.php';?>

		</div>

    
  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.14/vue.min.js'></script>
  <script>
  Vue.component('like', {
	    template: "<div class='like-data float-right text-white'><button class='icon-rocknroll mr-1 p-0 border-0' v-class='active: liked' v-on='click: toggleLike'><i class='fa fa-thumbs-up text-white' aria-hidden='true'></i></button><span class='like-count' v-class='active: liked'>{{ likesCount }}</span></div>",
	    data: function() {
	        return {
	            liked: false,
	            likesCount: 0
	        }
	    },
	    methods: {
	        toggleLike: function() {
	            this.liked = !this.liked;
	            this.liked ? this.likesCount++ : this.likesCount--;
	        }
	    }
	});
	new Vue({
	    el: '.comments-main',
	});
  </script>
</html>