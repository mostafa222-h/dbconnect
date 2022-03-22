<?php

return[
   'required' => ' :attribute الزامی می باشد.' ,
    'integer' => ' :attribute باید یک عدد صحیح باشد ',
    'alpha_dash' => ':attribute فقط باید شامل حروف، اعداد، خط تیره و زیرخط باشد. ',
    'unique' => ':attribute قبلا گرفته شده.',
    'attributes' => [
        'name'=> 'نام ویدیو',
        'director'=> 'سازنده',
        'length'=> 'مدت زمان',
        'slug'=> 'نام یکتا',
        'url' => 'ادرس ویدیو',
        'thumbnail'=> 'تصویر بندانگشتی'
    ] ,

];
