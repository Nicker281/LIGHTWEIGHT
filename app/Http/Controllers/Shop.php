<?php

namespace App\Http\Controllers;

class Shop extends Controller
{
    public function show($shop)
    {
        switch($shop){
            case "woman":
                $view = $this->ShowWoman();
                break;
            case "men":
                $view = $this->ShowMen();
                break;
            default:
                $view = $this->ShowAll();
                break;
        }
        return $view;
    }
    
    public function ShowAll(){
        $style = (object) array(
            'back' => '/img/BgShop.jpg',
            'backSmall' => '/img/BgShopSm.jpg',
            'align' => "center"
        );
        $header = "<div class=\"row banner\">\n
                <div class=\"col\">\n
                    <a class=\"btn btn-secondary\" href=\"/shop/woman\">Woman</a>\n
                </div>\n
                <div class=\"col\">\n
                    <a class=\"btn btn-secondary\" href=\"/shop/men\">Men</a>\n
                </div>\n
            </div>";
        
        $data = [
            'style' => $style,
            'header' => $header,
            'shop' => 'Shop under construction',
            'articles' => ['1','2','3','4','5']
        ];
        
        return view('shop', $data);
    }
    public function ShowWoman(){
        $style = (object) array(
            'back' => '/img/BgShopWoman.jpg',
            'backSmall' => '/img/BgShopWoman.jpg',
            'align' => "flex-end"
        );
        
        $data = [
            'style' => $style,
            'header' => '',
            'shop' => 'Shop for woman under construction',
            'articles' => ['1','2','3','4','5']
        ];
        
        return view('shop', $data);
    }
    public function ShowMen(){
        $style = (object) array(
            'back' => '/img/BgShopMan.jpg',
            'backSmall' => '/img/BgShopMan.jpg',
            'align' => 'flex-end'
        );
        
        $data = [
            'style' => $style,
            'header' => '',
            'shop' => 'Shop for men under construction',
            'articles' => ['1','2','3','4','5']
        ];
        
        return view('shop', $data);
    }
}