<?php
class gadget {
  function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
  }

  function isCollection($collection) {
    return(is_a($collection, 'Kirby\Cms\Pages'));
  }
}