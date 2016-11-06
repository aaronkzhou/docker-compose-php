<?php

$url = 'http://username:password@hostname:9090/path?arg=value#anchor';

var_dump(parse_url($url));
