<?php

use yii\db\Migration;

/**
 * Class m190211_142440_table_fillDB
 */
class m190211_142440_table_fillDB extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->batchInsert('{{%images}}', [
            'title', 'path', 'alt'
        ], [
            ['Смартфони', 'https://businesstoday.co.ke/wp-content/uploads/2017/09/Smartphones.jpg', 'Смартфони'],
            ['Samsung Galaxy i9300i', 'https://i.allo.ua/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/3/3/33333_5.jpg', 'Samsung Galaxy i9300i'],
            ['Nokia 6.1', 'https://www.bhphotovideo.com/images/images2000x2000/nokia_11pl2b11a07_6_1_2018_32gb_smartphone_1404213.jpg', 'Nokia 6.1'],
            ['Xiaomi MI A1', 'https://hotline.ua/img/tx/158/158056270_s265.jpg', 'Xiaomi MI A1'],
            ['Nokia logo', 'http://it-chainik.ru/wp-content/uploads/2016/10/Nokia-Logo.jpg', 'Nokia logo'],
            ['Samsung logo', 'https://thegreatergroup.com/wp-content/uploads/samsung-logo.jpeg', 'Samsung logo'],
            ['Xiaomi logo', 'http://www.xiaomi.kg/wp-content/uploads/2018/05/xiaomi-png-xiaomi-mi-fit-logo-300.png', 'Xiamo logo'],
            ["Комп'ютери та ноутбуки", 'http://vindavoz.ru/uploads/posts/2013-01/1359284829_nout_ili_komp.jpg', "Комп'ютери та ноутбуки"],
            ['', 'https://imgur.com/I80W1Q0.png',''],
            ['', 'https://pp.userapi.com/c638926/v638926573/57e79/1BTaEPF2nHM.jpg', ''],
            ['Xiaomi Mi 8 Lite 4//64','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/x/i/xiaomi_mi_8_lite_aurora_blue.jpg','Xiaomi'],
            ['Xiaomi Redmi Note 5','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/x/i/xiaomi_redmi_note_5_pro_black_3_1.jpg','Xiaomi'],
            ['Xiaomi Mi 8 6//64','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/0/4/047a41b6363dea37f72def78076a7f1f.jpg','Xiaomi'],
            ['Xiaomi Mi A 2 Lite 3//32','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/x/i/xiaomi_mi_a2_lite_black_9.jpg','Xiaomi'],
            ['Apple Iphone X 64 GB','https://i.allo.ua/media/catalog/product/cache/3/image/425x295/799896e5c6c37e11608b9f8e1d047d15/a/p/apple_iphone_x_64gb_mqad2_silver_5.jpg','Apple'],
            ['Apple iPhone 7 32 GB','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/a/p/apple_iphone_7_black_1_3.jpg','Apple'],
            ['Apple iPhone XR 64GB','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/a/p/apple_iphone_xr_black_3_1_1.jpg','Apple'],
            ['Apple iPhone 8 Space Gray','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/a/p/apple_iphone_8_64gb_mq6g2_space_grey_6_5.jpg','Apple'],
            ['Apple iPhone XS Max 64 GB','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/a/p/apple_iphone_xs_gold_1_1.jpg','Apple'],
            ['Apple iPhone XS 256 GB','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/a/p/apple_iphone_xs_space_gray_3_2.jpg','Apple'],
            ['Apple iPhone SE 32 GB','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/a/p/apple_iphone_se_32gb_rose_gold_4.jpg','Apple'],
            ['Huawei P Smart Plus 4//64','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/f/i/file_842.jpg','Huawei'],
            ['Huawei P Smart 2019 3//64','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/_/2/_2019__2.jpg','Huawei'],
            ['Huawei P 20 Pro 6//128','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/p/_/p_20_pro_.jpg','Huawei'],
            ['Huawei P 20 Lite 4//64','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/_/2/_20__1_2.jpg','Huawei'],
            ['Huawei P 20 4//64','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/p/_/p_20_twili_.jpg','Huawei'],
            ['Huawei Y5 2018','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/h/u/huawei_y5_2018_black_11.jpg','Huawei'],
            ['Huawei Y6 2018','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/h/u/huawei_y6_2018_blue_9.jpg','Huawei'],
            ['Huawei P20 4//128 GB','https://i.allo.ua/media/catalog/product/cache/3/small_image/212x184/9df78eab33525d08d6e5fb8d27136e95/p/_/p_20_black_.jpg','Huawei'],
            ['','https://flink.apache.org/img/poweredby/huawei-logo.png',''],
            ['','https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Apple_logo_black.svg/1000px-Apple_logo_black.svg.png','']
        ]);
        $this->batchInsert('{{%products}}', [
            'name', 'price', 'quantity', 'title_img_id'
        ],[
            ['Nokia 6.1', '2536.25', '0', '3'],
            ['Xiaomi MI A1', '6845.35', '1', '4'],
            ['Samsung Galaxy i9300i', '5200.99', '5', '2'],
            ['Xiaomi Mi 8 Lite 4//64','6999','5','11'],
            ['Xiaomi Redmi Note 5','5555','10','12'],
            ['Xiaomi Mi 8 6//64','11999','2','13'],
            ['Xiaomi Mi A 2 Lite 3//32','4999','20','14'],
            ['Apple Iphone X 64 GB','28999','2','15'],
            ['Apple iPhone 7 32 GB','14999','11','16'],
            ['Apple iPhone XR 64GB','26999','10','17'],
            ['Apple iPhone 8 Space Gray','21000','21','18'],
            ['Apple iPhone XS Max 64 GB','35000','12','19'],
            ['Apple iPhone XS 256 GB','43000','2','20'],
            ['Apple iPhone SE 32 GB','8000','1','21'],
            ['Huawei P Smart Plus 4//64','7000','14','22'],
            ['Huawei P Smart 2019 3//64','6499','5','23'],
            ['Huawei P 20 Pro 6//128','23000','7','24'],
            ['Huawei P 20 Lite 4//64','8000','3','25'],
            ['Huawei P 20 4//64','12999','2','26'],
            ['Huawei Y5 2018','3000','0','27'],
            ['Huawei Y6 2018','4000','4','28'],
            ['Huawei P20 4//128 GB','15999','3','29']
        ]);
        $this->batchInsert('{{%categories}}', [
            'name', 'description', 'image_id', 'parent_category_id'
        ],[
            ['Смартфони', 'Смартфони', '1', '0'],
            ['Samsung', 'Samsung', '6', '1'],
            ['Nokia', 'Nokia', '5', '1'],
            ['Xiaomi', 'Xiaomi', '7', '1'],
            ['Huawei', 'Huawei', '30', '1'],
            ['Apple','Apple','31','1']
        ]);
        $this->batchInsert('{{%product_category}}', [
            'product_id', 'category_id'
        ],[
            ['1', '1'],
            ['1', '3'],
            ['2', '1'],
            ['2', '4'],
            ['3', '1'],
            ['3', '2'],
            ['4','1'],
            ['4','4'],
            ['5','1'],
            ['5','4'],
            ['6','1'],
            ['6','4'],
            ['7','1'],
            ['7','4'],
            ['8','1'],
            ['8','6'],
            ['9','1'],
            ['9','6'],
            ['10','1'],
            ['10','6'],
            ['11','1'],
            ['11','6'],
            ['12','1'],
            ['12','6'],
            ['13','1'],
            ['13','6'],
            ['14','1'],
            ['14','6'],
            ['15','1'],
            ['15','5'],
            ['16','1'],
            ['16','5'],
            ['17','1'],
            ['17','5'],
            ['18','1'],
            ['18','5'],
            ['19','1'],
            ['19','5'],
            ['20','1'],
            ['20','5'],
            ['21','1'],
            ['21','5'],
            ['22','1'],
            ['22','5']
        ]);
        $this->batchInsert('{{%users}}', [
            'login', 'name', 'surname', 'secondname', 'phonenumber','country','city','image_id','address','gender','email','password_hash','password_reset_token','auth_key','status','access_token'
        ],[
            ['KSerjyk', 'Serhii', 'Kurylo', 'Oleksandrovych', '+380634901790', 'Ukraine', 'Lutsk', '9', 'qqq', '1', 'serg14581@gmail.com', password_hash('Serj21Kurylo'.Yii::$app->params['SALT'], PASSWORD_ARGON2I), 'reset_token', 'auth_key', '2', 'access_token'],
            ['Stusman', 'Andriy', 'Hanich', 'Vasyliovych', '+380990025075', 'Ukraine', 'Lutsk', '10', 'www', '1', 'anganvas24@gmail.com', password_hash('Gjknthutqcn'.Yii::$app->params['SALT'], PASSWORD_ARGON2I), 'reset', 'auth', '2', 'access']
        ]);
        $this->batchInsert('{{%comment}}', [
            'comment', 'prod_id', 'user_id'
        ], [
            ['Самий кращий телефон', '1', '1'],
            ['Гамно', '1', '2'],
            ['Ввіііііііі.....', '2', '1'],
            ['Фуууууу.....', '2', '2'],
            ['Супер-пупер', '3', '1'],
            ['Згідний з вище сказаним', '3', '2'],
        ]);
        $this->batchInsert('{{%description_product}}', [
            'product_id', 'name', 'value'
        ], [
            ['1', 'Опис', 'Best phone'],
            ['1', 'ОЗУ', '2 Гб'],
            ['1', 'ЦП', 'SnapDragon 640'],
            ['1', 'Діагональ', '4 дм'],
            ['2', 'Опис', 'Gamno Phone'],
            ['2', 'ОЗУ', '8 Гб'],
            ['2', 'ЦП', 'SnapDragon 840'],
            ['2', 'Діагональ', '5 дм'],
            ['3', 'Опис', 'Norm Phone'],
            ['3', 'ОЗУ', '4 Гб'],
            ['3', 'ЦП', 'SnapDragon 740'],
            ['3', 'Діагональ', '6 дм'],
            ['4', 'Опис', 'Best phone'],
            ['4', 'ОЗУ', '2 Гб'],
            ['4', 'ЦП', 'SnapDragon 640'],
            ['4', 'Діагональ', '4 дм'],
            ['5', 'Опис', 'Gamno Phone'],
            ['5', 'ОЗУ', '8 Гб'],
            ['5', 'ЦП', 'SnapDragon 840'],
            ['5', 'Діагональ', '5 дм'],
            ['6', 'Опис', 'Norm Phone'],
            ['6', 'ОЗУ', '4 Гб'],
            ['6', 'ЦП', 'SnapDragon 740'],
            ['6', 'Діагональ', '6 дм'],
            ['7', 'Опис', 'Best phone'],
            ['7', 'ОЗУ', '2 Гб'],
            ['7', 'ЦП', 'SnapDragon 640'],
            ['7', 'Діагональ', '4 дм'],
            ['8', 'Опис', 'Gamno Phone'],
            ['8', 'ОЗУ', '8 Гб'],
            ['8', 'ЦП', 'SnapDragon 840'],
            ['8', 'Діагональ', '5 дм'],
            ['9', 'Опис', 'Norm Phone'],
            ['9', 'ОЗУ', '4 Гб'],
            ['9', 'ЦП', 'SnapDragon 740'],
            ['9', 'Діагональ', '6 дм'],
            ['10', 'Опис', 'Best phone'],
            ['10', 'ОЗУ', '2 Гб'],
            ['10', 'ЦП', 'SnapDragon 640'],
            ['10', 'Діагональ', '4 дм'],
            ['11', 'Опис', 'Gamno Phone'],
            ['12', 'ОЗУ', '8 Гб'],
            ['12', 'ЦП', 'SnapDragon 840'],
            ['12', 'Діагональ', '5 дм'],
            ['13', 'Опис', 'Norm Phone'],
            ['13', 'ОЗУ', '4 Гб'],
            ['13', 'ЦП', 'SnapDragon 740'],
            ['13', 'Діагональ', '6 дм'],
            ['14', 'Опис', 'Best phone'],
            ['14', 'ОЗУ', '2 Гб'],
            ['14', 'ЦП', 'SnapDragon 640'],
            ['14', 'Діагональ', '4 дм'],
            ['15', 'Опис', 'Gamno Phone'],
            ['15', 'ОЗУ', '8 Гб'],
            ['15', 'ЦП', 'SnapDragon 840'],
            ['15', 'Діагональ', '5 дм'],
            ['16', 'Опис', 'Norm Phone'],
            ['16', 'ОЗУ', '4 Гб'],
            ['16', 'ЦП', 'SnapDragon 740'],
            ['16', 'Діагональ', '6 дм'],
            ['17', 'Опис', 'Best phone'],
            ['17', 'ОЗУ', '2 Гб'],
            ['17', 'ЦП', 'SnapDragon 640'],
            ['17', 'Діагональ', '4 дм'],
            ['18', 'Опис', 'Gamno Phone'],
            ['18', 'ОЗУ', '8 Гб'],
            ['18', 'ЦП', 'SnapDragon 840'],
            ['18', 'Діагональ', '5 дм'],
            ['19', 'Опис', 'Norm Phone'],
            ['19', 'ОЗУ', '4 Гб'],
            ['19', 'ЦП', 'SnapDragon 740'],
            ['19', 'Діагональ', '6 дм'],
            ['20', 'Опис', 'Best phone'],
            ['20', 'ОЗУ', '2 Гб'],
            ['20', 'ЦП', 'SnapDragon 640'],
            ['20', 'Діагональ', '4 дм'],
            ['21', 'Опис', 'Gamno Phone'],
            ['21', 'ОЗУ', '8 Гб'],
            ['21', 'ЦП', 'SnapDragon 840'],
            ['21', 'Діагональ', '5 дм'],
            ['22', 'Опис', 'Norm Phone'],
            ['22', 'ОЗУ', '4 Гб'],
            ['22', 'ЦП', 'SnapDragon 740'],
            ['22', 'Діагональ', '6 дм']
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190211_142440_table_fillDB cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190211_142440_table_fillDB cannot be reverted.\n";

        return false;
    }
    */
}
