<?php

/**
 * Created by PhpStorm.
 * User: Dmytro
 * Date: 28.10.2017
 * Time: 21:11
 */
class Price
{
    public static function getData()
    {    //Получаем публикации из базы
        $db = Db::getConnection();
        $Data = array();

        $result = $db->query('SELECT title, description, doc_id, datetime, price, docprice.status FROM product 
                              LEFT JOIN docpricebody ON docpricebody.product_id = product.id
                              LEFT JOIN docprice ON docpricebody.doc_id = docprice.id
                              where docprice.datetime <= date(\'2017-10-25\') 
                              AND docpricebody.price = (SELECT price FROM docpricebody ORDER BY id DESC LIMIT 1)
                              AND title is not null
                              AND product.status = 0
                              OR docpricebody.price IS NULL
                              AND product.status = 0
 ');// Получаем нужные поля с product, и с помощью left join добавляем поля с docpricebody, docprice.
    // По условию, если дата меньше назначенной - не выводим + цена должна совпадать с последней ценой + статус продукта = 0
    // По условию, если нет цены + статус товара = 0(отображение)
    // Также далее будет использовано поле status, при отображении цены
        $i = 0;
        while ($row = $result->fetch()) {
            $Data[$i]['title'] = $row['title'];
            $Data[$i]['description'] = $row['description'];
            $Data[$i]['doc_id'] = $row['doc_id'];
            $Data[$i]['datetime'] = $row['datetime'];
            $Data[$i]['price'] = $row['price'];
            $Data[$i]['status'] = $row['status'];
            $i++;
        }

        return $Data;
    }
}