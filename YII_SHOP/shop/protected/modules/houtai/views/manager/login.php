<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta content="MSHTML 6.00.6000.16674" name="GENERATOR" />

        <title>用户登录</title>

        <link href="<?php echo HOUTAI_CSS_URL; ?>User_Login.css" type="text/css" rel="stylesheet" />
    </head><body id="userlogin_body">
        <div></div>
        <div id="user_login">
            <dl>
                <dd id="user_top">
                    <ul>
                        <li class="user_top_l"></li>
                        <li class="user_top_c"></li>
                        <li class="user_top_r"></li></ul>
                </dd><dd id="user_main">
        <!-- //2015年9月13日21:41:04            -->
        <?php $form=$this->beginwidget('CActiveForm') ;?>

                        <ul>
                            <li class="user_main_l"></li>
                            <li class="user_main_c">
                                <div class="user_main_box">
                                    <ul>
                                      
                                        <li>
                                     <?php echo $form->labelEx($manager_login_model_view,'username'); ?>  
                                        </li>
                                        <li>
                                     <?php echo $form->textField($manager_login_model_view,'username'); ?>
                                     <?php echo $form->error($manager_login_model_view,'username'); ?>                  

                                        </li>

                                    </ul>
                                    <ul>
                                       
                                        <li>
                                     <?php echo $form->labelEx($manager_login_model_view,'password'); ?>  

                                        </li>
                                        
                                        <li>
                                     <?php echo $form->textField($manager_login_model_view,'password'); ?> 
                                     <?php echo $form->error($manager_login_model_view,'password'); ?>                  
                                                      
                                       
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="user_main_r">

                                <input style="border: medium none; background: url('<?php echo HOUTAI_IMG_URL; ?>user_botton.gif') repeat-x scroll left top transparent; height: 122px; width: 111px; display: block; cursor: pointer;" value="" type="submit">
                            </li>
                        </ul>
                 
         <?php $form=$this->endwidget('CActiveForm') ;?>

                </dd><dd id="user_bottom">
                    <ul>
                        <li class="user_bottom_l"></li>
                        <li class="user_bottom_c"><span style="margin-top: 40px;"></span> </li>
                        <li class="user_bottom_r"></li></ul></dd></dl></div><span id="ValrUserName" style="display: none; color: red;"></span><span id="ValrPassword" style="display: none; color: red;"></span><span id="ValrValidateCode" style="display: none; color: red;"></span>
        <div id="ValidationSummary1" style="display: none; color: red;"></div>
    </body>
</html>