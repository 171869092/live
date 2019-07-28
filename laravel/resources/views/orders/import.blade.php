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
    <title>批量下单</title>
</head>
<body data-current_user="true" data-exchange_rate="6.87" data-user_status="2" id="sells_import_orders_index">
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
<div class="right_sidebar" style="bottom: 25%;">
    <div class="service" id="CampBizQQWPA">
        <a href="http://wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDE4NzA1NV80NzY0OTNfODAwMTg3MDU1XzJf" target="_blank">在线客服</a>
    </div>
    <div class="back_top">
        <a>返回顶部</a>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="title">
            <span>批量下单</span>
        </div>
        <form id="import_order_form" enctype="multipart/form-data" action="/sells/import_orders" accept-charset="UTF-8" method="post">
            <input name="utf8" type="hidden" value="✓" />
            <input type="hidden" name="authenticity_token" value="SkyuKwRJOsiA5Rdwe9WSARq1thgKoZ9P7uRBfZ5PJyK24bvMC4LnsWUmAoldw/fGCiHwP77PORm+GIUICweeog==" />
            <span class="auto-test-upload-file" data-url=""></span>
            <div class="choose-mask">
                选择文件
            </div>
            <input accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="choose-file" id="order_file" name="order_file" type="file" value="选择文件" />
            <input class="confirm_btn grey" disabled="true" type="button" value="确认导入" />
        </form>
        <div class="file">
            <span class="text-span hide-text">文件名：</span>
            <span class="file-name"></span>
        </div>
        <div class="progress progress-striped active hide">
            <div class="progress-bar progress-bar-success">
                数据正在处理中...
            </div>
        </div>
        <div class="table">
            <div class="tips">
                <span>文件模板格式：</span>
            </div>
            <table>
                <thead>
                <tr>
                    <th>*原订单号</th>
                    <th> 订单备注</th>
                    <th> 买家邮箱</th>
                    <th>*国家二字码</th>
                    <th>*买家姓名</th>
                    <th>*电话</th>
                    <th>手机</th>
                    <th>*州/省</th>
                    <th>*城市</th>
                    <th>*邮政编码</th>
                    <th>*街道地址1</th>
                    <th>街道地址2</th>
                    <th class="product_sku">*商品规格货号/购买数量</th>
                    <th>*平台</th>
                    <th>物流方式Code</th>
                    <th>店铺金额币种</th>
                    <th>店铺订单金额</th>
                    <th class="shopee_waybill_number">国际运单号（Shopee专用）</th>
                    <th class="wish_product_id">产品ID（Wish平台必填）</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="download-template">
            <a href="/sells/import_orders/export_template_file">下载模板文件</a>
            <br />
            <br />
            <a href="/sells/import_orders/export_country_file">下载国家二字码文件</a>
            <br />
            <br />
            <a href="/sells/import_orders/export_logistics_file" target="_blank">下载物流方式Code</a>
        </div>
        <div class="note">
            <div class="warning">
                <span>注意事项：</span>
            </div>
            <span>1.带*号的为必填项</span>
            <span>2.购买数量为整数,数值不能小于1</span>
            <span>3.国家请填写国家二字码，下载国家二字码文件可以查看填写对应的值，如：AR,IE</span>
            <span>4.一个订单多SKU的请合并一起写，一个SKU的信息用反斜杠(/)隔开，SKU和SKU信息之间用分号(;)隔开 如： xx-1/1;xx-3/2 （代表这个订单购买了两个商品规格，其中第一个的SKU的货号为xx-1，购买数量为1,第二个SKU的货号为xx-3，购买的数量为2，最后一个SKU信息后面不用跟分号(;),且分号必须为英文格式符号</span>
            <span>5.有些运输目的地没有的“省/州”或者“省/州”和“城市”同名的可以使用“城市”的值代替</span>
            <span>6.平台值，为字符类型，ebay代表eBay平台、aliexpress代表速卖通平台、wish代表Wish平台，如果你的订单是来自eBay的，那购买平台值填写ebay，填写的值是单选值，可以直接选择，不可以手动输入。因取消国内直邮业务，所以从2019年4月起不支持Shopee平台销售，请勿导入Shopee订单。</span>
            <span>7.文件格式为xx.xlsx格式的文件</span>
            <span>8.商品规格货号说明: 商品规格货号可以是越域大卖平台的商品规格货号,也可以是刊登商品规格货号</span>
            <span>9.填写物流方式前，请先&quot;下载物流方式Code&quot;，请填写物流方式代码，不要填写中文</span>
            <span>10.Wish平台订单必须填写产品ID，非Wish平台订单产品ID是可选项。</span>
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
                    <p>导入结果正在生成中，请耐心等待十五分钟后，点击左侧菜单的 “文件导入” 找到对应表格即可进行下载。</p>
                    <p>本页面可直接关闭。</p>
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