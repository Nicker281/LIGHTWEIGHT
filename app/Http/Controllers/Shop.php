<?php

namespace App\Http\Controllers;

class Shop extends Controller
{
    public function Show($shop)
    {
        switch($shop){
            case "women":
                $view = $this->ShowWomen();
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
    
    //Get Shop views
    public function ShowAll(){
        $style = (object)[
            'back' => '/img/BgShop.jpg',
            'backSmall' => '/img/BgShopSm.jpg',
            'align' => "center"
        ];
        $header = "<div class=\"row banner\">\n
                <div class=\"col\">\n
                    <a class=\"btn btn-secondary\" href=\"/shop/women\">Women</a>\n
                </div>\n
                <div class=\"col\">\n
                    <a class=\"btn btn-secondary\" href=\"/shop/men\">Men</a>\n
                </div>\n
            </div>";
        $titles = [
            'LightWeight for Women',
            'LightWeight for Men'
        ];
        $scrolls = [
            'Women',
            'Men'
        ];
        
        $result = $this->GetArt();
        $artW = $this->GetArtWomen($result);
        $artM = $this->GetArtMen($result);
        $articles = [$artW, $artM];

        $data = [
            'style' => $style,
            'header' => $header,
            'titles' => $titles,
            'scrolls' => $scrolls,
            'articles' => $articles
        ];
        
        return view('shop', $data);
    }
    public function ShowWomen(){
        $style = (object)[
            'back' => '/img/BgShopWoman.jpg',
            'backSmall' => '/img/BgShopWoman.jpg',
            'align' => "flex-end"
        ];
        
        $titles = [
            'LightWeight Tops',
            'LightWeight Bottoms'
        ];
        $scrolls = [
            'tops',
            'bottoms'
        ];
        
        $result = $this->GetArt();
        $artW = $this->GetArtWomen($result);
        $artTop = [];
        $artBot = [];
        foreach($artW as $art){
            if(strpos($art['name'], 'Bra') || strpos($art['name'], 'Hoodie') || strpos($art['name'], 'Top') || strpos($art['name'], 'T-Shirt')){
                array_push($artTop, $art);
            }else{
                array_push($artBot, $art);
            }
        }
        $articles = [$artTop, $artBot];
        
        $data = [
            'style' => $style,
            'header' => '',
            'titles' => $titles,
            'scrolls' => $scrolls,
            'articles' => $articles
        ];
        return view('shop', $data);
    }
    public function ShowMen(){
        $style = (object)[
            'back' => '/img/BgShopMan.jpg',
            'backSmall' => '/img/BgShopMan.jpg',
            'align' => 'flex-end'
        ];
        
        $titles = [
            'LightWeight Tops',
            'LightWeight Bottoms'
        ];
        $scrolls = [
            'tops',
            'bottoms'
        ];
        
        $result = $this->GetArt();
        $artW = $this->GetArtMen($result);
        $artTop = [];
        $artBot = [];
        foreach($artW as $art){
            if(strpos($art['name'], 'Hoodie') || strpos($art['name'], 'Top') || strpos($art['name'], 'T-Shirt')){
                array_push($artTop, $art);
            }else{
                array_push($artBot, $art);
            }
        }
        $articles = [$artTop, $artBot];
        
        $data = [
            'style' => $style,
            'header' => '',
            'titles' => $titles,
            'scrolls' => $scrolls,
            'articles' => $articles
        ];
        return view('shop', $data);
    }
    
    //Get products
    public function GetArt(){
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
        
        return $result;
    }
    public function GetArtWomen($articles){
        $i = 0;
        $artW = [];
        $prices = ["50,00", "40,00", "40,00", "55,00", "50,00", "30,00", "30,00", "30,00", "30,00", "30,00",
                  "50,00", "50,00", "40,00", "40,00", "25,00", "25,00", "30,00", "30,00", "50,00", "50,00"];
        
        foreach($articles['result'] as $art){
            if($i < 10){
                array_push($artW, [
                    'id' => $art['id'],
                    'name' => $art['name'],
                    'img' => $art['thumbnail_url'],
                    'price' => $prices[$i]
                ]);
            }
            $i++;
        }
        
        return $artW;
    }
    public function GetArtMen($articles){
        $i = 0;
        $artM = [];
        $prices = ["50,00", "40,00", "40,00", "55,00", "50,00", "30,00", "30,00", "30,00", "30,00", "30,00",
                  "50,00", "50,00", "40,00", "40,00", "25,00", "25,00", "30,00", "30,00", "50,00", "50,00"];
        
        foreach($articles['result'] as $art){
            if($i >= 10){
                array_push($artM, [
                    'id' => $art['id'],
                    'name' => $art['name'],
                    'img' => $art['thumbnail_url'],
                    'price' => $prices[$i]
                ]);
            }
            $i++;
        }
        
        return $artM;
    }
    
    //Get detail view
    public function Detail($id){
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://api.printful.com/store/products/' . $id,
            CURLOPT_USERPWD => 'rhcn1s72-o6zi-lwkm:yg2j-olz5f3y5hztm',
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false
        ]);
        $resp = curl_exec($curl);
        $result = json_decode($resp, true);
        curl_close($curl);
        
        $sizes = [];
        foreach($result['result']['sync_variants'] as $var){
            $split1 = explode("-", $var['name']);
            $split2 = explode("/", $split1[count($split1)-1]);
            
            if (in_array(trim($split2[count($split2)-1]), $sizes) == false) {
                array_push($sizes, trim($split2[count($split2)-1]));
            }
        }
        
        $colors = [];
        foreach($result['result']['sync_variants'] as $var){
            $split1 = explode("-", $var['name']);
            $split2 = explode("/", $split1[count($split1)-1]);
            
            if (in_array(trim($split2[0]), $colors) == false) {
                array_push($colors, trim($split2[0]));
            }
        }
        
        $data = [
            'name' => $result['result']['sync_product']['name'],
            'img' => $result['result']['sync_product']['thumbnail_url'],
            'sizes' => $sizes,
            'colors' => $colors
        ];
        return view('detail', $data);
    }
}