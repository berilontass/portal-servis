<?php

use yii\db\Migration;

/**
 * Class m190104_071941_kisi_bilgi
 */
class m190104_071941_kisi_bilgi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

$this->createTable('kisi_bilgi',[
'servis_no' => $this->integer(),
'ad' => $this->string(30),
'soyad' => $this->string(30),
'telefon' => $this->integer(11),
'FOREIGN KEY(servis_no) REFERENCES servis(servis_no)',
 ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190104_071941_kisi_bilgi cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190104_071941_kisi_bilgi cannot be reverted.\n";

        return false;
    }
    */
}
