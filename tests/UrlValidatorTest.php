<?php

use PHPUnit\Framework\TestCase;

class UrlValidatorTest extends TestCase
{
    
    /**
     * Указываем название метода, который является провайдером данных.
     * @dataProvider urlDataProvider
     */
    public function testCheckUrl($url, $result)
    {
        $validator = new UrlValidator();
        $this->assertSame($result, $validator->CheckUrl($url));
    }
    
    /**
     * Метод - провайдер данных.
     * В данном провайдере данных:
     * 1. параметр - url
     * 2. параметр - резульатат валидации. Допустим, если url не должен 
     * проходить валидацию, то нужно указать false.
     */
    public function urlDataProvider()
    {
        return [
            ['http://site.yp.ru', true],
            ['http://site.yp.ru/', true],
            ['https://www.instagram.com', true],
            ['https://www.instagram.com/tzone_store', true],
            ['https://www.instagram.com/tzone_store/', true],
            ['https://instagram.com/tzone_store/', true],
            ['http://instagram.com/tzone_store/', true],
            ['https://vk.com/tzone_store/', true],
            ['http://vk.com/tzone_store/', true],
            ['http://www.auditvetar.ru/?utm_referrer=yp.ru&utm_source=yp.ru', false],
            ['http://www.auditvetar.ru/; https://www.auditvetar.ru/', false],
            ['www.instagram.com/tzone_store/', false],
            ['vk.com/dance_leto?w=wall-10680092_12819', false],
            ['nastavnikspb.ru/\u00a0', false],
            ['https://nastavnikspb.ru/\u00a0', false],
            ['specsity.ru', false],
            ['http://specsity.ru', true],
            ['digitalmarketing2.ru', false],
            ['https://digitalmarketing2.ru', true],
            ['https://narcolog-podolsk.ru\u00a0', false],
            ['https://narcolog-podolsk.ru', true],
            ['https://narcolog-podolsk.ru/page1', true]
        ];
    }
}
