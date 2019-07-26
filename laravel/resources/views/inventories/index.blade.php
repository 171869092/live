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
    <title>库存预警</title>
</head>
<body data-current_user="true" data-exchange_rate="6.87" data-user_status="2" id="sells_inventories_index">
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
                <a href="../orders/orders_search.html">订单查询</a>
            </div>
            <div class="each-item">
                <a href="../orders/abnormal_order.html">异常订单</a>
            </div>
            <div class="each-item">
                <a href="../orders/overtime_order.html">超时订单</a>
            </div>
            <div class="each-item">
                <a href="../orders/bounces.html">退件查询</a>
            </div>
            <div class="each-item">
                <a class="import_order" href="../orders/import_orders.html">批量下单</a>
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
        <div class="state-name">
            <span>库存预警</span>
        </div>
        <div class="search-container">
            <div class="each-box">
                <div class="left">
                    预警级别
                </div>
                <div class="right">
                    <div class="level_box">
                        <div class="btn-group own_btn-group">
                            <button aria-expanded="false" aria-haspopup="true" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="text text_limit phcolor请选择"></span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                            <ul class="dropdown-menu own_dropdown_menu select_multiple" id="level">
                                <div class="search_group"></div>
                                <li>
                                    <div class="check_box">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </div><a data-value="无库存" href="javascript:void(0);">无库存</a></li>
                                <li>
                                    <div class="check_box">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </div><a data-value="库存紧张" href="javascript:void(0);">库存紧张</a></li>
                                <li>
                                    <div class="check_box">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </div><a data-value="库存充足" href="javascript:void(0);">库存充足</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="each-box title">
                <div class="left">
                    商品名称
                </div>
                <div class="right">
                    <input class="art_no" id="title" />
                </div>
            </div>
            <div class="each-box publish_art_no">
                <div class="left">
                    刊登货号
                </div>
                <div class="right">
                    <input class="publish_art_no" id="publish_art_no" />
                </div>
            </div>
            <div class="each-box">
                <div class="left">
                    原始货号
                </div>
                <div class="right">
                    <input class="art_no" id="art_no" />
                </div>
            </div>
            <div class="each-box publish_way">
                <div class="left">
                    刊登方式
                </div>
                <div class="right">
                    <div class="publish_box">
                        <div class="btn-group own_btn-group publish_way">
                            <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="publish_way" type="hidden" /><span class="text text_limit phcolor全部"></span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                            <ul class="dropdown-menu own_dropdown-menu">
                                <li><a data-id="-1" data-value="">全部</a></li>
                                <li><a data-value="publish_product">一键刊登</a></li>
                                <li><a data-value="download_data_packets">数据包下载</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="each-box platform">
                <div class="left">
                    刊登平台
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group platform">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="platform" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu" id="b2c_platform">
                            <li><a data-id=""> 全部</a></li>
                            <li><a data-value="1" href="javascript:void(0);">eBay</a></li>
                            <li><a data-value="2" href="javascript:void(0);">AliExpress</a></li>
                            <li><a data-value="27" href="javascript:void(0);">Wish</a></li>
                            <li><a data-value="50" href="javascript:void(0);">Shopee</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="each-box publish-account">
                <div class="left">
                    刊登账号
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group account">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="account" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu" id="b2c_platform_account">
                            <li><a data-id="">全部</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="each-box data_type">
                <div class="left">
                    数据包类型
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group account">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="data_type" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu">
                            <li><a data-value="">全部</a></li>
                            <li><a data-value="kjds_normal">越域大卖通用数据包</a></li>
                            <li><a data-value="dianxiaomi">店小秘数据包</a></li>
                            <li><a data-value="wish_normal">wish平台批量上传数据包</a></li>
                            <li><a data-value="mabang">马帮数据包</a></li>
                            <li><a data-value="shopee">Shopee数据包</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="each-box publish_time">
                <div class="left">
                    刊登/下载时间
                </div>
                <div class="right">
                    <div class="time-box">
                        <input class="form_datetime date_input" data-date="" data-date-format="yyyy-mm-dd" id="datepicker-s" />
                        <div class="icon-box">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </div>
                    </div>—
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
                    库存
                </div>
                <div class="right">
                    <div class="quantity">
                        <input class="publish_art_no" id="quantity-gt" />—
                        <input class="publish_art_no" id="quantity-lt" />
                    </div>
                </div>
            </div>
            <div class="each-box product_status">
                <div class="left">
                    越域大卖商品状态
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group product">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="product_status" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu">
                            <li></li>
                            <li><a data-value="">全部</a></li>
                            <li><a data-value="2">正在销售</a></li>
                            <li><a data-value="3">已下架</a></li>
                            <li><a data-value="4">在售（部分下架）</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="each-box sku_status">
                <div class="left">
                    越域大卖SKU状态
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group product">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="sku_status" type="hidden" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu">
                            <li></li>
                            <li><a data-value="">全部</a></li>
                            <li><a data-value="2">正在销售</a></li>
                            <li><a data-value="3">已下架</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="each-box warehouse_type">
                <div class="left">
                    仓库类型
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group product">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="warehouse_type" type="hidden" value="3" /><span class="text text_limit">海外仓</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu">
                            <li></li>
                            <li><a data-value="all">全部</a></li>
                            <li><a data-value="3" id="海外仓">海外仓</a></li>
                            <li><a data-value="2" id="越域直发仓">越域直发仓</a></li>
                            <li><a data-value="1" id="供应商直发">供应商直发</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="each-box countries">
                <div class="left country">
                    仓库所在国家
                </div>
                <div class="right">
                    <div class="btn-group own_btn-group product">
                        <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input id="country" type="hidden" value="" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                        <ul class="dropdown-menu own_dropdown-menu">
                            <li><a data-value="">全部</a></li>
                            <li><a data-value="16516">美国</a></li>
                            <li><a data-value="16506">澳大利亚</a></li>
                            <li><a data-value="16716">阿拉伯联合酋长国</a></li>
                            <li><a data-value="16755">中国香港</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="search-icon" data-search-type="top_search">
                <i class="glyphicon glyphicon-search"></i>
                <span>开始查询</span>
            </div>
        </div>
        <div class="content-area">
            <div class="table-container">
                <div class="scrolltable">
                    <table>
                        <thead>
                        <tr>
                            <th class="sku-img">SKU图片</th>
                            <th class="art_no">原始货号</th>
                            <th class="publish_art_no">刊登货号</th>
                            <th class="art_no">当前库存值</th>
                            <th class="art_no">库存预警值</th>
                            <th class="art_no">预警级别</th>
                            <th class="title">商品名称</th>
                            <th>父货号</th>
                            <th>SKU属性</th>
                            <th>越域大卖商品状态</th>
                            <th>越域大卖SKU状态</th>
                            <th>仓库类型</th>
                            <th class="warehouse">仓库所在国家</th>
                            <th class="art_no">刊登方式</th>
                            <th class="warehouse">刊登/下载平台</th>
                            <th>刊登账号/数据包类型</th>
                            <th>刊登时间/下载时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a target="_blank" href="/sells/products/415608450313"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669716/thumb_500_500_a74df724351de0935ba4c3e4f798d32c.jpg" alt="Thumb 500 500 a74df724351de0935ba4c3e4f798d32c" /></a></td>
                            <td>LS1138531091-01-01</td>
                            <td>uCo3ytfE4sTeyfwn</td>
                            <td>463</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>48 cm Minimal Triangle Solid Wood Desk Top Sofa Side Table Lounge Bedroom</td>
                            <td>LS1138531091-01-01</td>
                            <td>48cm*48cm/White</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:55</td>
                            <td><span><a target="_blank" href="/sells/products/415608450313">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/115608446379"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669706/thumb_500_500_c4907db914afa3d99c7eb301b71fa363.jpg" alt="Thumb 500 500 c4907db914afa3d99c7eb301b71fa363" /></a></td>
                            <td>LS1138531135-01-01</td>
                            <td>5HQYyesrhvsCC</td>
                            <td>373</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>40 cm Minimal Triangle Wooden Desk Top Sofa Side Table Lounge Bedroom</td>
                            <td>LS1138531135-01-01</td>
                            <td>40cm*40cm/White</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:54</td>
                            <td><span><a target="_blank" href="/sells/products/115608446379">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/715608443014"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669680/thumb_500_500_5a8ad9e940d5e596d7d0f344e2644af6.jpg" alt="Thumb 500 500 5a8ad9e940d5e596d7d0f344e2644af6" /></a></td>
                            <td>LS1138531283-04-01</td>
                            <td>TS3YL3dtwW2JVNxW</td>
                            <td>119</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>Baby Diaper Bag Waterproof Mummy Maternity Nappy Travel Backpack Fashion Pink</td>
                            <td>LS1138531283-04-01</td>
                            <td>Pink</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:54</td>
                            <td><span><a target="_blank" href="/sells/products/715608443014">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/815608439690"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669665/thumb_500_500_b2888329c8e45b0ed71c863427b3ee62.jpg" alt="Thumb 500 500 b2888329c8e45b0ed71c863427b3ee62" /></a></td>
                            <td>LS1138531325-01-01</td>
                            <td>CimTyedZCnjvZbzD</td>
                            <td>65</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>400ml Ultrasonic Aroma Humidifier Air Diffuser Atomizer Aromatheraphy</td>
                            <td>LS1138531325-01-01</td>
                            <td>Burlywood</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:53</td>
                            <td><span><a target="_blank" href="/sells/products/815608439690">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/815608437684"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669642/thumb_500_500_c91d2fb4ba5008f6aeaf817a41c04717.jpg" alt="Thumb 500 500 c91d2fb4ba5008f6aeaf817a41c04717" /></a></td>
                            <td>LS1138531327-01-01</td>
                            <td>3DFf3JNGBpqJU</td>
                            <td>231</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>100ml Ultrasonic Aroma Humidifier Air Diffuser Atomizer Aromatheraphy White</td>
                            <td>LS1138531327-01-01</td>
                            <td>White</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:52</td>
                            <td><span><a target="_blank" href="/sells/products/815608437684">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/715608435577"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669622/thumb_500_500_a18e92b51b1405cc39b035096c2c1a62.jpg" alt="Thumb 500 500 a18e92b51b1405cc39b035096c2c1a62" /></a></td>
                            <td>LS1138531328-01-01</td>
                            <td>S2ayh0He1XYyILbr</td>
                            <td>93</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>100ml Mini Ultrasonic Aroma Humidifier Air Diffuser Atomizer Aromatheraphy</td>
                            <td>LS1138531328-01-01</td>
                            <td>Brown</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:52</td>
                            <td><span><a target="_blank" href="/sells/products/715608435577">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/815608432269"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669612/thumb_500_500_28556517167d05b1f6c8a0f186ba8bf4.jpg" alt="Thumb 500 500 28556517167d05b1f6c8a0f186ba8bf4" /></a></td>
                            <td>LS113853474-01-01</td>
                            <td>z7dTZNqzfPxAP</td>
                            <td>459</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>Bluedio H Active Noise Cancelling Headphones Wireless Bluetooth Headset Black</td>
                            <td>LS113853474-01-01</td>
                            <td>Black</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:51</td>
                            <td><span><a target="_blank" href="/sells/products/815608432269">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/615608429483"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669605/thumb_500_500_6f57c3b90638ef78762212e6f15a2ccd.jpg" alt="Thumb 500 500 6f57c3b90638ef78762212e6f15a2ccd" /></a></td>
                            <td>LS113853475-01-01</td>
                            <td>XhOM1JqgnGPe</td>
                            <td>489</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>Bluedio T2S Bluetooth Headphones Wireless Stereo Headsets Black</td>
                            <td>LS113853475-01-01</td>
                            <td>Black</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:51</td>
                            <td><span><a target="_blank" href="/sells/products/615608429483">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/215608426736"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669587/thumb_500_500_7a1c090cd7a5302ddf6d66874a6ced07.jpg" alt="Thumb 500 500 7a1c090cd7a5302ddf6d66874a6ced07" /></a></td>
                            <td>LS113853476-01-01</td>
                            <td>r0THib8isXixEGs</td>
                            <td>207</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>Bluedio T5 Active Noise Cancelling Headphones Wireless Bluetooth Headset with</td>
                            <td>LS113853476-01-01</td>
                            <td>Black</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:50</td>
                            <td><span><a target="_blank" href="/sells/products/215608426736">查看商品</a></span></td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/615608423442"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669578/thumb_500_500_071ddda34c6fda566e81e3d4ffd9f760.jpg" alt="Thumb 500 500 071ddda34c6fda566e81e3d4ffd9f760" /></a></td>
                            <td>LS113853480-01-01</td>
                            <td>lES0EsZ8Zl4I7zzf</td>
                            <td>176</td>
                            <td>30</td>
                            <td>库存充足</td>
                            <td>H96 Pro S912 Octa-core Android 7.1 TV Box WIFI UHD 4K 3GB+32GB 60Hz HDMI 2.0</td>
                            <td>LS113853480-01-01</td>
                            <td>Black</td>
                            <td>已发布（正在销售）</td>
                            <td>已发布（正在销售）</td>
                            <td>供应商海外仓</td>
                            <td>澳大利亚</td>
                            <td>下载数据包</td>
                            <td>Wish</td>
                            <td>马帮数据包</td>
                            <td>2019-06-20 18:41:50</td>
                            <td><span><a target="_blank" href="/sells/products/615608423442">查看商品</a></span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="fixed-operate-table with-shadow">
                    <table>
                        <thead>
                        <tr>
                            <th class="sku-img">SKU图片</th>
                            <th class="art_no">原始货号</th>
                            <th class="publish_art_no">刊登货号</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a target="_blank" href="/sells/products/415608450313"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669716/thumb_500_500_a74df724351de0935ba4c3e4f798d32c.jpg" alt="Thumb 500 500 a74df724351de0935ba4c3e4f798d32c" /></a></td>
                            <td>LS1138531091-01-01</td>
                            <td class="border-l">uCo3ytfE4sTeyfwn</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/115608446379"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669706/thumb_500_500_c4907db914afa3d99c7eb301b71fa363.jpg" alt="Thumb 500 500 c4907db914afa3d99c7eb301b71fa363" /></a></td>
                            <td>LS1138531135-01-01</td>
                            <td class="border-l">5HQYyesrhvsCC</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/715608443014"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669680/thumb_500_500_5a8ad9e940d5e596d7d0f344e2644af6.jpg" alt="Thumb 500 500 5a8ad9e940d5e596d7d0f344e2644af6" /></a></td>
                            <td>LS1138531283-04-01</td>
                            <td class="border-l">TS3YL3dtwW2JVNxW</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/815608439690"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669665/thumb_500_500_b2888329c8e45b0ed71c863427b3ee62.jpg" alt="Thumb 500 500 b2888329c8e45b0ed71c863427b3ee62" /></a></td>
                            <td>LS1138531325-01-01</td>
                            <td class="border-l">CimTyedZCnjvZbzD</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/815608437684"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669642/thumb_500_500_c91d2fb4ba5008f6aeaf817a41c04717.jpg" alt="Thumb 500 500 c91d2fb4ba5008f6aeaf817a41c04717" /></a></td>
                            <td>LS1138531327-01-01</td>
                            <td class="border-l">3DFf3JNGBpqJU</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/715608435577"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669622/thumb_500_500_a18e92b51b1405cc39b035096c2c1a62.jpg" alt="Thumb 500 500 a18e92b51b1405cc39b035096c2c1a62" /></a></td>
                            <td>LS1138531328-01-01</td>
                            <td class="border-l">S2ayh0He1XYyILbr</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/815608432269"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669612/thumb_500_500_28556517167d05b1f6c8a0f186ba8bf4.jpg" alt="Thumb 500 500 28556517167d05b1f6c8a0f186ba8bf4" /></a></td>
                            <td>LS113853474-01-01</td>
                            <td class="border-l">z7dTZNqzfPxAP</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/615608429483"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669605/thumb_500_500_6f57c3b90638ef78762212e6f15a2ccd.jpg" alt="Thumb 500 500 6f57c3b90638ef78762212e6f15a2ccd" /></a></td>
                            <td>LS113853475-01-01</td>
                            <td class="border-l">XhOM1JqgnGPe</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/215608426736"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669587/thumb_500_500_7a1c090cd7a5302ddf6d66874a6ced07.jpg" alt="Thumb 500 500 7a1c090cd7a5302ddf6d66874a6ced07" /></a></td>
                            <td>LS113853476-01-01</td>
                            <td class="border-l">r0THib8isXixEGs</td>
                        </tr>
                        <tr>
                            <td><a target="_blank" href="/sells/products/615608423442"><img src="https://pic.kjds.com/uploads/product_image/picture_url/669578/thumb_500_500_071ddda34c6fda566e81e3d4ffd9f760.jpg" alt="Thumb 500 500 071ddda34c6fda566e81e3d4ffd9f760" /></a></td>
                            <td>LS113853480-01-01</td>
                            <td class="border-l">lES0EsZ8Zl4I7zzf</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <ul class="pagination">
                <span class="orders" style="display: none;">总金额<span class="total_amount" style="color:red" type="text/css"></span><span>(含运费<span class="total_fee"></span></span><span>；含订单处理费<span class="total_processing_fee"></span></span></span>
                <li class="active"><a data-remote="true" href="#">1</a></li>
                <li><a rel="next" data-remote="true" href="/sells/inventories?page=2&amp;per=10">2</a></li>
                <li><a data-remote="true" href="/sells/inventories?page=3&amp;per=10">3</a></li>
                <li class="disabled"><a href="#">…</a></li>
                <li><a data-remote="true" href="/sells/inventories?page=23&amp;per=10">23</a></li>
                <li><a rel="next" data-remote="true" href="/sells/inventories?page=2&amp;per=10">下一页 ›</a></li>
                <div class="input_group">
                    <div class="pull-left">
                        到第
                        <input data-total_pages="23" style="ime-mode:disabled" type="text" />页
                        <a class="okay">确定</a>
                    </div>
                    <span class="count">&nbsp;共计228条记录</span>
                </div>
            </ul>
            <div class="export_inventories">
                <a class="export-batch" data-target="#export-modal" href="javascript:void(0);" id="export_inventories">导出库存预警</a>
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
                                <p>导入结果正在生成中，请耐心等待十五分钟后，点击左侧菜单的 “文件导入” 找到对应表格即可进行下载。</p>
                                <p>本页面可直接关闭。</p>
                            </div>
                        </div>
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

<script src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ URL::asset('js/common.js') }}"></script>
</body>
</html>