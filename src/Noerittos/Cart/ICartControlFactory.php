<?php

namespace Noerittos\Cart;

interface ICartControlFactory {

    /**
     * @return CartControl
     */
    function create();
}
