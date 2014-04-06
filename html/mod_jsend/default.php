<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_jsend
 *
 * @copyright   Copyright (C) 2012 Saity 74 LLC. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
// JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen');

$list = trim($params->get('list', ''));
$list_arr = explode("\n", $list);

if ($list && !empty($list_arr))
{
    $list = array();
    
    foreach($list_arr as $option)
    {
        $list[] = JHTML::_('select.option', $option , $option );
        
    }
    $list_html = JHTML::_('select.genericlist', $list, $name = 'list', 'inputbox');
}

?>

<div class="form-border">
    <div class="form-bg white-box">
        <form id="ord-form" class="mail-form form-validate" method="post" action="/index.php" enctype="multipart/form-data">
            <div class="form-lables">
                <?php if ($header = $params->get('header')) : ?>
                    <h4 class="form-header"><?php echo $header ?></h4>
                <?php endif; ?>
                <?php if ($text = $params->get('text')) : ?>
                    <div class="intro-text"><?php echo $text ?></div>
                <?php endif; ?>
                
                <?php if ($showlist = $params->get('showlist', 0)) : ?>
                <div class="controlls">
                   <?php echo $list_html ?>
                </div>
                <?php endif; ?>
                
                <?php if ($showname = $params->get('showname', 0)) : ?>
                <div class="controlls">
                    <input id="jfName" type="text" class="<?php echo $showname == 2 ? 'required' : '' ?> field" value="" name="name" placeholder="Ваше имя" />
                </div>
                <?php endif; ?>
                
                <?php if ($showfirm = $params->get('showfirm', 0)) : ?>
                <div class="controlls">
                        <input id="jfFirm" type="text" class="<?php echo $showfirm == 2 ? 'required' : '' ?> field" value="" name="firm" placeholder="Организация" />
                </div>
                <?php endif; ?>
                
                <?php if ($showphone = $params->get('showphone', 0)) : ?>
                <div class="controlls">
                        <input id="jfPhone" type="text" class="<?php echo $showphone == 2 ? 'required' : '' ?> field" value="" name="phone" placeholder="Контактный телефон" />
                </div>
                <?php endif; ?>

                <?php if ($showemail = $params->get('showemail', 0)) : ?>
                <div class="controlls">
                    <input id="jfEmail" type="text" class="<?php echo $showemail == 2 ? 'required' : '' ?> field" value="" name="email" placeholder="Электронная почта" />
                </div>
                <?php endif; ?>

                <?php if ($showdesc = $params->get('showdesc', 0)) : ?>
                <div class="controlls form-desc">
                    <textarea id="jfDesc" class="<?php echo $showdesc == 2 ? 'required' : '' ?> field" name="desc" placeholder="Сообщение" ></textarea>
                 </div>
                <?php endif; ?>
               
                <?php if ($showfileupload = $params->get('showfileupload', 0)) : ?>
                <div class="form-uploadfile">
                <span class="uploader-header">У вас уже есть дизайн-проект?</span>
                    <div class="upload-control">
                      <div class="uploader-wrap">
                            <span class="fileupload-header">Прикрепите его к заявке на расчет</span>
                            <input class="field" name="Filedata" type="file" id="file"/>
                        </div>
                    </div>
                    <div id="filename">
                        <span class="flname"></span><span class="six-dots"> ... </span><span id="remove-file">x</span>
                    </div>
                </div>
                <?php endif; ?>
            </div>


            <a href="#" class="btn-jsend-submit <?php echo $params->get('btntype') ?>"><?php echo $params->get('btntext', 'Отправить') ?></a>

            <input type="hidden" name="hash" value="<?php echo base64_encode($module->position) ?>" />
            <input type="hidden" name="Itemid" value="<?php $app = JFactory::getApplication(); echo $app->getMenu()->getActive()->id; ?>" />
            <?php echo JHtml::_( 'form.token' ); ?>
        </form>
    </div>
</div>