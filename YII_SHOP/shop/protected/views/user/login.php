
            <div class="block box">

            <div class="usBox clearfix">
                <div class="usBox_1 f_l">
                    <div class="logtitle"></div>
                    <!-- <form name="formLogin" action="#" method="post"> -->
        <?php $form=$this->beginwidget('CActiveForm') ;?>
                    
                        <table align="left" border="0" cellpadding="3" cellspacing="5" width="100%">
                            <tbody>
                                  <tr>
                                    <td>
                                    <?php echo $form->labelEx($userlogin_model_view,'username'); ?>  
                                    </td>
                                    <td >
                                    <?php echo $form->textField($userlogin_model_view,'username'); ?>    
                                    <?php echo $form->error($userlogin_model_view,'username'); ?>  
                                    
                                    </td>
                                </tr>
                                <tr>
                                <td>
                                    <?php echo $form->labelEx($userlogin_model_view,'password'); ?>  
                                    
                                </td>
                                  
                                    <td>
                                    <?php echo $form->textField($userlogin_model_view,'password'); ?>    
                                    <?php echo $form->error($userlogin_model_view,'password'); ?>  
                                   
                                    </td>
                                </tr>
                               <tr>
                                  <td>
                                    <?php echo $form->labelEx($userlogin_model_view,'verifyCode'); ?>         
                                 </td>
                                 <td>
                                    <?php echo $form->textField($userlogin_model_view,'verifyCode'); ?>  
                                   
                                    <?php $this->widget('CCaptcha'); ?>
                                    <?php echo $form->error($userlogin_model_view,'verifyCode'); ?>  
                                 </td>
                                </tr> 
                                <tr>
                                 <td>
                                    <?php echo $form->checkBox($userlogin_model_view,'rememberMe'); ?>         
                                 </td>
                                 <td>
                                    <?php echo $form->labelEx($userlogin_model_view,'rememberMe'); ?>  
                        

                                 </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td align="left">
                                        <input name="act" value="act_login" type="hidden" />
                                        <input name="back_act" value="./index.php" type="hidden" />
                                        <input name="submit" value="" class="us_Submit" type="submit" />
                                    </td>
                                </tr>
                                <tr><td></td><td><a href="#" class="f3">密码问题找回密码</a>&nbsp;&nbsp;&nbsp;<a href="#" class="f3">注册邮件找回密码</a></td></tr>
                            </tbody></table>
                    <!-- </form> -->
        <?php $form=$this->endwidget('CActiveForm') ;?>

                    <div class="blank"></div>
                </div>
                <div class="usTxt">
                    <div class="regtitle"></div>
                    <div style="padding-left: 50px;">
                        <strong>如果您不是会员，请注册</strong>  <br />
                        <strong class="f4">友情提示：</strong><br />
                        不注册为会员也可在本店购买商品<br />
                        但注册之后您可以：<br />
                        1. 保存您的个人资料<br />
                        2. 收藏您关注的商品<br />
                        3. 享受会员积分制度<br />
                        4. 订阅本店商品信息  <br />
                        <a href="#"><img src="<?php echo IMG_URL; ?>bnt_ur_reg.gif"></a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="blank"></div>
