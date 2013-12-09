<div class="main">
  <div class="main_all">
   <div class="main_all_left_ny">
    <div class="main_all_left_news">
     <div class="left_news_all"><h3>竞赛结果</h3></div>
     <div class="left_news_info">
      <ul>
      <li><a href="#">作品入选2010国际标志设计趋势</a></li>
      <li><a href="#">作品入选2010国际标志设计趋势</a></li>
      <li><a href="#">作品入选2010国际标志设计趋势</a></li>
      <li><a href="#">作品入选2010国际标志设计趋势</a></li>
      <li><a href="#">作品入选2010国际标志设计趋势</a></li>
      <li><a href="#">作品入选2010国际标志设计趋势</a></li>
      </ul>
     </div>
     <div class="left_news_bottom"><samp><a href="#">更多案例</a></samp></div>
    </div>
    <div class="main_all_left">
    <ul>
     <h2>往期活动</h2>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
     <li><a href="#"><samp>2013-11-27</samp>(4)</a></li>
    </ul>
   </div>
   </div>
   <div class="main_all_right">
    <div class="main_all_right_img"></div>
    <div class="ny_lb_zzy">
      <div class="ny_lb_zzy_top">
       <div class="ny_lb_zzy_top_bt"><?php echo $item['name']; ?></div>
       <div class="ny_lb_zzy_top_wz"><?php echo $item['demand']; ?></div>
       <div class="ny_lb_zzy_top_bh"><?php echo $item['number']; ?></div>
      </div>
      <div class="ny_lb_zzy_nr">
      	 <div class="ny_lb_zzy_nr_wz"> 
       		<?php echo $item['content']; ?>
      	 </div>
      </div>
      <div class="ny_lb_zzy_bottom">
       <ul>
        <li><samp>发起人</samp><?php echo $item['promoterName']; ?></li>
        <li><samp>截止日期</samp><?php echo date('Y-m-d',strtotime($item['lastdate'])); ?></li>
       </ul>
       <div class="ny_lb_zzy_bottom_img"><a href="#"><img src="<?php echo Yii::app()->baseUrl; ?>/images/ny_pic02.jpg" width="76" height="33" /></a></div>
      </div>
    </div>
   </div>
  <div class="clearfloat"></div>  
 </div>
 <div  class="guangao"><img src="<?php echo Yii::app()->baseUrl; ?>/images/ny_banner01.jpg" width="1182" height="104" /></div>
</div>