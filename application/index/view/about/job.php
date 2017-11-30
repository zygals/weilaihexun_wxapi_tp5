<SCRIPT src="__STATIC__js/lm_helpcenter.js" type="text/javascript"></SCRIPT>

{include file="layout/about_nav"}

<div class="about_right">
    <div class="about_title">
        <dl style="text-align:center; padding-left:0;">
            <dt>招贤纳士</dt>

        </dl>
    </div>

    <div class="zhaopin">
        <ul>
            <li>职位名称</li>
            <li>招聘部门</li>
            <li>招聘人数</li>
            <li>工作地点</li>
        </ul>
    </div>

    <DIV class="lm_hcQaCDiv">
        <UL class="lm_hSearchUl">
<?php foreach ($list_recruit as $row_){?>
            <LI><A href="javascript:void(0);"><p>{$row_->name}</p><i>{$row_->department}</i><b>{$row_->num}人</b><span>{$row_->addr}</span></A>
                <DIV class="qaCon">
{$row_->duty}

                </DIV>
            </LI>
<?php }?>


        </UL>
    </DIV>

    <div class="zhaopin_text">
        <dl>
            <dt>
            <p>       未来和讯目前正处于快速成长壮大期，现急需大量管理岗位人才和优秀的销售人才，欢迎有才华，有理想、有抱负的朋友加入。</p><br/>
            <p>     
                 古训说“英雄莫问出处”，未来和讯秉承的理念是，无论你来自哪里，什么样的教育背景，在这里，只要您能展现出自我的实力和才华，就肯定会得到企业的重用。我们始终坚持员工和企业共同成长，帮助和培养每一位员工进步和成长是企业设定的首要任务。我们清晰的知道，人才是企业发展的第一生产力，只有每位员工进步了强大了，企业才能做强做大，才会发展的更好。</p>
            <br/>
            <p>     
                 请注意，下面是我们的见面礼，为了迎接你的加入，我们的薪酬制度（特别是销售提成）是目前同行业最高标准。请不要眨眼，你没有看错，是的！同行业提成最高！你的付出和成绩所得到的回报定会让你惊喜和振奋!</p>
            <br/>
            <p>       除了这些我们更有股权和期权激励制度，只要你有能力，有才华、有成为强者和成功者的信念和坚持，这里将是你最棒的舞台。</p>
            <br/>

            <p>在未来和讯：我们以诚相待，吸收、培养、关爱、扶持每一位员工；</p>
            <p>在未来和讯：我们尊重员工的个性与尊严，愿意倾听来自员工的声音；</p>
            <p>在未来和讯：我们鼓励员工自我管理，充分发挥自我优势；</p>
            <p>在未来和讯：我们倡导个人事业与企业共成长；</p></dt>
            <dd>我们真诚的希望与英才们一同展翅翱翔，携手共创未来和讯美好明天！</dd>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
            <p></p>
        </dl>
    </div>
</div>


</div>

</DIV>
