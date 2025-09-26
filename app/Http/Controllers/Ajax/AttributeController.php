<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\AttributeRepositoryInterface  as AttributeRepository;
use App\Models\Language;


class AttributeController extends Controller
{
    protected $attributeRepository;
    protected $language;

    public function __construct(
        AttributeRepository $attributeRepository
    ){
        $this->attributeRepository = $attributeRepository;
        $this->middleware(function($request, $next){
            $locale = app()->getLocale(); // vn en cn
            $language = Language::where('canonical', $locale)->first();
            $this->language = $language->id;
            return $next($request);
        });
    }

    public function getAttribute(Request $request){
        
        $payload = $request->input();
        $attributes = $this->attributeRepository->searchAttributes($payload['search'], $payload['option'], $this->language);

        $attributeMapped = $attributes->map(function($attribute){
            return [
                'id' => $attribute->id,
                'text' => $attribute->attribute_language->first()->name,
            ];
        })->all();
       
        return response()->json(array('items' => $attributeMapped)); 
    }

    public function loadAttribute(Request $request){
        $payload['attribute'] = json_decode(base64_decode($request->input('attribute')), TRUE);
        $payload['attributeCatalogueId'] = $request->input('attributeCatalogueId');
        $attributeArray = $payload['attribute'][$payload['attributeCatalogueId']];
        
        $attributes = [];
        if(count($attributeArray)){
            $attributes = $this->attributeRepository->findAttributeByIdArray($attributeArray, $this->language);
        }

        
        $temp = [];
        if(count($attributes)){
            foreach($attributes as $key => $val){
                $temp[] = [
                    'id' => $val->id,
                    'text' => $val->name,
                ];
            }
        }
        
        return response()->json(array('items' => $temp)); 

    }
}
