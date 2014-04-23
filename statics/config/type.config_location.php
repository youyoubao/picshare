<?php
 $db = array(
	    'host'=>'192.168.2.163',
		'user'=>'gcstatistic',
		'pswd'=>'gcstatistic7232275'
);

$db = array(
		'host'=>'192.168.0.8',
		'user'=>'root',
		'pswd'=>'7232275'
);

$querytype = array(
		'user' =>array(
			'name' => '用户基础信息',
			'child' => array(
				'user_number' => array(
						'name' => '注册用户数量' ,
						'sql' => "select '注册用户数量', count(*) from gongchanginfo.gc_userinfo where regtime > {starttime}  and regtime < {endtime}"
					),
               	'com_news' => array(
						'name' => '企业新闻数量' ,
						'sql' => "select '新闻数量', count(*) from gongchanginfo.gc_comnews where pubtime > {starttime}  and pubtime < {endtime}"
					),
               'com_job' => array(
						'name' => '企业招聘数量' ,
						'sql' => "select '招聘数量', count(*) from gongchanginfo.gc_comjob where pubtime > {starttime}  and pubtime < {endtime}"
					),
			    'com_merchant' => array(
						'name' => '企业招商数量' ,
						'sql' => "select '招商数量', count(*) from gongchanginfo.gc_merchant where pubtime > {starttime}  and pubtime < {endtime}"
					),
				'com_msg' => array(
						'name' => '商铺留言数量' ,
						'sql' => "select '商铺留言数量', count(*) from gongchanginfo.gc_websitemsg where pubtime > {starttime}  and pubtime < {endtime}"
					),
				'com_friendlink' => array(
						'name' => '友情链接数量' ,
						'sql' => "select '友情链接数量', count(*) from gongchanginfo.gc_friendlink where addtime > {starttime}  and addtime < {endtime}"
					),
				  'com_noemail' => array(
						'name' => '邮箱未验证' ,
						'sql' => "select '邮箱未验证', count(*) from gongchanginfo.gc_userinfo  where regtime > {starttime}  and regtime < {endtime} and is_email = 0 "
					),
				  'com_email' => array(
						'name' => '邮箱已验证' ,
						'sql' => "select '邮箱已验证', count(*) from gongchanginfo.gc_userinfo  where regtime > {starttime}  and regtime < {endtime} and is_email = 1"
					),
				 'com_mobile' => array(
						'name' => '手机号码' ,
						'sql' => "select '手机号码', count(*) from gongchanginfo.gc_userinfo  where regtime > {starttime}  and regtime < {endtime} and mobile <> ''"
					),
				 'com_tel' => array(
						'name' => '固定电话' ,
						'sql' => "select '固定电话', count(*) from gongchanginfo.gc_userinfo  where regtime > {starttime}  and regtime < {endtime} and tel <> ''"
					),
				 'com_fax' => array(
						'name' => '传真' ,
						'sql' => "select '传真', count(*) from gongchanginfo.gc_userinfo  where regtime > {starttime}  and regtime < {endtime} and fax <> ''"
					),
				 'com_address' => array(
						'name' => '联系地址' ,
						'sql' => "select '联系地址', count(*) from gongchanginfo.gc_userinfo  where regtime > {starttime}  and regtime < {endtime} and address <> ''"
					)
				)
		),
		'usertake' =>array(
			'name' => '用户订阅',
			'child' => array(
				'com_profavourite' => array(
						'name' => '产品收藏数量' ,
						'sql' => "select '产品收藏数量', count(*) from gongchanginfo.gc_favourite  where pubtime > {starttime}  and pubtime < {endtime} and type = 2"
					),
				'com_buyfavourite' => array(
						'name' => '采购收藏数量' ,
						'sql' => "select '采购收藏数量', count(*) from gongchanginfo.gc_favourite  where pubtime > {starttime}  and pubtime < {endtime} and type = 3"
					),
				 'com_comfavourite' => array(
						'name' => '企业收藏数量' ,
						'sql' => "select '企业收藏数量', count(*) from gongchanginfo.gc_favourite  where pubtime > {starttime}  and pubtime < {endtime} and type = 1"
					),
				 'com_buyfeed' => array(
						'name' => '采购订阅数量' ,
						'sql' => "select '采购订阅数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 2"
					),
				 'com_profeed' => array(
						'name' => '产品订阅数量' ,
						'sql' => "select '产品订阅数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 1"
					),
     			 'com_msgksh' => array(
						'name' => '资讯矿山机械数量' ,
						'sql' => "select '资讯矿山机械数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 4 and subkey = 1"
					),
	   			 'com_msgcar' => array(
						'name' => '资讯汽车数量' ,
						'sql' => "select '资讯汽车数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 4 and subkey = 2 "
					),
	   			 'com_msgjiancai' => array(
						'name' => '资讯建材数量' ,
						'sql' => "select '资讯建材数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 4 and subkey = 3 "
					),
			     'com_msgzhuangbei' => array(
						'name' => '资讯装备制造数量' ,
						'sql' => "select '资讯装备制造数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 4 and subkey = 4 "
					),
			     'com_msgshipin' => array(
						'name' => '资讯食品数量' ,
						'sql' => "select '资讯食品数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 4 and subkey = 5 "
					),
				  'com_msgnongye' => array(
						'name' => '资讯现代农业数量' ,
						'sql' => "select '资讯现代农业数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 4 and subkey = 6 "
					),
				  'com_msgfuzhuang' => array(
						'name' => '资讯纺织服装数量' ,
						'sql' => "select '资讯纺织服装数量', count(*) from gongchanginfo.gc_feed  where addtime > {starttime}  and addtime < {endtime} and type = 4 and subkey = 7 "
					)
				)
		),
		'offer' => array(
			'name' => '询价/采购',
			'child' => array(
				'sendenq' => array(
					'name' => '采购 + 询价',
					'sql' => "select '采购 + 询价', count(*) from productoffer.pd_sendenq where pubtime > {starttime}  and pubtime < {endtime}"
				),
				'sendenq1' => array(
					'name' => '询价数量',
					'sql' => "select '询价数量', count(*) from productoffer.pd_recenquiry  WHERE  pubtime > {starttime}  and pubtime < {endtime} and `enquirytype` =1 "
				)
			)
		),
		'product' => array(
				'name' => '产品',
				'child' => array(
				 'pd_public' => array(
						'name' => '发布产品总数' ,
						'sql' => "select '发布产品总数', count(*) from productinfo.pd_info where pubtime > {starttime}  and pubtime < {endtime}"
					),
					'pd_cid_public' => array(
						'name' => '注册企业并发布产品的产品数量' ,
						'sql' => "select '注册企业并发布产品的产品数量', count(*) from productinfo.pd_info a, gongchanginfo.gc_company b where a.cid = b.cid and a.pubtime > {starttime} and a.pubtime < {endtime} and b.addtime > {starttime} and b.addtime < {endtime}"
					),
					/*'pd_offer' => array(
						'name' => '求购数量' ,
						'sql' => "select '求购数量', count(*) from productoffer.pd_sendenq where pubtime > {starttime} and pubtime < {endtime}  "
					),
					'pd_cid_offer' => array(
						'name' => '新注册企业求购数量' ,
						'sql' => "select '新注册企业求购数量', count(*) from productoffer.pd_sendenq a, gongchanginfo.gc_company b where a.cid = b.cid and  a.pubtime > {starttime} and a.pubtime < {endtime} and b.addtime > {starttime} and b.addtime < {endtime} ",
					)*/
				)
			),
		//其它分类
	'company' => array(
				'name' => '企业注册',
				'child' => array(
					'com_reg' => array(
						'name' => '注册企业的总量' ,
						'sql' => "select '注册企业的总量', count(*) from  gongchanginfo.gc_company where  addtime > {starttime} and addtime < {endtime} "
						),
					'com_pubproduct' => array(
						'name' => '注册且发布产品的企业数量' ,
						'sql' => "select '注册且发布产品的企业数量', count(*) from gongchanginfo.gc_company a where  addtime > {starttime} and addtime < {endtime} and EXISTS (SELECT pid FROM productinfo.pd_info b where b.cid = a.cid and b.pubtime > {starttime} and b.pubtime  < {endtime}   limit 1) "
						),			
					'com_takes' => array(
						'name' => '企业申领总量' ,
						'sql' => "select '企业申领总量', count(*) from gcoperate.ad_comclaim where   addtime > {starttime} and  addtime < {endtime} "
					)
				)
			),
		'audit' => array(
				'name' => '审核状态',
				'child' => array(
					'audit_companystatus_true' => array(
						'name' => '通过审核的企业数量' ,
						'sql' => "select '通过审核的企业数量', count(*) from gcoperate.ad_company a, gongchanginfo.gc_company b where a.checktime > {starttime} and a.checktime < {endtime} and a.cid = b.cid	and b.status = 1"
						),
					'audit_companystatus_false' => array(
						'name' => '拒审的企业数量' ,
						'sql' => "select '拒审的企业数量', count(*) from gcoperate.ad_company a, gongchanginfo.gc_company b where a.checktime > {starttime} and a.checktime < {endtime} and a.cid = b.cid	and b.status = -1"
						),
					'audit_company_takes_true' => array(
						'name' => '企业申领通过审核' ,
						'sql' => "select '企业申领通过审核', count(*) from  gcoperate.ad_comclaim   where  addtime > {starttime} and  addtime < {endtime}  and checked = 1",
					),
					'audit_company_takes_false' => array(
						'name' => '企业申领未通过审核' ,
						'sql' => "select '企业申领未通过审核', count(*) from  gcoperate.ad_comclaim where  addtime > {starttime} and  addtime < {endtime}  and checked = -1 ",
					)
				)
			),

		'comtype' => array(
				'name' => '企业分类',
				'child' => array(
				
				'com_busmode' => array(
						'name' => '企业数量' ,
						'sql' => "select busmode, count(*) from gongchanginfo.gc_company  where  addtime > {starttime} and addtime < {endtime}  group by busmode order by busmode"
					),
					'audit_company_true' => array(
						'name' => '审核通过的企业' ,
						'sql' => "select a.busmode ,count(*) from gongchanginfo.gc_company a, gcoperate.ad_company b where a.status = 1 and a.cid =b.cid and a.addtime > {starttime} and a.addtime < {endtime}  group by a.busmode order by busmode"
						),

					'audit_company_false' => array(
						'name' => '被拒审的企业' ,
						'sql' => "select busmode ,count(*) from gongchanginfo.gc_company a, gcoperate.ad_company b where a.status = -1 and a.cid =b.cid and a.addtime > {starttime} and a.addtime < {endtime}  group by a.busmode order by busmode"
						) 
					),

				'replacename' => array(
							'1' => '生产型',
							'3' => '贸易型',
							'4' => '其他型',
							'5' => '服务型'
						   )
			),
		
		'buslicense' => array(
				'name' => '营业执照',
				'child' => array(
					'buslicense_submit' => array(
						'name' => '营业执照提交总量' ,
						'sql' => "select '营业执照提交总量',count(*) from  gongchanginfo.gc_buslicense  where addtime > {starttime} and  addtime < {endtime} ",
						),

					'buslicense_audit_true' => array(
						'name' => '营业执照审核通过' ,
						'sql' => "select '营业执照审核通过', count(*) from  gongchanginfo.gc_buslicense where  addtime > {starttime} and addtime < {endtime} and status = 1",
						) ,
					'buslicense_audit_false' => array(
						'name' => '营业执照拒审' ,
						'sql' => "select '营业执照拒审',count(*) from  gongchanginfo.gc_buslicense where  addtime > {starttime} and addtime < {endtime} and status = -1",
						)
				)
			),

	'industry' => array(
				'name' => '行业分类',
				'child' => array(
					'regcom' => array(
						'name' => '注册企业' ,
						'sql' => "select cate1 ,count(*) from gongchanginfo.gc_company  where addtime > {starttime} and  addtime < {endtime}   group by cate1 order by cate1",
						),
						
					'auditcom2' => array(
						'name' => '认证用户' ,
						'sql' => "select cate1 ,count(*) from gongchanginfo.gc_company a , gongchanginfo.gc_userinfo b  where a.addtime > {starttime} and  a.addtime < {endtime} and a.uid = b.uid and b.usergroup = 3  group by a.cate1 order by cate1",
						) ,

					'gongchanguser' => array(
						'name' => '工厂用户' ,
						'sql' => "select cate1 ,count(*) from gongchanginfo.gc_company a , gongchanginfo.gc_userinfo b where a.addtime > {starttime} and  a.addtime < {endtime} and a.uid = b.uid and b.usergroup = 4 group by a.cate1 order by cate1",
						),

					'payuser' => array(
						'name' => '付费用户' ,
						'sql' => "select cate1 ,count(*) from gongchanginfo.gc_company a , gongchanginfo.gc_userinfo b where a.addtime > {starttime} and  a.addtime < {endtime} and a.uid = b.uid and b.usergroup = 5 group by a.cate1 order by cate1",
						)
				),
				'replacenamefunction' =>  array(
					'function' => 'getcatefromjson',
					'param' => array('http://192.168.0.8:9050/cate_json/?name=getcate&key=cate_0')	
				)
			),
	'club_industy' => array(
				'name' => '行业排行',
				'child' => array(
				'club_sortbyenq' => array(
						'name' => '行业排行（按询价数）' ,
							'sql' => "select cate2, count(*) as num from productoffer.pd_sendenq where  pubtime > {starttime} and  pubtime < {endtime}  and cate2 > 0  group by cate2 order by num desc limit 0,50"
						),
					'club_sortbycom' => array(
						'name' => '行业排行（按企业数）' ,
						'sql' => "select cate2, count(*) as num from gongchanginfo.gc_company where  addtime > {starttime} and  addtime < {endtime}  and cate2 > 0  group by cate2 order by num desc limit 0,50",
						),
					'club_sortbybuslogo' => array(
						'name' => '行业排行（按营业执照数）' ,
						'sql' => "select cate2, count(*) as num from gongchanginfo.gc_company where  addtime > {starttime} and  addtime < {endtime}  and licensestatus = 1  and cate2 > 0 group by cate2 order by num desc limit 0,50 ",
						),
				'club_sortbypdinfo' => array(
						'name' => '行业排行（按发布产品数）' ,
						'sql' => "select cate2 ,count(*) as num from productinfo.pd_info where pubtime > {starttime} and pubtime < {endtime} and cate2 > 0  group by cate2  order by num desc limit 0,50",
						),
			   'club_sortbypdinfo' => array(
						'name' => '行业排行（按询价数量）' ,
						'sql' => "select cate2 ,count(*) as num from productoffer.pd_sendenq where pubtime > {starttime} and pubtime < {endtime} and cate2 > 0  group by cate2  order by num desc limit 0,50",
						)
					),
				'orireplace' => array(
					'function' => 'getcate2',
					'param' => 'empty'
				)
		),
   	'gc_mobile' => array(
				'name' => '手机验证',
				'child' => array(
					'mobile_msg' => array(
						'name' => '短信发送数量' ,
						'sql' => "select '短信发送',sum(sendtimes) from gongchanginfo.gc_checkmobile where checktime > {starttime} and checktime < {endtime} and code > 0 "
						),
					'mobile_msg_more' => array(
						'name' => '发送短信超过一次的企业数量' ,
						'sql' => "select '发送短信超过一次的企业', count(*) as num from gongchanginfo.gc_checkmobile where checktime > {starttime} and checktime < {endtime} and sendtimes > 1",
						) ,
					'mobile_com' => array(
						'name' => '绑定手机企业' ,
						'sql' => "select '绑定手机企业',count(*) from gongchanginfo.gc_checkmobile where checktime > {starttime} and checktime < {endtime} and is_mobile = 1",
						),
					'mobile_usernum' => array(
						'name' => '绑定手机新会员' ,
						'sql' => "select '绑定手机新会员',count(*) from gongchanginfo.gc_userinfo where regtime > {starttime} and regtime < {endtime} and is_mobile = 1",
						),
					'mobile_shopnum' => array(
						'name' => '开通商铺新会员' ,
						'sql' => "select '开通商铺新会员',count(*) from gongchanginfo.gc_userinfo where regtime > {starttime} and regtime < {endtime} and is_mobile = 1 and comstatus = 1 ",
						),
					'mobile_usernum_more' => array(
						'name' => '发送短信次数大于1且通过验证会员数量' ,
						'sql' => "select '发送短信次数大于1且通过验证会员数量',count(*) as num from gongchanginfo.gc_checkmobile where checktime > {starttime} and checktime < {endtime} and sendtimes > 1 and is_mobile = 1",
						)
				)
			)
	);

