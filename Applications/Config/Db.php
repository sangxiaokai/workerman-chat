<?php
namespace Config;
/**
 * mysql配置
 * @author walkor
 */
class Db
{
    /**
     * 数据库的一个实例配置，则使用时像下面这样使用
     * $user_array = Db::instance('db1')->select('name,age')->from('users')->where('age>12')->query();
     * 等价于
     * $user_array = Db::instance('db1')->query('SELECT `name`,`age` FROM `users` WHERE `age`>12');
     * @var array
     */
    public static $db1 = array(
        'host'    => '127.0.0.1',
        'port'    => 3306,
      //  'user'    => 'root',
      'user'    => 'chat_kim',

        'password' => '58E3ZsbrtBdsywQy',
        // 'dbname'  => 'snake',
		 'dbname'  => 'chat_kim',
        'charset'    => 'utf8'
    );
 // 'hostname'       => '127.0.0.1',
    // 数据库名
   // 'database'       => 'chat_kim',
    // 用户名
    //'username'       => 'chat_kim',
    // 密码
    //'password'       => '58E3ZsbrtBdsywQy',
    // 端口
    //'hostport'       => '3306',
}