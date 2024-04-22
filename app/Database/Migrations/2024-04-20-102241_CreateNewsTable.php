<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNewsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id' => [
                'type' => 'INT',
                'auto_increment' => TRUE,
                'constraint' => 5,
                'unsigned' => TRUE
            ],

            'fname' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],

            'lname' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],

            'title' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],

            'body' => [
                'type' => 'TEXT',
            ]
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('news');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}
