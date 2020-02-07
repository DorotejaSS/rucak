<?php

use yii\db\Migration;

/**
 * Class m200207_153606_create_foreign_key
 */
class m200207_153606_create_foreign_key extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addForeignKey(
            'id_kompanija_fk',
            'user',
            'kompanija_id',
            'kompanija',
            'id',
            'CASCADE'

        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200207_153606_create_foreign_key cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200207_153606_create_foreign_key cannot be reverted.\n";

        return false;
    }
    */
}
