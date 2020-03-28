import { Controller, Get } from '@nestjs/common';
import {getProducts, getProductDetails} from "../services/printfullService";
import { LightweightProduct } from "src/models/lightweight/LightweightProduct";

@Controller('products')
export class ProductsController {
    @Get()
    async getAllProducts(): Promise<unknown>{
        const products =  await getProducts();
        const ids = products.map(product => product.id);
        const productsPromise = async() => Promise.all(ids.map(async id => getProductDetails(id)));
        const productDetails = await productsPromise();
        const lightweightData = productDetails.map(product => new LightweightProduct(product));
        // const noColor = lightweightData.filter(data =>  {
        //     const noColor = data.variants.find(variant => variant.color === null);
        //     if(noColor !== undefined){
        //         return data;
        //     }
        // });
        //const withColor = lightweightData.filter(data =>  data.variants.map(variant => variant.color !== null))

        return lightweightData;
    }
}
