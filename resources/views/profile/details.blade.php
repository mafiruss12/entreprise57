<style>
    
.profile-widget {
  position: relative;
}
.profile-widget .image-container {
  background-size: cover;
  background-position: center;
  padding: 190px 0 10px;
}
.profile-widget .image-container .profile-background {
  width: 100%;
  height: auto;
}
.profile-widget .image-container .avatar {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  margin: 0 auto -60px;
  display: block;
}
.profile-widget .details {
  padding: 50px 15px 15px;
  text-align: center;
}
/* End Component: Profile Widget */
/********************************************************************
*********************************************************************
*********************************************************************/
/* Component: Mini Profile Widget */
.mini-profile-widget .image-container .avatar {
  width: 180px;
  height: 180px;
  display: block;
  margin: 0 auto;
  border-radius: 50%;
  background: white;
  padding: 4px;
  border: 1px solid #dddddd;
}
.mini-profile-widget .details {
  text-align: center;
}



/* Component: Panel */
.panel {
  border-radius: 0;
  margin-bottom: 30px;
}
.panel.solid-color {
  color: white;
}
.panel .panel-heading {
  border-radius: 0;
  position: relative;
}
.panel .panel-heading > .controls {
  position: absolute;
  right: 10px;
  top: 12px;
}
.panel .panel-heading > .controls .nav.nav-pills {
  margin: -8px 0 0 0;
}
.panel .panel-heading > .controls .nav.nav-pills li a {
  padding: 5px 8px;
}
.panel .panel-heading .clickable {
  margin-top: 0px;
  font-size: 12px;
  cursor: pointer;
}
.panel .panel-heading.no-heading-border {
  border-bottom-color: transparent;
}
.panel .panel-heading .left {
  float: left;
}
.panel .panel-heading .right {
  float: right;
}
.panel .panel-title {
  font-size: 16px;
  line-height: 20px;
}
.panel .panel-title.panel-title-sm {
  font-size: 18px;
  line-height: 28px;
}
.panel .panel-title.panel-title-lg {
  font-size: 24px;
  line-height: 34px;
}
.panel .panel-body {
  font-size: 13px;
}
.panel .panel-body > .body-section {
  margin: 0px 0px 20px;
}
.panel .panel-body > .body-section > .section-heading {
  margin: 0px 0px 5px;
  font-weight: bold;
}
.panel .panel-body > .body-section > .section-content {
  margin: 0px 0px 10px;
}
.panel-white {
  border: 1px solid #dddddd;
}
.panel-white > .panel-heading {
  color: #333;
  background-color: #fff;
  border-color: #ddd;
}
.panel-white > .panel-footer {
  background-color: #fff;
  border-color: #ddd;
}
.panel-primary {
  border: 1px solid #dddddd;
}
.panel-purple {
  border: 1px solid #dddddd;
}
.panel-purple > .panel-heading {
  color: #fff;
  background-color: #8e44ad;
  border: none;
}
.panel-purple > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-purple {
  border: 1px solid #dddddd;
}
.panel-light-purple > .panel-heading {
  color: #fff;
  background-color: #9b59b6;
  border: none;
}
.panel-light-purple > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-blue,
.panel-info {
  border: 1px solid #dddddd;
}
.panel-blue > .panel-heading,
.panel-info > .panel-heading {
  color: #fff;
  background-color: #2980b9;
  border: none;
}
.panel-blue > .panel-heading .panel-title a:hover,
.panel-info > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-blue {
  border: 1px solid #dddddd;
}
.panel-light-blue > .panel-heading {
  color: #fff;
  background-color: #3498db;
  border: none;
}
.panel-light-blue > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-green,
.panel-success {
  border: 1px solid #dddddd;
}
.panel-green > .panel-heading,
.panel-success > .panel-heading {
  color: #fff;
  background-color: #27ae60;
  border: none;
}
.panel-green > .panel-heading .panel-title a:hover,
.panel-success > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-green {
  border: 1px solid #dddddd;
}
.panel-light-green > .panel-heading {
  color: #fff;
  background-color: #2ecc71;
  border: none;
}
.panel-light-green > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-orange,
.panel-warning {
  border: 1px solid #dddddd;
}
.panel-orange > .panel-heading,
.panel-warning > .panel-heading {
  color: #fff;
  background-color: #e82c0c;
  border: none;
}
.panel-orange > .panel-heading .panel-title a:hover,
.panel-warning > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-orange {
  border: 1px solid #dddddd;
}
.panel-light-orange > .panel-heading {
  color: #fff;
  background-color: #ff530d;
  border: none;
}
.panel-light-orange > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-red,
.panel-danger {
  border: 1px solid #dddddd;
}
.panel-red > .panel-heading,
.panel-danger > .panel-heading {
  color: #fff;
  background-color: #d40d12;
  border: none;
}
.panel-red > .panel-heading .panel-title a:hover,
.panel-danger > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-red {
  border: 1px solid #dddddd;
}
.panel-light-red > .panel-heading {
  color: #fff;
  background-color: #ff1d23;
  border: none;
}
.panel-light-red > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-pink {
  border: 1px solid #dddddd;
}
.panel-pink > .panel-heading {
  color: #fff;
  background-color: #fe31ab;
  border: none;
}
.panel-pink > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-light-pink {
  border: 1px solid #dddddd;
}
.panel-light-pink > .panel-heading {
  color: #fff;
  background-color: #fd32c0;
  border: none;
}
.panel-light-pink > .panel-heading .panel-title a:hover {
  color: #f0f0f0;
}
.panel-group .panel {
  border-radius: 0;
}
.panel-group .panel + .panel {
  margin-top: 0;
  border-top: 0;
}

/* Component: Posts */
.post .post-heading {
  height: 95px;
  padding: 20px 15px;
}
.post .post-heading .avatar {
  width: 60px;
  height: 60px;
  display: block;
  margin-right: 15px;
}
.post .post-heading .meta .title {
  margin-bottom: 0;
}
.post .post-heading .meta .title a {
  color: black;
}
.post .post-heading .meta .title a:hover {
  color: #aaaaaa;
}
.post .post-heading .meta .time {
  margin-top: 8px;
  color: #999;
}
.post .post-image .image {
  width: 100%;
  height: auto;
}
.post .post-description {
  padding: 15px;
}
.post .post-description p {
  font-size: 14px;
}
.post .post-description .stats {
  margin-top: 20px;
}
.post .post-description .stats .stat-item {
  display: inline-block;
  margin-right: 15px;
}
.post .post-description .stats .stat-item .icon {
  margin-right: 8px;
}
.post .post-footer {
  border-top: 1px solid #ddd;
  padding: 15px;
}
.post .post-footer .input-group-addon a {
  color: #454545;
}
.post .post-footer .comments-list {
  padding: 0;
  margin-top: 20px;
  list-style-type: none;
}
.post .post-footer .comments-list .comment {
  display: block;
  width: 100%;
  margin: 20px 0;
}
.post .post-footer .comments-list .comment .avatar {
  width: 35px;
  height: 35px;
}
.post .post-footer .comments-list .comment .comment-heading {
  display: block;
  width: 100%;
}
.post .post-footer .comments-list .comment .comment-heading .user {
  font-size: 14px;
  font-weight: bold;
  display: inline;
  margin-top: 0;
  margin-right: 10px;
}
.post .post-footer .comments-list .comment .comment-heading .time {
  font-size: 12px;
  color: #aaa;
  margin-top: 0;
  display: inline;
}
.post .post-footer .comments-list .comment .comment-body {
  margin-left: 50px;
}
.post .post-footer .comments-list .comment > .comments-list {
  margin-left: 50px;
}

.fluid-width-video-wrapper {
    width: 100%;
    position: relative;
    padding: 0;
}

.fluid-width-video-wrapper iframe, .fluid-width-video-wrapper object, .fluid-width-video-wrapper embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
</style>

<link rel='stylesheet' href='https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

<script src='https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-white profile-widget">
            <div class="row">
                <div class="col-sm-12">
                    <div class="image-container bg2" style="background:url(http://www.bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg)">  
                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png" class="avatar" alt="avatar"> 
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="details">
                        <h4>John Smit Doe <i class="fa fa-sheild"></i></h4>
                        <div>Works at Bootdey.com</div>
                        <div>Attended University of Bootdey</div>
                        <div>Lives in Medellin, Colombia</div>
                        <div class="mg-top-10">
                            <a href="#" class="btn btn-default">About Kevin</a>
                            <a href="#" class="btn btn-success">Add Kevin</a>
                        </div>
                    </div>
                </div>
                 
            </div>
        </div>
        
        <div class="row">
            
            <div class="col-sm-12">
                <div class="panel panel-white post">
                    <div class="post-heading">
                        <div class="pull-left image">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                            <div class="title h5">
                                <a href="#"><b>John Doe</b></a>
                                uploaded a photo.
                            </div>
                            <h6 class="text-muted time">5 seconds ago</h6>
                        </div>
                    </div>
                    <div class="post-image">
                        <img src=""><img src="https://www.bootdey.com/image/400x200" class="image" alt="image post">
                    </div>
                    <div class="post-description">
                        <h4>Product Shoot</h4>
                        <p>Here is a picture of the walkway to our product shoot.</p>
                        <div class="stats">
                            <a href="javascript:void(0);" class="btn btn-default stat-item">
                                <i class="fa fa-thumbs-up icon"></i>228
                            </a>
                            <a href="javascript:void(0);" class="btn btn-default stat-item">
                                <i class="fa fa-share icon"></i>128
                            </a>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="input-group"> 
                            <input class="form-control" placeholder="Add a comment" type="text">
                            <span class="input-group-addon">
                                <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>  
                            </span>
                        </div>
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="javascript:void(0);">
                                    <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">John dOE</h4>
                                        <h5 class="time">7 minutes ago</h5>
                                    </div>
                                    <p>I really love this picture. I really wish i could have been there.</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="javascript:void(0);">
                                    <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">John Doe</h4>
                                        <h5 class="time">3 minutes ago</h5>
                                    </div>
                                    <p>I think I might you this for one of my projects.</p>
                                </div>
                            </li>
                            <li class="comment">
                                <a class="pull-left" href="javascript:void(0);">
                                    <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">John Doe</h4>
                                        <h5 class="time">10 seconds ago</h5>
                                    </div>
                                    <p>Wow! This is gorgeous.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="panel panel-white post">
                    <div class="post-heading">
                        <div class="pull-left image">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                            <div class="title h5">
                                <a href="#"><b>John Doe</b></a>
                                made a post.
                            </div>
                            <h6 class="text-muted time">1 minute ago</h6>
                        </div>
                    </div> 
                    <div class="post-description"> 
                        <p>Anyone who is interested in helping out with the Mark &amp; Markson dinner party, please let me know before the week is over.</p>
                        <div class="stats">
                            <a href="javascript:void(0);" class="btn btn-default stat-item">
                                <i class="fa fa-thumbs-up icon"></i>2
                            </a>
                            <a href="javascript:void(0);" class="btn btn-default stat-item">
                                <i class="fa fa-share icon"></i>12
                            </a>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="input-group"> 
                            <input class="form-control" placeholder="Add a comment" type="text">
                            <span class="input-group-addon">
                                <a href="javascript:void(0);"><i class="fa fa-edit"></i></a>  
                            </span>
                        </div>
                        <ul class="comments-list">
                            <li class="comment">
                                <a class="pull-left" href="javascript:void(0);">
                                    <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">Gavino Free</h4>
                                        <h5 class="time">5 minutes ago</h5>
                                    </div>
                                    <p>Sure, I'd help out.</p>
                                </div>
                                <ul class="comments-list">
                                    <li class="comment">
                                        <a class="pull-left" href="javascript:void(0);">
                                            <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="avatar">
                                        </a>
                                        <div class="comment-body">
                                            <div class="comment-heading">
                                                <h4 class="user">John Doe</h4>
                                                <h5 class="time">3 minutes ago</h5>
                                            </div>
                                            <p>I will email you the details.</p>
                                        </div>
                                    </li> 
                                    <li class="comment">
                                        <a class="pull-left" href="javascript:void(0);">
                                            <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="avatar">
                                        </a>
                                        <div class="comment-body">
                                            <div class="comment-heading">
                                                <h4 class="user">John Doe</h4>
                                                <h5 class="time">3 minutes ago</h5>
                                            </div>
                                            <p>Ok, cool.</p>
                                        </div>
                                    </li> 
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
             
            <div class="col-sm-12">
                <div class="panel panel-white post">
                    <div class="post-heading">
                        <div class="pull-left image">
                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                            <div class="title h5">
                                <a href="#"><b>Yanique Robinson</b></a>
                                shared a video.
                            </div>
                            <h6 class="text-muted time">1 minute ago</h6>
                        </div>
                    </div> 
                    <div class="post-video">
                        <div class="fluid-width-video-wrapper" style="padding-top: 56.2%;"><iframe src="https://player.vimeo.com/video/98417189" id="fitvid369523"></iframe></div>
                    </div>
                    <div class="post-description">  
                        <div class="stats">
                            <a href="javascript:void(0);" class="btn btn-default stat-item">
                                <i class="fa fa-thumbs-up icon"></i>2
                            </a>
                            <a href="javascript:void(0);" class="btn btn-default stat-item">
                                <i class="fa fa-share icon"></i>12
                            </a>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="input-group"> 
                            <input class="form-control" placeholder="Add a comment" type="text">
                            <span class="input-group-addon">
                                <a href="javascript:void(0);"><i class="fa fa-edit"></i></a> 
                            </span>
                        </div> 
                    </div>
                </div>
            </div>
            
        </div>
        
    </div>

</div>
</div>