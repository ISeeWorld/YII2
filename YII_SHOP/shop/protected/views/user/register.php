<!--放入view具体内容-->

            <div class="block box">

                <div class="usBox">
                    <div class="usBox_2 clearfix">
                        <div class="logtitle3"></div>
                        <!-- <form id="yw0" action="/index.php?r=user/register" method="post">  -->
                       <?php $form=$this->beginwidget('CActiveForm',array(
                                 
                                    'enableClientValidation'=>true,
                                    'clientOptions'=>array(
                                        'validateOnSubmit'=>true,
                                    ),
                       )) ;?>
                          <!--  //jquire -->
                                  <table cellpadding="5" cellspacing="3" style="text-align:left; width:100%; border:0;">
                                <tbody>
                                    <tr>
                                        <td style="width:13%; text-align: right;">
                                        <!-- <label for="User_username" class="required">用户名  -->
                                        <?php echo $form->labelEx($user_model_view,'username'); ?>  
                                        
                                        <!-- <span class="required">*</span></label> -->
                                        </td>
                                        <td>
                                       <?php echo $form->textField($user_model_view,'username'); ?>    
                                       <?php echo $form->error($user_model_view,'username'); ?>    
                                        </td>
<!--                                         <td style="width:87%;">
                                            <input class="inputBg" size="25" name="User[username]" id="User_username" type="text" value="" />                  
                                            <span style="color:red;">用户名已经存在</span>
                                        </td> -->
                                    </tr>
                                    <tr>
                                        <td align="right">
                                        <?php echo $form->labelEx($user_model_view,'password'); ?>  
                                            
                                            <!-- <label for="User_password" class="required">密码 <span class="required">*</span></label> -->
                                        </td>

                                        <td>
                                       <?php echo $form->textField($user_model_view,'password'); ?>    
                                       <?php echo $form->error($user_model_view,'password'); ?>    
                                            
                                            <!-- <input class="inputBg" size="25" name="User[password]" id="User_password" type="password" value="" />          -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                        <!-- <label for="User_password2">密码确认</label></td> -->
                                        <?php echo $form->labelEx($user_model_view,'password2'); ?>  
                                       
                                        <td>
                                            <!-- <input class="inputBg" size="25" name="User[password2]" id="User_password2" type="password" /> -->
                                       <?php echo $form->textField($user_model_view,'password2'); ?>    
                                       <?php echo $form->error($user_model_view,'password2'); ?>    
                                        
                                        </td>

                                    </tr>
                                    <tr>
                                        <td align="right">
                                        <!-- <label for="User_user_email">邮箱</label></td> -->
                                        <?php echo $form->labelEx($user_model_view,'user_email'); ?>  

                                        <td>
                                          <?php echo $form->textField($user_model_view,'user_email'); ?>    
                                          <?php echo $form->error($user_model_view,'user_email'); ?>    
                                           
                                            <!-- <input class="inputBg" size="25" name="User[user_email]" id="User_user_email" type="text" value="" />     -->
                                        </td>
                                    </tr>
                                    <tr>

                                        <td align="right">
                                        <!-- <label for="User_user_qq">qq号码</label> -->
                                        <?php echo $form->labelEx($user_model_view,'user_qq'); ?>  

                                        </td>
                                        <td>
                                            <!-- <input class="inputBg" size="25" name="User[user_qq]" id="User_user_qq" type="text" value="" /> -->
                                          <?php echo $form->textField($user_model_view,'user_qq'); ?>    
                                          <?php echo $form->error($user_model_view,'user_qq'); ?>    
                                         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="right">
                                        <!-- <label for="User_user_tel">手机</label> -->
                                        <?php echo $form->labelEx($user_model_view,'user_tel'); ?>  
                                                                                               
                                        </td>
                                        <td>
                                        <?php echo $form->textField($user_model_view,'user_tel'); ?> 
                                          <?php echo $form->error($user_model_view,'user_tel'); ?>    

                                           
                                            <!-- <input class="inputBg" size="25" name="User[user_tel]" id="User_user_tel" type="text" value="" /> -->
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--radioButtonList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right">
                                        <!-- <label for="User_user_sex">性别</label> -->
                                        <?php echo $form->labelEx($user_model_view,'user_sex'); ?>  

                                        </td>
                                        <!-- radioButton -->
                                        <td>
                                        <?php echo $form->radioButtonList($user_model_view,'user_sex',$sex_view,array('separator'=>'&nbsp;')); ?>  
                                                                           
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--dropDownList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right">
                                        <!-- <label for="User_user_xueli">学历</label> -->
                                        <?php echo $form->labelEx($user_model_view,'user_xueli'); ?>  

                                        </td>
                                        <td>
                       
                                         <?php echo $form->dropDownList($user_model_view,'user_xueli',$xl_view); ?>  
                                          <?php echo $form->error($user_model_view,'user_xueli'); ?>    
                                         
                                        </td>
                                    </tr>
                                    <tr>
                                        <!--checkBoxList($model,$attribute,$data,$htmlOptions=array())-->
                                        <td align="right">
                                        <!-- <label for="User_user_hobby">爱好</label> -->
                                        <?php echo $form->labelEx($user_model_view,'user_hobby'); ?>  

                                        </td>

                                        <td>
                                        <?php echo $form->checkBoxList($user_model_view,'user_hobby',$hobby_view,array('separator'=>'&nbsp;')); ?>  
                                        <?php echo $form->error($user_model_view,'user_hobby'); ?>    
                                                                   
                                        </td>
                                    </tr>
                                    <tr>

                                        <!--textArea($model,$attribute,$htmlOptions=array())-->
                                        <td align="right">
                                        <?php echo $form->labelEx($user_model_view,'user_introduce'); ?>  
                                        
                                        </td>
                                        <td>
                                                       
                                        <?php echo $form->textArea($user_model_view,'user_introduce',array('cols'=>40,'rows'=>5)); ?>    
                                          <?php echo $form->error($user_model_view,'user_introduce'); ?>    
                                        
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>&nbsp;</td>

                                        <td align="left">
                                            <input name="Submit" value="" class="us_Submit_reg" type="submit" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>

                        <!-- </form>  -->
                                <?php $form=$this->endwidget('CActiveForm') ;?>

                               </div>
                </div>
            </div>
            <!--放入view具体内容-->

        </div>


    