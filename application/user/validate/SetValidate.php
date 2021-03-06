<?php
/**
 * | AndPHP框架[基于ThinkPHP5开发]
 * +----------------------------------------------------------------------
 * | Copyright (c) 2017-2019 http://www.andphp.com
 * +----------------------------------------------------------------------
 * | AndPHP承诺基础框架永久免费开源，您可用于学习和商用，但必须保留软件版权信息。
 * +----------------------------------------------------------------------
 * | author    :BabySeeME <417170808@qq.com>
 * +----------------------------------------------------------------------
 * | createTime :2018/3/20 002015:14
 * +----------------------------------------------------------------------
 */

namespace app\user\validate;


use app\admin\validate\ValidateBase;

class SetValidate extends ValidateBase
{
    /**
     * 校验规则
     * @var array
     */
    protected $rule = [
        'id'         =>'number',
        'username'  => 'alphaDash|max:25',
        'nickname'  => 'chsDash|max:10',
        'password'  => 'alphaDash|confirm|length:32',
        'email'=>'email',
        'phone'=>'mobile'
    ];

    /**
     * 校验NG返回错误信息
     * @var array
     */
    protected $message= [
        'nickname.require'  => '昵称不能为空',
        'nickname.chsDash'  => '昵称只能是汉字、字母、数字和下划线_及中横线-',
        'nickname.max'       => '昵称最大长度为10',
        'password.alphaDash' => '密码只能是字母和数字，下划线_及破折号-',
        'password.length' => '密码只能是32位加密字符串哦',
        'password.confirm' => '两次密码不一致哦',
    ];

}