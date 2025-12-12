<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Portfolio;
use App\Models\PortfolioImage;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            [
                'title' => 'E-Commerce Platform for Fashion Retailer',
                'category' => 'E-commerce',
                'description' => 'A fully-featured e-commerce platform with product management, inventory tracking, and payment integration.',
                'objective' => 'Build a scalable online store to handle 10,000+ products and process secure transactions with multiple payment gateways.',
                'show' => true,
                'tags' => ['Laravel', 'MySQL', 'API Integration', 'SaaS'],
                'images' => ['ecommerce-1.jpg', 'ecommerce-2.jpg', 'ecommerce-3.jpg'],
            ],
            [
                'title' => 'Customer Support Dashboard',
                'category' => 'Web Applications',
                'description' => 'Real-time customer support dashboard with ticket management, live chat, and analytics.',
                'objective' => 'Create an internal tool to streamline customer support operations and improve response times.',
                'show' => true,
                'tags' => ['Laravel', 'Filament', 'Dashboard', 'Internal Tool'],
                'images' => ['dashboard-1.jpg', 'dashboard-2.jpg'],
            ],
            [
                'title' => 'Restaurant Management System',
                'category' => 'Web Applications',
                'description' => 'Complete restaurant management solution with order tracking, table reservations, and inventory management.',
                'objective' => 'Digitize restaurant operations to improve efficiency and customer experience.',
                'show' => true,
                'tags' => ['PHP', 'Laravel', 'MySQL', 'Dashboard'],
                'images' => ['restaurant-1.jpg', 'restaurant-2.jpg', 'restaurant-3.jpg'],
            ],
            [
                'title' => 'Marketing Automation Platform',
                'category' => 'Automation & Integrations',
                'description' => 'Automated marketing workflows connecting CRM, email campaigns, and social media platforms.',
                'objective' => 'Integrate multiple marketing tools to automate lead nurturing and campaign management.',
                'show' => true,
                'tags' => ['Make.com', 'API Integration', 'Webhook Automation', 'SaaS'],
                'images' => ['marketing-auto-1.jpg', 'marketing-auto-2.jpg'],
            ],
            [
                'title' => 'Real Estate Listing Portal',
                'category' => 'Websites & CMS',
                'description' => 'Property listing website with advanced search filters, virtual tours, and agent management.',
                'objective' => 'Create a comprehensive real estate platform to connect buyers with properties.',
                'show' => true,
                'tags' => ['Laravel', 'React', 'MySQL', 'API Integration'],
                'images' => ['realestate-1.jpg', 'realestate-2.jpg', 'realestate-3.jpg'],
            ],
            [
                'title' => 'Inventory Tracking API',
                'category' => 'API & Backend Services',
                'description' => 'RESTful API for multi-location inventory management with real-time stock updates.',
                'objective' => 'Provide a robust backend service for managing inventory across multiple warehouses.',
                'show' => true,
                'tags' => ['Laravel', 'PostgreSQL', 'API Integration'],
                'images' => ['inventory-api-1.jpg'],
            ],
            [
                'title' => 'Fitness Tracker Mobile App',
                'category' => 'Mobile Applications',
                'description' => 'Cross-platform mobile app for tracking workouts, nutrition, and fitness goals.',
                'objective' => 'Help users monitor their fitness journey with personalized tracking and analytics.',
                'show' => true,
                'tags' => ['React', 'Node.js', 'API Integration', 'MVP'],
                'images' => ['fitness-1.jpg', 'fitness-2.jpg', 'fitness-3.jpg'],
            ],
            [
                'title' => 'Price Monitoring Bot',
                'category' => 'Web Scraping',
                'description' => 'Automated web scraping solution to monitor competitor prices across multiple e-commerce sites.',
                'objective' => 'Track competitor pricing in real-time to enable dynamic pricing strategies.',
                'show' => true,
                'tags' => ['PHP', 'Web Scraping', 'API Integration'],
                'images' => ['scraper-1.jpg', 'scraper-2.jpg'],
            ],
            [
                'title' => 'Corporate Blog & News Platform',
                'category' => 'Websites & CMS',
                'description' => 'Content management system for corporate blogging with SEO optimization and analytics.',
                'objective' => 'Create a professional blog platform to improve content marketing efforts.',
                'show' => true,
                'tags' => ['WordPress', 'PHP', 'MySQL'],
                'images' => ['blog-1.jpg', 'blog-2.jpg'],
            ],
            [
                'title' => 'Financial Reporting Dashboard',
                'category' => 'Internal Tools',
                'description' => 'Internal financial reporting tool with data visualization and export capabilities.',
                'objective' => 'Consolidate financial data from multiple sources into actionable insights.',
                'show' => true,
                'tags' => ['Laravel', 'Filament', 'Dashboard', 'Reporting'],
                'images' => ['financial-1.jpg', 'financial-2.jpg', 'financial-3.jpg'],
            ],
            [
                'title' => 'SaaS Subscription Platform',
                'category' => 'Web Applications',
                'description' => 'Multi-tenant SaaS platform with subscription billing, user management, and analytics.',
                'objective' => 'Build a scalable SaaS infrastructure to support multiple client organizations.',
                'show' => true,
                'tags' => ['Laravel', 'React', 'PostgreSQL', 'SaaS'],
                'images' => ['saas-1.jpg', 'saas-2.jpg', 'saas-3.jpg', 'saas-4.jpg'],
            ],
            [
                'title' => 'Event Management System',
                'category' => 'Web Applications',
                'description' => 'Complete event management solution with ticketing, attendee tracking, and check-in system.',
                'objective' => 'Streamline event organization from registration to post-event analytics.',
                'show' => true,
                'tags' => ['Laravel', 'MySQL', 'API Integration', 'Dashboard'],
                'images' => ['event-1.jpg', 'event-2.jpg'],
            ],
            [
                'title' => 'Lead Generation Landing Page',
                'category' => 'Landing Pages',
                'description' => 'High-converting landing page with A/B testing and integrated lead capture forms.',
                'objective' => 'Maximize conversion rates for digital marketing campaigns.',
                'show' => true,
                'tags' => ['React', 'Next.js', 'API Integration'],
                'images' => ['landing-1.jpg', 'landing-2.jpg'],
            ],
            [
                'title' => 'Workflow Automation Suite',
                'category' => 'Automation & Integrations',
                'description' => 'Custom workflow automation connecting Google Workspace, Slack, and project management tools.',
                'objective' => 'Eliminate manual tasks and improve team productivity through automation.',
                'show' => true,
                'tags' => ['Zapier', 'n8n', 'API Integration', 'Webhook Automation'],
                'images' => ['workflow-1.jpg', 'workflow-2.jpg'],
            ],
            [
                'title' => 'Online Course Platform',
                'category' => 'E-commerce',
                'description' => 'Learning management system with video hosting, progress tracking, and certification.',
                'objective' => 'Provide an engaging online learning experience with comprehensive course management.',
                'show' => true,
                'tags' => ['Laravel', 'React', 'MySQL', 'SaaS'],
                'images' => ['course-1.jpg', 'course-2.jpg', 'course-3.jpg'],
            ],
            [
                'title' => 'Job Board Platform',
                'category' => 'Websites & CMS',
                'description' => 'Job listing platform with applicant tracking, resume parsing, and employer dashboard.',
                'objective' => 'Connect job seekers with employers through an efficient hiring platform.',
                'show' => true,
                'tags' => ['Laravel', 'Filament', 'MySQL', 'Dashboard'],
                'images' => ['job-board-1.jpg', 'job-board-2.jpg'],
            ],
            [
                'title' => 'Social Media Analytics Tool',
                'category' => 'Web Applications',
                'description' => 'Analytics dashboard aggregating data from multiple social media platforms.',
                'objective' => 'Provide unified social media insights to inform marketing strategies.',
                'show' => true,
                'tags' => ['Laravel', 'React', 'API Integration', 'Dashboard', 'Reporting'],
                'images' => ['social-analytics-1.jpg', 'social-analytics-2.jpg', 'social-analytics-3.jpg'],
            ],
            [
                'title' => 'Shopify Store with Custom Theme',
                'category' => 'E-commerce',
                'description' => 'Custom Shopify store with bespoke theme design and third-party app integrations.',
                'objective' => 'Create a unique brand experience with optimized conversion paths.',
                'show' => true,
                'tags' => ['Shopify', 'API Integration'],
                'images' => ['shopify-1.jpg', 'shopify-2.jpg'],
            ],
            [
                'title' => 'Data Extraction Pipeline',
                'category' => 'Web Scraping',
                'description' => 'Automated data extraction system collecting market intelligence from various sources.',
                'objective' => 'Gather competitive intelligence through systematic data collection and analysis.',
                'show' => true,
                'tags' => ['PHP', 'Web Scraping', 'API Integration', 'Internal Tool'],
                'images' => ['data-extract-1.jpg'],
            ],
            [
                'title' => 'Project Management Dashboard',
                'category' => 'Internal Tools',
                'description' => 'Custom project management tool with task tracking, team collaboration, and reporting.',
                'objective' => 'Centralize project tracking and improve team coordination.',
                'show' => false,
                'tags' => ['Laravel', 'Filament', 'Dashboard', 'Internal Tool', 'Reporting'],
                'images' => ['pm-dashboard-1.jpg', 'pm-dashboard-2.jpg', 'pm-dashboard-3.jpg'],
            ],
        ];

        foreach ($portfolios as $portfolioData) {
            // Get the category
            $category = Category::where('name', $portfolioData['category'])->first();

            if (!$category) {
                continue;
            }

            // Create the portfolio
            $portfolio = Portfolio::create([
                'title' => $portfolioData['title'],
                'category_id' => $category->id,
                'description' => $portfolioData['description'],
                'objective' => $portfolioData['objective'],
                'show' => $portfolioData['show'],
            ]);

            // Attach tags
            $tagNames = $portfolioData['tags'];
            $tags = Tag::whereIn('name', $tagNames)->get();
            $portfolio->tags()->attach($tags->pluck('id'));

            // Create portfolio images
            foreach ($portfolioData['images'] as $index => $imagePath) {
                PortfolioImage::create([
                    'portfolio_id' => $portfolio->id,
                    'image_path' => 'portfolios/' . $imagePath,
                    'is_cover' => $index === 0, // First image is the cover
                    'order' => $index + 1,
                ]);
            }
        }
    }
}
