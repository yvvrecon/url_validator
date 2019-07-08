<?php
/**
 * Класс иммитирующий проверку url в соответствии с регулярным выражением.
 */
class UrlValidator
{
    //const PATTERN = '/^http:\/\/(([a-zA-Z0-9а-яА-ЯёЁ][a-zA-Z0-9а-яА-ЯёЁ_-]*)(\.[a-zA-Z0-9а-яА-ЯёЁ][a-zA-Z0-9а-яА-ЯёЁ_-]*)+)/u';
    //const PATTERN = '/^http:\/\/(([a-zA-Z0-9а-яА-ЯёЁ][a-zA-Z0-9а-яА-ЯёЁ_-]*)(\.[a-zA-Z0-9а-яА-ЯёЁ][a-zA-Z0-9а-яА-ЯёЁ_-]*)+)(\/[a-zA-Z0-9а-яА-ЯёЁ_-]*)*$/u';
    const PATTERN = '/^http:\/\/(([a-zA-Z0-9а-яА-ЯёЁ][a-zA-Z0-9а-яА-ЯёЁ_-]*)(\.[a-zA-Z0-9а-яА-ЯёЁ][a-zA-Z0-9а-яА-ЯёЁ_-]*)+)(\/[a-zA-Z0-9а-яА-ЯёЁ_-]*)*$/u';
    
    public function CheckUrl(string $url):bool
    {
        // на всякий случай приводим все http|https к http
        $url = preg_replace('/^https/', 'http', $url);
        
        if (preg_match(self::PATTERN, $url, $matches)) {
          return true;
        } else {
          return false;
        }
    }
}

/*
USE:
$o = new UrlValidator();
var_dump($o->CheckUrl('https://instagram.com/tzone_store/'));
* 
*/

