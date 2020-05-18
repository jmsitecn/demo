<?php
/**
 * Created by PhpStorm.
 * User: jmsite.cn
 * Date: 2020/5/18
 * Time: 15:09
 */

require 'vendor/autoload.php';

$markdown = file_get_contents('README.md');
$parser = new \cebe\markdown\GithubMarkdown();
echo $parser->parse($markdown);