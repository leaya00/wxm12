 <!--banner 开始-->
 <div class="banner_ny">
  <div class="banner_ny01">
   <div id="demoContent">
		<div class="effect">
				<div id="slideBox" class="slideBox">
					<div class="hd">
						<ul><li>1</li><li>2</li><li>3</li></ul>
					</div>
					<div class="bd">
						<ul>
							<li><img src="<?php echo Yii::app()->baseUrl; ?>/images/slide1.jpg" /></li>
							<li><img src="<?php echo Yii::app()->baseUrl; ?>/images/slide2.jpg" /></li>
							<li><img src="<?php echo Yii::app()->baseUrl; ?>/images/slide3.jpg" /></li>
                            <li><img src="<?php echo Yii::app()->baseUrl; ?>/images/slide4.jpg" /></li>
						</ul>
					</div>
				</div>
		<script type="text/javascript">jQuery(".slideBox").slide( { mainCell:".bd ul",effect:"top",autoPlay:true} );</script>
		</div>
    </div>
  </div>
 </div>
<!--banner 结束-->

<div class="main">
  <div class="main_all">
   <div class="main_all_left">
    <ul>
     <h2>过期活动</h2>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
    </ul>
    <div class="main_all_left_fabu"><a href="<?php echo $this->createUrl('pm/publish'); ?>"><img src="<?php echo Yii::app()->baseUrl; ?>/images/ny_fabu.jpg" width="130" height="40" /></a></div>
   </div>
   <div class="main_all_right">
    <div class="main_all_right_img"></div>
    <div class="ny_table_header">
     <ul class="ny_title">
      <li class="ny_mlist01"><span>编号</span></li>
      <li class="ny_mlist02"><span>项目名称</span></li>
      <li class="ny_mlist03"><span>发起人</span></li>
      <li class="ny_mlist04"><span>人数</span></li>
      <li class="ny_mlist05"><span>参与要求</span></li>
      <li class="ny_mlist06"><span>截至时间</span></li>
      <li class="ny_mlist07"><span>我要参与</span></li>
      </ul>
    <?php 
      foreach($project_list['data'] as $item){
    ?>
    <ul class="ny_jp_list">
       <li class="ny_mlist01"><a href="#" class="blue_color"><?php echo $item['number'];?> </a></li>
       <li class="ny_mlist02"><span class="org_color"><?php echo $item['name'];?>  </span></li>
       <li class="ny_mlist03"><span><?php echo $item['promoterName'];?> </span></li>
       <li class="ny_mlist04"><span><?php echo $item['personCount'];?></span></li>
       <li class="ny_mlist05"><span><?php echo $item['demand'];?></span></li>
       <li class="ny_mlist06"><span><?php echo date('Y-m-d',strtotime($item['lastdate']));?></span></li>
       <li class="ny_mlist07">
          <a href="<?php echo $this->createUrl("site/project_detail",array("project_id"=>$item['id']))?>"  target="_blank" class="chakan">查看详情</a>
           <?php if($item['applyid']==null){?>
          	<a href="<?php echo $this->createUrl("project/apply",array("project_id"=>$item['id']))?>" class="chakan">马上参加</a>
          <?php }else{?>
          	<a>&nbsp;&nbsp;已参加&nbsp;&nbsp;</a>
          <?php }?>          
      </li>
    </ul>     
    <?php }?>
     
      <!--分页-->
        <div class="msearch_fenye">
          <table width="1000" style="" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" height="32" valign="middle"><table border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><div class="fenye_con2">
                        <?php 
                            foreach($project_list['page'] as $item){
                        ?>
                        <?php if($item['type']=='f' && !$item['hidden'] ){?>
                           <a class="width_60 fenye_home" href="<?php echo $this->createUrl("site/project_list",array("page"=>$item['page']))?>">首页</a>  
                        <?php }?>
                        <?php if($item['type']=='p' && !$item['hidden'] ){?>
                            <a class="width_60" href="<?php echo $this->createUrl("site/project_list",array("page"=>$item['page']))?>">上一页</a> 
                        <?php }?>
                        <?php if($item['type']=='page' ){
                            if($item['selected']){
                        ?>
                           <span><?php echo $item['label']?></span> 
                        <?php
                            }else{
                        ?>
                           <a href="<?php echo $this->createUrl("site/project_list",array("page"=>$item['page']))?>"><?php echo $item['label']?></a> 
                        <?php }}?>
                        <?php if($item['type']=='n' && !$item['hidden']){?>
                           <a class="width_60" href="<?php echo $this->createUrl("site/project_list",array("page"=>$item['page']))?>">下一页</a> 
                        <?php }?>
                        <?php if($item['type']=='l' && !$item['hidden']){?>
                           <a class="width_60" href="<?php echo $this->createUrl("site/project_list",array("page"=>$item['page']))?>">末页</a>
                        <?php }?>
                        <?php }?>
                        
                      </div></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </div>
        <!--分页 end-->
     <!--分页
        <div class="msearch_fenye">
          <table width="1000" style="" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td align="center" height="32" valign="middle"><table border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><div class="fenye_con2">
                        <a class="width_60 fenye_home" href="#">首页</a> <a class="width_60" href="#">上一页</a> 
                        <a href="#">1</a> 
                        <a href="#">2</a> 
                        <span>3</span> 
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a class="width_60" href="#">下一页</a> 
                        <a class="width_60" href="#">末页</a>
                        <input name="" class="tz_text" type="text" />
                        <input class="go_tijiao" name="" value="Go" type="submit" />
                      </div></td>
                  </tr>
                </table></td>
            </tr>
          </table>
        </div>
        -->
    </div>
   </div>
  <div class="clearfloat"></div>  
 </div>
 <div  class="guangao"><img src="<?php echo Yii::app()->baseUrl; ?>/images/ny_banner01.jpg" width="1182" height="104" /></div>
</div>


