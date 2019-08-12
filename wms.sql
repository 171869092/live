#  产品主表
CREATE TABLE IF NOT EXISTS `product`(
    `product_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '产品ID',
    `product_sku` varchar(60) DEFAULT NULL,
    `customer_id` int(11) NOT NULL DEFAULT '1' COMMENT '用户ID',
    `product_title_en` varchar(255) DEFAULT '' COMMENT '产品名称',
    `product_title` varchar(255) DEFAULT '' COMMENT '中文描述',
    `product_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '产品状态:0 删除,1正式产品',
    `sale_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0未指定，1新品，2正常销售，3重点产品，4缺货中，5清仓，6停售',
    `hs_code` varchar(32) NOT NULL DEFAULT '' COMMENT '商品海关编码',
    `currency_code` varchar(5) NOT NULL DEFAULT '' COMMENT '申报币种',
    `pu_code` varchar(5) DEFAULT '' COMMENT '产品单位EA(单个) KG(公斤) MT(米) CASE(盒) PC(件) SET(套)',
    `product_length` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '产品长',
    `product_width` decimal(5,2) DEFAULT '0.00' COMMENT '宽度',
    `product_height` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '高',
    `product_net_weight` decimal(10,3) NOT NULL DEFAULT '0.000' COMMENT '产品净重(KG)',
    `product_weight` decimal(10,3) NOT NULL DEFAULT '0.000' COMMENT '产品重量(KG)',
    `product_sales_value` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '销售价',
    `product_purchase_value` decimal(11,4) unsigned NOT NULL DEFAULT '0.0000' COMMENT '采购价',
    `product_declared_value` decimal(10,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '申报价值',
    `product_is_combination` tinyint(1) DEFAULT '0' COMMENT '是否是组合产品（0：否1：是）',
    `product_barcode_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '条形码类型：0:默认条码;1:自定义条码;2:序列号;',
    `pc_id` int(11) NOT NULL DEFAULT '0' COMMENT '产品分类',
    `pc_attr` int(11) NOT NULL DEFAULT '0' COMMENT '产品属性',
    `product_add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '产品添加时间',
    `product_update_time` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '产品最后更新时间',
    `contain_battery` tinyint(1) NOT NULL DEFAULT '0' COMMENT '含电池:  0,不含 1:含',
    `prl_id` tinyint(1) DEFAULT '0' COMMENT '产品等级',
    `parent_product_id` int(11) DEFAULT '0' COMMENT '关联的母SKU ID',
    `seller_id` int(10) NOT NULL DEFAULT '0' COMMENT '销售员',
    `fbo_tax_rate` float(6,3) DEFAULT '0.000' COMMENT 'FOB税率',
    `exp_date` int(11) NOT NULL DEFAULT '0' COMMENT '有效期天数',
    `warehouse_barcode` varchar(32) NOT NULL DEFAULT '' COMMENT '仓库条码',
    `gross_rofit` float(6,3) NOT NULL DEFAULT '0.000' COMMENT '毛利率',
    `tax_rate` float(6,3) NOT NULL DEFAULT '0.000' COMMENT '税率',
    `default_warehouse_id` int(11) DEFAULT NULL COMMENT '默认发货仓库',
    `product_declaration_statement` varchar(64) NOT NULL DEFAULT '' COMMENT '申报说明，关于申报信息上的扩展，如在此块填写HTS CODE',
    `product_specs` varchar(255) NOT NULL DEFAULT '' COMMENT '规格',
    `prt_id` tinyint(1) NOT NULL DEFAULT '0' COMMENT '侵权等级',
    PRIMARY KEY (`product_id`),
    KEY `product_product_sku_id` (`product_sku`),
    KEY `product_update_time` (`product_update_time`),
    KEY `product_sku` (`product_sku`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品主表';

#.产品分类
CREATE TABLE IF NOT EXISTS `product_category`(
    `pc_id` int(11) NOT NULL AUTO_INCREMENT,
    `warehouse_id` int(11) NOT NULL DEFAULT '0' COMMENT '仓库ID/0为共用',
    `pc_name_en` varchar(255) NOT NULL DEFAULT '' COMMENT '英文',
    `pc_name` varchar(255) NOT NULL DEFAULT '' COMMENT '中文描述',
    `pc_shortname` varchar(8) NOT NULL DEFAULT '' COMMENT '简写',
    `pc_hs_code` varchar(255) NOT NULL DEFAULT '' COMMENT '海关品名',
    `pc_sort_id` tinyint(3) NOT NULL DEFAULT '0' COMMENT '排序ID(0~999)',
    `pc_update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加/更新时间',
    `pc_pid` int(11) DEFAULT '0' COMMENT '父级ID',
    `pc_level` tinyint(1) DEFAULT '0' COMMENT '层级 ',
    `pc_like` varchar(255) DEFAULT NULL,
    `pc_reference_code` varchar(32) NOT NULL DEFAULT '' COMMENT '参考码',
    PRIMARY KEY (`pc_id`),
    KEY `pc_pid` (`pc_pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品分类';

#.产品属性
CREATE TABLE IF NOT EXISTS `product_attr`(
    `pa_id` INT (11) NOT NULL AUTO_INCREMENT,
    `pa_descript` varchar(255) NOT NULL DEFAULT '' COMMENT '中文描述',
    `pa_descript_en` varchar(255) NOT NULL DEFAULT '' COMMENT '英文描述',
    `pa_attr_key` varchar(255) NOT NULL DEFAULT '' COMMENT '属性名（key）',
    `pa_attr_val` varchar(255) NOT NULL DEFAULT '' COMMENT '属性值（val）',
    `pa_parent_id` int(11) DEFAULT '0' COMMENT '父级ID',
    `pa_level` tinyint(1) DEFAULT '0' COMMENT '层级 ',
    `pc_update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加/更新时间',
    PRIMARY KEY (`pa_id`),
    KEY `pa_parent_id` (`pa_parent_id`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='产品属性';


#用户授权表
CREATE TABLE IF NOT EXISTS `user_system_authorization`(
    `usa_id` int(11) NOT NULL AUTO_INCREMENT,
    `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户ID',
    `usa_online_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '在线状态:0,离线中 1,在线中',
    `usa_auth_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '授权状态:0,未授权 1,已授权',
    `usa_auth_code` text NOT NULL COMMENT '授权码',
    `usa_quick_login` tinyint(1) NOT NULL DEFAULT '0' COMMENT '快捷登录 1：免密码',
    `usa_add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
    `usa_update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
    `usa_auth_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '授权时间',
    `usa_login_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '登录时间',
    `usa_logout_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '登出时间',
    PRIMARY KEY (`usa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户系统授权列表';

#订单表
CREATE TABLE IF NOT EXISTS `orders`(
    `order_id` int(11) NOT NULL AUTO_INCREMENT,
    `order_code` varchar(32) NOT NULL DEFAULT '' COMMENT '订单序列',
    `platform` varchar(20) NOT NULL DEFAULT '' COMMENT '平台代码',
    `order_platform_type` varchar(20) NOT NULL DEFAULT '' COMMENT '平台类型',
    `order_platform_code` varchar(64) NOT NULL DEFAULT '' COMMENT '平台真实订单号',
    `create_type` varchar(20) NOT NULL DEFAULT '' COMMENT '创建类型:api,upload,hand',
    `warehouse_id` int(11) NOT NULL DEFAULT '0' COMMENT '仓库id',
    `to_warehouse_id` int(11) NOT NULL DEFAULT '0' COMMENT '目的仓库',
    `order_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '类型：0:普通 ;1:退货;2:重发',
    `country_code` char(4) NOT NULL DEFAULT '' COMMENT '国家二字码',
    `parcel_declared_value` decimal(10,3) NOT NULL DEFAULT '0.000' COMMENT '物品申报价值,下单时填写,非SKU加总',
    `declared_weight` decimal(10,3) NOT NULL DEFAULT '0.000' COMMENT '申报重量',
    `shipping_fee_estimate` decimal(10,3) NOT NULL DEFAULT '0.000' COMMENT '运费估算',
    `currency_code` varchar(5) NOT NULL DEFAULT '' COMMENT '币种Code',
    `parcel_contents` varchar(255) NOT NULL DEFAULT '' COMMENT '物品内容描述（内装何物）下单时填写',
    `parcel_quantity` int(11) NOT NULL DEFAULT '0' COMMENT '内件数量',
    `order_status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '订单状态--- 0:删除;1:草稿;2:确认;3:异常;4:已提交;5:已打印;6:已下架;7:已打包;8:已装袋;9:装袋完成;10:已加挂;11:物流完成;12:物流发货;13:已签收',
    `order_hold_inventory` tinyint(1) NOT NULL DEFAULT '0' COMMENT '占用库存 1:是 0:否',
    `order_exception_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '异常状态 0:无 1:',
    `order_waiting_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '等待状态0:无;1:物流处理',
    `print_quantity` int(5) NOT NULL DEFAULT '0' COMMENT '标签打印次数',
    `add_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '订单加入时间',
    `update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后修改时间',
    `order_paydate` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '付款时间',
    `reference_no` varchar(50) NOT NULL DEFAULT '' COMMENT '客户参考号',
    `remark` varchar(512) NOT NULL DEFAULT '' COMMENT '备注',
    `site_id` varchar(64) NOT NULL DEFAULT '' COMMENT '站点',
    `seller_id` varchar(128) NOT NULL DEFAULT '' COMMENT '卖家ID',
    `sync_count` int(11) NOT NULL DEFAULT '0' COMMENT '记录同步次数',
    `sync_express_ship` tinyint(1) NOT NULL DEFAULT '0' COMMENT '物流跟踪标记 0 未发货 1 已发货 2 已签收',
    PRIMARY KEY (`order_id`),
    KEY `reference_no` (`reference_no`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单信息表';

#订单标签表
CREATE TABLE IF NOT EXISTS `order_label_url`(
    `olu_id` int(11) NOT NULL AUTO_INCREMENT,
    `order_code` varchar(32) NOT NULL DEFAULT '' COMMENT '订单号',
    `olu_url` varchar(250) NOT NULL DEFAULT '' COMMENT '网址',
    `olu_file_type` varchar(20) NOT NULL DEFAULT '' COMMENT '文件类型：png',
    `olu_label_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '标签类型：0=label,1=invoice,2=return label',
    `olu_create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
    `ol_update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后修改时间',
    PRIMARY KEY (`olu_id`),
    KEY `order_code` (`order_code`),
    KEY `olu_file_type` (`olu_file_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='标签图片地址表';

#订单属性表
CREATE TABLE IF NOT EXISTS `order_additional` (
  `oa_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL DEFAULT '0' COMMENT '订单ID',
  `order_code` varchar(50) NOT NULL DEFAULT '' COMMENT '订单号',
  `picking_mode` tinyint(2) NOT NULL DEFAULT '0' COMMENT '拣货模式 1：按单  2：集中',
  `estimate_weight` decimal(11,3) NOT NULL DEFAULT '0.000' COMMENT '预估重量',
  `address_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0,未处理 1,UnClassified 2,Commercial 3,Residential 4,unknown',
  `ignore_address_verify` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:忽略地址验证',
  `ship_order_value` text NOT NULL COMMENT '预报订单后需要保存的某些数据',
  `declare_value` float(20,2) NOT NULL DEFAULT '0.00' COMMENT '订单申报价值',
  `declare_currency` varchar(32) NOT NULL DEFAULT 'USD' COMMENT '订单申报价值币种',
  `cob_no` varchar(50) NOT NULL DEFAULT '' COMMENT '总单号',
  `oa_volume_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否自定义体积，0-否 1-是',
  `oa_length` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '长',
  `oa_width` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '宽',
  `oa_height` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '高',
  `eb_source` varchar(100) DEFAULT NULL,
  `oa_is_insurance` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否投保',
  `oa_insurance_value` decimal(10,3) NOT NULL DEFAULT '0.000' COMMENT '投保金额',
  `oa_is_checking` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否对账',
  `oa_import_count` int(11) NOT NULL DEFAULT '0' COMMENT '订单导入次数（用于非API发货）',
  `oa_is_check_egd` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'EGD订单预报是否校验订单为担保订单  0：不校验 ，1：校验',
  `oa_is_combination` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否组合订单 0-否 1-是',
  `oa_wish_combined_order` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'EPC订单支持相同订单合并预报',
  `oa_account_tax_id` varchar(64) DEFAULT '' COMMENT '申报税号',
  `oa_invoice_rule_limit` tinyint(1) NOT NULL DEFAULT '0' COMMENT '组合订单的申报价值是否按运输方式管理的发票规则进行限制 0-否 1-是',
  `oa_is_print` tinyint(1) NOT NULL DEFAULT '0' COMMENT '标签是否已打印 0-否 1-是（暂时只适用于单据打印）',
  `oa_dps_id` int(11) NOT NULL DEFAULT '0' COMMENT '申报包裹设置ID',
  `oa_financial_remark` varchar(2000) NOT NULL DEFAULT '' COMMENT '财务备注',
  `oa_order_info` varchar(2000) NOT NULL DEFAULT '' COMMENT '订单明细数据',
  `oa_weight` decimal(10,3) NOT NULL DEFAULT '0.000' COMMENT '重量',
  `oa_country_code` char(4) NOT NULL DEFAULT '' COMMENT '转国家二字码',
  `oa_city` varchar(60) NOT NULL DEFAULT '' COMMENT '转城市代号',
  `lock_inventory_model` tinyint(2) NOT NULL DEFAULT '1' COMMENT '订单锁库存模式 1:锁库存模式，2：锁库存批次模式',
  PRIMARY KEY (`oa_id`),
  KEY `order_code` (`order_code`),
  KEY `oa_order_id` (`order_id`,`oa_is_checking`) USING BTREE,
  KEY `idx_is_checking` (`oa_is_checking`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT COMMENT='订单属性表(一对一)';

#API账号信息表
CREATE TABLE IF NOT EXISTS `api_service` (
  `as_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自动增长列',
  `as_code` varchar(32) NOT NULL DEFAULT '' COMMENT 'API服务代码',
  `as_code_ref` varchar(64) NOT NULL DEFAULT '' COMMENT '参考号',
  `as_name` varchar(50) NOT NULL DEFAULT '' COMMENT 'API服务名称',
  `as_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '服务类型 0 仓储服务商 1 物流服务商',
  `as_is_authorize` tinyint(1) DEFAULT '0' COMMENT '是否已经授权 0 未授权 1已授权',
  `as_status` tinyint(1) DEFAULT '0' COMMENT '状态 0 启用 1 关闭',
  `as_user` varchar(255) DEFAULT '',
  `as_pwd` text COMMENT '账号密码',
  `cig_user` varchar(50) DEFAULT '' COMMENT '开发者账号',
  `cig_pwd` text COMMENT '开发者密码',
  `as_custom_varchar` varchar(50) DEFAULT '' COMMENT '自定义',
  `as_token` text COMMENT '秘钥',
  `as_address` varchar(255) DEFAULT '' COMMENT '服务地址',
  `as_address1` varchar(255) DEFAULT '' COMMENT '服务附加地址1',
  `as_address2` varchar(255) DEFAULT '' COMMENT '服务附加地址2',
  `as_application` varchar(50) DEFAULT '' COMMENT '服务应用代码',
  `as_environment` varchar(50) DEFAULT '',
  `as_print_scan_form` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持scan form',
  `as_account` varchar(50) DEFAULT '' COMMENT '支付账号',
  `as_ekp` varchar(50) DEFAULT '' COMMENT 'EKP',
  `as_partner` varchar(255) DEFAULT '' COMMENT '合作伙伴ID',
  `as_ignore_exception` tinyint(1) DEFAULT '0' COMMENT '是否忽略服务商截单异常 0 否 1 是',
  `as_logo_image` varchar(50) DEFAULT '' COMMENT 'API服务商logo',
  `as_add_date` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `as_update_date` datetime DEFAULT '0000-00-00 00:00:00' COMMENT '修改时间',
  `as_creater` int(11) DEFAULT '0' COMMENT '创建人',
  `as_updater` int(11) DEFAULT '0' COMMENT '修改人',
  `as_path` varchar(100) DEFAULT NULL,
  `as_create_order_confirmship` tinyint(1) NOT NULL DEFAULT '0' COMMENT '建立订单立时确认交运',
  `as_order_confirmship_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否需要确认交运',
  `as_order_waiting_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '订单是否需要等待',
  `as_width` int(10) DEFAULT '100' COMMENT '标签宽度',
  `as_height` int(10) DEFAULT '150' COMMENT '标签高度',
  `as_custom_tracking_number` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持自定义跟踪号',
  `as_func` varchar(100) DEFAULT '' COMMENT '获取PDF的方法',
  `as_print_mode` varchar(20) DEFAULT 'HTML' COMMENT '打印模式 如: pdf、script(面单)、html、gif、png',
  `as_warehouse_multiple` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持多仓库配置 0:不支持 1:支持',
  `as_open_oapi` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否开启OAPI',
  `as_trial` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否提供API试算',
  `as_wms_mark_ship` tinyint(1) NOT NULL DEFAULT '0' COMMENT '特殊标发',
  `as_edit_label_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '标签类型,1:序号、一个库位  2:序号、全部库位 3:序号',
  `as_oapi_code` varchar(50) NOT NULL DEFAULT '' COMMENT 'OAPI系统代码：DC(国内),HK(香港),海外(OV)',
  `as_forced_sync` tinyint(1) NOT NULL DEFAULT '0' COMMENT '配置上传跟踪号后是否还同步到服务商系统 1:是',
  `as_is_hide` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  `as_mapping_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '映射类型（1，多个物流商 2，多个账号）',
  `as_useq` varchar(200) DEFAULT '',
  `as_currency_code` char(3) NOT NULL DEFAULT 'RMB' COMMENT '结算币种',
  `as_remarks` text NOT NULL COMMENT '备注',
  `as_sync_trackno` tinyint(1) DEFAULT '0' COMMENT '是否支持同步更新跟踪号：0-否 1-是',
  `as_reserve1` varchar(255) NOT NULL DEFAULT '' COMMENT '备用字段1',
  `as_reserve2` varchar(255) NOT NULL DEFAULT '' COMMENT '备用字段2',
  `as_reserve3` varchar(255) NOT NULL DEFAULT '' COMMENT '备用字段3',
  `as_reserve4` varchar(255) NOT NULL DEFAULT '' COMMENT '备用字段4',
  `as_reserve5` varchar(255) NOT NULL DEFAULT '' COMMENT '备用字段5',
  `as_water_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '标签水印添加类型：0：不添加，1：OAPI添加，2：ERP添加，3：OWMS添加',
  `as_is_oauth` tinyint(1) NOT NULL DEFAULT '0',
  `as_async_intercept` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1:异步拦截',
  `as_is_multiple_shipping` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持多段预报：0-否，1-是',
  `as_custom_number_rule` tinyint(1) NOT NULL DEFAULT '0' COMMENT '自定义订单号规则(避免重复) 0:否 1:是',
  `as_get_label` tinyint(1) DEFAULT '0' COMMENT '是否支持重新下载标签：0否，1是',
  `as_get_trackingnumber` tinyint(1) DEFAULT '0' COMMENT '是否支持重新获取跟踪号：0否，1是',
  `as_stop` tinyint(1) DEFAULT '0' COMMENT '是否支持API拦截：0否，1是',
  `as_is_print_invoice` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持打印服务商发票：0-否，1-是',
  `as_is_transfer_service` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持头程服务：0-否，1-是',
  `as_last_cun_id` int(11) NOT NULL DEFAULT '0' COMMENT '状态通知功能对应的最后更新id，初始值为0',
  `as_is_systemNotice` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支持状态同步通知功能，默认为0，0否1是',
  `as_is_token` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否刷新token 默认为0 0否1是',
   `as_create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `as_update_time` datetime DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`as_id`),
  UNIQUE KEY `as_code_index` (`as_code`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='API服务表';


#地址簿
CREATE TABLE IF NOT EXISTS `ship_address_book` (
  `sab_id` int(11) NOT NULL AUTO_INCREMENT,
  `sab_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '物流地址类型；1-发货；2-退件；3-揽收;4收件人地址',
  `sab_campany_name` varchar(256) NOT NULL DEFAULT '' COMMENT '公司名称',
  `sab_user_name` varchar(16) NOT NULL DEFAULT '' COMMENT '联系人',
  `sab_country_name` varchar(16) NOT NULL DEFAULT '' COMMENT '国家',
  `sab_country` varchar(30) NOT NULL DEFAULT '' COMMENT '国家中文名称，英文名称，国家二字码中的任意一种',
  `sab_state` varchar(32) NOT NULL DEFAULT '' COMMENT '州',
  `sab_city` varchar(32) NOT NULL DEFAULT '' COMMENT '城市',
  `sab_postcode` varchar(10) NOT NULL DEFAULT '' COMMENT 'postcode',
  `sab_phone` varchar(32) NOT NULL DEFAULT '' COMMENT '电话',
  `sab_cell_phone` varchar(32) NOT NULL DEFAULT '' COMMENT '手提电话',
  `sab_fax` varchar(32) NOT NULL DEFAULT '' COMMENT '传真',
  `sab_email` varchar(50) NOT NULL DEFAULT '' COMMENT 'email',
  `sab_street_address1` varchar(128) NOT NULL DEFAULT '' COMMENT 'address1',
  `sab_street_address2` varchar(128) NOT NULL DEFAULT '' COMMENT 'address2',
  `sab_house_number` varchar(10) NOT NULL DEFAULT '' COMMENT '门牌号',
  `sab_address_detail` varchar(128) NOT NULL DEFAULT '' COMMENT '地址详细信息',
  `sab_update_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后更新时间',
  `sab_create_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '最后修改时间',
  `sab_country_code` char(4) NOT NULL DEFAULT '' COMMENT '国家二字码',
  `sab_area` varchar(256) NOT NULL DEFAULT '' COMMENT '区',
  `sab_firstname` varchar(256) NOT NULL DEFAULT '' COMMENT '姓',
  `sab_lastname` varchar(256) NOT NULL DEFAULT '' COMMENT '名',
  `sab_street` varchar(256) NOT NULL DEFAULT '' COMMENT '街道',
  `sab_country_codeios` varchar(256) NOT NULL DEFAULT '' COMMENT '国家三字码',
  PRIMARY KEY (`sab_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='物流地址簿';



#发货人地址id
ALTER TABLE `orders`
ADD COLUMN `ship_address_id` int(11) NOT NULL DEFAULT 0 COMMENT '发货地址id' AFTER `sync_express_ship`;
#揽收地址id
ALTER TABLE `orders`
ADD COLUMN `pickup_address_id` int(11) NOT NULL DEFAULT 0 COMMENT '揽收地址id' AFTER `sync_express_ship`;
#回邮地址id
ALTER TABLE `orders`
ADD COLUMN `returninfo_address_id` int(11) NOT NULL DEFAULT 0 COMMENT '回邮地址id' AFTER `sync_express_ship`;
#收件人地址id
ALTER TABLE `orders`
ADD COLUMN `consignee_address_id` int(11) NOT NULL DEFAULT 0 COMMENT '收件人地址id' AFTER `sync_express_ship`;
#渠道代码
ALTER TABLE `orders`
ADD COLUMN `service_code_type` varchar(255) NOT NULL DEFAULT '' COMMENT '渠道代码' AFTER `sync_express_ship`;
#订单id
ALTER TABLE `product`
ADD COLUMN `order_id` varchar(255) NOT NULL DEFAULT '' COMMENT '订单id' AFTER `prt_id`;
#产品数量
ALTER TABLE `product`
ADD COLUMN `product_quantity` varchar(255) NOT NULL DEFAULT '' COMMENT '产品数量' AFTER `prt_id`;
