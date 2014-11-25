<?php

namespace MVC;

class Message {

    static $messages = array('error' => array(), 'success' => array(), 'info' => array(), 'block' => array());

    static function display() {
        $html = '';
        foreach (self::$messages as $type => $messages) {
            foreach ($messages as $m) {
                $html .= '<div class="alert alert-' . $type . '">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            ' . $m . '
                        </div>';
            }
        }
        return $html;
    }

    static private function add($type, $text) {
        self::$messages[$type][] = $text;
    }

    static public function addError($text) {
        self::add('error', $text);
    }

    static public function addSuccess($text) {
        self::add('success', $text);
    }

    static public function addInfo($text) {
        self::add('info', $text);
    }

    static public function addBlock($text) {
        self::add('block', $text);
    }

}
