import { PrintfulSyncVariant } from "../printfulApi/PrintfulSyncVariant";

export class LightweightProductVariant{
    public id :number;
    public name: string;
    public size: string;
    public color:string;
    public picture: string;
    public price: number;
    public productId: number;
    constructor(printfullSyncVariant: PrintfulSyncVariant){
        this.id = printfullSyncVariant.id;
        this.name = printfullSyncVariant.name .split(" - ")[0].trim();
        const colorSize = printfullSyncVariant.name.split(" - ")[1].split("/");
        if(colorSize.length === 2){
            this.color = colorSize[0].trim();
            this.size = colorSize[1].trim();
        }
        if(colorSize.length === 1){
            this.color = null;
            this.size = colorSize[0].trim();
        }
        this.picture = printfullSyncVariant.files.find(file => file.filename.includes("mockup")).preview_url;
        this.price = Number.parseFloat(printfullSyncVariant.retail_price);
        this.productId = printfullSyncVariant.sync_product_id;
    }
}