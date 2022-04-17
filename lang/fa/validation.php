<?php

return[
   'required' => ' :attribute الزامی می باشد.' ,
    'integer' => ' :attribute باید یک عدد صحیح باشد ',
    'alpha_dash' => ':attribute فقط باید شامل حروف، اعداد، خط تیره و زیرخط باشد. ',
    'unique' => ':attribute قبلا گرفته شده.',
    'exists' => ' :attribute انتخاب شده معتبر نیست.',

        'attributes' => [
        'name'=> 'نام ویدیو',
        'director'=> 'سازنده',
        'length'=> 'مدت زمان',
        'slug'=> 'نام یکتا',
        'url' => 'ادرس ویدیو',
        'thumbnail'=> 'تصویر بندانگشتی',
        'category_id' => 'دسته بندی'
    ] ,

];
