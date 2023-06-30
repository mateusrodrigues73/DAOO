<?php

namespace App\Http\Requests;

class ProdutoUpdateRequest extends ProdutoRequest
{
    public function authorize(): bool
    {
        //$this->user()
        $prod = $this->user()->produtos->filter(fn($p)=>$p->id===$id);
        //($user->produtos->filter(fn($p)=>$p->id==99)->first()!==null)
        return isset($prod);
        return true;
    }

}