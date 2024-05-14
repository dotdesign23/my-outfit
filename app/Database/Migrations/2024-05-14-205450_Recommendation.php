<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Recommendation extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE,
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('product_id', 'product', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('recommendation');
    }

    public function down()
    {
        $this->forge->dropTable('recommendation');
    }
}
