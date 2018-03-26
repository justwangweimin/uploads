<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  $db_sqls = array(
      's1'=>'select * from `'.$db_config['def'].'ad` where `class_id`=50',//class_id代码是显示在wap首页的幻灯
      's2'=>'select * from `'.$db_config['def'].'hot_key` where `tuijian`=1 and `type`=3 limit 0,16',//class_id代码是显示在wap首页的幻灯
      'dbuser'=>'just',
      'dbpass'=>'nZ8EQFy7SIu6S1Hy',
      'dbname'=>'just',
      'def'=>'just_',
      'charset'=>'utf8',
      'timezone'=>'PRC',
      'coding'=>'b673f2b007de3311cec250c3e8315bab', //生成cookie加密
    );   