import { PrintfulProduct } from "./PrintfulProduct";

export class PrintfulProductResponse{
    constructor(
        public code: number,
        public result: PrintfulProduct[]
    ){}
}