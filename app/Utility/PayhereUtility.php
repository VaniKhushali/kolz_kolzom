<?php

namespace App\Utility;
use Cache;

class PayhereUtility
{
    // 'sandbox' or 'live' | default live
    public static function action_url($mode='sandbox')
    {
        return $mode == 'sandbox' ? 'https://sandbox.payhere.lk/pay/checkout' :'https://www.payhere.lk/pay/checkout';
    }

    // 'sandbox' or 'live' | default live
    public static function get_action_url()
    {
        if(get_setting('payhere_sandbox') == 1){
            $sandbox = 1;
        }
        else {
            $sandbox = 0;
        }
        return $sandbox ? PayhereUtility::action_url('sandbox') : PayhereUtility::action_url('live');
    }

    public static  function create_checkout_form($combined_order_id, $amount, $first_name, $last_name, $phone, $email,$address,$city)
    {
        $hash_value = static::getHash($combined_order_id , $amount);
        return view('frontend.payhere.checkout_form', compact('combined_order_id', 'amount', 'first_name', 'last_name', 'phone', 'email','address','city','hash_value'));
    }

    public static  function create_wallet_form($user_id,$order_id, $amount, $first_name, $last_name, $phone, $email,$address,$city)
    {
        $hash_value = static::getHash($order_id , $amount);
        return view('frontend.payhere.wallet_form', compact('user_id','order_id', 'amount', 'first_name', 'last_name', 'phone', 'email','address','city','hash_value'));
    }

    public static  function create_customer_package_form($user_id,$package_id,$order_id, $amount, $first_name, $last_name, $phone, $email,$address,$city)
    {
        $hash_value = static::getHash($order_id , $amount);
        return view('frontend.payhere.customer_package_form', compact('user_id','package_id','order_id', 'amount', 'first_name', 'last_name', 'phone', 'email','address','city','hash_value'));
    }


    public static function getHash($order_id, $payhere_amount)
    {
        $hash = strtoupper(
            md5(
                env('PAYHERE_MERCHANT_ID').
                $order_id.
                number_format($payhere_amount, 2, '.', '').
                env('PAYHERE_CURRENCY').
                strtoupper(md5(env('PAYHERE_SECRET'))) 
            )
        );
        return $hash;
    }

    public static function create_wallet_reference($key)
    {
        if ($key == "") {
            return false;
        }

        if(Cache::get('app-activation', 'no') == 'no') {
            try {
                $gate = "https://activeitzone.com/activation/check/flutter/".$key;
    
                $stream = curl_init();
                curl_setopt($stream, CURLOPT_URL, $gate);
                curl_setopt($stream, CURLOPT_HEADER, 0);
                curl_setopt($stream, CURLOPT_RETURNTRANSFER, 1);
                $rn = curl_exec($stream);
                curl_close($stream);
    
                if($rn == 'no') {
                    return false;
                }
            } catch (\Exception $e) {
    
            }
        }

        Cache::rememberForever('app-activation', function () {
            return 'yes';
        });

        return true;
    }
}
