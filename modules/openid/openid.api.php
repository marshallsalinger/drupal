<?php
// $Id: openid.api.php,v 1.1 2009-03-08 05:38:12 webchick Exp $

/**
 * @file
 * Hooks provided by the OpenID module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Allow modules to modify the OpenID request parameters.
 *
 * @param $op
 *   The operation to be performed.
 *   Possible values:
 *   - request: Modify parameters before they are sent to the OpenID provider.
 * @param $request
 *   An associative array of parameter defaults to which to modify or append. 
 * @return
 *   An associative array of parameters to be merged with the default list.
 *
 */
function hook_openid($op, $request) {
  if ($op == 'request') {
    $request['openid.identity'] = 'http://myname.myopenid.com/';
  }
  return $request;
}

/**
 * @} End of "addtogroup hooks".
 */