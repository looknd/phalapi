<?php
/**
 * PhalApi
 *
 * An open source, light-weight API development framework for PHP.
 *
 * This content is released under the GPL(GPL License)
 *
 * @copyright   Copyright (c) 2015 - 2017, PhalApi
 * @license     http://www.phalapi.net/license GPL GPL License
 * @link        https://codeigniter.com
 */

/**
 * PhalApi_Logger_Explorer 直接输出日记到控制台的日记类 
 * 
 * - 测试环境下使用
 * 
 * @package     PhalApi\Logger
 * @license     http://www.phalapi.net/license GPL GPL License
 * @link        http://www.phalapi.net/
 * @author      dogstar <chanzonghuang@gmail.com> 2015-02-09 
 */

class PhalApi_Logger_Explorer extends PhalApi_Logger {

	public function log($type, $msg, $data) {
        $msgArr = array();
        $msgArr[] = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
        $msgArr[] = strtoupper($type);
        $msgArr[] = str_replace(PHP_EOL, '\n', $msg);
        if ($data !== NULL) {
            $msgArr[] = is_array($data) ? json_encode($data) : $data;
        }

        $content = implode('|', $msgArr) . PHP_EOL;

        echo "\n", $content, "\n";
	}
}
