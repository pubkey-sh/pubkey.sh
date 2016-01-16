<?php
  /**
   * @file User.php
   *
   * Controller to handle User object related functions
   */

  namespace Controllers;

  class User {
    /**
     * @brief Get Current User
     *
     * Fetches the currently logged in user's database model
     *
     * @return A `\Models\User` object if the current user is logged in,
     *         otherwise `false` will be returned
     */
    public static function getCurrentUser() {
      // Assume a false state
      $user   = false;
      // Attempt to extract the 'user' field containing a user ID
      $userid = intval(getSession('user', $default = false));

      // If the value of 'user' satisfies the range {1..inf}, attempt to verify
      // the peer with its initial IP and U/A state
      if ($userid > 0 && self::verifyPeer())
        // Fetch the matching record from the database
        $user = \Model::factory('\\Models\\User')->find_one($user);

      // Return the given result (if valid), otherwise return false
      return (is_object($user) && property_exists($user, 'id') &&
        $user->id == $userid ? $user : false);
    }

    /**
     * @brief Login
     *
     * Processes the submission from a login form
     *
     * @param request The Slim request interface
     */
    public static function login($request) {
      // Dump the parsed body from the Slim request
      html_dump($request);
    }

    /**
     * @brief Logout
     *
     * Erases the current session
     */
    public static function logout() {
      // Just clear the session
      session_unset();
    }

    /**
     * @brief Register
     *
     * Processes the submission from a registration form
     *
     * @param request The Slim request interface
     */
    public static function register($request) {
      // Dump the parsed body from the Slim request
      html_dump($request);
    }

    /**
     * @brief Verify Peer
     *
     * Curbs the vulnerability of session hijacking by verification of IP
     * address and the user agent that the browser sends
     */
    public static function verifyPeer() {
      // Attempt to fetch IP address and User Agent from the session, and only
      // continue upon successful verification
      if ($ip = getSession('ip', false)  && $ua = getSession('ua', false) &&
          $ip == $_SERVER['REMOTE_ADDR'] && $ua == $_SERVER['HTTP_USER_AGENT'])
        return true;
      // Assume failure in all other cases and clear the session
      self::logout();
      return false;
    }
  }
