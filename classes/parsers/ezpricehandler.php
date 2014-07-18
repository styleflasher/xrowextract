<?php

class eZPriceHandler extends BaseHandler
{
    public function exportAttribute( &$attribute )
    {
        $locale = eZLocale::instance();
        $content = $locale->formatCleanCurrency( $attribute->content()->attribute( 'inc_vat_price') );
        return $this->escape( $content );
    }
}