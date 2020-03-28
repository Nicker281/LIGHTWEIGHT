import { PrintfulSyncProduct } from "./PrintfulSyncProduct";
import { PrintfulSyncVariant } from "./PrintfulSyncVariant";

/* eslint-disable @typescript-eslint/camelcase */
export class PrintfulProductDetail{
    constructor(
        public sync_product: PrintfulSyncProduct,
        public sync_variants: PrintfulSyncVariant[]
    ){}
}