<?php

namespace DenisKisel\HTMLBootstrap;


class HTMLBootstrap
{
    public static function iconCheck($bool = false)
    {
        return ($bool) ? '<i class="fa fa-check text-success"></i>' : '<i class="fa fa-times text-danger"></i>';
    }

    public static function image($src, $class = '', $attrs = [])
    {
        return "<img src='{$src}' class='{$class}' " . Helper::attrToStr($attrs) . ">";
    }

    public static function label($text, $type = 'warning', $attrs = [])
    {
        return "<label class='label label-{$type}' " . Helper::attrToStr($attrs) . ">{$text}</label>";
    }

    public static function button($text = null, $type = 'success', $icon = null, $attrs = [])
    {
        $class = Helper::classAttr("btn btn-{$type}", $attrs);
        $attrsStr = Helper::attrToStr($attrs);
        return "<button type='button' {$class} {$attrsStr}><i class='fa fa-{$icon}'></i> {$text}</button>";
    }

    public static function text($name, $value = null, $placeholder = null, $attrs = [])
    {
        $class = Helper::classAttr('form-control', $attrs);
        $attrsStr = Helper::attrToStr($attrs);
        return "<input name='{$name}' value='{$value}' placeholder='{$placeholder}' {$class} {$attrsStr}>";
    }

    public static function textarea($name, $value = null, $placeholder = null, $attrs = [])
    {
        $class = Helper::classAttr('form-control', $attrs);
        $attrsStr = Helper::attrToStr($attrs);
        return "<textarea name='{$name}' placeholder='{$placeholder}' {$class} {$attrsStr}>{$value}</textarea>";
    }

    public static function anchorLabel($text, $href, $type = 'warning', $attrs = [])
    {
        $label = self::label($text, $type, ['style' => 'cursor: pointer; text-decoration: underline']);
        return "<a href='{$href}' " . Helper::attrToStr($attrs) . ">{$label}</a>";
    }

    public static function select($name, $options, $selectedArray = [], $disabledArray = [], $attr = [])
    {
        $class = Helper::classAttr('form-control', $attr);
        $attrsStr = Helper::attrToStr($attr);
        $output = "<select name='{$name}' {$class} {$attrsStr}>";

        if ($options) {
            foreach ($options as $optionValue => $optionName) {
                $selected = in_array($optionValue, $selectedArray) ? 'selected' : '';
                $disabled = in_array($optionValue, $disabledArray) ? 'disabled' : '';
                $output .= "<option value='{$optionValue}' {$selected} {$disabled}>{$optionName}</option>";
            }
        }

        $output .= "</select>";
        return $output;
    }

    public static function select2($name, $options, $selectedArray = [], $disabledArray = [], $attr = [])
    {

        $class = 'select2 ';
        $class .= (!empty($attr['class'])) ? $attr['class'] : '';

        $attr['class'] = $class;
        return self::select($name, $options, $selectedArray, $disabledArray, $attr);
    }

    public static function alert($message, $type = 'info', $withClose = false)
    {
        $closeBlock = ($withClose) ? "<span aria-hidden=\"true\">&times;</span></button>" : '';
        return "<div class=\"alert alert-{$type} alert-dismissible\" role=\"alert\">{$closeBlock}{$message}</div>";
    }
}
