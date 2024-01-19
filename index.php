<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G8 Music Studio</title>
    <meta charset="utf-8">
    <meta name="description" content="hkgaanaapp.herokuapp.com- Listen &amp; Download latest MP3 songs online. Download new or old Hindi songs, Bollywood songs, English songs* &amp; more on Gaana+ and play offline. Create, share and listen to streaming music playlists for free.">
    <meta name="keywords" content="songs, music, songs online, listen songs, MP3 songs, listen to free online songs, online latest songs, free music, popular songs, movie songs, gaana.com, listen to songs online, listen to free music, online music, free music online, latest movie songs, hindi songs, play songs, online songs, hindi songs, music albums, free music, online music, english songs, hollywood songs, playlists music, music online">
    <link rel="shortcut icon" type="image/x-icon" href="http://css375.gaanacdn.com/images/favicon.ico">
    <link rel="stylesheet" href="assests/css/bootstrapcss/bootstrap.min.css">
    <link rel="stylesheet" href="assests/css/font-awesome.css">
    <link rel="stylesheet" href="src/jquery-ui.css">
    <link rel="stylesheet" href="assests/css/main.css">
    <link rel="stylesheet" href="assests/css/animate.css">
    <link rel="stylesheet" href="assests/css/media_queries.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="assests/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">
    <script src="assests/js/jquery-3.2.1.min.js"></script>
    <script src="src/jquery-ui.js"></script>
    <script src="assests/js/wow.min.js"></script>
    <script src="assests/js/bootstrap.min.js"></script>
    <script src="assests/js/main.js"></script>
    <script src="assests/js/ganna.json"></script>
    <script src="assests/js/generator.js"></script>  
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102239963-1', 'auto');
  ga('send', 'pageview');

    </script>
</head>

<body>
    <header class="clearfix">
        <div id="logo"> <a href="index.html">G8 Music Studio</a> </div>
        <nav>
            <ul class="nav navbar-nav">
                <li>Trang chủ</li>
                <li>Khám Phá</li>
                <li>Radio</li>
                <li>Thư viện</li>
            </ul>
        </nav>
        <span id="search_box"><i class="fa fa-search"></i></span>
        <div class="nav2">
            <ul class="nav navbar-nav">
                <li id="get_ganna">
                    <button class="btn btn-default">Tải xuông!</button>
                </li>
                <li id="download_app"><i class="fa fa-apple" area-hidden="true"></i> <i class="fa fa-android" area-hidden="true"></i></li>
                <li id="login"><a href="Login,SignUp/Login.php">Đăng nhập/Đăng ký</a></li>
                <li id="language">
                    <a href="#"><i class="fa fa-language" area-hidden="true"></i> </a>
                </li>
            </ul>
        </div>
        <div id="header_blank_div"></div>
    </header>
    <div class="nav3">
            <ul>
                <li class="active_nav">Home</li>
                <li>Discover</li>
                <li>Radio</li>
            </ul>
        </div>
    <section id="search_music">
        <div class="btn btn-default main_button">
            <input type="text" placeholder="What do you want to listen to?"> <a href="#" class="btn btn-default search"><i class="fa fa-search">
            </i>Search</a> 
        </div> <a href="#" class="trending">Thịnh Hành</a> 
        </section>
          <aside id="songs">
        <div class="container">
           <div id="songs_collection">           
           </div>
          <footer class="clearfix">
                <div class="followus">
                    <h5>FOLLOW US ON</h5>
                    <a rel="nofollow" href="" target="_blank" class="facebook"> <i class="fa fa-facebook" area-hidden="true"></i> </a>
                    <a rel="nofollow" href="" target="_blank" class="gplus"> <i class="fa fa-google" area-hidden="true"></i> </a>
                    <a rel="nofollow" href="" target="_blank" class="twitter"> <i class="fa fa-twitter" area-hidden="true"></i> </a>
                </div>
                <div class="footer_note"> G8 Music Studio là trang web nghe nhạc trực tuyến trên nền tảng mạng internet hiện đại, có đầy đủ bản quyền của các nhạc sĩ nổi tiếng trên toàn thế giới</div>
                <div class="foo-links desktop"> <a id="advertise-on-gaana">Advertise on Group8.com</a> <a class="termsofuse">Terms of use</a> <a class="privacy-policy">Privacy policy</a> <a id="feedback">Feedback</a> <a id="report-an-issue">Report an issue</a> <a id="partners" href="#">Partners</a> <a id="faq-link" href="#">FAQ</a> </div>
                <div class="foo-links mobile"> <a class="privacy-policy" href="#">Privacy policy</a> <a class="termsofuse" href="#">Terms of use</a> </div>
                <div class="copyright">Made by group 8 22DHTT04 VAA, All Rights reserved.</div>
            </footer>
       </div>
    </aside>
            
    <div class="footer" id="player">
        <div class="queue" id="queue">
            <ul id="queueUl"><a  class="open_queue" id="queue_list">Mở danh sách<i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
            <div id="playlist_box">
            <li id="queuelist_options">
            <div class="thumb left">
            <img src="assests/images/defaultImage.gif" class="img-responsive" alt=""> 
            </div>
            <div id="queueName">Danh sách</div>
            <div class="right">
                <button id="saveAsPlaylist" class="btn btn-default">
                LƯU DANH SÁCH PHÁT
                </button>
                <button id="clearQueue" class="btn btn-default">
                XÓA DANH SÁCH
                </button>
            </div>
            </li>           
           </div>
            </ul>
        </div>
        <div class="player left">
            <div class="thumb left"> 
            <img
            id="player_song_image" src="assests/images/bahubali.jpg" class="img-responsive"
            onerror="defaultImage();" alt=""> 
            </div>
            <div class="player_song_details left"> <span id="player_song_name">Jio re Bahubali</span>
             <span id="player_album_name">bahubali 2</span> </div>   
               
            <div class="audio_player right">
                <audio id="audio_player" controls="controls" loop="loop" preload="auto">
                    <source src="" type="audio/mp3" /> Your browser doesn't support the HTML audio tag. Be sad </audio>
                    
                <div id="ui_player">
                  <div class="left border-right main_player">
                   <div id="music_progress">
                   <input type="range" min="0" max="100" value="0" id="music_slider" oninput="manageAudioForwarding(this.value);">
                   <span id="current_time" class="left song_time">0:00</span>
                   <span id="end_time" class="song_time right">3:26</span>
                   </div>
                   <div> 
                    <a onclick="toggleVolumeBox();" id="volume_box">
                    <div id="volume_manager" class="none">
                    <input type="range" min="0" max="100" value="100" onchange="" orient="vertical" oninput="volume(this.value);" id="volume_slider">
                    </div>
                    <i class="fa fa-volume-up" aria-hidden="true"></i>
<!--                   <i class="fa fa-volume-down" aria-hidden="true"></i>-->
<!--                   <i class="fa fa-volume-off" aria-hidden="true"></i>-->
                    </a>
                    <a onclick="playPrev();" id="playprev"><i class="fa fa-step-backward" aria-hidden="true"></i></a>
                    <a onclick="playOrPause();" id="playorpause">
                    <img src="assests/images/loader.gif" alt="loading" class="img-loading img-responsive">
                     <i class="fa fa-play" aria-hidden="true"></i>
                     <i class="fa fa-pause" aria-hidden="true"></i>
                    </a>
                    <a onclick="playNext();" id="playnext"><i class="fa fa-step-forward" aria-hidden="true"></i></a>
                   </div>
                    </div >
                    <div id="shuffle" class="border-right left"> 
                        <a onclick="manageRepeat();" id="loop"><i class="fa fa-repeat" aria-hidden="true"></i></a>
                        <a onclick="ManageShuffle();"><i class="fa fa-random" aria-hidden="true"></i>
                        
                        </a>
                        
                    </div>
                    <div id="quality" class="border-right left"><a>
                    <div class="dropup">
                        <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div><i class="fa fa-cog" aria-hidden="true"></i></div>
                            <div>Quality</div>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li>Cao</li>
                            <li>Trung bình</li>
                            <li>Thấp</li>
                        </ul>
                    </div>
                    </a>
                    </div>
                    <div id="options_player" class="left"><a>
                        <div class="dropup">
                        <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">...</button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li>Thêm vào danh sách phát</li>
                            <li>Yêu thích</li>
                            <li>Chia sẻ</li>
                            <li>Xóa khỏi hàng chờ</li>
                            <li>Thông tin bài hát</li>
                        </ul>
                    </div>
                    </a></div>                    
                </div>    
                    
            </div>
        </div>
    </div>



</body>

</html>
