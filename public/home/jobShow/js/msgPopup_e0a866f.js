define("common/widgets/common/msgPopup",["require","exports","module","dep/jquery-mousewheel/jquery.mousewheel.min","dep/mCustomScrollbar/js/jquery.mCustomScrollbar","dep/artTemplate/dist/template","common/components/template-helper/main"],function(require){function a(a){return"PAI"===a.messageType?!0:"SYSTEM"===a.messageType&&null!=a.businessStatus?!0:!1}function c(){N.hasClass("open")&&N.find("li.lg_msg_item").removeClass("is_new")}require("dep/jquery-mousewheel/jquery.mousewheel.min"),require("dep/mCustomScrollbar/js/jquery.mCustomScrollbar");var _=require("dep/artTemplate/dist/template");require("common/components/template-helper/main");var g={PAI_C_APPLY_COMPLETE:'太棒啦，你已成功提交申请。<br/>\n请耐心等待一拍职业顾问的筛选审核，预计两个工作日内通过邮件和微信通知。\n目前一拍主要服务对象是3年+工作经验，30w+年薪的互联网技术，产品，设计，运营，市场资深从业者，暂只开通服务北京，上海，广州，深圳，杭州，成都六大城市。\n同时，为方便顾问更准确的筛选判断，请参考如下的一拍简历要求，尽快完善你的在线简历：</br>\n\n<strong>基本信息</strong><br/>\n包括一句话的自我评价和基本信息；<br/>\n\n<strong>项目经验</strong><br/>\n请至少填写一项你最牛的项目经验，多多益善；<br/>\n\n<strong>工作经历</strong><br/>\n请至少要填写你最近的工作经历；完整的工作经历更能够吸 引企业邀约；<br/>\n\n<strong>教育经历</strong><br/>\n简单的教育经历介绍有助于企业了解你；<br/>\n\n<strong>作品展示</strong><br/>\n虽然不是必须填写的，但是出色的作品展示能够给你加分很多。<br/>\n\n现在就登录拉勾继续完善在线简历吧~  <a class="complete-link" target="_blank" href="http://www.lagou.com/resume/basic.html">&gt;&gt; 去完善简历</a>',PAI_C_AUDIT_YES:'Hi {{name}}，你好<br/>\n恭喜你通过拉勾一拍的审核，审核通过以后就可以参加线上专场了。<a href="http://pai.lagou.com/talent/guide.html" target="_blank">点击使用攻略，查看如何使用一拍</a>。',PAI_C_AUDIT_NO_UNCONTACT:"亲爱的{{name}} ：<br/>\n非常感谢你报名参加拉勾一拍。不过由于一直无法联系上你，导致我们的顾问无法确定你是否可以参加一拍的Dating park。<br/>\n我们的Dating park会对报名对象进行严格的筛选，这是为了让求职者收到更多优秀的企业邀约，获得最好的求职体验。同时也会严格把关企业的质量，请理解。<br/>\n顾问和你联系的原因，主要是你的个人简历不完善或者有其他信息需要和你确认，而且如果报名成功，顾问也需要后续和你联系，所以你可以保证通讯顺畅的时候，再次申请报名一拍。",PAI_C_AUDIT_NO_BASICCONDITION:"亲爱的{{name}} ：<br/>\n非常抱歉，你没有通过我们的筛选。非常感谢你报名参加拉勾一拍。<br/>\n目前一拍主要服务对象是3年+工作经验，30w+年薪的互联网技术，产品，设计，运营，市场资深从业者，暂只开通服务北京，上海，广州，深圳，杭州，成都六大城市。<br/>\n根据你的简历，我们无法保证你在Datingpark上可以获得满意的offer。我们会不断丰富 一拍技能类型，请多多关注一拍动态。<br/>\n我们的Dating park会对报名对象进行严格的筛选，这是为了让求职者收到更多优秀的企业邀约，获得最好的求职体验。同时也会严格把关企业的质量，请理解。<br/>",PAI_C_AUDIT_NO_OTHERREASON:"亲爱的{{name}} ：<br/>\n非常抱歉，你没有通过我们的筛选。非常感谢你报名参加拉勾一拍。\n目前一拍主要服务对象是3年+工作经验，30w+年薪的互联网技术，产品，设计，运营，市场资深从业者，暂只开通服务北京，上海，广州，深圳，杭州，成都六大城市。\n根据你的简历，我们无法保证你在Datingpark上可以获得满意的offer。我们会不断丰富 一拍技能类型，请多多关注一拍动态\n我们的Dating park会对报名对象进行严格的筛选，这是为了让求职者收到更多优秀的企业邀约，获得最好的求职体验。同时也会严格把关企业的质量，请理解。",PAI_C_AUDIT_NO_NOINTENTION:"亲爱的{{name}} ：<br/>\n非常抱歉，你没有通过我们的筛选。非常感谢你报名参加拉勾一拍。\n顾问和你沟通的过程中，发现你并没有求职意向，仅仅是为了体验一拍产品而报名一拍。\n非常感谢你对一拍产品的关注。目前我们的报名人数很多 ，顾问很辛苦 ，所以建议去一拍首页了解详情。",PAI_C_AUDIT_NO_RESUMEINFO:"亲爱的{{name}} ：<br/>\n非常感谢你报名参加拉勾一拍。不过，由于你的简历太过于简单，我们的顾问无法确定你是否可以参加一拍的Dating park。\n为了保证每一期Dating park的体验，我们要求你的简历需具备基本的筛选条件。请参考如下的一拍简历要求，完善你的简历",PAI_C_SCHEDULE_YES:"Hi {{name}}！<br/>\n很高兴的通知你，你的简历将于{{startDay}}（周{{week}}）上午10点上架Dating Park，并展示7天。敬请到时关注，别错过你心仪的企业发出的邀约哦！\n",PAI_C_SCHEDULE_NO_CANNOTCONTACTCANDIDATE:"亲爱的{{name}}：<br/>\n非常感谢你报名参加拉勾一拍。不过由于一直无法联系上你，导致我们的顾问无法确定你是否可以参加一拍的Dating park。\n我们的Dating park会对报名对象进行严格的筛选，这是为了让求职者收到更多优秀的企业邀约，获得最好的求职体验。同时也会严格把关企业的质量，请理解。\n顾问和你联系的原因，主要是你的个人简历不完善或者有其他信息需要和你确认，而且如果报名成功，顾问也需要后续和你联系，所以你可以保证通讯顺畅的时候，再次申请 报名一拍。",PAI_C_SCHEDULE_NO_RESUNEINFO:"亲爱的{{name}}：<br/>\n非常感谢你报名参加拉勾一拍。不过，由于你的简历太过于简单，我们的顾问无法确定你是否可以参加一拍的Dating park。\n为了保证每一期Dating park的体验，我们要求你的简历需具备基本的筛选条件。请参考如下的一拍简历要求，完善你的简历。",PAI_C_SCHEDULE_NO_NOINTENTION:"亲爱的{{name}}：<br/>\n非常感谢你报名参加拉勾一拍。在我们的顾问和你沟通的过程，得知你已经没有求职意向。仍然感谢你参与一拍.\n一拍正在不断丰富Dating Park，立志帮每位像你这样的大咖找到满意的工作。谢谢你对一拍的关注。",PAI_C_AUCTION_START:"Hi {{name}}！<br/>\n现在开始，你的简历将在Dating Park进行展示，为期7天。记得及时查看待处理的约见哦！\n在你未接受企业邀约的情况下，企业无法查看你的联系方式。\n有问题吗？试试咨询你的一拍私人顾问吧！\n",PAI_C_INVITE_EVERYTOTAL:"Hi {{name}}！<br/>\n截止到今晚8点，你已经收到了{{invitesTotalNum}}个约见邀请，{{invitesNum}}个还未处理。在你未接受企业邀约的情况下，企业无法看到你的联系方式，但你可以通过私信与企业沟通。收到邀约起7天内不回应，将视为自动拒绝邀约。记得及时处理你的约见哦！\n有问题吗？试试咨询你的一拍私人顾问吧！",PAI_C_INVITE_ENDTOTAL:"Hi {{name}}！<br/>\n你的简历即将于明早10点从一拍Dating Park下架，感谢你的参与。\n截止到今晚8点，你已经收到了{{invitesTotalNum}}个约见邀请，{{invitesNum}}个还未处理。在你未接受企业邀约的情况下，企业无法看到你的联系方式，但你可以通过私信与企业沟通。收到邀约起7天内不回应，将视为自动拒绝邀约。记得及时处理你的约见哦！",PAI_C_INVITE_END:"亲爱的{{name}}：<br/>\n非常感谢你报名参加拉勾一拍。在我们的顾问和你沟通的过程，得知你已经没有求职意向。仍然感谢你参与一拍。\n一拍正在不断丰富Dating Park，立志帮每位像你这样的大咖找到满意的工作。谢谢你对一拍的关注。",PAI_C_OFFER_AUDIT_YES:"Hi,{{name}}：<br/>\n恭喜你通过一拍入职反馈奖励申请，经核对，你的申请符合 ［{{offerType}}］，将获得 ［{{offerMoney}}］的现金奖励， {{offerMessage}}请你按照如下方式获取现金红包奖励，如果你后续获得了新的offer，你可以继续申请 领取奖励。\n领取方式：<br/>\n1、微信扫描邮件底部拉勾招聘二维码，关注拉勾微信公众号。<br/>\n2、到 个人中心 我的奖励扫描红包二维码，验证无误后现金奖励将以红包的形式发送到你关注的拉勾微信公众号里，点击领取，即可获得奖励。<br/>\n3、由于微信红包金额限制，如果你获得了300元入职奖励，奖金将以3个红包形式发到你的微信公众后台，请及时领取。",PAI_C_OFFER_AUDIT_NO:"Hi,{{name}}：<br/>\n很抱歉，你没有通过一拍offer奖励，运营人员在审核的过程中发现，你不符合领取入职奖励的要求，如果你后续获得了新的offer或者入职，你可以继续 领取奖励。<br/>\n领取入职奖励的要求为：<br/>\n1、资格要求：通过拉勾一拍顾问服务获得offer或者入职；获得offer未入职可以获得200元现金奖励；获得offer并且入职可以获得300元的现金奖励。<br/>\n2、证明文件要求：offer证明包括如下几种形式：offer信，offer信扫描件，offer信邮件截图，offer信照片；入职奖励需offer证明和工卡照片。",PAI_PAI_C_PUSH:'【拉勾一拍邀请你来参加】拉勾一拍是拉勾网推出的高端招聘产品，汇集行业领域互联网企业，目前服务于有3年以上相关工作经验的北上广深杭成高端候选人，参与拉勾一拍，无须主动投递简历，专场履历展示7天，1V1职业顾问全程跟踪服务，轻松拿到满意offer。<a class="complete-link" href="http://pai.lagou.com/index.html" target="_blank" data-lg-tj-id="kr00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">点此报名</a>。\n',PAI_PAI_C_PUSH_FOR_TOP:"【拉勾一拍邀请你来参加】拉勾一拍是拉勾网旗下高端招聘产品，参与拉勾一拍，无须主动投递简历，坐等企业邀约。"};_.helper("resolvePaiTopTemplate",function(a,c){a=$.parseJSON(a);var N="PAI_C_PUSH"===c?"PAI_"+c+"_FOR_TOP":"PAI_"+c,b=g[N],h=_.compile(b||"")(a);return h.replace(/<\/?a[^>]*>/,"").replace(/<\/a[^>]*>/,"")});var N=$(".msg_dropdown"),b=$("#headMsgAmount"),h=function(){N.data("unreaded")===!0&&(PASSPORT.util.rpc({url:GLOBAL_DOMAIN.ctx+"/message/clearNew.json",succ:function(){},fail:function(){}}),N.data("unreaded",!1))};PASSPORT.util.rpc({url:GLOBAL_DOMAIN.ctx+"/message/newMessageList.json",succ:function(c){var g,h,w=$("#lgPopupMsgBody"),I=c.content.data;if(I&&I.newMessageList&&I.newMessageList.length>0){I.newMessageCount&&(N.data("unreaded",!0),b.removeClass("hide").html(I.newMessageCount));for(var i=0;i<I.newMessageList.length;i++)a(I.newMessageList[i])||(g=I.newMessageList[i].content,g&&"object"!=typeof g&&(h=$.parseJSON(g),h.companyShowName=h.companyShortName||h.companyName,I.newMessageList[i].content=h));var E='{{if content==null || content.data==null || content.data.newMessageList==null || content.data.newMessageList.length==0}}\n    <div class="no_body">\n        <p class="lg_msg_avatar no_msg_i">暂时没有新的消息~</p>\n    </div>\n{{else}}\n    <ul class="lg_top_msg_list">\n    {{each content.data.newMessageList as item}}\n        {{if item.messageType==\'DELIVER\'}}\n        <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n            <!-- 投递反馈 -->\n            <a class="detail" target="_blank" href="{{FE_base}}/message/businessDetail.html?type=DELIVER&businessId={{item.businessId}}">\n                {{if item.businessStatus==\'SUCCESS\'}}\n                你投递给<span class="empha">{{item.content.companyShowName}}·{{item.content.positionName}}</span>职位的简历，已经投递成功，请静候佳音\n                {{/if}}\n                {{if item.businessStatus==\'FORWARD\'}}\n                你投递给<span class="empha">{{item.content.companyShowName}}·{{item.content.positionName}}</span>职位的简历，已经被转发，请静候佳音\n                {{/if}}\n                {{if item.businessStatus==\'READ\'}}\n                你投递给<span class="empha">{{item.content.companyShowName}}·{{item.content.positionName}}</span>职位的简历，已经被招聘方查看啦，请静候佳音\n                {{/if}}\n                {{if item.businessStatus==\'PREPARE_CONTACT\'}}\n                你投递给<span class="empha">{{item.content.companyShowName}}·{{item.content.positionName}}</span>职位的简历，已经通过初筛，企业可能会在近期与你沟通，请保持联系方式畅通\n                {{/if}}\n                {{if item.businessStatus==\'INTERVIEW\'}}\n                你投递给<span class="empha">{{item.content.companyShowName}}·{{item.content.positionName}}</span>职位的招聘方给你发来了面试邀请，快去查看一下吧\n                {{/if}}\n                {{if item.businessStatus==\'REFUSE\'}}\n                你投递给<span class="empha">{{item.content.companyShowName}}·{{item.content.positionName}}</span>职位的简历被招聘方标记为不合适，不要气馁，相信更好的机会一定还在等着你！\n                {{/if}}\n            </a>\n        </div></li>\n        {{/if}}\n        {{if item.messageType==\'PLUS\'}}\n        <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n            <!-- 职位邀请 -->\n            <a class="detail" target="_blank" href="{{FE_base}}/message/businessDetail.html?type=PLUS&businessId={{item.content.id}}">\n                <span class="empha">{{item.content.companyShowName}}</span>的Leader很欣赏你的从业经历，给你发了面试邀请，快去查看一下吧。\n            </a>\n        </div></li>\n        {{/if}}\n        {{if item.messageType==\'PAI\'}}\n        <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n            <!-- 一拍 -->\n            <a class="detail" target="_blank" href="{{FE_base}}/message/msgdetail.html#pai">\n                {{#item.content | resolvePaiTopTemplate: item.businessStatus | formatText: 60}}\n            </a>\n        </div></li>\n        {{/if}}\n        {{if item.messageType==\'SYSTEM\'}}\n            {{if item.businessStatus==null}}\n                <!-- 系统消息，如果是纯文本消息，则无title，需要显示content -->\n                {{if item.content.type==\'TEXT\'}}\n                <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                    <a class="detail" target="_blank" href="{{FE_base}}/message/msgdetail.html#system">\n                        {{item.content.info | formatText: 60}}\n                    </a>\n                </div></li>\n                {{else}}\n                    {{if item.content.articleLink!=null || item.content.articleLink!=\'\'}}\n                    <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                        <a class="detail" target="_blank" href="{{item.content.articleLink}}">{{item.content.title | formatText: 60}}</a>\n                    </div></li>\n                    {{else}}\n                    <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                        <a class="detail" target="_blank" href="{{FE_base}}/message/msgdetail.html#system">\n                            {{item.content.title | formatText: 60}}\n                        </a>\n                    </div></li>\n                    {{/if}}\n                {{/if}}\n            {{else}}\n                <!-- 一拍系统消息 -->\n                {{if item.businessStatus===\'PAI_C_PUSH\'}}\n                <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                    <a class="detail" data-lg-tj-id="hT00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank" href="{{FE_base}}/message/msgdetail.html#system">\n                        {{#item.content | resolvePaiTopTemplate: item.businessStatus | formatText: 60}}\n                    </a><a class="detail" data-lg-tj-id="kq00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank" href="http://pai.lagou.com/index.html">立即报名</a>\n                </div></li>\n                {{else}}\n                <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                    <a class="detail" target="_blank" href="{{FE_base}}/message/msgdetail.html#system">\n                        {{#item.content | resolvePaiTopTemplate: item.businessStatus | formatText: 60}}\n                    </a>\n                </div></li>\n                {{/if}}\n            {{/if}}\n        {{/if}}\n        {{if item.messageType==\'COMMUNITY\'}}\n            <!-- 三个为什么消息 -->\n            {{if item.businessStatus==\'QUESTION_ASKTO\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                {{each item.content.userList as user index}}{{if user.userName == \'匿名用户\'}}匿名用户{{else}}<a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{user.userId}}.html"><span class="empha">{{user.userName}}</span></a>{{/if}}{{if index + 1 < item.content.userList.length}}，{{/if}}{{/each}}{{if item.content.newsNum > 3}}等{{item.content.newsNum}}人{{/if}}向你提问<a class="detail" target="_blank" href="{{FE_zbase}}/question/{{item.businessId}}.html?code={{item.content.code}}"><span class="empha">{{item.content.questionTitle}}</span></a>\n            </div></li>\n            {{else if item.businessStatus==\'ANSWER_ADD\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                {{each item.content.userList as user index}}{{if user.userName == \'匿名用户\'}}匿名用户{{else}}<a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{user.userId}}.html"><span class="empha">{{user.userName}}</span></a>{{/if}}{{if index + 1 < item.content.userList.length}}，{{/if}}{{/each}}{{if item.content.newsNum > 3}}等{{item.content.newsNum}}人{{/if}}回答了<a class="detail" target="_blank" href="{{FE_zbase}}/question/{{item.businessId}}.html"><span class="empha">{{item.content.questionTitle}}</span></a>\n            </div></li>\n            {{else if item.businessStatus==\'COMMENT_ADD\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                {{each item.content.userList as user index}}{{if user.userName == \'匿名用户\'}}匿名用户{{else}}<a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{user.userId}}.html"><span class="empha">{{user.userName}}</span></a>{{/if}}{{if index + 1 < item.content.userList.length}}，{{/if}}{{/each}}{{if item.content.newsNum > 3}}等{{item.content.newsNum}}人{{/if}}评论了<a class="detail" target="_blank" href="{{FE_zbase}}/answer/{{item.businessId}}.html"><span class="empha">{{item.content.questionTitle}}</span></a>中你的回答\n            </div></li>\n            {{else if item.businessStatus==\'STAR_ANSWER\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                {{each item.content.userList as user index}}{{if user.userName == \'匿名用户\'}}匿名用户{{else}}<a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{user.userId}}.html"><span class="empha">{{user.userName}}</span></a>{{/if}}{{if index + 1 < item.content.userList.length}}，{{/if}}{{/each}}{{if item.content.newsNum > 3}}等{{item.content.newsNum}}人{{/if}}赞同了<a class="detail" target="_blank" href="{{FE_zbase}}/answer/{{item.businessId}}.html"><span class="empha">{{item.content.questionTitle}}</span></a>中你的回答\n            </div></li>\n            {{else if item.businessStatus==\'QUESTION_REFUSE\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                <a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{item.receiveUserId}}.html">\n                    很遗憾，你的提问<span class="empha">{{item.content.questionTitle}}</span>未通过审核\n                </a>\n            </div></li>\n            {{else if item.businessStatus==\'ANSWER_REFUSE\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                <a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{item.receiveUserId}}.html">\n                    很遗憾，<span class="empha">{{item.content.questionTitle}}</span>中你的回答未通过审核\n                </a>\n            </div></li>\n            {{else if item.businessStatus==\'COMMENT_REFUSE\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                <a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{item.receiveUserId}}.html">\n                    很遗憾，<span class="empha">{{item.content.questionTitle}}</span>中你的评论未通过审核\n                </a>\n            </div></li>\n            {{else if item.businessStatus==\'BY_USER_FOLLOWED\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                {{each item.content.userList as user index}}{{if user.userName == \'匿名用户\'}}匿名用户{{else}}<a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{user.userId}}.html"><span class="empha">{{user.userName}}</span></a>{{/if}}{{if index + 1 < item.content.userList.length}}，{{/if}}{{/each}}{{if item.content.newsNum > 3}}等{{item.content.newsNum}}人{{/if}}关注了你\n            </div></li>\n            {{else if item.businessStatus==\'COMMUNITY_INVITE_ANSWER\'}}\n            <li class="lg_msg_item {{if item.isNew===true}}is_new{{/if}}">{{if item.isNew===true}}<em>·</em>{{/if}}<div>\n                {{each item.content.userList as user index}}{{if user.userName == \'匿名用户\'}}匿名用户{{else}}<a class="detail" target="_blank" href="{{FE_zbase}}/user/userIndex-{{user.userId}}.html"><span class="empha">{{user.userName}}</span></a>{{/if}}{{if index + 1 < item.content.userList.length}}，{{/if}}{{/each}}{{if item.content.newsNum > 3}}等{{item.content.newsNum}}人{{/if}}邀请你回答<a class="detail" target="_blank" href="{{FE_zbase}}/question/{{item.businessId}}.html"><span class="empha">{{item.content.questionTitle}}</span></a>\n            </div></li>\n            {{/if}}\n        {{/if}}\n    {{/each}}\n    </ul>\n{{/if}}\n',T=$.extend({},c,{FE_base:GLOBAL_DOMAIN.ctx,FE_zbase:GLOBAL_DOMAIN.zctx}),S=_.compile(E)(T);w.html(S),$(".lg_msg_pu_body").mCustomScrollbar({theme:"dark-2"})}else $("#lgPopupMsgBody").html('<div class="no_body"><p class="lg_msg_avatar no_msg_i">暂时没有新的消息~</p></div>')},fail:function(){$("#lgPopupMsgBody").html('<div class="no_body"><p class="lg_msg_avatar no_msg_i">暂时没有新的消息~</p></div>')}}),$(".msg_group").click(function(a){a.stopImmediatePropagation(),h(),c(),N.toggleClass("open"),b.hide(200)}),$(document).click(function(a){var _=$(a.target);_.parents(".lg_msg_popup").length>0||(c(),N.removeClass("open"))})});