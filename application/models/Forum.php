<?php

/**
 * Created by PhpStorm.
 * User: lfliang
 * Date: 2016/10/20 0020
 * Time: 14:34
 */
class ForumModel extends AbstractBaseModel{
    public function test(){
        return C::t('forum_forum')->fetch(1);
    }
}