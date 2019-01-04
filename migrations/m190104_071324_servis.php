<?php

use yii\db\Migration;

/**
 * Class m190104_071324_servis
 */
class m190104_071324_servis extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('servis',[
'servis_no' => $this->integer(),
'istikamet' => $this->string(30),
'PRIMARY KEY(servis_no)',
 ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190104_071324_servis cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190104_071324_servis cannot be reverted.\n";

        return false;
    }
    */
}
