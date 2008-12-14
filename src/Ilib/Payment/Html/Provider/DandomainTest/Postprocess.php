<?php
/**
 * Postprocess Dandomai <www.dandomain.dk> test online payments with html template
 *
 * @author sune jensen <sj@sunet.dk>
 * @version 0.0.1
 * @package Payment_Html_Provider_DandomainTest
 * @category Payment
 * @license http://www.gnu.org/licenses/lgpl.html LGPL
 */
require_once 'Ilib/Payment/Html/Postprocess.php';

class Ilib_Payment_Html_Provider_DandomainTest_Postprocess extends Ilib_Payment_Html_Postprocess
{
    /**
     * Contructor
     *
     * @param string $merchant merchant number
     * @param string $language the language used in the payment
     *
     * @return void
     */
    public function __construct($merchant, $verification_key, $session_id)
    {
        parent::__construct($merchant, $verification_key, $session_id);
    }

    /**
     * Sets the payment response
     *
     * @param array $post all POST params given in the response
     * @param array $get all GET params given in the response
     * @param array $session all session variables in the response.
     * @param array $payment_target the payment target, e.g. the order
     *
     * @return boolean true on success.
     */
    public function setPaymentResponse($post, $get, $session, $payment_target)
    {
        $get['transact'] = 1;
        return parent::setPaymentResponse($post, $get, $session, $payment_target);
    }
}
