<html>
<head>
    <meta charset="utf-8" />
    <meta content="webkit" name="renderer" />
    <meta content="IE=edge, chrome=1" http-equiv="X-UA-Compatible" />
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/application.css') }}">
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <!-- [if lt IE 9]>
    <script type = 'text/javascript' src = '/assets/IE9.js'></script>
    <![endif]-->
    <title>退件查询</title>
    <link rel="stylesheet" href="../../public/css/common.css">
</head>
<body data-current_user="true" data-exchange_rate="6.87" data-user_status="2" id="sells_bounces_index">
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
    <div class="option-box hover-box activebj_none">
        <a href="../inventories/inventories.html"><img src="https://cdn-resources-aliyun.kjds.com/assets/sells/users/icon2-1eff06d5ed25119d8303581f95aa5aa8.png" alt="Icon2" />
            <div class="name">
                库存预警
            </div></a>
    </div>
    <div class="option-box hover-box activeBJ">
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
            <span>退件查询</span>
        </div>
        <div class="top-search">
            <form class="bounce_detail_search" id="bounce_detail_search" action="/sells/bounces" accept-charset="UTF-8" data-remote="true" method="get">
                <input name="utf8" type="hidden" value="✓" />
                <input id="condition" name="" type="hidden" />
                <div class="row">
                    <div class="col-xs-8 col-sm-8 search-condition-select">
                        <div class="each-tr first-tr">
                            <div class="left">
                                <div class="condition-search condition-choose">
                                    <div class="condition-box">
                                        <span>请选择</span>
                                        <div class="hide-option">
                                            <div class="item" value="waybill_record_shipping_order_order_number_cont">
                                                订单编号
                                            </div>
                                            <div class="item" value="waybill_record_shipping_number_cont">
                                                运单号
                                            </div>
                                            <div class="item" value="waybill_record_shipping_order_import_order_number_eq">
                                                B2C订单号
                                            </div>
                                            <div class="item" value="waybill_record_shipping_order_order_items_inventory_sku_art_no_eq">
                                                货号
                                            </div>
                                            <div class="item" value="waybill_record_shipping_order_order_items_product_title_cont_all">
                                                商品名称
                                            </div>
                                        </div>
                                        <i class="glyphicon glyphicon-chevron-down"></i>
                                    </div>
                                    <input class="input_area" name="" type="text" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 order-state dropdown-container">
                        <span>订单状态</span>
                        <div class="btn-group own_btn-group">
                            <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input type="hidden" name="q[waybill_record_shipping_order_status_eq]" id="q_waybill_record_shipping_order_status_eq" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                            <ul class="dropdown-menu own_dropdown-menu" id="status">
                                <li><a>全部</a></li>
                                <li><a data-value="waiting_payment" href="javascript:void(0);">待付款</a></li>
                                <li><a data-value="waiting_shipment" href="javascript:void(0);">待发货</a></li>
                                <li><a data-value="shipped_waiting_confirm" href="javascript:void(0);">已发货</a></li>
                                <li><a data-value="completed" href="javascript:void(0);">已完成</a></li>
                                <li><a data-value="cancelled" href="javascript:void(0);">已取消</a></li>
                                <li><a data-value="refunded" href="javascript:void(0);">已退款</a></li>
                                <li><a data-value="bad" href="javascript:void(0);">坏单</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 platform dropdown-container">
                        <span>平台</span>
                        <div class="btn-group own_btn-group">
                            <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input type="hidden" name="q[waybill_record_shipping_order_b2c_platform_id_eq]" id="q_waybill_record_shipping_order_b2c_platform_id_eq" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                            <ul class="dropdown-menu own_dropdown-menu" id="b2c_platform">
                                <li><a>全部</a></li>
                                <li><a data-value="1" href="javascript:void(0);">eBay</a></li>
                                <li><a data-value="27" href="javascript:void(0);">Wish</a></li>
                                <li><a data-value="2" href="javascript:void(0);">AliExpress</a></li>
                                <li><a data-value="50" href="javascript:void(0);">Shopee</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 process-state dropdown-container">
                        <span>处理状态</span>
                        <div class="btn-group own_btn-group">
                            <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input type="hidden" name="q[status_eq]" id="q_status_eq" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                            <ul class="dropdown-menu own_dropdown-menu" id="process-state">
                                <li><a>全部</a></li>
                                <li><a data-value="waiting_handing">待处理</a></li>
                                <li><a data-value="refund_application">退款申请中</a></li>
                                <li><a data-value="refund_handing">退款处理中</a></li>
                                <li><a data-value="refunded">已退款</a></li>
                                <li><a data-value="refund_fail">退款失败</a></li>
                                <li><a data-value="resend_application">重发申请中</a></li>
                                <li><a data-value="resend">重发</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 return-sale-reason dropdown-container">
                        <span>退件原因</span>
                        <div class="btn-group own_btn-group">
                            <button aria-expanded="false" aria-haspopup="true" class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><input type="hidden" name="q[reason_eq]" id="q_reason_eq" /><span class="text text_limit phcolor">全部</span><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                            <ul class="dropdown-menu own_dropdown-menu" id="bounce-reason">
                                <li><a>全部</a></li>
                                <li><a data-value="postcode_fault_or_cannot_contact">地址邮编不正确或联系不到</a></li>
                                <li><a data-value="buyer_reject">买家拒收</a></li>
                                <li><a data-value="wrong_send_entrapment">错发截留</a></li>
                                <li><a data-value="customer_cancel_order">客户取消订单截留</a></li>
                                <li><a data-value="post_pause">邮路暂停</a></li>
                                <li><a data-value="express_sheet_overdue">面单过期</a></li>
                                <li><a data-value="interface_no_message">接口无预报信息</a></li>
                                <li><a data-value="mistake_shipment_or_position">发错物流商或发错仓</a></li>
                                <li><a data-value="number_repeat_or_mistake">单号重复或错误</a></li>
                                <li><a data-value="size_or_weight_over">尺寸或重量超限</a></li>
                                <li><a data-value="security_check_fail">安检不合格</a></li>
                                <li><a data-value="parcel_lost_entrapment_original_package">包裹丢失,截留原包裹</a></li>
                                <li><a data-value="others">其它</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-6 btn-row">
                        <div class="search-btn">
                            <i class="glyphicon glyphicon-search"></i>
                            <input type="submit" value="开始查询" />
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <input class="current-pagesize" type="hidden" value="10" />
        <div id="order-lists">
            <div class="modal fade" id="sychOrder">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <span class="title">手动同步订单</span>
                            <div class="wrapper-box">
                                <div class="row time start-time">
                                    <span>开始时间</span>
                                    <div class="time-box">
                                        <input class="date_input" id="datepicker-s" placeholder="开始时间" type="search" />
                                        <div class="icon-box">
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row time end-time">
                                    <span>结束时间</span>
                                    <div class="time-box">
                                        <input class="date_input" id="datepicker-e" placeholder="开始时间" type="search" />
                                        <div class="icon-box">
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="row platform">
                                    <span class="platform_title">平台</span>
                                    <div class="btn-group own_btn-group">
                                        <button class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><span class="text text_limit pull-left">请选择</span><input type="hidden" name="b2c_platform_id" id="b2c_platform_id" /><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                                        <ul class="dropdown-menu own_dropdown-menu">
                                            <li><a data-id="1" href="javascript:void(0);">eBay</a></li>
                                            <li><a data-id="27" href="javascript:void(0);">Wish</a></li>
                                            <li><a data-id="2" href="javascript:void(0);">AliExpress</a></li>
                                            <li><a data-id="50" href="javascript:void(0);">Shopee</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row account">
                                    <span class="id_title">账号</span>
                                    <div class="btn-group own_btn-group">
                                        <button class="btn own_btn dropdown-toggle" data-toggle="dropdown" type="button"><span class="text text_limit pull-left">请选择</span><input type="hidden" name="account_id" id="account_id" /><span class="glyphicon glyphicon-menu-down pull-right"></span></button>
                                        <ul class="dropdown-menu own_dropdown-menu"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row btn_area">
                                <div class="btn_confirm" data-dismiss="modal">
                                    确定
                                </div>
                                <div class="btn_cancel" data-dismiss="modal">
                                    取消
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="table order-table">
                <thead>
                <tr>
                    <th>
                        <div class="check-box hide">
                            <i class="glyphicon glyphicon-ok"></i>
                        </div></th>
                    <th>商品信息</th>
                    <th>单价 x 数量</th>
                    <th>总价</th>
                    <th>订单状态</th>
                    <th>平台</th>
                    <th>处理状态</th>
                    <th>退件原因</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="no-padding" colspan="9">
                        <div class="empty-search-result">
                            <img src="https://cdn-resources-aliyun.kjds.com/assets/empty_search_result-56aeb108771c6de8ce8a82c63e4b2e09.png" alt="Empty search result" />
                            <span>没有查到符合条件的记录</span>
                        </div></td>
                </tr>
                </tbody>
            </table>
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