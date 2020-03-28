import axios from "axios";
import { PrintfulProductResponse } from "src/models/printfulApi/PrintfulProductResponse";
import { PrintfulProduct } from "src/models/printfulApi/PrintfulProduct";
import { PrintfulProductDetailResponse } from "src/models/printfulApi/PrintfulProductDetailResponse";
import { PrintfulProductDetail } from "src/models/printfulApi/PrintfulProductDetail"

const printfullService = axios.create({
    baseURL: "https://api.printful.com",
    headers: {
        Authorization : "Basic bG84MDltYm0tN3B0ei1pOXJmOjl5YTgtZjF2N2VsbWgxMzAz"
    }
})

export async function getProducts() :Promise<PrintfulProduct[]>{
    const response = await printfullService.get<PrintfulProductResponse>('/store/products');
    return response.data.result;
}

export async function getProductDetails(id:number):Promise<PrintfulProductDetail>{
    const response = await printfullService.get<PrintfulProductDetailResponse>(`/store/products/${id}`);
    return response.data.result;
}