<?php
/**
 * Bootstrap Wrapper Plugin: Hidden Helper Class
 * 
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author     Giuseppe Di Terlizzi <giuseppe.diterlizzi@gmail.com>
 * @copyright  (C) 2015, Giuseppe Di Terlizzi
 */
 
// must be run within Dokuwiki
if(!defined('DOKU_INC')) die();

require_once(dirname(__FILE__).'/bootstrap.php');

class syntax_plugin_bootswrapper_hidden extends syntax_plugin_bootswrapper_bootstrap {

    protected $pattern_start = '<hidden>';
    protected $pattern_end   = '</hidden>';

    protected $template_start = '<div class="bs-wrap bs-wrap-hidden hidden">';
    protected $template_end   = '</div>';

    function getPType(){ return 'block'; }

}
