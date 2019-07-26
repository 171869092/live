<html>
<head>
    <meta charset="utf-8" />
    <meta content="webkit" name="renderer" />
    <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="upgrade-insecure-requests" http-equiv="Content-Security-Policy" />
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/application.css') }}">
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- [if lt IE 9]>
    <script type = 'text/javascript' src = '/assets/IE9.js'></script>
    <![endif]-->
    <title>订单查询</title>
</head>
<body data-current_user="true" data-exchange_rate="6.87" data-user_status="2" id="sells_orders_index">
<nav class="left_sidebar">
    <div class="left_bar_close"></div>
    <div class="logo-container">
        <a href="/"><img src="https://cdn-resources-aliyun.kjds.com/assets/logo_white-eb3350a5fcb70a24d95ef4fc7392f7d8.png" alt="Logo white" /></a>
    </div>
    <div class="option-box hover-box">
        <a href="../users/basic_msg.html"><img src="https://cdn-resources-aliyun.kjds.com/assets/user_default_avatar-4e570b12afe281b3e0cee7b2079e8abc.png" alt="User default avatar" />
            <div class="name">
                个人中心
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="../users/basic_msg.html">基本资料</a>
            </div>
            <div class="each-item">
                <a href="../users/security.html">账号安全</a>
            </div>
            <div class="each-item">
                <a href="../users/subscribe.html">我的订阅</a>
            </div>
            <div class="each-item">
                <a href="../users/custom.html">页数设置</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="../members/members.html"><img src="https://cdn-resources-aliyun.kjds.com/assets/member_icon-954804cff28697bdf9dae6fc05f81426.png" alt="Member icon" />
            <div class="name">
                我的会员
            </div></a>
    </div>
    <div class="option-box hover-box">
        <a href="javascript:void(0);"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon10-5c2866878238693b4f1598fc2a3af3e8.png" alt="Icon10" />
            <div class="name">
                账号授权
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="../platforms/b2c.html">B2C账号授权</a>
            </div>
            <div class="each-item">
                <a href="../platforms/auth_logistics.html">物流账号授权</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="../publish/products.html"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon2-1eff06d5ed25119d8303581f95aa5aa8.png" alt="Icon2" />
            <div class="name">
                一键刊登
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="../publish/products.html">我的刊登商品</a>
            </div>
            <div class="each-item">
                <a href="../publish/freight_templates.html">eBay物流模板</a>
            </div>
        </div>
    </div>
    <div class="option-box hover-box">
        <a href="../download/download.html"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon2-1eff06d5ed25119d8303581f95aa5aa8.png" alt="Icon2" />
            <div class="name">
                数据包下载
            </div></a>
    </div>
    <div class="option-box hover-box">
        <a href="../inventories/inventories.html"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon2-1eff06d5ed25119d8303581f95aa5aa8.png" alt="Icon2" />
            <div class="name">
                库存预警
            </div></a>
    </div>
    <div class="option-box hover-box">
        <a href="../orders/orders_search.html"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon3-7ef36eb63ff68c53ba11e47b70cba6f1.png" alt="Icon3" />
            <div class="name">
                订单管理
            </div></a>
        <div class="hide-box">
            <div class="each-item">
                <a href="orders_search.html">订单查询</a>
            </div>
            <div class="each-item">
                <a href="abnormal_order.html">异常订单</a>
            </div>
            <div class="each-item">
                <a href="overtime_order.html">超时订单</a>
            </div>
            <div class="each-item">
                <a href="bounces.html">退件查询</a>
            </div>
            <div class="each-item">
                <a class="import_order" href="import_orders.html">批量下单</a>
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
                <a href="../accounts/personal_account.html">个人账户</a>
            </div>
            <div class="each-item">
                <a href="../accounts/payment_records.html">付款记录</a>
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
                <a href="../sales_analysis/sales_analysis.html" style="min-height: inherit; line-height: 55px;">销售分析</a>
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
                <a href="../customer_services/help.html">帮助</a>
            </div>
            <div class="each-item">
                <a href="../customer_services/suggest.html">建议</a>
            </div>
            <div class="each-item">
                <a href="../customer_services/complaint.html">投诉</a>
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
                <a href="../files/export_file.html">文件导出</a>
            </div>
            <div class="each-item">
                <a href="../files/import_file.html">文件导入</a>
            </div>
        </div>
    </div>
</nav>
<div class="common_header">
    <div class="main-container">
        <a class="header_logo" href="/"></a>
        <ul class="show-platform">
            <li><a href="/">首页</a></li>
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
<div class="right_sidebar">
    <div class="service" id="CampBizQQWPA">
        <a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDE4NzA1NV80NzY0OTNfODAwMTg3MDU1XzJf" target="_blank">在线客服</a>
    </div>
    <div class="back_top">
        <a>返回顶部</a>
    </div>
</div>
<div class="main-container">
    <div class="center-container">
        <div class="cover-bg"></div>
        <div class="state-name">
            <span>全部</span>订单
        </div>
        <div class="search-container">
            <div class="each-box">
                <div class="left">
                    创建时间
                </div>
                <div class="right">
                    <div class="time-box">
                        <input class="form_datetime date_input" data-date="" data-date-format="yyyy-mm-dd" id="datepicker-s" />
                        <div class="icon-box">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </div>
                    </div>——
                    <div class="time-box">
                        <input class="to_datetime date_input" data-date="" data-date-format="yyyy-mm-dd" id="datepicker-e" />
                        <div class="icon-box">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="each-box">
                <div class="left">
                    平台
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group platform">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="platform" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu">
                            <li><a>全部</a></li>
                            <li><a data-value="1" href="javascript:void(0);">eBay</a></li>
                            <li><a data-value="27" href="javascript:void(0);">Wish</a></li>
                            <li><a data-value="2" href="javascript:void(0);">AliExpress</a></li>
                            <li><a data-value="50" href="javascript:void(0);">Shopee</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="each-box">
                <div class="left">
                    账号
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group account">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="account" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu">
                            <li><a data-id="-1" data-value="-1">全部</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="each-box margin0 pull-right">
                <div class="left">
                    站点
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group site">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="site" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu">
                            <li><a>全部</a></li>
                            <li><a data-value="1" href="javascript:void(0);">美国</a></li>
                            <li><a data-value="6" href="javascript:void(0);">马来西亚</a></li>
                            <li><a data-value="7" href="javascript:void(0);">台湾</a></li>
                            <li><a data-value="8" href="javascript:void(0);">印尼</a></li>
                            <li><a data-value="9" href="javascript:void(0);">泰国</a></li>
                            <li><a data-value="10" href="javascript:void(0);">新加坡</a></li>
                            <li><a data-value="11" href="javascript:void(0);">菲律宾</a></li>
                            <li><a data-value="12" href="javascript:void(0);">越南</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="condition-search clear">
                <div class="condition-box btn-group own_btn-group">
                    <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="condition" type="hidden" /><span class="text text_limit">请选择</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                    <ul class="dropdown-menu own_dropdown-menu">
                        <li><a data-options_type="order_number">订单编号</a></li>
                        <li><a data-options_type="art_no">原始货号</a></li>
                        <li><a data-options_type="product_name">商品名称</a></li>
                        <li><a data-options_type="contact_name">收货人姓名</a></li>
                        <li><a data-options_type="contact_phone">收货人手机</a></li>
                        <li><a data-options_type="contact_telephone">收货人座机</a></li>
                        <li><a data-options_type="number">运单号</a></li>
                        <li><a data-options_type="b2c_order_id">原始订单号</a></li>
                        <li><a data-options_type="internal_tracking_no">转单号</a></li>
                        <li><a data-options_type="sku_code">刊登货号</a></li>
                        <li><a data-options_type="import_order_number">B2C订单号</a></li>
                        <li><a data-options_type="buyer_user_id">买家ID</a></li>
                    </ul>
                </div>
                <input id="condition_value" type="text" />
                <div class="each-box upload_status_part">
                    <div class="left">
                        运单回传
                    </div>
                    <div class="right">
                        <div class="btn-group own_btn-group upload_shipping">
                            <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="upload_status" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                            <ul class="dropdown-menu own_dropdown-menu">
                                <li><a>全部</a></li>
                                <li><a data-value="already_uploaded" href="javascript:void(0);">已回传</a></li>
                                <li><a data-value="not_uploaded" href="javascript:void(0);">未回传</a></li>
                                <li><a data-value="upload_failed" href="javascript:void(0);">回传失败</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="each-box logistic-type">
                    <div class="left">
                        物流方式
                    </div>
                    <div class="select2-container" id="s2id_logisitc_id">
                        <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-1">全部</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a>
                        <label for="s2id_autogen1" class="select2-offscreen"></label>
                        <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-1" id="s2id_autogen1" />
                        <div class="select2-drop select2-display-none select2-with-searchbox">
                            <div class="select2-search">
                                <label for="s2id_autogen1_search" class="select2-offscreen"></label>
                                <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-1" id="s2id_autogen1_search" placeholder="" />
                            </div>
                            <ul class="select2-results" role="listbox" id="select2-results-1">
                            </ul>
                        </div>
                    </div>
                    <select id="logisitc_id" name="logisitc_id" tabindex="-1" title="" class="select2-offscreen"><option value="">全部</option><option value="94">FedEx Smart Post (Max 448g) </option><option value="289">Fedex Smart post</option><option value="15">燕文-大陆DHL</option><option value="301">燕文-香港邮政平邮小包</option><option value="300">燕文-香港邮政挂号小包</option><option value="29">燕文-中英YODEL小包专线</option><option value="31">燕文-燕特快</option><option value="297">USPS First Class</option><option value="18">燕文-燕邮宝挂号</option><option value="6">燕文-中国邮政挂号小包</option><option value="153">Yodel Home 72 Service</option><option value="165">DHL Global Forwarding Service</option><option value="159">UPS 3rd Day Select–Residential Service</option><option value="9">燕文-中国邮政SAL标准航空件大包</option><option value="270">FedEx Ground (Overlength)</option><option value="183">燕文-德国邮政挂号小包（新加坡）</option><option value="315">燕文-航空专线追踪小包-特货</option><option value="309">燕文-中国邮政挂号小包（江苏）</option><option value="118">DE Post Non-tracked Small Letter Service</option><option value="129"> Toll IPEC</option><option value="168">USPS Priority Mail（Over450g）</option><option value="119">DE Post Non-tracked International (Europe) Service</option><option value="299">4PX-新加坡邮政平邮小包</option><option value="296">标准物流</option><option value="347">Shopee-SLS（Shopee平台专用）</option><option value="298">4PX-新加坡邮政挂号小包</option><option value="87">FedEx Smart Post (Max 4535g) </option><option value="292">eDS易递宝-香港DHL 跨境电商包裹（eBay平台专用）</option><option value="295">eDS易递宝-上海DHL 跨境电商包裹（eBay平台专用）</option><option value="63">中国邮政挂号小包</option><option value="28">燕文-中英YODEL标准专线</option><option value="30">燕文-燕文专线</option><option value="130"> Toll Priority</option><option value="303">UPS Ground</option><option value="304">DHL Global Mail</option><option value="156">XDP 2 Man Delivery Service</option><option value="46">UBI-印度专线</option><option value="161">USPS First Class Mail Tracked Service</option><option value="316">万色-Wise美国快线</option><option value="308">燕文-中国邮政平邮小包（江苏）</option><option value="312">燕文-Wish邮中邮平邮小包（杭州）</option><option value="305">燕文-航空专线追踪小包-普货</option><option value="319">USPS</option><option value="318">UPS</option><option value="65">国际E邮宝</option><option value="195">燕文-中国邮政挂号小包（义乌）</option><option value="23">燕文-德国邮政挂号小包</option><option value="198">DHL Global Mail</option><option value="349">Shopee-LWE国内集货（Shopee平台专用）</option><option value="17">燕文-燕邮宝平邮</option><option value="11">燕文-国际E邮宝</option><option value="14">燕文-香港DHL</option><option value="144">Royal Mail Parcel 48 Untracked Service</option><option value="146">DPD International Small Parcels Service</option><option value="155">XDP 1 Man Parcel Service</option><option value="197">燕文-中国邮政平邮小包（义乌）</option><option value="68">燕文-荷兰邮政平邮小包（配电）</option><option value="64">中国邮政平邮小包</option><option value="27">燕文-新加坡邮政平邮小包</option><option value="22">燕文-德国邮政平邮小包</option><option value="348">Shopee-SLS（Shopee平台专用）</option><option value="77">中国邮政平邮</option><option value="291">eDS易递宝-香港平邮（eBay平台专用）</option><option value="293">eDS易递宝-马来西亚平邮（eBay平台专用）</option><option value="350">Shopee-CK1中邮挂号国内集货（Shopee平台专用）</option><option value="201">UBI-欧洲小包（半程查件）</option><option value="12">燕文-EMS</option><option value="274">无忧物流-深圳集货（AliExpress平台专用）</option><option value="99">FedEx Smart Post (Max 448g)</option><option value="351">蝦皮店配711（Shopee平台专用）</option><option value="42">UBI-加拿大特快专线</option><option value="25">燕文-土耳其邮政挂号小包</option><option value="117">DE Post Non-tracked Large Letter Service</option><option value="10">燕文-新加坡邮政挂号小包</option><option value="352">Shopee-顺丰国际（Shopee平台专用）</option><option value="126">DHL Freight Domestic Service</option><option value="166">DHL Express International Service</option><option value="134">AUPOST - Parcel Post (No Registration)</option><option value="131">AU Post Express</option><option value="135">AUPOST - Parcel Post (With Registration)</option><option value="133">AUPOST - Large Letter (No Registration)</option><option value="132">AUPOST - Small Letter (No Registration) </option><option value="95">DHL Express Worldwide</option><option value="137">Royal Mail Large Letter 24 Untracked Service </option><option value="39">UBI-澳大利亚半程查件</option><option value="204">UBI-DHL小包全程查件</option><option value="81">燕文-Wish邮中邮平邮小包（Wish平台专用）</option><option value="19">燕文-荷兰邮政平邮小包</option><option value="355">UBI-Wish欧洲小包（半程查件）（Wish平台专用）</option><option value="281">邮局-E邮宝（Wish平台专用）</option><option value="145">DPD Normal Parcels Service</option><option value="100">USPS First Class</option><option value="152">Yodel Home 24 Service </option><option value="124">DHL Paket Service</option><option value="90">FedEx Ground (Oversize)</option><option value="98">FedEx Smart Post (Max 448g)</option><option value="127">DHL Freight (Europe) Service</option><option value="288">万色-Wish邮DHLe经济小包（Wish平台专用）</option><option value="356">UBI-Wish欧洲小包（全程查件）（Wish平台专用）</option><option value="13">燕文-E特快</option><option value="138">Royal Mail 48(Untracked) Service</option><option value="176">燕文-中国邮政挂号小包（上海）</option><option value="172">USPS First Class</option><option value="69">燕文-荷兰邮政挂号小包（配电）</option><option value="277">燕文-中国邮政挂号小包（北京）</option><option value="147">DPD International Normal Parcels Service</option><option value="72">国际航空小包挂号</option><option value="73">国际空运水陆路小包平邮</option><option value="74">国际空运水陆路小包挂号</option><option value="75">台港澳小包-平邮</option><option value="76">台港澳小包-挂号</option><option value="78">中国邮政挂号</option><option value="140">Royal Mail 2nd class tracked &amp; signed</option><option value="320">经济物流</option><option value="321">快速物流</option><option value="35">UBI-俄罗斯半程查件</option><option value="154">Yodel Home Mini Service</option><option value="160">UPS Next Day Air Saver Service</option><option value="91">FedEx 2 Day</option><option value="8">燕文-中国邮政航空大包</option><option value="97">USPS First Class</option><option value="120">DE Post International (Europe)</option><option value="128">DHL Paket International Service</option><option value="139">Royal Mail 2nd class tracked</option><option value="96">FedEx International Economy</option><option value="148">UPS Freight Service </option><option value="92">USPS Priority Mail</option><option value="279">燕文-国际E邮宝（特货）</option><option value="149">P2P International Parcels Tracked Service</option><option value="121">DPD Domestic Small Parcels Service</option><option value="86">USPS First Class</option><option value="5">燕文-荷兰邮政挂号小包</option><option value="16">燕文-中俄SPSR专线</option><option value="196">燕文-国际E邮宝（江苏）</option><option value="329">燕文-国际E邮宝（苏南）</option><option value="317">UBI-欧洲小包（全程查件）</option><option value="71">国际航空小包平邮</option><option value="20">燕文-中国邮政平邮小包</option><option value="113">FedEx 2Day</option><option value="122">DPD Domestic Normal Parcels Service</option><option value="150">P2P International Parcels Untracked (Flats)</option><option value="158">UPS Ground Service</option><option value="141">Royal Mail 1st class tracked</option><option value="34">燕文-中国邮政俄罗斯水陆路挂号小包（北京）</option><option value="93">FedEx Ground (HI/AK/PR)</option><option value="162">USPS Priority Mail Parcels Tracked Service</option><option value="111">FedEx Smart Post</option><option value="275">Shopee-集货（Shopee平台专用）</option><option value="89">FedEx Ground (Overlength)</option><option value="88">FedEx Ground</option><option value="151">P2P International Parcels Untracked (Packets)</option><option value="123">DPD International Parcels Service</option><option value="276">kikuu-广州集货（KIKUU平台专用）</option><option value="163">USPS First Class Mail Tracked International Service</option><option value="142">Royal Mail 1st class tracked &amp; signed</option><option value="82">燕文-Wish邮中邮挂号小包（Wish平台专用）</option><option value="84">燕文-Wish邮中邮平邮北京仓</option><option value="157">UPS SurePost Service</option><option value="143">Royal Mail Parcel 24 Untracked Service</option><option value="164">USPS Priority Mail Parcels Tracked International &nbsp;Service</option><option value="136">AU Post eParcel</option><option value="167">FedEx Smart Post（Over450g）</option><option value="273">无忧物流-上海集货（AliExpress平台专用）</option><option value="322">万色-Wish邮WiseExpress 专线（Wish平台专用）</option><option value="62">UBI-俄罗斯专线(快递服务)</option><option value="115">USPS Priority Mail</option><option value="171">DHL Global Mail</option><option value="114">USPS First Class</option><option value="85">DHL Global Mail</option><option value="193">燕文-中国邮政挂号小包（宁波）</option><option value="203">UBI-DHL小包半程查件</option><option value="194">燕文-中国邮政平邮小包（宁波）</option><option value="181">燕文-中国邮政平邮小包（中山）</option><option value="170">FedEx Smart Post (Max 4535g) </option><option value="328">邮局-E邮宝瑞典路向（Wish平台专用）</option><option value="112">FedEx Ground</option><option value="182">燕文-中国邮政挂号小包（中山）</option><option value="205">UBI-墨西哥专线</option><option value="59">UBI-新西兰专线(全程查件)</option><option value="200">UBI-德国专线</option><option value="202">UBI-美国专线</option><option value="206">UBI-新马专线</option><option value="272">lazada-深圳集货（LAZADA平台专用）</option><option value="38">UBI-澳洲专线</option><option value="310">燕文-线上EUB（eBay平台专用）</option><option value="357">燕文-Wish国际E邮宝（杭州）（Wish平台专用）</option><option value="358">燕文-Wish国际E邮宝（北京）（Wish平台专用）</option><option value="360">燕文-专线平邮小包-普货</option><option value="282">万色-Wish邮DLE（Wish平台专用）</option><option value="311">燕文-Wish邮中邮挂号小包（杭州）</option><option value="363">CNE-测试渠道（切勿使用）</option><option value="359">测试专用E邮宝（深圳）（测试专用，切勿选择）</option><option value="361">燕文-专线平邮小包-特货</option><option value="330">国内采购</option><option value="334">燕文-Wish航空挂号小包-特货（Wish平台专用）</option><option value="331">燕文-Wish航空经济小包-普货（Wish平台专用）</option><option value="344">燕文-Wish专线追踪小包-特货（Wish平台专用）</option><option value="332">燕文-Wish航空经济小包-特货（Wish平台专用）</option><option value="83">线上EUB （eBay平台专用）</option><option value="325">万色-Wish邮EPC（Wish美国专用，需申请开通）</option><option value="340">SpeedPAK-线上物流（eBay平台专用）</option><option value="335">SpeedPAK-标准服务（eBay平台专用）</option><option value="7">燕文-马来西亚邮政挂号小包</option><option value="362">燕文-专线优先小包</option><option value="345">燕文-Wish专线平邮小包-普货（Wish平台专用）</option><option value="177">燕文-韩国E邮宝</option><option value="346">燕文-Wish专线平邮小包-特货（Wish平台专用）</option><option value="178">燕文-国际E邮宝（北京）</option><option value="283">万色-Wish邮中邮挂号小包</option><option value="337">SpeedPAK-经济服务（eBay平台专用）</option><option value="180">燕文-中国邮政挂号小包（华南）</option><option value="32">燕文-中德专线</option><option value="313">燕文-中国邮政挂号小包（南京）</option><option value="343">燕文-Wish专线追踪小包-普货（Wish平台专用）</option><option value="342">燕文-Wish燕邮宝挂号（Wish平台专用）</option><option value="341">燕文-Wish燕邮宝平邮（Wish平台专用）</option><option value="333">燕文-Wish航空挂号小包-普货（Wish平台专用）</option><option value="314">燕文-中国邮政平邮小包（南京）</option><option value="37">UBI-墨西哥挂号小包</option><option value="36">UBI-巴西挂号小包</option><option value="61">UBI-新西兰专线(半程查件)</option><option value="364">UBI-Wish邮加拿大特惠专线（Wish平台专用）</option><option value="285">万色-Wish邮英伦速邮（Wish平台专用）</option><option value="294">eDS易递宝-线上中国邮政平邮小包+（上海）（eBay平台专用）</option><option value="284">万色-Wish邮中邮平邮小包</option><option value="280">万色-Wish达（Wish平台专用）</option><option value="327">万色-Wish邮中邮平邮小包瑞典路向（Wish平台专用）</option><option value="326">万色-Wish邮中邮挂号小包瑞典路向（Wish平台专用）</option><option value="324">万色-Wish邮YunExpress专线（Wish平台专用）</option><option value="323">万色-Wish邮中外运专线（Wish平台专用）</option><option value="287">万色-Wish邮欧洲经济小包（Wish平台专用）</option><option value="286">万色-Wish邮欧洲标准小包（Wish平台专用）</option><option value="278">燕文-中国邮政平邮小包（北京）</option><option value="179">燕文-中国邮政平邮小包（华南）</option><option value="175">燕文-中国邮政平邮小包（上海）</option><option value="26">燕文-德国邮政平邮小包（新加坡）</option><option value="24">燕文-土耳其邮政平邮小包</option><option value="21">燕文-马来西亚邮政平邮小包</option><option value="365">UBI-英国专线</option><option value="290">eDS易递宝-线上中国邮政平邮小包+（eBay平台专用）</option><option value="385">经济物流</option><option value="367">蝦皮店配全家（Shopee平台专用）</option><option value="366">蝦皮宅配（Shopee平台专用）</option><option value="368">优速-蝦皮店配711（Shopee平台专用）</option><option value="369">优速-蝦皮店配全家（Shopee平台专用）</option><option value="370">优速-蝦皮宅配（Shopee平台专用）</option><option value="371">燕文-航空易派小包-普货</option><option value="372">燕文-航空易派小包-特货</option><option value="386">标准物流</option><option value="387">快速物流</option><option value="384">DHL快速物流</option><option value="383">DHL标准物流</option><option value="382">DHL经济物流</option><option value="381">FedEx快速物流</option><option value="380">FedEx标准物流</option><option value="379">FedEX经济物流</option><option value="378">UPS快速物流</option><option value="377">UPS标准物流</option><option value="376">UPS经济物流</option><option value="375">USPS快速物流</option><option value="374">USPS标准物流</option><option value="373">USPS经济物流</option><option value="393">UPS快速物流</option><option value="392">UPS标准物流</option><option value="391">UPS经济物流</option><option value="390">FedEx快速物流</option><option value="389">FedEx标准物流</option><option value="388">FedEX经济物流</option><option value="394">DHL</option></select>
                </div>
                <div class="each-box destination-country pull-right">
                    <div class="left">
                        目的国家
                    </div>
                    <div class="select2-container" id="s2id_country_id">
                        <a href="javascript:void(0)" class="select2-choice" tabindex="-1"> <span class="select2-chosen" id="select2-chosen-2">全部</span><abbr class="select2-search-choice-close"></abbr> <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a>
                        <label for="s2id_autogen2" class="select2-offscreen"></label>
                        <input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-2" id="s2id_autogen2" />
                        <div class="select2-drop select2-display-none select2-with-searchbox">
                            <div class="select2-search">
                                <label for="s2id_autogen2_search" class="select2-offscreen"></label>
                                <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-2" id="s2id_autogen2_search" placeholder="" />
                            </div>
                            <ul class="select2-results" role="listbox" id="select2-results-2">
                            </ul>
                        </div>
                    </div>
                    <select id="country_id" name="country_id" tabindex="-1" title="" class="select2-offscreen"><option value="">全部</option><option value="13227">中国</option><option value="16516">美国</option><option value="16526">英国</option><option value="16512">法国</option><option value="16528">俄罗斯</option><option value="16511">德国</option><option value="16506">澳大利亚</option><option value="16514">加拿大</option><option value="16525">意大利</option><option value="16520">瑞典</option><option value="16518">挪威</option><option value="16510">丹麦</option><option value="16610">日本</option><option value="16517">墨西哥</option><option value="16508">比利时</option><option value="16523">西班牙</option><option value="16604">印度</option><option value="16507">巴西</option><option value="16552">保加利亚</option><option value="16554">布隆迪</option><option value="16555">喀麦隆</option><option value="16558">开曼群岛(英)</option><option value="16648">瑙鲁</option><option value="16559">中非</option><option value="16563">哥伦比亚</option><option value="16564">科摩罗</option><option value="16568">古巴</option><option value="16575">萨尔瓦多</option><option value="16576">赤道几内亚</option><option value="16577">厄立特里亚</option><option value="16578">爱沙尼亚</option><option value="16579">埃塞俄比亚</option><option value="16582">斐济</option><option value="16583">芬兰</option><option value="16586">冈比亚</option><option value="16590">希腊</option><option value="16591">格陵兰岛</option><option value="16596">几内亚</option><option value="16599">圭亚那</option><option value="16611">约旦</option><option value="16612">柬埔寨</option><option value="16614">肯尼亚</option><option value="16615">基里巴斯</option><option value="16538">阿鲁巴岛</option><option value="16539">奥地利</option><option value="16540">阿塞拜疆</option><option value="16542">孟加拉国</option><option value="16543">巴巴多斯</option><option value="16544">白俄罗斯</option><option value="16694">韩国</option><option value="16557">佛得角</option><option value="16560">乍得</option><option value="16572">多米尼加共和国</option><option value="16565">刚果</option><option value="16566">哥斯达黎加</option><option value="16567">克罗地亚</option><option value="16571">吉布提</option><option value="16684">塞尔维亚</option><option value="16573">厄瓜多尔</option><option value="16574">埃及</option><option value="16642">黑山</option><option value="16585">加蓬</option><option value="16587">格鲁吉亚</option><option value="16588">加纳</option><option value="16589">直布罗陀(英)</option><option value="16592">格林纳达</option><option value="16594">关岛(美)</option><option value="16595">危地马拉</option><option value="16598">法属圭亚那</option><option value="16600">海地</option><option value="16602">匈牙利</option><option value="16603">冰岛</option><option value="16607">伊拉克</option><option value="16608">科特迪瓦</option><option value="16609">牙买加</option><option value="16616">科威特</option><option value="16619">拉脱维亚</option><option value="16620">黎巴嫩</option><option value="16624">列支敦士登</option><option value="16625">立陶宛</option><option value="16627">马其顿</option><option value="16629">马拉维</option><option value="16631">马尔代夫</option><option value="16633">马耳他</option><option value="16635">马提尼克(法)</option><option value="16636">毛里塔尼亚</option><option value="16637">毛里求斯</option><option value="16638">马约特岛</option><option value="16640">摩纳哥</option><option value="16641">蒙古</option><option value="16556">加那利群岛</option><option value="16643">蒙特塞拉特岛(英)</option><option value="16644">摩洛哥</option><option value="16645">莫桑比克</option><option value="16647">纳米比亚</option><option value="16653">尼加拉瓜</option><option value="16654">尼日尔</option><option value="16655">尼日利亚</option><option value="16656">纽埃岛(新)</option><option value="16660">阿曼</option><option value="16661">巴基斯坦</option><option value="16662">帕劳(美)</option><option value="16666">秘鲁</option><option value="16667">菲律宾</option><option value="16671">留尼汪岛</option><option value="16673">卢旺达</option><option value="16679">西萨摩亚</option><option value="16658">朝鲜</option><option value="16696">苏丹</option><option value="16703">泰国</option><option value="16536">安提瓜和巴布达</option><option value="16580">福克兰群岛</option><option value="16597">几内亚比绍</option><option value="16606">伊朗</option><option value="16618">老挝</option><option value="16621">莱索托</option><option value="16623">利比亚</option><option value="16628">马达加斯加</option><option value="16632">马里</option><option value="16646">缅甸</option><option value="16649">尼泊尔</option><option value="16651">新喀里多尼亚群岛(法)</option><option value="16652">新西兰</option><option value="16663">巴拿马</option><option value="16665">巴拉圭</option><option value="16668">波多黎各(美)</option><option value="16669">卡塔尔</option><option value="16670">摩尔多瓦</option><option value="16672">罗马尼亚</option><option value="16674">圣赫勒拿</option><option value="16676">圣卢西亚</option><option value="16677">圣皮埃尔岛及密克隆岛</option><option value="16739">法属波利尼西亚</option><option value="16682">沙特阿拉伯</option><option value="16683">塞内加尔</option><option value="16685">塞舌尔</option><option value="16687">新加坡</option><option value="16688">斯洛伐克</option><option value="16689">斯洛文尼亚</option><option value="16690">所罗门群岛</option><option value="16691">索马里</option><option value="16692">南非</option><option value="16697">苏里南</option><option value="16698">斯瓦尔巴群岛(挪)</option><option value="16699">斯威士兰</option><option value="16700">瑞士</option><option value="16702">塔吉克斯坦</option><option value="16705">梵蒂冈</option><option value="16706">东帝汶</option><option value="16708">托克劳群岛(新)</option><option value="16710">特立尼达和多巴哥</option><option value="16713">特克斯和凯科斯群岛(英)</option><option value="16714">图瓦卢</option><option value="16715">乌干达</option><option value="16716">阿拉伯联合酋长国</option><option value="16717">坦桑尼亚</option><option value="16719">乌拉圭</option><option value="16720">乌兹别克斯坦</option><option value="16721">瓦努阿图</option><option value="16722">委内瑞拉</option><option value="16723">越南</option><option value="16657">诺福克岛(澳)</option><option value="16727">西撒哈拉</option><option value="16732">布韦岛</option><option value="16734">英属印度洋领地</option><option value="16735">皮特凯恩群岛</option><option value="16736">巴勒斯坦</option><option value="16745">扎伊尔</option><option value="16746">美属太平洋各群岛</option><option value="16747">特里斯达库尼亚群岛</option><option value="16748">伊夫尼</option><option value="16752">南极洲</option><option value="16753">格恩西岛</option><option value="16754">泽西岛</option><option value="16756">澳门</option><option value="16524">以色列</option><option value="16532">东萨摩亚(美)</option><option value="16534">安哥拉</option><option value="16535">安圭拉岛(英)</option><option value="16550">波斯尼亚和黑塞哥维那</option><option value="16569">塞浦路斯</option><option value="16593">瓜德罗普岛(法)</option><option value="16622">利比里亚</option><option value="16650">荷属安的列斯群岛</option><option value="16675">圣克里斯托弗和尼维斯</option><option value="16680">圣马力诺</option><option value="16681">圣多美和普林西比</option><option value="16704">巴哈马国</option><option value="16707">多哥</option><option value="16709">汤加</option><option value="16711">突尼斯</option><option value="16712">土库曼斯坦</option><option value="16725">维尔京群岛(美)</option><option value="16726">瓦里斯和富士那群岛(法)</option><option value="16728">也门</option><option value="16729">赞比亚</option><option value="16731">文莱</option><option value="16733">赫德岛和麦克唐纳群岛</option><option value="16737">法属南部和南极领地</option><option value="16740">库克群岛</option><option value="16738">阿森松岛(英)</option><option value="16744">英属维尔京群岛</option><option value="16742">北马里亚纳</option><option value="16741">科科斯(基林)群岛</option><option value="16751">复活岛</option><option value="16758">南乔治亚岛和南桑德韦奇岛</option><option value="16743">圣文森特和格林纳丁斯</option><option value="16513">荷兰</option><option value="16515">捷克</option><option value="16537">亚美尼亚</option><option value="16541">巴林</option><option value="16553">布基纳法索</option><option value="16561">圣诞岛</option><option value="16570">刚果(金)</option><option value="16581">法罗群岛(丹)</option><option value="16601">洪都拉斯</option><option value="16613">哈萨克斯坦</option><option value="16617">吉尔吉斯斯坦</option><option value="16626">卢森堡</option><option value="16634">马绍尔群岛</option><option value="16664">巴布亚新几内亚</option><option value="16686">塞拉利昂</option><option value="16695">斯里兰卡</option><option value="16701">叙利亚</option><option value="16718">美国本土外小岛屿</option><option value="16730">津巴布韦</option><option value="16749">约翰斯敦岛</option><option value="16639">密克罗尼西亚(美)</option><option value="20408">亚速尔群岛</option><option value="20409">马德拉群岛</option><option value="16755">中国香港</option><option value="16757">台湾</option><option value="16630">马来西亚</option><option value="16605">印度尼西亚</option><option value="58855">多米尼亚</option><option value="16504">阿根廷</option><option value="16505">爱尔兰</option><option value="16509">波兰</option><option value="16519">葡萄牙</option><option value="16521">土耳其</option><option value="16522">乌克兰</option><option value="16527">智利</option><option value="16529">阿富汗</option><option value="16530">阿尔巴尼亚</option><option value="16531">阿尔及利亚</option><option value="16533">安道尔</option><option value="16545">伯利兹</option><option value="16546">贝宁</option><option value="16547">百慕大群岛(英)</option><option value="16548">不丹</option><option value="16549">玻利维亚</option><option value="16551">博茨瓦纳</option></select>
                </div>
                <div class="each-box pay-time">
                    <div class="left">
                        支付时间
                    </div>
                    <div class="right">
                        <div class="time-box-pay">
                            <input class="pay_form_datetime date_input_pay" data-date-format="yyyy-mm-dd" id="datepicker-p-s" p-data-date="" />
                            <div class="icon-box">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </div>
                        </div>——
                        <div class="time-box-pay">
                            <input class="pay_to_datetime date_input_pay" data-date-format="yyyy-mm-dd" id="datepicker-p-e" p-data-date="" />
                            <div class="icon-box">
                                <i class="glyphicon glyphicon-calendar"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="search-icon" data-search-type="top_search">
                    <i class="glyphicon glyphicon-search"></i>
                    <span>开始查询</span>
                </div>
                <a class="sync-icon" href="/sells/orders/sync_order">手动同步订单</a>
            </div>
        </div>
        <input class="current-pagesize" type="hidden" value="10" />
        <div class="option-nav">
            <input id="status" name="status" type="hidden" value="all_status" />
            <a class="all_status click-nav" data-status="all_status"><span>全部订单</span><span>0</span></a>
            <a class="waiting_payment" data-status="waiting_payment"><span>待付款</span><span>0</span></a>
            <a class="waiting_shipment" data-status="waiting_shipment"><span>待发货</span><span>0</span></a>
            <a class="shipped_waiting_confirm" data-status="shipped_waiting_confirm"><span>已发货</span><span>0</span></a>
            <a class="refunded" data-status="refunded"><span>已退款</span><span>0</span></a>
            <a class="bad" data-status="bad"><span>坏单</span><span>0</span></a>
        </div>
        <div class="orders-show-container">
            <div class="order_list">
                <div class="top">
                    <div class="check-box" style="display: none;">
                        <i class="glyphicon glyphicon-ok"></i>
                    </div>
                    <div class="pt-info">
                        商品信息
                    </div>
                    <div class="pt-price">
                        单价
                    </div>
                    <div class="pt-num">
                        数量
                    </div>
                    <div class="pt-total-price">
                        总价
                    </div>
                    <div class="pt-state">
                        <span><span>全部订单</span><span></span></span>
                        <i class="glyphicon glyphicon-chevron-down"></i>
                        <div class="hide-option">
                            <div class="item" data-status="all_status">
                                全部订单
                            </div>
                            <div class="item" data-status="waiting_payment">
                                待付款
                            </div>
                            <div class="item" data-status="waiting_shipment">
                                待发货
                            </div>
                            <div class="item" data-status="shipped_waiting_confirm">
                                已发货
                            </div>
                            <div class="item" data-status="completed">
                                已完成
                            </div>
                            <div class="item" data-status="cancelled">
                                已取消
                            </div>
                            <div class="item" data-status="refunded">
                                已退款
                            </div>
                            <div class="item" data-status="bad">
                                坏单
                            </div>
                        </div>
                    </div>
                    <div class="pt-platform">
                        平台
                    </div>
                    <div class="pt-operate">
                        操作
                    </div>
                </div>
                <div class="order_boxs">
                    <div class="empty-search-result">
                        <img src="https://cdn-resources-aliyun.kjds.com/assets/empty_search_result-56aeb108771c6de8ce8a82c63e4b2e09.png" alt="Empty search result" />
                        <span>没有查到符合条件的记录</span>
                    </div>
                    <div class="order-paginate"></div>
                    <div class="export-orders">
                        <a class="export-batch" data-target="#export-modal" href="javascript:void(0);" id="export_orders_batch">批量导出订单</a>
                    </div>
                    <div class="batch-post-waybill-record">
                        <a class="refresh_logistics_information" href="javascript:void(0);" id="refresh_information">批量手动回传运单</a>
                    </div>
                </div>
            </div>
            <form action="/sells/orders/pay_immediately" accept-charset="UTF-8" method="get">
                <input name="utf8" type="hidden" value="✓" />
                <input id="order_ids" name="order_ids" type="hidden" />
                <div class="order-bottom" style="display: none;">
                    <div class="bottom-total-price">
                        <div class="left-text">
                            <span>已选</span>
                            <span class="good-num"></span>
                            <span>件商品，共计</span>
                            <span class="fare">(含运费)：</span>
                        </div>
                        <div class="right-value">
                            <span>￥</span>
                            <span class="all-price-value"></span>
                        </div>
                    </div>
                    <div class="bottom-freight">
                        <div class="left-text">
                            <span>运费：</span>
                        </div>
                        <div class="right-value">
                            <span>￥</span>
                            <span class="freight-value"></span>
                        </div>
                    </div>
                    <div class="bottom-processing-fee">
                        <div class="left-text">
                            <span>处理费：</span>
                        </div>
                        <div class="right-value">
                            <span>￥</span>
                            <span class="processing-fee-value"></span>
                        </div>
                    </div>
                    <div class="batches-btn">
                        <span class="members-type-btn" data-is-power="true">批量付款</span>
                        <button class="pay" type="submit">批量付款</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="export-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="glyphicon glyphicon-remove-circle" data-dismiss="modal"></span>
            <div class="modal-body">
                <div class="title">
                    温馨提示
                </div>
                <div class="content-area">
                    <p>订单报表正在生成中，请耐心等待十五分钟后，点击左侧菜单的 “文件导出” 找到对应表格即可进行下载。</p>
                    <p>本页面可直接关闭。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="batch-post-waybill-number">
    <div class="modal-dialog">
        <div class="modal-content">
            <span class="glyphicon glyphicon-remove-circle" data-dismiss="modal"></span>
            <div class="modal-body">
                <div class="title">
                    温馨提示
                </div>
                <div class="content-area">
                    <p>正在向店铺批量手动回传运单。</p>
                    <p>您可以直接关闭此页面，稍后到店铺中查看回传结果。</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="shipping-number-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="title">
                    上传面单
                </div>
                <div class="content-area">
                    <div class="tip">
                        温馨提示：
                        <p>1.文件必须是PDF文件格式。</p>
                        <p>2.自取运单号的线上EUB，需到亚太物流后台手动点击“交运”。</p>
                    </div>
                    <div class="shipping-number">
                        <span>运单号：</span>
                        <input class="shipping-number-value" maxlength="32" placeholder="请输入运单号" />
                        <input class="shipping-id-value" type="hidden" />
                    </div>
                    <div class="file-upload-area">
                        <input accept="application/pdf" class="uploaded-file" type="file" />
                        <span>请选择面单</span>
                    </div>
                    <div class="file-preview-area hide-div">
                        <input class="file-url-store" type="hidden" />
                        <span class="file-title">文件：</span>
                        <span class="file-name"></span>
                        <div class="preview-file">
                            预览
                        </div>
                    </div>
                    <div class="btn-area">
                        <a class="confirm">确认上传</a>
                        <a class="cancel">取消</a>
                    </div>
                </div>
            </div>
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
<span role="status" aria-live="polite" class="select2-hidden-accessible"></span>
<span role="status" aria-live="polite" class="select2-hidden-accessible"></span>
<script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ URL::asset('js/common.js') }}"></script>
</body>
</html>