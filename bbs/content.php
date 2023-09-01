<?php
include_once('./_common.php');

<div class="dksbfgsflddaweee"></div>

if ($co['co_include_tail'] && is_include_path_check($co['co_include_tail']))
    @include_once($co['co_include_tail']);
else
    include_once('./_tail.php');