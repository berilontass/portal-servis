<?php

use yii\db\Migration;

/**
 * Class m190104_075702_servis_durak
 */
class m190104_075702_servis_durak extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

$this->createTable('servis_durak',[
'servis_no' => $this->integer(),
'durak1' => $this->string(10),
'durak2' => $this->string(10),
'durak3' => $this->string(10),
'FOREIGN KEY(servis_no) REFERENCES servis(servis_no)',
 ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190104_075702_servis_durak cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190104_075702_servis_durak cannot be reverted.\n";

        return false;
    }
    */
}
