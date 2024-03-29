<?php

namespace App\Http\Requests;

use App\Models\Institution;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreInstitutionRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('institution_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'unique:institutions',
            ],
        ];
    }
}
