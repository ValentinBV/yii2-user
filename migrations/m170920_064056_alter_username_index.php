<?php

use yii\db\Migration;

class m170920_064056_alter_username_index extends Migration {

    public function up() {
        $this->dropIndex('{{%user_unique_username}}', '{{%user}}');
    }

    public function down() {
        $this->createIndex('{{%user_unique_username}}', '{{%user}}', 'username', true);
    }

}
