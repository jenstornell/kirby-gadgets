<?php
class gadget {
  function isLocalhost($whitelist = ['127.0.0.1', '::1']) {
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
  }

  function isPages($pages) {
    return(is_a($pages, 'Kirby\Cms\Pages'));
  }

  function isPage($collection) {
    return(is_a($collection, 'Kirby\Cms\Page'));
  }

  function slug($string) {
    return strtolower(
      trim(
        preg_replace(
            '~[^0-9a-z]+~i',
            '-',
            html_entity_decode(
            preg_replace(
                '~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i',
                '$1',
                htmlentities(
                $string,
                ENT_QUOTES,
                'UTF-8'
                )
            ),
            ENT_QUOTES,
            'UTF-8'
            )
        ),
        '-'
        )
    );
  }

  function isLoggedIn() {
    return (bool)kirby()->user();
  }

  function stripHtmlComments($html) {
    return preg_replace('/<!--(.|\s)*?-->/', '', $html);
  }
}