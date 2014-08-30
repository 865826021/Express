<?php
/**
 * 快递查询类 v1.0
 *
 * @copyright        justmd5
 * @license          http://www.justmd5.com
 * @lastmodify       2014-08-30
 */
class Express
{
    /**
     *
     */
    const   KUAIDI100='http://www.kuaidi100.com';

    /**
     * @param $url
     * @return mixed|string
     */
    private static function getContent($url){
        if(function_exists('file_get_contents')){
            $file_contents = file_get_contents($url);
        }else{
            $ch      = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $file_contents = curl_exec($ch);
            curl_close($ch);
        }
        return $file_contents;
    }

    /**
     * @param $order_num
     * @return bool
     */
    private static function getExpressName($order_num){
       $api_url=self::KUAIDI100."/autonumber/auto?";
        $res_names=json_decode(self::getContent($api_url."num=".$order_num),true);
        return empty($res_names)?false:$res_names[0]['comCode'];
    }

    /**
     * @param $order_num
     * @return bool|mixed|string
     */
    public static function getOrderInfo($order_num){
        $query_api=self::KUAIDI100.'/query?';
        $keywords = self::getExpressName($order_num);
        if(empty($keywords))return false;
        return self::getContent($query_api."type=".$keywords."&postid=".$order_num);
    }
}
?>
