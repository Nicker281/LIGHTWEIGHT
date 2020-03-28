import {PrintfulProductDetail} from "./PrintfulProductDetail";

export class PrintfulProductDetailResponse{
    constructor(
        public code: number,
        public result: PrintfulProductDetail
    ){}
}