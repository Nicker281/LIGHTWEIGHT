<?php

namespace App\Http\Controllers;

class Shop extends Controller
{
    public function Show($shop)
    {
        switch($shop){
            case "woman":
                $view = $this->ShowWoman();
                break;
            case "men":
                $view = $this->ShowMen();
                break;
            case "all":
                $view = $this->ShowAll();
                break;
            default:
                $view = $this->Detail($shop);
                break;
        }
        return $view;
    }
    
    public function ShowAll(){
        $style = (object)[
            'back' => '/img/BgShop.jpg',
            'backSmall' => '/img/BgShopSm.jpg',
            'align' => "center"
        ];
        $header = "<div class=\"row banner\">\n
                <div class=\"col\">\n
                    <a class=\"btn btn-secondary\" href=\"/shop/woman\">Woman</a>\n
                </div>\n
                <div class=\"col\">\n
                    <a class=\"btn btn-secondary\" href=\"/shop/men\">Men</a>\n
                </div>\n
            </div>";
        
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://api.printful.com/store/products',
            CURLOPT_USERPWD => 'rhcn1s72-o6zi-lwkm:yg2j-olz5f3y5hztm',
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false
        ]);
        $resp = curl_exec($curl);
        $result = json_decode($resp, true);
        curl_close($curl);

        $data = [
            'style' => $style,
            'header' => $header,
            'shop' => 'Shop under construction',
            'articles' => $result
        ];
        
        return view('shop', $data);
    }
    public function ShowWoman(){
        $style = (object)[
            'back' => '/img/BgShopWoman.jpg',
            'backSmall' => '/img/BgShopWoman.jpg',
            'align' => "flex-end"
        ];
        
        $data = [
            'style' => $style,
            'header' => '',
            'shop' => 'Shop for woman under construction',
            'articles' => ['1','2','3','4','5']
        ];
        
        return view('shop', $data);
    }
    public function ShowMen(){
        $style = (object)[
            'back' => '/img/BgShopMan.jpg',
            'backSmall' => '/img/BgShopMan.jpg',
            'align' => 'flex-end'
        ];
        
        $data = [
            'style' => $style,
            'header' => '',
            'shop' => 'Shop for men under construction',
            'articles' => ['1','2','3','4','5']
        ];
        
        return view('shop', $data);
    }
    
    public function Detail($id){
        $data = [
            'id' => $id
        ];
        return view('detail', $data);
    }
}