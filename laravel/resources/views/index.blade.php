<html>
<head>
    <meta charset="utf-8" />
    <meta content="webkit" name="renderer" />
    <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="upgrade-insecure-requests" http-equiv="Content-Security-Policy" />
    <link rel="stylesheet" href="{{ URL('css/index.css') }}">
    <link rel="stylesheet" href="{{ URL('css/application.css') }}">
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- [if lt IE 9]>
    <script type = 'text/javascript' src = "{{ URL::asset('js/IE9.js') }}"></script>
    <![endif]-->
    <title>后台首页</title>
    <!--新引入样式-->
    <link rel="stylesheet" href="{{ URL('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ URL('css/common.css') }}">
</head>
<body data-current_user="true" data-exchange_rate="6.87" data-user_status="2" id="sells_homes_index">
<nav class="left_sidebar">
    <div class="left_bar_close"></div>
    <div class="logo-container">
        <a href="/"><img src="https://cdn-resources-aliyun.kjds.com/assets/logo_white-eb3350a5fcb70a24d95ef4fc7392f7d8.png" alt="Logo white" /></a>
    </div>
    <div class="option-box hover-box">
        <a href="{{ url('userIndex', '') }}">
            <img src="https://cdn-resources-aliyun.kjds.com/assets/user_default_avatar-4e570b12afe281b3e0cee7b2079e8abc.png" alt="User default avatar" />
            <div class="name">
                个人中心
            </div>
        </a>
        <div class="hide-box">
            <div class="each-item">
                <a href="{{ url('userIndex') }}">基本资料</a>
            </div>
            <div class="each-item">
                <a href="{{ url('userSafety', '') }}">账号安全</a>
            </div>
            <div class="each-item">
                <a href="{{ url('subscribe', '') }}">我的订阅</a>
            </div>
            <div class="each-item">
                <a href="{{ url('setPage', '') }}">页数设置</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="{{ url('members', '') }}"><img src="https://cdn-resources-aliyun.kjds.com/assets/member_icon-954804cff28697bdf9dae6fc05f81426.png" alt="Member icon" />
            <div class="name">
                我的会员
            </div></a>
    </div>
    <div class="option-box hover-box">
        <a href="{{ url('auth', '') }}"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon10-5c2866878238693b4f1598fc2a3af3e8.png" alt="Icon10" />
            <div class="name">
                账号授权
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="{{ url('b2c', '') }}">B2C账号授权</a>
            </div>
            <div class="each-item">
                <a href="{{ url('auth', '') }}">物流账号授权</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="/sells/products"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon2-1eff06d5ed25119d8303581f95aa5aa8.png" alt="Icon2" />
            <div class="name">
                一键刊登
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="./publish/products.html">我的刊登商品</a>
            </div>
            <div class="each-item">
                <a href="./publish/freight_templates.html">eBay物流模板</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="./download/download.html"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon2-1eff06d5ed25119d8303581f95aa5aa8.png" alt="Icon2" />
            <div class="name">
                数据包下载
            </div></a>
    </div>
    <div class="option-box hover-box">
        <a href="{{ url('inventories', '') }}"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon2-1eff06d5ed25119d8303581f95aa5aa8.png" alt="Icon2" />
            <div class="name">
                库存预警
            </div></a>
    </div>
    <div class="option-box hover-box">
        <a href="{{ url('orders', '') }}"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon3-7ef36eb63ff68c53ba11e47b70cba6f1.png" alt="Icon3" />
            <div class="name">
                订单管理
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="{{ url('orders', '') }}">订单查询</a>
            </div>
            <div class="each-item">
                <a href="{{ url('abnormal', '') }}">异常订单</a>
            </div>
            <div class="each-item">
                <a href="{{ url('timeout', '') }}">超时订单</a>
            </div>
            <div class="each-item">
                <a href="{{ url('bounces', '') }}">退件查询</a>
            </div>
            <div class="each-item">
                <a class="import_order" href="{{ url('import', '') }}">批量下单</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="javascript:void(0);"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon8-f0645d5c9039c05d38d56c6eb821351b.png" alt="Icon8" />
            <div class="name">
                财务管理
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="./accounts/personal_account.html">个人账户</a>
            </div>
            <div class="each-item">
                <a href="./accounts/payment_records.html">付款记录</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon9-0a440e9d44189725c256f2bf35400a42.png" alt="Icon9" />
        <div class="name">
            经营分析
        </div>
        <div class="hide-box">
            <div class="each-item" style="min-height: inherit; line-height: 55px;">
                <a href="./sales_analysis/sales_analysis.html" style="min-height: inherit; line-height: 55px;">销售分析</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="javascript:void(0);"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon6-a7b717adf63425774ef52f413e44bcb7.png" alt="Icon6" />
            <div class="name">
                客户服务
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="./customer_services/help.html">帮助</a>
            </div>
            <div class="each-item">
                <a href="./customer_services/suggest.html">建议</a>
            </div>
            <div class="each-item">
                <a href="./customer_services/complaint.html">投诉</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="javascript:void(0);"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon2-1eff06d5ed25119d8303581f95aa5aa8.png" alt="Icon2" />
            <div class="name">
                文件中心
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="./files/export_file.html">文件导出</a>
            </div>
            <div class="each-item">
                <a href="./files/import_file.html">文件导入</a>
            </div>
        </div>
    </div>
</nav>
<div class="common_header">
    <div class="main-container">
        <a class="header_logo" href="/"></a>
        <ul class="show-platform">
            <li class="active"><a href="/">首页</a></li>
            <li id="1"><a href="/sells/homes/search?b2c_platform_id=1">eBay</a></li>
            <li id="26"><a href="/sells/homes/search?b2c_platform_id=26">Amazon</a></li>
            <li id="27"><a href="/sells/homes/search?b2c_platform_id=27">Wish</a></li>
            <li id="2"><a href="/sells/homes/search?b2c_platform_id=2">AliExpress</a></li>
            <div class="clear_float"></div>
        </ul>
        <div class="header_platform pull-right">
            <div class="dropdown"></div>
            <a href="https://rumen.kjds.com" target="_blank"><span class="newer">入门指引</span></a>
            <a class="bulletins" href="/sells/bulletins"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/bulletins-98b611d32f6139557f140f239f4525f9.png" alt="Bulletins" /><span>公告</span></a>
            <a class="shopping_cart" href="/sells/orders/shopping_cart"><img alt="购物车" src="https://cdn-resources-aliyun.kjds.com/assets/sells/shopping_cart-dbb6910f337b1388ec7e92f50011f8bb.png" /><span>购物车</span>
                <div class="products-sum-number">
                    3
                </div></a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img alt="用户头像" class="user-image" src="https://cdn-resources-aliyun.kjds.com/assets/user_default_avatar-4e570b12afe281b3e0cee7b2079e8abc.png" /><span class="hidden-xs" title="王祚家">王祚家</span></a>
                        <ul class="dropdown-menu">
                            <li class="user-header"><img alt="用户头像" class="img-circle" src="https://cdn-resources-aliyun.kjds.com/assets/user_default_avatar-4e570b12afe281b3e0cee7b2079e8abc.png" /><p> 王祚家<small>2019年01月18日 17:25 加入</small></p></li>
                            <li class="sell-user-footer">
                                <div class="col-xs-4 sell">
                                    <a class="btn btn-default btn-flat" href="/sells/users"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/icon_mini_personal-7a48fa6b2e927d3258e81ad1392ed368.png" alt="Icon mini personal" /><span>个人中心</span></a>
                                </div>
                                <div class="col-xs-4 sell">
                                    <img class="member" src="https://cdn-resources-aliyun.kjds.com/assets/sells/public_member-cb9c87ce661640304bfe54c9bc8fe96d.png" alt="Public member" />
                                    <span class="member-level-value" data-level="public_member">免费会员</span>
                                </div>
                                <div class="col-xs-4 sell">
                                    <a class="btn btn-primary btn-flat" data-method="get" href="/users/sign_out"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/icon_quit_button-6876dd1effa9db545f0d71c753d27bd9.png" alt="Icon quit button" /><span>退出</span></a>
                                </div></li>
                        </ul></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="right_sidebar" style="bottom: 25%;">
    <div class="service" id="CampBizQQWPA">
        <a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDE4NzA1NV80NzY0OTNfODAwMTg3MDU1XzJf" target="_blank">在线客服</a>
    </div>
    <div class="back_top">
        <a>返回顶部</a>
    </div>
</div>
<div class="main-container">
    <div class="search_box">
        <div class="input_group">
            <input name="keyword" placeholder="请输入商品英文名称或货号" type="text" value="" />
            <div b2c_platform_id="27" class="search_btn">
                <span class="glyphicon glyphicon-search"></span>
            </div>
        </div>
    </div>
    <div class="category_box">
        <div class="banner_warehouse">
            <a class="banner_color" href="/sells/homes/search?b2c_platform_id=27&amp;product_tag_codes=new">新品 &nbsp;&nbsp;</a>
            <a class="banner_color" href="/sells/homes/search?b2c_platform_id=27&amp;product_tag_codes=preferred">热卖 &nbsp;&nbsp;</a>
            <a class="banner_color" href="/sells/homes/search?b2c_platform_id=27&amp;product_tag_codes=sole_agency">独家销售 &nbsp;&nbsp;</a>
            <a class="banner_color" href="/sells/homes/search?b2c_platform_id=27&amp;country_id=16516">美国仓 &nbsp;&nbsp;</a>
            <a class="banner_color" href="/sells/homes/search?b2c_platform_id=27&amp;country_id=16506">澳大利亚仓 &nbsp;&nbsp;</a>
            <a class="banner_color" href="/sells/homes/search?b2c_platform_id=27&amp;country_id=16716">阿联酋仓 &nbsp;&nbsp;</a>
            <a class="banner_color" href="/sells/homes/search?b2c_platform_id=27&amp;country_id=16755">中国香港仓 &nbsp;&nbsp;</a>
        </div>
        <ul class="category">
            <a class="all-category" href="/sells/homes/search?b2c_platform_id=27">所有分类<span class="glyphicon glyphicon-chevron-right"></span></a>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36592/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0008_%E5%AE%B6%E5%B1%85%E7%94%A8%E5%93%81-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0008 %e5%ae%b6%e5%b1%85%e7%94%a8%e5%93%81 icon" />
                </div><a data-id="36592" href="/sells/homes/search?product_category_id1=36592&amp;b2c_platform_id=27">家居用品</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="35443" href="/sells/homes/search?product_category_id2=35443&amp;b2c_platform_id=27">节庆派对用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35450" href="/sells/homes/search?product_category_id2=35450&amp;b2c_platform_id=27">厨房吧台用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35447" href="/sells/homes/search?product_category_id2=35447&amp;b2c_platform_id=27">家纺成品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35446" href="/sells/homes/search?product_category_id2=35446&amp;b2c_platform_id=27">家用储存收藏用具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35445" href="/sells/homes/search?product_category_id2=35445&amp;b2c_platform_id=27">家庭装饰品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35451" href="/sells/homes/search?product_category_id2=35451&amp;b2c_platform_id=27">宠物用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35449" href="/sells/homes/search?product_category_id2=35449&amp;b2c_platform_id=27">家居日用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35441" href="/sells/homes/search?product_category_id2=35441&amp;b2c_platform_id=27">浴室用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35444" href="/sells/homes/search?product_category_id2=35444&amp;b2c_platform_id=27">园艺用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35448" href="/sells/homes/search?product_category_id2=35448&amp;b2c_platform_id=27">家庭清洁用具及附件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35440" href="/sells/homes/search?product_category_id2=35440&amp;b2c_platform_id=27">手工艺品&amp;缝纫用品（半成品）</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36587/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0017_%E7%94%B5%E5%AD%90%E6%B6%88%E8%B4%B9-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0017 %e7%94%b5%e5%ad%90%e6%b6%88%e8%b4%b9 icon" />
                </div><a data-id="36587" href="/sells/homes/search?product_category_id1=36587&amp;b2c_platform_id=27">消费电子</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="34406" href="/sells/homes/search?product_category_id2=34406&amp;b2c_platform_id=27">便携音视频设备</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34400" href="/sells/homes/search?product_category_id2=34400&amp;b2c_platform_id=27">零配件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34409" href="/sells/homes/search?product_category_id2=34409&amp;b2c_platform_id=27">智能电子</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34405" href="/sells/homes/search?product_category_id2=34405&amp;b2c_platform_id=27">家用音视频设备</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34404" href="/sells/homes/search?product_category_id2=34404&amp;b2c_platform_id=27">游戏及配附件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34408" href="/sells/homes/search?product_category_id2=34408&amp;b2c_platform_id=27">电池、电源</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34401" href="/sells/homes/search?product_category_id2=34401&amp;b2c_platform_id=27">摄影摄像</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34403" href="/sells/homes/search?product_category_id2=34403&amp;b2c_platform_id=27">电子烟</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36600/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0013_%E6%89%8B%E6%9C%BA%E9%80%9A%E8%AE%AF-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0013 %e6%89%8b%e6%9c%ba%e9%80%9a%e8%ae%af icon" />
                </div><a data-id="36600" href="/sells/homes/search?product_category_id1=36600&amp;b2c_platform_id=27">电话和通讯</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="35895" href="/sells/homes/search?product_category_id2=35895&amp;b2c_platform_id=27">手机配件和零件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35900" href="/sells/homes/search?product_category_id2=35900&amp;b2c_platform_id=27">电话和附件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35902" href="/sells/homes/search?product_category_id2=35902&amp;b2c_platform_id=27">步谈机</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35896" href="/sells/homes/search?product_category_id2=35896&amp;b2c_platform_id=27">手机</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35898" href="/sells/homes/search?product_category_id2=35898&amp;b2c_platform_id=27">寻呼机</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36582/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0021_%E6%9C%8D%E8%A3%85%E6%9C%8D%E9%A5%B0%E9%85%8D%E4%BB%B6-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0021 %e6%9c%8d%e8%a3%85%e6%9c%8d%e9%a5%b0%e9%85%8d%e4%bb%b6 icon" />
                </div><a data-id="36582" href="/sells/homes/search?product_category_id1=36582&amp;b2c_platform_id=27">服装/服饰配件</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="38256" href="/sells/homes/search?product_category_id2=38256&amp;b2c_platform_id=27">女装</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38252" href="/sells/homes/search?product_category_id2=38252&amp;b2c_platform_id=27">服饰配饰（男/女/儿童配件，婴儿配饰发到婴儿服装）</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38254" href="/sells/homes/search?product_category_id2=38254&amp;b2c_platform_id=27">男装</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38253" href="/sells/homes/search?product_category_id2=38253&amp;b2c_platform_id=27">扮演服及配件（不包含情趣制服）</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36595/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0026_%E7%8F%A0%E5%AE%9D%E6%9C%8D%E9%A5%B0%E5%8F%8A%E9%85%8D%E4%BB%B6-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0026 %e7%8f%a0%e5%ae%9d%e6%9c%8d%e9%a5%b0%e5%8f%8a%e9%85%8d%e4%bb%b6 icon" />
                </div><a data-id="36595" href="/sells/homes/search?product_category_id1=36595&amp;b2c_platform_id=27">珠宝饰品及配件</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="34654" href="/sells/homes/search?product_category_id2=34654&amp;b2c_platform_id=27">流行饰品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34656" href="/sells/homes/search?product_category_id2=34656&amp;b2c_platform_id=27">首饰配件和部件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34658" href="/sells/homes/search?product_category_id2=34658&amp;b2c_platform_id=27">首饰工具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="34657" href="/sells/homes/search?product_category_id2=34657&amp;b2c_platform_id=27">首饰包装和展示用具</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36604/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0006_%E8%BF%90%E5%8A%A8%E5%8F%8A%E5%A8%B1%E4%B9%90.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0006 %e8%bf%90%e5%8a%a8%e5%8f%8a%e5%a8%b1%e4%b9%90" />
                </div><a data-id="36604" href="/sells/homes/search?product_category_id1=36604&amp;b2c_platform_id=27">运动及娱乐</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="38432" href="/sells/homes/search?product_category_id2=38432&amp;b2c_platform_id=27">骑行</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38453" href="/sells/homes/search?product_category_id2=38453&amp;b2c_platform_id=27">水上运动</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38435" href="/sells/homes/search?product_category_id2=38435&amp;b2c_platform_id=27">健身及塑形</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38434" href="/sells/homes/search?product_category_id2=38434&amp;b2c_platform_id=27">钓鱼用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38430" href="/sells/homes/search?product_category_id2=38430&amp;b2c_platform_id=27">野营及徒步旅行</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38449" href="/sells/homes/search?product_category_id2=38449&amp;b2c_platform_id=27">足球用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38444" href="/sells/homes/search?product_category_id2=38444&amp;b2c_platform_id=27">轮滑与滑板运动</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38443" href="/sells/homes/search?product_category_id2=38443&amp;b2c_platform_id=27">球拍运动</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38433" href="/sells/homes/search?product_category_id2=38433&amp;b2c_platform_id=27">娱乐</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38429" href="/sells/homes/search?product_category_id2=38429&amp;b2c_platform_id=27">篮球用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38436" href="/sells/homes/search?product_category_id2=38436&amp;b2c_platform_id=27">高尔夫用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38441" href="/sells/homes/search?product_category_id2=38441&amp;b2c_platform_id=27">乐器</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38428" href="/sells/homes/search?product_category_id2=38428&amp;b2c_platform_id=27">棒球运动</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38451" href="/sells/homes/search?product_category_id2=38451&amp;b2c_platform_id=27">运动服及配件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38439" href="/sells/homes/search?product_category_id2=38439&amp;b2c_platform_id=27">狩猎用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38450" href="/sells/homes/search?product_category_id2=38450&amp;b2c_platform_id=27">运动包</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36598/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0023_%E5%AD%95%E5%A9%B4%E7%AB%A5-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0023 %e5%ad%95%e5%a9%b4%e7%ab%a5 icon" />
                </div><a data-id="36598" href="/sells/homes/search?product_category_id1=36598&amp;b2c_platform_id=27">孕婴童</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="35038" href="/sells/homes/search?product_category_id2=35038&amp;b2c_platform_id=27">儿童服装（2岁以上）</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35033" href="/sells/homes/search?product_category_id2=35033&amp;b2c_platform_id=27">婴儿活动用品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35034" href="/sells/homes/search?product_category_id2=35034&amp;b2c_platform_id=27">婴儿护理</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35042" href="/sells/homes/search?product_category_id2=35042&amp;b2c_platform_id=27">婴儿安全防护</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35037" href="/sells/homes/search?product_category_id2=35037&amp;b2c_platform_id=27">婴儿寝具床品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="42978" href="/sells/homes/search?product_category_id2=42978&amp;b2c_platform_id=27">尿布和如厕训练</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36584/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0019_%E7%BE%8E%E5%AE%B9%E5%81%A5%E5%BA%B7-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0019 %e7%be%8e%e5%ae%b9%e5%81%a5%e5%ba%b7 icon" />
                </div><a data-id="36584" href="/sells/homes/search?product_category_id1=36584&amp;b2c_platform_id=27">美容健康</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="35736" href="/sells/homes/search?product_category_id2=35736&amp;b2c_platform_id=27">头发护理/造型</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35743" href="/sells/homes/search?product_category_id2=35743&amp;b2c_platform_id=27">剃须及脱毛产品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35738" href="/sells/homes/search?product_category_id2=35738&amp;b2c_platform_id=27">彩妆</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35745" href="/sells/homes/search?product_category_id2=35745&amp;b2c_platform_id=27">护肤工具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35747" href="/sells/homes/search?product_category_id2=35747&amp;b2c_platform_id=27">工具/配件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35744" href="/sells/homes/search?product_category_id2=35744&amp;b2c_platform_id=27">护肤品</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35739" href="/sells/homes/search?product_category_id2=35739&amp;b2c_platform_id=27">美甲用品及修甲工具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35737" href="/sells/homes/search?product_category_id2=35737&amp;b2c_platform_id=27">健康保健</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35740" href="/sells/homes/search?product_category_id2=35740&amp;b2c_platform_id=27">口腔清洁</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35746" href="/sells/homes/search?product_category_id2=35746&amp;b2c_platform_id=27">纹身及身体彩绘</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36596/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0024_%E7%81%AF%E9%A5%B0%E7%85%A7%E6%98%8E-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0024 %e7%81%af%e9%a5%b0%e7%85%a7%e6%98%8e icon" />
                </div><a data-id="36596" href="/sells/homes/search?product_category_id1=36596&amp;b2c_platform_id=27">照明灯饰</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="35626" href="/sells/homes/search?product_category_id2=35626&amp;b2c_platform_id=27">室内灯饰灯具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35632" href="/sells/homes/search?product_category_id2=35632&amp;b2c_platform_id=27">便携式照明</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35631" href="/sells/homes/search?product_category_id2=35631&amp;b2c_platform_id=27">室外照明</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35629" href="/sells/homes/search?product_category_id2=35629&amp;b2c_platform_id=27">灯泡、灯管</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35633" href="/sells/homes/search?product_category_id2=35633&amp;b2c_platform_id=27">专业灯具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35628" href="/sells/homes/search?product_category_id2=35628&amp;b2c_platform_id=27">照明附件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35625" href="/sells/homes/search?product_category_id2=35625&amp;b2c_platform_id=27">节日照明</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35627" href="/sells/homes/search?product_category_id2=35627&amp;b2c_platform_id=27">LED照明</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="43030" href="/sells/homes/search?product_category_id2=43030&amp;b2c_platform_id=27">工程灯</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35630" href="/sells/homes/search?product_category_id2=35630&amp;b2c_platform_id=27">新奇特灯</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="35624" href="/sells/homes/search?product_category_id2=35624&amp;b2c_platform_id=27">商业照明</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36606/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0003_%E7%8E%A9%E5%85%B7-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0003 %e7%8e%a9%e5%85%b7 icon" />
                </div><a data-id="36606" href="/sells/homes/search?product_category_id1=36606&amp;b2c_platform_id=27">玩具</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="37878" href="/sells/homes/search?product_category_id2=37878&amp;b2c_platform_id=27">拼图/立体拼图/七巧板/数独/魔方</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37875" href="/sells/homes/search?product_category_id2=37875&amp;b2c_platform_id=27">模型，积木和拼插玩具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37872" href="/sells/homes/search?product_category_id2=37872&amp;b2c_platform_id=27">娃娃/填充及毛绒玩具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37879" href="/sells/homes/search?product_category_id2=37879&amp;b2c_platform_id=27">遥控玩具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37877" href="/sells/homes/search?product_category_id2=37877&amp;b2c_platform_id=27">户外玩具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="40894" href="/sells/homes/search?product_category_id2=40894&amp;b2c_platform_id=27">减压玩具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37870" href="/sells/homes/search?product_category_id2=37870&amp;b2c_platform_id=27">经典玩具</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37871" href="/sells/homes/search?product_category_id2=37871&amp;b2c_platform_id=27">非遥控类交通工具玩具</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36608/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0000_%E6%89%8B%E8%A1%A8-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0000 %e6%89%8b%e8%a1%a8 icon" />
                </div><a data-id="36608" href="/sells/homes/search?product_category_id1=36608&amp;b2c_platform_id=27">手表</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="38814" href="/sells/homes/search?product_category_id2=38814&amp;b2c_platform_id=27">电子腕表</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="38819" href="/sells/homes/search?product_category_id2=38819&amp;b2c_platform_id=27">表附件</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="39148" href="/sells/homes/search?product_category_id2=39148&amp;b2c_platform_id=27">怀表</a>
                    </div>
                </div></li>
            <li class="each_category">
                <div class="image_box">
                    <img src="https://pic.kjds.com/uploads/product_category/icon/36593/%E8%B6%8A%E5%9F%9F%E7%BD%91%E5%88%86%E7%B1%BB-%E5%9B%BE%E6%A0%87_0015_%E5%AE%B6%E7%94%A8%E7%94%B5%E5%99%A8-icon.png" alt="%e8%b6%8a%e5%9f%9f%e7%bd%91%e5%88%86%e7%b1%bb %e5%9b%be%e6%a0%87 0015 %e5%ae%b6%e7%94%a8%e7%94%b5%e5%99%a8 icon" />
                </div><a data-id="36593" href="/sells/homes/search?product_category_id1=36593&amp;b2c_platform_id=27">家用电器</a>
                <div class="category_detail">
                    <div class="category_group clearfix">
                        <a class="title" data-id="37442" href="/sells/homes/search?product_category_id2=37442&amp;b2c_platform_id=27">洗熨家电</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37441" href="/sells/homes/search?product_category_id2=37441&amp;b2c_platform_id=27">厨房家电</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37435" href="/sells/homes/search?product_category_id2=37435&amp;b2c_platform_id=27">空气处理家电</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37447" href="/sells/homes/search?product_category_id2=37447&amp;b2c_platform_id=27">水处理家电</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="39427" href="/sells/homes/search?product_category_id2=39427&amp;b2c_platform_id=27">个护小家电</a>
                    </div>
                    <div class="category_group clearfix">
                        <a class="title" data-id="37437" href="/sells/homes/search?product_category_id2=37437&amp;b2c_platform_id=27">干手机</a>
                    </div>
                </div></li>
        </ul>
        <div class="right_banner">
            <!--轮播图开始-->
            <div class="right_banner">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ URL('images/1.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ URL('images/2.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ URL('images/3.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ URL('images/4.jpg') }}" alt=""></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!--轮播图结束-->
        </div>
    </div>
    <div class="goods_show_wrap clearfix">
        <div class="left_box">
            <a class="img" href="/sells/homes/search?recommend_tag_ids=171&amp;b2c_platform_id=27" target="_blank"><img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/recommend_tag/icon/171/u_3894658039_3404587229_fm_26_gp_0.jpg" src="https://pic.kjds.com/uploads/recommend_tag/icon/171/u_3894658039_3404587229_fm_26_gp_0.jpg" alt="Default" style="display: inline;" /></a>
            <div class="title">
                <h4>美国WY仓新品推荐</h4>
                <h></h>
                <p>WY US WAREHOUSE</p>
            </div>
        </div>
        <div class="right_box">
            <ul>
                <li><a href="/sells/products/415620468008" target="_blank" title="2xD1C D1S D1R 8000K Ice Blue HID Xenon Headlight Light Bulb Replace Hi/Low Lamp">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/673170/thumb_500_500_e99dbe32b90713ac3fedce57f33d7c37.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/673170/thumb_500_500_e99dbe32b90713ac3fedce57f33d7c37.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>2xD1C D1S D1R 8000K Ice Blue HID Xenon Headlight Light Bulb Replace Hi/Low Lamp</p>
                        <strong>&yen;85.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/115621342400" target="_blank" title="Water Quality Testing Pen Purity Filter TDS Meter Tester 0-9990 PPM Grey">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/673631/thumb_500_500_56d70976a9b7fcd7781088804d8d0453.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/673631/thumb_500_500_56d70976a9b7fcd7781088804d8d0453.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Water Quality Testing Pen Purity Filter TDS Meter Tester 0-9990 PPM Grey</p>
                        <strong>&yen;66.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/915621399726" target="_blank" title="Waterproof Adjustable Dog Collar No Anti-Bark Train Stop Barking Spray Control">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/673669/thumb_500_500_559e25fa2194c8225b496065b99da82b.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/673669/thumb_500_500_559e25fa2194c8225b496065b99da82b.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Waterproof Adjustable Dog Collar No Anti-Bark Train Stop Barking Spray Control</p>
                        <strong>&yen;198.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/815623113420" target="_blank" title="Clear Bumper Case Cell phone +Screen&nbsp;Protector&nbsp;Tempered&nbsp;GlassFor iPhone X 7 8P">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/674508/thumb_500_500_86fb00fb08071f64340e62a8fa0c84a7.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/674508/thumb_500_500_86fb00fb08071f64340e62a8fa0c84a7.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Clear Bumper Case Cell phone +Screen&nbsp;Protector&nbsp;Tempered&nbsp;GlassFor iPhone X 7 8P</p>
                        <strong>&yen;29.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/115620491388" target="_blank" title="Car Body Paintless Dent Repair Tools Puller + Glue Pulling Tabs">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/673261/thumb_500_500_2caad0d0d482fddf66ee31b2b6c93250.png-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/673261/thumb_500_500_2caad0d0d482fddf66ee31b2b6c93250.png-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Car Body Paintless Dent Repair Tools Puller + Glue Pulling Tabs</p>
                        <strong>&yen;105.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/615621207870" target="_blank" title="9006 HB4 LED Headlight Kit COB Beam Bulbs Light Hi/Lo Beam 6000K White Pair">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/673395/thumb_500_500_ee93d8e1dd6fb2bdf0eb948cc7246f42.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/673395/thumb_500_500_ee93d8e1dd6fb2bdf0eb948cc7246f42.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>9006 HB4 LED Headlight Kit COB Beam Bulbs Light Hi/Lo Beam 6000K White Pair</p>
                        <strong>&yen;61.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/815620471170" target="_blank" title="35W D1S D1C D1R Car Xenon Replacement HID Headlight 6000K White Bulb Clear">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/673193/thumb_500_500_5a9b0459c3470d37ad45725ff7367cb8.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/673193/thumb_500_500_5a9b0459c3470d37ad45725ff7367cb8.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>35W D1S D1C D1R Car Xenon Replacement HID Headlight 6000K White Bulb Clear</p>
                        <strong>&yen;85.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/515621227374" target="_blank" title="Posture Corrector Brace and Clavicle Support Straightener Upper Back Shoulder">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/673489/thumb_500_500_eda5f7f5d5cef14c41fe0be3da23ba14.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/673489/thumb_500_500_eda5f7f5d5cef14c41fe0be3da23ba14.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Posture Corrector Brace and Clavicle Support Straightener Upper Back Shoulder</p>
                        <strong>&yen;91.00</strong>
                    </div></a></li>
            </ul>
        </div>
    </div>
    <div class="goods_show_wrap clearfix">
        <div class="left_box">
            <a class="img" href="/sells/homes/search?recommend_tag_ids=169&amp;b2c_platform_id=27" target="_blank"><img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/recommend_tag/icon/169/thumb_500_500_62bf1edb36141f114521ec4bb4175579.jpg" src="https://pic.kjds.com/uploads/recommend_tag/icon/169/thumb_500_500_62bf1edb36141f114521ec4bb4175579.jpg" alt="Default" style="display: inline;" /></a>
            <div class="title">
                <h4>香港仓品牌手机</h4>
                <h></h>
                <p>China Hong Kong Brand Mobile Phone</p>
            </div>
        </div>
        <div class="right_box">
            <ul>
                <li><a href="/sells/products/715597068471" target="_blank" title="DOOGEE S30 5'' Quad-Core Android 7.0 4G IP68 Waterproof Phone 2GB+16GB 5580mAh">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/665863/thumb_500_500_fe99196adb6a2cca15448532f9ae84ef.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/665863/thumb_500_500_fe99196adb6a2cca15448532f9ae84ef.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>DOOGEE S30 5'' Quad-Core Android 7.0 4G IP68 Waterproof Phone 2GB+16GB 5580mAh</p>
                        <strong>&yen;672.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/815608284185" target="_blank" title="Dual SIM DOOGEE X70 Smartphone 5.5'' Quad-Core Android 8.1 Phone 2GB+16GB">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/669315/thumb_500_500_4e481235a9d89370730e11059dd519ef.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/669315/thumb_500_500_4e481235a9d89370730e11059dd519ef.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Dual SIM DOOGEE X70 Smartphone 5.5'' Quad-Core Android 8.1 Phone 2GB+16GB</p>
                        <strong>&yen;409.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/315608254016" target="_blank" title="Dual SIM DOOGEE X10S 5'' Quad-Core Android GO 8.1 Phone 1GB+8GB">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/669235/thumb_500_500_f3ccdd27d2000e3f9255a7e3e2c48800.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/669235/thumb_500_500_f3ccdd27d2000e3f9255a7e3e2c48800.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Dual SIM DOOGEE X10S 5'' Quad-Core Android GO 8.1 Phone 1GB+8GB</p>
                        <strong>&yen;290.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/215608359500" target="_blank" title="Dual SIM DOOGEE S80 Lite Smartphone 5.99'' Octa-Core Android 8.1 4GB+64GB">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/669399/thumb_500_500_cdc679bebbe282e170ab6fe0dca8445e.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/669399/thumb_500_500_cdc679bebbe282e170ab6fe0dca8445e.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Dual SIM DOOGEE S80 Lite Smartphone 5.99'' Octa-Core Android 8.1 4GB+64GB</p>
                        <strong>&yen;1587.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/115608368616" target="_blank" title="Dual SIM DOOGEE S90 Smartphone 6.18&quot; Octa-Core Android 8.1 6GB+128GB 16.0MP">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/669449/thumb_500_500_eeff8b1c6f7848800af11495c17abc7e.bmp-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/669449/thumb_500_500_eeff8b1c6f7848800af11495c17abc7e.bmp-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Dual SIM DOOGEE S90 Smartphone 6.18&quot; Octa-Core Android 8.1 6GB+128GB 16.0MP</p>
                        <strong>&yen;2062.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/815608377677" target="_blank" title="Dual SIM DOOGEE Y8 Smartphone 6.1&quot; Quad Core Android 9 Pie 3+32GB 8.0MP">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/669484/thumb_500_500_2f30c05e2a9aaa65de05fc094eecfddf.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/669484/thumb_500_500_2f30c05e2a9aaa65de05fc094eecfddf.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Dual SIM DOOGEE Y8 Smartphone 6.1&quot; Quad Core Android 9 Pie 3+32GB 8.0MP</p>
                        <strong>&yen;519.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/915597038210" target="_blank" title="DOOGEE BL9000 Smartphone 5.99'' Octa-Core 2.0GHz 6GB RAM 64GB Android 8.1">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/665767/thumb_500_500_fe99196adb6a2cca15448532f9ae84ef.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/665767/thumb_500_500_fe99196adb6a2cca15448532f9ae84ef.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>DOOGEE BL9000 Smartphone 5.99'' Octa-Core 2.0GHz 6GB RAM 64GB Android 8.1</p>
                        <strong>&yen;1345.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/415597050993" target="_blank" title="DOOGEE N10 Smartphone 1080P 5.84&quot; Android 8.1 Octa-core 3GB RAM 32GB 16.0MP">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/665809/thumb_500_500_f3ccdd27d2000e3f9255a7e3e2c48800.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/665809/thumb_500_500_f3ccdd27d2000e3f9255a7e3e2c48800.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>DOOGEE N10 Smartphone 1080P 5.84&quot; Android 8.1 Octa-core 3GB RAM 32GB 16.0MP</p>
                        <strong>&yen;593.00</strong>
                    </div></a></li>
            </ul>
        </div>
    </div>
    <div class="goods_show_wrap clearfix">
        <div class="left_box">
            <a class="img" href="/sells/homes/search?recommend_tag_ids=170&amp;b2c_platform_id=27" target="_blank"><img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/recommend_tag/icon/170/timg__1_.jpg" src="https://pic.kjds.com/uploads/recommend_tag/icon/170/timg__1_.jpg" alt="Default" style="display: inline;" /></a>
            <div class="title">
                <h4>澳洲仓爆款推荐</h4>
                <h></h>
                <p>Australian Warehouse Explosion</p>
            </div>
        </div>
        <div class="right_box">
            <ul>
                <li><a href="/sells/products/715590263180" target="_blank" title="Outdoor Shoulder Military Tactical Backpack Travel Camping Hiking Trekking Bag">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/663454/thumb_500_500_b1bf1bf2a83ba7ba6c90fa542780e83f.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/663454/thumb_500_500_b1bf1bf2a83ba7ba6c90fa542780e83f.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Outdoor Shoulder Military Tactical Backpack Travel Camping Hiking Trekking Bag</p>
                        <strong>&yen;193.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/415590277543" target="_blank" title="1pcs 136LED Solar Motion Sensor Garden Security Outdoor Yard Wall Light Lamp">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/663510/thumb_500_500_ca3ea3f512d6e8ec49385ff85950c06c.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/663510/thumb_500_500_ca3ea3f512d6e8ec49385ff85950c06c.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>1pcs 136LED Solar Motion Sensor Garden Security Outdoor Yard Wall Light Lamp</p>
                        <strong>&yen;188.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/915591198037" target="_blank" title="Bluetooth 5.0 Headset TWS Wireless Earphones Twins Earbuds 5D Stereo Headphones">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/663937/thumb_500_500_02f3c3890f20146100e09fe0b8e2c838.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/663937/thumb_500_500_02f3c3890f20146100e09fe0b8e2c838.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Bluetooth 5.0 Headset TWS Wireless Earphones Twins Earbuds 5D Stereo Headphones</p>
                        <strong>&yen;207.50</strong>
                    </div></a></li>
                <li><a href="/sells/products/215591946181" target="_blank" title="Yoga Headband Wireless Bluetooth Smart Cap Headset Headphone Speaker">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/663993/thumb_500_500_e7d19e005a3dda0c8fb52bd099bf5e4c.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/663993/thumb_500_500_e7d19e005a3dda0c8fb52bd099bf5e4c.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Yoga Headband Wireless Bluetooth Smart Cap Headset Headphone Speaker</p>
                        <strong>&yen;90.10</strong>
                    </div></a></li>
                <li><a href="/sells/products/515591955701" target="_blank" title="Wireless Fast Charger Charging Pad Stand Dock For Galaxy S9+ iPhone X XS Max">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/664038/thumb_500_500_0e388aca1e1317e7eca9df617b3ea21a.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/664038/thumb_500_500_0e388aca1e1317e7eca9df617b3ea21a.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Wireless Fast Charger Charging Pad Stand Dock For Galaxy S9+ iPhone X XS Max</p>
                        <strong>&yen;107.40</strong>
                    </div></a></li>
                <li><a href="/sells/products/615590293285" target="_blank" title="WIFI Internet Things based Fit for iPhone iPad IOS Android system module">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/663554/thumb_500_500_c03590ff2c71d14cf939b884d799da3b.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/663554/thumb_500_500_c03590ff2c71d14cf939b884d799da3b.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>WIFI Internet Things based Fit for iPhone iPad IOS Android system module</p>
                        <strong>&yen;153.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/915591959051" target="_blank" title="Wireless Fast Charger Charging Pad Stand Dock For Galaxy / iPhone X XS Max /LG">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/664061/thumb_500_500_14a92944bbc5d215673dcf2b937c84c6.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/664061/thumb_500_500_14a92944bbc5d215673dcf2b937c84c6.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Wireless Fast Charger Charging Pad Stand Dock For Galaxy / iPhone X XS Max /LG</p>
                        <strong>&yen;104.30</strong>
                    </div></a></li>
            </ul>
        </div>
    </div>
    <div class="goods_show_wrap clearfix">
        <div class="left_box">
            <a class="img" href="/sells/homes/search?recommend_tag_ids=166&amp;b2c_platform_id=27" target="_blank"><img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/recommend_tag/icon/166/thumb_500_500_4a210e23fa075f87c699572d87b8c981.jpg" src="https://pic.kjds.com/uploads/recommend_tag/icon/166/thumb_500_500_4a210e23fa075f87c699572d87b8c981.jpg" alt="Default" style="display: inline;" /></a>
            <div class="title">
                <h4>美国仓优质品牌</h4>
                <h></h>
                <p>DUOLANG AIR COOLER</p>
            </div>
        </div>
        <div class="right_box">
            <ul>
                <li><a href="/sells/products/515602350196" target="_blank" title="Portable Air Cooler Cooling Fan Humidifier Air Conditioner for Home Office">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/671406/thumb_500_500_c87662cbae38cd313c8d326fc27f3cf7.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/671406/thumb_500_500_c87662cbae38cd313c8d326fc27f3cf7.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Portable Air Cooler Cooling Fan Humidifier Air Conditioner for Home Office</p>
                        <strong>&yen;941.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/515538283742" target="_blank" title="1353 CFM Air Cooler Folding Evaporative Air Cooler for 861.1-1076.4 Sq. Ft.">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/648409/thumb_500_500_d19c0bad6130a2b22e2afd58cb4d667f.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/648409/thumb_500_500_d19c0bad6130a2b22e2afd58cb4d667f.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>1353 CFM Air Cooler Folding Evaporative Air Cooler for 861.1-1076.4 Sq. Ft.</p>
                        <strong>&yen;1879.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/915538287216" target="_blank" title="Remote Control Air Cooler Detachable Cool Fan Folding Air Conditioner Purifier">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/668371/thumb_500_500_afff455e8a8309225081846c6716f9af.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/668371/thumb_500_500_afff455e8a8309225081846c6716f9af.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Remote Control Air Cooler Detachable Cool Fan Folding Air Conditioner Purifier</p>
                        <strong>&yen;1879.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/815538286887" target="_blank" title="Remote Control Portable Air Cooler Detachable Cooling Fan Folding Air Conditioner Purifier Humidifier for Home">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/660093/thumb_500_500_156005c5baf40ff51a327f1c34f2975b.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/660093/thumb_500_500_156005c5baf40ff51a327f1c34f2975b.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Remote Control Portable Air Cooler Detachable Cooling Fan Folding Air Conditioner Purifier Humidifier for Home</p>
                        <strong>&yen;1879.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/515602355803" target="_blank" title="Portable Air Cooler Cooling Fan Humidifier Air Conditioner for Home Office">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/668805/thumb_500_500_338fb0b317f8cfe29e95b0ff87ea86ba.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/668805/thumb_500_500_338fb0b317f8cfe29e95b0ff87ea86ba.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Portable Air Cooler Cooling Fan Humidifier Air Conditioner for Home Office</p>
                        <strong>&yen;1160.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/315538299853" target="_blank" title="DUOLANG DL-C3500 Portable Air Cooler Cooling Fan Humidifier Air Conditioner for Home Office">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/654785/thumb_500_500_ca4022668b87a0d38a078c3093009a4a.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/654785/thumb_500_500_ca4022668b87a0d38a078c3093009a4a.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>DUOLANG DL-C3500 Portable Air Cooler Cooling Fan Humidifier Air Conditioner for Home Office</p>
                        <strong>&yen;941.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/415538266817" target="_blank" title="Air Cooler Detachable Cooling Fan Folding Air Conditioner Purifier Humidifier">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/668361/thumb_500_500_9bdcc32841655fab4ab139b6afbe17cc.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/668361/thumb_500_500_9bdcc32841655fab4ab139b6afbe17cc.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Air Cooler Detachable Cooling Fan Folding Air Conditioner Purifier Humidifier</p>
                        <strong>&yen;1730.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/115538303538" target="_blank" title="Portable Air Cooler Cooling Fan Humidifier Air Conditioner for Remote Control">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/654807/thumb_500_500_a3dcd12ca0eb4e00ff21d0156e26e335.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/654807/thumb_500_500_a3dcd12ca0eb4e00ff21d0156e26e335.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Portable Air Cooler Cooling Fan Humidifier Air Conditioner for Remote Control</p>
                        <strong>&yen;1160.00</strong>
                    </div></a></li>
            </ul>
        </div>
    </div>
    <div class="goods_show_wrap clearfix">
        <div class="left_box">
            <a class="img" href="/sells/homes/search?recommend_tag_ids=167&amp;b2c_platform_id=27" target="_blank"><img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/recommend_tag/icon/167/1556182830696.jpg" src="https://pic.kjds.com/uploads/recommend_tag/icon/167/1556182830696.jpg" alt="Default" style="display: inline;" /></a>
            <div class="title">
                <h4>畅销工具类</h4>
                <h></h>
                <p>BEST-SELLING TOOLS</p>
            </div>
        </div>
        <div class="right_box">
            <ul>
                <li><a href="/sells/products/515555751289" target="_blank" title="120 V 7&quot; Variable Speed Polisher Polisher 7A Variable Speed Constant">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/654326/thumb_500_500_31fb94447a17f46c4310fac5267b95aa.png-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/654326/thumb_500_500_31fb94447a17f46c4310fac5267b95aa.png-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>120 V 7&quot; Variable Speed Polisher Polisher 7A Variable Speed Constant</p>
                        <strong>&yen;297.22</strong>
                    </div></a></li>
                <li><a href="/sells/products/615580567230" target="_blank" title="6pcs Crimped Wire Wheel Cup Brush">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/661679/thumb_500_500_db6bd014c106fd59d6d275171fb73a81.png-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/661679/thumb_500_500_db6bd014c106fd59d6d275171fb73a81.png-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>6pcs Crimped Wire Wheel Cup Brush</p>
                        <strong>&yen;80.43</strong>
                    </div></a></li>
                <li><a href="/sells/products/415565256857" target="_blank" title="Toolman 7&quot; Angle Grinder 12A 8000BPM Kit Set Cut Off Tool">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/657243/thumb_500_500_4b74c533259e4a256aad6509d7f33681.png-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/657243/thumb_500_500_4b74c533259e4a256aad6509d7f33681.png-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Toolman 7&quot; Angle Grinder 12A 8000BPM Kit Set Cut Off Tool</p>
                        <strong>&yen;365.26</strong>
                    </div></a></li>
                <li><a href="/sells/products/415577138914" target="_blank" title="50pcs 7&quot; Sander Disc 40-120 Grit Sanding Polishing Pad Sandpaper Tool No Hole">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/660517/thumb_500_500_faf5571b5f131ddcbf2e6a80277b1758.png-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/660517/thumb_500_500_faf5571b5f131ddcbf2e6a80277b1758.png-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>50pcs 7&quot; Sander Disc 40-120 Grit Sanding Polishing Pad Sandpaper Tool No Hole</p>
                        <strong>&yen;148.54</strong>
                    </div></a></li>
                <li><a href="/sells/products/415555742920" target="_blank" title="4 1/2 Angle Grinder 11500 RPM 120 V / Cutting wheel sand 60 x 2">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/654318/thumb_500_500_1ae0e2b79d2a23f1e2f86320ad3f6c39.png-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/654318/thumb_500_500_1ae0e2b79d2a23f1e2f86320ad3f6c39.png-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>4 1/2 Angle Grinder 11500 RPM 120 V / Cutting wheel sand 60 x 2</p>
                        <strong>&yen;154.80</strong>
                    </div></a></li>
                <li><a href="/sells/products/215574686219" target="_blank" title="10pcs TOOLMAN 4&quot;&times;5/8&quot; Premium Cut Off Wheel for Metal 60 Grit 13700 Rpm">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/660480/thumb_500_500_db6bd014c106fd59d6d275171fb73a81.png-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/660480/thumb_500_500_db6bd014c106fd59d6d275171fb73a81.png-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>10pcs TOOLMAN 4&quot;&times;5/8&quot; Premium Cut Off Wheel for Metal 60 Grit 13700 Rpm</p>
                        <strong>&yen;80.43</strong>
                    </div></a></li>
                <li><a href="/sells/products/315555756803" target="_blank" title="120 V 7&quot; Variable Speed Polisher Polisher 12A Variable Speed Constant">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/654343/thumb_500_500_76f43a9864525c813ab2077e86c21c07.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/654343/thumb_500_500_76f43a9864525c813ab2077e86c21c07.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>120 V 7&quot; Variable Speed Polisher Polisher 12A Variable Speed Constant</p>
                        <strong>&yen;328.18</strong>
                    </div></a></li>
            </ul>
        </div>
    </div>
    <div class="goods_show_wrap clearfix">
        <div class="left_box">
            <a class="img" href="/sells/homes/search?recommend_tag_ids=161&amp;b2c_platform_id=27" target="_blank"><img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/recommend_tag/icon/161/dfcd175726005310b66c37cc2a9b3d17.jpg" src="https://pic.kjds.com/uploads/recommend_tag/icon/161/dfcd175726005310b66c37cc2a9b3d17.jpg" alt="Default" style="display: inline;" /></a>
            <div class="title">
                <h4>美国仓潜力爆款</h4>
                <h></h>
                <p>US POTENTIAL EXPLOSION</p>
            </div>
        </div>
        <div class="right_box">
            <ul>
                <li><a href="/sells/products/514979245636" target="_blank" title="10’ 10’ Easy POP UP Wedding Party Tent Foldable With Bag White">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/190186/thumb_500_500_662efd56b6fdb57d9d19526b09cb8771.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/190186/thumb_500_500_662efd56b6fdb57d9d19526b09cb8771.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>10’ 10’ Easy POP UP Wedding Party Tent Foldable With Bag White</p>
                        <strong>&yen;415.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/114980111270" target="_blank" title="10-Tier Shoe Rack For 50 Pair Wall Bench Shelf Closet Organizer Storage Box">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/191041/thumb_500_500_14d748017b2a1afec45766a628c38d75.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/191041/thumb_500_500_14d748017b2a1afec45766a628c38d75.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>10-Tier Shoe Rack For 50 Pair Wall Bench Shelf Closet Organizer Storage Box</p>
                        <strong>&yen;108.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/314980268089" target="_blank" title="53cm Trendy Adjustable Bamboo Computer Desk">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/191407/thumb_500_500_08b2fa0609d88a21b2294b95c7161c8f.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/191407/thumb_500_500_08b2fa0609d88a21b2294b95c7161c8f.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>53cm Trendy Adjustable Bamboo Computer Desk</p>
                        <strong>&yen;133.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/715543607842" target="_blank" title="Natural Himalayan Crystal Salt Lamp with Metal Base Dimmable Controller">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/651107/thumb_500_500_1c1e65d3248705fd2d9ab4d5f0f6fb82.JPG-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/651107/thumb_500_500_1c1e65d3248705fd2d9ab4d5f0f6fb82.JPG-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Natural Himalayan Crystal Salt Lamp with Metal Base Dimmable Controller</p>
                        <strong>&yen;102.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/915543591476" target="_blank" title="13x3.5 Inch Professional Snare Drum Drumsticks Drum Key Strap Set Black">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/651087/thumb_500_500_665ec54ba9abc8a850e507e915e8ef4b.JPG-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/651087/thumb_500_500_665ec54ba9abc8a850e507e915e8ef4b.JPG-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>13x3.5 Inch Professional Snare Drum Drumsticks Drum Key Strap Set Black</p>
                        <strong>&yen;183.03</strong>
                    </div></a></li>
                <li><a href="/sells/products/414980147477" target="_blank" title="3 in 1 Apple Slinky Machine Peeler Corer Fruit Cutter Slicer Useful Kitchen Tool">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/191156/thumb_500_500_6784610e0811c1724a75343a618ff063.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/191156/thumb_500_500_6784610e0811c1724a75343a618ff063.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>3 in 1 Apple Slinky Machine Peeler Corer Fruit Cutter Slicer Useful Kitchen Tool</p>
                        <strong>&yen;77.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/914981026501" target="_blank" title="Well-equipped S-shaped Hook High Strength Assembled Hanging Chair Cacolet Red">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/192267/thumb_500_500_5f51cc261c6f799ce16cff84d69accf7.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/192267/thumb_500_500_5f51cc261c6f799ce16cff84d69accf7.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Well-equipped S-shaped Hook High Strength Assembled Hanging Chair Cacolet Red</p>
                        <strong>&yen;177.87</strong>
                    </div></a></li>
            </ul>
        </div>
    </div>
    <div class="goods_show_wrap clearfix">
        <div class="left_box">
            <a class="img" href="/sells/homes/search?recommend_tag_ids=165&amp;b2c_platform_id=27" target="_blank"><img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/recommend_tag/icon/165/1553239745233.jpg" src="https://pic.kjds.com/uploads/recommend_tag/icon/165/1553239745233.jpg" alt="Default" style="display: inline;" /></a>
            <div class="title">
                <h4>≥90%于5个工作日内妥投</h4>
                <h></h>
                <p>MORE THAN 90% WILL BE DELIVERED WITHIN 5 WORKING DAYS</p>
            </div>
        </div>
        <div class="right_box">
            <ul>
                <li><a href="/sells/products/415272995914" target="_blank" title="Protection Case Travel for JBL Charge 3 Portable Wireless Bluetooth Speaker">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/375815/thumb_500_500_a2b1dfee28f2c12a2376a533c93c6c16.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/375815/thumb_500_500_a2b1dfee28f2c12a2376a533c93c6c16.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Protection Case Travel for JBL Charge 3 Portable Wireless Bluetooth Speaker</p>
                        <strong>&yen;65.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/915458199652" target="_blank" title="14 Pcs Portable Spanner Wrench Set 8-24mm Tool Kit">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/623621/thumb_500_500_994c275b15eef37b88a225c095f94e21.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/623621/thumb_500_500_994c275b15eef37b88a225c095f94e21.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>14 Pcs Portable Spanner Wrench Set 8-24mm Tool Kit</p>
                        <strong>&yen;93.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/215458904674" target="_blank" title="Maintenance Hardware Tool Set Household Combined Tool Set">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/623912/thumb_500_500_eb6ad85cc9d8ea2ada8b695d03d6bf12.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/623912/thumb_500_500_eb6ad85cc9d8ea2ada8b695d03d6bf12.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Maintenance Hardware Tool Set Household Combined Tool Set</p>
                        <strong>&yen;96.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/415548853678" target="_blank" title="Hand Held Bidet Sprayer Stainless Steel Sprayer Shattaf - Only Bidet Spray Head For Toilet, Water Toilet Cleaning Attachments">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/652163/thumb_500_500_f0e5f3d6fb50fd2357ded932e8ac211e.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/652163/thumb_500_500_f0e5f3d6fb50fd2357ded932e8ac211e.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Hand Held Bidet Sprayer Stainless Steel Sprayer Shattaf - Only Bidet Spray Head For Toilet, Water Toilet Cleaning Attachments</p>
                        <strong>&yen;91.47</strong>
                    </div></a></li>
                <li><a href="/sells/products/215456214492" target="_blank" title="3 in 1 Travel Diaper Bag Portable Bassinet / Changing Pad Station">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/622278/thumb_500_500_c0f5cb5c064170c1099a8e72e23be82c.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/622278/thumb_500_500_c0f5cb5c064170c1099a8e72e23be82c.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>3 in 1 Travel Diaper Bag Portable Bassinet / Changing Pad Station</p>
                        <strong>&yen;183.50</strong>
                    </div></a></li>
                <li><a href="/sells/products/115456427696" target="_blank" title="22 Inch 648W LED Work Light Spot Flood Combo Led Driving Lights">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/622606/thumb_500_500_84796741e17811e4ad9d475ade6d4652.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/622606/thumb_500_500_84796741e17811e4ad9d475ade6d4652.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>22 Inch 648W LED Work Light Spot Flood Combo Led Driving Lights</p>
                        <strong>&yen;261.50</strong>
                    </div></a></li>
                <li><a href="/sells/products/915457303701" target="_blank" title="Outdoor Waterfall Fountain - 16&quot;H 3-Tier Home Water Fountain w/LED Light">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/623105/thumb_500_500_30e62fddc14c05988b44e7c02788e187.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/623105/thumb_500_500_30e62fddc14c05988b44e7c02788e187.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Outdoor Waterfall Fountain - 16&quot;H 3-Tier Home Water Fountain w/LED Light</p>
                        <strong>&yen;439.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/215510783290" target="_blank" title="Folding Princess Castle Tent Kids Children Funny Play Fairy House With Light">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/638453/thumb_500_500_c1f28672e69f3c25d66db7063c388bb1.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/638453/thumb_500_500_c1f28672e69f3c25d66db7063c388bb1.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Folding Princess Castle Tent Kids Children Funny Play Fairy House With Light</p>
                        <strong>&yen;189.00</strong>
                    </div></a></li>
            </ul>
        </div>
    </div>
    <div class="goods_show_wrap clearfix">
        <div class="left_box">
            <a class="img" href="/sells/homes/search?recommend_tag_ids=162&amp;b2c_platform_id=27" target="_blank"><img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/recommend_tag/icon/162/1553158539120.jpg" src="https://pic.kjds.com/uploads/recommend_tag/icon/162/1553158539120.jpg" alt="Default" style="display: inline;" /></a>
            <div class="title">
                <h4>TT美国仓</h4>
                <h></h>
                <p>TT US WAREHOUSE</p>
            </div>
        </div>
        <div class="right_box">
            <ul>
                <li><a href="/sells/products/415610016340" target="_blank" title="Video Camera Monitor 720P HD For Home Security">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/670483/thumb_500_500_d722a3df6a3b0944280e4c61e18af4a5.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/670483/thumb_500_500_d722a3df6a3b0944280e4c61e18af4a5.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Video Camera Monitor 720P HD For Home Security</p>
                        <strong>&yen;140.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/615319801903" target="_blank" title="Mini Portable USB 3.5mm AUX Wireless Bluetooth Music Audio Receiver">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/455090/thumb_500_500_156005c5baf40ff51a327f1c34f2975b.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/455090/thumb_500_500_156005c5baf40ff51a327f1c34f2975b.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Mini Portable USB 3.5mm AUX Wireless Bluetooth Music Audio Receiver</p>
                        <strong>&yen;36.70</strong>
                    </div></a></li>
                <li><a href="/sells/products/715317239672" target="_blank" title="50Pcs 3-Star 40mm Table Tennis Advanced Training Ping Pong Balls">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/446927/thumb_500_500_18e2999891374a475d0687ca9f989d83.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/446927/thumb_500_500_18e2999891374a475d0687ca9f989d83.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>50Pcs 3-Star 40mm Table Tennis Advanced Training Ping Pong Balls</p>
                        <strong>&yen;81.90</strong>
                    </div></a></li>
                <li><a href="/sells/products/315324962500" target="_blank" title="Lixada Solar Power Wireless LED Wall Lamp">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/469104/thumb_500_500_f3ccdd27d2000e3f9255a7e3e2c48800.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/469104/thumb_500_500_f3ccdd27d2000e3f9255a7e3e2c48800.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Lixada Solar Power Wireless LED Wall Lamp</p>
                        <strong>&yen;47.36</strong>
                    </div></a></li>
                <li><a href="/sells/products/415342378214" target="_blank" title="Remote Control Motion Controlling Drone RC Quadcopter with 360&deg; Flips Function">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/514596/thumb_500_500_9c4d580e5cf00019fac6ea0248a439bf.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/514596/thumb_500_500_9c4d580e5cf00019fac6ea0248a439bf.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>Remote Control Motion Controlling Drone RC Quadcopter with 360&deg; Flips Function</p>
                        <strong>&yen;181.10</strong>
                    </div></a></li>
                <li><a href="/sells/products/915325096404" target="_blank" title="2in/52mm Auto Car Gauge Meter Pod Holder Cup Mount">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/470579/thumb_500_500_f3ccdd27d2000e3f9255a7e3e2c48800.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/470579/thumb_500_500_f3ccdd27d2000e3f9255a7e3e2c48800.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>2in/52mm Auto Car Gauge Meter Pod Holder Cup Mount</p>
                        <strong>&yen;51.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/815548620561" target="_blank" title="5V 2A Universal Charger Adapter US Plug USB Wall Charger Fast Charging for iPhone 6S 6 Plus iPad Mini SAMSUNG S6 Edge HTC">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/651530/thumb_500_500_b4b99dfa01f2b9d50913e2c548cf20b5.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/651530/thumb_500_500_b4b99dfa01f2b9d50913e2c548cf20b5.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>5V 2A Universal Charger Adapter US Plug USB Wall Charger Fast Charging for iPhone 6S 6 Plus iPad Mini SAMSUNG S6 Edge HTC</p>
                        <strong>&yen;42.00</strong>
                    </div></a></li>
                <li><a href="/sells/products/115548626970" target="_blank" title="35 Inch Stainless Steel Portable Folding Charcoal BBQ Grill">
                    <div class="each_box">
                        <img onerror="this.onerror=null;this.src='/goods_pic_error.png';" data-original="https://pic.kjds.com/uploads/product_image/picture_url/651557/thumb_500_500_d58c974dbe68631fe3d7493acfef01d3.jpg-PIC400x400" src="https://pic.kjds.com/uploads/product_image/picture_url/651557/thumb_500_500_d58c974dbe68631fe3d7493acfef01d3.jpg-PIC400x400" alt="Default" style="display: inline;" />
                    </div>
                    <div class="title">
                        <p>35 Inch Stainless Steel Portable Folding Charcoal BBQ Grill</p>
                        <strong>&yen;422.50</strong>
                    </div></a></li>
            </ul>
        </div>
    </div>
</div>
<footer>
    <div class="container">
        <div class="helps_box clearfix">
            <div class="help">
                <h4>新手入门</h4>
                <ul>
                    <li><a target="_blank" href="https://rumen.kjds.com">入门指引</a></li>
                    <li><a target="_blank" href="/sells/customer_services/2">物流方式</a></li>
                    <li><a target="_blank" href="/sells/customer_services/3">支付方式</a></li>
                    <li><a target="_blank" href="/sells/customer_services/4">工作时间</a></li>
                </ul>
            </div>
            <div class="help">
                <h4>商务合作</h4>
                <ul>
                    <li><a target="_blank" href="/sells/customer_services/7">成为分销商</a></li>
                    <li><a target="_blank" href="/sells/customer_services/6">成为物流商</a></li>
                    <li><a target="_blank" href="/sells/customer_services/5">成为供应商</a></li>
                    <li><a target="_blank" href="/sells/customer_services/8">合作伙伴</a></li>
                </ul>
            </div>
            <div class="help">
                <h4>加入我们</h4>
                <ul>
                    <li><a target="_blank" href="/sells/customer_services/9">关于我们</a></li>
                    <li><a target="_blank" href="/sells/customer_services/10">加入我们</a></li>
                    <li><a target="_blank" href="/sells/customer_services/11">联系我们</a></li>
                </ul>
            </div>
            <div class="help">
                <h4>扫描关注</h4>
                <ul>
                    <li><img src="https://pic.kjds.com/kjds.jpg" alt="Kjds" /></li>
                </ul>
            </div>
            <div class="bomb_Mask">
                <div class="maskBg"></div>
                <div class="maskContent">
                    <div class="top">
                        <p>温馨提示</p>
                    </div>
                    <div class="middle">
                        <p>如果您想成为越域平台供应商，请联系客服。</p>
                    </div>
                    <button class="btn_okay">确定</button>
                </div>
            </div>
        </div>
    </div>
    <div class="frined_link clearfix">
        <h4>友情链接</h4>
        <ul class="clear">
            <li><a href="http://www.sellergrowth.com" target="_blank">卖家成长</a></li>
            <li><a href="http://www.dianxiaomi.com" target="_blank">店小秘</a></li>
            <li><a href="http://www.cifnews.com" target="_blank">雨果网</a></li>
            <li><a href="http://www.trackingmore.com/cn.html" target="_blank">Trackingmore</a></li>
            <li><a href="http://www.ebay.com" target="_blank">eBay</a></li>
            <li><a href="http://www.aliexpress.com" target="_blank">AliExpress</a></li>
            <li><a href="http://www.amazon.com" target="_blank">Amazon</a></li>
            <li><a href="http://www.wish.com" target="_blank">Wish</a></li>
            <li><a href="http://www.cdiscount.com" target="_blank">C.Discount</a></li>
            <li><a href="http://www.newegg.com" target="_blank">New Egg</a></li>
            <li><a href="http://www.rakuten.co.jp" target="_blank">Rakuten</a></li>
            <li><a href="http://www.shein.com" target="_blank">Shein</a></li>
        </ul>
        <div class="foot-record">
            <p>版权所有：贝展曼妙（上海）网络科技有限公司</p>
            <p><a href="http://www.miitbeian.gov.cn" target="_blank">沪ICP备15016946号</a></p>
            <p>增值电信业务经营许可证：沪B2-20180141</p>
        </div>
    </div>
</footer>
<!--<script src="https://cdn-resources-aliyun.kjds.com/assets/application_sells-1e01a053e31430befceb09922f981f78.js" data-turbolinks-track="true"></script>-->
<script src="{{ URL('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ URL('js/swiper.min.js') }}"></script>
<script src="{{ URL('js/common.js') }}"></script>
<script>
    //轮播图
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    $(function(){
        //轮播左边的分类
        $('.category>.each_category').hover(function(){
            $('.category>.each_category').find('.category_detail').hide();
            $(this).find('.category_detail').show();
        });
        $('.category').mouseleave(function () {
            $('.category>.each_category').find('.category_detail').hide();
        });
    });
</script>
</body>
</html>