<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePortalTables extends Migration
{
    public function up()
    {
        // Tabel roles
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'name'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'description' => ['type' => 'TEXT', 'null' => true],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('roles');

        // Tabel users
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'username'    => ['type' => 'VARCHAR', 'constraint' => '100'],
            'email'       => ['type' => 'VARCHAR', 'constraint' => '100'],
            'password'    => ['type' => 'VARCHAR', 'constraint' => '255'],
            'role_id'     => ['type' => 'INT', 'null' => true], // Added 'null' => true
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('role_id', 'roles', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('users');

        // Tabel news
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'slug'        => ['type' => 'VARCHAR', 'constraint' => '255'],
            'content'     => ['type' => 'TEXT'],
            'image'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'published_at' => ['type' => 'DATETIME', 'null' => true],
            'author_id'   => ['type' => 'INT', 'null' => true],
            'status'      => ['type' => 'ENUM', 'constraint' => ['draft', 'published'], 'default' => 'draft'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('author_id', 'users', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('news');

        // Tabel categories
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'name'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'slug'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'description' => ['type' => 'TEXT', 'null' => true],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('categories');

        // Tabel news_categories
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'news_id'     => ['type' => 'INT', 'null' => true], // Added 'null' => true
            'category_id' => ['type' => 'INT', 'null' => true], // Added 'null' => true
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('news_id', 'news', 'id', 'CASCADE', 'SET NULL');
        $this->forge->addForeignKey('category_id', 'categories', 'id', 'CASCADE', 'SET NULL');
        $this->forge->createTable('news_categories');

        // Tabel featured
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'image'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'description' => ['type' => 'TEXT'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('featured');

        // Tabel pages
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'slug'        => ['type' => 'VARCHAR', 'constraint' => '255'],
            'content'     => ['type' => 'TEXT'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pages');

        // Tabel gallery
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'image'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'description' => ['type' => 'TEXT'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('gallery');

        // Tabel contacts
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'name'        => ['type' => 'VARCHAR', 'constraint' => '100'],
            'email'       => ['type' => 'VARCHAR', 'constraint' => '100'],
            'message'     => ['type' => 'TEXT'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('contacts');

        // Tabel settings
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'key'         => ['type' => 'VARCHAR', 'constraint' => '100'],
            'value'       => ['type' => 'TEXT'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('settings');

        // Tabel events
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'description' => ['type' => 'TEXT'],
            'date'        => ['type' => 'DATETIME'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('events');

        // Tabel downloads
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => '255'],
            'file'        => ['type' => 'VARCHAR', 'constraint' => '255'],
            'description' => ['type' => 'TEXT'],
            'created_at'  => ['type' => 'TIMESTAMP', 'null' => true],
            'updated_at'  => ['type' => 'TIMESTAMP', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('downloads');
    }

    public function down()
    {
        $this->forge->dropTable('users');
        $this->forge->dropTable('roles');
        $this->forge->dropTable('news');
        $this->forge->dropTable('pages');
        $this->forge->dropTable('gallery');
        $this->forge->dropTable('contacts');
        $this->forge->dropTable('settings');
        $this->forge->dropTable('events');
        $this->forge->dropTable('downloads');
    }
}
