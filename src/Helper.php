<?php


namespace DenisKisel\HTMLBootstrap;


class Helper
{
    public static function attrToStr($attrs)
    {
        $attrStr = '';
        if ($attrs) {
            foreach ($attrs as $attrName => $attrValue) {
                $attrStr .= " {$attrName}={$attrValue}";
            }
        }
        return $attrStr;
    }

    public static function classAttr($class, &$attrs = [])
    {
        $classes = $class;
        if (!empty($attrs['class'])) {
            $classes .= ' ' . $attrs['class'];
            unset($attrs['class']);
        }

        return "class='{$classes}'";
    }
}
