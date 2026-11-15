<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        // Insert Projects (without timestamps if your table doesn't have them)
        Project::insert([
            [
                'title' => 'NutriTrack',
                'description' => 'Developed a web-based nutritional tracker for daycare students utilizing data visualization and predictive analytics via Multiple Linear Regression. Architected relational database schemas in PostgreSQL and generated predictive health models to ensure data precision, analytical integrity, and reliable user reporting.',
                'tech_stack' => 'Laravel | PostgreSQL | JavaScript | JSCharts | Bootstrap',
                'image' => 'images/projects/project.png',
            ],
            [
                'title' => 'Attendance Management System',
                'description' => 'Developed a desktop Attendance Management System is a software solution designed to automate and streamline the process of tracking and recording employee attendance. It helps organizations maintain accurate attendance records in real-time, reducing manual errors and administrative workload.',
                'tech_stack' => 'C# | VB.NET | MySQL',
                'image' => 'images/projects/project1.0.png',
            ],
            [
                'title' => 'Boadding House',
                'description' => 'Developed an mobile application for boarding house management, enabling efficient room allocation, tenant tracking, and payment processing. The app provides a user-friendly interface for both landlords and tenants, enhancing communication and operational efficiency.',
                'tech_stack' => 'Flutter | Firebase ',
                'image' => 'images/projects/project2.png',
            ],
          
        ]);

        // Insert Certificates (keeping timestamps since your certificate block included them)
        DB::table('certificates')->insert([
            [
                'title' => 'Databases',
                'description' => 'Certified IT Specialist in Databases, verifying skills in database management, SQL, and data integrity.',
                'issuer' => 'Certiport / Pearson VUE',
                'image' => 'images/certificates/Database.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Network Security',
                'description' => 'Certified IT Specialist in Network Security, focusing on safeguarding network infrastructures.',
                'issuer' => 'Certiport / Pearson VUE',
                'image' => 'images/certificates/Networking.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cybersecurity',
                'description' => 'Certified IT Specialist in Cybersecurity, covering threat analysis, security controls, and defense strategies.',
                'issuer' => 'Certiport / Pearson VUE',
                'image' => 'images/certificates/CyberSecurity.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'HTML and CSS',
                'description' => 'Certified IT Specialist in HTML and CSS, validating core web development and structural design principles.',
                'issuer' => 'Certiport / Pearson VUE',
                'image' => 'images/certificates/HTML.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
