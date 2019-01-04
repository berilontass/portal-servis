<?php

use yii\db\Migration;

/**
 * Class m190104_075310_servis_saat
 */
class m190104_075310_servis_saat extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
$this->createTable('servis_saat',[
'servis_no' => $this->integer(),
'saat1' => $this->string(10),
'saat2' => $this->string(10),
'saat3' => $this->string(10),
'FOREIGN KEY(servis_no) REFERENCES servis(servis_no)',
 ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190104_075310_servis_saat cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190104_075310_servis_saat cannot be reverted.\n";

        return false;
    }
    */
}
