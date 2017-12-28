<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m171228_135422_anket extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
       $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%anketSorgu}}', [
            'id' => $this->primaryKey(),
			'olumlu_yanit' => $this->integer()->notNull(),
			'olumsuz_yanit' => $this->integer()->notNull(),
			'sure' => $this->$this->integer()->notNull(),
			'tarih saat' =>  $this->dateTime(),
			'sonuc' => $this->string(15)->notNull()
			
			/*'olumlu_yanit' => $this->string(10)->notNull(),
			'olumsuz_yanit' => $this->string(10)->notNull(),
			'sure' => $this->$this->string(20)->notNull(),
			'tarih' =>  $this->dateTime(),
			'saat' => $this->string(10)->notNull(),
			'sonuc' => $this->string(15)->notNull()*/
			
        ], $tableOptions);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
 echo "m171228_132223_anket cannot be reverted.\n";

		$this->dropTable('{{%anketSorgu}}');    }
}
