<?php

namespace DenisKisel\HTMLBootstrap;


class HTMLBootstrap
{
    public static function iconCheck($bool = false)
    {
        return ($bool) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>';
    }

    public static function buttonIcon($type, $buttonClass = null, $iconClass = null, $attrs = [])
    {
        $attrStr = '';
        if ($attrs) {
            foreach ($attrs as $attrName => $attrValue) {
                $attrStr .= " {$attrName}={$attrValue}";
            }
        }

        return "<button type='button' class='btn btn-{$type} btn-sm {$buttonClass}' {$attrStr}><i class='fa fa-{$iconClass}'></i></button>";
    }

    public static function image($src, $class = '', $attr = [])
    {
        $attrString = '';
        if ($attr) {
            foreach ($attr as $key => $item) {
                $attrString .= "{$key}='{$item}' ";
            }
        }
        return "<img src='{$src}' class='{$class}' $attrString>";
    }

    public static function label($text, $type = 'warning', $attr = [])
    {
        $attrString = '';
        if ($attr) {
            foreach ($attr as $key => $item) {
                $attrString .= "{$key}='{$item}' ";
            }
        }

        return "<label class='label label-{$type}' $attrString>{$text}</label>";
    }

    public static function anchorLabel($text, $href, $type = 'warning', $attr = [])
    {
        $label = self::label($text, $type, ['style' => 'cursor: pointer; text-decoration: underline']);
        return "<a href='{$href}'>{$label}</a>";
    }
}
