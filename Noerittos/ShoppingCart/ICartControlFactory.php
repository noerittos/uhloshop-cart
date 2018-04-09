<?php

namespace Noerittos\ShoppingCart;

interface ICartControlFactory {

    /**
     * @return CartControl
     */
    function create();
}
