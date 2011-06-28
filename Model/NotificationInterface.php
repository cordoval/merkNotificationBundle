<?php

/**
 * This file is part of the NotificationBundle package.
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace merk\NotificationBundle\Model;

use FOS\Userbundle\Model\UserInterface;
use \DateTime;

/**
 * Base Notification interface.
 *
 * @author Tim Nagel <tim@nagel.com.au>
 */
interface NotificationInterface
{
    /**
     * Returns the User the notification belongs to.
     *
     * @return UserInterface
     */
    function getUser();

    /**
     * Sets the user the notification belongs to.
     *
     * @param UserInterface $user
     * @return void
     */
    function setUser(UserInterface $user);

    /**
     * Sets the notification message.
     *
     * @return string
     */
    function getMessage();

    /**
     * Sets the notification message.
     *
     * @param string $message
     * @return void
     */
    function setMessage($message);

    /**
     * Marks the notification read.
     *
     * @return void
     */
    function markRead();

    /**
     * Marks the notification unread.
     *
     * @return void
     */
    function markUnread();

    /**
     * Returns when the notification was read.
     *
     * @return DateTime
     */
    function getReadDate();

    function setCreated();
    function getCreated();
}