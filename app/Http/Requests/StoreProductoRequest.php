<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
              //1.Establecer reglas de validacion
         
             "nombre" => 'required|alpha|unique:productos,nombre',
             "descripcion"=>'required|max:250',
             "precio"=>'required|numeric|max:10000',
             "categoria"=>'required',
             'imagen'=>'required|image|unique:productos,imagen',
             "Marca"=>'required'
            
        ];
    }

    /**
     * Mensajes personalizados
     */
    public function messages(){
       return [
            'required'=>'Dato obligatorio',
            'alpha' =>'Deben ser solo letras',
            'max'=>'Maximo :max caracteres',
            'unique'=>'Este campo ya existe en la db',
            'image'=>'Solo archivos tipo imagen'
        ];
    }
}
