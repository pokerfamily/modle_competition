<?php
require_once"db.php";
 ?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>第四季《我是歌手》</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/card.css"/>
    <link rel="stylesheet" type="text/css" href="css/pattern.css"/>
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script>
        if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
            var root = document.getElementsByTagName('html')[0];
            root.setAttribute('class', 'ff');
        }
    </script>

</head>

<body class="demo-3">
<div id="container">
    <div class="main none">
        <div class="content">
            <ul>
                <li class="regist activeli">注册</li>
                <li class="log">登录</li>
            </ul>
            <i class="close card__btn-close fa fa-times"></i>
            <div class="wrapper">
              <div class="login_page template none">
                  <div class="line">
                      <span>帐号:</span>
                        <input type="text" class="user_name" placeholder="请输入帐号名" />
                  </div>
                  <div class="line">
                      <span>密码:</span>
                        <input type="password" class="password" placeholder="请输入密码" />
                  </div>
                  <input type="submit" class="sub_btn" value="登录" />
                  <div class="warnning"></div>
              </div>
              <div class="regist_page template">
                  <div class="line">
                      <span>帐号:</span>
                        <input type="text" class="user_name" placeholder="请输入帐号名" />
                  </div>
                  <div class="line">
                      <span>密码:</span>
                        <input type="password" class="password" placeholder="请输入密码" />
                  </div>
                  <div class="line">
                      <span>再次输入密码:</span>
                        <input type="password" class="repassword" placeholder="请再次输入密码" />
                  </div>
                  <input type="submit" class="sub_btn" value="注册" />
                  <div class="warnning"></div>
              </div>
            </div>
        </div>
        <div class="mask"></div>
    </div>
    <div class="header_bg" style="background-color:#fff;">
        <div class="wrap" style="width:85%">
            <div id="content">
                <header id="topnav">
                    <nav>
                        <ul>
                            <li class="home"><a class="scroll" href="index.php">主页</a></li>
                            <li class="active member"><a class="scroll" href="#">比赛选手</a></li>
                            <li><a class="scroll" href="http://www.mgtv.com/v/2016/wsgs4/?f=bdpz"
                                   target="_blank">音乐试听</a></li>
                            <li><a class="scroll vote" href="vote.php">为他投票</a></li>
                            <li><a class="scroll" href="#contact">联系我们</a></li>
                            <?php if($_COOKIE['username']==null){ ?>
                            <li><a class="scroll login_btn" href="#">注册/登录</a></li>
                            <?php }else{ ?>
                              <li class="post_name" style="line-height:70px;padding-left:10px;color:#C83434;font-weight:bold;"><?php echo $_COOKIE['username']; ?></li>
                              <?php } ?>
                            <div class="clear"></div>
                        </ul>
                    </nav>
                    <a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3" target="_blank">
                        <div class="logo">
                            <div class="gz">关注我们</div>
                        </div>
                    </a>
                    <a href="index.html" id="navbtn">主页</a>

                    <div class="clear"></div>
                </header>
                <script type="text/javascript" src="js/menu.js"></script>
            </div>
        </div>
    </div>
    <div id="member_page" style="display:block">
        <div class="content" style="padding:1em 0 0">
        <!-- trianglify pattern container -->
            <div class="pattern pattern--hidden"></div>
            <!-- cards -->
            <div class="wrapper" style="padding:2em 0 0;overflow: auto;width: 95%;max-width: 1366px;margin: 0 auto;">
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath1">
                                    <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath1)" width="1920" height="500" xlink:href="images/lkq2.jpg"></image>
                        </svg>
                        <div class="card__content">
                            <i class="card__btn-close fa fa-times"></i>

                            <div class="card__caption">
                                <h2 class="card__title">李克勤</h2>

                                <p class="card__subtitle">在我是歌手中发出璀璨的光芒</p>
                            </div>
                            <div class="card__copy">

                                <div class="wrap">
                                    <div class="single-top">
                                        <div class="wrapper_single">
                                            <div class="wrapper_top">
                                                <div class="grid_1 alpha">
                                                    <div class="date">
                                                        <span>10</span>
                                                        Sep 2015
                                                    </div>
                                                </div>
                                                <div class="content span_2_of_single">
                                                    <h5 class="blog_title"><a href="bloginner.html">歌手简介</a></h5>

                                                    <div class="content">
                                                        <div class="span-1-of-1">
                                                            <a href="#"><img class="m_img" src="images/lkq1.png" alt="" style="width:120%;" /></a>
                                                        </div>
                                                        <div class="span-1-of-2"
                                                             style="font-family:'微软雅黑', sans-serif;font-size:0.85em;color:#000;">
                                                            <ul>
                                                                <li>中 文 名:<span>李克勤</span></li>
                                                                <li>外 文 名:<span>Hacken Lee</span></li>
                                                                <li>别    名:<span>氧气暖男</span></li>
                                                                <li>国    籍:<span>中国</span></li>
                                                                <li>民    族:<span>汉族</span></li>
                                                                <li>星    座:<span>摩羯座</span></li>
                                                                <li>出 生 地:<span>香港特别行政区</span></li>
                                                                <li>出生日期:<span>1967年12月6日</span></li>
                                                                <li>职    业:<span>歌手，演员，主持</span></li>
                                                                <li>毕业院校:<span>香港华仁书院</span></li>
                                                                <li>代表作品:<span>红日、情牢、一生何求、月半小夜曲、合久必婚、深深深、飞花</span></li>
                                                                <li>主要成就:
                                                                  <span><ol>
                                                                            <li>十大劲歌金曲最受欢迎男歌星</li>
                                                                            <li> 十大中文金曲最优秀流行男歌手</li>
                                                                            <li> 叱咤乐坛流行榜我最喜爱的男歌手</li>
                                                                  </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2001年2月，与香港管弦乐团合作于红馆举办《港乐．克勤Live》演唱会，两度加场后共开四场，再次迅速崛起。《港乐·克勤Live-卡拉OK》
                                                          现场录音CD/VCD更获得《2001年度IFPI香港唱片销量大奖》的“十大销量广东大碟奖”。7月推出音乐专辑《飞花》，同名主打歌《飞花》替
                                                          李克勤夺得《十大劲歌金曲颁奖典礼》“金曲奖”，《新城劲爆颁奖礼》“新城劲爆歌曲奖”和《第24届十大中文金曲颁奖典礼》“优秀流行歌手大奖”。
                                                        </p>
                                                    </div>
                                                    <div class="para">
                                                        <p>2005年2月，和杨利伟、杨澜等人一同入选“第9届中华中国青年联合会委员”，成为首批演艺界入选艺人。7月，李克勤在相隔八年后再推出国语专辑《
                                                          爱可以问谁》，同时在国内展开一系列的宣传活动。12月2日推出投资过百万的《李克勤演奏厅》。2005年，与梁荣忠主持的《残酷一叮》赢取
                                                          TVB38周年台庆颁奖典礼中“最佳咨讯节目”和“最具创意节目”两个奖项。李克勤在《2005年度新城劲爆颁奖礼》上除获得五个音乐奖项外，还赢
                                                          取“我最欣赏男歌手”。《2005年度叱吒乐坛流行榜颁奖典礼》上首度夺得“叱吒乐坛男歌手铜奖”，并发表“西装论”解释了他与商业电台的关系。在《2005
                                                          年度十大劲歌金曲颁奖典礼》上第三度获得“最受欢迎男歌星”。
                                                        </p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2013年1月，出席十大中文金曲颁奖礼，获得优秀流行歌手大奖，并凭《活着为求甚么》一曲获得“十大中文金曲”奖项。歌曲《红日》因被导演赵薇选用为
                                                          《致我们终将逝去的青春》的插曲。3月1日，参与《浮想联翩张国荣》音乐会，演唱《梦到内河》《风继续吹》和合唱《明星》。5、6月相继为湖北
                                                          卫视选秀节目《我的中国星》和香港TVB艺人音乐比拼节目的《星梦传奇》为评委。2013年6月，为香港有线电视台NowTV主持欧洲国家杯足球节目。7月获东
                                                          方卫视邀请为选秀节目《声动亚洲》作为比赛评委；推出Hi-F发烧i碟《复克》，由舒文和冯翰铭监制全碟，重唱八首玉置浩二的改编作品。8月
                                                          底，推出由舒文和冯翰铭监制的新专辑《在森林和原野》，专辑概念是“大人的儿歌”。9月8日，在广州开始《李克勤演奏厅中国巡回演唱会》第一站。
                                                          2013年10月25日，推出广东EP《纸牌屋》，同名歌曲《纸牌屋》在11月10日的《新城劲爆颁奖礼2013》记者会推出，凭408次播放率夺得《播放指
                                                          数大奖（歌曲）》。11月，为无线主持游戏节目《决战一分钟》。12月6日，推出十周年新歌加精选音乐专辑《男人的歌》 。
                                                        </p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                        2016年1月15日，参加湖南卫视歌唱真人秀《我是歌手第四季》，作为首发阵容参加竞演。同年1月29日，湖南卫视播出的《我是歌手第四季》第三期踢
                                                        馆赛，演唱《遥远的她》，获得第三期第一名；同年3月4日，湖南卫视播出的《我是歌手第四季》第八期竞演，演唱薛之谦的《丑八怪》，获得第八期
                                                        第六名；4月8日，在《我是歌手第四季》最后一期“歌王之战”帮帮唱环节搭档林子祥、叶倩文演唱歌曲《左林右莉走一回》，并在个人演唱环节演唱
                                                        《爱是永恒》。
                                                        </p>
                                                    </div>
                                                    <h6 class="text"><a href="http://baike.baidu.com/subview/6946/6142448.htm">了解更多</a></h6>
                                                    <div class="recentpost">
                                                        <h4>成名歌曲介绍</h4>
                                                        <ul class="sidebar_1">
                                                            <li>
                                                                <a href="http://y.qq.com/#type=song&mid=001cdurD2fY83O&tpl=yqq_song_detail&play=1">月半小夜曲
                                                                </a>
                                                            </li>
                                                            <li>
                                                              <a href="http://y.qq.com/#type=song&mid=004KmANa1EbLa6&play=1">红日
                                                              </a>
                                                            </li>
                                                            <li>
                                                              <a href="http://bd.kuwo.cn/yinyue/6929991?from=baidu">友情岁月
                                                              </a>
                                                            </li>
                                                            <li><a href=" http://bd.kuwo.cn/yinyue/6954724?from=baidu">丑八怪</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comments">
                                                        <h4>评论</h4>
                                                        <?php
                                                        $rows=getRows(1);
                                                        $num=getNumber(1);
                                                        //echo var_dump($rows);
                                                        for ($i=0;$i<$num;$i++) {
                                                          // var_dump($rows[$i]);
                                                         ?>
                                                        <div class="c_grid">
                                                            <div class="person_1">
                                                                <a href="#"><span> </span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="c_sub_grid">
                                                                    <p><a href="#"><?php echo $rows[$i]['name'];?></a></p>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <div class="para">
                                                                    <?php echo $rows[$i]['message']; ?>
                                                                </div>
                                                              </div>
                                                              <div class="clear"></div>
                                                          </div>
                                                          <?php } ?>
                                                      </div>
                                                    <div class="comments-area">
                                                        <h4>留言</h4>

                                                        <form  class="postform1">
                                                            <div class="text_area">
                                                                <textarea class="post_para" onFocus="if(this.value == '留言区(用户需注册登录后才能留言哦)') this.value='';"
                                                                      onBlur="if(this.value == '') this.value='留言区(用户需注册登录后才能留言哦)';">留言区(用户需注册登录后才能留言哦)</textarea>
                                                            </div>
                                                            <div>
                                                                <div class="button send_button">
                                                                    <input type="submit" class="post_btn" value="发送">
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="rsidebar span_1_of_3">
                                            <div class="search_box">
                                                <form>
                                                    <input type="text" value="搜索" onFocus="this.value = '';"
                                                           onBlur="if (this.value == '') {this.value = '搜索';}"><input
                                                        type="submit" value="">
                                                </form>
                                            </div>
                                            <div class="social_2">
                                                <h4>关注我们</h4>
                                                <ul>
                                                    <li class="weixin"><a href="#"><span> </span></a></li>
                                                    <li class="weibo"><a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3"><span> </span></a></li>
                                                </ul>
                                            </div>
                                            <div class="email_box">
                                                <form>
                                                    <div class="email">
                                                        <input type="text" value="请输入你的Email" onFocus="this.value = '';"
                                                               onBlur="if (this.value == '') {this.value = 'Enter Your e-mail';}">
                                                    </div>
                                                    <div class="button">
                                                        <span><input type="submit" value="提交"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="popularpost" style="margin-top:40px;">
                                                <h4>个性照片</h4>

                                                <div class="image">
                                                    <a href="#"><img class="m_img" src="images/lkq2.png" alt="" style="width:95%;" /></a>
                                                </div>
                                                <p>李克勤</p>

                                                <div class="link_1">
                                                    <p><a href="http://open.baidu.com/special/time/">Sep 26,2013 </a></p>
                                                    <a href="http://baike.baidu.com/link?url=ARVXCT-ZSTkCz2ybRTVCQNjI1oFM6-CXflphNr9xky2pTI31-OIuudPynmasP8NT6YQY9xc1VfGHwiAMEBbUorbftomZhvWdccltN1gannq"
                                                       class="arrow_btn right">Read More</a>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="recentpost">
                                                <h4>歌曲试听</h4>
                                                <object type="application/x-shockwave-flash" data="dewplayer-playlist.swf"
                                                        width="240" height="200" id="dewplayer" name="dewplayer">
                                                    <param name="wmode" value="transparent"/>
                                                    <param name="movie" value="dewplayer-playlist.swf"/>
                                                    <param name="flashvars"
                                                           value="showtime=true&autoreplay=true&xml=playlist.xml"/>
                                                </object>
                                            </div>
                                            <div class="tags">
                                                <h4>标签</h4>
                                                <ul>
                                                    <li><a href="#">帅气</a></li>
                                                    <li><a href="#">善良 </a></li>
                                                    <li><a href="#">友善</a></li>
                                                    <li><a href="#">实力派 </a></li>
                                                    <li><a href="#">勤奋</a></li>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath2">
                                    <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath2)" width="1920" height="500" xlink:href="images/hzl2.jpg"></image>
                        </svg>
                        <div class="card__content">
                            <i class="card__btn-close fa fa-times"></i>

                            <div class="card__caption">
                                <h2 class="card__title">黄致列</h2>

                                <p class="card__subtitle">最会撩妹的故事感歌手</p>
                            </div>
                            <div class="card__copy">
                                <div class="wrap">
                                    <div class="single-top">
                                        <div class="wrapper_single">
                                            <div class="wrapper_top">
                                                <div class="grid_1 alpha">
                                                    <div class="date">
                                                        <span>10</span>
                                                        Sep 2015
                                                    </div>
                                                </div>
                                                <div class="content span_2_of_single">
                                                    <h5 class="blog_title"><a href="bloginner.html">歌手简介</a></h5>

                                                    <div class="content">
                                                        <div class="span-1-of-1">
                                                            <a href="#"><img class="m_img" src="images/hzl1.png" alt=""/></a>
                                                        </div>
                                                        <div class="span-1-of-2"
                                                             style="font-family:'微软雅黑', sans-serif;font-size:0.85em;color:#000;">
                                                            <ul>
                                                                <li>中 文 名:<span>黄致列</span></li>
                                                                <li>外 国 名:<span>황치열</span></li>
                                                                <li>别    名:<span>致列、Ten2、炽烈金声、二哥</span></li>
                                                                <li>国    籍:<span>韩国</span></li>
                                                                <li>民    族:<span>韩民族</span></li>
                                                                <li>星    座:<span>射手座</span></li>
                                                                <li>出 生 地:<span>韩国庆尚北道龟尾市</span></li>
                                                                <li>出生日期:<span>1982年12月3日</span></li>
                                                                <li>职    业:<span>歌手、声乐老师</span></li>
                                                                <li>毕业院校:<span>韩国警察第六大学（한국폴리텍6대학）龟尾校区机械工程系</span></li>
                                                                <li>代表作品:<span>只一次、告解、铅笔</span></li>
                                                                <li>主要成就:<span>2016年“第18届华鼎奖”全球最佳歌手奖提名 2016年“第二届酷音乐亚洲盛典”年度最具实力歌手奖</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                          2007年2月，推出首张个人EP专辑《致列》，从而正式出道[9]  ；同年年6月，推出首张个人音乐专辑《五感》，收录了包括《父亲》、《一个人不要吃饭》等在内的12首歌曲。
                                                        </p>
                                                    </div>
                                                    <div class="para">
                                                        <p>
                                                          2015年2月26日，黄致列以选手身份参加Mnet音乐推理节目《看见你的声音》的录制；同年9月1日，推出个人单曲《铅笔》，收录于SBS月火剧《Mrs.Co
                                                          p OST Part.1》中；同年9月26日，出演KBS电视台音乐类综艺节目《不朽的名曲》；同年10月10日，出演SBS电视台谈话类综艺节目《同床异梦，没关
                                                          系没关系》；同年10月，与赵东赫、朴俊亨合作主演SBS电视台《金炳万的丛林法则》“萨摩亚篇”；同年11月，参加JTBC综艺节目《Two Yu Project
                                                          — 寻找Sugar Man》的录制 ；同年，以来宾身份出演JTBC综艺节目《非首脑会谈》的录制；同年11月9日，固定出演MBC电视台综艺节目《我独自生活》
                                                          ；同年11月10日，与朴宝英、韩银贞、任恩顷出席在首尔举行的韩国电影《世界尽头的爱》VIP试映会；同年11月，与姜虎东、李秀根、徐章勋担任JTBC
                                                          综艺节目《哥哥家》的固定嘉宾；同年11月22日，在首尔瑞草区Whitehall举行出道后的第一场粉丝见面会“Happy Yeul’s Day”；同年12月，参加综
                                                          编频道JTBC综艺节目《认识的哥哥》的录制[15]  ；同年12月30日，出席在高尺巨蛋举办的“2015KBS歌谣大祝祭”。
                                                        </p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                          2016年，作为首发阵容参加湖南卫视歌唱真人秀《我是歌手第四季》的比赛，经纪人则由张玉安担任 ；同年1月15日，湖南卫视播出的《我是歌手第四季》第一期竞
                                                          演，演唱一首韩文歌曲《那个人》，获得第一期第二名 ；同年1月，参加湖南卫视综艺节目《天天向上》的录制，并现场演唱了《父亲》、《鲁冰花》等歌曲 ；
                                                          同年1月22日，湖南卫视播出的《我是歌手第四季》第二期竞演，演唱张信哲的《从开始到现在》，获得第二期第二名；同年1月29日，湖南卫视播出的《我是歌
                                                          手第四季》第三期踢馆赛，演唱张学友的《一路上有你》，获得第三期第三名  ；同年2月2日，参加湖南卫视《小年夜春晚》，并现场演唱了张学友的《一路上
                                                          有你》和BigBang的《谎言》2首歌曲；同年2月5日，湖南卫视播出的《我是歌手第四季》第四期竞演，演唱BigBang的《Bang Bang Bang》，获得第四期
                                                          第一名及歌手互投第一名 ；同年2月12日，湖南卫视播出的《我是歌手第四季》第五期竞演，演唱那英的《默》，获得第五期第六名 ；同年2月19日，湖南卫
                                                          视播出的《我是歌手第四季》第六期踢馆赛，演唱韩语歌曲《苦海》，获得第六期第三名；同年2月22日，参加湖南卫视《元宵喜乐会》，并现场演唱韩语歌曲
                                                          《父亲》；同年2月26日，湖南卫视播出的《我是歌手第四季》第七期竞演，演唱张宇的《一个人的天荒地老》，获得第七期第四名；同年3月4日，湖南卫视播
                                                          出的《我是歌手第四季》第八期竞演，演唱朴振英的《Honey》，获得第八期第一名 ；同年3月8日，获得“第18届华鼎奖”全球最佳歌手奖的提名 ；同年3月11
                                                          日，湖南卫视播出的《我是歌手第四季》第九期踢馆赛，演唱韩文歌曲《你只在比我高的地方》，获得第九期第四名 ；同年3月，与容祖儿、张信哲、徐佳莹一
                                                          起参加湖南卫视综艺节目《快乐大本营》的录制 ；同年3月18日。湖南卫视播出的《我是歌手第四季》第十期竞演，演唱王力宏的《改变自己》，获得第十期第
                                                          一名 ；同年3月24日，黄致列被韩国大使馆驻上海领事馆韩国文化院院长金镇坤授予韩中文化宣传大使 ；同年3月25日，湖南卫视播出的《我是歌手第四季》第
                                                          十一期竞演，演唱韩文歌曲《像中枪一样》，获得第十一期第四名  ；同年3月29日，出席“第二届酷音乐亚洲盛典”，获得年度最具实力歌手奖，并演唱歌曲《
                                                          一路上有你》 。4月8日，在《我是歌手第四季》最后一期“歌王之战”帮帮唱环节搭档Gummy演唱歌曲《You Are My Everything》；同时在个人演唱环节演
                                                          唱歌曲《王妃》。
                                                        </p>
                                                    </div>
                                                    <h6 class="text"><a href="http://baike.baidu.com/item/%E9%BB%84%E8%87%B4%E5%88%97">了解更多</a></h6>
                                                    <div class="recentpost">
                                                        <h4>成名歌曲介绍</h4>
                                                        <ul class="sidebar_1">
                                                            <li><a href="http://bd.kuwo.cn/yinyue/6943148?from=baidu">一个人的天荒地老</a>
                                                            </li>
                                                            <li><a href="http://bd.kuwo.cn/yinyue/6848602?from=baidu">那个人</a></li>
                                                            <li><a href="http://bd.kuwo.cn/yinyue/6997968?from=baidu">像中枪一样</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="comments">
                                                        <h4>评论</h4>
                                                        <?php
                                                        $rows=getRows(２);
                                                        $num=getNumber(２);
                                                        //echo var_dump($rows);
                                                        for ($i=0;$i<$num;$i++) {
                                                          // var_dump($rows[$i]);
                                                         ?>
                                                        <div class="c_grid">
                                                            <div class="person_1">
                                                                <a href="#"><span> </span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="c_sub_grid">
                                                                    <p><a href="#"><?php echo $rows[$i]['name'];echo $rows[$i]['time']; ?></a></p>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <div class="para">
                                                                    <?php echo $rows[$i]['message']; ?>
                                                                </div>
                                                              </div>
                                                              <div class="clear"></div>
                                                          </div>
                                                          <?php } ?>
                                                    </div>
                                                    <div class="comments-area">
                                                        <h4>留言</h4>

                                                        <form  class="postform2">
                                                            <div class="text_area">
                                                                <textarea class="post_para" onFocus="if(this.value == '留言区(用户需注册登录后才能留言哦)') this.value='';"
                                                                      onBlur="if(this.value == '') this.value='留言区(用户需注册登录后才能留言哦)';">留言区(用户需注册登录后才能留言哦)</textarea>
                                                            </div>
                                                            <div>
                                                                <div class="button send_button">
                                                                    <input type="submit" class="post_btn" value="发送">
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="rsidebar span_1_of_3">
                                            <div class="search_box">
                                                <form>
                                                    <input type="text" value="搜索" onFocus="this.value = '';"
                                                           onBlur="if (this.value == '') {this.value = '搜索';}"><input
                                                        type="submit" value="">
                                                </form>
                                            </div>
                                            <div class="social_2">
                                                <h4>关注我们</h4>
                                                <ul>
                                                    <li class="weixin"><a href="#"><span> </span></a></li>
                                                    <li class="weibo"><a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3"><span> </span></a></li>
                                                </ul>
                                            </div>
                                            <div class="email_box">
                                                <form>
                                                    <div class="email">
                                                        <input type="text" value="请输入你的Email" onFocus="this.value = '';"
                                                               onBlur="if (this.value == '') {this.value = 'Enter Your e-mail';}">
                                                    </div>
                                                    <div class="button">
                                                        <span><input type="submit" value="提交"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="popularpost" style="margin-top:40px;">
                                                <h4>个性照片</h4>

                                                <div class="image">
                                                    <a href="http://baike.baidu.com/link?url=Gxh4jkxDzTkhaEpITdNyUCE7O6reQr8hD6RW38gHRe-jZYwq0Oca7BSvAjfUe0AltozQgDIvVlYeMv0CexeBRa">
                                                      <img class="m_img" src="images/hzl2.png" alt="" style="width:95%;" />
                                                    </a>
                                                </div>
                                                <p>黄致列写真</p>

                                                <div class="link_1">
                                                    <p><a href="http://open.baidu.com/special/time/">Sep 26,2013 </a></p>
                                                    <a href="http://baike.baidu.com/link?url=N11SQrFbo3UYkYyZkRRXYLbK0IpsgjIdkFmWzjwAARM3v5nHapZ6DK8OAFjinTVvPU2byMehQ1P11ZohQRRnq4jEI6e5jp3k4nr2b15S3Yi"
                                                       class="arrow_btn right">Read More</a>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="recentpost">
                                                <h4>歌曲试听</h4>
                                                <object type="application/x-shockwave-flash" data="dewplayer-playlist.swf"
                                                        width="240" height="200" id="dewplayer" name="dewplayer">
                                                    <param name="wmode" value="transparent"/>
                                                    <param name="movie" value="dewplayer-playlist.swf"/>
                                                    <param name="flashvars"
                                                           value="showtime=true&autoreplay=true&xml=playlist.xml"/>
                                                </object>
                                            </div>
                                            <div class="tags">
                                                <h4>标签</h4>
                                                <ul>
                                                    <li><a href="#">帅气</a></li>
                                                    <li><a href="#">能歌会跳</a></li>
                                                    <li><a href="#">偶像派</a></li>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath3">
                                    <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath3)" width="1920" height="500" xlink:href="images/xjy2.jpg"></image>
                        </svg>
                        <div class="card__content">
                            <i class="card__btn-close fa fa-times"></i>

                            <div class="card__caption">
                                <h2 class="card__title">徐佳莹</h2>

                                <p class="card__subtitle">天马行空的歌唱</p>
                            </div>
                            <div class="card__copy">
                                <div class="wrap">
                                    <div class="single-top">
                                        <div class="wrapper_single">
                                            <div class="wrapper_top">
                                                <div class="grid_1 alpha">
                                                    <div class="date">
                                                        <span>4</span>
                                                        Oct 2015
                                                    </div>
                                                </div>
                                                <div class="content span_2_of_single">
                                                    <h5 class="blog_title"><a href="bloginner.html">歌手简介</a></h5>

                                                    <div class="content">
                                                        <div class="span-1-of-1">
                                                            <a href="#"><img class="m_img" src="images/xjy1.png" alt="" style="width:100%;" /></a>
                                                        </div>
                                                        <div class="span-1-of-2"
                                                             style="font-family:'微软雅黑', sans-serif;font-size:0.85em;color:#000;">
                                                            <ul>
                                                                <li>中 文 名:<span>徐佳莹</span></li>
                                                                <li>外 文  名:<span>Lala Hsu</span></li>
                                                                <li>国    籍:<span>中国</span></li>
                                                                <li>民    族:<span>汉族</span></li>
                                                                <li>星    座:<span>射手座</span></li>
                                                                <li>出 生 地:<span>台湾省台中市</span></li>
                                                                <li>出生日期:<span>1984年12月20日</span></li>
                                                                <li>职    业:<span>歌手、词曲创作人</span></li>
                                                                <li>毕业院校:<span>台湾中台科技大学护理系</span></li>
                                                                <li>代表作品:<span>身骑白马、失落沙洲、极限、惧高症、你敢不敢、寻人启事</span></li>
                                                                <li>主要成就:<span>第21届台湾金曲奖最佳新人奖</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2008年，徐佳莹参加了第三届台湾《超级星光大道》歌唱比赛，并以一首原创曲目《身骑白马》获得了25分满分的成绩，之后，徐佳莹一路过关斩将最终获得了总冠军。</p>
                                                    </div>
                                                    <div class="para">
                                                        <p>2010年，徐佳莹获得了第二届音乐风云榜新人盛典年度最佳唱作新人奖；同年6月，徐佳莹又获得了第21届台湾金曲奖最佳新人奖；同年9月，徐佳莹又发行了个人的第二张创作专
                                                          辑《极限》；同年10月，徐佳莹在台北音乐展演空间举办了《LaLa徐佳莹 Mini Concer》演唱会、这也是徐佳莹的首场个人专场售票演唱会。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2013年，徐佳莹先是获得了MusicRadio中国TOP排行榜港台地区年度最佳创作女歌手奖；之后，徐佳莹又发行了《继续·理想人生》演唱会实录专辑；此外，徐佳莹还举办了《不只是你想看见的我》个人演唱会；同年，徐佳莹还凭借《理想人生》专辑获得了第24届台湾金曲奖最佳国语女歌手奖提名。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2015年3月21日，徐佳莹首次在台北小巨蛋举办了《日全蚀》个人演唱会，徐佳莹表演了多首个人招牌曲目，圈中的多位重量级艺人也到现场为其助阵，而本场演唱会的一万多个座位则是座无虚席；同年5月，徐佳莹凭借专辑《寻人启事》获得第26届台湾金曲奖最佳国语女歌手、最佳国语专辑等六项提名。
                                                        2016年1月，徐佳莹开始以首发选手身份参加湖南卫视职业歌手对战真人秀《我是歌手第四季》，并在第一期节目的淘汰赛中凭借《失落沙洲》获得第一名[29]  ，而徐佳莹也在随后的比赛中顺利的进入了节目的总决赛[；同年3月，徐佳莹又为剧情电影《纽约纽约》献唱了主题曲《潇洒走一回》，而这首歌则是经过重新编曲的作品。4月8日，在《我是歌手第四季》最后一期“歌王之战”帮帮唱环节搭档林俊杰演唱歌曲《不为谁而作的歌》，并在个人演唱环节演唱歌曲《突然好想你》。</p>
                                                    </div>
                                                    <h6 class="text"><a href="http://baike.baidu.com/view/1471624.htm">了解更多</a></h6>
                                                    <div class="recentpost">
                                                        <h4>成名歌曲介绍</h4>
                                                        <ul class="sidebar_1">
                                                            <li><a href="http://music.baidu.com/song/s/850716221a60856cef6e2">起点</a></li>
                                                            <li><a href="http://music.baidu.com/song/2119046?pst=sug">恐高症</a></li>
                                                            <li><a href="http://music.baidu.com/song/243822994?pst=sug">贝壳</a></li>
                                                            <li><a href="http://music.baidu.com/song/2119071?pst=sug">没锁门</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comments">
                                                        <h4>评论</h4>
                                                        <?php
                                                        $rows=getRows(３);
                                                        $num=getNumber(３);
                                                        //echo var_dump($rows);
                                                        for ($i=0;$i<$num;$i++) {
                                                          // var_dump($rows[$i]);
                                                         ?>
                                                        <div class="c_grid">
                                                            <div class="person_1">
                                                                <a href="#"><span> </span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="c_sub_grid">
                                                                    <p><a href="#"><?php echo $rows[$i]['name'];echo $rows[$i]['time']; ?></a></p>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <div class="para">
                                                                    <?php echo $rows[$i]['message']; ?>
                                                                </div>
                                                              </div>
                                                              <div class="clear"></div>
                                                          </div>
                                                          <?php } ?>
                                                    </div>
                                                    <div class="comments-area">
                                                        <h4>留言</h4>
                                                        <form  class="postform3">
                                                            <div class="text_area">
                                                                <textarea class="post_para" onFocus="if(this.value == '留言区(用户需注册登录后才能留言哦)') this.value='';"
                                                                      onBlur="if(this.value == '') this.value='留言区(用户需注册登录后才能留言哦)';">留言区(用户需注册登录后才能留言哦)</textarea>
                                                            </div>
                                                            <div>
                                                                <div class="button send_button">
                                                                    <input type="submit" class="post_btn" value="发送">
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="rsidebar span_1_of_3">
                                            <div class="search_box">
                                                <form>
                                                    <input type="text" value="搜索" onFocus="this.value = '';"
                                                           onBlur="if (this.value == '') {this.value = '搜索';}"><input
                                                        type="submit" value="">
                                                </form>
                                            </div>
                                            <div class="social_2">
                                                <h4>关注我们</h4>
                                                <ul>
                                                    <li class="weixin"><a href="#"><span> </span></a></li>
                                                    <li class="weibo"><a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3"><span> </span></a></li>
                                                </ul>
                                            </div>
                                            <div class="email_box">
                                                <form>
                                                    <div class="email">
                                                        <input type="text" value="请输入你的Email" onFocus="this.value = '';"
                                                               onBlur="if (this.value == '') {this.value = 'Enter Your e-mail';}">
                                                    </div>
                                                    <div class="button">
                                                        <span><input type="submit" value="提交"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="popularpost" style="margin-top:40px;">
                                                <h4>个性照片</h4>

                                                <div class="image">
                                                    <a href="#"><img class="m_img" src="images/xjy2.png" alt="" style="width:95%;" /></a>
                                                </div>
                                                <p>徐佳莹好声音图</p>

                                                <div class="link_1">
                                                    <p><a href="http://open.baidu.com/special/time/">Sep 26,2013 </a></p>
                                                    <a href="http://baike.baidu.com/link?url=2X-zTggYjaANfWahFYo3m7PSyokI5Z0cULdc-puWquPUo1iQePILdSfDLh54fTLGHCYTBiZKfRkUtXlVNX3-0a"
                                                       class="arrow_btn right">Read More</a>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="recentpost">
                                                <h4>歌曲试听</h4>
                                                <object type="application/x-shockwave-flash" data="dewplayer-playlist.swf"
                                                        width="240" height="200" id="dewplayer" name="dewplayer">
                                                    <param name="wmode" value="transparent"/>
                                                    <param name="movie" value="dewplayer-playlist.swf"/>
                                                    <param name="flashvars"
                                                           value="showtime=true&autoreplay=true&xml=playlist.xml"/>
                                                </object>
                                            </div>
                                            <div class="tags">
                                                <h4>标签</h4>
                                                <ul>
                                                    <li><a href="#">歌手</a></li>
                                                    <li><a href="#">娱乐人物</a></li>
                                                    <li><a href="#">创作型歌手</a></li>
                                                    <li><a href="#">人物</a></li>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath4">
                                    <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath4)" width="1920" height="500" xlink:href="images/zxz2.jpg"></image>
                        </svg>
                        <div class="card__content">
                            <i class="card__btn-close fa fa-times"></i>

                            <div class="card__caption">
                                <h2 class="card__title">张信哲</h2>

                                <p class="card__subtitle">十多年如一日的情歌王子</p>
                            </div>
                            <div class="card__copy">
                                <div class="wrap">
                                    <div class="single-top">
                                        <div class="wrapper_single">
                                            <div class="wrapper_top">
                                                <div class="grid_1 alpha">
                                                    <div class="date">
                                                        <span>22</span>
                                                        Feb 2015
                                                    </div>
                                                </div>
                                                <div class="content span_2_of_single">
                                                    <h5 class="blog_title"><a href="bloginner.html">歌手简介</a></h5>

                                                    <div class="content">
                                                        <div class="span-1-of-1">
                                                            <a href="#"><img class="m_img" src="images/zxz1.png" alt=""/></a>
                                                        </div>
                                                        <div class="span-1-of-2"
                                                             style="font-family:'微软雅黑', sans-serif;font-size:0.85em;color:#000;">
                                                            <ul>
                                                                <li>中 文 名:<span>张信哲</span></li>
                                                                <li>外 文 名:<span>Jeff Chang Shin-Che</span></li>
                                                                <li>别    名:<span>阿哲、情歌王子</span></li>
                                                                <li>国    籍:<span>中国</span></li>
                                                                <li>民    族:<span>汉族</span></li>
                                                                <li>出 生 地:<span>台湾省云林县西螺镇</span></li>
                                                                <li>出生日期:<span>1967年(丁未年)03月26日</span></li>
                                                                <li>职    业:<span>歌手、演员</span></li>
                                                                <li>毕业院校:<span>美国基督教效力会基督书院</span></li>
                                                                <li>经纪公司:<span>百娱传媒股份有限公司</span></li>
                                                                <li>代表作品:<span>爱就一个字、过火、爱如潮水</span></li>
                                                                <li>主要成就:<span>台湾金曲奖最佳国语男歌手,新加坡金曲奖流行乐坛荣誉大奖</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                          2006年选择了新东家海蝶音乐代理其中国的专辑发行（台湾由华纳唱片发行，香港交给英皇发行），2006年推出了《做你的男人》。
                                                        </p>
                                                    </div>
                                                    <div class="para">
                                                        <p>2012年签约金牌大风和靖天娱乐集团 ，2012年发行国语专辑《空出来的时间》 ，张信哲大胆尝试了不同的音乐类型，包括中国风、欧洲风、Hip-hop、摇滚等。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2015年11月22日，“情歌王子”张信哲将驾临碧桂园世纪城邦，用他治愈系声音温暖南京人民整个冬季。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2016年1月15日，参加湖南卫视歌唱真人秀《我是歌手第四季》，作为补位阵容参加竞演 ，获得该期竞演第二名；3月4日，于《我是歌手第四季》第八期竞演中演唱《亲爱的小孩》获得第二名。3月11日，参加《我是歌手第四季》第九期竞演，演唱《平凡之路》，获得第一名；4月1日，于《我是歌手第四季》突围赛竞演中演唱《致光阴》，以第一名的成绩突围；4月8日，在《我是歌手第四季》最后一期“歌王之战”帮帮唱环节搭档Akon演唱歌曲《爱不lonely》；并在个人演唱环节演唱歌曲《天空之城》。</p>
                                                    </div>
                                                    <h6 class="text"><a href="http://baike.baidu.com/view/5439.htm">了解更多</a></h6>
                                                    <div class="recentpost">
                                                        <h4>成名歌曲介绍</h4>
                                                        <ul class="sidebar_1">
                                                            <li><a href="http://y.qq.com/#type=song&mid=000We4uX1abUkz&tpl=yqq_song_detail&play=1">信仰</a></li>
                                                            <li><a href="http://y.qq.com/#type=song&mid=003SH3Ty0uglUT&tpl=yqq_song_detail&play=1"> i believe</a></li>
                                                            <li><a href="http://y.qq.com/#type=song&mid=002gyHUJ0NCyAm&tpl=yqq_song_detail&play=1">爱你的宿命</a></li>
                                                            <li><a href="http://y.qq.com/#type=song&mid=004MVmia0q98lZ&tpl=yqq_song_detail&play=1"> 爱就一个字</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comments">
                                                        <h4>评论</h4>
                                                        <?php
                                                        $rows=getRows(４);
                                                        $num=getNumber(４);
                                                        //echo var_dump($rows);
                                                        for ($i=0;$i<$num;$i++) {
                                                          // var_dump($rows[$i]);
                                                         ?>
                                                        <div class="c_grid">
                                                            <div class="person_1">
                                                                <a href="#"><span> </span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="c_sub_grid">
                                                                    <p><a href="#"><?php echo $rows[$i]['name'];echo $rows[$i]['time']; ?></a></p>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <div class="para">
                                                                    <?php echo $rows[$i]['message']; ?>
                                                                </div>
                                                              </div>
                                                              <div class="clear"></div>
                                                          </div>
                                                          <?php } ?>
                                                    </div>
                                                    <div class="comments-area">
                                                        <h4>留言</h4>

                                                        <form  class="postform4">
                                                            <div class="text_area">
                                                                <textarea class="post_para" onFocus="if(this.value == '留言区(用户需注册登录后才能留言哦)') this.value='';"
                                                                      onBlur="if(this.value == '') this.value='留言区(用户需注册登录后才能留言哦)';">留言区(用户需注册登录后才能留言哦)</textarea>
                                                            </div>
                                                            <div>
                                                                <div class="button send_button">
                                                                    <input type="submit" class="post_btn" value="发送">
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="rsidebar span_1_of_3">
                                            <div class="search_box">
                                                <form>
                                                    <input type="text" value="搜索" onFocus="this.value = '';"
                                                           onBlur="if (this.value == '') {this.value = '搜索';}"><input
                                                        type="submit" value="">
                                                </form>
                                            </div>
                                            <div class="social_2">
                                                <h4>关注我们</h4>
                                                <ul>
                                                    <li class="weixin"><a href="#"><span> </span></a></li>
                                                    <li class="weibo"><a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3"><span> </span></a></li>
                                                </ul>
                                            </div>
                                            <div class="email_box">
                                                <form>
                                                    <div class="email">
                                                        <input type="text" value="请输入你的Email" onFocus="this.value = '';"
                                                               onBlur="if (this.value == '') {this.value = 'Enter Your e-mail';}">
                                                    </div>
                                                    <div class="button">
                                                        <span><input type="submit" value="提交"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="popularpost" style="margin-top:40px;">
                                                <h4>个性照片</h4>

                                                <div class="image">
                                                    <a href="#"><img class="m_img" src="images/zxz2.png" alt="" style="width:95%;" /></a>
                                                </div>
                                                <p>张信哲韩国宣传照</p>

                                                <div class="link_1">
                                                    <p><a href="http://open.baidu.com/special/time/">Sep 26,2013 </a></p>
                                                    <a href="http://baike.baidu.com/view/5439.htm"
                                                       class="arrow_btn right">Read More</a>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="recentpost">
                                                <h4>歌曲试听</h4>
                                                <object type="application/x-shockwave-flash" data="dewplayer-playlist.swf"
                                                        width="240" height="200" id="dewplayer" name="dewplayer">
                                                    <param name="wmode" value="transparent"/>
                                                    <param name="movie" value="dewplayer-playlist.swf"/>
                                                    <param name="flashvars"
                                                           value="showtime=true&autoreplay=true&xml=playlist.xml"/>
                                                </object>
                                            </div>
                                            <div class="tags">
                                                <h4>标签</h4>
                                                <ul>
                                                    <li><a href="#">帅气</a></li>
                                                    <li><a href="#">唱功好</a></li>
                                                    <li><a href="#">善良</a></li>
                                                    <li><a href="#">友善</a></li>
                                                    <li><a href="#">实力派</a></li>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath5">
                                    <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath5)" width="1920" height="500" xlink:href="images/rze2.jpg"></image>
                        </svg>
                        <div class="card__content">
                            <i class="card__btn-close fa fa-times"></i>

                            <div class="card__caption">
                                <h2 class="card__title">容祖儿</h2>

                                <p class="card__subtitle">在音乐的道路上员不停息</p>
                            </div>
                            <div class="card__copy">
                                <div class="wrap">
                                    <div class="single-top">
                                        <div class="wrapper_single">
                                            <div class="wrapper_top">
                                                <div class="grid_1 alpha">
                                                    <div class="date">
                                                        <span>10</span>
                                                        Sep 2015
                                                    </div>
                                                </div>
                                                <div class="content span_2_of_single">
                                                    <h5 class="blog_title"><a href="bloginner.html">歌手简介</a></h5>

                                                    <div class="content">
                                                        <div class="span-1-of-1">
                                                            <a href="#"><img class="m_img" src="images/rze1.png" alt="" style="width:100%;" /></a>
                                                        </div>
                                                        <div class="span-1-of-2"
                                                             style="font-family:'微软雅黑', sans-serif;font-size:0.85em;color:#000;">
                                                            <ul>
                                                                <li>中 文 名:<span>容祖儿</span></li>
                                                                <li>外 文 名:<span>Joey Yung</span></li>
                                                                <li>国    籍:<span>中国</span></li>
                                                                <li>民    族:<span>汉族</span></li>
                                                                <li>星    座:<span>双子座</span></li>
                                                                <li>出 生 地:<span>中国香港</span></li>
                                                                <li>出生日期:<span>1980年6月16日</span></li>
                                                                <li>职    业:<span>歌手</span></li>
                                                                <li>毕业院校:<span>香港专业教育学院</span></li>
                                                                <li>代表作品:<span>挥着翅膀的女孩、我的骄傲、搜神记、天窗</span></li>
                                                                <li>主要成就:<span>十大劲歌金曲最受欢迎女歌星,十大中文金曲最优秀流行女歌手,叱咤乐坛流行榜女歌手金奖,全球华语歌曲排行榜最佳女歌手</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p1995年，15岁的容祖儿参加卡拉OK大赛获得冠军，签约正东唱片进入娱乐圈。</p>
                                                    </div>
                                                    <div class="para">
                                                        <p>
                                                          1996年发行首支单曲，电影《4个32A和一个香蕉少年》的主题曲《第一次我想醉》，后被唱片公司以“不漂亮”为由解约。容祖儿任职文员及协助母亲打理时装店赚取收入，后拜师罗文。
                                                        </p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                          2003年，单曲《我的骄傲》（国语《挥着翅膀的女孩》）获得十大劲歌金曲颁奖典礼金曲金奖、十大中文金曲“全球华人至尊金曲”、及叱咤乐坛流行榜颁奖典礼“叱吒十大”奖项，首度夺得十大劲歌金曲颁奖典礼“最受欢迎女歌星、”叱咤乐坛流行榜“叱吒乐坛女歌手金奖”和“叱吒乐坛我最喜爱的女歌手”，以及四台联颁音乐大奖“传媒大奖”。
                                                        </p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2015年1月9日，容祖儿在十大中文金曲颁奖礼上获最优秀流行女歌手奖，这是她连续11年获得该奖。1月18日，容祖儿第十度夺得劲歌金曲颁奖典礼最受欢迎女歌星，并获封“最受欢迎歌手十年大奖”。4月推出EP《Me,re-do》，7月参加东方卫视的综艺节目《报告！教练》。2016年2月17日，容祖儿作为第二位补位歌手参加湖南卫视歌唱真人秀《我是歌手第四季》；4月8日，在《我是歌手第四季》最后一期“歌王之战”帮帮唱环节搭档陈伟霆演唱歌曲《加大力度》，同时在个人演唱环节演唱歌曲《这么近那么远》。</p>
                                                    </div>
                                                    <h6 class="text"><a href="http://baike.baidu.com/view/59779.htm">了解更多</a></h6>
                                                    <div class="recentpost">
                                                        <h4>成名歌曲介绍</h4>
                                                        <ul class="sidebar_1">
                                                            <li><a href="http://music.baidu.com/song/244041370?pst=sug">独照</a></li>
                                                            <li><a href="http://music.baidu.com/song/243080432?pst=sug">挥着翅膀的女孩</a></li>
                                                            <li><a href="http://music.baidu.com/song/s/1307165c36d0856cef7c0">心淡</a></li>
                                                            <li><a href="http://music.baidu.com/song/243919847?pst=sug">爱情复兴</a></li>
                                                            <li><a href="http://music.baidu.com/song/260497302?pst=sug">习惯失恋</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="comments">
                                                        <h4>评论</h4>
                                                        <?php
                                                        $rows=getRows(５);
                                                        $num=getNumber(５);
                                                        //echo var_dump($rows);
                                                        for ($i=0;$i<$num;$i++) {
                                                          // var_dump($rows[$i]);
                                                         ?>
                                                        <div class="c_grid">
                                                            <div class="person_1">
                                                                <a href="#"><span> </span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="c_sub_grid">
                                                                    <p><a href="#"><?php echo $rows[$i]['name'];echo $rows[$i]['time']; ?></a></p>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <div class="para">
                                                                    <?php echo $rows[$i]['message']; ?>
                                                                </div>
                                                              </div>
                                                              <div class="clear"></div>
                                                          </div>
                                                          <?php } ?>

                                                    </div>
                                                    <div class="comments-area">
                                                        <h4>留言</h4>

                                                        <form  class="postform5">
                                                            <div class="text_area">
                                                                <textarea class="post_para" onFocus="if(this.value == '留言区(用户需注册登录后才能留言哦)') this.value='';"
                                                                      onBlur="if(this.value == '') this.value='留言区(用户需注册登录后才能留言哦)';">留言区(用户需注册登录后才能留言哦)</textarea>
                                                            </div>
                                                            <div>
                                                                <div class="button send_button">
                                                                    <input type="submit" class="post_btn" value="发送">
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="rsidebar span_1_of_3">
                                            <div class="search_box">
                                                <form>
                                                    <input type="text" value="搜索" onFocus="this.value = '';"
                                                           onBlur="if (this.value == '') {this.value = '搜索';}"><input
                                                        type="submit" value="">
                                                </form>
                                            </div>
                                            <div class="social_2">
                                                <h4>关注我们</h4>
                                                <ul>
                                                    <li class="weixin"><a href="#"><span> </span></a></li>
                                                    <li class="weibo"><a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3"><span> </span></a></li>
                                                </ul>
                                            </div>
                                            <div class="email_box">
                                                <form>
                                                    <div class="email">
                                                        <input type="text" value="请输入你的Email" onFocus="this.value = '';"
                                                               onBlur="if (this.value == '') {this.value = 'Enter Your e-mail';}">
                                                    </div>
                                                    <div class="button">
                                                        <span><input type="submit" value="提交"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="popularpost" style="margin-top:40px;">
                                                <h4>个性照片</h4>

                                                <div class="image">
                                                    <a href="#"><img class="m_img" src="images/rze2.png" alt="" style="width:95%;" /></a>
                                                </div>
                                                <p>生活照</p>

                                                <div class="link_1">
                                                    <p><a href="http://open.baidu.com/special/time/">Sep 26,2013 </a></p>
                                                    <a href="http://baike.baidu.com/view/59779.htm"
                                                       class="arrow_btn right">Read More</a>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="recentpost">
                                                <h4>歌曲试听</h4>
                                                <object type="application/x-shockwave-flash" data="dewplayer-playlist.swf"
                                                        width="240" height="200" id="dewplayer" name="dewplayer">
                                                    <param name="wmode" value="transparent"/>
                                                    <param name="movie" value="dewplayer-playlist.swf"/>
                                                    <param name="flashvars"
                                                           value="showtime=true&autoreplay=true&xml=playlist.xml"/>
                                                </object>
                                            </div>
                                            <div class="tags">
                                                <h4>标签</h4>
                                                <ul>
                                                    <li><a href="#">歌手</a></li>
                                                    <li><a href="#">娱乐人物</a></li>
                                                    <li><a href="#">人物 </a></li>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath6">
                                    <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                                </clipPath>
                            </defs>
                            <image clip-path="url(#clipPath6)" width="1920" height="500" xlink:href="images/lw2.png"></image>
                        </svg>
                        <div class="card__content">
                            <i class="card__btn-close fa fa-times"></i>

                            <div class="card__caption">
                                <h2 class="card__title">李玟</h2>

                                <p class="card__subtitle">绽放的音乐之花</p>
                            </div>
                            <div class="card__copy">
                                <div class="wrap">
                                    <div class="single-top">
                                        <div class="wrapper_single">
                                            <div class="wrapper_top">
                                                <div class="grid_1 alpha">
                                                    <div class="date">
                                                        <span>2</span>
                                                        Nov 2015
                                                    </div>
                                                </div>
                                                <div class="content span_2_of_single">
                                                    <h5 class="blog_title"><a href="bloginner.html">歌手简介</a></h5>

                                                    <div class="content">
                                                        <div class="span-1-of-1">
                                                            <a href="#"><img class="m_img" src="images/lw2.jpg" alt="" style="width:100%;" /></a>
                                                        </div>
                                                        <div class="span-1-of-2"
                                                             style="font-family:'微软雅黑', sans-serif;font-size:0.85em;color:#000;">
                                                            <ul>
                                                                <li>中 文 名:<span>李玟</span></li>
                                                                <li>外 文 名:<span>CoCo Lee</span></li>
                                                                <li>别    名:<span>李美林</span></li>
                                                                <li>国    籍:<span>美国</span></li>
                                                                <li>民    族:<span>汉族</span></li>
                                                                <li>星    座:<span>摩羯座</span></li>
                                                                <li>出 生 地:<span>香港</span></li>
                                                                <li>出生日期:<span>1975年1月17日</span></li>
                                                                <li>职    业:<span>歌手</span></li>
                                                                <li>毕业院校:<span>美国加州大学IRVINE分校生物系</span></li>
                                                                <li>代表作品:<span>关在家、魔法爱情、快递甜心、好好说再见</span></li>
                                                                <li>
                                                                    主要成就:<span>全球华语榜中榜亚洲最杰出艺人，CCTV-MTV音乐盛典最佳国际女歌手，香港十大中文金曲最佳国语女歌手，香港电影金像奖最佳原创电影歌曲
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                            1975年1月17日出生于中国-香港，9岁时移民美国旧金山，华人女歌手，影视演员 。1993年，李玟参加香港TVB新人歌唱大赛，获得比赛亚军后从香港出道；从1994年6月推出首张个人专辑「爱就要趁现在」后又在台湾和香港推出了四张个人专辑，其销量共突破80万张，创下新人歌手中罕见的好成绩。 </p>
                                                    </div>
                                                    <div class="para">
                                                        <p>
                                                            2011年5月14日，李玟参加台湾电视选秀节目《华人星光大道》美国洛杉矶选秀会，并获邀到台湾参赛；同年6月，赴台湾参加电视选秀节目《华人星光大道》的比赛，并最终获得总决赛冠军
                                                            ；同年，签约金星娱乐，成为陶喆的第一位入门女弟子。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                            1996年，李玟加盟台湾Sony Music，发行《李玟CoCo同名国语专辑》，其主打歌《往日情》获1996年金曲龙虎榜年终销售第2名，同年发行《CoCos Party》在台湾卖出53万张；1998年发行经典概念专辑《DiDaDi暗示》全亚洲突破180万张，同年6月发行超卖天碟《SunnyDay好心情》，随后她作为亚洲中文区唯一代表赴巴黎为世界杯足球赛开幕式献唱；1999年，李玟转签美国Sony Music而晋升国际乐坛，并推出首张国际英文专辑《Just No Other Way》，全球破200万张 。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2001年，因演唱《卧虎藏龙》主题曲，让她成为首位登上奥斯卡金像奖颁奖典礼献唱的华语歌手，同年发行国语专辑《Promise CoCo 》；2004年，李玟与尊龙主演电影《自娱自乐》，该片在美国好莱坞第五届贝弗利山电影节上获最佳外语片奖。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2005年，发行英文专辑《Exposed》，2006年9月22日，李玟发行国语专辑《要定你》。2011年，李玟与利丰集团执行总裁Bruce Rockowitz在香港完婚。2013年，李玟签约环球唱片发行专辑《盛开》。2016年1月15日，李玟作为首发阵容参加湖南卫视歌唱真人秀《我是歌手第四季》</p>
                                                    </div>
                                                    <h6 class="text"><a href="http://baike.baidu.com/view/16899.htm">了解更多</a></h6>
                                                    <div class="recentpost">
                                                        <h4>成名歌曲介绍</h4>
                                                        <ul class="sidebar_1">
                                                            <li><a href="http://y.qq.com/#type=song&mid=003oERKV2JCNbh&tpl=yqq_song_detail&play=1">想你的365天</a></li>
                                                            <li><a href="http://y.qq.com/#type=song&mid=001sqGzy1ABMKJ&tpl=yqq_song_detail&play=1">月光爱人</a></li>
                                                            <li>
                                                                <a href="http://y.qq.com/#type=song&mid=0036s72F3ZhWEO&tpl=yqq_song_detail&play=1">美丽笨女人</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="comments">
                                                        <h4>评论</h4>
                                                        <?php
                                                        $rows=getRows(６);
                                                        $num=getNumber(６);
                                                        //echo var_dump($rows);
                                                        for ($i=0;$i<$num;$i++) {
                                                          // var_dump($rows[$i]);
                                                         ?>
                                                        <div class="c_grid">
                                                            <div class="person_1">
                                                                <a href="#"><span> </span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="c_sub_grid">
                                                                    <p><a href="#"><?php echo $rows[$i]['name'];echo $rows[$i]['time']; ?></a></p>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <div class="para">
                                                                    <?php echo $rows[$i]['message']; ?>
                                                                </div>
                                                              </div>
                                                              <div class="clear"></div>
                                                          </div>
                                                          <?php } ?>

                                                    </div>
                                                    <div class="comments-area">
                                                        <h4>留言</h4>

                                                        <form  class="postform6">
                                                            <div class="text_area">
                                                                <textarea class="post_para" onFocus="if(this.value == '留言区(用户需注册登录后才能留言哦)') this.value='';"
                                                                      onBlur="if(this.value == '') this.value='留言区(用户需注册登录后才能留言哦)';">留言区(用户需注册登录后才能留言哦)</textarea>
                                                            </div>
                                                            <div>
                                                                <div class="button send_button">
                                                                    <input type="submit" class="post_btn" value="发送">
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="rsidebar span_1_of_3">
                                            <div class="search_box">
                                                <form>
                                                    <input type="text" value="搜索" onFocus="this.value = '';"
                                                           onBlur="if (this.value == '') {this.value = '搜索';}"><input
                                                        type="submit" value="">
                                                </form>
                                            </div>
                                            <div class="social_2">
                                                <h4>关注我们</h4>
                                                <ul>
                                                    <li class="weixin"><a href="#"><span> </span></a></li>
                                                    <li class="weibo"><a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3"><span> </span></a></li>
                                                </ul>
                                            </div>
                                            <div class="email_box">
                                                <form>
                                                    <div class="email">
                                                        <input type="text" value="请输入你的Email" onFocus="this.value = '';"
                                                               onBlur="if (this.value == '') {this.value = 'Enter Your e-mail';}">
                                                    </div>
                                                    <div class="button">
                                                        <span><input type="submit" value="提交"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="popularpost" style="margin-top:40px;">
                                                <h4>个性照片</h4>

                                                <div class="image">
                                                    <a href="#"><img class="m_img" src="images/lw1.png" alt="" style="width:95%;" /></a>
                                                </div>
                                                <p>宣传照</p>

                                                <div class="link_1">
                                                    <p><a href="http://open.baidu.com/special/time/">Sep 26,2013 </a></p>
                                                    <a href="http://baike.baidu.com/view/16899.htm"
                                                       class="arrow_btn right">Read More</a>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="recentpost">
                                                <h4>歌曲试听</h4>
                                                <object type="application/x-shockwave-flash" data="dewplayer-playlist.swf"
                                                        width="240" height="200" id="dewplayer" name="dewplayer">
                                                    <param name="wmode" value="transparent"/>
                                                    <param name="movie" value="dewplayer-playlist.swf"/>
                                                    <param name="flashvars"
                                                           value="showtime=true&autoreplay=true&xml=playlist.xml"/>
                                                </object>
                                            </div>
                                            <div class="tags">
                                                <h4>标签</h4>
                                                <ul>
                                                    <li><a href="#">歌王</a></li>
                                                    <li><a href="#">性感</a></li>
                                                    <li><a href="#">华人女歌手</a></li>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card__container card__container--closed">
                        <svg class="card__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             viewBox="0 0 1920 500" preserveAspectRatio="xMidYMid slice">
                            <defs>
                                <clipPath id="clipPath7">
                                    <polygon class="clip" points="0,500 0,0 1920,0 1920,500"></polygon>
                                </clipPath>
                            </defs>
                           <image clip-path="url(#clipPath7)" width="1920" height="500" xlink:href="images/ll2.jpg"></image>
                        </svg>
                        <div class="card__content">
                            <i class="card__btn-close fa fa-times"></i>

                            <div class="card__caption">
                                <h2 class="card__title">老狼</h2>

                                <p class="card__subtitle">永远的校园民谣歌手</p>
                            </div>
                            <div class="card__copy">
                                <div class="wrap">
                                    <div class="single-top">
                                        <div class="wrapper_single">
                                            <div class="wrapper_top">
                                                <div class="grid_1 alpha">
                                                    <div class="date">
                                                        <span>2</span>
                                                        Oct 2016
                                                    </div>
                                                </div>
                                                <div class="content span_2_of_single">
                                                    <h5 class="blog_title"><a href="bloginner.html">歌手简介</a></h5>

                                                    <div class="content">
                                                        <div class="span-1-of-1">
                                                            <a href="#"><img class="m_img" src="images/ll2.png" alt="" style="width:100%;" /></a>
                                                        </div>
                                                        <div class="span-1-of-2"
                                                             style="font-family:'微软雅黑', sans-serif;font-size:0.85em;color:#000;">
                                                            <ul>
                                                                <li>中 文 名:<span>老狼</span></li>
                                                                <li>外 文 名:<span>laolang</span></li>
                                                                <li>别    名:<span>王阳</span></li>
                                                                <li>国    籍:<span>中国</span></li>
                                                                <li>民    族:<span>汉族</span></li>
                                                                <li>血    型:<span>A型</span></li>
                                                                <li>出 生 地:<span>北京</span></li>
                                                                <li>出生日期:<span>1968年12月3日</span></li>
                                                                <li>职    业:<span>歌手</span></li>
                                                                <li>毕业院校:<span>中央音乐学院</span></li>
                                                                <li>代表作品:<span>《同桌的你》，《恋恋风尘》，《睡在我上铺的兄弟》</span></li>
                                                                <li>
                                                                    主要成就:<span>第八届音乐风云榜最佳男歌手等
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="clear"></div>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                            1989年至1991年，加入中国第一支大学生摇滚乐队“青铜器”担任主唱，在北京各种地下摇滚音乐会与崔健、唐朝乐队、黑豹乐队等同台演出。
                                                    1994年，参与大地唱片公司唱片《校园民谣1》的录制，演唱《同桌的你》、《睡在我上铺的兄弟》及《流浪歌手的情人》三首主打歌，同年参加中央电视台“94大学生毕业晚会”。</p>
                                                    </div>
                                                    <div class="para">
                                                        <p>
                                                            1995年，参加中央电视台1995年春节联欢晚会，演唱《同桌的你》，获“观众评选最喜爱节目金奖”。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>
                                                            1994至1997年，参加由全国多家电台、音乐台及音乐生活报主办的“流行音乐十年回顾”大型演出，《校园民谣1》发行近六十万张，签约中国大陆音乐制作人黄小茂创建的风行音乐工作室。首张个人专辑《恋恋风尘》由上海声像出版社发行，专辑发行20天便创下了23万的销售记录，共发行40万张，成为当年中国国内歌手发行量最高的专辑； 《同桌的你》被收入香港红星公司制作的“红星一号”专辑中，由宝丽金香港正东公司代理香港及东南亚发行，《同桌的你》演唱会版收录于中国唱片总公司出版的“十年经 典歌曲”中；专辑《恋恋风尘》在香港重新缩混，并由宝丽金正东公司在香港及东南亚发行。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>1996年，与北京麦田音乐制作公司合作出版《青春无悔》专辑，其中演唱的《模范情书》、《月亮》《青春无悔》和《久违的事》广为流传。1997年，老狼和香港歌手黄耀明合作，为Windows最新一代产品演唱中文版主题曲，多次收录于黄耀明的精选唱片中。</p>
                                                    </div>
                                                    <div class="para para_2">
                                                        <p>2000年2月，与世界五大唱片公司之一的“华纳唱片”签订唱片约，并与“麦田音乐”签订演艺合约。3月，出现在首都体育馆“搜狐之夜”大型演唱会的现场。5月，在北京首都体育馆参加“三星之夜—华纳群星为国足壮行”大型演唱会。8月，全程参加“搜狐2000•华纳群星神州行大型高校巡回演唱会”，并推出郁冬词曲制作的两首全新单曲《百分之百的女孩》、《虎口脱险》。9月，与西藏登山协会及“雪山清扫队”一齐，参予“还珠峰清洁”环保大行动，负重登上6000米高峰，成为内地“海拔最高”的艺人。</p>
                                                    </div>
                                                    <h6 class="text"><a href="http://baike.baidu.com/view/6056.htm">了解更多</a></h6>
                                                    <div class="recentpost">
                                                        <h4>成名歌曲介绍</h4>
                                                        <ul class="sidebar_1">
                                                            <li><a href="http://music.baidu.com/song/245106502?pst=sug">想把我唱给你听</a></li>
                                                            <li><a href="http://music.baidu.com/song/s/1607121831908564d87e3"> 睡在我上铺的兄弟</a></li>
                                                            <li>
                                                                <a href="http://music.baidu.com/song/963292?pst=sug">恋恋风尘</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="comments">
                                                        <h4>评论</h4>
                                                        <?php
                                                        $rows=getRows(７);
                                                        $num=getNumber(７);
                                                        //echo var_dump($rows);
                                                        for ($i=0;$i<$num;$i++) {
                                                          // var_dump($rows[$i]);
                                                         ?>
                                                        <div class="c_grid">
                                                            <div class="person_1">
                                                                <a href="#"><span> </span></a>
                                                            </div>
                                                            <div class="desc">
                                                                <div class="c_sub_grid">
                                                                    <p><a href="#"><?php echo $rows[$i]['name'];echo $rows[$i]['time']; ?></a></p>
                                                                    <div class="clear"></div>
                                                                </div>
                                                                <div class="para">
                                                                    <?php echo $rows[$i]['message']; ?>
                                                                </div>
                                                              </div>
                                                              <div class="clear"></div>
                                                          </div>
                                                          <?php } ?>
                                                    </div>
                                                    <div class="comments-area">
                                                        <h4>留言</h4>

                                                        <form  class="postform7">
                                                            <div class="text_area">
                                                                <textarea class="post_para" onFocus="if(this.value == '留言区(用户需注册登录后才能留言哦)') this.value='';"
                                                                      onBlur="if(this.value == '') this.value='留言区(用户需注册登录后才能留言哦)';">留言区(用户需注册登录后才能留言哦)</textarea>
                                                            </div>
                                                            <div>
                                                                <div class="button send_button">
                                                                    <input type="submit" class="post_btn" value="发送">
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                        <div class="rsidebar span_1_of_3">
                                            <div class="search_box">
                                                <form>
                                                    <input type="text" value="搜索" onFocus="this.value = '';"
                                                           onBlur="if (this.value == '') {this.value = '搜索';}"><input
                                                        type="submit" value="">
                                                </form>
                                            </div>
                                            <div class="social_2">
                                                <h4>关注我们</h4>
                                                <ul>
                                                    <li class="weixin"><a href="#"><span> </span></a></li>
                                                    <li class="weibo"><a href="http://weibo.com/u/3321996260?nick=2016%E6%88%91%E6%98%AF%E6%AD%8C%E6%89%8B%E7%AC%AC%E5%9B%9B%E5%AD%A3"><span> </span></a></li>
                                                </ul>
                                            </div>
                                            <div class="email_box">
                                                <form>
                                                    <div class="email">
                                                        <input type="text" value="请输入你的Email" onFocus="this.value = '';"
                                                               onBlur="if (this.value == '') {this.value = 'Enter Your e-mail';}">
                                                    </div>
                                                    <div class="button">
                                                        <span><input type="submit" value="提交"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="popularpost" style="margin-top:40px;">
                                                <h4>个性照片</h4>

                                                <div class="image">
                                                    <a href="#"><img class="m_img" src="images/ll1.png" alt="" style="width:95%;" /></a>
                                                </div>
                                                <p>宣传照</p>

                                                <div class="link_1">
                                                    <p><a href="http://open.baidu.com/special/time/">Sep 26,2013 </a></p>
                                                    <a href="http://baike.baidu.com/view/6056.htm"
                                                       class="arrow_btn right">Read More</a>

                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                            <div class="recentpost">
                                                <h4>歌曲试听</h4>
                                                <object type="application/x-shockwave-flash" data="dewplayer-playlist.swf"
                                                        width="240" height="200" id="dewplayer" name="dewplayer">
                                                    <param name="wmode" value="transparent"/>
                                                    <param name="movie" value="dewplayer-playlist.swf"/>
                                                    <param name="flashvars"
                                                           value="showtime=true&autoreplay=true&xml=playlist.xml"/>
                                                </object>
                                            </div>
                                            <div class="tags">
                                                <h4>标签</h4>
                                                <ul>
                                                    <li><a href="#">歌王</a></li>
                                                    <li><a href="#">性感</a></li>
                                                    <li><a href="#">华人女歌手</a></li>
                                                    <div class="clear"></div>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
            <!-- /cards -->
        </div>
    </div>

    <!-- /content -->
    </div>
    <!-- /container -->
    </div>
    <div class="contact" id="contact" style="margin-top:40px">
        <div class="wrap">
            <h2>联系我们</h2>

            <div class="contact-form">
                <div class="para-contact">
                    <h4>鸣谢：</h4>

                    <p>包括<a href="http://www.suning.com/" target="_blank">金典有机奶</a>等赞助商赞助《我是歌手》。</p>

                    <div class="social_2 social_3">
                        <ul>
                            <li class="weixin"><a href="#"><img src="images/icon_weixin.png"></a></li>
                            <li class="weibo"><a href="#"><img src="images/icon_weibo.png"></a></li>
                        </ul>
                    </div>
                    <div class="get-intouch-left-address">
                        <ul>
                            <li class="f_l" style="width:40%;margin-top:20px;"><a href="https://www.upyun.com/index.html" target="_blank"><img
                                    src="images/logo2.jpg" style="width:100%;display:block;" /></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="form">
                    <h4 style="color:#fff;margin-left:5px">意见反馈</h4>

                    <form method="post" action="#">
                        <input type="text" class="textbox" value="姓名" onFocus="this.value = '';"
                               onBlur="if (this.value == '') {this.value = '姓名';}">
                        <input type="text" class="textbox" value="Email" onFocus="this.value = '';"
                               onBlur="if (this.value == '') {this.value = 'Email';}">

                        <div class="clear"></div>
                        <div>
                            <textarea value="Message:" onFocus="this.value = '';"
                                      onBlur="if (this.value == '') {this.value = '反馈信息';}" style="font-family:'微软雅黑'">反馈信息</textarea>
                        </div>
                        <div class="button send_button">
                            <input type="submit" value="Send" onclick="alert("您的信息已反馈，请等待几天后的回复，谢谢！")">
                        </div>
                        <div class="clear"></div>
                    </form>
                </div>
                <a class="mov-top" href="#home1"> <span> </span></a>

                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript" src="js/vendors/trianglify.min.js"></script>
    <script type="text/javascript" src="js/vendors/TweenMax.min.js"></script>
    <script type="text/javascript" src="js/vendors/ScrollToPlugin.min.js"></script>
    <script type="text/javascript" src="js/vendors/cash.min.js"></script>
    <script type="text/javascript" src="js/Card-polygon.js"></script>
    <script type="text/javascript" src="js/demo-3.js"></script>
</body>

</html>
