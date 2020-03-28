import { PrintfulProductDetail } from "../printfulApi/PrintfulProductDetail"
import { LightweightProductVariant } from "./LightweightProductVariant";

export class LightweightProduct{
    public id: number;
    public name: string;
    public picture: string;
    public colors: {
        name: string,
        picture:string
    }[];
    public sizes: string[];
    public gender:string;
    public category:string;

    constructor(printfulProductDetail: PrintfulProductDetail){
        this.id = printfulProductDetail.sync_product.id;
        this.name = printfulProductDetail.sync_product.name.charAt(printfulProductDetail.sync_product.name.length-1) === 'M'? 
            printfulProductDetail.sync_product.name.substr(0,printfulProductDetail.sync_product.name.length-2) : printfulProductDetail.sync_product.name;
        this.picture = printfulProductDetail.sync_product.thumbnail_url;
        const variants = printfulProductDetail.sync_variants.map(variant => new LightweightProductVariant(variant));
        this.colors = [...new Map(variants.map(variant => [variant["color"],variant])).values()].map(variant => {
            return{
                name: variant.color,
                picture: variant.picture
            }
        });
        this.sizes = [...new Set(printfulProductDetail.sync_variants.map(variant => new LightweightProductVariant(variant).size))];
        this.gender = printfulProductDetail.sync_product.name.charAt(printfulProductDetail.sync_product.name.length-1) === 'M' ? 'M' : 'F';

        if(this.name.includes("Hoodie")) {
            this.category = "Hoodies";
        }else if(this.name.includes("Shorts")) {
            this.category = "Shorts";
        }else if(this.name.includes("Crop Top")) {
            this.category = "Crop tops";
        }else if(this.name.includes("Sports Bra")) {
            this.category = "Sports bras";
        }else if(this.name.includes("Legging")) {
            this.category = "Leggings";
        }else if(this.name.includes("Joggers")) {
            this.category = "Joggers";
        }else if(this.name.includes("Tank Top")){
            this.category = "Tank tops";
        }else if(this.name.includes("T-Shirt")){
            this.category = "T-Shirts";
        }
    }
}