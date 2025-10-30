<?php

namespace Hello;

class Greeting
{
    /**
     * 根据输入返回对应问候语
     * @param int $input 输入值（1或2）
     * @return string 问候语
     * @throws \InvalidArgumentException 输入不合法时抛出异常
     */
    public function response(int $input): string
    {
        switch ($input) {
            case 1:
                return 'hello';
            case 2:
                return '你好';
            default:
                throw new \InvalidArgumentException('输入只能是1或2');
        }
    }
}
