<?php
namespace Idane;
interface ProductParserInterface
{
    const ROOT_ALIAS = 'root';
    const PRODUCT_ALIAS = null;
    const PRODUCT_CONTAINER = null;
    public function parse();
}