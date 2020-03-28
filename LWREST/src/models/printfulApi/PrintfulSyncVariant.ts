import { PrintfulSyncVariantFile } from "./PrintfulSyncVariantFile"

export class PrintfulSyncVariant{
    constructor(
        public id:number,
        public sync_product_id: number,
        public name: string,
        public retail_price: string,
        public files: PrintfulSyncVariantFile[]
    ){}
}