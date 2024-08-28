<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    public function run()
    {
        // Seed data for roles table
        $roles = [
            ['name' => 'Admin', 'description' => 'Administrator of the website.'],
            ['name' => 'Editor', 'description' => 'Can edit and publish content.'],
            ['name' => 'User', 'description' => 'Regular user with limited access.'],
        ];

        // Seed data for users table
        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role_id' => 1, // Assuming 'Admin' role has ID 1
            ],
            [
                'username' => 'editor',
                'email' => 'editor@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role_id' => 2, // Assuming 'Editor' role has ID 2
            ],
            [
                'username' => 'user1',
                'email' => 'user1@example.com',
                'password' => password_hash('password', PASSWORD_DEFAULT),
                'role_id' => 3, // Assuming 'User' role has ID 3
            ],
        ];

        // Seed data for categories table
        $categories = [
            ['name' => 'News', 'slug' => 'news', 'description' => 'All the latest news.'],
            ['name' => 'Events', 'slug' => 'events', 'description' => 'Upcoming events.'],
            ['name' => 'Gallery', 'slug' => 'gallery', 'description' => 'Photo and video gallery.'],
        ];

        // Seed data for news table
        $news = [
            [
                'title' => 'New Regulations Announced',
                'slug' => 'new-regulations-announced',
                'content' => 'Detailed content about new regulations.',
                'image' => 'regulations.jpg',
                'published_at' => date('Y-m-d H:i:s'),
                'author_id' => 1, // Assuming 'Admin' user has ID 1
                'status' => 'published',
            ],
            [
                'title' => 'Upcoming Event: Tech Conference',
                'slug' => 'upcoming-event-tech-conference',
                'content' => 'Detailed content about the tech conference.',
                'image' => 'tech_conference.jpg',
                'published_at' => date('Y-m-d H:i:s'),
                'author_id' => 2, // Assuming 'Editor' user has ID 2
                'status' => 'published',
            ],
        ];

        $contacts = [
            [
                'name'        => 'Alice Johnson',
                'email'       => 'alice.johnson@example.com',
                'message'     => 'I am interested in learning more about your services. Please contact me.',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Bob Brown',
                'email'       => 'bob.brown@example.com',
                'message'     => 'I have a question about your latest news updates.',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Charlie Davis',
                'email'       => 'charlie.davis@example.com',
                'message'     => 'Can you provide more details about the upcoming events?',
                'created_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert the data into the respective tables
        $this->db->table('roles')->insertBatch($roles);
        $this->db->table('users')->insertBatch($users);
        $this->db->table('categories')->insertBatch($categories);
        $this->db->table('news')->insertBatch($news);
        $this->db->table('contacts')->insertBatch($contacts);
    }
}
