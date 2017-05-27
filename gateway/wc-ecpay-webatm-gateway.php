<?php

class WC_Ecpay_Webatm_Gateway extends WC_Ecpay_Gateway
{
    public function __construct()
    {
        parent::__construct();

        $this->add_action('ecpay_webatm');
    }

    public function get_args($order)
    {
        $args = array(

        );

        return $args;
    }
}
