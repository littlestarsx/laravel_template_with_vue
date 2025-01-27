<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ##name## extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $data = parent::toArray($request);
        $data['created_at'] = $data['created_at'] * 1000;
        $data['updated_at'] = $data['updated_at'] * 1000;
        // 数据转换

        return $data;
    }

    public function with($request)
    {
        return [
            'status' => 'success',
            'status_code' => 200
        ];
    }
}
