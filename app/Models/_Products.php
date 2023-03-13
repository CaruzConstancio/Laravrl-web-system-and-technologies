<?php

namespace App\Models;

class _Products{

    public static function all(){
        $product_coffee = [
            [
                'id'            =>  '1',
                'lead'          =>  'Butterfly Window ',
                'heading'       =>  'Modify',
                'coffee_image'  =>  'assets/img/products-01.jpg',
                'desc'          =>  'a customized version of a BMW vehicle that has been altered or upgraded in various ways to enhance its performance, appearance, or functionality. These modifications can include changes to the engine, suspension, exhaust, wheels, brakes, interior, or exterior of the car, depending on the owners preferences and goals'
            ],
            [
                'id'            =>  '2',
                'lead'          =>  'Repaint',
                'heading'       =>  'Stickers & Paint',
                'coffee_image'  =>  'assets/img/products-02.jpg',
                'desc'          =>  'Repainting a BMW involves applying a new layer of paint to the exterior of the car to refresh its appearance or to change its color. This process typically involves sanding down the existing paint, filling in any scratches or dents, and applying primer before adding the new coat of paint. Repainting a BMW can be done for cosmetic reasons, such as to remove visible wear and tear, or to customize the car with a unique color or design'
            ],
            [
                'id'            =>  '3',
                'lead'          =>  'BMW UNITS',
                'heading'       =>  'Stocked',
                'coffee_image'  =>  'assets/img/products-03.jpg',
                'desc'          =>  'A stocked BMW refers to a BMW vehicle that is in its original factory condition, with no modifications or upgrades made to it. This means that the car has not been altered in terms of its engine, suspension, body, or other components beyond what was installed by the manufacturer'
            ]
        ];

        return($product_coffee);
    }

}
