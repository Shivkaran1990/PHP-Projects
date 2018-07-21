<?php

class NavigationController extends AppController
{
    public function __construct()
    {
        $items = array(
                        'menuitem1' => 'TeleVision',
                        'menuitem2' => 'Freeze',
                        'menuitem3' => 'Washing Machine',
                        'menuitem4' => 'Mobile',
                        'menuitem5' => 'Iphone',
                        'menuitem6' => 'Laptop',
                        'menuitem7' => 'Mobile',
                        'menuitem8' => 'Iphone',
                        'menuitem9' => 'Laptop'
                        );
        $this->getView("navigate",$items);
 
    }
}
?>