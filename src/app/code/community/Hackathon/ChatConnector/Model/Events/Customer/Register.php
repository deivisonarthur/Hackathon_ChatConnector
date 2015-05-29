<?php
/**
 * Hackathon_ChatConnector extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category       Hackathon
 * @package        Hackathon_ChatConnector
 * @copyright      Copyright (c) 2015
 * @license        http://opensource.org/licenses/mit-license.php MIT License
 */

/**
 * Abstract connector model
 *
 * @category    Hackathon
 * @package     Hackathon_ChatConnector
 * @author      Wouter Cleymans <wouter.cleymans@phpro.be>
 */
class Hackathon_ChatConnector_Model_Observer
{

    /**
     * Listen to customer register success event
     *
     * @param Varien_Event_Observer $event
     */
    public function customerRegisterSuccess(Varien_Event_Observer $event)
    {
        $customer = $event->getCustomer();
        $accountController = $event->getAccountController();

        // Start logging!
    }

    /**
     * Listen to order cancel payment event
     *
     * @param Varien_Event_Observer $event
     */
    public function salesOrderPaymentCancel(Varien_Event_Observer $event)
    {
        $payment = $event->getPayment();

        // Start logging!
    }

}